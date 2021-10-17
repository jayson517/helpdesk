$(document).ready(function(){

/**
* ========================== Show Lab Employee ==========================
*/
	let fn = $('.showEmp').attr('id');
	get_labEmp(fn);

	// $('.pShowEmp').css('color', '#e1e922');

	activeLink('.showEmp');
	
	$('.showEmp').on("click", function(){
		const facilityNo = $(this).attr('id');
		get_labEmp(facilityNo);
		deactiveLink()
		activeLink('.showEmp');
		removeClick('.showEmp');
	});

	$('.showEdtk').on("click", function(){
		deactiveLink()
		activeLink('.showEdtk');
		removeClick('.showEdtk');
	});
	
	$('.showBio').on("click", function(){
		deactiveLink()
		activeLink('.showBio');
		removeClick('.showBio');
	});

	$('.genRco').on("click", function(){
		deactiveLink()
		activeLink('.genRco');
		removeClick('.genRco');
	});
	
	$('.other').on("click", function(){
		deactiveLink()
		activeLink('.other');
		removeClick('.other');
	});

	$('.v2').on("click", function(){
		deactiveLink()
		activeLink('.v2');
		removeClick('.v2');
	});

	$('.viewHistory').on("click", function(){
		deactiveLink()
		activeLink('.viewHistory');
		removeClick('.viewHistory');
	});

	function removeClick(htmlElement)
	{
		$(htmlElement).css({'pointer-events' : 'none', 'cursor' : 'default'});
	}

	function activeLink(htmlElement)
	{
		$(htmlElement).css('color', 'yellow');
	}

	function deactiveLink()
	{
		$('.showEmp').css('color', '#ececec');
		$('.showEdtk').css('color', '#ececec');
		$('.showBio').css('color', '#ececec');
		$('.genRco').css('color', '#ececec');
		$('.other').css('color', '#ececec');
		$('.v2').css('color', '#ececec');
		$('.viewHistory').css('color', '#ececec');
	}

	function get_labEmp(facilityNo)
	{
		const base_url = $("#base_url").attr('class');
		const $base_url = base_url.trim();
		console.log(facilityNo);
		const table_data = $("#tblRecordLists");
		$.ajax({
			url : $base_url + 'technicalsupport/get_empDetails',
			type: "post",
			data : {facilityNo : facilityNo},
			dataType : "json",
			success : function(data){
				console.log(data);
				const dataResult = data.result;
				table_data.empty();

				$.each(dataResult, function(i, item){

					var fullname = item.emptitle + " " + item.empfname + " " + item.empmname + " " + item.emplname;
					var empdesignation = item.empdesignation;

					if(item.empstatus == "A"){
						var empstatus = "Active";
					}else if(item.empstatus == "I"){
						var empstatus = "Inactive";
					}

					if(empdesignation == "HEA"){
							empdesignation = "Head of Screening Lab";
						}else if(empdesignation == "COL"){
							empdesignation = "Authorized Specimen Collection"
						}else if(empdesignation == "ANA"){
							empdesignation = "Analyst"
					}


					table_data.append(`
							<tr>
								<td>${fullname}</td>
								<td>${item.empno}</td>
								<td>${empdesignation}</td>
								<td>${empstatus}</td>
								<td>${item.userid}</td>
								<td>${item.userpasswd}</td>
							</tr>
						`);

					$(".tbl-tblRecordList").show();
				});

			},
			error: function(XMLHttpRequest, textStatus, errorThrown){
				console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			} 

		});
	}

});
