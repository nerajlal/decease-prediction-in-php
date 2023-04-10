<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['logkey'];
// echo $lkey;exit;
$lid=$_GET['key'];
$var=$obj->testselect($lid);
$smartyObj->assign("data",$var);
// echo $dlid;exit;
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	// echo "hii";
	if(isset($_POST['date'])AND($_POST['date'])!=null)
	{
		// echo "hii";
		if(isset($_POST['time'])AND($_POST['time'])!=null)
		{
			if(isset($_POST['test'])AND($_POST['test'])!=null)
			{
				$date=trim($_POST['date']);
				$time=trim($_POST['time']);
				$test=trim($_POST['test']);
				$obj->labbooking($date,$time,$test,$lid,$lkey);
				// $smartyObj->assign("data",$var);
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
}
else
{	
	Header("location:logintemplate.php");
}
$smartyObj->display("usersubheader.tpl");
$smartyObj->display("labbooking.tpl");
$smartyObj->display("footer.tpl");
?>