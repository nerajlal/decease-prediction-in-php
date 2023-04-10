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
				{if $data.viewstatus==0}
				<td><a href="doceditmsg.php?key={$data.msgkey}" class="btn btn-success">EDIT</a></td>
				<td><a href="docdeletemsg.php?key={$data.msgkey}" class="btn btn-danger">DELETE</a></td>
				{/if}
			</tr>
			{/foreach}
		</table>
		</form>
	</body>
</html>
