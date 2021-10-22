<?php 
	$today = date('m-d-Y');
 ?>

<div class="cont-tsQa form-group">
	<p class="m-0">Queries / Encountered Problems</p>
	<select class="form-select" size="4" style="width: 100%;">
		<option value="1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, praesentium?</option>
		<option value="2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi suscipit, omnis sit quae autem ab tempora deleniti error! At, atque?</option>
		<option value="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio natus corporis dicta possimus iste ipsa quo consectetur doloribus velit minus!</option>
	</select>

	<p class="mb-0 mt-1">Actions Taken</p>
	<select class="form-select" size="4" style="width: 100%;">

	</select>
	<div class="mt-1">
		<div class="row">
			<div class="col-md-3">
				<div class="input-group">
					<div class="input-group-prepend">
					<span class="input-group-text bg-info" style="height: 25px; font-size: 12px; color: #ecececec;">Started Date</span>
					</div>
					<input type="date" class="form-control input-dtStarted" id="input-dtStarted" style="height: 25px; font-size: 12px;">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group mb-3 ">
					<div class="input-group-prepend">
					<span class="input-group-text bg-warning" style="height: 25px; font-size: 12px;">Completed Date</span>
					</div>
					<input type="date" class="form-control input-dtFinished" id="input-dtFinished" style="height: 25px; font-size: 12px;">
				</div>
			</div>
			<div class="col-md-5">
				<button class="btn btn-sm btn-success" style="width: 150px;">Save</button>
				<button class="btn btn-sm btn-warning btn-tsManual" style="width: 200px;">Manual Input</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text bg-info" id="input-timeStarted" style="height: 25px; font-size: 12px; color: #ecececec;">Time Started</span>
					</div>
					<input type="time" class="form-control" style="height: 25px; font-size: 12px;">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text bg-warning" id="input-timeComp" style="height: 25px; font-size: 12px;">Time Completed</span>
					</div>
					<input type="time" class="form-control" style="height: 25px; font-size: 12px;">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="cont-tsManual form-group" style = "display: none;">
	<p class="m-0">Queries / Encountered Problems</p>
	<textarea class="form-control txtarea-query-tsManual" name="" id="" rows="2" placeholder="Encountered Problems"></textarea>

	<p class="mb-0 mt-1">Actions Taken</p>
	<textarea class="form-control txtarea-action-tsManual" name="" id="" rows="2" placeholder="Actions Taken"></textarea>
	<div class="mt-1">
		<div class="row">
			<div class="col-md-3">
				<div class="input-group">
					<div class="input-group-prepend">
					<span class="input-group-text bg-info" style="height: 25px; font-size: 12px; color: #ecececec;">Started Date</span>
					</div>
					<input type="date" class="form-control" id="input-dtStarted" style="height: 25px; font-size: 12px;">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group mb-3 ">
					<div class="input-group-prepend">
					<span class="input-group-text bg-warning" style="height: 25px; font-size: 12px;">Completed Date</span>
					</div>
					<input type="date" class="form-control" id="input-dtFinished" style="height: 25px; font-size: 12px;">
				</div>
			</div>
			<div class="col-md-5">
				<button class="btn btn-sm btn-success" style="width: 150px;">Save</button>
				<button class="btn btn-sm btn-danger btn-tsCancelManual" style="width: 200px;">Cancel Manual Input</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text bg-info" id="input-timeStarted" style="height: 25px; font-size: 12px; color: #ecececec;">Time Started</span>
					</div>
					<input type="time" class="form-control" style="height: 25px; font-size: 12px;">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text bg-warning" id="input-timeComp" style="height: 25px; font-size: 12px;">Time Completed</span>
					</div>
					<input type="time" class="form-control" style="height: 25px; font-size: 12px;">
				</div>
			</div>
			<div class="col-md-5 text-center text-light">
				<h5>-- Manual Input --</h5>
			</div>
		</div>
	</div>
</div>