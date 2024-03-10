@extends('User.form')

@section('title')
    <title>Mise a jour des informations</title>   
@endsection

@section('libelle')
    <h1>Modifier un utilisateur</h1>
@endsection

@section('method')
    @method('PATCH')
@endsection

@section('nameInput')
    <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}">
@endsection

@section('emailInput')
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{ $user->email }}">
@endsection

@section('passwordInput')
    <input type="password" name="password" class="form-control" id="password">
@endsection