<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IJSS</title>
<link href="<?php echo base_url(); ?>assats/looks/images/favicon.ico" type="image/x-icon" rel="icon" />
<link href="<?php echo base_url(); ?>assats/looks/images/favicon.ico" type="image/x-icon" rel="shortcut icon" />
<link href="<?php echo base_url(); ?>assats/looks/css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assats/looks/css/trontastic/jquery-ui.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url(); ?>assats/looks/css/style.css" rel="stylesheet" type="text/css" />
<!--slider css-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assats/looks/engine1/style.css" />
<!--end slider css-->

<script language="javascript" src="<?php echo base_url(); ?>assats/looks/js/jquery-1.8.3.js"></script>    
<script language="javascript" src="<?php echo base_url(); ?>assats/looks/js/jquery-ui-1.8.22.custom.min.js"></script>

<?php header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0"); ?>
<script language="javascript">
	$(document).ready(function(){
		var img = Array();
		img[0] = '<?php echo base_url(); ?>assats/looks/images/working_committee_off.png';
		img[1] = '<?php echo base_url(); ?>assats/looks/images/working_committee_on.png';
		if($('div.working_committee').length!=0){
			$('div.working_committee').hover(function(){
				//alert('test');
				$(this).css('background-image', 'url('+img[1]+')');
				}, function(){
					$(this).css('background-image', 'url('+img[0]+')');
					});
		//}
			$('.working_committee').click(function(){
					//alert('test');
					window.location.href = '<?php echo site_url('council/')?>';
				});
		}	
			$('.archive li a').click(function(){
					//alert($(this).attr('id'));
					//var ul_id = $(this).attr('id') + '_cont';
					var getParentLi = $(this);
					getParentLi.siblings('ul.vol').slideToggle(500);
					//$('#'+ul_id).slideToggle(500);
					return false;
				});
			$('.vol li a').click(function(){
					//alert($(this).attr('id'));
					//var ul_id = $(this).attr('id') + '_pdf';
					//$('#'+ul_id).slideToggle(500);
					var getParentLi = $(this);
					getParentLi.siblings('ul.vol-pdf').slideToggle(500);
					return false;
				});
				$('.vol-pdf li a').click(function(){
					//alert($(this).attr('href'));
					var path = $(this).attr('href');
					$.post(
						'<?php echo base_url(); ?>login/loggedIn',
						{data : 'check'},
						function(data){
							if(data.responseText == 'logged_in'){
								var bob = window.open('', '_blank');
								bob.location = path;
							}
							else{
								
								window.location.href = '<?php echo base_url(); ?>login/index/publication.html';
							}
						},
						'json'
					);
					//return false;
					
				});
        
        
        /*updating clocl*/
        $('#updated-date-time').text(new Date($.now()));
	
       window.setInterval(function(){ $('#updated-date-time').text(new Date($.now())); }, 1000);
        /*updating clocl*/
				
	});

		

</script>

</head>

<body>

<div align="center">

  <div id="wrapper">

    <div id="body">

          <div id="body_main">

			<div id="header_top">

                <div id="header_top_top">The Online Indian Journal of Spatial Science (ISSN 2249 – 4316)</div>

                 <?php /*?> <div id="logo"><a href="index.html"><img src="<?php echo base_url(); ?>assats/looks/images/logo.png" alt="Contact Valet" width="202" height="34" border="0" /></a></div><?php */?>

                 <div id="logo">

                 <div id="wowslider-container1">

                    <div class="ws_images">

                        <span><img src="<?php echo base_url(); ?>assats/looks/data1/images/index_banner_1.jpg" alt="index_banner_1" title="index_banner_1" id="wows0"/></span>

                        <span><img src="<?php echo base_url(); ?>assats/looks/data1/images/index_banner_2.jpg" alt="index_banner_2" title="index_banner_2" id="wows1"/></span>

                        <span><img src="<?php echo base_url(); ?>assats/looks/data1/images/index_banner_3.jpg" alt="index_banner_3" title="index_banner_3" id="wows2"/></span>

                        </div>

                    </div>	

                 </div>

                 <!--js for slider-->

                <script type="text/javascript" src="<?php echo base_url(); ?>assats/looks/engine1/wowslider.js"></script>

                <script type="text/javascript" src="<?php echo base_url(); ?>assats/looks/engine1/script.js"></script>

                <!--end js for slider-->
                <?php /*    
                <div id="logo_right">
                  <?php if($this->session->userdata('is_logged_in') === FALSE):?>
                    <img src="<?php echo base_url(); ?>assats/looks/images/book_service.png" alt="login" border="0" usemap="#Map"/>
                    <map name="Map" id="Map">
                      <area shape="rect" coords="21,20,149,69" href="<?php echo site_url('login/signup'); ?>" alt="" />
                      <area shape="circle" coords="280,88,21" href="<?php echo site_url('login/'); ?>" alt="" />
                      <area shape="rect" coords="217,83,255,99" href="<?php echo site_url('login/'); ?>" alt="" />
                    </map>
                   <?php else : ?>
                        <img src="<?php echo base_url(); ?>assats/looks/images/logout.png" alt="login" border="0" usemap="#Map"/>
                    <map name="Map" id="Map">

                      <area shape="circle" coords="280,88,21" href="<?php echo site_url('login/logout'); ?>" alt="" />
                      <area shape="rect" coords="217,83,255,99" href="<?php echo site_url('login/logout'); ?>" alt="" />
                    </map><div class="after-login-header-right"><?php $fname = explode(' ', $this->session->userdata('userfullname')); echo ucwords($fname[0]); ?></div>
                        <a href="<?php echo site_url('login/logout'); ?>" style="color:#FFF; text-decoration:none; font-size:14px;">Logout</a>
                   <?php endif; ?>
</div>
                */ ?>  
                <div class="logo_right">
                    <div class="social_media">
                        <span class="follow_text">Follow:</span>
                        <ul class="social_media_link">
                            <li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin fa-2x"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus fa-2x"></i></a></li>
                        </ul>
                    </div>
                    <div class="site_links">
                        <ul class="menu_link">
                            <li><a href="<?php echo site_url('home/'); ?>" <?php echo (isset($url_path) && ($url_path == 'home' || $url_path == ''))?'class="active"':''; ?>>Home</a></li>
                            <li><a href="<?php echo site_url('contact/'); ?>" <?php echo (isset($url_path) && $url_path == 'contact')?'class="active"':''; ?>>Contact Us</a></li>
                            <li><a href="<?php echo site_url('issues/'); ?>" <?php echo (isset($url_path) && $url_path == 'issues')?'class="active"':''; ?>>Indian Journal of Spatial Science</a></li>
                        </ul>
                    </div>
</div>
            
            </div>

            <!--<div id="banner">&nbsp;</div>-->

            <!--BANNER START-->

            <div id="banner_main"><img src="<?php echo base_url(); ?>assats/looks/images/banner_pic.png" alt="Banner" height="450" width="990" />
                
                <!-- date-time bar-->
				<div class="wrapper-date-time">
					<div class="date-time-bar"><span id="updated-date-time"></span></div>
				</div>
				<!-- date-time bar-->    
                
            </div>

            <!--BANNER END-->