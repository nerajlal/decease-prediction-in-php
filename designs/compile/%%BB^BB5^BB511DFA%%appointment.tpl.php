<?php /* Smarty version 2.6.26, created on 2022-03-24 10:15:59
         compiled from appointment.tpl */ ?>
<html>
<head>
	<title>details</title></head>
	<body>
		<form align="center" action="" method="POST">
			<table class="table table-bordered" align="center">
			<input type="hidden" value="h" name="hide">
			<tr><td><input type="text" placeholder="search..." name="search" class="form-control"></td><td align="left"><button type="submit"><i class="fa fa-search"></i></button></td></tr></table>
			<table class="table table-bordered">
			<?php if ($this->_tpl_vars['data'] != null): ?>
		
			
			<tr><th>Name</th>
				<th>Specialization</th>
				<th>District</th>
				<th> Time from</th>
				<th> Time to</th>
				<th> Days</th>
				<th> Consultation fee</th>
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
				<td><?php echo $this->_tpl_vars['data']['timefrom']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['timeto']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['consultingday']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['consultingfee']; ?>
</td>
				<td><a href="bookingdetails.php?key=<?php echo $this->_tpl_vars['data']['loginid']; ?>
" class="btn btn-success">Book</a></td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
		</table>
		</form>
	</body>
</html>