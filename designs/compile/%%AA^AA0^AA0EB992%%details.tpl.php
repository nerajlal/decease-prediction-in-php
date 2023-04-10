<?php /* Smarty version 2.6.26, created on 2022-02-12 07:48:52
         compiled from details.tpl */ ?>
<html>
<head>
	<title>details</title></head>
	<body>
		<table border="1" align="center" cellspacing="10" cellpadding="10">
			<tr><th>Name</th>
				<th>Address</th>
				<th>Gender</th>
				<th> Email</th>
		

			</tr>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>
			<tr><td><?php echo $this->_tpl_vars['data']['name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['address']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['gender']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['email']; ?>
</td><td><a href="edit.php?key=<?php echo $this->_tpl_vars['data']['regkey']; ?>
">EDIT</a></td><td><a href="delete.php?key=<?php echo $this->_tpl_vars['data']['regkey']; ?>
">DELETE</a></td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
			</table>
		<br>
			<center><a href="logout.php"><input type="submit" value="LOGOUT"></a></center>
		
	</body>
</html>