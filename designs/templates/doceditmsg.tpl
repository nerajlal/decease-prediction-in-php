<html>
<head><title>send message</title></head>
<body>
	<center>
		<form action="" method="POST">
			<input type="hidden" value="h" name="hide">
			<table class="table table-bordered" align="center">
				<tr><td>Message:&nbsp;
					{foreach from=$data item="data"}
					<textarea name="message">{$data.message}</textarea>{/foreach}&nbsp;
					<input type="submit" value="SEND"></td></tr>
				</table>
			</form>
		</center>
	</body>
	</html>