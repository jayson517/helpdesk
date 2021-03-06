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
						<a href="#" class="showEmp" id="<?php echo $results[0]->facilityNo;?>"><p>Employees</p></a>
						<!-- <ul class="collapse list-unstyled" id="empSub">
							<li><a href="#" class="showEmp" >User Accounts</a></li>
							<li><a href="">Analyst Bio Stat</a></li>
						</ul> -->
						<div class="p-1 container-liquid empContSearch">
							<p class="m-0 p-0" style="color: #ecececec; font-size: 13px;">Search User</p>
							<input type="text" class="form-control form-control-sm" placeholder="User ID" aria-label="Recipient's username" aria-describedby="button-addon2">
							<button class="btn btn-success btn-sm ml-auto" type="button" id="btn-empSearch">Search</button>
						</div>
					</li>
					<hr>
					<li class="en-li">
						<a href="#" class="showDtk" disabled><p>Drug Test Kits</p></a>

						<div class="p-1 container-liquid dtkContSearch">
							<p class="m-0 p-0" style="color: #ecececec; font-size: 13px;">Search DTK</p>
							<input type="text" class="form-control form-control-sm" placeholder="DTK Reg No." aria-label="Recipient's username" aria-describedby="button-addon2">
							<button class="btn btn-success btn-sm ml-auto" type="button" id="btn-empSearch">Search</button>
						</div>
					</li>
					<hr>
					<li class="en-li">
						<a href="#" class="showBio"><p>Biometrics</p></a>
					</li>
					<hr>
					<li class="en-li">
						<a href="#" class="other"><p>Other Concerns</p></a>
					</li>
					<hr>
					<li class="en-li">
						<a href="#" class="genRco"><p>Remote Collection</p></a>
					</li>
					<hr>
					<li class="en-li">
						<a href="#" class="v2"><p>IDTOMIS V2</p></a>
					</li>
					<hr>
					<li class="en-li">
						<a href="#" class="viewHistory"><p>View History</p></a>
					</li>
					<hr>
					<li class="en-li">
						<?php echo anchor('/', 'Cancel', ['class'=>'btn btn-sm btn-danger mr-2 mb-2']); ?>
						<?php echo anchor('/', 'Completed', ['class'=>'btn btn-sm btn-success mb-2']); ?>
					</li>
				</ul>
		</div>
		<div class="col-md-10 m-0">
			<?php $this->load->view('technicalsupport/common/ts_registration'); ?>
		</div>
	</div>



</div>

<?php $this->load->view('technicalsupport/common/footer'); ?>
<script src="<?php echo base_url('assets/js/ts_log.js'); ?>"></script>