<?php $this->assign("title", $title);  ?>
<div>
	<ul>
		<?php foreach ($items as $item): ?>
		  <li><?= $item->title ?></li>
		  <li><img src=
		  <?php 
		  	$file_name = dirname($_SERVER['SCRIPT_NAME'])."/uploads/mediaitems/".$item->file_path;
		  	echo "'$file_name'";
		  ?> width="15%" height="15%"/>
		  </li>
		<?php endforeach; ?>
	</ul>
</div>