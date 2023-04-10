<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$var=$obj->patientdetails();
$smartyObj->assign("data",$var);
$smartyObj->display("patientdetails.tpl");
}
else
{ 
  Header("location:logintemplate.php");
}
?>