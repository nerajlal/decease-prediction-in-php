<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj = new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key1=$_COOKIE['logkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['test'])AND($_POST['test'])!= NULL)
  {
   if(isset($_POST['amount'])AND($_POST['amount'])!=NULL)
 //     {
 //     	if(isset($_POST['amount3'])AND($_POST['amount3'])!=NULL)
 //     	{
 //     		if(isset($_POST['amount4'])AND($_POST['amount4'])!=NULL)
 //     		{
 //         if(isset($_POST['amount5'])AND($_POST['amount5'])!=NULL)
 //         {
 //         	if(isset($_POST['amount6'])AND($_POST['amount6'])!=NULL)
 //         	{
 //         		if(isset($_POST['amount7'])AND($_POST['amount7'])!=NULL)
 //         		{
 //         			if(isset($_POST['amount8'])AND($_POST['amount8'])!=NULL)
 //         			{
 // if(isset($_POST['test1'])AND($_POST['test1'])!= NULL)
 //  {
 //   if(isset($_POST['test2'])AND($_POST['test2'])!=NULL)
 //     {
 //     	if(isset($_POST['test3'])AND($_POST['test3'])!=NULL)
 //     	{
 //     		if(isset($_POST['test4'])AND($_POST['test4'])!=NULL)
 //     		{
 //         if(isset($_POST['test5'])AND($_POST['test5'])!=NULL)
 //         {
 //         	if(isset($_POST['test6'])AND($_POST['test6'])!=NULL)
 //         	{
 //         		if(isset($_POST['test7'])AND($_POST['test7'])!=NULL)
 //         		{
 //         			if(isset($_POST['test8'])AND($_POST['test8'])!=NULL)
         			{
         				$test=trim($_POST['test']);
         					$amount=trim($_POST['amount']);
         					// $amount3=trim($_POST['amount3']);
         					// $amount4=trim($_POST['amount4']);
         					// $amount5=trim($_POST['amount5']);
         					// $amount6=trim($_POST['amount6']);
         					// $amount7=trim($_POST['amount7']);
         					// $amount8=trim($_POST['amount8']);
         				 //  $test1=trim($_POST['test1']);
         					// $test2=trim($_POST['test2']);
         					// $test3=trim($_POST['test3']);
         					// $test4=trim($_POST['test4']);
         					// $test5=trim($_POST['test5']);
         					// $test6=trim($_POST['test6']);
         					// $test7=trim($_POST['test7']);
         					// $test8=trim($_POST['test8']);
         					$obj->testdetails($test,$amount,$key1);
         			}
         			else
		           	echo"<script>alert('amount feild is empty')</script>";
		         }
		         else
		         	echo"<script>alert('Test feild is empty')</script>";
	// 	       }
	// 	       else
	// 	       	echo"<script>alert('Test6 feild is empty')</script>";
	// 	     }
	// 	     else
	// 	     	echo"<script>alert('Test5 feild is empty')</script>";
	// 	   }
	// 	   else
	// 	   	echo"<script>alert('Test4 feild is empty')</script>";
	// 	 }
	// 	 else
	// 	 	echo"<script>alert('Test3 feild is empty')</script>";
	// 	}
	// 	else
	// 		echo"<script>alert('Test2 feild is empty')</script>";
	// }
	// else
	// 	echo"<script>alert('Test1 feild is empty')</script>";
	// }
 //         			else
	// 	           	echo"<script>alert('amount8 feild is empty')</script>";
	// 	         }
	// 	         else
	// 	         	echo"<script>alert('amount7 feild is empty')</script>";
	// 	       }
	// 	       else
	// 	       	echo"<script>alert('amount6 feild is empty')</script>";
	// 	     }
	// 	     else
	// 	     	echo"<script>alert('amount5 feild is empty')</script>";
	// 	   }
	// 	   else
	// 	   	echo"<script>alert('amount4 feild is empty')</script>";
	// 	 }
	// 	 else
	// 	 	echo"<script>alert('amount3 feild is empty')</script>";
	// 	}
	// 	else
	// 		echo"<script>alert('amount2 feild is empty')</script>";
	// }
	// else
	// 	echo"<script>alert('amount1 feild is empty')</script>";
}
$smartyObj->display('labsubheader.tpl');
$smartyObj->display('testamount.tpl');
$smartyObj->display('footer.tpl');
}
else
{ 
  Header("location:logintemplate.php");
}
?> 