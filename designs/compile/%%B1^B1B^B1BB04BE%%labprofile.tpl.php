<?php /* Smarty version 2.6.26, created on 2022-04-26 09:44:26
         compiled from labprofile.tpl */ ?>
<html>
<head><title>lab profile</title>
</head>
<body>
<center>
<form action=" " method="POST">
<table cellspacing="20" cellpadding="10">
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>
<input type="hidden" name="hide" value="h">
<tr><td>Lab Name:</td>
<td><input type="text" name="name" class="form-control" value="<?php echo $this->_tpl_vars['data']['labname']; ?>
"></td></tr>
<tr><td>Address:</td>
<td><textarea name="addr" class="form-control"><?php echo $this->_tpl_vars['data']['address']; ?>
</textarea></td></tr>
<tr><td>Pincode:</td>
<td><input type="text" name="pincode" class="form-control" value="<?php echo $this->_tpl_vars['data']['pincode']; ?>
"></td></tr>
<tr><td>District:</td>
<td><input type="text" name="district" class="form-control" value="<?php echo $this->_tpl_vars['data']['district']; ?>
"></td></tr>
<tr><td>City:</td>
<td><input type="text" name="city" class="form-control" value="<?php echo $this->_tpl_vars['data']['city']; ?>
"></td></tr>
<tr><td>Contact no:</td>
<td><input type="text" name="contact" class="form-control" value="<?php echo $this->_tpl_vars['data']['contactno']; ?>
"></td></tr>
<tr><td></td><td><input type="submit" value="Update" class="btn btn-success"></td></tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</form>
</center>
</body>
</html>