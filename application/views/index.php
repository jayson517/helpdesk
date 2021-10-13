<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main_view.css'); ?>">
</head>
<body>
	<h3>Basic Pagination</h3>
	<table class="table table-bordered">
		<thead>
			<th>
				<td>No</td>
				<td>facilityno</td>
				<td>accreditation no</td>
				<td>laboratory name</td>
				<td>address</td>
			</tr>
		</thead>
		<tbody>
			<?php $offset = $this->uri->segment(3,0) + 1; ?>
			<?php foreach ($query->result() as $row): ?>
				<tr>
					<td><?php echo $offset++ ?></td>
					<td><?php echo $row->facilityNo; ?></td>
					<td><?php echo $row->accreNo; ?></td>
					<td><?php echo $row->facilityName; ?></td>
					<td><?php echo $row->adr; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php echo $page_links; ?>
</body>
</html>