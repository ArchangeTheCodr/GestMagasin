@extends('layouts.base')

@section('title')
    <title>Role</title>
@endsection

@section('content')
    @include('partials.alert_action')

    <div class="d-flex justify-content-between my-3">
        <h1>Tous les roles</h1>
        <a href="{{ route('role.create') }}" class="btn btn-primary my-2">Nouveau role</a>
    </div>
    
    <table class="table mt-3">
        <thead>
            <th>#</th>
            <td><strong>role</strong></td>
            <td colspan="2" class="text-center"><strong>Options</strong></td>
        </thead>
        <tbody>
            @forelse($roles as $role)
                <tr>
                    <th>{{ $role->id }}</th>
                    
                    <td> 
                        <a href="{{ route('role.show', ['role' => $role]) }}" class="">{{ $role->name }}</a>
                    </td>
                    <td class="text-center" >
                        <a href="{{ route('role.edit', ['role' => $role]) }}" class="btn btn-secondary">Modifier</a>
                    </td>
                    <td class="text-center" >
                        <form action="{{ route('role.destroy', ['role' => $role]) }}" method="post">
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Supprimer">
                        </form> 
                    </td>
                </tr>
            @empty
                <h4>Aucun role pour l'instant</h4>
            @endforelse
        </tbody>
    </table>
@endsection