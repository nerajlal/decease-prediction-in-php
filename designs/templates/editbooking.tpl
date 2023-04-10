<html>
<head><title>Booking details</title>
</head>
<body>
<center>
	<h2><u>Booking details</u></h2>
<form action=" " method="POST">
	{foreach from=$data item="data"}
<table cellspacing="20" cellpadding="10">
<input type="hidden" name="hide" value="h">
<tr><td>Consulting Date</td>
<td><input type="date" name="date" value="{$data.consultingdate}"></td></tr>
<tr><td>Consulting Time:</td>
<td><input type="time" name="time" value="{$data.consultingtime}"></td></tr>
<tr><td>Symptoms:</td>
<td><textarea name="symptoms">{$data.symptoms}</textarea></td></tr>
<tr><td><input type="submit" value="update"></td></tr>
</table>{/foreach}
</form></center></body></html>
