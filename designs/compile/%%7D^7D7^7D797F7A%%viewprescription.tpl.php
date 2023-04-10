<?php /* Smarty version 2.6.26, created on 2022-12-21 16:59:08
         compiled from viewprescription.tpl */ ?>
<html>
<head><title>appointment</title>
	</head>
	<body>
		<center>
			<h2>PRESCRIPTION</h2>
			<table class="table table-bordered">
				<form action="" method="POST">
					
					<tr><td>Prescription:</td><td><?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?><textarea name="prescription"><?php echo $this->_tpl_vars['data']['prescription']; ?>
</textarea><?php endforeach; endif; unset($_from); ?></td></tr>
					
				</form>
			</table>
		</center>
	</body>
	</html>