$(document).ready(function(){


/**
 * ========================== Phone Calls - Search Lab Records ==========================
 */

	$('#btnProceed').on("click", function(){
		displayResult()
	});

	$('#btnClear').on("click", function(){
		clearSearchFields();
	});

	var base_url = $("#txtBaseUrl").val();
	var $base_url = base_url.trim();

	function displayResult()
	{
		let url = $base_url + 'technicalsupport/check_lab_record';
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
	 			$.each(data.result, function(i, item){
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
					window.location = $base_url + "technicalsupport/trans/" + tagVal;
				})

				$(".table-lab-search").css({"display" : "block"});

			},
			error: function(XMLHttpRequest, textStatus, errorThrown){
				console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});

	}

	function clearSearchFields()
	{
		$("#txtFn").val('');
		$("#txtAccreno").val('');
		$("#txtFa").val('');
		$("#txtRep").val('');
	}

	/**
	 * ========================== Phone Calls - Encode ==========================
	 */
	

	
	function getFacId()
	{

		window.location.href = 'google.com';
	}

});