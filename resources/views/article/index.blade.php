@extends('layout.base')

@section('title')
    <title>Article home</title>
@endsection

@section('content')
    @if(session('create'))
        <div class="alert alert-success">
            {{ session('create') }}
        </div>
    @endif
    @if(session('update'))
        <div class="alert alert-success">
            {{ session('update') }}
        </div>
    @endif
    @if(session('delete'))
        <div class="alert alert-success">
            {{ session('delete') }}
        </div>
    @endif

    <div class="d-flex justify-content-between mb-3">
        <h1>Tous les articles</h1>
        <a href="{{ route('article.create') }}" class="btn btn-primary my-2">Nouvelle article</a>
    </div>
    <div>
        
            <div class="row">
                @foreach ($articles as $article)
                    @include('layout.article_card')
                @endforeach
            </div>
        
    </div>
@endsection