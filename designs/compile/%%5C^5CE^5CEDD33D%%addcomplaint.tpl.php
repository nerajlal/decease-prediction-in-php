<?php /* Smarty version 2.6.26, created on 2022-05-11 11:08:02
         compiled from addcomplaint.tpl */ ?>
<html>
<head><title>send message</title></head>
<body>
	<center>
		<form action="" method="POST">
			<input type="hidden" value="h" name="hide">
			<table align="center">
				
				<tr><td>Select doctor<select name="doctors" class="form-control">
					<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?><option value="<?php echo $this->_tpl_vars['data']['loginid']; ?>
"><?php echo $this->_tpl_vars['data']['name']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select></td></tr>
				
				<tr><td>Complaint:&nbsp;
					<textarea name="complaint" class="form-control"></textarea>&nbsp;
					<input type="submit" value="SEND" class="btn btn-success"></td></tr>
				</table>
			</form>
		</center>
	</body>
	</html>