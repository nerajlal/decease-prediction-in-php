<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	// echo "hii";exit;
	if(isset($_POST['email'])AND($_POST['email'])!=NULL)
	{
		if(isset($_POST['password'])AND($_POST['password'])!=NULL)
		{
			$email=trim($_POST['email']);
			$password=trim($_POST['password']);
			$obj->login($email,$password);
		}
		else
			echo"<script>alert('enter your passsword')</script>";
	}
	else
		echo"<script>alert('enter your email')</script>";
}
$smartyObj->display("login3.tpl");
?>