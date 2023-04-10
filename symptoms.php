<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['logkey'];
// echo $d;exit;
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
 if(isset($_POST['symptom1']))
  {
   if(isset($_POST['symptom2']))
   {
   	if(isset($_POST['symptom3']))
   	{
   		if(isset($_POST['symptom4']))
   		{
            if(isset($_POST['symptom5']))
            {
                if(isset($_POST['other']))
                {
                  $symptom1=trim($_POST['symptom1']);
                  $symptom2=trim($_POST['symptom2']);
                  $symptom3=trim($_POST['symptom3']);
                  $symptom4=trim($_POST['symptom4']);
                  $symptom5=trim($_POST['symptom5']);
                  $other=trim($_POST['other']);
                  $s=$obj->predict_disease($symptom1,$symptom2,$symptom3,$symptom4,$symptom5,$other);
                  $smartyObj->assign("disease",$s);
                  //$ss=$obj-> poolSelection( $pop);
                  //$smartyObj("data",$ss);
               }
              
            }
           
         }
   	
   	}
   	
   }
  
}

}$smartyObj->display('usersubheader.tpl');
$smartyObj->display('symptoms.tpl');
$smartyObj->display('footer.tpl');
}
else
{ 
  Header("location:logintemplate.php");
}
?>