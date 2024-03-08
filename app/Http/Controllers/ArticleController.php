<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index(){
        return view('article.index', [
            'articles' => Article::all()
        ]);
    }

    public function create(){
        return view('article.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(ArticleRequest $request){
        $article = Article::create($request->validated());
        $image = $request->file('image_uri');
        $path = $image->store('public/images/article');
        $article->image_uri = $path;
        $article->save();
        
        return redirect()->route('article.index')->with('create', 'Article creer avec succes');
    }

    public function edit($id){
        return view('article.edit', [
            'article' => Article::find($id),
            'categories' => Category::all()
        ]);
    }

    public function update(ArticleRequest $request, $id){
        $article = Article::findOrFail($id);

        // Suppression de l'ancienne image
        Storage::delete($article->image_uri);

        $article->update($request->validated());

        // Stocker la nouvelle image
        $image = $request->file('image_uri');
        $path = $image->store('public/images/article');
        $article->image_uri = $path;
        $article->save();
        return redirect()->route('article.index')->with('update', 'Article modifier avec succes');
    }

    public function destroy($id){
        $article = Article::find($id);
        $article->delete();
        return back()->with('delete', 'Article supprimer avec succes');
    }

}
