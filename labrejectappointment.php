<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_GET['key'];
$lid=$_COOKIE['logkey'];
$var=$obj->labrejectappointment($key,$lid);
$smartyObj->display('labappointmentview.tpl');
?>