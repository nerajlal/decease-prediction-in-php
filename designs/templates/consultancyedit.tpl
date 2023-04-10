<html>
<head>
<title>consultancy details edit</title></head><center>
	<!-- <u>UPDATE DETAILS</u> -->
<form method="POST" action="">
	<table>
		{foreach from=$data item="data"}
		<input type="hidden" value="h" name="hide">
		
<tr><td>	Available day</td><td><textarea name="availableday" class="form-control">{$data.consultingday}</textarea></td></tr>
	<tr><td>Available Time:-&nbsp; From</td><td><input type="time" name="timefrom" value="{$data.timefrom}">&nbsp;&nbsp;To<input type="time" name="timeto" value="{$data.timeto}"></tr>
	<tr><td>Consulting Fee</td><td><input type="textbox" name="consultingfee" value="{$data.consultingfee}" class="form-control"></td></tr>
	<tr><td></td><td><input type="submit" value="update" class="btn btn-success"></td></tr>
	{/foreach}
</table>
</form></center>
</html>