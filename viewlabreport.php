<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_GET['key'];
$var=$obj->viewlabreport($key);
$smartyObj->assign("data",$var);
$smartyObj->display('usersubheader.tpl');
$smartyObj->display('viewlabreport.tpl');
$smartyObj->display('footer.tpl');
}
else
{ 
  Header("location:logintemplate.php");
}
?>
