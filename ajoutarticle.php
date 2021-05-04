<?PHP
include "../model/article.php";
include "../controller/articleA.php";

if (isset($_GET['id_article']) and isset($_GET['titre'])and isset($_GET['Description'])){

$id_article=$_GET['id_article'];
$titre=$_GET['titre'];
$Description=$_GET['Description']; 
if($id_article!= "" && $titre!= "" && $Description!= "")
{

if( ( !(is_numeric($titre)) ) && (is_numeric($id_article)) ){




$article1=new article($_GET['id_article'],$_GET['titre'],$_GET['Description']);

$article1C=new articleA();
$article1C->ajouterarticle($article1);
header('Location: afficherarticle.php');


}}
}

else{
  echo "verifier les champs";
}



?>

