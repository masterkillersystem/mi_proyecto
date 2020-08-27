<?php $this->load->view('admin/templates/admin_header'); ?>
  <!-- /.navbar -->
<?php $this->load->view('admin/templates/admin_sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Datos Usuarios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <button class="m-0 float-right btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Nuevo Distrito&nbsp;&nbsp;<i
                    class="fas fa-plus"></i></button>
                <h3 class="card-title">Distritos En Ruta</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sn</th>
                    <th>Distrito</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>Accion</th>
                  </tr>
                  </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php if(!empty($distrito)):?>
                      <?php foreach($distrito as $dist):?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $dist->nom_distrito;?></td>
                      <td><?php echo $dist->descripcion;?></td>
                      <td>
                        <?php if ($dist->estado > 0): ?>
                          <button class="btn btn-lg btn-success btn-sm active"><span>Activo</span></button>
                        <?php else: ?>
                          <button class="btn btn-lg btn-danger btn-sm active"><span>Inactivo</span></button>
                        <?php endif; ?>
                      </td>
                      <td>

        <a href="<?php echo base_url();?>administracion/aula/editar" class=" btn btn-primary btn-sm" data-toggle="modal" data-target="#editAula"><i class="fas fa-edit"></i></a>

        <a href="<?php echo base_url();?>administrador/distritos/eliminar/<?php echo $dist->id_distrito;?>" onClick="return confirm('Desea Desactivar el Distrito <?php echo $dist->nom_distrito; ?>?')" class="btn btn-danger btn-sm"><span class="fas fa-fw fa-trash-alt"></span></a>

                      </td>
                    </tr>
                      <?php endforeach;?>
                      <?php endif;?>
                    </tbody>
                  <tfoot>
                    <tr>
                      <th>Sn</th>
                      <th>Distrito</th>
                      <th>Descripcion</th>
                      <th>Estado</th>
                      <th>Accion</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url();?>administrador/distritos/guardar" method="POST">
              <div class="form-group <?php echo form_error('nombre') ? 'has-error' : '' ?>">
                <label class="control-label"> Nombre del Distrito:</label>
                <input name="nombre" placeholder="Nuevo Distrito" class="form-control">
              </div>

              <div class="form-group <?php echo form_error('descripcion') ? 'has-error' : '' ?>">
                <label class="control-label">Descripcion:</label>
                <input name="descripcion" class="form-control" placeholder="Descripcion..."></textarea>
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

<?php $this->load->view('admin/templates/admin_footer'); ?>

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
