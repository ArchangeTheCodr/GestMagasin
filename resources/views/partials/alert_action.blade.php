@if(session('create'))
    <div class="alert alert-success">
        {{ session('create') }}
    </div>
@endif
@if(session('update'))
    <div class="alert alert-success">
        {{ session('update') }}
    </div>
@endif
@if(session('delete'))
    <div class="alert alert-success">
        {{ session('delete') }}
    </div>
@endif