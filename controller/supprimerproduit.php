<?php
include "ajouterproduit.php";

$produits = new produitC();

if (isset($_POST['idproduit'])) {
    $produits->supprimerproduit($_POST['idproduit']);
    header('location:../views/Back/ModifierProduit.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['idproduit'];
}
