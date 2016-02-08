<?php $this->load->view('include/header'); ?>

<!-- //////////////////////////// LightBox /////////////////////-->

<script type="text/javascript" src="<?php echo base_url(); ?>assats/looks/highslide/highslide-full.js"></script>

<script type="text/javascript">

hs.graphicsDir = '<?php echo base_url(); ?>assats/looks/highslide/graphics/';

hs.align = 'center';

hs.transitions = ['expand', 'crossfade'];

hs.fadeInOut = true;

hs.dimmingOpacity = 0.8;

hs.outlineType = 'rounded-white';

hs.captionEval = 'this.thumb.alt';

hs.marginBottom = 105; // make room for the thumbstrip and the controls

hs.numberPosition = 'caption';



// Add the slideshow providing the controlbar and the thumbstrip

hs.addSlideshow({

	//slideshowGroup: 'group1',

	interval: 5000,

	repeat: false,

	useControls: true,

	overlayOptions: {

		className: 'text-controls',

		position: 'bottom center',

		relativeTo: 'viewport',

		offsetY: -60

	},

	thumbstrip: {

		position: 'bottom center',

		mode: 'horizontal',

		relativeTo: 'viewport'

	}

});

</script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assats/looks/highslide/highslide.css" />

	<!--end header-->

            <div id="middle_col_big">

              <div class="page_header">

                <div class="left_curve"></div>

                <div class="rules_title">Photo Gallery</div>

                <div class="right_curve"></div>

              </div>

              <div class="inner">

              	<div class="text">

               	  <div class="head_icon"><img src="<?php echo base_url(); ?>assats/looks/images/content_icon.png" width="110" height="31" /></div>

                  <table width="100%" border="0" cellspacing="7">

                  <tr>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_large_1.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_1.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_large_2.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_2.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_large_3.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_3.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_large_4.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_4.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_large_5.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_5.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                  </tr>

                  <tr>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_large_6.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_6.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_large_7.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_7.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_large_8.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_8.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_large_9.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_9.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_small_10.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_10.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                  </tr>

                  <tr>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_small_11.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_11.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_small_12.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_12.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_small_13.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_13.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_small_14.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_14.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_small_15.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_15.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                  </tr>

                  <tr>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_small_16.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_16.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_small_17.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_17.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_small_18.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_18.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_small_19.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_19.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_small_20.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_20.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                  </tr>

                  <tr>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_small_21.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_21.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_small_22.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_22.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_small_23.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_23.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_small_24.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_24.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                    <td align="center" valign="middle"><a class='highslide' href='<?php echo base_url(); ?>assats/looks/gallery_images_large/gallery_img_small_25.jpg' onclick="return hs.expand(this)"><img src="<?php echo base_url(); ?>assats/looks/gallery_images_small/gallery_img_small_25.jpg" width="auto" height="auto" style="border:#FFF 1px solid; width:150px; height:107px;" /></a></td>

                  </tr>
                  <tr>
                    <td align="center" valign="middle">&nbsp;</td>
                    <td align="center" valign="middle">&nbsp;</td>
                    <td align="center" valign="middle">&nbsp;</td>
                    <td align="center" valign="middle">&nbsp;</td>
                    <td align="center" valign="middle">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="5" align="center" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><strong style="font-size:14px;">Indentify the Features and mail us:</strong><br />

                        		i.e Image 1 - xxx xxx...<br />
									Image 2 - yyy yyy...
                        </td>
                      </tr>
                    </table></td>
                    </tr>

                  </table>



              	</div>

              </div>

            </div>

            

            <!--footer portion-->

		<?php $this->load->view('include/footer');?>

        	<!--end footer portion-->