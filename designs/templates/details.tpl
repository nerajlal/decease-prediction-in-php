<html>
<head>
	<title>details</title></head>
	<body>
		<table border="1" align="center" cellspacing="10" cellpadding="10">
			<tr><th>Name</th>
				<th>Address</th>
				<th>Gender</th>
				<th> Email</th>
		

			</tr>
			{foreach from=$data item="data"}
			<tr><td>{$data.name}</td>
				<td>{$data.address}</td>
				<td>{$data.gender}</td>
				<td>{$data.email}</td><td><a href="edit.php?key={$data.regkey}">EDIT</a></td><td><a href="delete.php?key={$data.regkey}">DELETE</a></td>
			</tr>
			{/foreach}
			</table>
		<br>
			<center><a href="logout.php"><input type="submit" value="LOGOUT"></a></center>
		
	</body>
</html>