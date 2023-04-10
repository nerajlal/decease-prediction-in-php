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
				<th>Symptoms</th>
			</tr>
			{foreach from=$data item="data"}

			<tr><td>{$data.name}</td>
				<td>{$data.bookingdate}</td>
				<td>{$data.consultingdate}</td>
				<td>{$data.consultingtime}</td>
				<td>{$data.symptoms}</td>
				{
					if $data.bookingstatus==0
				}
				<td><a href="approveappointment.php?key={$data.bookingkey}" class="btn btn-success">APPROVE</a></td>
				<td><a href="rejectappointment.php?key={$data.bookingkey}" class="btn btn-danger">REJECT</a></td>
				{
					elseif $data.bookingstatus==1
				}
				<td>Approved</td>
				<td><a href="rejectappointment.php?key={$data.bookingkey}" class="btn btn-danger">REJECT</a></td>
				{
					else
				}
				<td>Rejected</td>
				<td><a href="approveappointment.php?key={$data.bookingkey}" class="btn btn-success">APPROVE</a></td>
			{/if}
			{if $data.bookingstatus==1}
			<td><a href="prescription.php?key={$data.bookingkey}" class="btn btn-primary">ADD PRISCRIPTION</a></td>
		</tr>
		{/if}
	{/foreach}
</table>
</center>
</form>
</body>
</html>