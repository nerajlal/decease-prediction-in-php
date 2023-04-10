<?php
class userclass
{


public static $uniformRate=0.5;  /* crosssover determine what where to break gene string */
  public static $mutationRate=0.20; /* When choosing which genes to mutate what rate of random values are mutated */
  public static $poolSize=30;  /* When selecting for crossover how large each pool should be */
  public static $max_generation_stagnant=200;
  public static $min_generation_stegnant=687;
  //$mmm2=($poolSize*$max_generation_stagnant)-$min_generation_stegnant;
//  echo $mmm2;exit;
    /*how many unchanged generations before we end */
  public static $elitism=true;
    /* Public methods */
    
    // Convenience random function
 private static function random() {
  return (float)rand()/(float)getrandmax();   /* return number as a decimal */
}



function dregistration($name,$addr,$pincode,$district,$city,$gender,$dob,$spec,$contactno,$email,$password)
{
	$enc=md5($password);
	$lkey=uniquekey("login","logkey"); //assigning value to key variable
	$var="insert into login(logkey,email,password,usertype)values('".$lkey."','".$email."','".$enc."','1')"; //query
	$exe=mysql_query($var); //execution statement
	$key=uniquekey("doctorreg","regkey");
	$lid=keytoid("login","logkey",$lkey);
	$add="insert into doctorreg(regkey,name,address,pincode,district,city,gender,dob,specialization,contactno,loginid)values('".$key."','".$name."','".$addr."','".$pincode."','".$district."','".$city."','".$gender."','".$dob."','".$spec."','".$contactno."','".$lid."')";
	echo $add;exit;
	$inc=mysql_query($add);
	if($inc)
	{
		echo"<script>alert('Registration succesful')</script>";
	}
	else
	{
		echo"<script>alert('Registration Failed!!!!')</script>";
    }
}



	
function uregistration($name,$address,$pincode,$district,$gender,$age,$contact,$email,$password)
{
	$enc=md5($password);
	$lkey=uniquekey("login","logkey");
	$var="insert into login(logkey,email,password,usertype)values('".$lkey."','".$email."','".$enc."','2')";
	$exe=mysql_query($var);
	$key=uniquekey("userreg","userkey");
	$lid=keytoid("login","logkey",$lkey);
	$add="insert into userreg(userkey,name,address,pincode,district,gender,age,contact,loginid)values('".$key."','".$name."','".$address."','".$pincode."','".$district."','".$gender."','".$age."','".$contact."','".$lid."')";
	$inc=mysql_query($add);
	if($inc)
	{
		echo"<script>alert('Registration sucessfull')</script>";
	}
	else
	{
		echo"<script>alert('registration unsuccesfull')</script>";
	}
}
















function login($email,$password)
{
	$enc=md5($password);
	$qry="select * from login where email='".$email."' and password='".$enc."'";
	//echo $qry;exit;
    $inc=mysql_query($qry);
    $key=NULL;
    $c=0;
    while($ary=mysql_fetch_array($inc))
    {
    	$key=$ary['logkey'];
    	//echo $key;exit;
    	$type=$ary['usertype'];
    	$status=$ary['status'];
    	$c+=1;

    }
    if($c>0)
    {
    	setcookie("logkey",$key);
    	setcookie("logined",1);
    	if($type==0)
    	{
    	header("location:adminmainheader.php");
    }
    elseif($type==1 && $status==1)
    {
    	header("location:doctorhome.php");
    }
    // echo "hii";
    elseif($type==2)
    {
    	header("location:usermainheader.php");
    }
    elseif($type==3 && $status==1)
    {
    	header("location:labmainheader.php");
    }
    else
    {
    	echo"<script>alert('invalid user')</script>";
    }
}
    else
    {
    	echo"<script>alert('invalid user')</script>";
    }
}
function docdata($lkey)
{
	$id=keytoid("login","logkey",$lkey);
$qry="select * from doctorreg inner join login on login.id=doctorreg.loginid where doctorreg.loginid='".$id."'";
// echo $qry;exit;
$exe=mysql_query($qry);
$arr=array();
while($ary=mysql_fetch_array($exe))
{
	$arr[]=$ary;
}
return $arr;
}
function edit_data($name,$address,$pincode,$district,$city,$gender,$dob,$spec,$contactno,$lkey)
{
	$id=keytoid("login","logkey",$lkey);
	$qry="update doctorreg set name='".$name."',address='".$address."',pincode='".$pincode."',district='".$district."',city='".$city."',gender='".$gender."',dob='".$dob."',specialization='".$spec."',contactno='".$contactno."' where loginid='".$id."'";
	// echo $qry;exit;
	$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('Updation successfull');window.location.href='docprofile.php';
		</script>";
	}
	else
	{
		echo"<script>alert('Updation unsuccessfull');window.location.href='docprofile.php';
		</script>";
	}
}
function userdata($lkey)
{
	$id=keytoid("login","logkey",$lkey);
	$qry="select * from userreg inner join login on login.id=userreg.loginid where userreg.loginid='".$id."'";
// echo $qry;exit;
	$exe=mysql_query($qry);
	$arr=array();
	while($ary=mysql_fetch_array($exe))
	{
	$arr[]=$ary;
	}
return $arr;
}
function useredit($name,$address,$pincode,$district,$gender,$age,$contact,$lkey)
{
	$id=keytoid("login","logkey",$lkey);
	$qry="update userreg set name='".$name."',address='".$address."',pincode='".$pincode."',district='".$district."',gender='".$gender."',age='".$age."',contact='".$contact."' where loginid='".$id."'";
	//echo $qry;exit;
	$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('Updation successfull');window.location.href='userprofile.php';
		</script>";
	}
	else
	{
		echo"<script>alert('Updation unsuccessfull');window.location.href='userprofile.php';
		</script>";
	}
}
function docdetails()
{
	$qry="select * from doctorreg inner join login on login.id=doctorreg.loginid";
	$inc=mysql_query($qry);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function patientdetails()
{
	$qry="select * from userreg inner join login on login.id=userreg.loginid";
	//echo $qry;exit;
	$inc=mysql_query($qry);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function doctorapprove($a)
{
	$qry="update login set status='1' where id='".$a."'";
	// echo $qry;exit;
	$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('approved');window.location.href='docdetails.php';
		</script>";
	}
	else
	{
		echo"<script>alert('not approved');window.location.href='docdetails.php';
		</script>";
	}
}
function doctorreject($a)
{
	$qry="update login set status='2'where id='".$a."'";
	// echo $qry;exit;
	$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('rejected');window.location.href='docdetails.php';
		</script>";
	}
	else
	{
		echo"<script>alert('rejection failed');window.location.href='docdetails.php';
		</script>";
	}
}

	function consultationdetails($day,$timefrom,$timeto,$consultingfee,$lkey)
{
	$id=keytoid("login","logkey",$lkey);
	$ckey=uniquekey("consultingdetails","consultingkey"); //assigning value to key variable
	$qry="insert into consultingdetails(consultingkey,consultingday,timefrom,timeto,consultingfee,loginid)values('".$ckey."','".$day."','".$timefrom."','".$timeto."','".$consultingfee."','".$id."')"; //query
	// echo $qry;exit;
	$exe=mysql_query($qry); //execution statement
	if($exe)
	{
		echo "<script>alert('details entered succesful')</script>";
	}
	else
	{
		echo"<script>alert('unsuccessfull')</script>";
	}

}
function consultationupdate($day,$timefrom,$timeto,$consultingfee,$lkey)
{
   $id=keytoid("login","logkey",$lkey);
	$qry="update consultingdetails set consultingday='".$day."',timefrom='".$timefrom."',timeto='".$timeto."',consultingfee='".$consultingfee."' where loginid='".$id."'";
	// echo $qry;exit;
	$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('Updation successfull');window.location.href='consultancyedit.php';
		</script>";
	}
	else
	{
		echo"<script>alert('Updation unsuccessfull');window.location.href='consultancyedit.php';
		</script>";
	}
}	
function consultationselect($lkey)
{
	$id=keytoid("login","logkey",$lkey);
	$qry="select * from consultingdetails inner join login on login.id=consultingdetails.loginid where consultingdetails.loginid='".$id."'";
	// echo $qry;exit;
	$inc=mysql_query($qry);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function appointment()
{
	$qry="select doctorreg.name,doctorreg.specialization,doctorreg.district,consultingdetails.timefrom,consultingdetails.timeto,consultingdetails.consultingday,consultingdetails.consultingfee from doctorreg inner join consultingdetails on doctorreg.loginid=consultingdetails.loginid";
	// echo $qry;exit;
	$inc=mysql_query($qry);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function search($name)
{
	$qry="select * from login inner join doctorreg on doctorreg.loginid=login.id inner join consultingdetails on consultingdetails.loginid=doctorreg.loginid where login.status='1' and (doctorreg.name='".$name."' or doctorreg.district='".$name."' or doctorreg.specialization='".$name."')";
	//echo $qry;exit;
	 $inc=mysql_query($qry);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;

}
function booking($date,$time,$symptoms,$dlid,$lkey)
{
	
	$lid=keytoid("login","logkey",$lkey);
	// echo $lid;exit;
	$key=uniquekey("bookingdetails","bookingkey");
	$bdate=date('d-m-y');
	$add="insert into bookingdetails(bookingkey,consultingdate,consultingtime,symptoms,loginid,docloginid,bookingdate)values('".$key."','".$date."','".$time."','".$symptoms."','".$lid."','".$dlid."','".$bdate."')";

	$inc=mysql_query($add);

	$qry="select consultingfee from consultingdetails where loginid='".$dlid."'";
	// echo $qry;exit;
	$exe=mysql_query($qry);
	// echo $exe;exit;

	while($rr=mysql_fetch_array($exe))
	{
		$fee=$rr['consultingfee'];
	}
	
	if($fee!=0)
	{
		echo"<script>alert('Your Consulting Fee is $fee');window.location.href='paymentform.php?pay=$fee&did=$dlid&key=$key';</script>";
	}
	else
	{
		echo"<script>alert('booking Failed!!!!')</script>";
    }
}
function viewbooking($lkey)
{
	$key=keytoid("login","logkey",$lkey);
	// $lkey=keytoid("login","logkey",$key);
	$qry="select * from doctorreg inner join consultingdetails on doctorreg.loginid=consultingdetails.loginid inner join bookingdetails on consultingdetails.loginid=bookingdetails.docloginid where bookingdetails.loginid='".$key."'";
	// echo $qry;exit;
	$inc=mysql_query($qry); 
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function editbooking($dlid)
{
	$key=keytoid("bookingdetails","bookingkey",$dlid);
	$qry="select * from bookingdetails inner join login on login.id=bookingdetails.loginid where bookingdetails.id='".$key."'";
	// echo $qry;exit;
	$inc=mysql_query($qry);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function updatebooking($date,$time,$symptoms,$dlid)
{
	$key=keytoid("bookingdetails","bookingkey",$dlid);
	$qry="update bookingdetails set consultingdate='".$date."',consultingtime='".$time."',symptoms='".$symptoms."' where id='".$key."'";
	$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('update succesful');window.location.href='editbooking.php';</script>";
	}
	else
	{
		echo"<script>alert('update Failed!!!!');window.location.href='editbooking.php';</script>";
    }
}
function deletebooking($key)
{
$id=keytoid("bookingdetails","bookingkey",$key);
$qry="delete from bookingdetails where id='".$id."'";
// echo $qry;exit;
$inc=mysql_query($qry);
if($inc)
{
	echo"<script>alert('deletion successfull');window.location.href='viewbooking.php'</script>";

}	
else
{
	echo"<script> alert('deletion unsucessfull');window.location.href='viewbooking.php'</script>";
}
}
function viewappointment($dlid)
{
	$key=keytoid("login","logkey",$dlid);
	$qry="select * from userreg inner join bookingdetails on userreg.loginid=bookingdetails.loginid where bookingdetails.docloginid='".$key."' and bookingdetails.paymentstatus='1'";
	$inc=mysql_query($qry); 
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function appointmentapprove($key)
{
	$id=keytoid("bookingdetails","bookingkey",$key);
	$qry="update bookingdetails set bookingstatus='1'where id='".$id."'";
	// echo $qry;exit;
	$inc=mysql_query($qry);
	if($inc)
	{
		$r=rand(4,100);
		$qr="update bookingdetails set tokenno='".$r."' where id='".$id."'";
		$exe=mysql_query($qr);
		if($exe)
		{


		echo"<script>alert('approved');window.location.href='appointmentview.php';
		</script>";
		}
		else
		{
			echo"<script>alert('token number not generated');window.location.href='appointmentview.php';
		</script>";
		}
	}
	else
	{
		echo"<script>alert('not approved');window.location.href='appointmentview.php';
		</script>";
	}
}
function rejectappointment($key)
{
	$id=keytoid("bookingdetails","bookingkey",$key);

	$qry="update bookingdetails set bookingstatus='2'where id='".$id."'";
	$inc=mysql_query($qry);
	$qry1="select * from paymentdetails inner join userreg on paymentdetails.loginid=userreg.loginid inner join bookingdetails on bookingdetails.loginid=userreg.loginid inner join bankdetails on bankdetails.contactno=userreg.contact where bookingdetails.id='".$id."'";
  $inc1=mysql_query($qry1);
  $ar=array();
	while($ary=mysql_fetch_array($inc1))
	{
		$ar=$ary['contact'];
		$ar1=$ary['paymentamount'];
		$ar2=$ary['totalamount'];
		$ar3=$ary['name'];
	}
	$new=$ar1+$ar2;
	$qry2="update bankdetails set totalamount='".$new."' where contactno='".$ar."'";
	$inc2=mysql_query($qry2);

	if($inc && $inc1 && $inc2)
	{
		echo"<script>alert('Appointment rejected and $ar1 returned to $ar3 ');window.location.href='appointmentview.php';
		</script>";
	}
	else
	{
		echo"<script>alert('Not Rejected');window.location.href='appointmentview.php';
		</script>";
	}
}

// function payment($number,$name,$expiry,$csvnumber,$lkey,$pay)
// {
// 	$id=keytoid("login","logkey",$lkey);
// 	$ckey=uniquekey("paymentdetails","paykey"); //assigning value to key variable
// 	$qry="insert into paymentdetails(paykey,cardno,nameoncard,expirationdate,csv,loginid)values('".$ckey."','".$number."','".$name."','".$expiry."','".$csvnumber."','".$id."')"; //query
// 	// echo $qry;exit;
// 	$exe=mysql_query($qry); //execution statement
// 	if($exe)
// 	{
// 		echo "<script>alert('details entered succesful')</script>";
// 	}
// 	else
// 	{
// 		echo"<script>alert('unsuccessfull')</script>";
// 	}

//   $q="select totalamount from bankdetails where loginid='".$id."'";
//   $inc=mysql_query($q);
// 	while($ary=mysql_fetch_array($inc))
// 	{
// 		$amount=$ary['totalamount'];
// 	}
// 	$new=$amount-$pay;
// 	$upd="update bankdetails set totalamount='".$new."' where loginid='".$id."'";
// 	$ex=mysql_query($upd);
// 	if($ex)
// 	{
// 		echo "<script>alert('payment succesful')</script>";
// 		// $p="update bookingdetails set paymentstatus='1' where loginid='".$id."'";
// 		// $e=mysql_query($p);
// 	}
// 	else
// 	{
// 		echo "<script>alert('payment unsuccesful')</script>";
// 	}
// }

function payment($number,$name,$expiry,$csvnumber,$lkey,$p,$p1,$p2)
{
	
  $qry="select id,totalamount from bankdetails where cvv='".$csvnumber."' and cardno='".$number."'";
  // echo $qry;exit;
  $inc=mysql_query($qry);
  $ar=array();
	while($ary=mysql_fetch_array($inc))
	{
		$ar=$ary['id'];
		$ar1=$ary['totalamount'];
	}
	if($ar!=null)
	{
		$new=$ar1-$p;
		$id=keytoid("login","logkey",$lkey);
   $ckey=uniquekey("paymentdetails","paykey");
   $qry1="insert into paymentdetails(paykey,cardno,nameoncard,expirationdate,paymentamount,csv,loginid,receiverlid)values('".$ckey."','".$number."','".$name."','".$expiry."','".$p."','".$csvnumber."','".$id."','".$p1."')";
   $exe=mysql_query($qry1);
   $qry2="update bankdetails set totalamount='".$new."' where cvv='".$csvnumber."' and cardno='".$number."'";
   $exe1=mysql_query($qry2);
  $id1=keytoid("bookingdetails","bookingkey",$p2);
   $qry3="update bookingdetails set paymentstatus='1' where id='".$id1."'";
   $exe2=mysql_query($qry3);
   
   if($exe && $exe1 && $exe2)
   {
   	echo"<script>alert('payment successfull');window.location.href='viewbooking.php'</script>";
   }
   else
   {
   	echo"<script> alert('payment unsuccessfull')</script>";
   }

}
else
   	echo"<script> alert('enter valid card number or csv number')</script>";
}
function predict_disease($symptom1,$symptom2,$symptom3,$symptom4,$symptom5,$other)
{

	$qry="select disease from desease_list where (symptom1='".$symptom1."' and symptom2='".$symptom2."' and symptom3='".$symptom3."' and symptom4='".$symptom4."' and symptom5='".$symptom5."') or (symptom1='".$symptom2."' and symptom2='".$symptom1."' and symptom3='".$symptom3."' and symptom4='".$symptom4."' and symptom5='".$symptom5."')or (symptom1='".$symptom3."' and symptom2='".$symptom1."' and symptom3='".$symptom2."' and symptom4='".$symptom4."' and symptom5='".$symptom5."') or (symptom1='".$symptom4."' and symptom2='".$symptom1."' and symptom3='".$symptom2."' and symptom4='".$symptom3."' and symptom5='".$symptom5."')or (symptom1='".$symptom5."' and symptom2='".$symptom2."' and symptom3='".$symptom3."' and symptom4='".$symptom4."' and symptom5='".$symptom1."') or (symptom1='".$symptom4."' and symptom2='".$symptom5."' and symptom3='".$symptom3."' and symptom4='".$symptom1."' and symptom5='".$symptom2."')";
  // echo $qry;exit;
  $inc=mysql_query($qry);
  $ar=null;
	while($ary=mysql_fetch_array($inc))
	{
		$ar=$ary['disease'];
	}
	return $ar;
}
function addprescription($prescription,$key)
{
	$id=keytoid("bookingdetails","bookingkey",$key);
	// $qry="insert into bookingdetails(prescription)values('".$prescription."') where id='".$id."'";
	$qry="update bookingdetails set prescription='".$prescription."' where id='".$id."'";
	$exe=mysql_query($qry);
	if($exe)
	{
	  echo"<script>alert('prescription added')</script>";	
	}
	else
	{
		echo"<script>alert('failed')</script>";
	}
}
function viewprescription($key)
{
	$key=keytoid("bookingdetails","bookingkey",$key);
	$qry="select prescription from bookingdetails where id='".$key."'";
	// echo $qry;exit;
	$inc=mysql_query($qry); 
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function  messagesearch($name)
{
	$qry="select * from login inner join doctorreg on doctorreg.loginid=login.id inner join consultingdetails on consultingdetails.loginid=doctorreg.loginid where login.status='1' and (doctorreg.name='".$name."' or doctorreg.district='".$name."' or doctorreg.specialization='".$name."')";
	//echo $qry;exit;
	 $inc=mysql_query($qry);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;

}
function sendmessage($message,$lid,$rid)
{
	date_default_timezone_set("Asia/Calcutta");

	$key=uniquekey("message","msgkey");
	$id=keytoid("login","logkey",$lid);
	$date=date('Y-m-d');
	$time=date("h:i:sa");
	// echo $time;exit;
	$qry="insert into message(msgkey,message,senderid,receiverid,currentdate,currenttime)values('".$key."','".$message."','".$id."','".$rid."','".$date."','".$time."')";
	$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('Message sent');window.location.href='outbox.php'</script>";
	}
	else
	{
		echo"<script>alert('Message not sent')</script>";
	}
}
function receivemessage($lid)
{
	$id=keytoid("login","logkey",$lid);
	$qry="select * from message inner join userreg on userreg.loginid=message.senderid where message.receiverid='".$id."'";
	$inc=mysql_query($qry);
	$qry1="update message set viewstatus='1' where receiverid='".$id."'";
	$inc1=mysql_query($qry1);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function replymessage($message,$lid,$rid)
{
	date_default_timezone_set("Asia/Calcutta");

	$key=uniquekey("message","msgkey");
	$id=keytoid("login","logkey",$lid);
	$date=date('Y-m-d');
	$time=date("h:i:sa");
	// echo $time;exit;
	$qry="insert into message(msgkey,message,senderid,receiverid,currentdate,currenttime)values('".$key."','".$message."','".$id."','".$rid."','".$date."','".$time."')";
	$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('message sent');window.location.href='docoutbox.php'</script>";
	}
	else
	{
		echo"<script>alert('message not sent');window.location.href='docoutbox.php'</script>";
	}
}
function inbox($lid)
{
	$id=keytoid("login","logkey",$lid);
	$qry="select * from message inner join doctorreg on doctorreg.loginid=message.senderid where message.receiverid='".$id."'";
	$inc=mysql_query($qry);
	$qry1="update message set viewstatus='1' where receiverid='".$id."'";
	$inc1=mysql_query($qry1);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
	public function result()
	{
		 $fitness = 0;
   $sol_count=count(fitnesscalc::$solution);  /* get array size */
   
      // Loop through our individuals and compare them to our candidates
      for ($i=0; $i < $individual->size() && $i < $sol_count; $i++ )
  {
    $char_diff=0;
    //compare genes and note the difference using ASCII value vs. solution Ascii value note the difference
          $char_diff=abs( ord($individual->getGene($i)) - ord(fitnesscalc::$solution[$i]) ) ; 
    $fitness+=$char_diff; // low fitness values are better,
      }
	
	}



	    public static function evolvePopulation( $pop) {
       $newPopulation = new population($pop->size(), false);
    
        // Keep our best individual
        if (algorithm::$elitism) {
            $newPopulation->saveIndividual(0, $pop->getFittest());
      }
        // Crossover population
        $elitismOffset=0;
        if (algorithm::$elitism) {
            $elitismOffset = 1;
        } else {
            $elitismOffset = 0;
        }
    
        // Loop over the population size and create new individuals with
        // crossover
  
        for ($i = $elitismOffset; $i < $pop->size(); $i++) 
    {   
            $indiv1 = algorithm::poolSelection($pop);
            $indiv2 = algorithm::poolSelection($pop);
            $newIndiv =  algorithm::crossover($indiv1, $indiv2);
            $newPopulation->saveIndividual($i, $newIndiv);
        }
        // Mutate population
  
        for ($i=$elitismOffset; $i < $newPopulation->size(); $i++) {
            algorithm::mutate($newPopulation->getIndividual($i));
        }
  
        return $newPopulation;
    }
    // Crossover individuals (aka reproduction)
    private static function  crossover($indiv1, $indiv2) 
   {
       $newSol = new individual();  //create a offspring
        // Loop through genes
        for ($i=0; $i < $indiv1->size(); $i++) {
            // Crossover at which point 0..1 , .50 50% of time
            if (  algorithm::random() <= algorithm::$uniformRate)
      {
                $newSol->setGene($i, $indiv1->getGene($i) );
            } else {
                $newSol->setGene($i, $indiv2->getGene($i));
            }
        }
        return $newSol;
    }
    // Mutate an individual
    private static function mutate( $indiv) {
        // Loop through genes
        for ($i=0; $i < $indiv->size(); $i++) {
            if (  algorithm::random() <= algorithm::$mutationRate) {
                $gene = individual::$characters[rand(0, strlen(individual::$characters) - 1)];    // Create random gene
                $indiv->setGene($i, $gene); //substitute the gene into the individual
            }
        }
    }
    // Select a pool of individuals for crossover
    public static function poolSelection($pop) {
        // Create a pool population
        $pool = new population(algorithm::$poolSize, false);
  
     for ($i=0; $i < algorithm::$poolSize; $i++) {
       $randomId = rand(0, $pop->size()-1 ); //Get a random individual from anywhere in the population
      $pool->saveIndividual($i, $pop->getIndividual( $randomId));
        }
        // Get the fittest
        $fittest = $pool->getFittest();
        return $fittest;
    }
function useroutbox($lid)
{
	$id=keytoid("login","logkey",$lid);
	$qry="select * from message inner join doctorreg on doctorreg.loginid=message.receiverid where message.senderid='".$id."'";
	$inc=mysql_query($qry);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function docoutbox($lid)
{
	$id=keytoid("login","logkey",$lid);
	$qry="select * from message inner join userreg on userreg.loginid=message.receiverid where message.senderid='".$id."'";
	$inc=mysql_query($qry);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function userviewmsg($key)
{
	$id=keytoid("message","msgkey",$key);
	$qry="select * from message where id='".$id."'";
	$inc=mysql_query($qry);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function usereditmsg($message,$key)
{
	$id=keytoid("message","msgkey",$key);
	$qry="update message set message='".$message."' where id='".$id."'";
	$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('message sent');window.location.href='outbox.php'</script>";
	}
	else
	{
		echo"<script>alert('message not sent');window.location.href='outbox.php'</script>";
	}

}
function userdeletemessage($key)
{
	$id=keytoid("message","msgkey",$key);
	$qry="delete from message where id='".$id."'";
	$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('message deleted');window.location.href='outbox.php'</script>";
	}
	else
	{
		echo"<script>alert('message not deleted');window.location.href='outbox.php'</script>";
	}
}
function doceditmsg($message,$key)
{
	$id=keytoid("message","msgkey",$key);
	$qry="update message set message='".$message."' where id='".$id."'";
	$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('message sent');window.location.href='docoutbox.php'</script>";
	}
	else
	{
		echo"<script>alert('message not sent');window.location.href='docoutbox.php'</script>";
	}

}
function docdeletemsg($key)
{
	$id=keytoid("message","msgkey",$key);
	$qry="delete from message where id='".$id."'";
	$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('message deleted');window.location.href='docoutbox.php'</script>";
	}
	else
	{
		echo"<script>alert('message not deleted');window.location.href='docoutbox.php'</script>";
	}
}
function labregistration($name,$addr,$pincode,$district,$city,$contactno,$days,$timefrom,$timeto,$email,$password)
{
	$enc=md5($password);
	$lkey=uniquekey("login","logkey"); //assigning value to key variable
	$var="insert into login(logkey,email,password,usertype)values('".$lkey."','".$email."','".$enc."','3')"; //query
	$exe=mysql_query($var); //execution statement
	$key=uniquekey("labreg","labkey");
	$lid=keytoid("login","logkey",$lkey);
	$add="insert into labreg(labkey,labname,address,pincode,district,city,contactno,days,timefrom,timeto,loginid)values('".$key."','".$name."','".$addr."','".$pincode."','".$district."','".$city."','".$contactno."','".$days."','".$timefrom."','".$timeto."','".$lid."')";
		$inc=mysql_query($add);
	if($inc)
	{
		echo"<script>alert('Registration succesful')</script>";
	}
	else
	{
		echo"<script>alert('Registration Failed!!!!')</script>";
    }
}
function labdetailsadmin()
{
	$qry="select * from labreg inner join login on login.id=labreg.loginid";
	$inc=mysql_query($qry);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function labapprove($a)
{
	$qry="update login set status='1'where id='".$a."'";
	$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('approved');window.location.href='labdetailsadmin.php';
		</script>";
	}
	else
	{
		echo"<script>alert('not approved');window.location.href='labdetailsadmin.php';
		</script>";
	}
}
function labreject($a)
{
	$qry="update login set status='2'where id='".$a."'";
	$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('rejected');window.location.href='labdetailsadmin.php';
		</script>";
	}
	else
	{
		echo"<script>alert('rejection failed');window.location.href='labdetailsadmin.php';
		</script>";
	}
}
function labdetails($lid)
{
	$id=keytoid("login","logkey",$lid);
	$qry="select * from labreg where loginid='".$id."'";
	$inc=mysql_query($qry);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function labedit($name,$address,$pincode,$district,$city,$contactno,$lid)
{
	$id=keytoid("login","logkey",$lid);
	$qry="update labreg set labname='".$name."',address='".$address."',pincode='".$pincode."',district='".$district."',city='".$city."',contactno='".$contactno."' where loginid='".$id."'";
		$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('Updation successfull');window.location.href='labprofile.php';
		</script>";
	}
	else
	{
		echo"<script>alert('Updation unsuccessfull');window.location.href='labprofile.php';
		</script>";
	}
}
function labsearch($name)
{
	$qry="select * from login inner join labreg on labreg.loginid=login.id where login.status='1' and (labreg.labname='".$name."' or labreg.district='".$name."' or labreg.city='".$name."')";
	 $inc=mysql_query($qry);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;

}
function labbooking($date,$time,$test,$lid,$lkey)
{
	
	$id=keytoid("login","logkey",$lkey);
	$key=uniquekey("labappointment","labkey");
	$bdate=date('d-m-y');
	$add="insert into labappointment(labkey,consultingdate,consultingtime,testname,labloginid,patientloginid,bookingdate)values('".$key."','".$date."','".$time."','".$test."','".$lid."','".$id."','".$bdate."')";
	$inc=mysql_query($add);
	// $last=last_insert_id($add);
	// echo $last;exit;
	// $qry2="select id from labappointment where id=(select last_insert_id($add))";
	// echo $qry2;exit;
	$qry="select testamount from testdetails where id='".$test."'";
	// echo $qry;exit;
	$exe=mysql_query($qry);
	// echo $exe;exit;

	while($rr=mysql_fetch_array($exe))
	{
		$fee=$rr['testamount'];
	}
	
	if($fee!=0)
	{
		echo"<script>alert('Your Consulting Fee is $fee');window.location.href='labpaymentform.php?pay=$fee&labid=$lid&key=$key';</script>";
	}
	else
	{
		echo"<script>alert('booking Failed!!!!')</script>";
	}
}
function viewlabbooking($lkey)
{
	$key=keytoid("login","logkey",$lkey);
	$qry="select * from labreg inner join labappointment on labreg.loginid=labappointment.labloginid inner join testdetails on testdetails.id=labappointment.testname where labappointment.patientloginid='".$key."'";
	$inc=mysql_query($qry); 
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function editlabbooking($lid)
{
	$key=keytoid("labappointment","labkey",$lid);
	$qry="select * from labappointment inner join login on login.id=labappointment.labloginid where labappointment.id='".$key."'";
	$inc=mysql_query($qry);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function updatelabbooking($date,$time,$name,$lid)
{
	$key=keytoid("labappointment","labkey",$lid);
	$qry="update labappointment set consultingdate='".$date."',consultingtime='".$time."',testname='".$name."' where id='".$key."'";
	$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('update succesful');window.location.href='viewlabbooking.php';</script>";
	}
	else
	{
		echo"<script>alert('update Failed!!!!');window.location.href='viewlabbooking.php';</script>";
    }
}
function deletelabbooking($key)
{
$id=keytoid("labappointment","labkey",$key);
$qry="delete from labappointment where id='".$id."'";
$inc=mysql_query($qry);
if($inc)
{
	echo"<script>alert('deletion successfull');window.location.href='viewlabbooking.php'</script>";

}	
else
{
	echo"<script> alert('deletion unsucessfull');window.location.href='viewlabbooking.php'</script>";
}
}
function labviewappointment($lid)
{
	$key=keytoid("login","logkey",$lid);
	$qry="select * from userreg inner join labappointment on userreg.loginid=labappointment.patientloginid inner join testdetails on testdetails.id=labappointment.testname where labappointment.labloginid='".$key."' and labappointment.paymentstatus='1'";
	// echo $qry;exit;
	// $qry="select * from userreg inner join labappointment on labappointment.patientloginid=userreg.loginid inner join testdetails on testdetails.id=labappointment.testname inner join paymentdetails on paymentdetails.receiverlid=testdetails.labloginid  where labappointment.labloginid='".$key."' and (paymentdetails.paymentstatus='1')";
	// echo $qry;exit;
	$inc=mysql_query($qry); 
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function labappointmentapprove($key)
{
	$id=keytoid("labappointment","labkey",$key);
	$qry="update labappointment set labbookingstatus='1'where id='".$id."'";
	// echo $qry;exit;
	$inc=mysql_query($qry);
	if($inc)
	{
		// $r=rand(4,100);
		// $qr="update bookingdetails set tokenno='".$r."' where id='".$id."'";
		// $exe=mysql_query($qr);
		// if($exe)
		// {


		echo"<script>alert('approved');window.location.href='labappointmentview.php';
		</script>";
		}
		// else
		// {
		// 	echo"<script>alert('token number not generated');window.location.href='appointmentview.php';
		// </script>";
		// }
	// }
	else
	{
		echo"<script>alert('not approved');window.location.href='labappointmentview.php';
		</script>";
	}
}
function labrejectappointment($key,$lid)
{
	$id=keytoid("labappointment","labkey",$key);
	$id1=keytoid("login","logkey",$lid);

	$qry="update labappointment set labbookingstatus='2'where id='".$id."'";
	// echo $qry;exit;
	$inc=mysql_query($qry);
	$qry1="select * from paymentdetails inner join userreg on paymentdetails.loginid=userreg.loginid inner join labappointment on labappointment.patientloginid=userreg.loginid inner join bankdetails on bankdetails.contactno=userreg.contact where labappointment.id='".$id."' and paymentdetails.receiverlid='".$id1."' and labappointment.paymentstatus='1'";
  // echo $qry1;exit;
  $inc1=mysql_query($qry1);
  $ar=array();
	while($ary=mysql_fetch_array($inc1))
	{
		$ar=$ary['contact'];
		$ar1=$ary['paymentamount'];
		$ar2=$ary['totalamount'];
		$ar3=$ary['name'];
	}
	// echo $ar1;exit;
	$new=$ar1+$ar2;
	$qry2="update bankdetails set totalamount='".$new."' where contactno='".$ar."'";
	$inc2=mysql_query($qry2);

	if($inc)
	{
		echo"<script>alert('Appointment rejected and Rs.$ar1 returned to $ar3');window.location.href='labappointmentview.php';
		</script>";
	}
	else
	{
		echo"<script>alert('Not Rejected');window.location.href='labappointmentview.php';
		</script>";
	}
}
function addlabreport($file=NULL,$key1)
{
	$id=keytoid("labappointment","labkey",$key1);


	$qry1="select * from userreg inner join labappointment on labappointment.patientloginid=userreg.loginid where labappointment.id='".$id."'";
  // echo $qry1;exit;
  $inc1=mysql_query($qry1);
  $ar=null;
  $ar3=null;
	while($ary=mysql_fetch_array($inc1))
	{
		$ar=$ary['contact'];
		
		$ar3=$ary['name'];
	}



	$qry="update labappointment set report='".$file['name']."' where id='".$id."'";
	// echo $qry;exit;
	$exe=mysql_query($qry);
	$var="uploads/".$key1;
	if($exe)
	{
		mkdir($var);
		move_uploaded_file($file["tmp_name"],$var."/".$file["name"]);



		$fields = array(
    "message" => "Dear '".$ar3."', Your test report has been sended. Please download it from your panel.",
    "language" => "english",
    "route" => "q",
    "numbers" => $ar,
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: hcYvBUmF4O50C9nuN1fSZVjWwMeErsIgDkb2otHd86zyQLplxXjF6BDINgZd51bLukcMixlrtHpSXvGY",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);


// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }









	  echo"<script>alert('report added');
	  window.location.href='labappointmentview.php';
	  </script>";	
	}
	else
	{
		echo"<script>alert('failed')</script>";
	}
}
function viewlabreport($key)
{
	// echo $key;exit;
	$id=keytoid("labappointment","labkey",$key);
	$qry="select * from labappointment where id='".$id."'";
	// echo $qry;exit;
	$inc=mysql_query($qry); 
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
	
		$path="uploads/".$ary['labkey']."/".$ary['report'];
		// echo $path;exit;
		$ary['path']=$path;
		$arr[]=$ary;
	}
	return $arr;
}
function reports($lid)
{
	$id=keytoid("login","logkey",$lid);
	$qry="select * from labappointment inner join userreg on userreg.loginid=labappointment.patientloginid where labloginid='".$id."'";
	// echo $qry;exit;
	$inc=mysql_query($qry); 
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
	
		$arr[]=$ary;
	}
	return $arr;
}
function editreport($file=NULL,$key1)
{
	$id=keytoid("labappointment","labkey",$key1);
	$qry="update labappointment set report='".$file['name']."' where id='".$id."'";
	// echo $qry;exit;
	$exe=mysql_query($qry);
	$var="uploads/".$key1;
	if($exe)
	{
		mkdir($var);
		move_uploaded_file($file["tmp_name"],$var."/".$file["name"]);
	  echo"<script>alert('report added');
	  window.location.href='reports.php';
	  </script>";	
	}
	else
	{
		echo"<script>alert('failed')</script>";
	}
}
function editviewreport($key1)
{
	$id=keytoid("labappointment","labkey",$key1);
	$qry="select * from labappointment where id='".$id."'";
	// echo $qry;exit;
	$inc=mysql_query($qry); 
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
	
		$arr[]=$ary;
	}
	return $arr;
}
function deletereport($key1)
{
$id=keytoid("labappointment","labkey",$key1);
$qry="update labappointment set report=null where id='".$id."'";
// echo $qry;exit;
$inc=mysql_query($qry);
if($inc)
{
	echo"<script>alert('Deletion successfull');window.location.href='reports.php'</script>";

}	
else
{
	echo"<script> alert('Deletion unsucessfull');window.location.href='reports.php'</script>";
}
}
function testdetails($test,$amount,$key1)
{
	$key=uniquekey("testdetails","testkey");
	$id=keytoid("login","logkey",$key1);
	$add="insert into testdetails(testkey,testname,testamount,labloginid)values('".$key."','".$test."','".$amount."','".$id."')";
	// echo $add;exit;
	$inc=mysql_query($add);
	if($inc)
	{
		echo"<script>alert('test details added sucessfully');window.location.href='testamount.php'</script>";
	}
	else
	{
		echo"<script>alert('failed');window.location.href='testamount.php'</script>";
	}
}
function testselect($lid)
{
	// $id=keytoid("login","testkey",$lid);
	$qry="select * from testdetails where labloginid='".$lid."'";
	// echo $qry;exit;
	$inc=mysql_query($qry); 
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
	
		$arr[]=$ary;
	}
	return $arr;
}
function labpayment($number,$name,$expiry,$csvnumber,$lkey,$p,$p1,$p2)
{
	// $p=$pay[];
	
  $qry="select id,totalamount from bankdetails where cvv='".$csvnumber."' and cardno='".$number."'";
  // echo $qry;exit;
  $inc=mysql_query($qry);
  $ar=array();
	while($ary=mysql_fetch_array($inc))
	{
		$ar=$ary['id'];
		$ar1=$ary['totalamount'];
	}
	if($ar!=null)
	{
		$new=$ar1-$p;
		$id=keytoid("login","logkey",$lkey);
   $ckey=uniquekey("paymentdetails","paykey");
   $qry1="insert into paymentdetails(paykey,cardno,nameoncard,expirationdate,paymentamount,csv,loginid,receiverlid)values('".$ckey."','".$number."','".$name."','".$expiry."','".$p."','".$csvnumber."','".$id."','".$p1."')";
   // echo $qry1;exit;
   $exe=mysql_query($qry1);
   $qry2="update bankdetails set totalamount='".$new."' where cvv='".$csvnumber."' and cardno='".$number."'";
   $exe1=mysql_query($qry2);
  // $id1=keytoid("paymentdetails","paykey",$ckey);
   $id1=keytoid("labappointment","labkey",$p2);
   $qry3="update labappointment set paymentstatus='1' where id='".$id1."'";
   // $qry3="update labappointment set paystatus='1' where id='".$id1."'";
   $exe2=mysql_query($qry3);
   
   if($exe && $exe1 && $exe2)
   {
   	echo"<script>alert('payment successfull');window.location.href='viewlabbooking.php'</script>";
   }
   else
   {
   	echo"<script> alert('payment unsuccessfull')</script>";
   }

}
else
   	echo"<script> alert('enter valid card number or csv number')</script>";
}
function reportgeneration($a,$s)
{
	$key=keytoid("login","logkey",$a);
	$key1=keytoid("labappointment","labkey",$s);
	$qry="select * from userreg inner join labappointment on userreg.loginid=labappointment.patientloginid inner join testdetails on testdetails.id=labappointment.testname where labappointment.labloginid='".$key."' and labappointment.paymentstatus='1' and labappointment.id='".$key1."'";
	// echo $qry;exit;
	$inc=mysql_query($qry); 
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function docselect()
{
	// $key=keytoid("login","logkey",$a);
	// $key1=keytoid("labappointment","labkey",$s);
	$qry="select * from doctorreg inner join login on login.id=doctorreg.loginid where login.status='1'";
	// echo $qry;exit;
	$inc=mysql_query($qry); 
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function complaint($lid,$doctor,$complaint)
{
	$key=uniquekey("complaint","ckey");
	$id=keytoid("login","logkey",$lid);
	$date=date('Y-m-d');
	$add="insert into complaint(ckey,doctorlid,complaint,userid,complaintdate)values('".$key."','".$doctor."','".$complaint."','".$id."','".$date."')";
	// echo $add;exit;
	$inc=mysql_query($add);
	if($inc)
	{
		echo"<script>alert('complaint added sucessfully');window.location.href='viewcomplaint.php'</script>";
	}
	else
	{
		echo"<script>alert('failed');window.location.href='viewcomplaint.php'</script>";
	}
}
function complaintview($lid)
{
	$id=keytoid("login","logkey",$lid);
	// $key1=keytoid("labappointment","labkey",$s);
	$qry="select * from complaint inner join doctorreg on doctorreg.loginid=complaint.doctorlid where complaint.userid='".$id."'";
	// echo $qry;exit;
	$inc=mysql_query($qry); 
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function editcomplaint($lid,$doctor,$complaint,$key)
{
	$id=keytoid("login","logkey",$lid);
	$id1=keytoid("complaint","ckey",$key);
	$date=date('Y-m-d');
	$qry="update complaint set doctorlid='".$doctor."',complaint='".$complaint."',userid='".$id."',complaintdate='".$date."' where id='".$id1."'";
	// echo $qry;exit;
	$inc=mysql_query($qry);
	if($inc)
	{
		echo"<script>alert('Updation successfull');window.location.href='viewcomplaint.php';
		</script>";
	}
	else
	{
		echo"<script>alert('Updation unsuccessfull');window.location.href='viewcomplaint.php';
		</script>";
	}
}
function selectcomplaint($key)
{
	$id=keytoid("complaint","ckey",$key);
	// $key1=keytoid("labappointment","labkey",$s);
	$qry="select * from complaint where id='".$id."'";
	// echo $qry;exit;
	$inc=mysql_query($qry); 
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
function deletecomplaint($key)
{
$id=keytoid("complaint","ckey",$key);
$qry="delete from complaint where id='".$id."'";
// echo $qry;exit;
$inc=mysql_query($qry);
if($inc)
{
	echo"<script>alert('deletion successfull');window.location.href='viewcomplaint.php'</script>";

}	
else
{
	echo"<script> alert('deletion unsucessfull');window.location.href='viewcomplaint.php'</script>";
}
}
function admincomplaint()
{
	$qry="select * from complaint inner join doctorreg on doctorreg.loginid=complaint.doctorlid";
	//echo $qry;exit;
	$inc=mysql_query($qry);
	$arr=array();
	while($ary=mysql_fetch_array($inc))
	{
		$arr[]=$ary;
	}
	return $arr;
}
}
?>