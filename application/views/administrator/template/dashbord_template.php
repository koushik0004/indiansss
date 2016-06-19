<!--start header-->

<?php $this->load->view(ADMIN.'template/header'); ?>
    
<!-- end header -->
	    <div id="content" >
        
        <!--navigator-->
	    <?php $this->load->view(ADMIN.'template/navigator'); ?>
        <!--end navigator-->
		<div id="content_main" class="clearfix">
        	<div id="main_panel_container" class="left">
				<?php //$this->load->view(ADMIN.'template/dashbord_content'); 
						$this->load->view($content_for_layout);
				?>
                <?php $this->load->view(ADMIN.'template/dashboard_shortcuts'); ?>
            </div>
			
            <!--start sidebar-->
            <?php if($this->uri->segment(3) == '' || $this->uri->segment(2)=='submitted-manuscripts'): ?>
				<?php $this->load->view(ADMIN.'template/sidebar'); ?>
            <?php endif; ?>
            <!-- end #sidebar -->
            
            
		</div><!-- end #content_main -->
        <!--section start-->
			<?php //$this->load->view(ADMIN.'template/section'); ?>
            <!--section end-->
        <!--photo galary, calendar, endpanel-->
		<?php //$this->load->view(ADMIN.'template/page_endpanel');?>
        <!-- end #panels -->
        
<!--		strat flaoting div as alert-->
		<?php //$this->load->view(ADMIN.'template/floting_dialog');?>
	 <!-- end #dialog [if you don't want this, delete whole div and 6th line i custom.js -->

		
	    </div><!-- end #content -->
		   
 <!--start footer-->
<?php $this->load->view(ADMIN.'template/footer'); ?>
<!-- end #footer -->