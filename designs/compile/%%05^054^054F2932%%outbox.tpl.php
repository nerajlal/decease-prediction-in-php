<?php /* Smarty version 2.6.26, created on 2022-12-22 05:27:03
         compiled from outbox.tpl */ ?>
<html>
<head>
	<title>Outbox</title></head>
	<body>
		<form align="center" action="" method="POST">
			<table class="table table-bordered">
			<tr><th>Name</th>
				<th>Specialization</th>
				<th>Message</th>
				<th>Date sent</th>
			</tr>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>

			<tr><td><?php echo $this->_tpl_vars['data']['name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['specialization']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['message']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['currentdate']; ?>
</td>
				<?php if ($this->_tpl_vars['data']['viewstatus'] == 0): ?>
				<td><a href="usereditmsg.php?key=<?php echo $this->_tpl_vars['data']['msgkey']; ?>
" class="btn btn-success">EDIT</a></td>
				<td><a href="deletemessage.php?key=<?php echo $this->_tpl_vars['data']['msgkey']; ?>
" class="btn btn-danger">DELETE</a></td>
				<?php endif; ?>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
		</table>
		</form>
	</body>
</html>