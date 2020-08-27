
<!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">

    <form action="<?php echo base_url();?>administrador/inspectores/guardar" method="POST" autocomplete="off" enctype="multipart/form-data">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h4 class="h4 mb-0 text-gray-800"><i class="fas fa-list-ul -fw"></i>  Formulario de Registro Inspector Nuevo</h4>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Inicio</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url();?>administrador/inspectores">Ir a Lista Inspector</a></li>
      </ol>
    </div>

    <div class="row mb-3">
      <!-- Area Chart -->
      <div class="col-xl-6 col-lg-6">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h4 class="m-0 font-weight-bold text-primary"><i class="fa fa-user fa-2x"></i>  Datos Personales</h4>
            <div class="dropdown no-arrow">
              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Dropdown Header:</div>
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
          <div class="card-body">

            <div class="form-group">
            <label class="control-label">Nombre Completo:</label>
            <input type="text" name="nom_user" placeholder="Ingrese su Nombre Completo" class="form-control form-control-sm">
          </div>

          <div class="form-group">
            <label class="control-label">Apellido Completo:</label>
            <input type="text" name="ap_user" class="form-control form-control-sm" placeholder="Horas Academicas...">
          </div>

          <div class="col-lg-12">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label">Carnet Identidad:</label>
                  <input type="number" name="ci_user" limit="10" class="form-control form-control-sm" placeholder="Numero de Carnet" required>
              </div>
              </div>
              <!--<div class="col-md-4">
                <div class="form-group">
                  <label class="control-label">Expedido:</label>
                  <select class="form-control form-control-sm" name="exp">
                          <option value="#">Lp</option>
                          <option value="#">Lp</option>
                          <option value="#">Lp</option>
                          <option value="#">Lp</option>
                          <option value="#">Lp</option>
                          <option value="#">Lp</option>
                          <option value="#">Lp</option>
                </select>
                </div>
              </div>-->
            </div>
          </div>


          <div class="form-group">
            <label class="control-label">Correo Electronico:</label>
            <input type="email" name="email" class="form-control form-control-sm" placeholder="Ingrese un Correo Valido" required>
          </div>
          <div class="form-group">
            <label class="control-label">Numero Telefonico:</label>
            <input type="number" name="num_cel" placeholder="Ingrese su Numero Telefonico/Celular" class="form-control form-control-sm">
          </div>
          </div>
        </div>
      </div>

      <!-- Pie Chart -->
      <div class="col-xl-6 col-lg-6">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-lock fa-2x"></i> Datos de Seguridad</h4>
            <div class="dropdown no-arrow">
              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Dropdown Header:</div>
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>

          <div id="#" class="card-body">
            <div class="form-group">
              <label class="control-label">Seleccione una Imagen/Identicacion:</label>
              <input type="file" name="foto">
            </div>

            <div class="form-group">
              <label class="control-label">Usuario/Nick:</label>
              <input type="text" name="usuario" class="form-control form-control-sm" placeholder="Escriba su Nombre para el Sistema" required>
            </div>
            <div class="form-group">
              <label class="control-label">Password:</label>
              <input type="password" name="pass_user" class="form-control form-control-sm" placeholder="Ingrese Password" required>
            </div>
            <div class="form-group">
              <label class="control-label">Repita de Nuevo su Passowrd:</label>
              <input type="password" name="rep_pass" class="form-control form-control-sm" placeholder="Repita de Nuevo" required>
            </div>
            <div class="form-group">
              <label class="control-label">Perfil en el Sistema:</label>
              <select class="form-control form-control-sm" name="cargo" required>
                <?php if(!empty($grupo)):?>
                <?php foreach($grupo as $cargo):?>
                <option value="<?php echo $cargo->id_group;?>"><?php echo $cargo->nombre;?></option>
            <?php endforeach;?>
            <?php endif;?>
              </select>
            </div>
            <hr><br>
            <div class="form-group">
              <button type="reset" name="cancel" class="btn btn-danger btn-sm">Cancelar</button>
              <button type="submit" name="registrar" class="btn btn-success btn-sm">Registar</button>
            </div>

          </div>
        </div>
      </div>
      <!--Fin de Pie Chart-->

    </div>
    <!--Row-->

  </form>

  </div>
  <!---Container Fluid-->
</div>
