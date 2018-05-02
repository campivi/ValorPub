<?php $this->load->view('includes/header'); ?>
<div class="body-content">
<?php $this->load->view($main_content); ?>
</div>
<?php 
	if(isset($investigacion) && $investigacion){
		$this->load->view('includes/footer_blog_i');
	}
	elseif(isset($capacitacion) && $capacitacion){
		$this->load->view('includes/footer_blog_c');
	}else{
		$this->load->view('includes/footer'); 
	}
?>