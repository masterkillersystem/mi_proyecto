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
          <h1>General Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="col-lg-12">

      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"><?php echo lang('create_user_heading');?></h3>
              <p><?php echo lang('create_user_subheading');?></p>
              <div id="infoMessage"><?php echo $message;?></div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php echo form_open("administrador/auth/create_user");?>
              <div class="card-body">
                <div class="form-group">
                  <?php echo lang('create_user_fname_label', 'first_name');?>
                  <?php echo form_input($first_name);?>
                </div>
                <div class="form-group">
                  <?php echo lang('create_user_lname_label', 'last_name');?>
                  <?php echo form_input($last_name);?>
                </div>
                <div class="form-group">
                  <?php
                  if($identity_column!=='email') {

                      echo lang('create_user_identity_label', 'identity');

                      echo form_error('identity');
                      echo form_input($identity);

                  }
                  ?>
                </div>
                <div class="form-group">
                  <?php echo lang('create_user_company_label', 'company');?>
                  <?php echo form_input($company);?>
                </div>
                <div class="form-group">
                  <?php echo lang('create_user_company_label', 'nombre');?>
                  <?php echo form_input($nombre);?>
                </div>
                <div class="form-group">
                  <?php echo lang('create_user_email_label', 'email');?>
                  <?php echo form_input($email);?>
                </div>
                <div class="form-group">
                  <?php echo lang('create_user_phone_label', 'phone');?>
                  <?php echo form_input($phone);?>
                </div>
                <div class="form-group">
                  <?php echo lang('create_user_password_label', 'password');?>
                  <?php echo form_input($password);?>
                </div>
                <div class="form-group">
                  <?php echo lang('create_user_password_confirm_label', 'password_confirm');?>
                  <?php echo form_input($password_confirm);?>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" name="guardar" class="btn btn-sm btn-primary">Registrar Usuario</button>
                <button type="reset" name="cancelar" class="btn btn-sm btn-danger">Cancelar</button>
                <!-- <?php echo form_submit('submit', lang('create_user_submit_btn'));?> -->
              </div>
            <?php echo form_close();?>
          </div>
          <!-- /.card -->
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </div>
</div>
  </section>
  <!-- /.content -->
</div>
<?php $this->load->view('admin/templates/admin_footer'); ?>


<h1><?php echo lang('create_user_heading');?></h1>
<p><?php echo lang('create_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("administrador/auth/create_user");?>

      <p>
            <?php echo lang('create_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name);?>
      </p>

      <p>
            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name);?>
      </p>

      <?php
      if($identity_column!=='email') {
          echo '<p>';
          echo lang('create_user_identity_label', 'identity');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity);
          echo '</p>';
      }
      ?>

      <p>
            <?php echo lang('create_user_company_label', 'company');?> <br />
            <?php echo form_input($company);?>
      </p>

      <p>
            <?php echo lang('create_user_email_label', 'email');?> <br />
            <?php echo form_input($email);?>
      </p>

      <p>
            <?php echo lang('create_user_phone_label', 'phone');?> <br />
            <?php echo form_input($phone);?>
      </p>

      <p>
            <?php echo lang('create_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
      </p>

      <p>
            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
            <?php echo form_input($password_confirm);?>
      </p>


      <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

<?php echo form_close();?>
