<?php /* Smarty version 2.6.26, created on 2022-11-07 18:46:51
         compiled from receivemessage.tpl */ ?>
<html>
<head>
	<title>Messages</title></head>
	<body>
		<form align="center" action="" method="POST">
			<table class="table table-bordered">
			<tr><th>Name</th>
				<th>Contact no</th>
				<th>Message</th>
				<th>Date sent</th>
			</tr>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>

			<tr><td><?php echo $this->_tpl_vars['data']['name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['contact']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['message']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['currentdate']; ?>
</td>
				<td><a href="replymessage.php?key=<?php echo $this->_tpl_vars['data']['loginid']; ?>
" class="btn btn-success">REPLY</a></td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
		</table>
		</form>
	</body>
</html>