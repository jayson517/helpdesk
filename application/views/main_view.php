<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('main_view/header'); ?>
<?php $this->load->view('main_view/nav'); ?>

<div class="row">
	<div class="col-md-1">
		<?php $this->load->view('main_view/nav_left'); ?>
	</div>
	<div class="container-fluid col-md-11 content pl-5">
		<h5 class="text-muted">Dashboard</h5>
		<div class="row justify-content-md-center">
			<div class="col-md-2 mr-2 pt-1 border border-warning bg-warning text-center records">
				Phone Calls
				<br>
				32
			</div>
			<div class="col-md-2 mx-2 pt-1 border border-success bg-success text-center records">
				Hangouts
				<br>
				32
			</div>
			<div class="col-md-2 mx-2 pt-1 border border-primary bg-primary text-center records">
				Emails
				<br>
				32
			</div>
			<div class="col-md-2 mx-2 pt-1 border border-info bg-info  text-center records">
				Walk-ins
				<br>
				32
			</div>
		</div>
		<hr>
		<table class="table table-hover table-sm table-bordered table-striped" >
			<thead class="text-light">			
				<tr>	
					<td>Time Started</td>
					<td>Time Finished</td>
					<td>Name of Laboratory</td>
					<td>Branch/Address</td>
					<td>Representative</td>
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
					<td>Jayson Soria</td>
					<td>Lorem ipsum dolor sit.</td>
					<td>Lorem ipsum dolor. Lorem ipsum dolor sit amet.</td>
					<td>Lorem ipsum dolor sit amet.</td>
				</tr>	
				<tr>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td>Laboratoryo ng mga Medical Specialists</td>
					<td>Laboratory ito</td>
					<td>Jayson Soria</td>
					<td>Lorem ipsum dolor sit.</td>
					<td>Lorem ipsum dolor. Lorem ipsum dolor sit amet.</td>
					<td>Lorem ipsum dolor sit amet.</td>
				</tr>	
				<tr>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td>Laboratoryo ng mga Medical Specialists</td>
					<td>Laboratory ito</td>
					<td>Jayson Soria</td>
					<td>Lorem ipsum dolor sit.</td>
					<td>Lorem ipsum dolor. Lorem ipsum dolor sit amet.</td>
					<td>Lorem ipsum dolor sit amet.</td>
				</tr>		
				<tr>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td>Laboratoryo ng mga Medical Specialists</td>
					<td>Laboratory ito</td>
					<td>Jayson Soria</td>
					<td>Lorem ipsum dolor sit.</td>
					<td>Lorem ipsum dolor. Lorem ipsum dolor sit amet.</td>
					<td>Lorem ipsum dolor sit amet.</td>
				</tr>		
				<tr>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td>Laboratoryo ng mga Medical Specialists</td>
					<td>Laboratory ito</td>
					<td>Jayson Soria</td>
					<td>Lorem ipsum dolor sit.</td>
					<td>Lorem ipsum dolor. Lorem ipsum dolor sit amet.</td>
					<td>Lorem ipsum dolor sit amet.</td>
				</tr>		
				<tr>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td><?php echo date("Y-m-d H:i:sa"); ?></td>
					<td>Laboratoryo ng mga Medical Specialists</td>
					<td>Laboratory ito</td>
					<td>Jayson Soria</td>
					<td>Lorem ipsum dolor sit.</td>
					<td>Lorem ipsum dolor. Lorem ipsum dolor sit amet.</td>
					<td>Lorem ipsum dolor sit amet.</td>
				</tr>	
		</table>
	</div>
</div>

<?php $this->load->view('main_view/footer'); ?>
