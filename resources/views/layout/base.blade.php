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
        <header class="d-flex justify-content-center py-3 shadow mb-4">
            <ul class="nav nav-pills">
                <li class="nav-item m-1"><a href="{{ route('category.index') }}" class="nav-link" aria-current="page">Categories</a></li>
                <li class="nav-item m-1"><a href="{{ route('article.index') }}" class="nav-link">Articles</a></li>
            </ul>
        </header>
    </div>
    
    <div class="container pt-2">
        @yield('content')
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>