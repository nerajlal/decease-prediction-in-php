<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lid=$_COOKIE['logkey'];
$var=$obj->reports($lid);
$smartyObj->assign("data",$var);
$smartyObj->display('labsubheader.tpl');
$smartyObj->display('reports.tpl');
$smartyObj->display('footer.tpl');
}
else
{ 
  Header("location:logintemplate.php");
}
?>