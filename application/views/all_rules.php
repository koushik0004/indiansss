              
         <div id="middle_col_big">
         
			<?php if(isset($allrules) && !empty($allrules)): ?>
            	<?php foreach($allrules as $allrule):?>
                	<div class="page_header" style="margin-top:15px;">
                <div class="left_curve"></div><div class="rules_title"><?php echo ucwords($allrule->rules_title); ?></div><div class="right_curve"></div>
              </div>
                      <div class="inner">
                        <div class="text">
                            <div class="head_icon"><img src="<?php echo base_url(); ?>assats/looks/images/content_icon.png" width="110" height="31" /></div>
                            <?php echo stripslashes($allrule->rules_content) ; ?>
                            <br />
                            <p></p>
                        </div>
                      </div>
                      <br /><br />
        
                      <div class="clear"></div>
                <?php endforeach; ?>
            <?php else :?>
            		<div class="page_header" style="margin-top:15px;">
                <div class="left_curve"></div><div class="rules_title">General</div><div class="right_curve"></div>
              </div>
                  <div class="inner">
                    <div class="text">
                        <div class="head_icon"><img src="<?php echo base_url(); ?>assats/looks/images/content_icon.png" width="110" height="31" /></div>
                        <ol>
                          <li>
                            <p dir="ltr">The &ldquo;Indian Journal of Spatial Science&rdquo; is a publication of the &ldquo;Indian Society of Spatial Scientists&rdquo; with Head Quarter currently housed at &ldquo;Department of Geography, Presidency University, 86/1 College Street, Kolkata, 700 073&rdquo; and with permanent address at &ldquo;SUMANGAL&rdquo;, 47 Bosepara Road, P.O. – Chandannagar, Dist. – Hooghly, West Bengal, India PIN – 712 136. </p>
                        </li>
                          <li>
                            <p dir="ltr">It publishes &ldquo;Indian Journal of Spatial Science&rdquo; twice a year with Summer and Winter Issues each containing 6 or more Articles.</p>
                        </li>
                          <li>
                            <p dir="ltr">Its editorial board comprises eminent personalities holding positions in academic and research institutions / organizations, and laboratories all over the globe. </p>
                        </li>
                          <li>
                            <p dir="ltr">It reserves the right to revise or modify articles to conform to the journal&rsquo;s style.</p>
                        </li>
                          <li>
                            <p dir="ltr">The views expressed in the article shall however, remain the opinion of the authors, and the editorial board accepts no responsibility for these. </p>
                        </li>
                          <li>
                            <p dir="ltr">Articles which do not strictly abide by the instructions mentioned here are likely to be rejected without further review. </p>
                        </li>
                          <li>
                            <p dir="ltr">All costs towards review, editing, composition, website management, printing and etc (approx. Rs. 2500) shall be borne by the author (s); the amount will be intimated to the author within a few weeks after the article is received. </p>
                        </li>
                          <li>
                            <p dir="ltr">All payments must be made in advance by A/C Payee Cheque drawn in favour of &ldquo;Ashis Sarkar&rdquo;  (only after intimation by the Editor–in–Chief) through Speedpost / Courier to the address : &ldquo;SUMANGAL&rdquo;, 47 Bosepara Road, P.O. – Chandannagar, Dist. – Hooghly, West Bengal, India PIN – 712 136. </p>
                        </li>
                      </ol>
                        <br />
                        <p></p>
                    </div>
                  </div>
                  <br /><br />
    
                  <div class="clear"></div>
            <?php endif; ?>         
              

            
		</div>