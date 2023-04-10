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
				<tr><td>Address:</td><td><textarea name="address" class="form-control">{$data.address}</textarea></td></tr>
				<tr><td>Pincode:</td><td><input type="number" name="pincode" value="{$data.pincode}" class="form-control"></td></tr>
				<tr><td>District:</td><td><input type="text" name="district" value="{$data.district}"class="form-control"></td></tr>
				<tr><td>City:</td><td><input type="text" name="city" value="{$data.city}" 
					class="form-control"></td></tr>			
				<tr><td>Gender:</td><td><select name="gender" class="form-control"><option>{$data.gender}</option><option value="Male">MALE</option>
				<option value="Female">FEMALE</option>	</select></td></tr>		
					<tr><td>DOB:</td><td><input type="date" name="dob" value="{$data.dob}" 
						class="form-control"></td></tr>
				<tr><td>Specialization:</td><td><input type="text" name="spec" value="{$data.specialization}" class="form-control"></td></tr>
				<tr><td>Contact no:</td><td> <input type="number" name="contact" value="{$data.contactno}" class="form-control"></td></tr>
				<tr><td></td><td><input type="submit" value="update" class="btn btn-success"></td>
			</tr>
			</table>
			
		</form>
	{/foreach}
</body></html>