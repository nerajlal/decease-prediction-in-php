<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key1=$_GET['key'];
// echo $key;exit;
$obj->deletereport($key1);
// $smartyObj->display('reports.tpl');
?>
