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
				<th>District</th>
				<th>Contact no</th>
				<th> Time from</th>
				<th> Time to</th>
				<th> Days</th>
			</tr>
			{foreach from=$data item="data"}

			<tr><td>{$data.labname}</td>
				<td>{$data.district}</td>
				<td>{$data.contactno}</td>
				<td>{$data.timefrom}</td>
				<td>{$data.timeto}</td>
				<td>{$data.days}</td>
				<td><a href="labbooking.php?key={$data.loginid}" class="btn btn-success">Book</a></td>
			</tr>
			{/foreach}
{/if}
		</table>
		</form>
	</body>
</html>
