<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key1=$_GET['key'];
// echo $key;exit;
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{

		$obj->addlabreport($_FILES['report'],$key1);
	
	
}

$smartyObj->display('labsubheader.tpl');
$smartyObj->display('addlabreport.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:logintemplate.php");
}
?>
