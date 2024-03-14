<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .cool-bg{
            background-color: #12bc99
        }
    </style>
    <title>Ventes</title>
</head>
<body>
    <div class="container">
        <div>
            <a href="{{ route('panier.create') }}" class="btn btn-primary">Nouvelle vente</a>
        </div>
        <h3>HISTORIQUE DES VENTES</h3>
        <div class="card">
            <div class="card-body">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>DATE</th>
                            <th>CAISSIER</th>
                            <th>QUANTITE</th>
                            <th>TOTAL</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($paniers as $panier)
                            <tr>
                                <td>{{ $panier->created_at->format('d/m/Y')}}</td>
                                <td>{{ $panier->user?$panier->user->name:'-' }}</td>
                                <td>{{ $panier->quantity }}</td>
                                <td>{{ $panier->total }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>