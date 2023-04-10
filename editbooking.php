<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj=new userclass();
// $lkey=$_COOKIE['logkey'];
$dlid=$_GET['key'];
$var=$obj->editbooking($dlid);
$smartyObj->assign("data",$var);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	// echo "hii";
	if(isset($_POST['date'])AND($_POST['date'])!=null)
	{
		if(isset($_POST['time'])AND($_POST['time'])!=null)
		{
			if(isset($_POST['symptoms'])AND($_POST['symptoms'])!=null)
			{
				$date=trim($_POST['date']);
				$time=trim($_POST['time']);
				$symptoms=trim($_POST['symptoms']);
				$obj->updatebooking($date,$time,$symptoms,$dlid);
				// $smartyObj->assign("data",$var);
			}
			else
				echo"<script>alert('enter the symptoms')</script>";
		}
		else
			echo"<script>alert('enter the consulting time')</script>";
	}
	else
	echo"<script>alert('enter the consulting date')</script>";
}
// $smartyObj->display("usersubheader.tpl");
$smartyObj->display("editbooking.tpl");
// $smartyObj->display("footer.tpl");
?>