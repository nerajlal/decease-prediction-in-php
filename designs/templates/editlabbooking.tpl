<html>
<head><title>Edit Booking</title>
</head>
<body>
<center>
<form action=" " method="POST">
	{foreach from=$data item="data"}
<table cellspacing="20" cellpadding="10">
<input type="hidden" name="hide" value="h">
<tr><td>Consulting Date</td>
<td><input type="date" name="date" value="{$data.consultingdate}"></td></tr>
<tr><td>Consulting Time:</td>
<td><input type="time" name="time" value="{$data.consultingtime}"></td></tr>
<tr><td>Test name:</td>
<td><textarea name="test">{$data.testname}</textarea></td></tr>
<tr><td><input type="submit" value="update"></td></tr>
</table>{/foreach}
</form></center></body></html>
