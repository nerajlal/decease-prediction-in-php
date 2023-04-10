<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined']) and ($_COOKIE['logined'])==1)
{
$s=$_GET['key'];
$a=$_COOKIE['logkey'];
if(!empty($_POST['submit']))
 {
	
		$a=$_POST['name'];
		$j=$_POST['contact'];
	$k=$_POST['age'];
	$o=$_POST['test'];
	$l=$_POST['date'];
	$m=$_POST['result'];
    // $n=$_POST['val'];
	//$f=$_POST['ads'];
	//$f1=$_POST['nme'];
    //$f2=$_POST['sign'];
   
	require("fpdf/fpdf.php");
	$pdf=new FPDF('P','mm',array(120,120));
	$pdf->AddPage();
	$pdf->SetFont("Arial","b",12);
	$pdf->SetFont("Arial","b",10);
	$pdf->Cell(0,5,"    ",0,1,'C');
	$pdf->Cell(0,5,"    ",0,1,'C');
	$pdf->Cell(0,5,"    ",0,1,'C');

	$pdf->Cell(15,10,"                             ",0,0);
	$pdf->Cell(20,10,"name          ",0,0);
	$pdf->Cell(20,10,"{$a}",0,1);
	$pdf->Cell(15,10,"                             ",0,0);
	$pdf->Cell(20,10,"contact        ",0,0);
	$pdf->Cell(20,10,"{$j}",0,1);
	$pdf->Cell(15,10,"                             ",0,0);
	$pdf->Cell(20,10,"age                ",0,0);
	$pdf->Cell(20,10,"{$k}",0,1);
	$pdf->Cell(15,10,"                             ",0,0);
	$pdf->Cell(20,10,"test            ",0,0);
	$pdf->Cell(20,10,"{$o}",0,1);
    $pdf->Cell(15,10,"                             ",0,0);
	$pdf->Cell(20,10,"date         ",0,0);
	$pdf->Cell(20,10,"{$l}",0,1);
    $pdf->Cell(15,10,"                             ",0,0);
	$pdf->Cell(20,10,"result         ",0,0);
	$pdf->Cell(20,10,"{$m}",0,1);
	/*$pdf->Cell(50,10,"Address         ",1,0);
	$pdf->Cell(50,10,"{$f}",1,1);
	$pdf->Cell(50,10,"Authority Name         ",1,0);
	$pdf->Cell(50,10,"{$f1}",1,1);*/

    // $pdf->Cell(15,10,"                             ",0,0);
	
    // $pdf->Image("{$k}",75,25,35);
   // $pdf->Image("{$k}",85,25,30);
    // $pdf->Image("{$o}",75,80,30);
  // $pdf->Image("{$f2}",65,90,30);
    
	$pdf->output();
}
$dis=$obj->reportgeneration($a,$s);
$smartyObj->assign("data",$dis);
//$dis1=$obj->signpdf($a);
//$smartyObj->assign("v6",$dis1);
$smartyObj->display("labsubheader.tpl");
$smartyObj->display("reportgenerate.tpl");
$smartyObj->display("footer.tpl");
}
else
{
	header("location:logintemplate.php");
}
?>