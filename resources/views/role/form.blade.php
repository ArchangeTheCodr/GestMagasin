
<div>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    @yield('title')
</head>
<body>
    <div>
        @yield('libelle')
        <div class="row">
            <div class="col-4">
                <form action="" method="post">

                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Intitule du role</label>
                        @yield('nameInput')
                        @if ($errors->any())
                            <div class="alert alert-danger mt-1">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <input type="submit" class="btn btn-primary my-2" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>    