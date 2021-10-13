<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('common/header'); ?>
<?php $this->load->view('common/nav'); ?>

<div class="row main_cont">
	<div class="col-md-1">
		<?php $this->load->view('common/nav_left'); ?>
	</div>
	<div class="container-fluid col-md-11 content pl-5">
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
</div>

<?php $this->load->view('common/footer'); ?>
