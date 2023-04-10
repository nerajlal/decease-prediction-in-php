<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_GET['key'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['prescription'])AND($_POST['prescription'])!=null)
	{
		$prescription=trim($_POST['prescription']);
		$obj->addprescription($prescription,$key);
	}
	else
		"<script>alert('enter the prescription')</script>";
}
$smartyObj->display('doctorsubheader.tpl');
$smartyObj->display('prescription.tpl');
$smartyObj->display('footer.tpl');
}
else
{ 
  Header("location:logintemplate.php");
}
?>
