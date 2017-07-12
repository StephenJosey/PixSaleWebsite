<?php $this->assign("title", $title);  ?>
<div>
	<table style="width:75%; height:100%">
	<?php $count = 0; ?>
		<tr>
		<?php foreach ($items as $item): ?>
		<?php 
			$count = $count + 1;
			if ($count > 5) {
				echo "<tr>";
			}
		?>
		<td>
		  <?= $item->title ?></br>
		  <?= "$".$item->price ?></br>
		  <?= $item->description ?></br>
		  <img src=
		  <?php 
		  	$file_name = dirname($_SERVER['SCRIPT_NAME'])."/uploads/mediaitems/".$item->file_path;
		  	echo "'$file_name'";
		  ?> width="35%" height="35%"/>
		</td>
		<?php if ($count > 5) {
				echo "</tr>";
				$count = 0;
			}
		?>
		<?php endforeach; ?>
		</tr>
	</table>
</div>