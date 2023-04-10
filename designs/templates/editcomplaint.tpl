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
					{foreach from=$view item="view"}
					<textarea name="complaint" class="form-control">{$view.complaint}</textarea>
					{/foreach}
					&nbsp;
					<input type="submit" value="SEND" class="btn btn-success"></td></tr>
				</table>
			</form>
		</center>
	</body>
	</html>