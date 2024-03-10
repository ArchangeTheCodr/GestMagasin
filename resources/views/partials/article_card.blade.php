<div class="col-4 my-2">
    <div class="card">
        <div class="card-img-top border-bottom">
            <img src="{{ $article->getImageUrl() }}" alt="{{ $article->name }}" class="img-fluid" >
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $article->name }}</h5>
            <p class="card-text"> {{ $article->description }}</p>
            <div class="d-flex justify-content-start">
                <a href="{{ route('article.edit', ['id' => $article->id]) }}" class="btn btn-secondary mx-2">Modifier</a>
                <form action="{{ route('article.destroy', ['id' => $article->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Supprimer">
                </form> 
            </div>
            
        </div>
    </div>
</div>