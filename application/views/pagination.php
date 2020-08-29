<?php include("include/header.php");?>
<table class="table table-bordered table-sm">
	<tr>
		<th>id</th>
		<th>exemple</th>
	</tr>
	<?php if ($results): ?>
		<?php foreach ($results as $val): ?>
			<tr>
				<td><?=$val->idd?></td>
				<td><?=val->exercice?></td>
			</tr>
		<?php endforeach ?>
</table>