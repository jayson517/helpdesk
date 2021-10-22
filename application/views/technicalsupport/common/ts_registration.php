<div class="cont-pcReg-labInfo">
	<p class="m-0 p-0"><?php echo $results[0]->facilityName; ?></p>
	<p class="m-0 p-0"><?php echo $results[0]->adr; ?></p>
	<p class="mr-5">Facility No.: <?php echo $results[0]->facilityNo; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Accreditation No.: <?php echo $results[0]->accreNo; ?></p>	
	<input type="hidden" class="txt-facilityNo" id="<?php echo $results[0]->facilityNo;?>">
</div>
<div class = "cont-dataSearch form-group">
	<div class="container-liquid cont-empTs">
		<?php $this->load->view('technicalsupport/common/ts_qa'); ?>
	</div>

	<div class="container-liquid cont-dtkTs">
		<?php $this->load->view('technicalsupport/common/ts_qa'); ?>
	</div>

	<div class="container-liquid cont-bioTs">
		<?php $this->load->view('technicalsupport/common/ts_qa'); ?>
		<hr>
		<div class="row form-group cont-capBio">
			<div class="col-md-3">
				<label for="#">First Name</label><input type="text" class="form-control form-control-sm">
			</div>
			<div class="col-md-3">
				<label for="#">Middle Name</label><input type="text" class="form-control form-control-sm">
			</div>
			<div class="col-md-3">
				<label for="#">Last Name</label><input type="text" class="form-control form-control-sm">
			</div>
			<div class="col-md-3">
				<label for="#">Birth Date</label><input type="date" class="form-control form-control-sm">
			</div>
		</div>

		<button class="btn btn-sm btn-primary btnBioSearch">Search</button>

	</div>

	<div class="container-liquid cont-rcoTs">
		<?php $this->load->view('technicalsupport/common/ts_qa'); ?>
	</div>

	<div class="container-liquid cont-othersTs">
		<?php $this->load->view('technicalsupport/common/ts_qa'); ?>
	</div>

	<div class="container-liquid cont-v2Ts">
		<?php $this->load->view('technicalsupport/common/ts_qa'); ?>
	</div>
</div>

<div class="cont-tblRecordList" id="recordLists">
	<table class="table table-hover table-sm tbl-tblRecordList table-bordered">
	
	</table>
	
</div>