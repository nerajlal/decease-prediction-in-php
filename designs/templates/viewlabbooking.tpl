<html>
<head>
	<title>details</title></head>
	<body>
		<form action="" method="POST"><center>
			<table border="1" class="table table-bordered">
			<input type="hidden" value="h" name="hide">
			
			<tr><th>Lab Name</th>
				
				<th>District</th>
				<th>City</th>
				<th>Consulting Time</th>
				<th>Consulting date</th>
				<th>Test Name</th>
				<th>Booking Status</th>
				
				<!-- <th>Token number</th> -->
				<!-- <th>Status</th> -->
			</tr>
			{foreach from=$data item="data"}

			<tr><td>{$data.labname}</td>
				<td>{$data.district}</td>
				<td>{$data.city}</td>
				<td>{$data.consultingtime}</td>
				<td>{$data.consultingdate}</td>
				<td>{$data.testname}</td>
				<!-- <td>{$data.tokenno}</td> -->
				{
					if $data.labbookingstatus==1
				}
				<td>BOOKING ACCEPTED</td>
				{
					elseif $data.labbookingstatus==2
				}
				<td>BOOKING REJECTED</td>
				{
					else
				}
				<td>PENDING</td>
				{/if}
				{if $data.labbookingstatus==0}
				<td><a href="editlabbooking.php?key={$data.labkey}" class="btn btn-success">EDIT</a></td>
				<td><a href="deletelabbooking.php?key={$data.labkey}" class="btn btn-danger">DELETE</a></td>
				{/if}
				{if $data.labbookingstatus==1}
				<td><a href="viewlabreport.php?key={$data.labkey}" class="btn btn-primary">VIEW REPORT</a></td>
				{/if}
			</tr>
			{/foreach}
			</table></center></form></body></html>