<?php 
include "../controller/livraisonC.php";


if (isset($_POST['Idlivraison'])){
$livraison1C=new LivraisonC();
$result=$livraison1C->recupererLivraison($_POST["Idlivraison"]);


require('fpdf.php');
$pdf = new FPDF();

$pdf->AddPage();
//$pdf->Image('logo3.png',10,10,30);
$pdf->Ln() ;

$pdf->Ln() ;
$pdf->SetFont('Arial','B',30);

 //Rue Banane , Charguia 2 , 2035 Ariana,Tunis


$pdf->cell(200,20,'Bon de livraison',0,0,'C');
$pdf->Ln() ;

$pdf->SetFont('Arial','B',9);
$pdf->cell(40,10,"Anim shop ",0,0,'C');
$pdf->Ln();
$pdf->cell(65,10,"Adresse: 2035 Ariana Charguia 2 ,Tunis",0,0,'C');
$pdf->Ln();
$pdf->cell(50,10,"Telephone: + 216 26234330",0,0,'C');
 $pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',20);
$pdf->cell(80,20,'Detail de la livraison:',0,0,'C');

$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(35,10,'Id livraison',1,0,'C');
$pdf->cell(35,10,'Prix ',1,0,'C');
$pdf->cell(35,10,'La date',1,0,'C');
$pdf->cell(40,10,'Adresse de Destination',1,0,'C');
$pdf->cell(40,10,'Code postal',1,0,'C');
$pdf->Ln(); 
foreach($result as $row)
{
    $pdf->cell(35,10,$row['Idlivraison'],1,0,'C'); 
	$pdf->cell(35,10,$row['prix'],1,0,'C');
	$pdf->cell(35,10,$row['date'],1,0,'C');
	$pdf->cell(40,10,$row['destinataire'],1,0,'C');
	$pdf->cell(40,10,$row['codepostal'],1,0,'C');
	$pdf->Ln();
	
}	
$pdf->cell(0,10,"Nb:En cas d'annulation de la commande Veuillez nous envoyer un mail:");
$pdf->Ln();
$pdf->cell(50,10,"animshop@gmail.com en presiciant l'identifiant de votre commande");

$pdf->Output();
}
?>