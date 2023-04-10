<?php /* Smarty version 2.6.26, created on 2022-02-11 10:20:54
         compiled from edit.tpl */ ?>
<html>
<head>
<title>editing page</title></head>
<body>
	<center><h2><u>EDITING PAGE</u></h2>
		<form action="" method="POST">
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>	

			<table bgcolor="pink">
			<input type="hidden" value="h" name="hide">
			<tr><td>Name:</td><td><input type="text" name="name" value="<?php echo $this->_tpl_vars['data']['name']; ?>
"></td></tr><br>
			<tr><td>Address:</td><td><textarea name="address"><?php echo $this->_tpl_vars['data']['address']; ?>
</textarea></td></tr><br>
			<tr><td>Gender:</td><td><select name="gender" id="gender"><option><?php echo $this->_tpl_vars['data']['gender']; ?>
</option><option value="male">MALE</option>
				<option value="female">FEMALE</option></select></td></tr><br>
			<tr><td>Email:</td><td><input type="email" name="email" value="<?php echo $this->_tpl_vars['data']['email']; ?>
"></td></tr><br>
				<tr><td></td><td><input type="SUBMIT" value="EDIT"></td></tr>
			</table>
			<?php endforeach; endif; unset($_from); ?>
			</form>
		</center>
</body>
</html>