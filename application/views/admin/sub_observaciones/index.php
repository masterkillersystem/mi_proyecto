<div id="app">
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Control de las SUb Observaciones</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard_admin">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Control de las Sub Observaciones</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->

            <div class="col-lg-12">

              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"> Sub-Observaciones</h6>
                <button class="m-0 float-right btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter" >Nueva Sub-Observacion<i
                    class="fas fa-plus"></i></button>
              </div>

              <div class="card mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Sub-Observaciones En Ruta</h6>
                </div>



                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                          <th>Sn</th>
                          <th>Sub Observaciones</th>
                          <th>Observaciones</th>
                          <th>Estado</th>
                          <th>Accion</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php $i = 1; ?>
                      <?php if(!empty($subobs)):?>
                      <?php foreach($subobs as $sub):?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $sub->nom_subobservaciones;?></td>
                      <td><?php echo $sub->observaciones;?></td>
                      <td>
                        <?php if ($sub->estado > 0): ?>
                          <button class="btn btn-lg btn-success btn-sm active"><span>Activo</span></button>
                        <?php else: ?>
                          <button class="btn btn-lg btn-danger btn-sm active"><span>Inactivo</span></button>
                        <?php endif; ?>
                      </td>
                      <td>

        <a href="<?php echo base_url();?>administrador/sub_observaciones/editar" class=" btn btn-primary btn-sm" data-toggle="modal" data-target="#editAula"><i class="fas fa-edit"></i></a>

        <a href="<?php echo base_url();?>administrador/sub_observaciones/eliminar/<?php echo $sub->id_subobs;?>" onClick="return confirm('Desea Desactivar la Sub-Observacion <?php echo $sub->nom_subobservaciones; ?>?')" class="btn btn-danger btn-sm"><span class="fas fa-fw fa-trash-alt"></span></a>

                      </td>
                    </tr>
                      <?php endforeach;?>
                      <?php endif;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->
          <?php include ("create.php"); ?>
        </div>
        <!---Container Fluid-->
      </div>




      <!-- Modalpara editar
      <div class="modal fade" id="editAula" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <form action="<?php echo base_url();?>administracion/aula/editar" method="POST">
                <input type="hidden" name="idaula" value="<?php echo $aula->id_aula;?>">
                  <div class="form-group">
                    <label class="control-label"> Nombre del Aula:</label>
                    <input type="text" name="nombre" value="<?php echo $aula->nom_aula?>" placeholder="Nueva Aula" class="form-control">
                  </div>

                  <div class="form-group">
                    <label class="control-label">Descripcion:</label>
                    <input type="text" name="descripcion" value="<?php echo $aula->descripcion?>" class="form-control" placeholder="Descripcion..."></textarea>
                  </div>

            </div>
            <div class="modal-footer">
              <button type="cancel" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
            </div>
            </form>

          </div>
        </div>
      </div>-->



</div>
