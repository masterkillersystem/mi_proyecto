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
								<p><?php echo anchor('administrador/auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('administrador/auth/create_group', lang('index_create_group_link'))?></p>
                <h3 class="card-title"><?php echo lang('index_heading');?></h3>
								<p><?php echo lang('index_subheading');?></p>
              </div>
							<div id="infoMessage"><?php echo $message;?></div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
										<th><?php echo lang('index_fname_th');?></th>
										<th><?php echo lang('index_lname_th');?></th>
										<th><?php echo lang('index_email_th');?></th>
										<th><?php echo lang('index_groups_th');?></th>
										<th><?php echo lang('index_status_th');?></th>
										<th><?php echo lang('index_action_th');?></th>
                  </tr>
                  </thead>
									<?php foreach ($users as $user):?>
                  <tbody>
										<tr>
								            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
								            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
								            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
											<td>
												<?php foreach ($user->groups as $group):?>
													<?php echo anchor("administrador/auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
								        <?php endforeach?>
											</td>

											<td>
												<button class="btn btn-outline-dark btn-sm"><span class="text text-white"><?php echo ($user->active) ? anchor("administrador/auth/deactivate/".$user->id, lang('index_active_link','text text-white')) : anchor("auth/activate/". $user->id, lang('index_inactive_link','text text-white'));?></span></button>
												</td>
											<td><button class="btn btn-info">  <?php echo anchor("administrador/auth/edit_user/".$user->id, '<i class="fas fa-edit text text-white"></i>') ;?></button></td>
										</tr>
                  </tbody>
									<?php endforeach;?>
                  <tfoot>
										<tr>
											<th><?php echo lang('index_fname_th');?></th>
											<th><?php echo lang('index_lname_th');?></th>
											<th><?php echo lang('index_email_th');?></th>
											<th><?php echo lang('index_groups_th');?></th>
											<th><?php echo lang('index_status_th');?></th>
											<th><?php echo lang('index_action_th');?></th>
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
<?php $this->load->view('admin/templates/admin_footer'); ?>
