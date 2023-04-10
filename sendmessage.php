<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lid=$_COOKIE['logkey'];
$rid=$_GET['key'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	// echo "hii";
	if(isset($_POST['message'])AND($_POST['message'])!=null)
	{
		$message=trim($_POST['message']);
		$var=$obj->sendmessage($message,$lid,$rid);
		 // $smartyObj->assign("data",$var);
	}
	else
		echo"<script>alert('type your message')</script>";
	
}
$smartyObj->display("usersubheader.tpl");
$smartyObj->display("sendmessage.tpl");
$smartyObj->display("footer.tpl");
}
else
{ 
  Header("location:logintemplate.php");
}
?>