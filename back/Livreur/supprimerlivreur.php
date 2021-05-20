<?PHP
include "../controller/livreurC.php";
$livreurC=new LivreurC();
if (isset($_POST["Idlivreur"])){
    $livreurC->supprimerLivreur($_POST["Idlivreur"]);
    header('Location: afficherlivreur.php');
}

?>