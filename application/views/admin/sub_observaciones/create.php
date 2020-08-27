<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Registro de Sub-Observacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url();?>administrador/subobservaciones/guardar" method="POST">
            <div class="form-group <?php echo form_error('nom_subobs') ? 'has-error' : '' ?>">
              <label class="control-label"> Nombre de la Sub-Observacion:</label>
              <input name="nom_subobs" placeholder="Nueva Sub-Observacion" class="form-control">
            </div>
            <div class="form-group">
              <label class="control-label">Observaciones:</label>
              <select class="form-control" name="obs">
                <?php foreach($observaciones as $ob):?>
                        <option value="<?php echo $ob->id_obs?>"><?php echo $ob->nom_observaciones;?></option>
                    <?php endforeach;?>
              </select>
            </div>

      </div>
      <div class="modal-footer">
        <button type="cancel" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
