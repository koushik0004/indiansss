            <!--left sidebar-->
<?php /*
            <div id="left_col">
            <img src="<?php echo base_url(); ?>assats/looks/images/left_col_icon.png" width="98" height="141" style="margin-bottom:20px;" />
            <img src="<?php echo base_url(); ?>assats/looks/images/current_issue.png" width="201" height="41" alt="current_issue" style="margin-bottom:15px;" />
            <?php if(isset($current_issue)):?>
            <?php 
				 $issue =  explode(' -', $current_issue[0]->content_title);
			?>
            <div class="inner_left"><!--Quarrying Activities along the Lower Balason River in Darjeeling District, West Bengal.--><?php echo isset($issue[0])?stripslashes($issue[0]):'';?> 
<span style="float:right;">-<!--Lakpa Tamang--><?php echo (isset($issue[1]))?stripslashes($issue[1]):'';?></span>            
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
            <span class="read_more"><a href="<?php echo base_url(); ?>pdf/pdfset-20/issueset-21/1_Piratheeparajah.pdf" target="_blank">Read More</a></span><br />
         
            </div>
            </div>
            */ ?>
            <!--left sidebar end-->

            <div id="left_col">
				<div class="header-decoration">Navigation Menu</div>
				<div class="left-col-list-holder">
					<span class="left-col-list-heading">E-Journal</span>
					<ul class="left-col-list">
						<li><a href="#" id="current-issue">Current Issues</a></li>
						<li><a href="#" id="past-issue">Past Issue</a></li>
						<li><a href="#" id="search-article">Search Articles</a></li>
						<li><a href="#" id="research-paper">Research Papers</a></li>
					</ul>
					<hr />
				</div>
				
				<div class="left-col-list-holder">
					<span class="left-col-list-heading">Manuscript Management</span>
					<ul class="left-col-list">
						<li><a href="">Submit a manuscript</a></li>
						<li><a href="">Reviewers' Sign In</a></li>
						<li><a href="<?php echo site_url('login/signup'); ?>">Member Registration</a></li>
						<li><a href="<?php echo site_url('login/'); ?>">Members' Sign In</a></li>
						<li><a href="<?php echo site_url('rules/'); ?>">Authers' Rule Book</a></li>
					</ul>
					<hr />
				</div>
				
				<div class="left-col-list-holder">
					<span class="left-col-list-heading">General Info Pages</span>
					<ul class="left-col-list">
						<li><a href="">News</a></li>
						<li><a href="">Abstracting / Indexing</a></li>
						<li><a href="">Web Statistics</a></li>
						<li><a href="">Editorial Board</a></li>
						<li><a href="">Practical / Useful Links</a></li>
						<li><a href="">Subscriptions</a></li>
					</ul>
				</div>
				
            </div>
