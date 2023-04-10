<?php /* Smarty version 2.6.26, created on 2022-04-30 08:27:07
         compiled from reports.tpl */ ?>
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
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>

			<tr><td><?php echo $this->_tpl_vars['data']['name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['bookingdate']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['consultingdate']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['consultingtime']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['testname']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['report']; ?>
</td>
				<?php if ($this->_tpl_vars['data']['report'] != null): ?>
				<td><a href="editreport.php?key=<?php echo $this->_tpl_vars['data']['labkey']; ?>
" class="btn btn-success">EDIT REPORT</a></td>
				<td><a href="deletereport.php?key=<?php echo $this->_tpl_vars['data']['labkey']; ?>
" class="btn btn-danger">DELETE REPORT</a></td></tr>
				<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</table>
</center>
</form>
</body>
</html>