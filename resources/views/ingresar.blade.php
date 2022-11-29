@extends('plantilla')
@section('contenido')

@if (session()->has('confirmacion'))
    {!! "<script>Swal.fire(
        'Correcto',
        'Recuerdo se guardo',
        'success'
    )</script>" !!}
@endif

<div class="container col-md-6">
    <h1 class="display-4 text-center mt-4 mb-5">Ingresar</h1>


    {{-- @if($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ $error }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endforeach
    @endif --}}

    <div class="card text-center mb-5">

        <div class="card-header">
            Querido diarios
        </div>

        <div class="card-body">
            <form method="POST" action="{{route('recuerdo.store')}}">
                @csrf
                <div class="dmb-3">
                    <label class="form-label">Titulo:</label>
                    <input type="text" class="form-control" name="txtTitulo">
                    <p class="text-danger fst-italic">   {{$errors->first('txtTitulo')}} </p>
                </div>
                <div>
                    <label class="form-label">Recuerdos:</label>
                    <input type="text" class="form-control mg-4" name="txtRecuerdo">
                    <p class="text-danger fst-italic">  {{$errors->first('txtRecuerdo')}}</p>
                </div>
        </div>
        <div class="card-footer ">
            <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>

@stop