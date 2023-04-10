<html>
<head><title>send message</title></head>
<body>
	<center>
		<form action="" method="POST">
			<input type="hidden" value="h" name="hide">
			<table align="center">
				
				<tr><td>Select doctor<select name="doctors" class="form-control">
					{foreach from=$data item="data"}<option value="{$data.loginid}">{$data.name}</option>
				{/foreach}
			</select></td></tr>
				
				<tr><td>Complaint:&nbsp;
					<textarea name="complaint" class="form-control"></textarea>&nbsp;
					<input type="submit" value="SEND" class="btn btn-success"></td></tr>
				</table>
			</form>
		</center>
	</body>
	</html>