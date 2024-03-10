@extends('layout.base')

@section('title')
    <title>Utilisateur</title>    
@endsection

@section('content')   
    @include('partials.alert_action')

    <div class="d-flex justify-content-between my-3">
        <h1>Tous les utilisateurs</h1>
        <a href="{{ route('user.create') }}" class="btn btn-primary my-2">Nouvelle utilisateur</a>
    </div>
    
    <table class="table mt-3">
        <thead>
            <th>#</th>
            <td><strong>Nom</strong></td>
            <td><strong>E-mail</strong></td>
            <td colspan="2" class="text-center"><strong>Options</strong></td>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <td> 
                        <a href="" class="">{{ $user->name }}</a>
                    </td>
                    <td> 
                        {{ $user->email }}
                    </td>
                    <td class="text-center" >
                        <a href="{{ route('user.edit', ['user' => $user]) }}" class="btn btn-secondary">Modifier</a>
                    </td>
                    <td class="text-center" >
                        <form action="{{ route('user.destroy', ['id' => $user->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Supprimer">
                        </form> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection