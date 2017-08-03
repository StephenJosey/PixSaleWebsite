<!-- MAIN CONTENT SECTION -->
  <section class="mainContent clearfix">
    <div class="container">
      <div class="row singleProduct">
        <div class="col-xs-12">
          <div class="media">
            <div class="media-left productSlider">
              <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="item active" data-thumb="0">
                    <img src=<?php 
                      $path = dirname($_SERVER['SCRIPT_NAME'])."/uploads/mediaitems/".$item->file_path;
                      echo "'$path'" ?> >
                  </div>
                </div>
              </div>
            </div>
            <div class="media-body">
              <ul class="list-inline">
                <li><a href=".."><i class="fa fa-reply" aria-hidden="true"></i>Continue Shopping</a></li>
              </ul>
              <h2><?php echo "$item->title" ?></h2>
              <h3><?php echo "$$item->price" ?></h3>
            
              <div class="panel-body">
                <?php echo $this->Form->create(null, ['type' => 'post', 'url' => ['controller' => 'Search', 'action' => 'single_product', $item->id]]); ?>
                    <div class="form-group"><?php echo $this->Form->button(__('Buy'), ['type'=>'submit', 'class' => 'btn btn-primary btn-block']); ?></div>
                <?php echo $this->Form->end(); ?>
              </div>
              <div class="tabArea">
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#details">details</a></li>
                </ul>
                <div class="tab-content">
                  <div id="details" class="tab-pane fade in active">
                    <p><?php echo "$item->description" ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </section>