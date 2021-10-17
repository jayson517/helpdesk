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
					</li>
					<hr>
					<li class="en-li">
						<a href="#" class="showEdtk"><p>Drug Test Kits</p></a>
					</li>
					<hr>
					<li class="en-li">
						<a href="#" class="showBio"><p>Biometrics</p></a>
					</li>
					<hr>
					<li class="en-li">
						<a href="#" class="genRco"><p>Generate RCO</p></a>
					</li>
					<hr>
					<li class="en-li">
						<a href="#" class="other"><p>Other Concerns</p></a>
					</li>
					<hr>
					<li class="en-li">
						<a href="#" class="v2"><p>IDTOMIS V2</p></a>
					</li>
					<hr>
					<li class="en-li">
						<a href="#" class="viewHistory"><p>View History</p></a>
					</li>
				</ul>
		</div>
		<div class="col-md-10 m-0">
			<div class="cont-pcReg-labInfo">
				<p class="m-0 p-0"><?php echo $results[0]->facilityName; ?></p>
				<p class="m-0 p-0"><?php echo $results[0]->adr; ?></p>
				<p class="mr-5">Facility No.: <?php echo $results[0]->facilityNo; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Accreditation No.: <?php echo $results[0]->accreNo; ?></p>	
			</div>
			<div class="mt-1 cont-tblRecordList" id="recordLists">
				<table class="table table-hover table-sm tbl-tblRecordList table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Employee No.</th>
							<th>Position</th>
							<!-- <th>Employement Type</th> -->
							<th>Employement Status</th>
							<th>User ID</th>
							<th>Password</th>
						</tr>
					</thead>
					<tbody id="tblRecordLists">
						
					</tbody>					
				</table>
				
			</div>
		</div>
	</div>



</div>

<?php $this->load->view('technicalsupport/common/footer'); ?>
<script src="<?php echo base_url('assets/js/show_employee.js'); ?>"></script>