<?php $this->assign("title", "Home");  ?>


<div style="text-align:center" class="container">
        <div class="bannercontainer bannerV4" style = "width:100% !important;">
          <div class="fullscreenbanner-container">
            <div class="fullscreenbanner">
            <ul>
			<?php foreach($media_items  as $media_item): 
					$file_path = dirname($_SERVER['SCRIPT_NAME']). '/uploads/mediaitems/' . $media_item->file_path;
				?> 
                <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">
                  <img src="<?= (string)$file_path ?>" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"
								class = "img-responsive" >
                  <div class="slider-caption slider-captionV4">
                    <div class="tp-caption rs-caption-2 sft"
                      data-hoffset="0"
                      data-x="85"
                      data-y="115"
                      data-speed="800"
                      data-start="2000"
                      data-easing="Back.easeInOut"
                      data-endspeed="300">
                    </div>

                    <div class="tp-caption rs-caption-3 sft"
                      data-hoffset="0"
                      data-x="85"
                      data-y="240"
                      data-speed="1000"
                      data-start="3000"
                      data-easing="Power4.easeOut"
                      data-endspeed="300"
                      data-endeasing="Power1.easeIn"
                      data-captionhidden="off">
                     
                    </div>
                <?php endforeach ;?>   
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
   </div>
