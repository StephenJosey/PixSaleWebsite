<?php $this->assign("title", $title);  ?>
<section class="mainContent clearfix productsContent">
		Sort by <?= $this->Paginator->sort('price') ?><br>
		<?php $size = (20 * sizeof($items) % 100);
			if (sizeof($items) >= 5)
				$size = 100; ?>
		<div class="container">
	    
		<?php $count = 0; ?>
			<div class="row">
			<?php foreach ($items as $item): ?>
			<?php 
				/*$count = $count + 1;
				if ($count > 5) {
					echo "<div class='row>'";
				}*/
			?>
			<div class="col-sm-4 col-xs-12">
	        <div class="productBox">
	          <div class="productImage clearfix">
	            <img src=
				  <?php 
				  	$file_name = dirname($_SERVER['SCRIPT_NAME'])."/uploads/thumbnails/".$item->file_path;
				  	echo "'$file_name'";
				  ?> />
	            <div class="productMasking">
	              <ul class="list-inline btn-group" role="group">
	                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
	                <li><?= $this->Html->link(__(""), ['controller' => 'Search', 'action' => 'singleProduct', $item->id], 
                  		['class' => 'btn btn-default fa fa-eye']) ?>
	                </li>
	              </ul>
	            </div>
	          </div>
	          <div class="productCaption clearfix">
	            <a href="single-product.html">
	              <h5><?= $item->title ?></h5>
	            </a>
	            <h3><?= "$".$item->price ?></h3>
	          </div>
	        </div>
	      </div>
			<?php if ($count >= 5) {
					echo "</div>";
					$count = 0;
				}
			?>
			<?php endforeach; ?>
			</div>
		</div>
		<div class="paginator">
	        <ul class="pagination">
	            <?= $this->Paginator->first('<< ' . __('')) ?>
	            <?= $this->Paginator->prev('< ' . __('')) ?>
	            <?= $this->Paginator->numbers() ?>
	            <?= $this->Paginator->next(__('') . ' >') ?>
	            <?= $this->Paginator->last(__('') . ' >>') ?>
	        </ul>
	        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
	    </div>
</section>
