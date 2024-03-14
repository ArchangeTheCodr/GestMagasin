<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panier;
use App\Models\Article;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('panier_item', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Panier::class)->constrained();
            $table->foreignIdFor(Article::class)->constrained();
            $table->integer('quantity')->default(1);
            $table->double('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panier_item');
    }
};
