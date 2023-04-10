<html>
<head><title>appointment</title>
	</head>
	<body>
		<center>
			<h2>PRESCRIPTION</h2>
			<table class="table table-bordered">
				<form action="" method="POST">
					
					<tr><td>Prescription:</td><td>{foreach from=$data item="data"}<textarea name="prescription">{$data.prescription}</textarea>{/foreach}</td></tr>
					
				</form>
			</table>
		</center>
	</body>
	</html>