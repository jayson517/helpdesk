<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('technicalsupport/common/header'); ?>
<?php $this->load->view('technicalsupport/common/nav'); ?>

<style>
	.cont-info {
		display: none;
	}
</style>

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
						<a href="#" class="viewHistory" data-toggle="modal" data-target="#exampleModal"><p>View History</p></a>
					</li>
					<hr>
					<li class="en-li">
						<?php echo anchor('/', 'Cancel', ['class'=>'btn btn-sm btn-danger mr-2 mb-2']); ?>
						<?php echo anchor('/', 'Completed', ['class'=>'btn btn-sm btn-success mb-2']); ?>
						
						<button class = "btn btn-sm btn-warning mx-auto" id="btn-acceptPC" style = "width:160px; height:40px; color:black;">Accept Phone Call</button>
					</li>
				</ul>
		</div>
		<div class="col-md-10 m-0">
			<?php $this->load->view('technicalsupport/common/ts_registration'); ?>
		</div>
	</div>



</div>

<div class="container-fluid cont-info">
	<div class="row">
		<div class="col-md-2 bg-success py-1 cont-lab-info">
			<div class="form-group">
				<label for="">Facility Name</label>	
				<input type="text" class="form-control form-control-sm txtS" id="txtFn">		
			</div>
			<div class="form-group">
				<label for="">Facility No</label>	
				<input type="text" class="form-control form-control-sm txtS" id="txtFno">		
			</div>
			<div class="form-group">
				<label for="">Accreditation No</label>	
				<input type="text" class="form-control form-control-sm txtS" id="txtAccreno">		
			</div>
			<div class="form-group p-0">
				<label for="">Facility Address</label>	
				<textarea class="form-control" name="" id="txtFa" cols="20" rows="2"></textarea>		
			</div>
			<hr>
			<p class="text-center text-light">No Accreditation</p>
			<div class="form-group">
				<label for="">Representative</label>	
				<input type="text" class="form-control form-control-sm txtS" id="txtRep">		
			</div>
			<div class="container-fluid p-0">
				<button class = "btn btn-sm btn-danger mb-2" id="btnHewCancel">Cancel</button>

				<button class="btn btn-sm btn-warning mb-2" id="btnClear">Clear</button>
				<button class="btn btn-sm btn-primary mb-2" id="btnProceed">Proceed</button>
			</div>
		</div>
		<div class="col-md-9 cont-lab-search cont-table-search">
			<table class="table-bordered table table-sm table-hover table-lab-search">
				<thead>
					<tr>
						<th style="width: 120px;">Facility No</th>
						<th style="width:160px;">Accreditation No</th>
						<th>Facility Name</th>
						<th>Facility Address</th>
					</tr>
				</thead>
				<tbody id="tblLabRec">
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php $this->load->view('technicalsupport/common/footer'); ?>
<?php $this->load->view('technicalsupport/hangEmailWalk/includes/hew_js'); ?>
<script src="<?php echo base_url('assets/js/ts_log.js'); ?>"></script>

