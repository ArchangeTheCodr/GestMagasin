<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperCategorie
 */

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function article(){
        return $this->hasMany(Article::class);
    }

}