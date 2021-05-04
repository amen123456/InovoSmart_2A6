<?php
include "controller/commentaireC.php";
$commentaireC=new commentaireC();
$listecommentaire=$commentaireC->affichercommentaires();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Anim shop Animalerie </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Anim shop" name="keywords">
        <meta content="Anim shop" name="description">

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
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
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
                                <a href="index.html" class="nav-item nav-link">Accueil</a>
                                <a href="about.html" class="nav-item nav-link">Commandes</a>
                                <a href="service.html" class="nav-item nav-link">Produits</a>
                                <a href="team.html" class="nav-item nav-link">Livraison</a>
                                <a href="portfolio.html" class="nav-item nav-link">Utilisateurs</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Page</a>
                                    <div class="dropdown-menu">
                                        <a href="blog.html" class="dropdown-item">Blog Page</a>
                                        
                                    </div>
                                </div>
                                <a href="contact.html" class="nav-item nav-link">Offres</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="">Obtenir un rendez-vous</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Notre Blog</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Accueil</a>
                            <a href="">Notre Blog</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Blog Start -->
            <div class="blog">
                <div class="container">
                    <div class="section-header">
                        <h2>liste des commentaires</h2>
                    </div>
                   
                            
                    
                </div>
            </div>









   <!--            xttttttt          -->



   




    

        <div class="col-xl-6 col-md-12"  >
          <div class="ms-panel ms-panel-fh" style="width:900px ; margin-left: 120px;"  >
            <div class="ms-panel-body"  >


<form action="tricom.php" method="GET" class="form-inline">
                <select class="btn btn-dark btn btn-pill custom-select my-1 mr-sm-2" style="margin-left: 750px;" name="typetri" onchange="this.form.submit()">
                    <option value="trie" selected>trier par:</option> 
			<option value="nom">nom</option>  
<option value="prenom">prenom</option>      
                    <option value="commentaire">commentaire</option>
                    
                </select>
            </form>




              
                <div class="form-row">
                  <div class="col-xxl-7 col-md-12 ">
                          
<table class="table table-bordered">
                          
                            


			
			<thead>
			<tr>
                <th scope="col">nom</th>
		<th scope="col">prenom</th>
                <th scope="col">id_article</th>
			<th scope="col">id_commentaire</th>
                <th scope="col">commentaire</th>
                
            </tr>
             </thead>

               


                          
<?PHP
foreach($listecommentaire as $row){
  ?>
  <tr>
<td><?PHP echo $row['nom']; ?></td>
<td><?PHP echo $row['prenom']; ?></td>
<td><?PHP echo $row['id_article']; ?></td>

  <td><?PHP echo $row['id_commentaire']; ?></td>
  <td><?PHP echo $row['commentaire']; ?></td>
  
  <td><form method="POST" action="supprimercommentaire.php">
 
<button type="submit" style="min-width: 10px" class="btn btn-dark "  >  <i class="fa fa-trash" > </i></button>
  <input type="hidden" value="<?PHP echo $row['id_commentaire']; ?>" name="id_commentaire">
   </form>
  </td>
  <td><a href="modifiercommentaire.php?id_commentaire=<?PHP echo $row['id_commentaire']; ?>">
<button type="submit" style="min-width: 10px" class="btn btn-dark" name="modifier"   ><i class="far fa-check-circle"> </i></button>

  </a></td>


  </tr>
  <?PHP
}
?>
 


</tbody>
</table>

                
    
            
             </div>
         
                  </div>
                </div>
              
            </div>
          </div>
        </div>
      </div>
    </div> 


 <!--            xttttttt          -->















            <!-- Blog End -->


            <!-- Newsletter Start -->
            <div class="newsletter">
                <div class="container">
                    <div class="section-header">
                        <h2>Inscrivez-vous a nos communications!</h2>
                    </div>
                    <div class="form">
                        <input class="form-control" placeholder="Entrez votre adresse e_mail">
                        <button class="btn">inscrire</button>
                    </div>
                </div>
            </div>
            <!-- Newsletter End -->


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
