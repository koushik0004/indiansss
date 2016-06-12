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
                    
                  <form name="article-search" action="<?php echo base_url();?>home/search-article" type="POST">
                    <fieldset>
                        
                      <label for="search_criteria">Search Criteria</label>
                      <div data-name="search_criteria" id="search_criteria" class="ui-custom-radio search-radio">
                          <input type="radio" id="radio1" name="radio" value="author_name" text-data="Author Name" checked="checked"><label for="radio1">Auther Name</label>
                            <input type="radio" id="radio2" name="radio" value="article_title" text-data="Article Name"><label for="radio2">Article Name</label>
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
                                Please select year and issue..
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
                    
                    
                    
                  <form name="past-issue-search" action="<?php echo base_url();?>home/search-past-issue" type="POST">
                    <fieldset>
                        
                      <label for="search_criteria_past">Search Criteria</label>
                      <div data-name="search_criteria" id="search_criteria_past" class="ui-custom-radio past-issue-radio">
                          <input type="radio" id="radio_summer" name="category_name" value="Summer Issue" text-data="Summer Issue" checked="checked"><label for="radio_summer">Summer Issue</label>
                            <input type="radio" id="radio_winter" name="category_name" value="Winter Issue" text-data="Winter Issue"><label for="radio_winter">Winter Issue</label>
                            
                        </div>
                    
                        <div class="ui-widget">
                      <label for="criteria_past">Search Word</label>
                      <input type="text" name="issueing_year" id="issue_year" placeholder="Issue year (in YYYY format only, 2010)" class="text ui-widget-content ui-corner-all criteria-text" autocomplete="off">
                        </div>
                      
                      <!-- Allow form submission with keyboard without duplicating the dialog button -->
                      <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
                    </fieldset>
                  </form>
                </div>
                <!-- Past Issues dialog -->
                
                <!-- Current Issue -->
                <div id="dialog-current-issues" title="Current Issues" class="custom-dialog-form current-issue-dialog">
                    <div class="ui-widget">
                        <div class="ui-state-info ui-corner-all" style="padding: 0 .7em;"> 
                            <p>
                                <span class="ui-icon ui-icon-info" 
                                    style="float: left; margin-right: .3em;"></span>
                                All the listed issues are current release
                            </p>
                        </div>
                        <div class="ui-state-info ui-corner-all" style="padding: 0 .7em;"> 
                            <p>
                                <span class="ui-icon ui-icon-info" 
                                    style="float: left; margin-right: .3em;"></span>
                                <?php echo $only_current_journal[0]['under_category']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="dialog-body-content">
                        <?php if(isset($only_current_journal) && count($only_current_journal)>0): ?>
                        <ul class="list-issues">
                            <?php foreach($only_current_journal as $key=>$val): ?>
                                <li>
                                    <a href="<?php echo base_url($val['upload_path']); ?>" class="btn buy-btn ui-corner-all" data-login="checkLoggedin">
                                        <span class="content top"><?php echo ((strlen($val['title'])>60)?substr($val['title'], 0, 60).'...':$val['title']) ; ?></span>
                                        <span class="content buttom"><?php echo $val['written_by']; ?></span>
                                      </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    <?php //print_r($only_current_journal); ?>
                </div>
                <!-- Current Issue -->
                
                <!-- Search result -->
                <div id="dialog-search-result" title="Search Result" class="custom-dialog-form search-result-dialog">
                    <div class="ui-widget">
                        <div class="ui-state-info ui-corner-all" style="padding: 0 .7em;"> 
                            <p>
                                <span class="ui-icon ui-icon-info" 
                                    style="float: left; margin-right: .3em;"></span>
                                Search result is according to the search criteria
                            </p>
                        </div>
                        <div class="ui-state-info ui-corner-all" style="padding: 0 .7em;"> 
                            <p>
                                <span class="ui-icon ui-icon-info" 
                                    style="float: left; margin-right: .3em;"></span>
                                Total Search Result (<span id="search-count">0</span>)
                            </p>
                        </div>
                    </div>
                    <div class="dialog-body-content">
                        <ul class="list-issues"></ul>
                        <section class="ajax-loading">
                            <figure>
                                <img class="loaging-img" src="<?php echo base_url(); ?>assats/looks/images/cube.gif" />
                                <figcaption>Loading, please wait...</figcaption>
                            </figure>
                        </section>
                    </div>
                </div>
                <!-- Search result -->
                

                <!-- dummy data for list searched articles -->
                <div id="listed-searched-article" style="display: none;">
                    <li>
                        <a href="@upload_path" class="btn buy-btn ui-corner-all" data-login="checkLoggedin">
                            <span class="content top">@article_title</span>
                            <span class="content buttom">@auther</span>
                          </a>
                    </li>
                </div>
                
                <!-- -->
                <!-- js files only for home_template.php -->
                <script language="javascript" src="<?php echo base_url(); ?>assats/looks/js/custom-homepage-functionality.js"></script>
                <!-- js files only for home_template.php -->