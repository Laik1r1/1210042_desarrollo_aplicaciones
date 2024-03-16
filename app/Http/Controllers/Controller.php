<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function landingpage()
    {
        $articles = Articles::all();
        return view('landing.landingpage', compact('articles'));
    }

    public function viewMore($id)
    {
        $article = Articles::findOrFail($id);
        return view();
    }
}
