<?php

namespace App\Http\Controllers;

use App\Enums\StoreStatus;
use App\Http\Requests\StoreRequest;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores = Store::query()
        ->where('status', StoreStatus::ACTIVE)
        ->latest()
        ->get();
        return view('stores.index', [
            'stores' => $stores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stores.form', [
            'store' => new Store(),
            'page_meta' => [
                'title' => 'Create a store',
                'description' => 'Create new store',
                'method' => 'POST',
                'url' => route('stores.store'),
                'button_text' => 'Submit',
            ]
        ]);

        return view('stores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $file = $request->file('logo');
        $request->user()->stores()->create([
            ...$request->validated(), 
            ...['logo' => $file->store('images/stores')]
        ]);
        return to_route('stores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        Gate::authorize('update', $store);
        return view('stores.form', [
            'store' => $store,
            'page_meta' => [
                'title' => 'Edit Store',
                'description' => 'Edit store: ' . $store->name,
                'method' => 'PUT',
                'url' => route('stores.update', $store),
                'button_text' => 'Update Store',
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, Store $store)
    {
        if($request->hasFile('logo')) {
            Storage::delete($store->logo);
            $file = $request->file('logo');
        } else {
            $file = $store->logo;
        }
        $store->update([
            ...$request->validated(), 
            ...['logo' => $file->store('images/stores')]
        ]); 
        return to_route('stores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        //
    }
}