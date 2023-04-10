<html>
<head><title>user registration</title>
</head>
<body>
<center>
	<!-- <h2><u>User Registration</u></h2> -->
<form action=" " method="POST">
<table cellspacing="20" cellpadding="10">
<input type="hidden" name="hide" value="h">
<tr><td>Name:</td>
<td><input type="text" name="name" class="form-control"></td></tr>
<tr><td>Address:</td>
<td><textarea name="addr" class="form-control"></textarea></td></tr>
<tr><td>Pincode:</td>
<td><input type="text" name="pincode" class="form-control"></td></tr>
<tr><td>District:</td>
<td><select name="district" class="form-control">
	<option selected="">Please Select</option>
	<option value="Thrissur">Thrissur</option>
	<option value="Thiruvananthapuram">Thiruvananthapuram</option>
	<option value="kannur">Kannur</option>
	<option value="Kozhikode">Kozhikode</option>
	<option value="Palakkad">Palakkad</option>
	<option value="Kottayam">Kottayam</option>
	<option value="Kollam">Kollam</option>
	<option value="Ernakulam">Ernakulam</option>
	<option value="Malappuram">Malappuram</option>
	<option value="Alappuzha">Alappuzha</option>
	<option value="Pathanamthitta">Pathanamthitta</option>
	<option value="Idukki">Idukki</option>
	<option value="Kasaragod">Kasaragod</option>
	<option val="Wayanad">Wayanad</option></select>
</td></tr>
<tr><td>Gender:</td>
<td><input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female</td></tr>
<tr><td>Age:</td>
<td><input type="text" name="age" class="form-control"></td></tr>
<tr><td>Contact:</td>
<td><input type="text" name="contact" class="form-control"></td></tr>
<tr><td>Email:</td>
<td><input type="email" name="email" class="form-control"></td></tr>
<tr><td>Password:</td>
<td><input type="password" name="password" class="form-control"></td></tr>
<tr><td></td><td><input type="submit" value="Register" class="btn btn-success"></td></tr>
</table>
</form>
</center>
</body>
</html>