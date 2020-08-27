<div id="app">
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Control de los Inspectores</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Control de los Inspectores</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->

            <div class="col-lg-12">

              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"> Inspectores</h6>
                <a href="<?php echo base_url();?>administrador/inspectores/guardar_view" class="m-0 float-right btn btn-success btn-sm">  Nuevo Inspector<i
                    class="fas fa-plus"></i></a>
              </div>

              <div class="card mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Inspectores En Ruta</h6>
                </div>



                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                          <th>Sn</th>
                          <th>Imgagen</th>
                          <th>Nombre(s)</th>
                          <th>Apellido(s)</th>
                          <th>Correo</th>
                          <th>Celular</th>
                          <th>Perfil</th>
                          <th>Estado</th>
                          <th>Accion</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php $i = 1; ?>
                      <?php if(!empty($user)):?>
                      <?php foreach($user as $usuario):?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td>
                        <img src="<?=base_url()?>../assets/foto_perfil/<?=$usuario->foto;?>" style="max-width:50%; max-height:100%; height:25px" alt="foto">
                      </td>
                      <td><?php echo $usuario->nom_user;?></td>
                      <td><?php echo $usuario->apell_user;?></td>
                      <td><?php echo $usuario->email_user;?></td>
                      <td><?php echo $usuario->telef_user;?></td>
                      <td><?php echo $usuario->cargo;?></td>
                      <td>
                        <?php if ($usuario->estado > 0): ?>
                          <button class="btn btn-lg btn-success btn-sm active"><span>Activo</span></button>
                        <?php else: ?>
                          <button class="btn btn-lg btn-danger btn-sm active"><span>Sin Asignar</span></button>
                        <?php endif; ?>
                      </td>
                      <td>

        <a href="#" class=" btn btn-primary btn-sm" data-toggle="modal" data-target="#editAula"><i class="fas fa-edit"></i></a>

        <a href="<?php echo base_url();?>administrador/inspectores/eliminar/<?php echo $usuario->id_users;?>" onClick="return confirm('Desea Desactivar al Inspector <?php echo $usuario->nom_user; ?>?')" class="btn btn-danger btn-sm"><span class="fas fa-fw fa-trash-alt"></span></a>

        <a href="#" onClick="return confirm('Desea Desactivar al Inspector <?php echo $usuario->nom_user; ?>?')" class="btn btn-secondary btn-sm">Asignar</a>

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
        </div>
        <!---Container Fluid-->
      </div>

</div>
