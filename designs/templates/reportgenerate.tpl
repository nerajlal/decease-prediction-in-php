<html>
<head>
	<title>details</title></head>
	<body>
		{foreach from=$data item="data"}	
		<form action="" method="POST">
			<input type="hidden" name="hide" value="h">

		<table align="center" cellspacing="10" cellpadding="10">
			<tr><td>Name:</td><td><input type="text" name="name" value="{$data.name}" 
				class="form-control"></td></tr>
				<tr><td>Contact:</td><td><input type="text" name="contact" value="{$data.contact}" class="form-control"></td></tr>
				<tr><td>Age:</td><td><input type="number" name="age" value="{$data.age}" class="form-control"></td></tr>
				<tr><td>Test:</td><td><input type="text" name="test" value="{$data.testname}"class="form-control"></td></tr>
				<tr><td>Date:</td><td><input type="text" name="date" value="{$data.consultingdate}" 
					class="form-control"></td></tr>			
				<tr><td>Result:</td><td><input type="text" name="result" class="form-control"></td></tr>
				<tr><td></td><td><input type="submit" name="submit" value="update" class="btn btn-success"></td>
			</tr>
			</table>
			
		</form>
	{/foreach}
</body></html>