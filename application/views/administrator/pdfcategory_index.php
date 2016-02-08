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
				<h2 class="ico_mug">Journal Category Listing
                <a href="<?php echo site_url(ADMIN.'pdfcategory/addnew/'); ?>" class="right add_rull">Add New Category</a>
                </h2>
				<div class="clearfix" style="display:block;">
                	<?php //echo (isset($alluserdata))?'<h3>'.count($alluserdata).'</h3>':''; ?>
                    
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
                    	
                      <tr style="border-bottom:rgba(0, 0, 0, .60) 1px solid;">
                      	<th width="5%">Number</th>
                      	<th width="20%">Category Name</th>
                        <th width="20%">Parent Category</th>
                        <th width="18%">Created</th>
                        <th width="18%">Updated</th>
                        <th width="19%">Required Actions</th>
                      </tr>
                      <tr><td colspan="6" >&nbsp;</td></tr>
                      <tr><td colspan="6" align="right" style="border-bottom:#000 1px solid"><?php //echo $this->pagination->create_links(); ?></td></tr>
                      <tr><td colspan="6">&nbsp;</td></tr>
                      <?php if(isset($all_pdfcategory)):?>
                      <?php 
					  		//$cntstrt = ($pagenumber == '1')?0:$pagenumber;
							$cntstrt = 0;
					  		$cnt = $cntstrt + 1;
					  		foreach($all_pdfcategory as $tot_page):
							
								$edit_status = ($tot_page->isblocked=='0')?'1':'0';
							
					  ?>
                      <tr align="center" <?php echo ($cnt%2!=0)?'class="odd"':''; ?>>
                      	<td width="5%" ><?php echo $cnt++;?></td>
                        <td width="20%"><?php echo (($tot_page->parent_id=='0')?'<img src="'.base_url().'assats/control/img/'.'list_category.png'.'" border="0" style="vertical-align:middle;"/> ':'').ucwords($tot_page->category_name);?></td>
                        <td width="20%"><?php echo (!empty($tot_page->parent_category_name))? ucwords($tot_page->parent_category_name):'Parent Category';?></td>
                        <td width="18%"><?php echo $tot_page->created ;?></td>
                        <td width="18%"><?php echo $tot_page->updated ;?></td>
                        <td width="19%"><a href="<?php echo site_url(ADMIN.'pdfcategory/changeState/'.$tot_page->id.'/'.$edit_status.''); ?>"><img src="<?php echo base_url();?>assats/control/img/<?php echo ($tot_page->isblocked=='1')?'status-inactive.png':'status-active.png'; ?>" border="0" /></a>&nbsp;&nbsp;<a href="<?php echo site_url(ADMIN.'pdfcategory/editpdfcategory/'.$tot_page->id.''); ?>"><img src="<?php echo base_url();?>assats/control/img/content_edit.png" border="0" /></a></td>
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