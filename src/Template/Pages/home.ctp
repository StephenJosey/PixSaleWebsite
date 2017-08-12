<div style="text-align:center" class="container">
        <div class="bannercontainer bannerV4" style = "width:100% !important">
          <div class="fullscreenbanner-container">
            <div class="fullscreenbanner">
              <ul>
			  <?php foreach($media_items  as $media_item): 
					$file_path = dirname($_SERVER['SCRIPT_NAME']). '/uploads/mediaitems/' . $media_item->file_path;
				?> 
					<li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">
					<img src="<?= (string)$file_path ?>" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">  
                
                </li>
				<?php endforeach ;?> 
          
              </ul>
            </div>
          </div>
        </div>
</div>   
