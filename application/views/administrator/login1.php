<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
	<meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
	<!--[if IE]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /><![endif]-->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assats/control/css/style.css" />
	<link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>assats/control/css/smoothness/jquery-ui-1.7.1.custom.css"  />	
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
    <script type="text/javascript" src="<?php echo base_url(); ?>assats/control/js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assats/control/js/jquery-ui-1.7.1.custom.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assats/control/js/custom.js"></script>
	</head>
	 <!--[if IE]><script language="javascript" type="text/javascript" src="excanvas.pack.js"></script><![endif]-->
</head>
<body>
<div  id="login_container">
    <div  id="header">
   
		<div id="logo"><h1><a href="<?php echo base_url(); ?>">Admin Login</a></h1></div>
		
    </div><!-- end header -->
	   
	    <div id="login" class="section">
	    	<div id="fail" class="info_div"><span class="ico_cancel">Incorrect username or password!</span></div>
            <?php 
				echo form_open(ADMIN.'login/send', array('name'=>'loginform', 'id'=>'loginform'));
				
				$data_input = array('name'=>'user_login','id'=>'user_login',  'size'=>'28', 'class'=>'input', 'placeholder'=>'Enter Username');
				echo '<strong>'.form_label('UserName: ', 'user_login');
				echo form_input($data_input).'</strong><br/>';
				
				$data_password = array('name'=>'user_pass', 'id'=>'user_pass',  'size'=>'28', 'class'=>'input', 'placeholder'=>'Enter Password');
				echo '<strong>'.form_label('Password: ', 'user_pass');
				echo form_password($data_password).'</strong><br/>';
				
				$data_checkbox = array('name'=>'remember', 'id'=>'remember', 'value'=>'accept', 'style'=>'float:left;');
				echo '<strong>'.form_label('Remember Me ', 'remember');
				echo form_checkbox($data_checkbox).'</strong><br/>';
				
				
				$data_submit = array('name'=>'save', 'id'=>'save', 'class'=>'loginbutton', 'value'=>'Log In');
				echo form_submit($data_submit);
				echo form_close();
			?>
            
            
	    	<?php /*?><form name="loginform" id="loginform" action="index.html" method="post">
			
			<label><strong>Username</strong></label><input type="text" name="log" id="user_login"  size="28" class="input"/>
			<br />
			<label><strong>Password</strong></label><input type="text" name="pwd" id="user_pass"  size="28" class="input"/>
			<br />
			<strong>Remember Me</strong><input type="checkbox" id="remember" class="input noborder" /> 
			
			<br />
		
			<input id="save" class="loginbutton" type="submit" class="submit" value="Log In" />
			
			</form><?php */?>
			
			<a href="#" id="passwordrecoverylink">Forgot your username or password?</a>
	    </div>
	
	    
		    


</div><!-- end container -->

</body>
</html>
