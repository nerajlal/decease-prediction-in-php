<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj = new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lid=$_COOKIE['logkey'];
$var=$obj->labdetails($lid);
$smartyObj->assign("data",$var);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
 if(isset($_POST['name'])AND($_POST['name'])!= NULL)
  {
    if (preg_match('/^[A-Z a-z]*$/', $_POST['name']))
        {
   if(isset($_POST['addr'])AND($_POST['addr'])!=NULL)
     {
     	if(isset($_POST['pincode'])AND($_POST['pincode'])!=NULL)
     	{
         if (preg_match('/^[0-9]*$/', $_POST['pincode']))
        {
          $no=strlen($_POST['pincode']);
          if($no==6)
          {
     		if(isset($_POST['district'])AND($_POST['district'])!=NULL)
     		{
     			if(isset($_POST['city'])AND($_POST['city'])!=NULL)
     			{
            if(isset($_POST['contact'])AND($_POST['contact'])!=NULL)
            {
              if (preg_match('/^[0-9]*$/', $_POST['contact'])) 
                        {
                          $nm1=strlen($_POST['contact']);
                        if($nm1>=10 and $nm1<=12)
                        {
                    {
     									$name=trim($_POST['name']);
     									$address=trim($_POST['addr']);
     									$pincode=trim($_POST['pincode']);
     									$district=trim($_POST['district']);
     									$city=trim($_POST['city']);
     									$contactno=trim($_POST['contact']);
     									$obj->labedit($name,$address,$pincode,$district,$city,$contactno,$lid);
     								
     							}
                }
                  else
                      echo"<script>alert('Phone number should be 10 digit or 12 digit')</script>";
                    }
                    else
                      echo "<script> alert('Please enter numbers for phone number')</script>"; 
                      } 
     							else
     								echo"<script>alert('Enter your contact no')</script>";
                }
                else
                  echo"<script>alert('Enter your city')</script>";
              }
              else
                echo"<script>alert('District feild is empty')</script>";
            }
            else
      echo "<script> alert('pin number contains only 6 characters')</script>";
    }
    else
      echo "<script> alert('Please enter numbers for pincode')</script>";
  }
            else
              echo"<script>alert('Enter your pincode')</script>";
          }
          else
            echo"<script>alert('Address feild is empty')</script>";
        }
        else
        echo "<script> alert('Please enter alphabets for name')</script>";  
      }
        else
          echo"<script>alert('Name feild is empty')</script>";
      }
  $smartyObj->display('labsubheader.tpl');
 $smartyObj->display('labprofile.tpl');
  $smartyObj->display('footer.tpl');
  }
else
{ 
  Header("location:logintemplate.php");
}
?> 