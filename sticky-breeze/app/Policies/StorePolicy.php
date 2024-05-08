<?php

namespace App\Policies;

use App\Models\Store;
use App\Models\User;
//use Illuminate\Auth\Access\Response;

class StorePolicy
{
    /**
     * Create a new policy instance.
     */
    public function update(User $user, Store $store): bool
    {
        return $user->id === $store->user_id;
    }

    public function destroy(User $user, Store $store): bool
    {
        return $this->update($user, $store);
    }

    /**
     * Return to 404 page
     */
    // public function update(User $user, Store $store): Response
    // {
    //     return $user->id === $store->user_id ? Response::allow() : Response::denyAsNotFound();
    // }
}
