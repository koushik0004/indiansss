              
         <div id="middle_col_big">
         
			<?php if(isset($pagecontent) && !empty($pagecontent)): ?>
            		<div class="page_header" style="margin-top:15px;">
                <div class="left_curve"></div><div class="rules_title"><?php echo $pagecontent['content_title']; ?></div><div class="right_curve"></div>
              </div>
                  <div class="inner">
                    <div class="text">
                        <div class="head_icon"><img src="<?php echo base_url(); ?>assats/looks/images/content_icon.png" width="110" height="31" /></div>
                        <?php echo $pagecontent['content']; ?>
                        <br />
                        <p></p>
                    </div>
                  </div>
                  <br /><br />
    
                  <div class="clear"></div>
            <?php else: ?>
                    <div class="page_header" style="margin-top:15px;">
                <div class="left_curve"></div><div class="rules_title">Unknown Page</div><div class="right_curve"></div>
              </div>
                  <div class="inner">
                    <div class="text">
                        <div class="head_icon"><img src="<?php echo base_url(); ?>assats/looks/images/content_icon.png" width="110" height="31" /></div>
                        Still No Content.
                        <br />
                        <p></p>
                    </div>
                  </div>
                  <br /><br />
    
                  <div class="clear"></div>
            <?php endif; ?>         
              

            
		</div>