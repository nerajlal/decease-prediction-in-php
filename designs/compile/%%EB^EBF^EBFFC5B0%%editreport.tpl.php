<?php /* Smarty version 2.6.26, created on 2022-04-13 08:32:12
         compiled from editreport.tpl */ ?>
<html>
<head><title>appointment</title>
	</head>
	<body>
		<center>
			<table>
				<form action="" method="POST" enctype="multipart/form-data">
					
					<input type="hidden" value="h" name="hide">
					<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>
					<tr><td>Report:<input type="text" value="<?php echo $this->_tpl_vars['data']['report']; ?>
"></td></tr>
					<?php endforeach; endif; unset($_from); ?>
					<tr><td>Upload:<input type="file" name="report" class="form-control"></td></tr>
					<tr><td><input type="submit" value="EDIT" class="btn btn-success"></td></tr>
					
				</form>
			</table>
		</center>
	</body>
	</html>