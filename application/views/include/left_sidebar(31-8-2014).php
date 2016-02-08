            <!--left sidebar-->
            <div id="left_col">
            <img src="<?php echo base_url(); ?>assats/looks/images/left_col_icon.png" width="98" height="141" style="margin-bottom:20px;" />
            <img src="<?php echo base_url(); ?>assats/looks/images/current_issue.png" width="201" height="41" alt="current_issue" style="margin-bottom:15px;" />
            <?php if(isset($current_issue)):?>
            <?php 
				 $issue =  explode(' -', $current_issue[0]->content_title);
			?>
            <div class="inner_left"><!--Quarrying Activities along the Lower Balason River in Darjeeling District, West Bengal.--><?php echo stripslashes($issue[0]);?>      
<span style="float:right">-<!--Lakpa Tamang--><?php echo stripslashes($issue[1]);?></span>            
            </div>
<div class="inner_text">
            	<!--Quite recently, quarrying of materials from the river bed has become an
important source of livelihood along the foot hills of the Darjeeling Hills.
Rivers, originating from the uplands bring down huge quantities of bed
materials of different grades. Larger materials (boulders) are mostly used
for road sloping and wall construction, while medium and smaller grades
(gravels and sands) are used for construction activities. Although it has
been an important income source for the locals-->
				<?php 
					$textval = preg_replace('!^<p>(.*?)</p>$!i', '$1', $current_issue[0]->content);
					echo stripslashes(substr($textval, 0, 500));?>... <br /><br />
			<?php endif; ?>
            <span class="read_more"><a href="<?php echo base_url(); ?>pdf/pdfset-14/issueset-15/1_Priyadarshini_IJSS.pdf" target="_blank">Read More</a></span><br />
         
            </div>
            </div>
            <!--left sidebar end-->
