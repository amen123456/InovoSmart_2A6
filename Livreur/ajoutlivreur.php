<?PHP
include "../model/livreur.php";
include "../controller/livreurC.php";

if (isset($_GET['Idlivreur']) and isset($_GET['Idlivraison']) and isset($_GET['nom']) and isset($_GET['prenom'])and isset($_GET['email'])){
$email= $_GET['email'] ;
$Idlivreur=$_GET['Idlivreur'];
$Idlivraison=$_GET['Idlivraison'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
if($email!= "" && $Idlivreur!= "" && $Idlivraison!= "" && $nom!= "" && $prenom!= "")
{ // si les saisies ne sont pas vides
if ( preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ " , $email ) )
{
if((!(is_numeric($nom))) && (!(is_numeric($prenom))) && (is_numeric($Idlivraison)) && (is_numeric($Idlivreur)) && (strlen($Idlivreur)==6) ){
$livreur1=new livreur($_GET['Idlivreur'],$_GET['Idlivraison'],$_GET['nom'],$_GET['prenom'],$_GET['email']);

$livreur1C=new livreurC();
$livreur1C->ajouterlivreur($livreur1);
header('Location: afficherlivreur.php');  
} else{ echo "respecter le formulaire" ;}
} else {echo "L'adresse eMail est pas valide";}
}else {echo" les champs sont vides";}
} 
else{
  echo "verifier les champs";
}



?>