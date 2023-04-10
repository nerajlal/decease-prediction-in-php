<html>
<head><title>Booking details</title>
</head>
<body>
<center>
<form action=" " method="POST">
<table cellspacing="20" cellpadding="10">
<input type="hidden" name="hide" value="h">
<tr><td>Consulting Date</td>
<td><input type="date" name="date" class="form-control"></td></tr>
<tr><td>Consulting Time:</td>
<td><input type="time" name="time" class="form-control"></td></tr>

<tr><td>Test:</td><td>
	<select name="test">{foreach from=$data item="data"}<option value="{$data.id}">{$data.testname}</option>
	{/foreach}</select></td></tr>
	
<tr><td></td><td><input type="submit" value="submit" class="btn btn-success"></td></tr>
</table></form></center></body></html>
