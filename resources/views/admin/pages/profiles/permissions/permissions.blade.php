@extends('adminlte::page')

@section('title,', 'Permission do perfil {$profile->name}')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="" href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a class="active" href="{{ route('profiles.index') }}">Perfis</a></li>
    </ol>
    <h1>Permission do perfil {{$profile->name}} <a href="{{ route('profiles.create') }}" class="btn btn-dark"><i class="fas fa-user-lock"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('profiles.search') }}" method="post" class="form form-inline">
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
                            {{ dd($permission) }}
                            {{-- <td>{{ $permission['name'] }}</td> --}}
                            <td style="white-space: nowrap">
                                {{-- <a href="{{ route('profiles.edit', $permission->id) }}" class="btn btn-info"><i class="fas fa-user-edit"></i></a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{-- @if (isset($filters))
                {!! $permissions->appends($filters)->links() !!}

            @else
                {!! $permissions->links() !!}
            @endif --}}
        </div>
    </div>
@stop
