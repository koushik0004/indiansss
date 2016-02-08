<style>
input [type="text"]{margin:5px;}
.forminputdiv{clear:both; margin:4px 0 4px 0;}
.add_rull{
		background: none repeat scroll 0 0 #4780AE;
		border: 1px solid #7AB7E8;
		color: #FFFFFF;
		display: block;
		margin: -5px 15px 0 0;
		padding: 4px;
		font-size:17px;
		/*moz-border-radius:4px;
		khtml-border-radius:4px;
		webkit*/
		border-radius:5px;
		}
</style>
<div id="dashboard" class="clearfix" style="height:auto;">
			<h2 class="ico_mug">Page Edit
            <a href="<?php echo site_url(ADMIN.'pagecontent/'); ?>" class="right add_rull">Cancle</a>
            </h2>
            <?php 
				if(isset($pagedata)){
					$pagedata = $pagedata[0];
				}
			?>
            <!--<div id="success" class="info_div"><span class="ico_success">Yeah! Success!</span></div>
			<div id="fail" class="info_div"><span class="ico_cancel">Ups, there was an error</span></div>		
			<div id="warning" class="info_div"><span class="ico_error">Ups, you miss something</span></div>-->	
			<?php echo form_open(ADMIN.'pagecontent/editsave', array('name'=>'pageedit', 'id'=>'pageedit')); ?>
            <div class="forminputdiv"><?php echo form_input(array('name'=>'page_name','id'=>'page_name', 'placeholder'=>'Page Name', 'style'=>'width:620px;', 'tabindex'=>'1', 'class'=>'textbox_style', 'value'=>((isset($pagedata))?$pagedata->page_name:''), 'readonly'=>'readonly')); ?></div>
			<div class="forminputdiv"><?php echo form_input(array('name'=>'content_title','id'=>'content_title', 'placeholder'=>'Enter Content Title', 'style'=>'width:620px;', 'tabindex'=>'1', 'class'=>'textbox_style', 'value'=>((isset($pagedata))?$pagedata->content_title:''))); ?><!--<input id="post_title" type="text" tabindex="1" value="Type title" style="width:620px;"/>--></div>
			<div id="form_middle_cont" class="clearfix">
			<div class="left" style="width:630px; margin:5px;">
            	<!--<textarea id="markItUp" cols="80" rows="10"></textarea>-->
            	<?php 
					$this->load->file('./fckeditor/fckeditor.php', TRUE);
					$oFckEditor = new FCKeditor('content') ;
					$oFckEditor->BasePath = base_url().'fckeditor/';
					$oFckEditor->Value = ((isset($pagedata))?stripslashes($pagedata->content):'');
					$oFckEditor->Height = '350';
					$oFckEditor->Width = '100%';
					$oFckEditor->Create();
				?>
            </div>
            
			<!--<div class="left form_sidebar">
				<p>
					<span id="status">Status: Automated saving... </span>
				<input type="submit" value="Preview" />
				<input type="submit" value="Save" id="save" />
				</p>
			</div>-->
			</div>
            <div class="forminputdiv"><?php echo form_input(array('name'=>'page_id','id'=>'page_id', 'value'=>((isset($pagedata))?$pagedata->id:''), 'type'=>'hidden')); ?></div>
            <!--<input type="submit" value="Save" id="save" />-->
            <?php echo form_submit(array('name'=>'save', 'id'=>'save', 'value'=>'save', 'style'=>'cursor:pointer;')); ?>
			<?php echo form_close(); ?>
			
		
		</div>