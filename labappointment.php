<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	// echo "hii";
	if(isset($_POST['search'])AND($_POST['search'])!=null)
	{
		$name=trim($_POST['search']);
		$var=$obj->labsearch($name);
		 $smartyObj->assign("data",$var);
	}
	else
		echo"<script>alert('enter the name/district')</script>";
	
}

$smartyObj->display("usersubheader.tpl");
$smartyObj->display("labappointment.tpl");
$smartyObj->display("footer.tpl");
}
else
{ 
  Header("location:logintemplate.php");
}
?>