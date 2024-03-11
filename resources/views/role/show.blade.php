@extends('layouts.base')

@section('title')
    <title>Role {{ $role->name }}</title>
@endsection

@section('content')

    <div class="d-flex justify-content-between mb-3">
        <h1>Tous les utilsateurs de role {{ $role->name }}</h1>
    </div>

    <div>
        <div class="row">
            <table class="table mt-3">
                <thead>
                    <th>#</th>
                    <td><strong>Nom</strong></td>
                    <td><strong>E-mail</strong></td>
                    <td colspan="2" class="text-center"><strong>Options</strong></td>
                </thead>
                <tbody>
                    @foreach ($role->users as $user)
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
        </div>
    </div>
@endsection