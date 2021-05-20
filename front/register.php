<?php
    include "../config.php";
    require_once '../model/user.php';
    require_once '../controller/userC.php';

    if(isset($_POST['submit'])){
        $user = new user($_POST["id"],$_POST["prenom"],$_POST["nom"],$_POST["email"],$_POST["tel"],$_POST["naiss"],$_POST["classe"],$_POST["sexe"],$_POST["mdp"]);
        $userC = new userC();
        
        $b=$userC->ajouterUser($user);
        
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



  

    <!-- ======= Creer compte Section ======= -->

    <section id="Create" class="Create">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sign up</h2>
          <p>create account</p>
          <br>
        </div>
        <div class="col-lg-8 mt-5 mt-lg-0">
          <form action="" method="post" >
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Nom: </td>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" name="nom" class="form-control" id="nom" placeholder="maximum 30 caractères" maxlength="30" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td>  Votre Prénom: </td>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" name="prenom" class="form-control" id="prenom" placeholder="maximum 30 caractères" maxlength="30" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Adresse Email: </td>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Prénom.Nom@esprit.tn" pattern=".+@esprit.tn" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Identifiant: </td>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" name="id" class="form-control" id="id" placeholder="xxxlllxxxx" maxlength="10"required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre numéro de téléphone: </td>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="tel" class="form-control" name="tel" id="tel"   required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Date de Naissance: </td>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="date" class="form-control" name="naiss" id="naiss"  min="1990-01-01" required>
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Classe: </td>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">

                <select class="form-control" name="classe" id="classe">
                  <option value="1">1 Année</option>
                  <option value="2">2 Année</option>
                  <option value="3">3 Année</option>
                  <option value="4">4 Année </option>
                  <option value="5">5 Année</option>

                </select>

              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Sexe: </td>
              </div>
              <div class="col-md-6 form-group">
                <select class="form-control" name="sexe" id="sexe">
                  <option value="femme">Femme</option>
                  <option value="homme">Homme</option>
                    </select>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Mot de Passe: </td>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="password" class="form-control" name="mdp" id="mdp"  required>
              </div>
            </div>
            <br>


            <div class="text-center"><button class="btn btn-danger" name="submit"  type="submit"> Créer Compte </button></div>
            <br>
          </form>


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
                                <a href="profil.php">Utilisateurs</a>
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