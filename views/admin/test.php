<?php
include "../../config.php";
    require_once '../../model/user.php';
    require_once '../../controller/userC.php';
    include_once '../../controller/reclamationC.php';
    include_once '../../model/reclamation.php';
    
    $userC = new userC();
    $reclamationC = new reclamationC();

    if(isset($_POST['submit'])){
        $user = new user($_POST["id"],$_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["tel"],$_POST["naiss"],$_POST["classe"],$_POST["sexe"],$_POST["mdp"]);
        $b=$userC->ajouterUser($user);  
        header("Location:forms.php");
    }

    if(isset($_POST['updatesubmit'])){
      $user = new user($_POST["id"],$_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["tel"],$_POST["naiss"],$_POST["classe"],$_POST["sexe"],$_POST["mdp"]);
      $b=$userC->updateUser($user,$_POST["idu"]);  
      header("Location:forms.php");
  }
  ?>