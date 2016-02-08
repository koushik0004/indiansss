<!-- #shortcuts starts here-->
<div id="shortcuts" class="clearfix">
				<h2 class="ico_mug">Panel shortcuts</h2>
				<ul>
					<li <?php echo (isset($pagename) && $pagename == 'dashboard')?'class="first_li"':''; ?> id="ll"><a href="<?php echo site_url(ADMIN.'dashboard/'); ?>"><img src="<?php echo base_url();?>assats/control/img/theme.jpg" alt="themes" /><span>Themes</span></a></li>
					<?php /*?><li><a href=""><img src="<?php echo base_url();?>assats/control/img/statistic.jpg" alt="statistics" /><span>Statistics</span></a></li>
					<li><a href=""><img src="<?php echo base_url();?>assats/control/img/ftp.jpg" alt="FTP" /><span>FTP</span></a></li><?php */?>
					<li <?php echo (isset($pagename) && $pagename == 'allusers')?'class="first_li"':''; ?> ><a href="<?php echo site_url(ADMIN.'allusers/'); ?>"><img src="<?php echo base_url();?>assats/control/img/users.jpg" alt="Users" /><span>Users</span></a></li>
					<li <?php echo (isset($pagename) && $pagename == 'allrules')?'class="first_li"':''; ?>><a href="<?php echo site_url(ADMIN.'allrules/'); ?>"><img src="<?php echo base_url();?>assats/control/img/all_rules.png" alt="Rules" title="All Rules"/><span>Rules</span></a></li>
					<li <?php echo (isset($pagename) && $pagename == 'galleries')?'class="first_li"':''; ?>><a href="<?php echo site_url(ADMIN.'galleries/'); ?>"><img src="<?php echo base_url();?>assats/control/img/gallery.jpg" alt="Gallery" /><span>Gallery</span></a></li>
                    <li <?php echo (isset($pagename) && $pagename == 'pagecontent')?'class="first_li"':''; ?>><a href="<?php echo site_url(ADMIN.'pagecontent/'); ?>"><img src="<?php echo base_url();?>assats/control/img/content_pencil.png" alt="Content Management" /><span>Contents</span></a></li>
                    <li <?php echo (isset($pagename) && $pagename == 'pdfcategory')?'class="first_li"':''; ?>><a href="<?php echo site_url(ADMIN.'pdfcategory/'); ?>"><img src="<?php echo base_url();?>assats/control/img/ftp.png" alt="Journal Category" /><span>Journal Issues</span></a></li>
                    <li <?php echo (isset($pagename) && $pagename == 'journals')?'class="first_li"':''; ?>><a href="<?php echo site_url(ADMIN.'journals/'); ?>"><img src="<?php echo base_url();?>assats/control/img/upload_pdf.png" alt="Upload Journals" /><span>Journal Pdfs</span></a></li>
					<?php /*?><li><a href=""><img src="<?php echo base_url();?>assats/control/img/security.jpg" alt="Security" /><span>Security</span></a></li><?php */?>
					
				</ul>
			</div>
<!-- #shortcuts ends here-->         