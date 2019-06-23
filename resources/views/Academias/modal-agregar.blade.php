
<div  class="modal" id="modalagregar" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Agregar academia </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-window-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('addAcademia') }}" method="GET">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Nombre de la academia : </strong>
                                    <input type="text" name="txtnombre" class="form-control" placeholder="añade nombre">
                                </div>
                                <div class="form-group">
                                        <strong>Numero docentes : </strong>
                                        <input type="number" name="txtnumero" class="form-control" placeholder="añade numero">
                                    </div>
                                <div class="form-group">
                                        <button type="submit" class="btn btnagregar btn-block" id="btnAgregarNuevo"><i class="fas fa-save"></i> Guardar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>