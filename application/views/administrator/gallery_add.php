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
			<h2 class="ico_mug">Gallery <?php echo (isset($post_type))?$post_type:'';?>
            <a href="<?php echo site_url(ADMIN.'galleries/'); ?>" class="right add_rull">Cancle</a>
            </h2>
            <?php
				 
				if(isset($gallery_data) && count($gallery_data)>0){
					$gallery_data = $gallery_data[0];
				}else{
					unset($gallery_data);
				}
			?>
            <!--<div id="success" class="info_div"><span class="ico_success">Yeah! Success!</span></div>
			<div id="fail" class="info_div"><span class="ico_cancel">Ups, there was an error</span></div>		
			<div id="warning" class="info_div"><span class="ico_error">Ups, you miss something</span></div>-->	
			<?php echo form_open(ADMIN.'galleries/'.$post_method_name, array('name'=>$post_method_name, 'id'=>$post_method_name, 'enctype'=>'multipart/form-data')); ?>
           
			<div class="forminputdiv"><?php echo form_input(array('name'=>'imagename','id'=>'title', 'placeholder'=>'Enter Image Title', 'style'=>'width:620px;', 'tabindex'=>'1', 'class'=>'textbox_style', 'value'=>((isset($gallery_data))?$gallery_data->imagename:''))); ?><!--<input id="post_title" type="text" tabindex="1" value="Type title" style="width:620px;"/>--></div>
            
           <div id="form_middle_cont" class="clearfix">
			<div class="left" style="width:630px; margin:5px;">
            	<!--<textarea id="markItUp" cols="80" rows="10"></textarea>-->
            	<?php 
					$this->load->file('./fckeditor/fckeditor.php', TRUE);
					$oFckEditor = new FCKeditor('content') ;
					$oFckEditor->BasePath = base_url().'fckeditor/';
					$oFckEditor->Value = ((isset($gallery_data))?stripslashes($gallery_data->content):'');
					$oFckEditor->Height = '350';
					$oFckEditor->Width = '100%';
					$oFckEditor->Create();
				?>
            </div>
            <div class="forminputdiv">
			<?php 
				echo form_label('Upload Gallery Image File:', 'img_upload').'&nbsp;&nbsp;&nbsp;&nbsp;';
				echo (isset($gallery_data) && $gallery_data->thumb_path!='')?'<div style="display:block;"><img src="'.base_url().$gallery_data->thumb_path.'" border="0" width="120" height="80" /></div>':'';
				
				echo form_upload(array('name'=>'img_upload','id'=>'img_upload')).'<br/><br/>'; ?>
             </div>
			<!--<div class="left form_sidebar">
				<p>
					<span id="status">Status: Automated saving... </span>
				<input type="submit" value="Preview" />
				<input type="submit" value="Save" id="save" />
				</p>
			</div>-->
            <div class="forminputdiv"><?php echo form_input(array('name'=>'gallery_id','id'=>'gallery_id', 'value'=>((isset($gallery_data))?$gallery_data->id:''), 'type'=>'hidden')); ?></div>
			</div>
            
            <!--<input type="submit" value="Save" id="save" />-->
            <?php echo form_submit(array('name'=>'save', 'id'=>'save', 'value'=>'save', 'style'=>'cursor:pointer;')); ?>
			<?php echo form_close(); ?>
			
		
		</div>