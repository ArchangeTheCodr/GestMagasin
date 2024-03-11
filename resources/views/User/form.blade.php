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
    <div class="container">
        <div class="row mt-4"> 
            <div class="col-md-4 offset-md-4">
                @yield('libelle')
                <form action="" method="POST">
                    @csrf
                    @yield('method')

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        @yield('nameInput')
                    </div>

                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      @yield('emailInput')
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">New password</label>
                        @yield('passwordInput')
                    </div>

                    <div class="mb-3">
                        <label for="role_id" class="form-label">Role</label>
                        @yield('roleSelect')
                    </div>

                    @if ($errors->any())
                    <div class="alert alert-danger mt-1">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>