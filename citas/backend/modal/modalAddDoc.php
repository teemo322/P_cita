<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                    Nuevo</span> 
                    <span class="fw-dark">
                        Médico
                    </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
        <form method="POST" autocomplete="off">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group form-group-default">
                            <label>Expediente del médico</label>
                            <input name="dnidoc" maxlength="8" id="documento" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required type="text" class="form-control" placeholder="ejmp: 77676576">
 <button type="button" id="buscar" class="btn btn-icon btn-round btn-dark">
                                            <i class="fab fa-discourse"></i>
                                        </button>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group form-group-default">
                            <label>Nombre del médico</label>
                            <input name="nomdoc" style="color: #fff;" id="nombres"  onkeypress="return soloLetras(event)" required type="text" class="form-control" placeholder="ejmp: juan">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group form-group-default">
                            <label>Apellido del médico</label>
                            <input name="apedoc" style="color: #fff;" onkeypress="return soloLetras(event)" id="apellidoPaterno"  required type="text" class="form-control" placeholder="ejmp: perez">
                        </div>
                    </div>
                </div>


<div class="row">
<div class="col-md-6">
    <div class="form-group form-group-default">
        <label>Especialidad del médico</label>
            <select class="form-control" name="espdo" id="esdoc" required>
                <option value="0">Seleccione la especialidad</option>
            </select>
    </div>
</div>

        <div class="col-sm-6">
            <div class="form-group form-group-default">
                <label>Teléfono  del médico</label>
                <input name="teldoc"  required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="9" type="text" class="form-control" placeholder="ejmp: 999659874">
            </div>
        </div>
</div>

<div class="row">
<div class="col-md-6">
    <div class="form-group form-group-default">
        <label>Género  del médico</label>
            <select class="form-control" name="sexdoc" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>  
            </select>
    </div>
</div> 

<div class="col-md-6">
    <div class="form-group form-group-default">
        <label>Nacimiento  del médico</label>
      <input name="nacme"  required  type="date" class="form-control"  >     
    </div>
</div> 
</div>

<div class="row">
<div class="col-md-6">
    <div class="form-group form-group-default">
        <label>Correo del médico</label>
      <input name="coomed"  required  type="email" class="form-control">     
    </div>
</div> 

<div class="col-md-6">
    <div class="form-group form-group-default">
        <label>nacionalidad del del médico</label>
<select class="form-control" name="nacionam" required>
        <option value="Peruana(o)">Peruana(o)</option>
        <option value="Venezolana(o)">Venezolana(o)</option>
        <option value="Argentina(o)">Argentina(o)</option>
        <option value="Ecuatoriana(o)">Ecuatoriana(o)</option>
        <option value="Uruguaya(o)">Uruguaya(o)</option>

    </select>    
    </div>
</div> 
</div>


            <div class="modal-footer no-bd">
                <button type="submit" name="add_doct" class="btn btn-primary">Agregar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </form>
            </div>
            
        </div>
    </div>
</div>