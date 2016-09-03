<style>
	.odd{background-color:rgba(0, 0, 0, .05);}
	/*#pagination{color:}*/
</style>
<div id="dashboard">
				<h2 class="ico_mug">User Listing</h2>
				<div class="clearfix" style="display:block;">
                	<?php //echo (isset($alluserdata))?'<h3>'.count($alluserdata).'</h3>':''; ?>
                    
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
                    	
                      <tr style="border-bottom:rgba(0, 0, 0, .60) 1px solid;">
                      	<th width="5%">Counter</th>
                        <th width="20%">User Full Name</th>
                        <th width="20%">Email</th>
                        <th width="18%">Joined Date</th>
                        <th width="18%">Last Login</th>
                        <th width="19%">Required Actions</th>
                      </tr>
                      <tr><td colspan="6" >&nbsp;</td></tr>
                      <tr><td colspan="6" align="right" style="border-bottom:#000 1px solid"><?php echo $this->pagination->create_links(); ?></td></tr>
                      <tr><td colspan="6">&nbsp;</td></tr>
                      <?php if(isset($alluserdata)):?>
                      <?php 
					  		$cntstrt = ($pagenumber == '1')?0:$pagenumber;
					  		$cnt = $cntstrt + 1;
					  		foreach($alluserdata as $userdata):
							
								$edit_status = ($userdata->status=='0')?'1':'0';
                $paid_status = ($userdata->paid=='0')?'1':'0';
							
					  ?>
                      <tr align="center" <?php echo ($cnt%2!=0)?'class="odd"':''; ?>>
                      	<td width="5%" ><?php echo $cnt++;?></td>
                        <td width="14%"><?php echo ucwords($userdata->fullname);?></td>
                        <td width="22%"><?php echo $userdata->email;?></td>
                        <td width="20%"><?php echo $userdata->created;?></td>
                        <td width="20%"><?php echo $userdata->last_login;?></td>
                        <td width="19%"><a href="<?php echo site_url(ADMIN.'allusers/changePaidMode/'.$userdata->id.'/'.$paid_status.'/'.$pagenumber.''); ?>"><img src="<?php echo base_url();?>assats/control/img/<?php echo ($userdata->paid=='0')?'unpaid-member.png':'paid-member.png'; ?>" border="0" title="<?php echo 'Click to change '.(($userdata->paid=='0')?'paid user':'unpaid user'); ?>"/></a>&nbsp;&nbsp;<a href="<?php echo site_url(ADMIN.'allusers/changeState/'.$userdata->id.'/'.$edit_status.'/'.$pagenumber.''); ?>"><img src="<?php echo base_url();?>assats/control/img/<?php echo ($userdata->status=='0')?'status-inactive.png':'status-active.png'; ?>" border="0" title="<?php echo 'Click to change '.(($userdata->status=='0')?'active user':'inactive user'); ?>"/></a>&nbsp;&nbsp;<a href="<?php echo site_url(ADMIN.'allusers/deleteuser/'.$userdata->id.'/'.$pagenumber.''); ?>"><img src="<?php echo base_url();?>assats/control/img/delete-user.png" border="0" title="click to delete the user"/></a></td>
                      </tr>
                      <tr><td colspan="6" height="5"></td></tr>
                      <?php  endforeach; ?>
                      <?php endif; ?>
                      <tr><td colspan="6" style="border-bottom:#000 1px solid">&nbsp;</td></tr>
                      <tr><td colspan="6" align="right"><?php echo $this->pagination->create_links(); ?></td></tr>
                      <tr><td colspan="6" style="border-bottom:#000 1px solid">&nbsp;</td></tr>
                    </table>
					
				</div>
			</div>