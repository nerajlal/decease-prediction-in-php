<html>
<head>
	<title>Messages</title></head>
	<body>
		<form align="center" action="" method="POST">
			<table class="table table-bordered">
			<tr><th>Name</th>
				<th>Contact no</th>
				<th>Message</th>
				<th>Date sent</th>
			</tr>
			{foreach from=$data item="data"}

			<tr><td>{$data.name}</td>
				<td>{$data.contact}</td>
				<td>{$data.message}</td>
				<td>{$data.currentdate}</td>
				<td><a href="replymessage.php?key={$data.loginid}" class="btn btn-success">REPLY</a></td>
			</tr>
			{/foreach}
		</table>
		</form>
	</body>
</html>
