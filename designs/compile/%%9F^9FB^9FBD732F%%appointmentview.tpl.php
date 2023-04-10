<?php /* Smarty version 2.6.26, created on 2022-03-24 10:30:22
         compiled from appointmentview.tpl */ ?>
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
				<td><?php echo $this->_tpl_vars['data']['symptoms']; ?>
</td>
				<?php if ($this->_tpl_vars['data']['bookingstatus'] == 0): ?>
				<td><a href="approveappointment.php?key=<?php echo $this->_tpl_vars['data']['bookingkey']; ?>
" class="btn btn-success">APPROVE</a></td>
				<td><a href="rejectappointment.php?key=<?php echo $this->_tpl_vars['data']['bookingkey']; ?>
" class="btn btn-danger">REJECT</a></td>
				<?php elseif ($this->_tpl_vars['data']['bookingstatus'] == 1): ?>
				<td>Approved</td>
				<td><a href="rejectappointment.php?key=<?php echo $this->_tpl_vars['data']['bookingkey']; ?>
" class="btn btn-danger">REJECT</a></td>
				<?php else: ?>
				<td>Rejected</td>
				<td><a href="approveappointment.php?key=<?php echo $this->_tpl_vars['data']['bookingkey']; ?>
" class="btn btn-success">APPROVE</a></td>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['data']['bookingstatus'] == 1): ?>
			<td><a href="prescription.php?key=<?php echo $this->_tpl_vars['data']['bookingkey']; ?>
" class="btn btn-primary">ADD PRISCRIPTION</a></td>
		</tr>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</table>
</center>
</form>
</body>
</html>