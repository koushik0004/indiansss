 <style>
 	.error{color:#900;  font-weight:bold; font-size:14px;}
 </style>
 <div id="middle_col_big">
              <div class="page_header">
                <div class="left_curve"></div><div class="rules_title">User Login</div><div class="right_curve"></div>
              </div>
              <div class="inner">
              	<div class="text">
                	<div class="head_icon"><img src="<?php echo base_url(); ?>assats/looks/images/content_icon.png" width="110" height="31" /></div>
                	<h1>Login Here</h1>
                <?php 
					echo form_open('login/userlogin', array('class'=>'reg-form'));
					//echo '<p>';
					//echo '<h3>User Info</h3>';
				?>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
					   <tr>
						<td colspan="2" align="center" style="color:#033e56; font-size:14px; font-weight:bold;">
                        	<?php echo (isset($loginfirest))?''.$loginfirest.'':'&nbsp;';
							?>
                        </td>
					  </tr>
                      <tr>
						<td colspan="2" align="center">&nbsp;
                        	
                        </td>
					  </tr>
                      <tr>
						<td colspan="2" align="center">
						<?php 
							echo validation_errors('<div class="error">'); 
						?>
                        </td>
					  </tr>
                       <tr>
						<td><strong><?php echo form_label('Enter Email:', 'email');?></strong></td>
						<td><?php echo form_input(array('name'=>'email', 'id'=>'email', 'size'=>'30', 'placeholder'=>'Your Email'));?></td>
					  </tr>
                      <tr>
						<td><strong><?php echo form_label('Enter Password:', 'passwd');?></strong></td>
						<td><?php echo form_password(array('name'=>'passwd', 'id'=>'passwd', 'size'=>'30', 'placeholder'=>'Provide Password'));?></td>
					  </tr>
                     
                      	<td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
						<td><?php //echo form_label('Retype Password:', 'repass');
							$imgpath = base_url().'assats/looks/images/button.png';
						?></td>
						<td><?php echo form_submit(array('name'=>'submit', 'id'=>'submit', 'type'=>'image', 'src'=>$imgpath));?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo anchor('login/signup', 'New User?', array('title'=>'signup', 'style'=>'text-decoration:none;')); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo anchor('login/forgetpass', 'Forgot Password?', array('title'=>'signin', 'style'=>'text-decoration:none;')); ?></td>
					  </tr>
					</table>
				<br />
                
                <?php 
						
						echo form_close();
				?>				
										
		
                	<br />
					<p></p>
              	</div>
              </div>
             
		</div>
        