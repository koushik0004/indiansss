<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>USS</title>

<link href="<?php echo base_url(); ?>assats/looks/images/favicon.ico" type="image/x-icon" rel="icon" />

<link href="<?php echo base_url(); ?>assats/looks/images/favicon.ico" type="image/x-icon" rel="shortcut icon" />

<link href="<?php echo base_url(); ?>assats/looks/css/style.css" rel="stylesheet" type="text/css" />

<!--slider css-->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assats/looks/engine1/style.css" />

<!--end slider css-->



<script language="javascript" src="<?php echo base_url(); ?>assats/looks/js/jquery-1.7.2.min.js"></script>

<script language="javascript" src="<?php echo base_url(); ?>assats/looks/js/jquery-ui-1.8.22.custom.min.js"></script>



<?php header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0"); ?>

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
				
			$('.archive li a').click(function(){
					//alert($(this).attr('id'));
					var ul_id = $(this).attr('id') + '_cont';
					$('#'+ul_id).slideToggle(500);
					return false;
				});

		}

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

             <div id="logo" style="width:619px; height:113px; overflow:hidden; text-align:center;">

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

              <div id="logo_right"></div>

            </div>

            <div id="menu">

            	<?php $url_path = $this->uri->segment(1); ?>

                <ul>

                    <!--<span id="left"><img src="images/menu_left_border.png" alt="left_border" /></span>

                    <span id="left"><img src="images/menu_devider.png" alt="left_border" /></span>-->

                    <li><a href="<?php echo site_url('home/'); ?>" <?php echo ($url_path == 'home')?'class="active"':''; ?> >Home</a><span><img src="<?php echo base_url(); ?>assats/looks/images/menu_devider.png" alt="left_border" /></span></li>

                    <li><a href="<?php echo site_url('rules/'); ?>" <?php echo ($url_path == 'rules')?'class="active"':''; ?>>Rules</a><span><img src="<?php echo base_url(); ?>assats/looks/images/menu_devider.png" alt="left_border" /></span></li>

                    <li><a href="<?php echo site_url('issues/'); ?>" <?php echo ($url_path == 'issues')?'class="active"':''; ?>>Issues</a><span><img src="<?php echo base_url(); ?>assats/looks/images/menu_devider.png" alt="left_border" /></span></li>

                    <li><a href="<?php echo site_url('notice/'); ?>" <?php echo ($url_path == 'notice')?'class="active"':''; ?>>Notice</a><span><img src="<?php echo base_url(); ?>assats/looks/images/menu_devider.png" alt="left_border" /></span></li> 

                    <li><a href="<?php echo site_url('gallery/'); ?>" <?php echo ($url_path == 'gallery')?'class="active"':''; ?>>Gallery</a><span><img src="<?php echo base_url(); ?>assats/looks/images/menu_devider.png" alt="left_border" /></span></li>

                    <?php /*?><li><a href="<?php echo site_url('aboutus/'); ?>" <?php echo ($url_path == 'aboutus')?'class="active"':''; ?>>About Us</a><span><img src="<?php echo base_url(); ?>assats/looks/images/menu_devider.png" alt="left_border" /></span></li><?php */?>

                    <li><a href="<?php echo site_url('contact/'); ?>" <?php echo ($url_path == 'contact')?'class="active last"':'class="last"'; ?><?php /*?><?php */?> >Contact&nbsp;Us</a></li>

                    <!--<span id="right"><img src="images/menu_devider_right.png" alt="left_border" /></span>

                    <span id="right"><img src="images/menu_right_border.png" alt="left_border" /></span>-->               

                </ul>                           	

            </div>

            <!--<div id="banner">&nbsp;</div>-->

            <!--BANNER START-->

            <div id="banner_main"><img src="<?php echo base_url(); ?>assats/looks/images/banner_pic.png" alt="Banner" height="450" width="990" /></div>

            <!--BANNER END-->