<script>

$(document).ready(function(){

	// var base_url = <?php echo base_url(); ?>;
	// var $base_url = base_url.trim();

	$('#btnProceed').on("click", function(){
		displayResult();
	});

	function displayResult()
	{
		let url = "<?php echo base_url('technicalsupport/check_lab_record'); ?>";
		let fn = $("#txtFn").val();
		let fno = $("#txtFno").val();
		let accreno = $("#txtAccreno").val();
		let fa = $("#txtFa").val();

		console.log(fa);

		let postData = {
			facilityName : fn,
			facilityNo : fno,
			accreNo : accreno,
			adr : fa	
		}

		$.ajax({
			url: url,
			type: "post",
			data: postData,
			dataType: "json",
			success: function(data){
				console.log(data);
				let table_data = $("#tblLabRec");
				table_data.empty();

				const dataResult = data.result;
				console.log(dataResult.length);

	 			$.each(dataResult, function(i, item){
		 			table_data.append( `<tr class = "client_bio_info" data-url = "${i}">
		 								<td><a href="#" class="lab_research_result" id="${item.facilityNo}">${item.facilityNo}</a></td>
		 								<td>${item.accreNo}</td>
		 								<td>${item.facilityName}</td>
		 								<td>${item.adr}</td>
		 								</tr>`);

	 			});

 				$('.lab_research_result').on("click", function(e){
					e.preventDefault();
					let tagVal = $(this).attr('id');
					window.location = "<?php echo base_url('technicalsupport/trans/?id='); ?>" + tagVal;
				})

				$(".table-lab-search").css({"display" : "block"});

			},
			error: function(XMLHttpRequest, textStatus, errorThrown){
				console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});

	}
});

</script>