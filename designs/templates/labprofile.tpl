<html>
<head><title>lab profile</title>
</head>
<body>
<center>
<form action=" " method="POST">
<table cellspacing="20" cellpadding="10">
	{foreach from=$data item="data"}
<input type="hidden" name="hide" value="h">
<tr><td>Lab Name:</td>
<td><input type="text" name="name" class="form-control" value="{$data.labname}"></td></tr>
<tr><td>Address:</td>
<td><textarea name="addr" class="form-control">{$data.address}</textarea></td></tr>
<tr><td>Pincode:</td>
<td><input type="text" name="pincode" class="form-control" value="{$data.pincode}"></td></tr>
<tr><td>District:</td>
<td><input type="text" name="district" class="form-control" value="{$data.district}"></td></tr>
<tr><td>City:</td>
<td><input type="text" name="city" class="form-control" value="{$data.city}"></td></tr>
<tr><td>Contact no:</td>
<td><input type="text" name="contact" class="form-control" value="{$data.contactno}"></td></tr>
<tr><td></td><td><input type="submit" value="Update" class="btn btn-success"></td></tr>
{/foreach}
</table>
</form>
</center>
</body>
</html>