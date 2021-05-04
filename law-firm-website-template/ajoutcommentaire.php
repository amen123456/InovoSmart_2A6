<?PHP
include "model/commentaire.php";
include "controller/commentaireC.php";

if (isset($_GET['nom']) and isset($_GET['prenom']) and isset($_GET['id_article'])and isset($_GET['id_commentaire'])and isset($_GET['commentaire'])){
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$id_article=$_GET['id_article'];
$id_commentaire=$_GET['id_commentaire'];
$commentaire=$_GET['commentaire'];
if($nom!= "" && $prenom!= "" && $id_article!= "" && $id_commentaire!= "" && $commentaire!= "" )
{

if ( ( is_numeric($id_article) ) && ( is_numeric($id_commentaire) )  ) {
$commentaire1=new commentaire($_GET['nom'],$_GET['prenom'],$_GET['id_article'],$_GET['id_commentaire'],$_GET['commentaire']);



$commentaire1C=new commentaireC();
$commentaire1C->ajoutercommentaire($commentaire1);
header('Location: affichercommentaire.php');
  

}}
}

else{
  echo "verifier les champs";
}



?>