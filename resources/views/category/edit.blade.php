@extends('category.form')

@section('title')
    <title>Categorie | Modification</title>
@endsection

@section('method')
    @method('PATCH')
@endsection

@section('libelle')
    <h1>Modifier une categorie</h1>
@endsection

@section('nameInput')
    <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
@endsection
