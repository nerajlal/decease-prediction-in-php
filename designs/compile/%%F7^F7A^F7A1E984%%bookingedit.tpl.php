<?php /* Smarty version 2.6.26, created on 2022-02-25 09:20:51
         compiled from bookingedit.tpl */ ?>
<html>
<head>
	<title>details</title></head>
	<body>
		<form action="" method="POST"><center>
			<table border="1">
			<input type="hidden" value="h" name="hide">
			
			<tr><th>Doctor Name</th>
				<th>Specialization</th>
				<th>District</th>
				<th>Consulting Time</th>
				<th>Consulting date</th>
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
				<td><?php echo $this->_tpl_vars['data']['consultingtime']; ?>
</td>
				
				<td><?php echo $this->_tpl_vars['data']['consultingdate']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['consultingfee']; ?>
</td>
				<td><a href="">EDIT</a></td>
				<td><a href="">DELETE</a></td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
			</table></center></form></body></html>