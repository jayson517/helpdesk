<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('technicalsupport/common/header'); ?>
<?php $this->load->view('technicalsupport/common/nav'); ?>

<input type="hidden" id="txtBaseUrl" value="<?php echo base_url(); ?> ">

<div class="container-liquid cont-info">
	<?php $this->load->view('technicalsupport/common/ts_searchRec'); ?>
</div>
<?php $this->load->view('technicalsupport/common/footer'); ?>
<?php $this->load->view('technicalsupport/common/ts_redirect_js'); ?>
