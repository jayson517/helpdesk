<?php 
	$userLogin = "J.Soria";
 ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<img src="<?php echo base_url('assets/img/main_page/logo.png'); ?>" alt="">
		<span class="navbar-brand pl-4 text-center"><h6>Department of Health</h6><h5>IDTOMIS HELPDESK</h5></span>
		<ul class="navbar-nav ml-auto mr-5">
			<li class="nav-item ml-5">
				<a href="#contact" class="nav-link text-white"><?php echo $userLogin; ?></a>
			</li>
			<li class="nav-item mr-5">
				<div class="dropdown show">
				<a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-cog mr-1"></i>
				</a>

				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				<a class="dropdown-item" href="#">Update</a>
				<a class="dropdown-item" href="#">Logout</a>
				<a class="dropdown-item disabled" href="#">User</a>
				</div>
				</div>
			</li>
		</ul>

</nav>