<?php /* Smarty version 2.6.26, created on 2022-03-24 10:40:16
         compiled from consultancyedit.tpl */ ?>
<html>
<head>
<title>consultancy details edit</title></head><center>
	<!-- <u>UPDATE DETAILS</u> -->
<form method="POST" action="">
	<table>
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>
		<input type="hidden" value="h" name="hide">
		
<tr><td>	Available day</td><td><textarea name="availableday" class="form-control"><?php echo $this->_tpl_vars['data']['consultingday']; ?>
</textarea></td></tr>
	<tr><td>Available Time:-&nbsp; From</td><td><input type="time" name="timefrom" value="<?php echo $this->_tpl_vars['data']['timefrom']; ?>
">&nbsp;&nbsp;To<input type="time" name="timeto" value="<?php echo $this->_tpl_vars['data']['timeto']; ?>
"></tr>
	<tr><td>Consulting Fee</td><td><input type="textbox" name="consultingfee" value="<?php echo $this->_tpl_vars['data']['consultingfee']; ?>
" class="form-control"></td></tr>
	<tr><td></td><td><input type="submit" value="update" class="btn btn-success"></td></tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
</form></center>
</html>