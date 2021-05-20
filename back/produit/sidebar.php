  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="index.html"> <img src="assets/img/dashboard/logo.png" alt="logo"> </a>
    </div>

    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
          <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
        </a>
        <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
          <li> <a href="index.html">SEFRIM</a> </li>


        </ul>
      </li>
      <!-- /Dashboard -->
    

     
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
          <li> <a href="../admin/forms.php"></a> </li>
         
         
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
          
          <li> <a href="../article/afficherArticle.php"> Afficher les Articles</a> </li>
         
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