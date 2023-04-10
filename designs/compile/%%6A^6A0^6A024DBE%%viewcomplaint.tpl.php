<?php /* Smarty version 2.6.26, created on 2022-05-11 11:35:07
         compiled from viewcomplaint.tpl */ ?>
<html>
<head>
	<title>Messages</title></head>
	<body>
		<form align="center" action="" method="POST">
			<table class="table table-bordered">
			<tr><th>Name</th>
				<th>Contact no</th>
				<th>complaint</th>
				<th>Date sent</th>
			</tr>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>

			<tr><td><?php echo $this->_tpl_vars['data']['name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['contactno']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['complaint']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data']['complaintdate']; ?>
</td>
				<td><a href="editcomplaint.php?key=<?php echo $this->_tpl_vars['data']['ckey']; ?>
" class="btn btn-success">edit</a></td>
				<td><a href="deletecomplaint.php?key=<?php echo $this->_tpl_vars['data']['ckey']; ?>
" class="btn btn-danger">Delete</a></td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
		</table>
		</form>
	</body>
</html>