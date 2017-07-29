<?php echo $id;	?>
<br>


<table>
	<tr>description</tr>
	
<?php foreach ($messages as $message): ?>
    <tr>
        <td>
            <?= $message->message ?>
        </td>
		
    </tr>
<?php endforeach; ?>

</table>