<table class="user">
	<tr>
		<th>Id</th>
		<th>Name</th>
	</tr>
	<?php
	require_once("connection.php"); 
	$q = mysql_query("select * from online_user");
	while ($a = mysql_fetch_array($q)) {
	?>
	<tr>
		<td><?php echo $a['id']; ?></td>
		<td><?php echo $a['name']?></td>
	</tr>
	<?php
	}
	?>
</table>