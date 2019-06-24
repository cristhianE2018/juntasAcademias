<div  class="modal" id="modaladd" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Agregar Junta </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-window-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('entrarjefe',$academia) }}" method="GET">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Asunto: </strong>
                                    <input type="text" name="txtasunto" class="form-control" placeholder="Ingresa el Asunto">
                                </div>
                                <div class="form-group">
                                    <strong>Nivel de Importancia: </strong>
                                    <input type="text" name="txtnivelimp" class="form-control" placeholder="Ingresa el Nivel de Importancia">
                                </div>
                                <div class="form-group">
                                    <strong>Motivos: </strong>
                                    <input type="text" name="txtmotivos" class="form-control" placeholder="Ingresa los motivos">
                                </div>
                                <div class="form-group">
                                    <strong>Lugar: </strong>
                                    <input type="text" name="txtlugar" class="form-control" placeholder="Ingresa el Lugar">
                                </div>
                                <div class="form-group">
                                    <strong>Fecha: </strong>
                                    <input type="date" name="txtfecha" class="form-control" placeholder="Ingresa la Fecha">
                                </div>
                                <div class="form-group">
                                    <strong>Hora: </strong>
                                    <input type="time" name="txthora" class="form-control" placeholder="Ingresa la Hora">
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