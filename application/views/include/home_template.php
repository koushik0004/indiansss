<?php $this->load->view('include/header'); ?>

            <!--left sidebar-->

            <?php $this->load->view('include/left_sidebar');?>

            <!--left sidebar end-->

            <?php /*
            <div id="middle_col">
				<?php if(isset($tot_content) && $tot_content !== FALSE):?>
                	<?php echo stripslashes($tot_content[0]->content); ?>
                <?php else:?>
              <p>eTraverse, The Indian Journal of Spatial Science shall henceforth be known as the "Indian Journal of Spatial Science". It is a publication of the "Indian Society of Spatial Scientists" with Head Quarter currently housed at the "Department of Geography, Presidency University, 86/1 College Street, Kolkata, 700 073" and with permanent address at "SUMANGAL", 47 Bosepara Road, P.O. – Chandannagar, Dist. – Hooghly, West Bengal, India PIN – 712 136. It is concerned with all fields of geography, geology, social sciences, geoinformatics and other spatial sciences. It publishes "Indian Journal of Spatial Science" twice a year with Summer and Winter Issues each containing 6 or more Articles. It is primarily intended for the publication of research papers by the young and innovative scholars of geography and allied disciplines all over the world.</p>
              <?php endif; ?>

              <p><br />

                Editor-in-Chief<br />

              <img src="<?php echo base_url(); ?>assats/looks/images/signature.png" width="98" height="89" alt="Signature"  style="float:left" /> <br />

              

			  <img src="<?php echo base_url(); ?>assats/looks/images/face_picture.png" width="auto" height="auto" alt="Picture" style="margin-left:254px; margin-top:-15px;" /> <br />

              <br />

              <br />

              <br />

              </p>

              <p><a href="<?php echo base_url(); ?>pdf/cv/cv_myself.pdf" target="_blank" style="text-decoration:none; color:#004d58;">Prof. Ashis Sarkar</a> (Dept of Geography, Presidency University, Kolkata)</p>

              <?php //$this->load->view($content_for_layout); ?>

            </div>
            */ ?>
            <div id="middle_col">
              <div class="header-decoration overlap-padding">Welcome to our E-Journal</div>
              <p>eTraverse, The Indian Journal of Spatial Science shall henceforth be known as the "Indian Journal of Spatial Science". It is a publication of the "Indian Society of Spatial Scientists" with Head Quarter currently housed at the "Department of Geography, Presidency University, 86/1 College Street, Kolkata, 700 073" and with permanent address at "SUMANGAL", 47 Bosepara Road, P.O. – Chandannagar, Dist. – Hooghly, West Bengal, India PIN – 712 136. It is concerned with all fields of geography, geology, social sciences, geoinformatics and other spatial sciences. It publishes "Indian Journal of Spatial Science" twice a year with Summer and Winter Issues each containing 6 or more Articles. It is primarily intended for the publication of research papers by the young and innovative scholars of geography and allied disciplines all over the world.</p>
              <p><br />
                Editor-in-Chief<br />
              <img src="<?php echo base_url(); ?>assats/looks/images/signature.png" width="98" height="89" alt="Signature" /> <br />
              <br />
              <br />
              </p>
              <p>Ashis Sarkar (Head, Geography Dept. Presidency University, Kolkata)</p>
                
                 
                <!-- Article Search -->
                <div id="dialog-form" title="Search an Article" class="custom-dialog-form">
                  <p class="validateTips">Enter Auther name or Article title to search.</p>

                  <form>
                    <fieldset>
                        
                      <label for="search_criteria">Search Criteria</label>
                      <div data-name="search_criteria" id="search_criteria" class="ui-custom-radio">
                          <input type="radio" id="radio1" name="radio[]" value="auther_name" text-data="Auther Name"><label for="radio1">Auther Name</label>
                            <input type="radio" id="radio2" name="radio[]" checked="checked" value="article_title" text-data="Article Name"><label for="radio2">Article Name</label>
                            <input type="radio" id="radio3" name="radio[]" value="journal_name" text-data="Journal Name"><label for="radio3">Journal Name</label>
                        </div>
                    
                        <div class="ui-widget">
                      <label for="criteria">Search Word</label>
                      <input type="text" name="criteria" id="criteria" placeholder="Auther name, Article title, journal title" class="text ui-widget-content ui-corner-all">
                        </div>
                      
                      <!-- Allow form submission with keyboard without duplicating the dialog button -->
                      <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
                    </fieldset>
                  </form>
                </div>
                <!-- Article Search -->
                
                <!-- js files only for home_template.php -->
                <script language="javascript" src="<?php echo base_url(); ?>assats/looks/js/custom-homepage-functionality.js"></script>
                <!-- js files only for home_template.php -->
                
            </div>
            <?php //$this->load->view($content_for_layout); ?>
            
            

            <!--Total right sidebar-->

			<?php $this->load->view('include/right_sidebar');?>

            <!--Total right sidebar end-->

            

            <!--footer portion-->

		<?php $this->load->view('include/footer');?>

        	<!--end footer portion-->