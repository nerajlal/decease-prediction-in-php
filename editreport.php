<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key1=$_GET['key'];
// echo $key;exit;
$var=$obj->editviewreport($key1);
$smartyObj->assign("data",$var);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{

		$obj->editreport($_FILES['report'],$key1);
	
	
}
$smartyObj->display('labsubheader.tpl');
$smartyObj->display('editreport.tpl');
$smartyObj->display('footer.tpl');
?>
