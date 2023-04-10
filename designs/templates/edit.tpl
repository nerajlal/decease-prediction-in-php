<html>
<head>
<title>editing page</title></head>
<body>
	<center><h2><u>EDITING PAGE</u></h2>
		<form action="" method="POST">
			{foreach from=$data item="data"}	

			<table bgcolor="pink">
			<input type="hidden" value="h" name="hide">
			<tr><td>Name:</td><td><input type="text" name="name" value="{$data.name}"></td></tr><br>
			<tr><td>Address:</td><td><textarea name="address">{$data.address}</textarea></td></tr><br>
			<tr><td>Gender:</td><td><select name="gender" id="gender"><option>{$data.gender}</option><option value="male">MALE</option>
				<option value="female">FEMALE</option></select></td></tr><br>
			<tr><td>Email:</td><td><input type="email" name="email" value="{$data.email}"></td></tr><br>
				<tr><td></td><td><input type="SUBMIT" value="EDIT"></td></tr>
			</table>
			{/foreach}
			</form>
		</center>
</body>
</html>