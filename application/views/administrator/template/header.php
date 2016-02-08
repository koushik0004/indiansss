<!DOCTYPE html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator - ndiansss.org</title>
	<meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
	
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assats/control/css/style.css" />
	<link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>assats/control/css/smoothness/jquery-ui-1.7.1.custom.css"  />	
	<!--[if IE 7]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /><![endif]-->
	<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen, projection" /><![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assats/control/markitup/skins/markitup/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assats/control/markitup/sets/default/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assats/control/css/superfish.css" media="screen">
	<!--[if IE]>
		<style type="text/css">
		  .clearfix {
		    zoom: 1;     /* triggers hasLayout */
		    display: block;     /* resets display for IE/Win */
		    }  /* Only IE can see inside the conditional comment
		    and read this CSS rule. Don't ever use a normal HTML
		    comment inside the CC or it will close prematurely. */
		</style>
	<![endif]-->
	<!-- JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assats/control/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assats/control/js/jquery-ui-1.7.1.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assats/control/js/hoverIntent.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assats/control/js/superfish.js"></script>
	<?php /*?><script type="text/javascript" src="<?php echo base_url(); ?>assats/control/js/jquery-1.6.4.min.js"></script><?php */?>
	<script type="text/javascript">
		// initialise plugins
		jQuery(function(){
			jQuery('ul.sf-menu').superfish();
			//$('#ll').click(function(){
//					alert('test');
//					return false;
//				});
		});

	</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assats/control/js/excanvas.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assats/control/js/jquery.flot.pack.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assats/control/markitup/jquery.markitup.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assats/control/markitup/sets/default/set.js"></script>
  	<script type="text/javascript" src="<?php echo base_url(); ?>assats/control/js/custom.js"></script>
    
    <!--favicon and shortcut icon-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assats/control/img/subnav_btn.gif">
	<link rel="icon" type="image/gif" href="<?php echo base_url(); ?>assats/control/img/subnav_btn.gif">
	 <!--End favicon and shortcut icon-->
     
	 <!--[if IE]><script language="javascript" type="text/javascript" src="excanvas.pack.js"></script><![endif]-->
     <?php header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0"); ?>
</head>
<body>
    <?php /*@var $this view*/ ?>
    <div class="container" id="container">
    <div  id="header">
    	<div id="profile_info">
			<img src="<?php echo base_url(); ?>assats/control/img/avatar.jpg" id="avatar" alt="avatar" />
                        <p>Welcome <strong><?php echo $this->session->userdata('username');?></strong>. <?php echo anchor(ADMIN.'login/logout/', 'Logout', 'title="Logout"'); ?></p>
			<?php /*?><p>System messages: 3. <a href="#">Read?</a></p><?php */?>
			<p class="last_login">Last login: <?php echo $this->session->userdata('last_login');?></p>
		</div>
		<div id="logo"><h1><a href="/">AdminTheme</a></h1></div>
		
    </div>
    