<html>
<head>
	<title>Messages</title></head>
	<body>
		<form align="center" action="" method="POST">
			<table class="table table-bordered">
			<tr><th>Name</th>
				<th>Contact no</th>
				<th>complaint</th>
				<th>Date sent</th>
			</tr>
			{foreach from=$data item="data"}

			<tr><td>{$data.name}</td>
				<td>{$data.contactno}</td>
				<td>{$data.complaint}</td>
				<td>{$data.complaintdate}</td>
				<td><a href="editcomplaint.php?key={$data.ckey}" class="btn btn-success">edit</a></td>
				<td><a href="deletecomplaint.php?key={$data.ckey}" class="btn btn-danger">Delete</a></td>
			</tr>
			{/foreach}
		</table>
		</form>
	</body>
</html>
