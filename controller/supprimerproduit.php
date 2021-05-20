<?php
include "ajouterproduit.php";

$produits = new produitC();

if (isset($_POST['idproduit'])) {
    $produits->supprimerproduit($_POST['idproduit']);
    header('location:../back/produit/ModifierProduit.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['idproduit'];
}
