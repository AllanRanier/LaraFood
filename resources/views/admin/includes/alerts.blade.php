@if ($erros->any())
    <div class="alert alert-danger">
        @foreach ($erros->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
