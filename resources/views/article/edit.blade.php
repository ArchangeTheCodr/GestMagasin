@extends('article.form')

@section('title')
    <title>Article | Modification</title>
@endsection

@section('libelle')
    <h1>Modifier un article</h1>
@endsection

@section('method')
    @method('PATCH')
@endsection

@section('nameInput')
    <input type="text" name="name" class="form-control" value="{{ $article->name }}">
@endsection

@section('descriptionInput')
    <textarea class="form-control" rows="3" name="description">{{ $article->description }}</textarea>
@endsection


@section('image_uriInput')
    <input type="file" name="image_uri" id="" class="form-control">
@endsection

@section('categorySelect')
    <select name="category_id" id="" class="form-select">
            @foreach($categories as  $category)
                @if ($category->name == $article->category->name)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif   
        @endforeach
    </select>
@endsection