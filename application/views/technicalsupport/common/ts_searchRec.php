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
			<?php echo anchor("home/des_ts_sess", "Cancel", ['class'=>'btn btn-sm btn-danger mb-2']); ?>
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