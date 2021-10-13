<?php $this->load->view('main_view/header'); ?>
<?php $this->load->view('main_view/nav'); ?>


	<h3 style="padding-top: 100px; text-align: center;">Pagination View</h3>
	<hr>
	<div class="container box">
		<div align="right" id="pagination_link">
			
		</div>
		<div class="table-responsive" id="country_table">
			
		</div>
	</div>

<?php $this->load->view('main_view/footer'); ?>
<script>
	$(document).ready(function(){
		alert("hey");

		function load_country_data()
		{
			$.ajax(function(){
				/**
				 * @Meaning of +page
				 * in controller pagination.php $config['uri_segment']=3
				 */
				url : "<?php echo base_url('helpdesk/ajax_pagination'); ?>" + page;
				method : "get",
				dataType: "json",
				success: function(data)
				{
					console.log(data);
					// $('#contry_table').html(data.country_table);
					// $('#pagination_link').hmtl(data.pagination_link);
				} 	
			})
		}

		load_country_data(1);
	});
</script>