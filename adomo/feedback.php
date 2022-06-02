<table class="user" border="1">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Feedback</th>
	</tr>
	<?php
	require_once("connection.php"); 
	$q = mysql_query("select * from feedback");
	while ($a = mysql_fetch_array($q)) {
	?>
	<tr>
		<td><?php echo $a['id']; ?></td>
		<td><?php echo $a['name']?></td>
		<td><?php echo $a['email']; ?></td>
		<td><?php echo $a['feedback']?></td>
	</tr>
	<?php
	}
	?>
</table>