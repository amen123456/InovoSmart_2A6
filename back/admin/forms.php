<?php
    include "../../config.php";
    require_once '../../model/user.php';
    require_once '../../controller/userC.php';
    
    
    $connection=mysqli_connect('localhost','root','','projetweb');
    $sexeClasse1=mysqli_query($connection, "SELECT  count(*),sexe FROM etudiants where classe='1' GROUP BY sexe");
    $sexeClasse2=mysqli_query($connection, "SELECT  count(*),sexe FROM etudiants where classe='2' GROUP BY sexe");
    $sexeClasse3=mysqli_query($connection, "SELECT  count(*),sexe FROM etudiants where classe='3' GROUP BY sexe");
    $sexeClasse4=mysqli_query($connection, "SELECT  count(*),sexe FROM etudiants where classe='4' GROUP BY sexe");
    $sexeClasse5=mysqli_query($connection, "SELECT  count(*),sexe FROM etudiants where classe='5' GROUP BY sexe");


    $data1=array();
    $h=0;
    $f=0;
   
    while($row = mysqli_fetch_array($sexeClasse1)){
        if($row[1]=="homme"){
          
           $h=$row[0];
        }
        if($row[1]=="femme"){
          $f=$row[0];
        }
        
    }   
    array_push($data1,$h,$f);
    $h=0;
    $f=0;
  



    $data2=array();
    while($row = mysqli_fetch_array($sexeClasse2)){
        if($row[1]=="homme"){
          $h=$row[0];
        }
        if($row[1]=="femme"){
          $f=$row[0];
        }
        
    }   
    array_push($data2,$h,$f);
    $h=0;
    $f=0;
    

    $data3=array();
    while($row = mysqli_fetch_array($sexeClasse3)){
        if($row[1]=="homme"){
          $h=$row[0];
        }
        if($row[1]=="femme"){
          $f=$row[0];
        }
        
    }   
    array_push($data3,$h,$f);
    $h=0;
    $f=0;
   
     
    $data4=array();
    while($row = mysqli_fetch_array($sexeClasse4)){
        if($row[1]=="homme"){
          $h=$row[0];
        }
        if($row[1]=="femme"){
          $f=$row[0];
        }
        
    }   
    array_push($data4,$h,$f);
    $h=0;
    $f=0;
   
       
    $data5=array();
    while($row = mysqli_fetch_array($sexeClasse5)){
        if($row[1]=="homme"){
          $h=$row[0];
        }
        if($row[1]=="femme"){
          $f=$row[0];
        }
        
    }   
    array_push($data5,$h,$f);
    $h=0;
    $f=0;
    
       
        



    $userC = new userC();


     
    $listeU=$userC->afficherUser();


    


    if(isset($_POST['modifier'])){
      $user2=$userC->findUser($_POST['id2']);
  
      
      foreach($user2 as $u){
      
  
        $id=$u['id'];
        $nom=$u['nom'];
        $prenom=$u['prenom'];
        $email=$u['email'];
        $tel=$u['tel'];
        $naiss=$u['naiss'];
        $classe=$u['classe'];
        $sexe=$u['sexe'];
        $mdp=$u['mdp'];
  
      }
      
    }
    


if(isset($_POST['search']))
{
  $listeU=$userC->rechercherUser($_POST['valueToSearch']);
}
 
if(isset($_POST['search1']))
{
  $listeR=$reclamationC->rechercherReclamation($_POST['valueToSearch1']);
}
    
 
if(isset($_POST['DSCU']))
{ 
  $listeU=$userC->tridscu();
}
 
if(isset($_POST['ASCU']))
{ 
  $listeU=$userC->triascu();
}




















?>
<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Greendash Dashboard</title>
  
  <!-- Iconic Fonts -->
  <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Greendash styles -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
  <script src="../../verifadmin.js"></script>
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
      <a class="pl-0 ml-0 text-center" href="index.html"> <img src="assets/img/dashboard/logoo.png" alt="logo"> </a>
    </div>

    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      
    

      <!-- gestion des produits/categories -->

      <!-- gestion des produits-->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Produit-page" aria-expanded="false" aria-controls="Produit-page">
         <span><i class='fas fa-apple-alt' style='font-size:16px;color:white'></i>Gestion Des Produits</span>
        </a>
        <ul id="Produit-page" class="collapse" aria-labelledby="Produit-page" data-parent="#side-nav-accordion">
          <li> <a href="../produit/AjouterProduit.php">Ajouter Un Produit</a> </li>
          <li> <a href="../produit/ModifierProduit.php">Modifier Un Produit</a> </li>
          
         
        </ul>
      </li>
      <!-- /gestion de produit-->

      <!-- gestion des categories-->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Categorie-page" aria-expanded="false" aria-controls="Categorie-page">
          <span><i class='far fa-clipboard' style='font-size:18px;color:white'></i>Gestion Des Gategories</span>
        </a>
        <ul id="Categorie-page" class="collapse" aria-labelledby="Categorie-page" data-parent="#side-nav-accordion">
          <li> <a href="../produit/AjouterCategorie.php">Ajouter Une Commande</a> </li>
          <li> <a href="../produit/ModifierCategorie.php">Modifier  Une Commande</a> </li>
       
         
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
          <li> <a href="../livraison/livraison.html">Ajouter Une livraison</a> </li>Une livraison</a> </li>
    
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
          <li> <a href="../Livreur/afficherlivreur.php"> Afficher les livreurs</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des livreurs -->

    

      <!-- gestion des Utilisateurs -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Client-page" aria-expanded="false" aria-controls="Client-page">
          <span><i class='fas fa-user-tie' style='font-size:18px;color:white'></i>Gestion Des Utilisateurs</span>
        </a>
        <ul id="Client-page" class="collapse" aria-labelledby="Client-page" data-parent="#side-nav-accordion">
          <li> <a href="forms.php"></a> </li>
         
         
        </ul>
      </li>
      <!-- gestion des Utilisateurs -->
      

      <!-- /gestion des reclamations/notifications-->


      <!-- gestion des promotions -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Promotion-page" aria-expanded="false" aria-controls="Promotion-page">
          <span><i class='fas fa-donate' style='font-size:18px;color:white'></i>Gestion Des Offres</span>
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
      <!-- /gestion des events -->

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

      

      <!-- gestion des publicite -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Publicité-page" aria-expanded="false" aria-controls="Publicité-page">
          <span><i class="fas fa-cannabis"></i>Gestion Des Publicités </span>
        </a>
        <ul id="Publicité-page" class="collapse" aria-labelledby="Publicité-page" data-parent="#side-nav-accordion">
          <li> <a href="../Publicité/AjoutPublicite.html">Ajouter Une Publicité</a> </li>
          <li> <a href="../Publicité/ModifierPublicite.html">Modifier Une Publicité</a> </li>
          <li> <a href="../Publicité/SupprimmerPublicite.html">Supprimmer Une Publicité</a> </li>
          <li> <a href="../Publicité/AfficherPublicite.html"> Afficher les Publicités</a> </li>
         
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
<form action="forms.php" method="post">
    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">

      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

      <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.html"><img src="assets/img/dashboard/greendash-logo-84x41.png" alt="logo"> </a>
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
              <a class="media fs-14 p-2" href="../deconnexion.php"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
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


  <!-- Global Required Scripts Start -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/perfect-scrollbar.js"> </script>
  <script src="assets/js/jquery-ui.min.js"> </script>
  <!-- Global Required Scripts End -->

  <!-- Greendash core JavaScript -->
  <script src="assets/js/framework.js"></script>

  <!-- Settings -->
  <script src="assets/js/settings.js"></script>
  

              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
          
                  </ul>
          
                
              </ul>
          
         
      

      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
     
          </ul>
        </div>
      </div>
      <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">   Utilisateurs          </h1>
          </header>
          <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Liste des Utilisateurs</h4> <br>
                  <form method="POST">
                  <input type="text" name="valueToSearch" placeholder="valeur à chercher" style="width:150px; height:39px;">
                 
                 <button type="submit"  class="btn btn-dark" name="search"  >  <i class="fa fa-search" > </i></button>
          
                 <button type="submit" class="btn btn-primary pull-right " name="ASCU" value="ASCU">  <i class="fa fa-sort-up"> </i></button>
                  <button type="submit" class="btn btn-primary pull-right" style="margin-right:10px;"  name="DSCU" value="DSCU" >  <i class="fa fa-sort-down"> </i></button>
                  <br><br>
                
              </form>
              <form action="generate_pdf.php" method="post">
              <button type="submit" style="min-width: 10px" class="btn btn-primary " style="width:130px" >  <i class="flaticon-excel" > </i></button>
                </form>
            
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-sm">
                      <thead  class="thead-dark">
                        <tr>
                          <th>Identifiant</th>
                          <th>Email</th>
                          <th>Nom</th>
                          <th>Préom</th>
                          <th>Numéro</th>
                          <th>Classe</th>
                          <th>Date de Naissance</th>
                          <th>Sexe</th>
                          <th>Mot de Passe</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <?php
                           foreach($listeU as $user) {
                             ?> 
                           <tr> 
                           <td><?php echo $user['id']; ?></td>
                           <td><?php echo $user['email']; ?></td>
                           <td><?php echo $user['nom']; ?></td>
                           <td><?php echo $user['prenom']; ?></td>
                           <td><?php echo $user['tel']; ?></td>
                           <td><?php echo $user['classe']; ?></td>
                           <td><?php echo $user['naiss']; ?></td>
                           <td><?php echo $user['sexe']; ?></td>
                           <td><?php echo $user['mdp']; ?></td>
                           <td><?php echo "<img class='img-fluid rounded-circle' width='50%' src='uploads/".$user['pic']."'>"; ?></td>
                           
                           <td>
                           
                             <form action="supression.php" method="POST">
                               <input type="hidden" name="id" value="<?php echo $user['id']; ?>" >
                              
                               <button type="submit" class="btn btn-primary "  >  <i class="fa fa-trash" > </i></button>
                             </form>

                             <form method="POST">
                              <input type="hidden" name="id2" value="<?php echo $user['id']; ?>" >
                              <button type="submit" class="btn btn-primary"  name="modifier"  ><i class="flaticon-pencil"> </i></button>
                              
                           </form>
                           </td>

                          </tr>
                           <?php
                          } ?>
                      
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Ajouter un Utilisateur</h4>
                </div>
                <div class="card-body">
                  <p>Veuillez remplir les champs suivants:</p>
                  <form  method="POST" onsubmit="return verif()"  action="test.php" > 
                    <div class="form-group">
                      <label>Prénom</label>
                      <input type="text" name="prenom" id="prenom" class="form-control" maxlength="30"required value="<?php if (isset($prenom)) echo $prenom; ?>" >
                    </div>
                    <div class="form-group">
                      <label>Nom</label>
                      <input type="text"  name="nom" id="nom" class="form-control" maxlength="30"required value="<?php if (isset($nom)) echo $nom ?>"  >
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" name="email" id="email" 
                       class="form-control" maxlength="50"required value="<?php if (isset($email )) echo $email ?>"  >
                    </div>
                    <div class="form-group">
                      <label>Identifiant</label>
                      <input type="text" name="id" id="id" class="form-control" maxlength="10"required value="<?php if (isset($id)) echo $id ?>">
                      <input type="text" name="idu" id="idu" class="form-control" value="<?php if (isset($id)) echo $id ?>" hidden>
                    </div>
                    <div class="form-group">
                      <label>Téléphone</label>
                      <input type="text" name="tel" id="tel" class="form-control" maxlength="8"required value="<?php if (isset($tel)) echo $tel ?>"  >
                    </div>
                    <div class="form-group">
                      <label>Date Naissance</label>
                      <input type="date" class="form-control" name="naiss" id="naiss"  value="<?php if (isset($naiss)) echo $naiss ?>">
                    </div>
                    <div class="form-group">
                      <label>Classe</label>
                      <select class="form-control" name="classe" id="classe"  >
                  <option value="1">1ère Année</option>
                  <option value="2">2ème Année</option>
                  <option value="3">3ème Année</option>
                  <option value="4">4ème Année </option>
                  <option value="5">5ème Année</option>
                  

                 </select>

                    </div>
                    <div class="form-group">
                      <label>Sexe</label>
                     <select class="form-control" name="sexe" id="sexe"  >
                      <option value="femme">Femme</option>
                      <option value="homme">Homme</option>
                      
                        
                        
                       </select>
                  
                    </div>

                    

                    <div class="form-group">       
                      <label>Password</label>
                      <input type="text" name="mdp" id="mdp" class="form-control" maxlength="100"required value="<?php  if (isset($mdp)) echo $mdp ?>"  >
                    </div>
                    <div class="form-group">      
                    
                    <div id="erreur">

                    </div >     


                   
                   <button  name="submit" class="btn btn-dark" style="margin-left:170px;">  <i class="fa fa-plus" > </i></button>
                   <button type="submit" name="updatesubmit" class="btn btn-dark" >  <i class="fa fa-save" > </i></button>
                   
                    </div>
                  </form>
                </div>
              </div>
            </div>

             
                    <br>
                    <div class="card">
                    <div class="card-header d-flex align-items-center">
                  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data2 = google.visualization.arrayToDataTable([
          ['classe', 'homme','femme'],
          <?php
            echo "['Classe 1', $data1[0], $data1[1], $data1[2]],";
            echo "['Classe 2', $data2[0], $data2[1], $data2[2]],"; 
            echo "['Classe 3', $data3[0], $data3[1], $data3[2]],"; 
            echo "['Classe 4', $data4[0], $data4[1], $data4[2]],"; 
            echo "['Classe 5', $data5[0], $data5[1], $data5[2]],"; 
          ?>
        ]);

        var options = { 
            title: 'Nombre des étudiants par classe',
            subtitle: 'Homme, Femme',
            vAxis: {}
          
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data2, google.charts.Bar.convertOptions(options));
      } 
    </script> <div id="columnchart_material" style="width: 800px; height: 500px;"></div></div></div>



                </div>
              </div>
              
            </div>

    <!-- JavaScript files-->

    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
 
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>