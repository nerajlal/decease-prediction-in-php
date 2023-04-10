<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$var=$obj->labdetailsadmin();
$smartyObj->assign("data",$var);
$smartyObj->display("labdetailsadmin.tpl");
?>