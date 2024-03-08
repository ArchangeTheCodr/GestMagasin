<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Connexion</title>
</head>
<body>
    <div class="container">
        <div class="row mt-4"> 
            <div class="col-md-4 offset-md-4">
                <h1>Connexion</h1>
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>


                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Se souvenir de moi</label>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>