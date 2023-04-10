<html>
<head>
	<title>details</title></head>
	<body>
		<form action="" method="POST"><center>
			<table border="1" class="table table-bordered">
			<input type="hidden" value="h" name="hide">
			
			<tr><th>Patient Name</th>
				<th>Bookingdate</th>
				<th>Consulting Date</th>
				<th>Consulting Time</th>
				<th>Test name</th>
				<th>Report</th>
			</tr>
			{foreach from=$data item="data"}

			<tr><td>{$data.name}</td>
				<td>{$data.bookingdate}</td>
				<td>{$data.consultingdate}</td>
				<td>{$data.consultingtime}</td>
				<td>{$data.testname}</td>
				<td>{$data.report}</td>
				{if $data.report!=null}
				<td><a href="editreport.php?key={$data.labkey}" class="btn btn-success">EDIT REPORT</a></td>
				<td><a href="deletereport.php?key={$data.labkey}" class="btn btn-danger">DELETE REPORT</a></td></tr>
				{/if}
	{/foreach}
</table>
</center>
</form>
</body>
</html>