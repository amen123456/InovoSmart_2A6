<?php
include "ajoutercategorie.php";

$categories = new categorieC();

if (isset($_POST['idcategorie'])) {
    $categories->supprimercategorie($_POST['idcategorie']);
    header('location:../back/produit/ModifierCategorie.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['idcategorie'];
}
