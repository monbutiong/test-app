<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$page_title?></title> 
	<!-- Bootstrap -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- toast alert css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- Custom CSS -->
    <link href="<?=base_url('assets/css/custom.css')?>" rel="stylesheet">
</head>
<body>

	<header>
	  <!-- Navbar -->
	   

	  <nav class="navbar navbar-expand-lg navbar-light bg-light">
	    <a class="navbar-brand text-primary" href="#">Test App</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarText">
	      <ul class="navbar-nav mr-auto">
	        <li class="nav-item <?=@$employee_tab?>">
	            <a class="nav-link" aria-current="page" href="<?=base_url('employee')?>">Employee</a>
	          </li>
	          <li class="nav-item <?=@$department_tab?>">
	            <a class="nav-link" href="<?=base_url('department')?>">Department</a>
	          </li>
	          <li class="nav-item <?=@$designation_tab?>">
	            <a class="nav-link" href="<?=base_url('designation')?>">Designation</a>
	          </li> 
	      </ul>
	      <span class="navbar-text">
	        <?=$this->session->name_of_user?> | <a href="Javascript:logout('<?=base_url()?>logout')">Logout</a>
	      </span>
	    </div>
	  </nav>
	  <!-- Navbar -->

	  <!-- Background image -->
	  <div>

	  	<div class="container mt-5">

	  		<h3><?=$page_title?></h3>

	  		<?php 
	  		// load page content
	  		$this->view("$sub_folder/$content"); 
	  		?>

	  	</div>
	     
	  </div>
	  <!-- Background image -->
	</header>

 	
</body>
</html>
 
<!-- JQuery -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<!-- toast alert js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- Main JS -->
<script src="<?php echo base_url();?>assets/js/main.js?2"></script>

<script type="text/javascript">
	<?php if($this->session->flashdata('success')){ ?>
	    toastr.success("<?= $this->session->flashdata('success'); ?>");
	<?php }else if($this->session->flashdata('error')){ ?>
	    toastr.error("<?= $this->session->flashdata('error'); ?>");
	<?php }else if(validation_errors()){ ?>
	    toastr.error("<?= strip_tags(validation_errors()) ?>");
	<?php }?>
</script>