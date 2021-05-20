<?php
include "../../controller/livraisonC.php";
$livraisonC=new livraisonC();
$codepostal ='';
if(isset($_POST['codepostal'])){
   
	$codepostal = $_POST['codepostal'];
	$listelivraison=$livraisonC->AfficherlivraisonFiltre($codepostal);
	
}
else
$listelivraison=$livraisonC->afficherlivraisons();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slidesigma.com/themes/html/greendash/pages/product/product-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:13:35 GMT -->
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Anim shop   Animalerie</title>
  <!-- Iconic Fonts -->
  <link href="../vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../vendors/iconic-fonts/flat-icons/flaticon.css">
  <!-- Bootstrap core CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="../assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Greendash styles -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="../favicon.ico">

</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ">



  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>

  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>

  <!-- Sidebar Navigation Left -->
  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="../index.html"> <img src="../assets/img/dashboard/logoo.png" alt="logo"> </a>
    </div>

    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
          <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
        </a>
        <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
          <li> <a href="../index.html">SEFRIM</a> </li>


        </ul>
      </li>
      <!-- /Dashboard -->
    

      <!-- gestion des produits/categories -->

      <!-- gestion des produits-->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Produit-page" aria-expanded="false" aria-controls="Produit-page">
         <span><i class='fas fa-apple-alt' style='font-size:16px;color:white'></i>Gestion Des Produits</span>
        </a>
        <ul id="Produit-page" class="collapse" aria-labelledby="Produit-page" data-parent="#side-nav-accordion">
          <li> <a href="../Produit/AjoutProduit.html">Ajouter Un Produit</a> </li>
          <li> <a href="../Produit/ModifierProduit.html">Modifier Un Produit</a> </li>
          <li> <a href="../Produit/SupprimerProduit.html">Supprimmer Un Produit</a> </li>
          <li> <a href="../Produit/AfficherProduit.html"> Afficher les Produit</a> </li>
         
        </ul>
      </li>
      <!-- /gestion de produit-->

      <!-- gestion des categories-->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Categorie-page" aria-expanded="false" aria-controls="Categorie-page">
          <span><i class='far fa-clipboard' style='font-size:18px;color:white'></i>Gestion Des Catégories</span>
        </a>
        <ul id="Categorie-page" class="collapse" aria-labelledby="Categorie-page" data-parent="#side-nav-accordion">
          <li> <a href="../Categorie/AjoutCategorie.html">Ajouter Une catégories</a> </li>
          <li> <a href="../Categorie/ModifierCategorie.html">Modifier  Une catégories</a> </li>
          <li> <a href="../Categorie/SupprimerCategorie.html">Supprimmer  Une catégories</a> </li>
          <li> <a href="../Categorie/AfficherCategorie.html"> Afficher les Catégories</a> </li>
         
        </ul>
      </li>
      <!-- /gestion de categries-->

      <!-- gestion de panier/commande -->

      <!-- gestion panier -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Panier-page" aria-expanded="false" aria-controls="Panier-page">
          <span><i class='fas fa-shopping-cart' style='font-size:18px;color:white'></i>Gestion De Panier</span>
        </a>
        <ul id="Panier-page" class="collapse" aria-labelledby="Panier-page" data-parent="#side-nav-accordion">
          <li> <a href="../Panier/AjoutPanier.html">Ajouter Un panier</a> </li>
          <li> <a href="../Panier/ModifierPanier.html">Modifier Un panier</a> </li>
          <li> <a href="../Panier/SupprimerPanier.html">Supprimmer Un panier</a> </li>
          <li> <a href="../Panier/AfficherPanier.html"> Afficher les panier</a> </li>
         
        </ul>
      </li>
      <!-- /gestion panier -->

      <!-- gestion commande -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Commande-page" aria-expanded="false" aria-controls="Commande-page">
          <span><i class='far fa-address-book' style='font-size:18px;color:white'></i>Gestion De commande</span>
        </a>
        <ul id="Commande-page" class="collapse" aria-labelledby="Commande-page" data-parent="#side-nav-accordion">
          <li> <a href="../Commande/AjoutCommande.html">Ajouter Une commande</a> </li>
          <li> <a href="../Commande/ModifierCommande.html">Modifier Une commande</a> </li>
          <li> <a href="../Commande/SupprimerCommande.html">Supprimmer Une commande</a> </li>
          <li> <a href="../Commande/AfficherCommande.html"> Afficher les commandes</a> </li>
         
        </ul>
      </li>
      <!-- /gestion commande -->
     
     <!-- /gestion des livraisons/livreurs-->

      <!-- gestion des livraisons -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Livraison-page" aria-expanded="false" aria-controls="Livraison-page">
          <span><i class='fas fa-truck' style='font-size:18px;color:white'></i>Gestion Des Livraisons</span>
        </a>
        <ul id="Livraison-page" class="collapse" aria-labelledby="Livraison-page" data-parent="#side-nav-accordion">
          <li> <a href="../livraison/livraison.html">Ajouter Une livraison</a>
          <li> <a href="../livraison/afficherlivraison.php"> Afficher les livraisons</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des livraisons -->

      <!-- gestion des livreurs -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Livreur-page" aria-expanded="false" aria-controls="Livreur-page">
          <span><i class='fas fa-user-tie' style='font-size:18px;color:white'></i>Gestion Des livreurs</span>
        </a>
        <ul id="Livreur-page" class="collapse" aria-labelledby="Livreur-page" data-parent="#side-nav-accordion">
          <li> <a href="../Livreur/livreur.html">Ajouter Un livreur</a> </li>
          <li> <a href="../Livreur/afficherLivreur.php"> Afficher les livreurs</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des livreurs -->

      <!-- /gestion des Utilisateurs-->
      <!-- Product Page Elements -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Client-page" aria-expanded="false" aria-controls="Client-page">
          <span><i class='fas fa-user-tie' style='font-size:18px;color:white'></i>Gestion Des Utilisateurs</span>
        </a>
        <ul id="Client-page" class="collapse" aria-labelledby="Client-page" data-parent="#side-nav-accordion">
          <li> <a href="../admin/forms.php"></a> </li>
         
         
        </ul>
      </li>
      <!-- /Product page -->

      <!-- /gestion des reclamations/notifications-->

      <!-- gestion des reclamations -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Reclamation-page" aria-expanded="false" aria-controls="Reclamation-page">
          <span><i class='fas fa-bullhorn' style='font-size:18px;color:white'></i>Gestion Des Réclamations</span>
        </a>
        <ul id="Reclamation-page" class="collapse" aria-labelledby="Reclamation-page" data-parent="#side-nav-accordion">
          <li> <a href="../Reclamation/AjoutReclamation.html">Ajouter Une réclamation</a> </li>
          <li> <a href="../Reclamation/ModifierReclamation.html">Modifier Une réclamation</a> </li>
          <li> <a href="../Reclamation/SupprimerReclamation.html">Supprimmer Une réclamation</a> </li>
          <li> <a href="../Reclamation/AfficherReclamation.html"> Afficher les réclamations</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des reclamations -->

       <!-- gestion des notifications -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Notification-page" aria-expanded="false" aria-controls="Notification-page">
          <span><i class='far fa-bell' style='font-size:18px;color:white'></i>Gestion Des Notifications</span>
        </a>
        <ul id="Notification-page" class="collapse" aria-labelledby="Notification-page" data-parent="#side-nav-accordion">
          <li> <a href="../Notification/AjoutNotification.htmll">Ajouter Une Notification</a> </li>
          <li> <a href="../Notification/ModifierNotification.html">Modifier Une Notification</a> </li>
          <li> <a href="../Notification/SupprimerNotification.html">SupprimmerUne Notification</a> </li>
          <li> <a href="../Notification/AfficherNotification.html"> Afficher les Notifications</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des notifications -->


      <!-- /gestion des promotions/publicité-->

      <!-- gestion des promotions -->
         <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Promotion-page" aria-expanded="false" aria-controls="Promotion-page">
          <span><i class='fas fa-donate' style='font-size:18px;color:white'></i>Gestion Des Promotions</span>
        </a>
        <ul id="Promotion-page" class="collapse" aria-labelledby="Promotion-page" data-parent="#side-nav-accordion">
         <li> <a href="../eventetoffre/AjouterOffre.php">Ajouter Un Offre</a> </li>
          <li> <a href="../eventetoffre/AfficherOffre.php">Afficher Un Offre</a> </li>
         
        </ul>
      </li>
      <!-- /gestion de promotion -->

      <!-- gestion des events -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#event-page" aria-expanded="false" aria-controls="event-page">
          <span><i class="fas fa-cannabis"></i>Gestion Des Evenements </span>
        </a>
        <ul id="event-page" class="collapse" aria-labelledby="event-page" data-parent="#side-nav-accordion">
             <li> <a href="../eventetoffre/AjouterEvent.php">Ajouter Un Event</a> </li>
          <li> <a href="../eventetoffre/AfficherEvent.php">Afficher Un Event</a> </li>
         
        </ul>
      </li>
      <!-- /gestion de publicite -->
   <!-- /gestion des articles/commentaires-->

      <!-- gestion des articles -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Article-page" aria-expanded="false" aria-controls="Article-page">
          <span><i class='far fa-comment-alt' style='font-size:18px;color:white'></i>Gestion Des Articles</span>
        </a>
        <ul id="Article-page" class="collapse" aria-labelledby="Article-page" data-parent="#side-nav-accordion">
          <li> <a href="../article/article.html">Ajouter Un Article</a> </li>
          
          <li> <a href="../article/afficherarticle.php"> Afficher les Articles</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des articles -->

      <!-- gestion des commentaires -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Commentaire-page" aria-expanded="false" aria-controls="Commentaire-page">
          <span><i class='far fa-comment' style='font-size:18px;color:white'></i>Gestion Des Commentaires </span>
        </a>
        <ul id="Commentaire-page" class="collapse" aria-labelledby="Commentaire-page" data-parent="#side-nav-accordion">

         
          <li> <a href="../Commentaire/AfficherCommentaire.php"> Afficher les Commentaires</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des commentaires -->
     

      
      
      
      
      
      
     
    </ul>


  </aside>


  <!-- Main Content -->
  <main class="body-content">
<form action="ajouterlivraison.php" method="post">
    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">

      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

      <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="../index.html"><img src="../assets/img/dashboard/greendash-logo-84x41.png" alt="logo"> </a>
      </div>

      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
       
        <li class="ms-nav-item ms-nav-user dropdown">
          <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-right" src="../assets/img/dashboard/rakhan-potik-1.jpg" alt="people"> </a>
          <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, Anny Farisha</span></h6>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-dropdown-list">
              <a class="media fs-14 p-2" href="../prebuilt-pages/user-profile.html"> <span><i class="flaticon-user mr-2"></i> Profile</span> </a>
              <a class="media fs-14 p-2" href="../apps/email.html"> <span><i class="flaticon-mail mr-2"></i> Inbox</span> <span class="badge badge-pill badge-info">3</span> </a>
              <a class="media fs-14 p-2" href="../prebuilt-pages/user-profile.html"> <span><i class="flaticon-gear mr-2"></i> Account Settings</span> </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="../prebuilt-pages/lock-screen.html"> <span><i class="flaticon-security mr-2"></i> Lock</span> </a>
            </li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="../prebuilt-pages/default-login.html"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
            </li>
          </ul>
        </li>
      </ul>

      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

    </nav>
    <!-- body wrapper -->
  
  <!-- MODALS -->

  <!-- Reminder Modal -->
  <div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-header bg-secondary">
          <h5 class="modal-title has-icon text-white"> New Reminder</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <form>

          <div class="modal-body">

            <div class="ms-form-group">
              <label>Remind me about</label>
              <textarea class="form-control" name="reminder"></textarea>
            </div>

            <div class="ms-form-group">
              <span class="ms-option-name fs-14">Repeat Daily</span>
              <label class="ms-switch float-right">
                <input type="checkbox">
                <span class="ms-switch-slider round"></span>
              </label>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="ms-form-group">
                  <input type="text" class="form-control datepicker" name="reminder-date" value="" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="ms-form-group">
                  <select class="form-control" name="reminder-time">
                    <option value="">12:00 pm</option>
                    <option value="">1:00 pm</option>
                    <option value="">2:00 pm</option>
                    <option value="">3:00 pm</option>
                    <option value="">4:00 pm</option>
                  </select>
                </div>
              </div>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Reminder</button>
          </div>

        </form>

      </div>
    </div>
  </div>

  <!-- Notes Modal -->
  <div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-header bg-secondary">
          <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <form>

          <div class="modal-body">

            <div class="ms-form-group">
              <label>Note Title</label>
              <input type="text" class="form-control" name="note-title" value="">
            </div>

            <div class="ms-form-group">
              <label>Note Description</label>
              <textarea class="form-control" name="note-description"></textarea>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Note</button>
          </div>

        </form>

      </div>
    </div>
  </div>

   <!--            xttttttt          -->



   




    <div class="ms-content-wrapper"  >
      <div class="row">

            <div class="col-md-12" >
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                  <li class="breadcrumb-item"><a href="#">livraison</a></li>
                  <li class="breadcrumb-item active" aria-current="page">affiche d'un livraison</li>
                </ol>
              </nav>
            </div>

<?php
    
    // appeler la fonction list pour selectionner les donnees du table participant avec tri
    $type_tri = $_GET['typetri'];
    switch ($type_tri) {
        case 'prix':
            $listelivraison = $livraisonC->triprix();
            break;
        case 'date':
            $listelivraison = $livraisonC->tridate();
            break;
 case 'destinataire':
            $listelivraison = $livraisonC->tridestinataire();
            break;
 case 'codepostal':
            $listelivraison = $livraisonC->tricodepostal();
            break;
    }
    ?>



        <div class="col-xl-6 col-md-12"  >
          <div class="ms-panel ms-panel-fh" style="width:900px ; margin-left: 120px;"  >
            <div class="ms-panel-body"  >
              


  <form action="trilivraison.php" method="GET" class="form-inline">
                <select class="btn btn-dark btn btn-pill custom-select my-1 mr-sm-2" style="margin-left: 750px;" name="typetri" onchange="this.form.submit()">
                    <option value="trie" selected>trier par:</option>         
                    <option value="prix">prix</option>
                    <option value="date">date</option>
			<option value="destinataire">destinataire</option>
			<option value="codepostal">codepostal</option>
                </select>
            </form>

                <div class="form-row">
                  <div class="col-xxl-7 col-md-12 ">
                          <h4>Liste des livraisons</h4><br>
  <form action="" method="post">
			<input class=class="input" type="text" name="codepostal" value="<?=$codepostal?>" placeholder="Recherche par codepostal" />
			
			
			<button type="submit" style="min-width: 10px" class="btn btn-dark btn btn-pill" >  <i class="flaticon-search" > </i></button>
		</form>
<p


/p>
<table class="table table-bordered">
			
			<thead>
			<tr>
                <th scope="col">Idlivraison</th>
                <th scope="col">prix</th>
                <th scope="col">date</th>
                <th scope="col">destinataire</th>
		<th scope="col">codepostal</th>

				
            </tr>
             </thead>

               


                          
<?PHP
foreach($listelivraison as $row){
  ?>
  <tr>
  <td><?PHP echo $row['Idlivraison']; ?></td>
  <td><?PHP echo $row['prix']; ?></td>
  <td><?PHP echo $row['date']; ?></td>
  <td><?PHP echo $row['destinataire']; ?></td>
<td><?PHP echo $row['codepostal']; ?></td>
  <td><form method="POST" action="supprimerlivraison.php">
<button type="submit" style="min-width: 10px" class="btn btn-primary "  >  <i class="fa fa-trash" > </i></button>
  <input type="hidden" value="<?PHP echo $row['Idlivraison']; ?>" name="Idlivraison">
   </form>
  </td>
 <td><form method="POST" action="impression.php">
<button type="submit" style="min-width: 10px" class="btn btn-primary " style="width:130px" >  <i class="flaticon-excel" > </i></button>
  <input type="hidden" value="<?PHP echo $row['Idlivraison']; ?>" name="Idlivraison">
   </form>
  </td>
  <td><a href="modifierlivraison.php?Idlivraison=<?PHP echo $row['Idlivraison']; ?>">
<button type="submit" style="min-width: 10px" class="btn btn-primary"  name="modifier"  ><i class="flaticon-pencil"> </i></button></td>
  </tr>
  <?PHP
}
?>

</tbody>
</table>
     <td>
           <form method="POST" action="statistique.php">
<button type="submit" style="min-width: 10px" class="btn btn-dark btn btn-pill" style="width:130px" >  <i class="flaticon-statistics" > </i></button>
   </form>  </td>   
            
             </div>
         
                  </div>
                </div>
              
            </div>
          </div>
        </div>
      </div>
    </div> 





 <!--            xttttttt          -->



  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="../assets/js/jquery-3.3.1.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/perfect-scrollbar.js"> </script>
  <script src="../assets/js/jquery-ui.min.js"> </script>
  <!-- Global Required Scripts End -->

  <!-- Greendash core JavaScript -->
  <script src="../assets/js/framework.js"></script>

  <!-- Settings -->
  <script src="../assets/js/settings.js"></script>
</body>


<!-- Mirrored from slIdlivraisonesigma.com/themes/html/greendash/pages/product/product-grIdlivraison.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:13:48 GMT -->
</html>