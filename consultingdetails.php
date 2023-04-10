<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['logkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
 if(isset($_POST['availableday'])AND($_POST['availableday'])!= NULL)
  {
   if(isset($_POST['timefrom'])AND($_POST['timefrom'])!=NULL)
     {
     	if(isset($_POST['timeto'])AND($_POST['timeto'])!=NULL)
     	{
     	if(isset($_POST['consultingfee'])AND($_POST['consultingfee'])!=NULL)
     	{
     		$day=trim($_POST['availableday']);
     		$timefrom=trim($_POST['timefrom']);
     		$timeto=trim($_POST['timeto']);
     		$consultingfee=trim($_POST['consultingfee']);
        $obj->consultationdetails($day,$timefrom,$timeto,$consultingfee,$lkey);
     	}
      else
       echo"<script>alert('enter your consulting fee')</script>";
     	}
      else
        echo"<script>alert('time field is empty')</script>";
     	}
      else
        echo"<script>alert('time feild is empty')</script>";
    }
    else
      echo"<script>alert('enter your available days')</script>";
  }
  }
else
{ 
  Header("location:logintemplate.php");
}
  $smartyObj->display("doctorsubheader.tpl");
  $smartyObj->display("consultingdetails.tpl");
  $smartyObj->display("footer.tpl");
?>