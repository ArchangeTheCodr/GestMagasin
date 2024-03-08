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
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary col-4" style="width: 280px;">

                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <span class="fs-4">Sidebar</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : 'link-body-emphasis' }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('category.index') }}" class="nav-link {{ Request::is('category') ? 'active' : 'link-body-emphasis' }}">Categories</a>
                    </li>
                    <li>
                        <a href="{{ route('article.index') }}" class="nav-link {{ Request::is('article') ? 'active' : 'link-body-emphasis' }}">Articles</a>
                    </li></li>
                </ul>
            </div>

            <div class="col-8 mt-5">
                @yield('content')
            </div>
        </div>
        
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>