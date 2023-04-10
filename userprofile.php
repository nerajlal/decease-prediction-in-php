<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['logkey'];
//echo $lkey;exit;
// $key=$_['key'];

$var=$obj->userdata($lkey);
$smartyObj->assign("data",$var);

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['name'])AND($_POST['name'])!=NULL)
	{
if (preg_match('/^[A-Z a-z]*$/', $_POST['name']))
        {
		if(isset($_POST['address'])AND($_POST['address'])!=NULL)
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
															{
																$name=trim($_POST['name']);
																$address=trim($_POST['address']);
																$pincode=trim($_POST['pincode']);
																$district=trim($_POST['district']);
																$gender=trim($_POST['gender']);
																$age=trim($_POST['age']);
																$contact=trim($_POST['contact']);
																$obj->useredit($name,$address,$pincode,$district,$gender,$age,$contact,$lkey);
															}
														}
															else
                      echo"<script>alert('Phone number should be 10 digit or 12 digit')</script>";
                    }
                    else
                      echo "<script> alert('Please enter numbers for phone number')</script>"; 
                      } 
															else
																echo"<script>alert('enter your contact no')</script>";
														
													}
													 else
		       	echo "<script> alert('Please enter numbers for age')</script>"; 
		       	 } 
													else
														echo"<script>alert('enter your age')</script>";
												}

												else
													echo"<script>alert('enter your gender')</script>";
											
										}
										else
											echo"<script>alert('enter your district')</script>";
									}
									else
		 	echo "<script> alert('pin number contains only 6 characters')</script>";
		}
		else
			echo "<script> alert('Please enter numbers for pincode')</script>";
	}
									else
										echo"<script>alert('enter your pincode')</script>";
								}
								else
									echo"<script>alert('enter your address')</script>";
							}
							else
				echo "<script> alert('Please enter alphabets for name')</script>";	
			}
							else
								echo"<script>alert('enter your name')</script>";
						}
				$smartyObj->display('usersubheader.tpl');
				$smartyObj->display('userprofile.tpl');
				$smartyObj->display('footer.tpl');
}
else
{ 
  Header("location:logintemplate.php");
}
			?>