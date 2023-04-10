<?php /* Smarty version 2.6.26, created on 2022-03-26 07:00:53
         compiled from editlabbooking.tpl */ ?>
<html>
<head><title>Edit Booking</title>
</head>
<body>
<center>
<form action=" " method="POST">
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>
<table cellspacing="20" cellpadding="10">
<input type="hidden" name="hide" value="h">
<tr><td>Consulting Date</td>
<td><input type="date" name="date" value="<?php echo $this->_tpl_vars['data']['consultingdate']; ?>
"></td></tr>
<tr><td>Consulting Time:</td>
<td><input type="time" name="time" value="<?php echo $this->_tpl_vars['data']['consultingtime']; ?>
"></td></tr>
<tr><td>Test name:</td>
<td><textarea name="test"><?php echo $this->_tpl_vars['data']['testname']; ?>
</textarea></td></tr>
<tr><td><input type="submit" value="update"></td></tr>
</table><?php endforeach; endif; unset($_from); ?>
</form></center></body></html>