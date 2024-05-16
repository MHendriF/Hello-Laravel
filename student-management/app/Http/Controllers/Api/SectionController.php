<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ListSectionsRequest;
use App\Http\Resources\SectionResource;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function __invoke(ListSectionsRequest $request)
    {
        $sections =  Section::where('class_id', $request->class_id)->get();
        return SectionResource::collection($sections);
    }
}
