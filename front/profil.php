<?php
include "../config.php";
include_once '../model/user.php';
include_once '../controller/userC.php';


// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e'])){
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location: connexion.php');
}

   $userC = new userC();
   $listeU=$userC->afficherUserWithID($_SESSION['e']);

   
   foreach($listeU as $row){
        $image=$row['pic'];
        $id=$row['id'];
   }


   if(isset($_POST['save'])){
    $user = new user($_POST["id2"],$_POST["prenom"],$_POST["nom"],$_POST["email"],$_POST["tel"],$_POST["naiss"],$_POST["classe"],$_POST["sexe"],$_POST["mdp"]);
    $b=$userC->updateUser($user,$_POST["id2"]);  
   header('Location: profil.php');
   }




   
//if ($_SERVER['REQUEST_METHOD']=="POST")
//{
    if(isset($_POST['tt'])){
        
        
    $filename=$_FILES['file']['name'];
    if(isset($_FILES['file']['name'])&& $_FILES['file']['name']!="")
    {
    //    $filename="/uploads/".$_FILES['file']['name'];
     //   move_uploaded_file($f_FILES['file']['tmp_name'], "uploads/".$filename);

   // if(file_exists($filename))
        $userC->ajouterpic($filename,$id);

header("Location:profil.php");


}else
{ echo"<div style='text-align:center;font-size:12px;color:white;background-color:grey'> <br> ";
  echo "<br> the following errors occured: <br> <br>";
  echo " pls add a valid image";
  echo "</div>";
}





}




  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Anim shop </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html">
                            <h1>Anim shop</h1>
                            <!-- <img src="../img/logo.jpg" alt="Logo"> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="top-bar-right">
                            <div class="text">
                                <h2>8:00 - 20:00</h2>
                                <p>de lundi a vendredi </p>
                            </div>
                            <div class="text">
                                <h2>+216 456 7890</h2>
                                <p>Appelez-nous pour plus d'infos</p>
                            </div>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                    <a href="register.php" class="nav-item nav-link">Inscription</a>
                        <a href="connexion.php" class="nav-item nav-link">Connexion</a>
                        
                        <a href="eventetoffre/afficherEvents.php" class="nav-item nav-link">Events</a>
                        <a href="eventetoffre/afficherOffre.php" class="nav-item nav-link">Offre</a>
                        <a href="article/article.php" class="nav-item nav-link">Blog</a>
                        <a href="produit.php" class="nav-item nav-link">Produit</a>
                        <a href="categorie.php" class="nav-item nav-link">Categorie</a>

                        <a href="deconnexion.php" class="nav-item nav-link">Deconnexion</a>
                        



                    </div>
                    
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

<main id="main">

    <!-- ======= About Section ======= -->


    <!-- ======= Clients Section ======= -->


    <!-- ======= Features Section ======= -->

    <section>
        <div class="container bootstrap snippet">
            <div class="row">
                <div class="col-sm-3"><!--left col-->
                    <div class="text-center">
                       <span style="font-size: 13px;"> 
                         <br>
                             <img src="uploads/<?php echo $image ?>"
                             class="avatar img-circle img-thumbnail" alt="avatar"> 
                             
                             <br>
                              Changer votre photo 
                            <br>
                            </span>

                         <br> 
                         <form method="POST" enctype="multipart/form-data">
                        <input type="file" class="text-center center-block file-upload" name="file">
                        <br>
                     
                        <input  name="tt" type="submit" class="btn btn-dark" value="Changer">
                           </form>

                    </div>
                    </hr><br>


                </div><!--/col-3-->
                <div class="col-sm-9">
                    <ul class="nav nav-tabs">
                    

                        <li class="active"><a data-toggle="tab" href="#messages">Fiche</a></li>
                    
                    </ul>


                    <div class="tab-content">
                        <div class="tab-pane " id="home">
                            <hr>
                            <form class="form" action="##" method="POST" id="registrationForm">
                            <div class="form-group">

                          <div class="col-xs-6">
                            <label ><h4>Votre Identifiant</h4></label>
                            <input type="text" class="form-control" name="id2" id="id"
                                placeholder="" title="peut pas etre changé" value="<?php echo $listeU[0]['id'];?>">
                          </div>
                         </div> 
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="prenom"><h4>Votre Prénom</h4></label>
                                        <input type="text" class="form-control" name="prenom" id="prenom"
                                               placeholder="" title="entrez votre prénom." value="<?php echo $listeU[0]['prenom'];?>">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="nom"><h4>Votre Nom</h4></label>
                                        <input type="text" class="form-control" name="nom" id="nom"
                                               placeholder="" title="entrez votre Nom."value="<?php echo $listeU[0]['nom'];?>">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="tel"><h4>Numéro</h4></label>
                                        <input type="tel" class="form-control" name="tel" id="tel" placeholder=""
                                               title="entrez votre numéro." value="<?php echo $listeU[0]['tel'];?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="naiss"><h4>Date de Naissance</h4></label>
                                        <input type="naiss" class="form-control" name="naiss" id="naiss"
                                               title="entrez votre date de Naissance." value="<?php echo $listeU[0]['naiss'];?>">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email"><h4>Email</h4></label>
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="moi.you@esprit.tn" title="entrez votre email." value="<?php echo $listeU[0]['email'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="mdp"><h4>Mot de Passe</h4></label>
                                        <input type="text" class="form-control" name="mdp" id="mdp" placeholder="" title="Tapez votre mdp."value="<?php echo $listeU[0]['mdp'];?>">
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <div class="col-xs-6" >
                                        <label for="classe"><h4>Classe</h4></label>
                                        <select class="form-control" name="classe" id="classe" style="height: 40px;">
                                            <?php 
                                            if ($listeU[0]['classe']=="1"){
                                                echo"<option selected='selected' value='1'>1ère Année</option>";
                                            }
                                            else{
                                                echo"<option value='1'>1ère Année</option>";
                                            }
                                            if ($listeU[0]['classe']=="2"){
                                                echo"<option selected='selected' value='2'>2ème Année</option>";
                                            }
                                            else{
                                                echo"<option value='2'>2ème Année</option>";
                                            }
                                            if ($listeU[0]['classe']=="3"){
                                                echo"<option selected='selected' value='3'>3ème Année</option>";
                                            }
                                            else{
                                                echo"<option value='3'>3ème Année</option>";
                                            }
                                            if ($listeU[0]['classe']=="4"){
                                                echo"<option selected='selected' value='4'>4ème Année</option>";
                                            }
                                            else{
                                                echo"<option value='4'>4ème Année</option>";
                                            }
                                            if ($listeU[0]['classe']=="5"){
                                                echo"<option selected='selected' value='5'>5ème Année</option>";
                                            }
                                            else{
                                                echo"<option value='5'>5ème Année</option>";
                                            }
                                            
                                            
                                            ?>

                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="sexe"><h4>Sexe</h4></label>
                                        <select class="form-control" name="sexe" id="sexe"  style="height: 40px;" value="<?php echo $listeU[0]['sexe'];?>">

                                            <?php 
                                            if ($listeU[0]['sexe']=="femme"){
                                                echo"<option selected='selected' value='femme'>Femme</option>";
                                            }
                                            else {
                                                echo "<option value='femme'>Femme</option>";
                                            }
                                            if ($listeU[0]['sexe']=="homme"){
                                                echo"<option selected='selected' value='homme'>Homme</option>";
                                            }
                                            else {
                                                echo "<option value='homme'>Homme</option>";
                                            }  
                                            if ($listeU[0]['sexe']=="autre"){
                                                echo"<option selected='selected' value='autre'>Autre</option>";
                                            }
                                            else {
                                                echo "<option value='autre'>Autre</option>";
                                            }                                             
                                            ?>
                                        </select>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <br>
                                        <button class="btn btn-lg btn-success" name="save" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                        
                                    </div>
                                </div>

                                

                            </form>

                            

                        </div><!--/tab-pane-->

                        <div class="tab-pane active" id="messages">

                            

                            <hr>
                            <form class="form" action="##" method="POST" id="registrationForm">
                            <div class="form-group">

                                    <div class="col-xs-6">
                             <label for="id"><h4>Votre Identifiant</h4></label>
                            <input type="text" class="form-control" name="id" id="id"
                            placeholder="" title="peut pas etre changé" disabled value="<?php echo $listeU[0]['id'];?>">
                             </div>
                               </div>                            
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="prenom"><h4>Prénom</h4></label>
                                        <input type="text" class="form-control" name="prenom" id="prenom" value="<?php echo $listeU[0]['prenom'];?>"disabled>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="nom"><h4>Nom</h4></label>
                                        <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $listeU[0]['nom'];?>"disabled>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="tel"><h4>Numéro</h4></label>
                                        <input type="text" class="form-control" name="tel" id="tel" value="<?php echo $listeU[0]['tel'];?>"disabled>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="naiss"><h4>Date de Naissance</h4></label>
                                        <input type="text" class="form-control" name="naiss" id="naiss" value="<?php echo $listeU[0]['naiss'];?>"disabled>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email"><h4>Email</h4></label>
                                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $listeU[0]['email'];?>"disabled>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="classe"><h4>Classe</h4></label>
                                        <input type="text" class="form-control" id="classe" value="
                                        <?php 
                                            if ($listeU[0]['classe']=="1"){
                                                echo"1ère Année";
                                            }
                                            
                                            
                                            if ($listeU[0]['classe']=="2"){
                                                echo"2ème Année";
                                            }
                                            
                                            
                                            if ($listeU[0]['classe']=="3"){
                                                echo"3ème Année";
                                            }
                                            
                                            
                                            if ($listeU[0]['classe']=="4"){
                                                echo"4ème Année";
                                            }
                                            
                                            if ($listeU[0]['classe']=="5"){
                                                echo"5ème Année";
                                            }
                                            
                                            
                                            ?>
                                        " disabled>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="sexe"><h4>sexe</h4></label>
                                        <input type="text" class="form-control" name="sexe" id="sexe" value="<?php echo $listeU[0]['sexe'];?>" disabled>
                                    </div>
                                </div>
                                

                            </form>

                        </div><!--/tab-pane-->




                       

                                        

















                    </div><!--/tab-content-->

                </div><!--/col-9-->
            </div><!--/row-->
        </div>

    </section>
    <!--end connexion section-->


</main><!-- End #main -->

   <!-- Footer Start -->
   <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-about">
                        <h2>A propos</h2>
                        <p>
                            Nous voulons faciliter l achat des produits necessaires pour vos animaux avec une livraison rapide et assurer.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">


                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Pages utiles</h2>
                                <a href="">Commandes</a>
                                <a href="">Produits</a>
                                <a href="">Livraison</a>
                                <a href="">Utilisateurs</a>
                                <a href="">Offres</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>contactez nous</h2>
                                <p><i class="fa fa-map-marker-alt"></i>123 residence,ennaser2,ariena</p>
                                <p><i class="fa fa-phone-alt"></i>+216 345 67890</p>
                                <p><i class="fa fa-envelope"></i>info_animshop@hotmail.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-menu">
            <div class="f-menu">
                <a href="">conditions d'utilisation</a>
                <a href="">politique de confidentialiter</a>
                <a href="">Cookies</a>
                <a href="">Aide</a>
                <a href="">FQAs</a>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>


<!-- Footer End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>