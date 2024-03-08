@extends('layout.base')

@section('title')
    <title>Article home</title>
@endsection

@section('content')

    <div class="d-flex justify-content-between mb-3">
        <h1>Tous les articles de la categorie {{ $category->name }}</h1>
    </div>

    <div>
        <div class="row">
            @forelse ($category->article as $article)
                @include('layout.article_card')
            @empty
                <h2>Cette categorie ne contient aucun article pour l'instant</h2>
            @endforelse
        </div>
    </div>
@endsection