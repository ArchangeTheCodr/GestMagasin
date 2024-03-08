@extends('article.form')

@section('title')
    <title>Article | creation</title>
@endsection

@section('libelle')
    <h1>Creer un article</h1>
@endsection

@section('nameInput')
    <input type="text" name="name" class="form-control">
@endsection

@section('descriptionInput')
    <textarea class="form-control" rows="3" name="description"></textarea>
@endsection


@section('image_uriInput')
    <input type="file" name="image_uri" id="" class="form-control">
@endsection

@section('categorySelect')    
    <select name="category_id" id="" class="form-select">
        @foreach($categories as  $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
@endsection