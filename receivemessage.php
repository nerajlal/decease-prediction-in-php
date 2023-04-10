<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lid=$_COOKIE['logkey'];
$var=$obj->receivemessage($lid);
$smartyObj->assign("data",$var);
$smartyObj->display("doctorsubheader.tpl");
$smartyObj->display("receivemessage.tpl");
$smartyObj->display("footer.tpl");
}
else
{ 
  Header("location:logintemplate.php");
}
?>