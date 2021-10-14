<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('technicalsupport/common/header'); ?>
<?php $this->load->view('technicalsupport/common/nav'); ?>

<div class="container-fluid enc-pc-cont">
	<div class="row pl-2">
		<div class="col-md-2 container">
				<ul class="list-unstyled components pt-3">
					<li class="en-li">
						<a href="#empSub" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Employees</a>
						<ul class="collapse list-unstyled" id="empSub">
							<li><a href="">User Accounts</a></li>
							<li><a href="">Analyst Bio Stat</a></li>
						</ul>
					</li>
					<hr>
					<li class="en-li">
						<a href="#dtkSub" data-toggle="collapse" class="dropdown-toggle">Drug Test Kits</a>
						<ul class="collapse list-unstyled" id="dtkSub">
							<li><a href="">View DTK</a></li>							
							<li><a href="">Search DTK</a></li>							
						</ul>
					</li>
					<hr>
					<li class="en-li">
						<a href="#bioSub" data-toggle="collapse" class="dropdown-toggle">Biometrics</a>
						<ul class="collapse list-unstyled" id="bioSub">
							<li><a href="">Cap Bio</a></li>
							<li><a href="">Position 0</a></li>
						</ul>
					</li>
					<hr>
					<li class="en-li">
						<a href="">Generate RCO</a>
					</li>
					<hr>
					<li class="en-li">
						<a href="">Other Concerns</a>
					</li>
					<hr>
					<li class="en-li">
						<a href="">View History</a>
					</li>
				</ul>
		</div>
		<div class="col-md-10 p-0 m-0">
			<label>Facility Name:</label>
			<label>Facility Address:</label>
			<label>Facility No.:</label>
			<label>Accreditation No.:</label>			
		</div>
	</div>



</div>
<?php echo $id; ?>

<?php $this->load->view('technicalsupport/common/footer'); ?>