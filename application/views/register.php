<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register</title> 
	<!-- Bootstrap -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- toast alert css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- Custom CSS -->
    <link href="<?=base_url('assets/css/custom.css')?>" rel="stylesheet">
</head>
<body>

	<form method="post" action="<?=base_url('validate-registration')?>">

	 	<div class="container mt-5">

	 		 <h3>Register</h3>
 
	 		 <div class="form-group">
	 		   <label for="exampleInputEmail1">Name</label>
	 		   <input type="text" name="name" class="form-control"> 
	 		 </div>

	 		 <div class="form-group">
	 		   <label for="exampleInputEmail1">Username</label>
	 		   <input type="text" name="username" class="form-control"> 
	 		 </div>

	 		 <div class="form-group">
	 		   <label for="exampleInputEmail1">Password</label>
	 		   <input type="password" name="password" class="form-control"> 
	 		 </div>

	 		 <button type="submit" class="btn btn-primary">Register</button> | <a class="btn btn-warning text-white" href="<?=base_url()?>">Cancel</a>

	 	</div>

	 </form>
</body>
</html>
 
<!-- JQuery -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<!-- toast alert js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> 

<script type="text/javascript">
	<?php if($this->session->flashdata('success')){ ?>
	    toastr.success("<?= $this->session->flashdata('success'); ?>");
	<?php }else if($this->session->flashdata('error')){ ?>
	    toastr.error("<?= $this->session->flashdata('error'); ?>");
	<?php } ?> 
</script>