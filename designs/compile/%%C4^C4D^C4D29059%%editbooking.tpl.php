<?php /* Smarty version 2.6.26, created on 2022-02-25 10:27:47
         compiled from editbooking.tpl */ ?>
<html>
<head><title>Booking details</title>
</head>
<body>
<center>
	<h2><u>Booking details</u></h2>
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
<tr><td>Symptoms:</td>
<td><textarea name="symptoms"><?php echo $this->_tpl_vars['data']['symptoms']; ?>
</textarea></td></tr>
<tr><td><input type="submit" value="update"></td></tr>
</table><?php endforeach; endif; unset($_from); ?>
</form></center></body></html>