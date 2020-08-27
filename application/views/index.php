
<body >
		 <div id="Contenedor">
		 <div class="Icon">
        <span class="h2 text-white" style="font-family:courier,arial,helvética;">Administrador</span>
				<br>
        <img src="<?php echo base_url();?>assets_login/login_admin/img/administrator.png" style="width: 90px; height: 90px">
      </div>
<div class="ContentForm">
		 	<form action="<?php echo base_url();?>login" method="POST" autocomplete="off">
		 		<div class="input-group input-group-lg">
				  <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
				  <input type="email" name="email" class="form-control form-control-sm"  placeholder="Correo Electronico" id="email" aria-describedby="sizing-addon1" autofocus required>
				</div>
				<br>
				<div class="input-group input-group-lg">
				  <span class="input-group-addon" id="sizing-addon1"><i class="fas fa-lock"></i></span>
				  <input type="password" name="password" class="form-control" placeholder="******" aria-describedby="sizing-addon1" required>
				</div>
				<br>
				<button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit"><i class="fa fa-sign-in-alt fa-1x"></i>   Iniciar Sesion</button>
				<div class="opcioncontra"><a href="<?php echo base_url();?>recoverpass_admin/recuperar_password">Olvidaste tu contraseña?</a></div>
		 	</form>
		 </div>
		 </div>
</body>
