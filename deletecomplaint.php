<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj=new userclass();
$key=$_GET['key'];
$obj->deletecomplaint($key);
?>