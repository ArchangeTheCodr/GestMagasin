@extends('layouts.base')

@section('title')
    <title>Categorie home</title>
@endsection

@section('content')
    @include('partials.alert_action')

    <div class="d-flex justify-content-between my-3">
        <h1>Toutes les categories</h1>
        <a href="{{ route('category.create') }}" class="btn btn-primary my-2">Nouvelle categorie</a>
    </div>
    
    <table class="table mt-3">
        <thead>
            <th>#</th>
            <td><strong>Categorie</strong></td>
            <td colspan="2" class="text-center"><strong>Options</strong></td>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th>{{ $category->id }}</th>
                    
                    <td> 
                        <a href="{{ route('category.show', ['id' => $category->id]) }}" class="">{{ $category->name }}</a>
                    </td>
                    <td class="text-center" >
                        <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-secondary">Modifier</a>
                    </td>
                    <td class="text-center" >
                        <form action="{{ route('category.destroy', ['id' => $category->id]) }}" method="post">
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