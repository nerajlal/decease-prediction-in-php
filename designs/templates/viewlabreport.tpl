<html>
<head><title>appointment</title>
	</head>
	<body>
		<center>
			<h2>REPORT</h2>
			<table>
				<form action="" method="POST">
					
					<tr><td>Report:</td><td>{foreach from=$data item="data"}
						{$data.report}<a href="{$data.path}" target="_blank" download="report">Download</a>{/foreach}</td></tr>
					
				</form>
			</table>
		</center>
	</body>
	</html>