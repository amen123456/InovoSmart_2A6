<?PHP
include "../../controller/articleA.php";
$articleA=new ArticleA();
if (isset($_POST["id_article"])){
    $articleA->supprimerarticle($_POST["id_article"]);
    header('Location: afficherarticle.php');
}

?>