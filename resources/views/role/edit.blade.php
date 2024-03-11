@extends('role.form')

@section('title')
    <title>Role | Modification</title>
@endsection

@section('libelle')
    <h1>Modifier un role</h1>
@endsection

@section('nameInput')
    <input type="text" class="form-control" id="name" name="name" value="{{$role->name}}">
@endsection
