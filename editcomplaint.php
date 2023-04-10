<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$key=$_GET['key'];
$lid=$_COOKIE['logkey'];
$var=$obj->docselect();
$smartyObj->assign("data",$var);
$var1=$obj->selectcomplaint($key);
$smartyObj->assign("view",$var1);

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['doctors'])AND($_POST['doctors'])!=null)
	{
	// echo "hii";
	if(isset($_POST['complaint'])AND($_POST['complaint'])!=null)
	{
		$complaint=trim($_POST['complaint']);
		$doctor=trim($_POST['doctors']);
		$obj->editcomplaint($lid,$doctor,$complaint,$key);
		 // $smartyObj->assign("data",$var);
	}
	else
		echo"<script>alert('type your complaint')</script>";
}
else
echo"<script>alert('select doctor name')</script>";
	
}
$smartyObj->display("usersubheader.tpl");
$smartyObj->display("editcomplaint.tpl");
$smartyObj->display("footer.tpl");
}
else
{ 
  Header("location:logintemplate.php");
}
?>