<?php /* Smarty version 2.6.26, created on 2022-04-30 08:21:38
         compiled from reportgenerate.tpl */ ?>
<html>
<head>
	<title>details</title></head>
	<body>
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>	
		<form action="" method="POST">
			<input type="hidden" name="hide" value="h">

		<table align="center" cellspacing="10" cellpadding="10">
			<tr><td>Name:</td><td><input type="text" name="name" value="<?php echo $this->_tpl_vars['data']['name']; ?>
" 
				class="form-control"></td></tr>
				<tr><td>Contact:</td><td><input type="text" name="contact" value="<?php echo $this->_tpl_vars['data']['contact']; ?>
" class="form-control"></td></tr>
				<tr><td>Age:</td><td><input type="number" name="age" value="<?php echo $this->_tpl_vars['data']['age']; ?>
" class="form-control"></td></tr>
				<tr><td>Test:</td><td><input type="text" name="test" value="<?php echo $this->_tpl_vars['data']['testname']; ?>
"class="form-control"></td></tr>
				<tr><td>Date:</td><td><input type="text" name="date" value="<?php echo $this->_tpl_vars['data']['consultingdate']; ?>
" 
					class="form-control"></td></tr>			
				<tr><td>Result:</td><td><input type="text" name="result" class="form-control"></td></tr>
				<tr><td></td><td><input type="submit" name="submit" value="update" class="btn btn-success"></td>
			</tr>
			</table>
			
		</form>
	<?php endforeach; endif; unset($_from); ?>
</body></html>