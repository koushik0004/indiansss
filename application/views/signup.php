 <style>
 	.error{color:#900; font-weight:bold; font-size:14px;}
 </style>
 <div id="middle_col_big">
              <div class="page_header">
                <div class="left_curve"></div><div class="rules_title">New Users Registration</div><div class="right_curve"></div>
              </div>
              <div class="inner">
              	<div class="text">
                	<div class="head_icon"><img src="<?php echo base_url(); ?>assats/looks/images/content_icon.png" width="110" height="31" /></div>
                	<h1>Register Here</h1>
                <?php 
					echo form_open('login/create_user', array('class'=>'reg-form'));
					//echo '<p>';
					//echo '<h3>User Info</h3>';
				?>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					  </tr>
                       
                      <tr>
						<td colspan="2" align="center">
                        	<?php 
								if(isset($success_message)):
							?>
                            <img src="<?php echo base_url();?>assats/looks/images/after-sign-up.png" border="0" usemap="#Map_signup"/>
                            <map name="Map_signup" id="Map_signup">
                              <area shape="rect" coords="541,56,659,89" href="<?php echo site_url('login/'); ?>" />
                            </map>
                            <?php 
								endif;
							?>
                            <div class="error"><?php echo (isset($emailexists))?''.$emailexists.'':''; ?></div>
                        </td>
					  </tr> 
                      <tr>
						<td colspan="2" align="center"><?php echo validation_errors('<div class="error">'); ?></td>
					  </tr>
					  <tr>
						<td><strong><?php echo form_label('Enter Name:', 'name');?></strong></td>
						<td><?php echo form_input(array('name'=>'name', 'id'=>'name', 'size'=>'30', 'placeholder'=>'Your Name', 'value'=>$this->input->post('name')));?></td>
					  </tr> 
                      <tr>
						<td><strong><?php echo form_label('Enter Email:', 'email');?></strong></td>
						<td><?php echo form_input(array('name'=>'email', 'id'=>'email', 'size'=>'30', 'placeholder'=>'Your Email', 'value'=>$this->input->post('email')));?></td>
					  </tr>
                       <tr>
						<td><strong><?php echo form_label('Provide Something About You:', 'comments');?></strong></td>
						<td><?php echo form_textarea(array('name'=>'comments', 'id'=>'comments', 'rows'=>'5', 'cols'=>'5', 'value'=>$this->input->post('comments')));?></td>
					  </tr>
                       <?php /*?><tr>
						<td><?php echo form_label('Enter Username:', 'uname1');?></td>
						<td><?php echo form_input(array('name'=>'uname1', 'id'=>'uname1', 'size'=>'30', 'placeholder'=>'Choose Username'));?></td>
					  </tr><?php */?>
                      <tr>
						<td><strong><?php echo form_label('Enter Password:', 'passwd');?></strong></td>
						<td><?php echo form_password(array('name'=>'passwd', 'id'=>'passwd', 'size'=>'30', 'placeholder'=>'Choose Password'));?></td>
					  </tr>
                      <tr>
						<td><strong><?php echo form_label('Retype Password:', 'repass');?></strong></td>
						<td><?php echo form_password(array('name'=>'repass', 'id'=>'repass', 'size'=>'30', 'placeholder'=>'Retype Password'));?></td>
					  </tr>
                      <tr>
                      	<td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
						<td><?php //echo form_label('Retype Password:', 'repass');
							$imgpath = base_url().'assats/looks/images/button.png';
						?></td>
						<td><?php echo form_submit(array('name'=>'submit', 'id'=>'submit', 'type'=>'image', 'src'=>$imgpath));?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo anchor('login/', 'Already an user?', array('title'=>'signin', 'style'=>'text-decoration:none;')); ?></td>
					  </tr>
					</table>
					<?php
					
					//echo form_input(array('name'=>'name', 'id'=>'name', 'size'=>'30', 'placeholder'=>'Your Name'));
					//echo form_label('Enter Email:', 'email');
					//echo form_input(array('name'=>'email', 'id'=>'email', 'size'=>'30', 'placeholder'=>'Your Email'));
					//echo form_label('Provide Something About You:', 'comments');
					//echo form_textarea(array('name'=>'comments', 'id'=>'comments', 'rows'=>'5', 'cols'=>'5'));
					//echo '<br/>';
					//echo '</p><br /><br />';
					//echo '<h1>Login Info</h1>';
					
					
					//echo '<p>';
					//echo form_label('Enter Username:', 'uname1');
					//echo form_input(array('name'=>'uname1', 'id'=>'uname1', 'size'=>'30', 'placeholder'=>'Choose Username'));
					//echo form_label('Enter Password:', 'passwd');
					//echo form_password(array('name'=>'passwd', 'id'=>'passwd', 'size'=>'30', 'placeholder'=>'Choose Password'));
					//echo form_label('Retype Password:', 'repass');
					//echo form_password(array('name'=>'repass', 'id'=>'repass', 'size'=>'30', 'placeholder'=>'Retype Password'));
					//echo '<br/><br />';
					
					//echo form_submit(array('name'=>'submit', 'id'=>'submit', 'class'=>'button', 'value'=>'Submit Query', 'style'=>'cursor:pointer;'));
					echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					//echo '<br/><br/>';
					//echo anchor('login/signin', 'Already A user?', array('title'=>'signin', 'style'=>'text-decoration:none;'));
					//echo '</p>';
					
				?>
				<br />
                
                <?php 
						
						echo form_close();
				?>				
										
		
                	<br />
					<p></p>
              	</div>
              </div>
             
		</div>