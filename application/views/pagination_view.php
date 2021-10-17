<?php $this->load->view('common/header'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/pagination.css'); ?>">

<header>
	<h1>User</h1>
</header>
<main>
	<div class="list" id="list">
		
	</div>
	<div class="pagenumbers" id="pagination">
		
	</div>
</main>
<div class="container">
	<button>Hey</button>
</div>


<?php $this->load->view('common/footer'); ?>
<script src="<?php echo base_url('assets/js/pagination.js'); ?>"></script>
<style>
	.item {
	font-size: 14px;
	}

	.item:hover {
		font-weight: bold;
		color: red;
		cursor: pointer;
	}

	.pagenumbers {
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		margin-right: 50px;
	}

	.pagenumbers button {
		width: 50px;
		height: 50px;
		appearance: none;
		border: 1px solid black;
		outline: none;

		cursor: pointer;
	}

.list .item:hover {
	background: green;
}

</style>