<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanierItem extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function panier(){
        return $this->belongsTo(Panier::class);
    }

    public function article(){
        return $this->belongdTo(Article::class);
    }

}
