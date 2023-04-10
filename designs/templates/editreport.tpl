<html>
<head><title>appointment</title>
	</head>
	<body>
		<center>
			<table>
				<form action="" method="POST" enctype="multipart/form-data">
					
					<input type="hidden" value="h" name="hide">
					{foreach from=$data item="data"}
					<tr><td>Report:<input type="text" value="{$data.report}"></td></tr>
					{/foreach}
					<tr><td>Upload:<input type="file" name="report" class="form-control"></td></tr>
					<tr><td><input type="submit" value="EDIT" class="btn btn-success"></td></tr>
					
				</form>
			</table>
		</center>
	</body>
	</html>