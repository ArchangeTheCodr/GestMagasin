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
    

<div class="row my-4">
    <div class="col-md-4 offset-md-4">
        @yield('libelle')
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            @yield('method')

            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                @yield('nameInput')
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                @yield('descriptionInput')
            </div>

            <div class="mb-3">
                <label for="image_uri" class="form-label">Image</label>
                @yield('image_uriInput')
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Categorie</label>
                @yield('categorySelect')
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
            <input type="submit" class="btn btn-primary" value="Enregistrer">
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-dZJB7D/Z3cdXKGbRRkS4NwbV2Vs/uU+PvKlHx2JdM7HtDYs5Ic4JM6dTBi2mkWa2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-jCEXfdJ0b+Kd/FF2yjFD2N/l2GWDC5B/Qfww50HqXDeqiQe6vSk7y1o+qB4ybM2X" crossorigin="anonymous"></script>

</body>
</html>
