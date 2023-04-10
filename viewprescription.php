<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_GET['key'];
$var=$obj->viewprescription($key);
$smartyObj->assign("data",$var);
$smartyObj->display('doctorsubheader.tpl');
$smartyObj->display('viewprescription.tpl');
$smartyObj->display('footer.tpl');
}
else
{ 
  Header("location:logintemplate.php");
}
?>
