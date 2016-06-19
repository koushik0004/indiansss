<style>
	.odd{background-color:rgba(0, 0, 0, .05);}
	/*#pagination{color:}*/
</style>
<div id="dashboard">
				<h2 class="ico_mug">Submitted Manuscript Listing</h2>
				<div class="clearfix" style="display:block;">
                	<?php //echo (isset($alluserdata))?'<h3>'.count($alluserdata).'</h3>':''; ?>
                    
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
                    	
                      <tr style="border-bottom:rgba(0, 0, 0, .60) 1px solid;">
                      	<th width="5%">Counter</th>
                        <th width="20%">Title</th>
                        <th width="20%">Written By</th>
                        <th width="18%">Download URL</th>
                        <th width="18%">created Date</th>
                        <th width="19%">Required Actions</th>
                      </tr>
                      <tr><td colspan="6" >&nbsp;</td></tr>
                      <tr><td colspan="6" align="right" style="border-bottom:#000 1px solid"><?php echo $this->pagination->create_links(); ?></td></tr>
                      <tr><td colspan="6">&nbsp;</td></tr>
                        <tr><td colspan="6"><?php echo $this->session->flashdata('item.status'); ?></td></tr>
                        
                        <?php //print_r($all_manuscript); ?>
                      <?php if(isset($all_manuscript)):?>
                      <?php 
					  		$cntstrt = ($pagenumber == '1')?0:$pagenumber;
					  		$cnt = $cntstrt + 1;
					  		foreach($all_manuscript as $single):
							
								$approved_status = ($single['isapproved']=='0')?'1':'0';
							
					  ?>
                      <tr align="center" <?php echo ($cnt%2!=0)?'class="odd"':''; ?>>
                      	<td width="5%" ><?php echo $cnt++;?></td>
                        <td width="14%"><?php echo ucwords($single['title']);?></td>
                        <td width="22%"><?php echo $single['written_by'];?></td>
                        <td width="20%">
                            <a href="<?php echo base_url().$single['upload_path'];?>" class="pdf-download" title="click to see the manuscript" target="_blank"><img src="<?php echo base_url(); ?>assats/control/img/pdficon.png" border="0" style="vertical-align:middle;"/></a>
                        </td>
                        <td width="20%"><?php echo $single['created'];?></td>
                        <td width="19%"><a href="<?php echo site_url(ADMIN.'journals/manuscript_approval/'.$single['id'].'/'.$approved_status.'/'.$pagenumber.''); ?>" title="<?php echo 'Click to '.($single['isapproved']=='1'?'disapprove':'approve').' the mmanuscript'; ?>"><img src="<?php echo base_url();?>assats/control/img/<?php echo ($single['isapproved']=='1')?'status-inactive.png':'status-active.png'; ?>" border="0" /></a>&nbsp;&nbsp;<a href="<?php echo site_url(ADMIN.'journals/delete_manuscript/'.$single['id'].'/'.$pagenumber.''); ?>" title="delete manuscript"><img src="<?php echo base_url();?>assats/control/img/delete-user.png" border="0" /></a></td>
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