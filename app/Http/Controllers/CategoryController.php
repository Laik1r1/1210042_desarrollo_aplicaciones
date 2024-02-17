<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category', compact('categories'));
    }
    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('update_categories', compact('category'));
    }
    public function edit(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update(
            $request->all()
        );
        return redirect()->route('categoryIndex')->with('success', 'Se ha actualizado el registro');
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categoryIndex')->with('success', 'Se ha eliminado el registro');
    }
    public function create(Request $request){

        $request->validate([
            'name' => 'required|string|max:120',
            'description' => 'string|max:120'
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->route('categoryIndex')->with('success', 'Se ha creado el registro');
    }

    public function makeNew(){
        return view('create_categories');
    }
}
