@foreach ($resultRec as $consulta)
    <!-- Modal -->
    <div class="modal fade" id="ModalActualizar{{ $consulta->idRecuerdo }}" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalActualizar{{ $consulta->idRecuerdo }}"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Actualizar Recuerdo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="container col-md-6">
                        <div class="card text-center mb-5">

                            <div class="card-header">
                                Fe de erratas !!!
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('recuerdo.update', $consulta->idRecuerdo) }}">
                                    @csrf
                                    {!! method_field('PUT') !!}
                                    <div class="dmb-3">
                                        <label class="form-label">Titulo:</label>
                                        <input type="text" class="form-control" name="txtTitulo"
                                            value="{{ $consulta->titulo }}">
                                        <p class="text-danger fst-italic"> {{ $errors->first('txtTitulo') }} </p>
                                    </div>
                                    <div>
                                        <label class="form-label">Recuerdos:</label>
                                        <input type="text" class="form-control mg-4" name="txtRecuerdo"
                                            value="{{ $consulta->recuerdo }}">
                                        <p class="text-danger fst-italic"> {{ $errors->first('txtRecuerdo') }}</p>
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
