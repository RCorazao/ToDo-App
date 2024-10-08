<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index() {
        $tags = Tag::all();

        return response()->json([
            'success'    => true,
            'data'       => $tags,
        ], 201);
    }
}
