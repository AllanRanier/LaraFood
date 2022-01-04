@extends('adminlte::page')

@section('title,', "Editar a permissão {$permission->name}")

@section('content_header')
    <h1>Editar a Permissão {{ $permission->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('permissions.update', $permission->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.pages.permission._partials.form')
            </form>
        </div>
    </div>
@endsection
