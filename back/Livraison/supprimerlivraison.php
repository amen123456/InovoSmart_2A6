<?PHP
include "../../controller/livraisonC.php";
$livraisonC=new LivraisonC();
if (isset($_POST["Idlivraison"])){
    $livraisonC->supprimerLivraison($_POST["Idlivraison"]);
    header('Location: afficherlivraison.php');
}

?>