<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="<?php echo base_url();?>assets/template/img/recycle.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
				 style="opacity: .8">
		<span class="brand-text font-weight-light">GEoTrash</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?php echo base_url();?>assets/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Alexander Pierce</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
						 with font-awesome or any other icon font library -->
				<li class="nav-item has-treeview">
					<a href="<?php echo base_url();?>administrador/dashboard" class="nav-link active">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>

				</li>


				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-chart-pie"></i>
						<p>
							Puntos de Acopio
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url();?>administrador/mapa" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Reclamos</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/charts/flot.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Atendidos</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/charts/inline.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Sin Atender</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-tree"></i>
						<p>
							Categorias
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/UI/general.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Observaciones</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/icons.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Sub-Observaciones</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/buttons.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Reportes</p>
							</a>
						</li>

					</ul>
				</li>
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-edit"></i>
						<p>
							Limites en Funcion
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url();?>administrador/distritos" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Distritos</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/forms/advanced.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Zonas</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/forms/editors.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Estadisticas</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/forms/validation.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Reportes</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-header">administrador</li>
				<li class="nav-item">
					<a href="<?php echo base_url();?>administrador/auth" class="nav-link">
						<i class="nav-icon fas fa-calendar-alt"></i>
						<p>
							Usuarios
							<span class="badge badge-info right">2</span>
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="pages/gallery.html" class="nav-link">
						<i class="nav-icon far fa-image"></i>
						<p>
							Fiscalizadores
						</p>
					</a>
				</li>

			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
