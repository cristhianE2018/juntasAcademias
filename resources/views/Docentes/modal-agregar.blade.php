<div  class="modal" id="modalagregar" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Agregar Docente </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-window-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('addDocente') }}" method="GET">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Nombre(s): </strong>
                                <input type="text" name="txtnombre" class="form-control" placeholder="Ingresa el Nombre">
                            </div>
                            <div class="form-group">
                                <strong>Apellidos: </strong>
                                <input type="text" name="txtapellidos" class="form-control" placeholder="Ingresa los Apellidos">
                            </div>
                            <div class="form-group">
                                <strong>Puesto: </strong>
                                <input type="text" name="txtpuesto" class="form-control" placeholder="Ingresa el Puesto">
                            </div>
                            <div class="form-group">
                                <strong>Contraseña: </strong>
                                <input type="text" name="txtcontraseña" class="form-control" placeholder="Ingresa la Contraseña">
                            </div>
                            <div class="form-group">
                                    <strong>Academia: </strong>
                                    <input type="number" name="txtacademia" class="form-control" placeholder="">
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