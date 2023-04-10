<html>
<head>
	<title>Outbox</title></head>
	<body>
		<form align="center" action="" method="POST">
			<table class="table table-bordered">
			<tr><th>Name</th>
				<th>Specialization</th>
				<th>Message</th>
				<th>Date sent</th>
			</tr>
			{foreach from=$data item="data"}

			<tr><td>{$data.name}</td>
				<td>{$data.specialization}</td>
				<td>{$data.message}</td>
				<td>{$data.currentdate}</td>
				{if $data.viewstatus==0}
				<td><a href="usereditmsg.php?key={$data.msgkey}" class="btn btn-success">EDIT</a></td>
				<td><a href="deletemessage.php?key={$data.msgkey}" class="btn btn-danger">DELETE</a></td>
				{/if}
			</tr>
			{/foreach}
		</table>
		</form>
	</body>
</html>
