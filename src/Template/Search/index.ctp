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
	<table style="width: <?= $size ?>%; height:100%; table-layout: fixed" class="pictures">
	<?php $count = 0; ?>
		<tr>
		<?php foreach ($items as $item): ?>
		<?php 
			$count = $count + 1;
			if ($count > 5) {
				echo "<tr>";
			}
		?>
		<td style="width:20%; max-width: 20%">
		  <?= $item->title ?></br>
		  <?= "$".$item->price ?></br>
		  <?= $item->description ?></br>
		  <img src=
		  <?php 
		  	$file_name = dirname($_SERVER['SCRIPT_NAME'])."/uploads/mediaitems/".$item->file_path;
		  	echo "'$file_name'";
		  ?> width="100%" height="100%"/>
		</td>
		<?php if ($count >= 5) {
				echo "</tr>";
				$count = 0;
			}
		?>
		<?php endforeach; ?>
		</tr>
	</table>
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