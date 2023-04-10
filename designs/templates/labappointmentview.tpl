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
			</tr>
			{foreach from=$data item="data"}
			<tr><td>{$data.name}</td>
				<td>{$data.bookingdate}</td>
				<td>{$data.consultingdate}</td>
				<td>{$data.consultingtime}</td>
				<td>{$data.testname}</td>

				{
					if $data.labbookingstatus==0
				}
				<td><a href="labapproveappointment.php?key={$data.labkey}" class="btn btn-success">APPROVE</a></td>
				<td><a href="labrejectappointment.php?key={$data.labkey}" class="btn btn-danger">REJECT</a></td>
				{
					elseif $data.labbookingstatus==1
				}
				<td>Approved</td>
				<td><a href="labrejectappointment.php?key={$data.labkey}" class="btn btn-danger">REJECT</a></td>
				{
					else
				}
				<td>Rejected</td>
				<td><a href="labapproveappointment.php?key={$data.labkey}" class="btn btn-success">APPROVE</a></td>
			{/if}
			{if $data.labbookingstatus==1}
			<td><a href="reportgenerate.php?key={$data.labkey}" class="btn btn-primary">GENERATE REPORT</a></td>
			<td><a href="addlabreport.php?key={$data.labkey}" class="btn btn-primary">ADD REPORT</a></td>
		</tr>
		{/if}
	{/foreach}
</table>
</center>
</form>
</body>
</html>