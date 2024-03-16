<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Category;
use Illuminate\Http\Request;
use Schema;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles = Articles::all();
        return view('article', compact('articles'));
    }


    public function makeNew()
    {
        return view('create_articles');
    }

    public function editArticle($id)
    {
        $article = Articles::findOrFail($id);
        $categories = Category::all();
        return view('update_articles', compact('article', 'categories'));
    }


    public function create(Request $request)
    {
        $article = new Articles();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->author = $request->author;
        $article->category_id = $request->category_id;
        $article->save();
        return redirect()->route('article')->with('success', 'Registro Creado');
    }

    public function edit(Request $request, $id)
    {
        $article = Articles::find($id);
        $article->update(
            $request->all()
        );
        return redirect()->route('article')->with('success', 'Se ha actualizado el registro');
    }

    public function delete($id)
    {
        $article = Articles::find($id);
        $article->delete();
        return redirect()->route('article')->with('success', 'Se ha eliminado el registro');
    }
}
