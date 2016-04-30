            <!--Total right sidebar-->
            <style>
				.archive{list-style:none; margin:0; padding:5px 10px 10px 20px; text-align:left; line-height:21px;}
				.archive a{text-decoration:none;}
				.archive a:hover, .archive a:focus{text-decoration:underline;}
				.archive .vol {display:none;}
				.archive .vol ul{line-height:10px;}
				.archive .vol .vol-pdf{display:none;}
            </style>
            <div class="right_article"><img src="<?php echo base_url(); ?>assats/looks/images/publication_archive.png" width="202" height="27" alt="Publication" />
            	<?php 
					$pdf_parent_cat = (isset($pdf_parent_cat))?$pdf_parent_cat:'';
					$pdf_child_cat = (isset($pdf_child_cat))?$pdf_child_cat:'';
					$end_chld_err = array();
					$end_li_arr = array();
					if(!empty($pdf_parent_cat)){
						foreach($pdf_parent_cat as $key=>$val){
							$end_li_arr[] = $key;
						}
					}
					if(!empty($pdf_child_cat)){
						foreach($pdf_child_cat as $key=>$val){
							$end_chld_err[] = $key;
						}
					}
					//print_r($end_chld_err);
				?>
              <ul style="" class="archive">
              	<?php 
					if(isset($all_journals) && !empty($all_journals) && !empty($pdf_parent_cat)):
					//print_r($pdf_parent_cat);
				?>
                <li>
                	<?php
						$parent_cat = '';
						$associated_cat = '';
						$end_li = 1;
						$end_test = 1;
						$end_chld_li = 1;
						$end_ul_test = 1;
						foreach($all_journals as $journal_data):
							//$nextObj = next($journal_data);
							//echo $journal_data->next->parent_category;
							//echo $end_li_arr[$end_li]
							//echo $journal_data->cat_id;
					?>
					<?php if(($end_chld_li<count($end_chld_err)) && $end_chld_err[$end_chld_li] == $journal_data->cat_id && $end_ul_test == 0):?>
                        		</ul></li>
                        <?php 
								$end_ul_test = 1;
								$end_chld_li++;
							endif; 
						?>
                    <?php if(($end_li<count($end_li_arr)) && $end_li_arr[$end_li] == $journal_data->parent_category && $end_test == 0):?>    
                    	</ul></li><li>
                    <?php 
							$end_test = 1;
							$end_li++;
						endif; 
					?>
                    
                    
                        
                    <?php if($parent_cat != $journal_data->parent_category):?>
                    
                    <a href="#" style="color:#0a546a"><?php echo $pdf_parent_cat[$journal_data->parent_category]; ?></a>
                    <ul class="vol">
                    <?php 
							$end_test = 0;
							$parent_cat = $journal_data->parent_category;
						endif; 
					?>
                    
                    
                        
						<?php if($associated_cat != $journal_data->under_category):?>
                            
                            <li><a href="#" style="color:#0a546a" id="vol_2010_cont_href1"><?php echo $journal_data->under_category; ?></a>
                            <ul class="vol-pdf">
                         <?php 
						 		$end_ul_test = 0;
						 		$associated_cat = $journal_data->under_category;
						 	endif; ?>
                                        <li><a href="<?php echo base_url().$journal_data->upload_path; ?>" style="color:#0a546a" id="vol_2010_cont_pdf_href1" target="_blank"><?php echo substr($journal_data->title, 0, 20).'..'?></a></li>
                                
                                <?php /*?><li><a href="#" style="color:#0a546a" id="vol_2010_cont_href2">Winter Issues(3)</a>
                                    <ul id="vol_2010_cont_href2_pdf" class="vol-pdf">
                                        <li><a href="<?php echo base_url(); ?>pdf/Vol_1_No_2/Art_003.pdf" style="color:#0a546a" id="vol_2010_cont_pdf_href1" target="_blank"><?php echo substr('Landscape Analysis using Multidated Data Layers from Topographical Map and Satellite Images', 0, 20).'..'?></a></li>
                                        <li><a href="<?php echo base_url(); ?>pdf/Vol_1_No_2/Art_004.pdf" style="color:#0a546a" id="vol_2010_cont_pdf_href1" target="_blank"><?php echo substr('Strengthening Urban Green Infrastructure', 0, 20).'..'?></a></li>
                                        <li><a href="<?php echo base_url(); ?>pdf/Vol_1_No_2/Art_005.pdf" style="color:#0a546a" id="vol_2010_cont_pdf_href1" target="_blank"><?php echo substr('Identifying Human Behaviour by using Soil Micromorphology— a geoarchaeological approach', 0, 20).'..'?></a></li>
                                    </ul>
                                </li><?php */?>
                        
                    
					
                    
					<?php 
						endforeach;
					?>
                    </li>
                <?php 
					endif;
				?>
            	
            </ul>
            </div>
            <div id="right_col">
       	    <img src="<?php echo base_url(); ?>assats/looks/images/related_site.png" width="202" height="27" alt="Related Site" />
            <ul>
            	<?php if(isset($sidebar_links)): ?>
                	<?php foreach($sidebar_links as $link):?>
            			<li><a href="<?php echo $link->url; ?>" target="_blank"><?php echo $link->title; ?></a></li>
                    <?php endforeach; ?>
                <?php endif; ?>
                <!--www.aag.org<li><a href="#" style="color:#0a546a">www.rdgs.dk</a></li>
                <li><a href="#" style="color:#0a546a">www.ccsenet.org</a></li>
                <li><a href="#" style="color:#0a546a">www.springer.com</a></li>
                <li><a href="#" style="color:#0a546a">www.iosrjournals.org</a></li>
                <li><a href="#" style="color:#0a546a">www.omicsgroup.org</a></li>
                <li><a href="#" style="color:#0a546a">www.tandfonline.com</a></li>
                <li><a href="#" style="color:#0a546a">www.academicjournals.org</a></li>
                <li><a href="#" style="color:#0a546a">www.onlinelibrary.wiley.com</a></li>
                <li><a href="#" style="color:#0a546a">www.antipodefoundation.org</a></li>
                <li><a href="#" style="color:#0a546a">www.myncge.bravehearts.com</a></li>
                <li><a href="#" style="color:#0a546a">www.eurogeographyjournal.eu</a></li>-->
            </ul>
            </div>
            <!--Total right sidebar end-->
