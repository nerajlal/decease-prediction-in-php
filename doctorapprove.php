<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$a=$_GET['key'];
$var=$obj->doctorapprove($a);
// $smartyObj->assign("data",$var);
$smartyObj->display("docdetail.tpl");
?>