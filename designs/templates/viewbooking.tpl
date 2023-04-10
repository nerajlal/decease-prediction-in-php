<html>
<head>
	<title>details</title></head>
	<body>
		<form action="" method="POST"><center>
			<table border="1" class="table table-bordered">
			<input type="hidden" value="h" name="hide">
			
			<tr><th>Doctor Name</th>
				<th>Specialization</th>
				<th>District</th>
				<th>Consulting Time</th>
				<th>Consulting date</th>
				<th> Consultation fee</th>
				<th>Token number</th>
				<th>Status</th>
			</tr>
			{foreach from=$data item="data"}

			<tr><td>{$data.name}</td>
				<td>{$data.specialization}</td>
				<td>{$data.district}</td>
				<td>{$data.consultingtime}</td>
				<td>{$data.consultingdate}</td>
				<td>{$data.consultingfee}</td>
				<td>{$data.tokenno}</td>
				{
					if $data.bookingstatus==1
				}
				<td>BOOKING ACCEPTED</td>
				{
					elseif $data.bookingstatus==2
				}
				<td>BOOKING REJECTED</td>
				{
					else
				}
				<td>PENDING</td>
				{/if}
				{if $data.bookingstatus==0}
				<td><a href="editbooking.php?key={$data.bookingkey}" class="btn btn-success">EDIT</a></td>
				<td><a href="deletebooking.php?key={$data.bookingkey}" class="btn btn-danger">DELETE</a></td>
				{/if}
				{if $data.bookingstatus==1}
				<td><a href="viewprescription.php?key={$data.bookingkey}" class="btn btn-primary">View Prescription</a></td>
				{/if}
			</tr>
			{/foreach}
			</table></center></form></body></html>