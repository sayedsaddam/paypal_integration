<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/animate.css">
    
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/aos.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
  </head>
<body>
  <div class="top">
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col">
    				<p class="social d-flex">
    					<a href="#"><span class="icon-facebook"></span></a>
    					<a href="#"><span class="icon-twitter"></span></a>
    					<a href="#"><span class="icon-google"></span></a>
						<a href="#"><span class="icon-pinterest"></span></a>
    				</p>
    			</div>
    			<div class="col d-flex justify-content-end">
    				<p class="num"><span class="icon-phone"></span> + 1700 12345 6789</p>
    			</div>
    		</div>
    	</div>
	</div>
	<?php if($success = $this->session->flashdata('success')): ?>
		<div class="alert alert-success"><?php echo $success; ?></div>
	<?php endif; ?>
	<?php if($failed = $this->session->flashdata('failed')): ?>
		<div class="alert alert-danger"><?php echo $failed; ?></div>
	<?php endif; ?>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?= base_url(); ?>">Khaldiya<span> Towers</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a href="<?= base_url(); ?>" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="<?= base_url('property'); ?>" class="nav-link">Property</a></li>
				<li class="nav-item"><a href="<?= base_url('agents'); ?>" class="nav-link">Agents</a></li>
				<li class="nav-item"><a href="<?= base_url('about'); ?>" class="nav-link">About</a></li>
				<li class="nav-item"><a href="<?= base_url('blog'); ?>" class="nav-link">Blog</a></li>
				<li class="nav-item"><a href="<?= base_url('contact'); ?>" class="nav-link">Contact</a></li>
				<li class="nav-item cta">
					<?php if(!$this->session->userdata('username')): ?>
						<a data-toggle="modal" data-target="#signIn" href="<?= base_url('signin'); ?>" class="nav-link ml-lg-2"><span class="icon-user"></span> Sign In</a>
					<?php else: ?>
						<a href="<?= base_url('home/signout'); ?>" class="nav-link ml-lg-2"><span class="icon-user"></span> Sign Out</a>
					<?php endif; ?>
				</li>
				<?php if(!$this->session->userdata('username')): ?>
					<li class="nav-item cta cta-colored">
						<a data-toggle="modal" data-target="#signUp" href="<?= base_url('signup'); ?>" class="nav-link"><span class="icon-pencil"></span> Sign Up</a>
					</li>
				<?php endif; ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
<!-- Signup modal starts -->
<div class="modal" id="signUp">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sign Up</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
		  <form method="post" action="<?= base_url('home/signup'); ?>">
		  	<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control" placeholder="Enter name" id="email">
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" placeholder="Enter username" id="email">
			</div>
		  	<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
			</div>
			<div class="form-group">
				<label for="pwd">Password</label>
				<input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
			</div>
			<!-- <div class="form-group form-check">
				<label class="form-check-label">
				<input class="form-check-input" type="checkbox"> Remember me
				</label>
			</div> -->
			<button type="submit" class="btn btn-success">Sign Up</button>
		</form>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Signup modal ends -->
<!-- Sign In modal starts -->
<div class="modal" id="signIn">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sign In</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
		  <form method="post" action="<?= base_url('home/signin'); ?>">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" placeholder="Enter username" id="email">
			</div>
			<div class="form-group">
				<label for="pwd">Password</label>
				<input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
			</div>
			<!-- <div class="form-group form-check">
				<label class="form-check-label">
				<input class="form-check-input" type="checkbox"> Remember me
				</label>
			</div> -->
			<button type="submit" class="btn btn-success">Sign In</button>
		</form>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Sign In modal ends -->