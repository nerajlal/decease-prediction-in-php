<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lid=$_COOKIE['logkey'];
$var=$obj->docselect();
$smartyObj->assign("data",$var);
// $rid=$_GET['key'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['doctors'])AND($_POST['doctors'])!=null)
	{
	// echo "hii";
	if(isset($_POST['complaint'])AND($_POST['complaint'])!=null)
	{
		$complaint=trim($_POST['complaint']);
		$doctor=trim($_POST['doctors']);
		$obj->complaint($lid,$doctor,$complaint);
		 // $smartyObj->assign("data",$var);
	}
	else
		echo"<script>alert('type your complaint')</script>";
}
else
echo"<script>alert('select doctor name')</script>";
	
}
$smartyObj->display("usersubheader.tpl");
$smartyObj->display("addcomplaint.tpl");
$smartyObj->display("footer.tpl");
}
else
{ 
  Header("location:logintemplate.php");
}
?>