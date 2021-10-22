<script>

$(document).ready(function(){
	$("#btn-acceptPC").on("click", function(){
		$(".enc-pc-cont").slideUp("slow");
		$(".cont-info").slideDown("slow");
		$(".hTsType").text("Phone Call");
	});

	$("#btnHewCancel").on("click", function(){
		$(".enc-pc-cont").slideDown("slow");
		$(".cont-info").slideUp("slow");
		$(".hTsType").text("<?php echo $this->session->userdata('tsType'); ?>");
	});
});

</script>