<?php /* Smarty version 2.6.26, created on 2022-11-07 18:48:21
         compiled from viewbooking.tpl */ ?>
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
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>

			<tr><td><?php echo $this->_tpl_vars['data']['name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['specialization']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['district']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['consultingtime']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['consultingdate']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['consultingfee']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['tokenno']; ?>
</td>
				<?php if ($this->_tpl_vars['data']['bookingstatus'] == 1): ?>
				<td>BOOKING ACCEPTED</td>
				<?php elseif ($this->_tpl_vars['data']['bookingstatus'] == 2): ?>
				<td>BOOKING REJECTED</td>
				<?php else: ?>
				<td>PENDING</td>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['bookingstatus'] == 0): ?>
				<td><a href="editbooking.php?key=<?php echo $this->_tpl_vars['data']['bookingkey']; ?>
" class="btn btn-success">EDIT</a></td>
				<td><a href="deletebooking.php?key=<?php echo $this->_tpl_vars['data']['bookingkey']; ?>
" class="btn btn-danger">DELETE</a></td>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['bookingstatus'] == 1): ?>
				<td><a href="viewprescription.php?key=<?php echo $this->_tpl_vars['data']['bookingkey']; ?>
" class="btn btn-primary">View Prescription</a></td>
				<?php endif; ?>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
			</table></center></form></body></html>