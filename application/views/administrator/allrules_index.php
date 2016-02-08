<style>
	.odd{background-color:rgba(0, 0, 0, .05);}
	.add_rull{
		background: none repeat scroll 0 0 #4780AE;
		border: 1px solid #7AB7E8;
		color: #FFFFFF;
		display: block;
		margin: -5px 15px 0 0;
		padding: 4px;
		font-size:17px;
		/*moz-border-radius:4px;
		khtml-border-radius:4px;
		webkit*/
		border-radius:5px;
		}
	/*#pagination{color:}*/
</style>
<div id="dashboard">
				<h2 class="ico_mug">Rules Listing
                <a href="<?php echo site_url(ADMIN.'allrules/addnew/'); ?>" class="right add_rull">Add New Rule</a>
                </h2>
				<div class="clearfix" style="display:block;">
                	<?php //echo (isset($alluserdata))?'<h3>'.count($alluserdata).'</h3>':''; ?>
                    
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
                    	
                      <tr style="border-bottom:rgba(0, 0, 0, .60) 1px solid;">
                      	<th width="5%">Number</th>
                      	<th width="36%">Rule Name</th>
                        <th width="20%">Created Date</th>
                        <th width="20%">Updated Date</th>
                        <th width="19%">Required Actions</th>
                      </tr>
                      <tr><td colspan="6" >&nbsp;</td></tr>
                      <tr><td colspan="6" align="right" style="border-bottom:#000 1px solid"><?php //echo $this->pagination->create_links(); ?></td></tr>
                      <tr><td colspan="6">&nbsp;</td></tr>
                      <?php if(isset($all_rules) && count($all_rules)>0):?>
                      <?php 
					  		//$cntstrt = ($pagenumber == '1')?0:$pagenumber;
							$cntstrt = 0;
					  		$cnt = $cntstrt + 1;
					  		foreach($all_rules as $all_rule):
							
								$edit_status = ($all_rule->isblocked=='0')?'1':'0';
							
					  ?>
                      <tr align="center" <?php echo ($cnt%2!=0)?'class="odd"':''; ?>>
                      	<td width="5%" ><?php echo $cnt++;?></td>
                        <td width="36%"><?php echo ucwords($all_rule->rules_title);?></td>
                        <td width="22%"><?php echo $all_rule->created ;?></td>
                        <td width="20%"><?php echo $all_rule->updated ;?></td>
                        <td width="19%"><a href="<?php echo site_url(ADMIN.'allrules/changeState/'.$all_rule->id.'/'.$edit_status.''); ?>"><img src="<?php echo base_url();?>assats/control/img/<?php echo ($all_rule->isblocked=='1')?'status-inactive.png':'status-active.png'; ?>" border="0" /></a>&nbsp;&nbsp;<a href="<?php echo site_url(ADMIN.'allrules/editrule/'.$all_rule->id.''); ?>"><img src="<?php echo base_url();?>assats/control/img/content_edit.png" border="0" /></a></td>
                      </tr>
                      <tr><td colspan="6" height="5"></td></tr>
                      <?php  endforeach; ?>
                      <?php else: ?>
                      	<tr><td colspan="6" align="center">No Row found</td></tr>
                      <?php endif; ?>
                      <tr><td colspan="6" style="border-bottom:#000 1px solid">&nbsp;</td></tr>
                      <tr><td colspan="6" align="right"><?php //echo $this->pagination->create_links(); ?></td></tr>
                      <tr><td colspan="6" style="border-bottom:#000 1px solid">&nbsp;</td></tr>
                    </table>
					
				</div>
			</div>