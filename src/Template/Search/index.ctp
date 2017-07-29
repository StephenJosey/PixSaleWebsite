<?php $this->assign("title", $title);  ?>
<div class="search-frm" style="width:50%">
    <?php echo $this->Form->create($searchForm, ['type' => 'post']); ?>
    	<?php echo $this->Form->select('type', ["image", "video", "audio"], [ "class" => "inlineDrop"]); ?>
    	<?php echo $this->Form->input('category', ['type' => 'select', 'options' => $categories, "class" => "inlineDrop", "empty" => "Choose one...",
    				'templates' => ['inputContainer' => '{{content}}'], 'label' => false] ); ?>
    	<?php echo $this->Form->input('search', ['type' => 'text',
    				'templates' => ['inputContainer' => '{{content}}'], 'class' => 'inline', 'label' => false]); ?>
        <br>
        <?php echo $this->Form->button(__('Search'), ['type'=>'submit', 'class' => 'form-controlbtn btn-default']); ?>
    <?php echo $this->Form->end(); ?>
</div>

<div>
	Sort by <?= $this->Paginator->sort('price') ?><br>
	<?php $size = (20 * sizeof($items) % 100);
		if (sizeof($items) >= 5)
			$size = 100; ?>
	<div class="container">
    
	<?php $count = 0; ?>
		<div class="row">
		<?php foreach ($items as $item): ?>
		<?php 
			$count = $count + 1;
			if ($count > 5) {
				echo "<div class='row>'";
			}
		?>
		<div class="col-sm-4 col-xs-12">
        <div class="productBox">
          <div class="productImage clearfix">
            <img src=
			  <?php 
			  	$file_name = dirname($_SERVER['SCRIPT_NAME'])."/uploads/mediaitems/".$item->file_path;
			  	echo "'$file_name'";
			  ?> width="100%" height="100%"/>
            <div class="productMasking">
              <ul class="list-inline btn-group" role="group">
                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a class="btn btn-default" data-toggle="modal" href=".quick-view" ><i class="fa fa-eye"></i></a></li>
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
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>