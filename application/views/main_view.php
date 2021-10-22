<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('common/header'); ?>
<?php $this->load->view('common/nav'); ?>

<div class="row main_cont">
	<div class="col-md-1">
		<?php $this->load->view('common/nav_left'); ?>
	</div>
	<div class="container-fluid col-md-11 content pl-5 cont-mainDash">
		<p class="text-muted">Dashboard</p>
		<div class="row justify-content-md-center">
			<div class="col-md-3 p-0 input-group">
				<div class="input-group mb-3">

				<div class="input-group-prepend">
				<span class="input-group-text" id="dateFrom">From</span>
				</div>
				<input type="date" class="form-control recordsDate" aria-describedby="dateFrom">
				</div>

				<div class="input-group-prepend">
				<span class="input-group-text" id="dateFrom">To</span>
				</div>
				<input type="date" class="form-control recordsDate" aria-describedby="dateFrom" style="width: 100px;">
			</div>
			<div class="col-md-2">
				<div class="container border border-warning bg-warning text-center records">
					Phone Calls
					<br>
					32
				</div>
			</div>
			<div class="col-md-2">
				<div class="container border border-success bg-success text-center records">
					Hangouts
					<br>
					32
				</div>
			</div>
			<div class="col-md-2">
				<div class="container border border-primary bg-primary text-center records">
					Emails
					<br>
					32
				</div>
			</div>
			<div class="col-md-2">
				<div class="container border border-info bg-info  text-center records">
					Walk-ins
					<br>
					32
				</div>
			</div>
		</div>
		<hr>
		<table class="table table-hover table-sm table-bordered table-striped" >
			<thead class="text-light">			
				<tr>	
					<td>Time Started</td>
					<td>Time Finished</td>
					<td>Name of Laboratory</td>
					<td>Support_Type</td>
					<td>Concerns/Queries</td>
					<td>Action_Taken</td>
				</tr>			
			</thead>
			<tbody class="table-light">
				<tr>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td>Laboratoryo ng mga Medical Specialists</td>
					<td>Laboratory ito</td>
					<td>Lorem ipsum dolor. Lorem ipsum dolor sit amet.</td>
					<td>Lorem ipsum dolor sit amet.</td>
				</tr>	
				<tr>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td>Laboratoryo ng mga Medical Specialists</td>
					<td>Laboratory ito</td>
					<td>Lorem ipsum dolor. Lorem ipsum dolor sit amet.</td>
					<td>Lorem ipsum dolor sit amet.</td>
				</tr>	
				<tr>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td>Laboratoryo ng mga Medical Specialists</td>
					<td>Laboratory ito</td>
					<td>Lorem ipsum dolor. Lorem ipsum dolor sit amet.</td>
					<td>Lorem ipsum dolor sit amet.</td>
				</tr>		
				<tr>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td>Laboratoryo ng mga Medical Specialists</td>
					<td>Laboratory ito</td>
					<td>Lorem ipsum dolor. Lorem ipsum dolor sit amet.</td>
					<td>Lorem ipsum dolor sit amet.</td>
				</tr>		
				<tr>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td>Laboratoryo ng mga Medical Specialists</td>
					<td>Laboratory ito</td>
					<td>Lorem ipsum dolor. Lorem ipsum dolor sit amet.</td>
					<td>Lorem ipsum dolor sit amet.</td>
				</tr>		
				<tr>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td>Laboratoryo ng mga Medical Specialists</td>
					<td>Laboratory ito</td>
					<td>Lorem ipsum dolor. Lorem ipsum dolor sit amet.</td>
					<td>Lorem ipsum dolor sit amet.</td>
				</tr>	
		</table>
	</div>
	<div class="container-fluid col-md-11 content pl-5 cont-viewLogs">
		<table class="table table-sm table-hovered " style="overflow-x: auto;">
			<thead>
				<tr>
					<th>Options</th>
					<th>Started</th>
					<th>Finished</th>
					<th>Name of Laboratory</th>
					<th>Support Type</th>
					<th>Concerns / Queries</th>
					<th>Actions Taken</th>
					<th>Remarks</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Lorem ipsum.</td>
					<td>Lorem ipsum dolor sit amet.</td>
					<td>Lorem ipsum dolor sit.</td>
					<td>Lorem ipsum dolor sit amet, consectetur.</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, laudantium.</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, commodi.</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, deserunt.</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, ducimus.</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="container-fluid col-md-11 pl-5 cont-genReport">
		<div class="container cont-search-genReport p-2" >
			<div class="row">
				<div class="col-md-3">
				<div class="input-group">
				<div class="input-group-prepend">
				<span class="input-group-text bg-info" style="height: 30px; font-size: 14px; color: #ecececec;">From</span>
				</div>
				<input type="date" class="form-control input-dtStarted" id="input-dtStarted" style="height: 30px; font-size: 14px;">
				</div>
				</div>
				<div class="col-md-3">
				<div class="input-group mb-3 ">
				<div class="input-group-prepend">
				<span class="input-group-text bg-warning" style="height: 30px; font-size: 14px;">To</span>
				</div>
				<input type="date" class="form-control input-dtFinished" id="input-dtFinished" style="height: 30px; font-size: 14px;">
				</div>
				</div>
				<div class="col-md-6"></div>
			</div>
			<div class="container input-group">
				<div class="container">
					<label for=""><input class="checkbox" type="checkbox" style="transform: scale(1.5); "> &nbsp;Age</label>
				</div>
				<div class="container">
					<label for=""><input class="checkbox" type="checkbox" style="transform: scale(1.5); "> &nbsp;Barangay</label>
				</div>
				<div class="container">
					<label for=""><input class="checkbox" type="checkbox" style="transform: scale(1.5); "> &nbsp;City/Municipality</label>
				</div>
				<div class="container">
					<label for=""><input class="checkbox" type="checkbox" style="transform: scale(1.5); "> &nbsp;Province</label>
				</div>

				<div class="col-md-4">
					<p class="m-0 p-0">Type of Sectors</p>
					<div class="container">
						<label for=""><input type="radio" name="sectorType" style="transform: scale(1.5);">&nbsp;Public Sectors</label>
					</div>
					<div class="container">
						<label for=""><input type="radio" name="sectorType" style="transform: scale(1.5);">&nbsp;Private Sectors</label>
					</div>
					<div class="container">
						<label for=""><input type="radio" name="sectorType" style="transform: scale(1.5);">&nbsp;Free Standing (Per Company)</label>
					</div>
				</div>
				<div class="col-md-8">
					<p class="m-0 p-0">Selections</p>
					<select class="custom-select" name="" id="" size="5" style="width: 100%;">
						<option value="">Deped</option>
						<option value="">DOH</option>
						<option value="">DOH</option>
						<option value="">Private Ito</option>
					</select>
				</div>
				
				<div>
					<button class="btn btn-sm btn-primary btn-search-genReport" style="width: 150px;">Search</button>
				</div>
			</div>
		</div>
		<hr>
		<div class="container  text-center">
			<table class="table table-bordered table-striped table-hovered table-genReport">
				<thead class="table table-success">
					<tr>
						<th colspan = "5">Reported By Total Screened Positive</th>
					</tr>
					<tr>
						<th rowspan = "2">Region</th>
						<th colspan = "4">Screened Positive</th>
					</tr>
					<tr>
						<th colspan = "2">2020</th>
						<th colspan = "2">2021</th>
					</tr>
					<tr>
						<th></th>
						<th>Male</th>
						<th>Female</th>
						<th>Male</th>
						<th>Female</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>2</td>
					</tr>
					<tr>
						<td>3</td>
					</tr>
					<tr>
						<td>4</td>
					</tr>
					<tr>
						<td>5</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="container-fluid col-md-11 content pl-5 cont-webApi">
		
	</div>
</div>

<?php $this->load->view('common/footer'); ?>
