@extends('adminlte::page')

@section('title,', "Detalhe do detalhe{$detail->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url ) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('details.plans.index', $plan->url) }}">Detalhes</a></li>
        <li class="breadcrumb-item"><a class="active" href="{{ route('details.plans.create', $plan->url) }}">Detalhe</a></li>
    </ol>
    <h1>Detalhe do detalhe {{ $detail->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome:</strong> {{ $detail->name }}
                </li>
            </ul>
        </div>
        <div class="card-footer">
            <form action="{{ route('details.plans.destroy', [$plan->url, $detail->id]) }}" method="post">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
            </form>
        </div>
    </div>
@endsection
