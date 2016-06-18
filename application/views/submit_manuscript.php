 <style>
 	.error{color:#900; font-weight:bold; font-size:14px;}
 </style>
 <div id="middle_col_big">
              <div class="page_header">
                <div class="left_curve"></div><div class="rules_title">Manuscript Submission</div><div class="right_curve"></div>
              </div>
              <div class="inner">
              	<div class="text">
                	<div class="head_icon"><img src="<?php echo base_url(); ?>assats/looks/images/content_icon.png" width="110" height="31" /></div>
                	<h1>Upload Manuscript Here</h1>
                <?php 
					echo form_open('login/upload_manuscript', array('class'=>'reg-form', 'enctype'=>'multipart/form-data', 'name'=>'upload_manuscript', 'id'=>'upload_manuscript'));
					//echo '<p>';
					//echo '<h3>User Info</h3>';
				?>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td colspan="2">
                            <?php echo $this->session->flashdata('upload_manuscript'); ?>
                        </td>
                    </tr>    
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
						<td><strong><?php echo form_label('Manuscript Title:', 'title');?></strong></td>
						<td><?php echo form_input(array('name'=>'title', 'id'=>'title', 'size'=>'30', 'placeholder'=>'Manuscript Title', 'value'=>$this->input->post('title')));?></td>
					  </tr> 
                      <tr>
						<td><strong><?php echo form_label('Written By:', 'written_by');?></strong></td>
						<td><?php echo form_input(array('name'=>'written_by', 'id'=>'written_by', 'size'=>'30', 'placeholder'=>'Writer Name', 'value'=>$this->input->post('written_by')));?></td>
					  </tr>
                       <tr>
						<td><strong><?php echo form_label('Few Words about Manuscript:', 'content');?></strong></td>
						<td><?php echo form_textarea(array('name'=>'content', 'id'=>'content', 'rows'=>'5', 'cols'=>'5', 'value'=>$this->input->post('content')));?></td>
					  </tr>
                      <tr>
						<td><strong><?php echo form_label('Upload Manuscript File:', 'upload_path');?></strong></td>
						<td><?php echo form_upload(array('name'=>'upload_path','id'=>'upload_path', 'title'=>'file sholud be uploaded as pdf or doc format'));?></td>
					  </tr>
                      <tr>
                      	<td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
						<td><?php $imgpath = base_url().'assats/looks/images/button.png'; ?></td>
						<td><?php echo form_submit(array('name'=>'submit', 'id'=>'submit', 'type'=>'image', 'src'=>$imgpath));?></td>
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