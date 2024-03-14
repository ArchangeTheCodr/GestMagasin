<?php

namespace App\Http\Controllers;
use App\Models\Panier;
use App\Models\PanierItem;
use App\Models\Article;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function index(){
        $paniers = Panier::all();
        return view('panier.index', compact('paniers'));
    }

    public function create(){
        return view('panier.create', [
            'articles' => Article::all()
        ]);
    }

    public function store(Request $request){
        $items = $request->_items;
        $panier = Panier::create([
            'user_id'=>1
        ]);

        foreach($items as $item){
            PanierItem::create([
                'panier_id'=>$panier->id,
                'article_id'=>$item['id'],
                'quantity'=>$item['qty'],
                'price'=>rand(10,50)*100,
            ]);
        }

        return response()->json($panier);
    }
}
