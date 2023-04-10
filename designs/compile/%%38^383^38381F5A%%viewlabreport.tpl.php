<?php /* Smarty version 2.6.26, created on 2022-11-07 18:48:41
         compiled from viewlabreport.tpl */ ?>
<html>
<head><title>appointment</title>
	</head>
	<body>
		<center>
			<h2>REPORT</h2>
			<table>
				<form action="" method="POST">
					
					<tr><td>Report:</td><td><?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>
						<?php echo $this->_tpl_vars['data']['report']; ?>
<a href="<?php echo $this->_tpl_vars['data']['path']; ?>
" target="_blank" download="report">Download</a><?php endforeach; endif; unset($_from); ?></td></tr>
					
				</form>
			</table>
		</center>
	</body>
	</html>