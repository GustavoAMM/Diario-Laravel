

<!-- Modal -->
@foreach ($resultRec as $consulta)
<div class="modal fade" id="ModalEliminar{{$consulta->idRecuerdo}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminar{{$consulta->idRecuerdo}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Eliminar Recuerdo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <h6>Titulo:</h6>{{$consulta->titulo}}
       <br><br>
       <h6>Recuerdo:</h6>{{$consulta->recuerdo}}
      </div>
      <div class="card-footer d-flex">
        <a href="{{ route('recuerdo.index') }}" class="btn btn-primary">Regresar</a>
        <form action="{{route('recuerdo.delete',$consulta->idRecuerdo)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form><br>
    </div>
    </div>
  </div>
</div>
@endforeach
