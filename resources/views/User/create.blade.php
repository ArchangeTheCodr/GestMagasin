@extends('User.form')

@section('title')
    <title>Creation d'un utilisateur</title>   
@endsection

@section('libelle')
    <h1>Creation d'un utilisateur</h1>
@endsection

@section('nameInput')
    <input type="text" name="name" class="form-control" id="name" >
@endsection

@section('emailInput')
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
@endsection

@section('passwordInput')
    <input type="password" name="password" class="form-control" id="password">
@endsection