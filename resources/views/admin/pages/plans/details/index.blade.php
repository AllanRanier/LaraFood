@extends('adminlte::page')

@section('title,', "Detalhes do plano {$plan->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url ) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item"><a class="active" href="{{ route('details.plans.index', $plan->id) }}">Detalhes</a></li>
    </ol>
    <h1>Adicionar novo detalhe ao plano {{ $plan->name }} <a href="{{ route('details.plans.create', $plan->url) }}" class="btn btn-dark"><i class="fas fa-user-plus"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('plans.search') }}" method="post" class="form form-inline">
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
                    @foreach ($details as $detail)
                        <tr>
                            <td>{{ $detail->name }}</td>
                            <td style="white-space: nowrap">
                                <a href="{{ route('details.plans.edit', [$plan->url, $detail->id]) }}" class="btn btn-info"><i class="fas fa-user-edit"></i></a>
                                <a href="{{ route('details.plans.show', [$plan->url, $detail->id]) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $details->appends($filters)->links() !!}

            @else
                {!! $details->links() !!}
            @endif
        </div>
    </div>
@stop
