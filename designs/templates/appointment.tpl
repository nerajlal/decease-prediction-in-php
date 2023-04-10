<html>
<head>
	<title>details</title></head>
	<body>
		<form align="center" action="" method="POST">
			<table class="table table-bordered" align="center">
			<input type="hidden" value="h" name="hide">
			<tr><td><input type="text" placeholder="search..." name="search" class="form-control"></td><td align="left"><button type="submit"><i class="fa fa-search"></i></button></td></tr></table>
			<table class="table table-bordered">
			{if $data!=null}
		
			
			<tr><th>Name</th>
				<th>Specialization</th>
				<th>District</th>
				<th> Time from</th>
				<th> Time to</th>
				<th> Days</th>
				<th> Consultation fee</th>
			</tr>
			{foreach from=$data item="data"}

			<tr><td>{$data.name}</td>
				<td>{$data.specialization}</td>
				<td>{$data.district}</td>
				<td>{$data.timefrom}</td>
				<td>{$data.timeto}</td>
				<td>{$data.consultingday}</td>
				<td>{$data.consultingfee}</td>
				<td><a href="bookingdetails.php?key={$data.loginid}" class="btn btn-success">Book</a></td>
			</tr>
			{/foreach}
{/if}
		</table>
		</form>
	</body>
</html>
