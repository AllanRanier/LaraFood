@extends('adminlte::page')

@section('title,', 'Cadastrar Nova Permissões')

@section('content_header')
    <h1>Permissões</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('permissions.store') }}" class="form" method="POST">
                @csrf

                @include('admin.pages.permission._partials.form')
            </form>
        </div>
    </div>
@endsection
