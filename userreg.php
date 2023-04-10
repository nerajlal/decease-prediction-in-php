<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj = new userclass();
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
         if(isset($_POST['gender'])AND($_POST['gender'])!=NULL)
         {
         	if(isset($_POST['age'])AND($_POST['age'])!=NULL)
         	{
         		if (preg_match('/^[0-9]*$/', $_POST['age'])) 
                        {
         		if(isset($_POST['contact'])AND($_POST['contact'])!=NULL)
         		{
         			if (preg_match('/^[0-9]*$/', $_POST['contact'])) 
                        {
                          $nm1=strlen($_POST['contact']);
                        if($nm1>=10 and $nm1<=12)
                        {
         			if(isset($_POST['email'])AND($_POST['email'])!=NULL)
         			{
         				if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
                      {
                        echo "<script> alert ('Email id is not valid')</script>";
                      }
         				if(isset($_POST['password'])AND($_POST['password'])!=NULL)
         				{
         					$name=trim($_POST['name']);
         					$address=trim($_POST['addr']);
         					$pincode=trim($_POST['pincode']);
         					$district=trim($_POST['district']);
         					$gender=trim($_POST['gender']);
         					$age=trim($_POST['age']);
         					$contactno=trim($_POST['contact']);
         					$email=trim($_POST['email']);
         					$password=trim($_POST['password']);
         					$obj->uregistration($name,$address,$pincode,$district,$gender,$age,$contactno,$email,$password);
         				}
         				else
         					echo"<script>alert('Password feild is empty')</script>";
         			}
         			else
		           	echo"<script>alert('Email feild is empty')</script>";
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
		       	echo "<script> alert('Please enter numbers for age')</script>"; 
		       	 } 
		       else
		       	echo"<script>alert('Enter your age')</script>";
		     }
		     else
		     	echo"<script>alert('Select your gender')</script>";
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
$smartyObj->display('indexsubheader.tpl');
$smartyObj->display('userreg.tpl');
$smartyObj->display('footer.tpl');
?> 