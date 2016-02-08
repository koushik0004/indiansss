<div id="postedit" class="clearfix">
			<h2 class="ico_mug">Add new post</h2>
			<form action="post">
			<div><input id="post_title" type="text" size="30" tabindex="1" value="Type title" /></div>
			<div id="form_middle_cont" class="clearfix">
			<div class="left" style="width:695px;">
            	<!--<textarea id="markItUp" cols="80" rows="10"></textarea>-->
            	<?php 
					$this->load->file('./fckeditor/fckeditor.php', TRUE);
					$oFckEditor = new FCKeditor('description') ;
					$oFckEditor->BasePath = base_url().'fckeditor/';
					$oFckEditor->Value = '';
					$oFckEditor->Height = '250';
					$oFckEditor->Width = '100%';
					$oFckEditor->Create();
				?>
            </div>
			<div class="left form_sidebar">
				<h3>Category: </h3>
				<ul>
					<li><label><input type="checkbox" class="noborder" name="chbox"  />First category</label></li>
					<li><label><input type="checkbox" class="noborder" name="chbox"  />Second category</label></li>
					<li>
						<ul>
						<li><label><input type="checkbox" class="noborder" name="chbox"  />Subcategory</label></li>
						<li><label><input type="checkbox" class="noborder" name="chbox"  />Subcategory</label></li>
						</ul>
					</li>
					<li><label><input type="checkbox" class="noborder" name="chbox"  />Third category</label></li>
				</ul>
				<h3>Tags,</h3>
			
				<input type="text" value="Short" tabindex="2" />
				<p>
					<span id="status">Status: Automated saving... </span>
				<input type="submit" value="Preview" />
				<input type="submit" value="Save" id="save" />
				</p>
			</div>
			</div>
			</form>
			<div id="success" class="info_div"><span class="ico_success">Yeah! Success!</span></div>
			<div id="fail" class="info_div"><span class="ico_cancel">Ups, there was an error</span></div>		
			<div id="warning" class="info_div"><span class="ico_error">Ups, you miss something</span></div>	
		
		</div>