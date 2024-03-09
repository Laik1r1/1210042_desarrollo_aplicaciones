<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Articles;

class ArticleApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Articles::all(),
        ]);
    }

    public function show($id){
        return response()->json([
            'success' => true,
            'data' => Articles::find($id),
        ]);
    }
}
