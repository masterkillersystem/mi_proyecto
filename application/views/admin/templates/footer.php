<!-- vinculando a libreria Jquery-->
<script src="<?php echo base_url();?>assets_login/login_admin/js/jquery-3.1.1.min.js"></script>
<!-- Libreria java scritp de bootstrap -->
<script src="<?php echo base_url();?>assets_login/login_admin/js/bootstrap.min.js"></script>
<!-- Libreria java scritp para alertas -->
<script src="<?php echo base_url();?>assets/toastr/toastr.min.js"></script>

<script type="text/javascript">
<?php if($this->session->flashdata('msg_success')){ ?>
  toastr.success("<?php echo $this->session->flashdata('msg_success'); ?>");
<?php }if($this->session->flashdata('msg_error')){  ?>
  toastr.error("<?php echo $this->session->flashdata('msg_error'); ?>");
<?php } ?>

toastr.options = {
"closeButton": false,
"debug": false,
"newestOnTop":false,
"progressBar": true,
"positionClass": "toast-top-right",
"preventDuplicates": true,
"showDuration": "300",
"hideDuration": "1000",
"timeOut": "5000",
"extendedTimeOut": "1000",
"showEasing": "swing",
"hideEasing": "linear",
"showMethod": "fadeIn",
"hideMethod": "fadeOut"
}

</script>

</html>
