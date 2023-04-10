<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$dlid=$_COOKIE['logkey'];
$var=$obj->viewappointment($dlid);
$smartyObj->assign("data",$var);
$smartyObj->display('doctorsubheader.tpl');
$smartyObj->display('appointmentview.tpl');
$smartyObj->display('footer.tpl');
?>