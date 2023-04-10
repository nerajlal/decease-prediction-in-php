<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lid=$_COOKIE['logkey'];
// $rid=$_GET['key'];
		$var=$obj->complaintview($lid);
		 $smartyObj->assign("data",$var);
$smartyObj->display("usersubheader.tpl");
$smartyObj->display("viewcomplaint.tpl");
$smartyObj->display("footer.tpl");
}
else
{ 
  Header("location:logintemplate.php");
}
?>