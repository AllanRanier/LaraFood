@extends('adminlte::page')

@section('title,', 'Permissões')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="" href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a class="active" href="{{ route('permissions.index') }}">Permissões</a></li>
    </ol>
    <h1>Permissões <a href="{{ route('permissions.create') }}" class="btn btn-dark"><i class="fas fa-user-plus"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('permissions.search') }}" method="post" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Nome" class="form-control"
                    value="{{ $filters['filter'] ?? '' }}">
                <button type="submit" class="btn btn-dark">Filtrar</button>
            </form>
        </div>
        <div class="card-body">
            @include('admin.includes.alerts')
            <table class="table table-condensed">
                <thead>
                    <th>Nome</th>
                    <th width="50">Ações</th>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->name }}</td>
                            <td style="white-space: nowrap">
                                <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-info"><i class="fas fa-user-edit"></i></a>
                                <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $permissions->appends($filters)->links() !!}

            @else
                {!! $permissions->links() !!}
            @endif
        </div>
    </div>
@stop
