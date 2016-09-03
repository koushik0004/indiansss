<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>WELCOME TO ADMINISTRATOR</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>assats/control/css/login.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="<?php echo base_url(); ?>assats/control/js/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="<?php echo base_url(); ?>assats/control/js/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="<?php echo base_url(); ?>assats/control/js/jquery.pngFix.pack.js" type="text/javascript"></script>
<script scr="<?php echo base_url(); ?>assats/control/js/jquery-1.6.4.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
<?php header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0"); ?>
</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
		<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assats/control/img/logo.png" width="156" height="40" alt="" /></a>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
    <?php echo form_open(ADMIN.'login/send', array('name'=>'loginform', 'id'=>'loginform')); ?>
		<table border="0" cellpadding="0" cellspacing="0">
                <?php if(isset($error_msg)): ?>    
                <tr>
                    <td colspan="2"><strong><?php echo $error_msg; ?></strong></td>
                </tr>
                <?php endif; ?>
				
				
		<tr>
			<th>Username</th>
			<td><?php echo form_input(array('name'=>'user_login','id'=>'user_login', 'class'=>'login-inp', 'placeholder'=>'Enter Username')); ?></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><?php echo form_input(array('type'=>'password', 'name'=>'user_pass', 'id'=>'user_pass', 'class'=>'login-inp', 'placeholder'=>'Enter Password')); ?></td>
		</tr>
		<tr>
			<th></th>
			<td valign="top">
            
            <?php
				 $chkbox = array('class'=>'checkbox-size', 'id'=>'login-check', 'name'=>'login-check');				
				 echo form_checkbox($chkbox); ?><?php echo form_label('Remember me', "login-check"); ?>
            </td>
		</tr>
		<tr>
			<th></th>
			<td><?php echo form_submit(array('name'=>'submit', 'id'=>'submit', 'class'=>'submit-login')); ?><!--<input type="button" class="submit-login"  />--></td>
		</tr>
		</table>
      <?php echo form_close(); ?>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	<a href="" class="forgot-pwd">Forgot Password?</a>
 </div>
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">
		<div id="forgotbox-text">Please send us your email and we'll reset your password.</div>
		<!--  start forgot-inner -->
		<div id="forgot-inner">
        <?php echo form_open(ADMIN.'login/forgetpassword', array('name'=>'forget_password', 'id'=>'forget_password')); ?>
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Email address:</th>
			<td><?php echo form_input(array('name'=>'user_email','id'=>'user_email', 'class'=>'login-inp', 'placeholder'=>'Enter UserEmail')); ?><!--<input type="text" value=""   class="login-inp" />--></td>
		</tr>
		<tr>
			<th> </th>
			<td><?php echo form_submit(array('name'=>'email', 'id'=>'email', 'class'=>'submit-login')); ?></td>
		</tr>
		</table>
        <?php echo form_close(); ?>
		</div>
		<!--  end forgot-inner -->
		<div class="clear"></div>
		<a href="" class="back-login">Back to login</a>
	</div>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
</html>