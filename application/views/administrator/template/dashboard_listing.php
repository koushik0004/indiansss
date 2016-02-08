<!--start header-->

<?php $this->load->view(ADMIN.'template/header'); ?>
    
<!-- end header -->
	    <div id="content" >
        
        <!--navigator-->
	    <?php $this->load->view(ADMIN.'template/navigator'); ?>
        <!--end navigator-->
		<div id="content_main" class="clearfix">
			<?php $this->load->view(ADMIN.'template/postedit'); ?>
			<?php $this->load->view(ADMIN.'template/tabledata'); ?>
			
            <!--start sidebar-->
			<?php //$this->load->view(ADMIN.'template/sidebar'); ?>
            <!-- end #sidebar -->
		</div><!-- end #content_main -->
        
        <!--photo galary, calendar, endpanel-->
		<?php $this->load->view(ADMIN.'template/page_endpanel');?>
        <!-- end #panels -->
        
<!--		strat flaoting div as alert-->
		<?php //$this->load->view(ADMIN.'template/floting_dialog');?>
	 <!-- end #dialog [if you don't want this, delete whole div and 6th line i custom.js -->

		
	    </div><!-- end #content -->
		   
 <!--start footer-->
<?php $this->load->view(ADMIN.'template/footer'); ?>
<!-- end #footer -->