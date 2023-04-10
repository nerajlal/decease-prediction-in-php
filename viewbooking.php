<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['logkey'];
$var=$obj->viewbooking($lkey);
$smartyObj->assign("data",$var);
$smartyObj->display("usersubheader.tpl");
$smartyObj->display('viewbooking.tpl');
$smartyObj->display("footer.tpl");
}
else
{ 
  Header("location:logintemplate.php");
}
?>