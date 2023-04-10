<?php /* Smarty version 2.6.26, created on 2022-03-27 07:27:23
         compiled from docprofile.tpl */ ?>
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
				<tr><td>Address:</td><td><textarea name="address" class="form-control"><?php echo $this->_tpl_vars['data']['address']; ?>
</textarea></td></tr>
				<tr><td>Pincode:</td><td><input type="number" name="pincode" value="<?php echo $this->_tpl_vars['data']['pincode']; ?>
" class="form-control"></td></tr>
				<tr><td>District:</td><td><input type="text" name="district" value="<?php echo $this->_tpl_vars['data']['district']; ?>
"class="form-control"></td></tr>
				<tr><td>City:</td><td><input type="text" name="city" value="<?php echo $this->_tpl_vars['data']['city']; ?>
" 
					class="form-control"></td></tr>			
				<tr><td>Gender:</td><td><select name="gender" class="form-control"><option><?php echo $this->_tpl_vars['data']['gender']; ?>
</option><option value="Male">MALE</option>
				<option value="Female">FEMALE</option>	</select></td></tr>		
					<tr><td>DOB:</td><td><input type="date" name="dob" value="<?php echo $this->_tpl_vars['data']['dob']; ?>
" 
						class="form-control"></td></tr>
				<tr><td>Specialization:</td><td><input type="text" name="spec" value="<?php echo $this->_tpl_vars['data']['specialization']; ?>
" class="form-control"></td></tr>
				<tr><td>Contact no:</td><td> <input type="number" name="contact" value="<?php echo $this->_tpl_vars['data']['contactno']; ?>
" class="form-control"></td></tr>
				<tr><td></td><td><input type="submit" value="update" class="btn btn-success"></td>
			</tr>
			</table>
			
		</form>
	<?php endforeach; endif; unset($_from); ?>
</body></html>