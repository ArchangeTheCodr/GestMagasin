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
    <header>
       <div class="container-fluid mb-5 shadow cool-bg">
            <div class="row d-flex justify-content-around">
                    <div class="col-3 mb-3 mt-2">
                        <label for="article" class="form-label"><strong>articles</strong></label>
                        <select name="article" id="articleSelect" class="form-control">
                            @foreach($articles as $article)
                                <option value="{{$article->id}}">{{ $article->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-3 mb-3 mt-2">
                        <label for="quantity" class="form-label"><strong>Quantite</strong></label>
                        <input type="number" class="form-control" id="quantityInput"  name="quantity">
                    </div>
                    <div class="col-3 mb-3 mt-4">
                        <button type="submit" class="btn btn-light" id="btn-valider" >Ajouter au panier</button>
                    </div>
            </div>
       </div>
    </header>

    <div class="container-fluid  mt-5">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">Désignation</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Prix unitaire</th>
                        <th scope="col">Prix total</th>
                        </tr>
                    </thead>
                    <tbody id="tb"></tbody>
                </table>
            </div>
        </div>
        <div class="">
            <button id="btn-enregistrer" class="btn btn-dark">
                Enregister
            </button>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>