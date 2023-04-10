<?php /* Smarty version 2.6.26, created on 2022-03-17 12:00:59
         compiled from usereditmsg.tpl */ ?>
<html>
<head><title>send message</title></head>
<body>
	<center>
		<form action="" method="POST">
			<input type="hidden" value="h" name="hide">
			<table class="table table-bordered" align="center">
				<tr><td>Message:&nbsp;
					<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>
					<textarea name="message"><?php echo $this->_tpl_vars['data']['message']; ?>
</textarea><?php endforeach; endif; unset($_from); ?>&nbsp;
					<input type="submit" value="SEND"></td></tr>
				</table>
			</form>
		</center>
	</body>
	</html>