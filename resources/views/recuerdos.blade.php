@extends('plantilla')
@section('contenido')
    @include('modalactualizar')
    @include('modaleliminar')

    <br>

    @foreach ($resultRec as $consulta)
        <div class="container col-md-6">

            <div class="card-header text-center fs-4 fw-bolder text-success">
                {{ $consulta->fecha }}
            </div>

            <div class="card-body">
                Titulo: {{ $consulta->titulo }}
                <br>
                Recuerdo: {{ $consulta->recuerdo }}
            </div>

            <div class="card-footer ">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Actualizar
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target='#ModalEliminar{{ $consulta->idRecuerdo }}'>
                    Eliminar
                </button>

            </div>

        </div>
        <br>
    @endforeach

@stop
