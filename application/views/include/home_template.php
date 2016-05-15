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
                
                
                
                <!-- dialog box wrapper div -->
                <div id="dialog-form" title="Search an Article" class="custom-dialog-form">
                  <!-- <p class="validateTips">Enter Auther name or Article title to search.</p> -->
                    <div class="ui-widget">
                        <div class="ui-state-info ui-corner-all" style="padding: 0 .7em;"> 
                            <p>
                                <span class="ui-icon ui-icon-info" 
                                    style="float: left; margin-right: .3em;"></span>
                                Enter Author name or Article title to search..
                            </p>
                        </div>
                        <div class="ui-state-info ui-corner-all" style="padding: 0 .7em;"> 
                            <p>
                                <span class="ui-icon ui-icon-info" 
                                    style="float: left; margin-right: .3em;"></span>
                                Type atlease 3 characters for the search autocomplete.
                            </p>
                        </div>
                    </div>
                    
                  <form>
                    <fieldset>
                        
                      <label for="search_criteria">Search Criteria</label>
                      <div data-name="search_criteria" id="search_criteria" class="ui-custom-radio search-radio">
                          <input type="radio" id="radio1" name="radio[]" value="author_name" text-data="Author Name" checked="checked"><label for="radio1">Auther Name</label>
                            <input type="radio" id="radio2" name="radio[]" value="article_title" text-data="Article Name"><label for="radio2">Article Name</label>
                            <!--<input type="radio" id="radio3" name="radio[]" value="journal_name" text-data="Journal Name"><label for="radio3">Journal Name</label>-->
                        </div>
                    
                        <div class="ui-widget">
                      <label for="criteria">Search Word</label>
                      <input type="text" name="criteria" id="criteria" placeholder="Author name, Article title, journal title" class="text ui-widget-content ui-corner-all criteria-text">
                        </div>
                      
                      <!-- Allow form submission with keyboard without duplicating the dialog button -->
                      <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
                    </fieldset>
                  </form>
                </div>
                <!-- dialog box wrapper div -->
                
                <!-- Past Issues dialog -->
                <div id="dialog-pass-issues" title="Past Issues" class="custom-dialog-form past-issue-dialog">
                  <!-- <p class="validateTips">Enter Auther name or Article title to search.</p> -->
                    <div class="ui-widget">
                        <div class="ui-state-info ui-corner-all" style="padding: 0 .7em;"> 
                            <p>
                                <span class="ui-icon ui-icon-info" 
                                    style="float: left; margin-right: .3em;"></span>
                                Please select yaer and issue..
                            </p>
                        </div>
                        <div class="ui-state-info ui-corner-all" style="padding: 0 .7em;"> 
                            <p>
                                <span class="ui-icon ui-icon-info" 
                                    style="float: left; margin-right: .3em;"></span>
                                Please put issue year in textbox from <span id="past-issue-year-min">2010</span> to <span id="past-issue-year-max"><?php echo (isset($current_year_past_issue) && $current_year_past_issue!='')?$current_year_past_issue:date('Y'); ?></span>
                            </p>
                        </div>
                        <div class="ui-state-alert ui-corner-all year-error-msg" style="padding: 0 .7em; display:none;"> 
                            <p>
                                <span class="ui-icon ui-icon-alert" 
                                    style="float: left; margin-right: .3em;"></span>
                                Please put year of issue in proper format (i.e. 2010 to <?php echo (isset($current_year_past_issue) && $current_year_past_issue!='')?$current_year_past_issue:date('Y'); ?>)
                            </p>
                        </div>
                    </div>
                    
                    
                    
                  <form>
                    <fieldset>
                        
                      <label for="search_criteria_past">Search Criteria</label>
                      <div data-name="search_criteria" id="search_criteria_past" class="ui-custom-radio past-issue-radio">
                          <input type="radio" id="radio_summer" name="radio[]" value="Summer Issue" text-data="Summer Issue" checked="checked"><label for="radio_summer">Summer Issue</label>
                            <input type="radio" id="radio_winter" name="radio[]" value="Winter Issue" text-data="Winter Issue"><label for="radio_winter">Winter Issue</label>
                            
                        </div>
                    
                        <div class="ui-widget">
                      <label for="criteria_past">Search Word</label>
                      <input type="text" name="issue_year" id="issue_year" placeholder="Issue year (in YYYY format only, 2010)" class="text ui-widget-content ui-corner-all criteria-text">
                        </div>
                      
                      <!-- Allow form submission with keyboard without duplicating the dialog button -->
                      <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
                    </fieldset>
                  </form>
                </div>
                <!-- Past Issues dialog -->
                
                <!-- Article Search -->
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