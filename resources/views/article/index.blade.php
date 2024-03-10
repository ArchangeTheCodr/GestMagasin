@extends('layout.base')

@section('title')
    <title>Article home</title>
@endsection

@section('content')
    @include('partials.alert_action')


    <div class="d-flex justify-content-between mb-3">
        <h1>Tous les articles</h1>
        <a href="{{ route('article.create') }}" class="btn btn-primary my-2">Nouvelle article</a>
    </div>
    <div>
        
            <div class="row">
                @foreach ($articles as $article)
                    @include('partials.article_card')
                @endforeach
            </div>
        
    </div>
@endsection