<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['logkey'];
// $pay=$_GET['pay'];
$pay[0]=$_GET['pay'];
$pay[1]=$_GET['did'];
$pay[2]=$_GET['key'];
$p=$pay[0];
$p1=$pay[1];
$p2=$pay[2];
// $d=$_GET['did'];
// echo $d;exit;
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
 if(isset($_POST['number'])AND($_POST['number'])!= NULL)
  {
   if(isset($_POST['name'])AND($_POST['name'])!=NULL)
   {
   	if(isset($_POST['expiry'])AND($_POST['expiry'])!= NULL)
   	{
   		if(isset($_POST['csvnumber'])AND($_POST['csvnumber'])!=NULL)
   		{
   			$number=trim($_POST['number']);
   			$name=trim($_POST['name']);
   			$expiry=trim($_POST['expiry']);
   			$csvnumber=trim($_POST['csvnumber']);
            $obj->payment($number,$name,$expiry,$csvnumber,$lkey,$p,$p1,$p2);
   		}
   		else
   			echo"<script>alert('enter your csv number')</script>";
   	}
   	else
   		echo"<script>alert('enter the card expiry date')</script>";
   }
   else
   	echo"<script>alert('enter the card holder name')</script>";
}
else
	echo"<script>alert('enter the card number')</script>";
}
$smartyObj->display('paymentform.tpl');
}
else
{ 
  Header("location:logintemplate.php");
}
?>