@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Pedidos</h1>
@stop

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">{{ __('Mostrar') }} pedido</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> {{ __('Regresar') }}</a>
                    </div>
                </div>

                <div class="card-body">
                    
                    <div class="form-group">
                        <strong>Cliente:</strong>
                        {{ $pedido->cliente_id }}
                    </div>
                    <div class="form-group">
                        <strong>Fecha Pedido:</strong>
                        {{ $pedido->fecha_pedido }}
                    </div>
                    <div class="form-group">
                        <strong>Total:</strong>
                        ${{ $pedido->total }}
                    </div>
                    {{-- <div class="form-group">
                        <strong>Estado:</strong>
                        {{ $pedido->estado }}
                    </div> --}}
                    <div class="form-group">
                        <strong>Estado:</strong>
                        @if($pedido->estado == 0)
                            <span class="badge badge-danger">Cancelado</span>
                        @else
                            {{ $pedido->estado }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
    