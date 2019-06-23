
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
                    <form>
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Nombre de la academia : </strong>
                                    <input type="text" name="matricula" class="form-control" placeholder="añade nombre">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btnagregar btn-block" id="btnAgregarNuevo"><i class="fas fa-save"></i> Guardar</button>
                </div>
            </div>
        </div>
    </div>