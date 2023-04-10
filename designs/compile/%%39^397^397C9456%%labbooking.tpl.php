<?php /* Smarty version 2.6.26, created on 2022-04-23 09:01:33
         compiled from labbooking.tpl */ ?>
<html>
<head><title>Booking details</title>
</head>
<body>
<center>
<form action=" " method="POST">
<table cellspacing="20" cellpadding="10">
<input type="hidden" name="hide" value="h">
<tr><td>Consulting Date</td>
<td><input type="date" name="date" class="form-control"></td></tr>
<tr><td>Consulting Time:</td>
<td><input type="time" name="time" class="form-control"></td></tr>

<tr><td>Test:</td><td>
	<select name="test"><?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?><option value="<?php echo $this->_tpl_vars['data']['id']; ?>
"><?php echo $this->_tpl_vars['data']['testname']; ?>
</option>
	<?php endforeach; endif; unset($_from); ?></select></td></tr>
	
<tr><td></td><td><input type="submit" value="submit" class="btn btn-success"></td></tr>
</table></form></center></body></html>