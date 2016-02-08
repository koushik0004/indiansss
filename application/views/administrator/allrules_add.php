<style>
input [type="text"]{margin:5px;}
.forminputdiv{clear:both; margin:4px 0 4px 0;}
</style>
<div id="dashboard" class="clearfix" style="height:auto;">
			<h2 class="ico_mug">Rule <?php echo (isset($post_type))?$post_type:'';?></h2>
            <?php 
				if(isset($ruledate)){
					$ruledate = $ruledate[0];
				}
			?>
            <!--<div id="success" class="info_div"><span class="ico_success">Yeah! Success!</span></div>
			<div id="fail" class="info_div"><span class="ico_cancel">Ups, there was an error</span></div>		
			<div id="warning" class="info_div"><span class="ico_error">Ups, you miss something</span></div>-->	
			<?php echo form_open(ADMIN.'allrules/'.$post_method_name, array('name'=>$post_method_name, 'id'=>$post_method_name)); ?>
           
			<div class="forminputdiv"><?php echo form_input(array('name'=>'rules_title','id'=>'rules_title', 'placeholder'=>'Enter Rule Title', 'style'=>'width:620px;', 'tabindex'=>'1', 'class'=>'textbox_style', 'value'=>((isset($ruledate))?$ruledate->rules_title:''))); ?><!--<input id="post_title" type="text" tabindex="1" value="Type title" style="width:620px;"/>--></div>
			<div id="form_middle_cont" class="clearfix">
			<div class="left" style="width:630px; margin:5px;">
            	<!--<textarea id="markItUp" cols="80" rows="10"></textarea>-->
            	<?php 
					$this->load->file('./fckeditor/fckeditor.php', TRUE);
					$oFckEditor = new FCKeditor('rules_content') ;
					$oFckEditor->BasePath = base_url().'fckeditor/';
					$oFckEditor->Value = ((isset($ruledate))?stripslashes($ruledate->rules_content):'');
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
            <div class="forminputdiv"><?php echo form_input(array('name'=>'rule_id','id'=>'rule_id', 'value'=>((isset($ruledate))?$ruledate->id:''), 'type'=>'hidden')); ?></div>
            <!--<input type="submit" value="Save" id="save" />-->
            <?php echo form_submit(array('name'=>'save', 'id'=>'save', 'value'=>'save', 'style'=>'cursor:pointer;')); ?>
			<?php echo form_close(); ?>
			
		
		</div>