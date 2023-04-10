<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj=new userclass();
// $lkey=$_COOKIE['logkey'];
$lid=$_GET['key'];
$var=$obj->editlabbooking($lid);
$smartyObj->assign("data",$var);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	// echo "hii";
	if(isset($_POST['date'])AND($_POST['date'])!=null)
	{
		if(isset($_POST['time'])AND($_POST['time'])!=null)
		{
			if(isset($_POST['test'])AND($_POST['test'])!=null)
			{
				$date=trim($_POST['date']);
				$time=trim($_POST['time']);
				$test=trim($_POST['test']);
				$obj->updatelabbooking($date,$time,$test,$lid);
				
			}
			else
				echo"<script>alert('enter the test name')</script>";
		}
		else
			echo"<script>alert('enter the consulting time')</script>";
	}
	else
	echo"<script>alert('enter the consulting date')</script>";
}
// $smartyObj->display("usersubheader.tpl");
$smartyObj->display("editlabbooking.tpl");
// $smartyObj->display("footer.tpl");
?>