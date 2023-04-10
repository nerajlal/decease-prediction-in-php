<?php /* Smarty version 2.6.26, created on 2022-04-30 08:17:02
         compiled from labappointmentview.tpl */ ?>
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

				<?php if ($this->_tpl_vars['data']['labbookingstatus'] == 0): ?>
				<td><a href="labapproveappointment.php?key=<?php echo $this->_tpl_vars['data']['labkey']; ?>
" class="btn btn-success">APPROVE</a></td>
				<td><a href="labrejectappointment.php?key=<?php echo $this->_tpl_vars['data']['labkey']; ?>
" class="btn btn-danger">REJECT</a></td>
				<?php elseif ($this->_tpl_vars['data']['labbookingstatus'] == 1): ?>
				<td>Approved</td>
				<td><a href="labrejectappointment.php?key=<?php echo $this->_tpl_vars['data']['labkey']; ?>
" class="btn btn-danger">REJECT</a></td>
				<?php else: ?>
				<td>Rejected</td>
				<td><a href="labapproveappointment.php?key=<?php echo $this->_tpl_vars['data']['labkey']; ?>
" class="btn btn-success">APPROVE</a></td>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['data']['labbookingstatus'] == 1): ?>
			<td><a href="reportgenerate.php?key=<?php echo $this->_tpl_vars['data']['labkey']; ?>
" class="btn btn-primary">GENERATE REPORT</a></td>
			<td><a href="addlabreport.php?key=<?php echo $this->_tpl_vars['data']['labkey']; ?>
" class="btn btn-primary">ADD REPORT</a></td>
		</tr>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</table>
</center>
</form>
</body>
</html>