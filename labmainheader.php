<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$smartyObj->display("labmainheader.tpl");
$smartyObj->display("footer.tpl");
?>