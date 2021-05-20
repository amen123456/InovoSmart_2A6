<?PHP
include "../../model/livraison.php";
include "../../controller/livraisonC.php";

if (isset($_GET['Idlivraison']) and isset($_GET['prix']) and isset($_GET['date']) and isset($_GET['destinataire'])and isset($_GET['codepostal'])){

$prix=$_GET['prix'];
$Idlivraison=$_GET['Idlivraison'];
$date=$_GET['date'];
$destinataire=$_GET['destinataire'];
$codepostal=$_GET['codepostal'];


if($destinataire!= "" && $date!= "" && $Idlivraison!= "" && $prix!= "" && $codepostal!= "" )
{ // si les saisies ne sont pas vides
if ( preg_match ( "#^([0-9]){2}\-([0-9]){2}\-([0-9]){4}$#" , $date ) )
{
if ( preg_match ( "#^([0-9]){2}[a-zA-Z]+\,[a-zA-Z]+$#" , $destinataire ) )
{
if((is_numeric($Idlivraison)) && (is_numeric($prix)) && (is_numeric($codepostal)) && (strlen($Idlivraison)==6 ) ){

$livraison1=new livraison($_GET['Idlivraison'],$_GET['prix'],$_GET['date'],$_GET['destinataire'],$_GET['codepostal']);
$livraison1C=new livraisonC();
$livraison1C->ajouterlivraison($livraison1);
header('Location: afficherlivraison.php');
}else {echo "verifiez l'id ou prix ou code postal";}
}else {echo"verifiez l'adresse";}
}else {echo" veuillez entrez la date sous forme jj-mm-aaaa ";}

}else{echo" les champs sont vides";}
}
else{
  echo "verifier les champs";
}



?>