$(document).ready(function(){

/**
* 
*/
	document.querySelector('.input-dtStarted').valueAsDate = new Date();
	document.querySelector('.input-dtFinished').valueAsDate = new Date();

	let fn = $('.showEmp').attr('id');
	get_LabEmpRecords(fn);

	activeLink('.showEmp');
	toggleSearch('.empContSearch');
	showTsQa('.cont-empTs');
	setBtnManualId('.showEmp');

	$('.showEmp').on("click", function(){
		const facilityNo = $(this).attr('id');

		activeLink('.showEmp');
		toggleSearch('.empContSearch');

		showTsQa('.cont-empTs');
		setBtnManualId('.showEmp');

		get_LabEmpRecords(facilityNo);
	});

	$('.showDtk').on("click", function(){
		const facilityNo = $(".txt-facilityNo").attr('id').trim();
		const dtkregstat = "VLD";

		activeLink('.showDtk');
		toggleSearch('.dtkContSearch');

		showTsQa('.cont-dtkTs');
		setBtnManualId('.showDtk');

		get_labDtkRecords(facilityNo, dtkregstat);

	});
	
	$('.showBio').on("click", function(){
		activeLink('.showBio');
		toggleSearch('.showBio');
		showTsQa('.cont-bioTs');
		setBtnManualId('.showBio');
	});

	$('.genRco').on("click", function(){
		activeLink('.genRco');
		toggleSearch('.genRco');
		showTsQa('.cont-rcoTs');
		setBtnManualId('.genRco');
	});
	
	$('.other').on("click", function(){
		activeLink('.other');
		toggleSearch('.other');
		showTsQa('.cont-othersTs');
		setBtnManualId('.other');
	});

	$('.v2').on("click", function(){
		activeLink('.v2');
		toggleSearch('.viewHistory');
		showTsQa('.cont-v2Ts');
		setBtnManualId('.v2');
	});

	$('.viewHistory').on("click", function(){
		activeLink('.viewHistory');
		toggleSearch('.viewHistory');
		showTsQa('.viewHistory');
		setBtnManualId('.viewHistory');
	});

/**
 * ============================== Manual Input =================================
 */

 	$(".btn-tsManual").on("click", function(){
 		$(".cont-tsQa").slideUp("slow");
		$(".cont-tsManual").slideDown("slow");
 	});

 	$(".btn-tsCancelManual").on("click", function(){
 		$(".cont-tsManual").slideUp("slow");
		$(".cont-tsQa").slideDown("slow");

		$(".txtarea-query-tsManual").val('');
		$(".txtarea-action-tsManual").val('');
 	});


 	function setBtnManualId(htmlElement)
 	{

 		const arrLists = [
 			{name : '.showEmp', newId : 'showEmp'},
			{name : '.showDtk',  newId : 'showDtk'},
			{name : '.showBio',  newId : 'showBio'},
			{name : '.genRco',  newId : 'genRco'},
			{name : '.other',  newId : 'other'},
			{name : '.v2',  newId : 'v2'},
			{name : '.viewHistory',  newId : 'viewHistory'}
 		];

 		arrLists.reduce((acc, element) => {
 			if(element.name == htmlElement)
 			{
		 		$(".cont-tsManual").slideUp("slow");
		 		$(".cont-tsQa").slideDown("slow");

		 		$(".cont-tsManual").removeAttr("id");
		 		$(".txtarea-query-tsManual").val('');
				$(".txtarea-action-tsManual").val('');

 				$(".btn-tsManual").attr("id", element.newId);
 			}
 		});
 	}



/**
 * ========================== Functions ===============================
 */

	function toggleSearch(htmlElement)
	{
		let newElement = "";

		let toggleContent = [
				'.dtkContSearch',
				'.empContSearch'
			];

		toggleContent.reduce((acc, element) => {
			if(!(element == htmlElement))
			{
				$(element).slideUp("slow");
				console.log("slideup" + element);
			}
			else if(element == htmlElement)
			{
				return newElement = element;
			}

		}, {});

		$(newElement).slideDown("slow");
	}


	function activeLink(htmlElement)
	{
		let newElement = "";
		let table_data = $('.tbl-tblRecordList');

		const hideContent = [
			'.showEmp',
			'.showDtk',
			'.showBio',
			'.genRco',
			'.other',
			'.v2',
			'.viewHistory'
		];

		hideContent.reduce((acc, element) => {
			if(!(element == htmlElement))
			{
				$(element).css({
					'color': '#ececec',
					'pointer-events' : 'all', 
					'cursor' : 'pointer'
				});
			}
			else
			{
				table_data.empty();
				return newElement = element;
			}
		}, {});

		$(newElement).css({
			'color' : 'yellow',
			'pointer-events' : 'none', 
			'cursor' : 'default'
		});
	}



	function showTsQa(htmlElement)
	{
		let showElement = "";

		let hideContent = [
			'.cont-empTs',
			'.cont-dtkTs',
			'.cont-bioTs',
			'.cont-rcoTs',
			'.cont-othersTs',
			'.cont-v2Ts'
		];

		hideContent.reduce((acc, element) => {
			if(!(element == htmlElement))
			{
				$(element).slideUp();
			}
			else if(element == htmlElement)
			{
				return showElement = element;
			}
			
		},{});

		$(showElement).slideDown("slow");

	}

	function get_LabEmpRecords(facilityNo)
	{
		const base_url = $("#base_url").attr('class');
		const $base_url = base_url.trim();
		console.log(facilityNo);
		const table_data = $(".tbl-tblRecordList");

		$.ajax({
			url : $base_url + 'technicalsupport/get_empDetails',
			type: "post",
			data : {facilityNo : facilityNo},
			dataType : "json",
			success : function(data){
				console.log(data);
				const dataResult = data.result;
				table_data.empty();

				table_data.append(`
						<thead class="table-primary">
							<tr>
								<th>Name</th>
								<th>Employee No.</th>
								<th>Position</th>
								<th>Employement Status</th>
								<th>User ID</th>
								<th>Password</th>
							</tr>
						</thead>
					`);

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
						<tbody id="tblRecordLists">
							<tr>
								<td>${fullname}</td>
								<td>${item.empno}</td>
								<td>${empdesignation}</td>
								<td>${empstatus}</td>
								<td>${item.userid}</td>
								<td>${item.userpasswd}</td>
							</tr>
						</tbody>
						`);

					$(".tbl-tblRecordList").show();
				});

			},
			error: function(XMLHttpRequest, textStatus, errorThrown){
				console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			} 

		});
	}

	function get_labDtkRecords(facilityNo, dtkregstat)
	{
		const base_url = $("#base_url").attr('class');
		const $base_url = base_url.trim();

		const table_data = $(".tbl-tblRecordList");

		const post_data = {
			facilityNo : facilityNo,
			dtkregstat : dtkregstat
		};

		table_data.empty();

		table_data.append(`
			<thead class="table-warning">
				<tr>
					<th>Reg No.</th>
					<th>Status</th>
					<th>Reg Date</th>
					<th>Downloaded By</th>
					<th>Downloaded Date</th>
				</tr>
			</thead>
			`);

		console.log(post_data);

		$.ajax({
			url : $base_url + "technicalsupport/get_dtkRecords",
			type : "post",
			dataType: "json",
			data : post_data,
			success : function(data){
				console.log(data);

				const dataResult = data.result;

				$.each(dataResult, function(i, item){
					table_data.append(`
					<tbody>
						<tr>
							<td>${item.dtkregno}</td>
							<td>${item.dtkregstat}</td>
							<td>${item.dtkregdt}</td>
							<td>${item.downloadedby}</td>
							<td>${item.downloadeddt}</td>>
						</tr>
					</tbody>
						`);
				})






			},
			error: function(XMLHttpRequest, textStatus, errorThrown){
				console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			} 
		});

	}

});
