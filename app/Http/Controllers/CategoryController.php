<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('category.index', [
            'categories' => Category::all()
        ]);
    }

    public function create(){
        return view('category.create');
    }

    public function show($id){
        $category = Category::find($id);
        return view('category.show', [
            'category' => $category
        ]);
    }

    public function store(CategoryRequest $request){
        Category::create($request->validated());
        return redirect()->route('category.index')->with('create', 'Categorie creer avec succes');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('category.edit', [
            'category' => $category
        ]);
    }

    public function update(CategoryRequest $request, $id){ 
        $category = Category::find($id);
        $category->update($request->validated());
        $category->save();
        return redirect()->route('category.index')->with('update', 'Categorie modifier avec succes');
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('delete', 'Categorie Supprimer avec succes');
    }
}
