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
    

      <!-- gestion des produits/categories -->

      <!-- gestion des produits-->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Produit-page" aria-expanded="false" aria-controls="Produit-page">
         <span><i class='fas fa-apple-alt' style='font-size:16px;color:white'></i>Gestion Des Produits</span>
        </a>
        <ul id="Produit-page" class="collapse" aria-labelledby="Produit-page" data-parent="#side-nav-accordion">
          <li> <a href="AjouterProduit.php">Ajouter Un Produit</a> </li>
          <li> <a href="ModifierProduit.php">Modifier Un Produit</a> </li>
         
        </ul>
      </li>
      <!-- /gestion de produit-->

      <!-- gestion des categories-->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Categorie-page" aria-expanded="false" aria-controls="Categorie-page">
          <span><i class='far fa-clipboard' style='font-size:18px;color:white'></i>Gestion Des Catégories</span>
        </a>
        <ul id="Categorie-page" class="collapse" aria-labelledby="Categorie-page" data-parent="#side-nav-accordion">
          <li> <a href="AjouterCategorie.php">Ajouter Une catégories</a> </li>
          <li> <a href="ModifierCategorie.php">Modifier  Une catégories</a> </li>
         
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
          <li> <a href="pages/Panier/AjoutPanier.html">Ajouter Un Panier</a> </li>
          <li> <a href="pages/Panier/ModifierPanier.html">Modifier  Un Panier</a> </li>
         
        </ul>
      </li>
      <!-- /gestion panier -->

      <!-- gestion commande -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Commande-page" aria-expanded="false" aria-controls="Commande-page">
          <span><i class='far fa-address-book' style='font-size:18px;color:white'></i>Gestion De commande</span>
        </a>
        <ul id="Commande-page" class="collapse" aria-labelledby="Commande-page" data-parent="#side-nav-accordion">
          <li> <a href="pages/Commande/AjoutCommande.html">Ajouter Une commande</a> </li>
          <li> <a href="pages/Commande/ModifierCommande.html">Modifier Une commande</a> </li>
          <li> <a href="pages/Commande/SupprimerCommande.html">Supprimmer Une commande</a> </li>
          <li> <a href="pages/Commande/AfficherCommande.html"> Afficher les commandes</a> </li>
         
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
          <li> <a href="pages/Livraison/AjoutLivraison.html">Ajouter Une livraison</a> </li>
          <li> <a href="pages/Livraison/ModifierLivraison.html">Modifier Une livraison</a> </li>
          <li> <a href="pages/Livraison/SupprimerLivraison.html">Supprimmer Une livraison</a> </li>
          <li> <a href="pages/Livraison/AfficherLivraison.html"> Afficher les livraisons</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des livraisons -->

      <!-- gestion des livreurs -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Livreur-page" aria-expanded="false" aria-controls="Livreur-page">
          <span><i class='fas fa-user-tie' style='font-size:18px;color:white'></i>Gestion Des livreurs</span>
        </a>
        <ul id="Livreur-page" class="collapse" aria-labelledby="Livreur-page" data-parent="#side-nav-accordion">
          <li> <a href="pages/Livreur/AjoutLivreur.html">Ajouter Un livreur</a> </li>
          <li> <a href="pages/Livreur/ModifierLivreur.html">Modifier Un livreur</a> </li>
          <li> <a href="pages/Livreur/SupprimerLivreur.html">Supprimmer Un livreur</a> </li>
          <li> <a href="pages/Livreur/AfficherLivreur.html"> Afficher les livreurs</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des livreurs -->

      <!-- /gestion des clients-->
      <!-- Product Page Elements -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Client-page" aria-expanded="false" aria-controls="Client-page">
          <span><i class='fas fa-user-tie' style='font-size:18px;color:white'></i>Gestion Des clients</span>
        </a>
        <ul id="Client-page" class="collapse" aria-labelledby="Client-page" data-parent="#side-nav-accordion">
          <li> <a href="pages/Client/AjoutClient.html">Ajouter Un client</a> </li>
          <li> <a href="pages/Client/ModifierClient.html">Modifier Un client</a> </li>
          <li> <a href="pages/Client/SupprimerClient.html">Supprimmer Un client</a> </li>
          <li> <a href="pages/Client/AfficherClient.html"> Afficher les clients</a> </li>
         
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
          <li> <a href="pages/Reclamation/AjoutReclamation.html">Ajouter Une réclamation</a> </li>
          <li> <a href="pages/Reclamation/ModifierReclamation.html">Modifier Une réclamation</a> </li>
          <li> <a href="pages/Reclamation/SupprimerReclamation.html">Supprimmer Une réclamation</a> </li>
          <li> <a href="pages/Reclamation/AfficherReclamation.php"> Afficher les réclamations</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des reclamations -->

       <!-- gestion des notifications -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Notification-page" aria-expanded="false" aria-controls="Notification-page">
          <span><i class='far fa-bell' style='font-size:18px;color:white'></i>Gestion Des Notifications</span>
        </a>
        <ul id="Notification-page" class="collapse" aria-labelledby="Notification-page" data-parent="#side-nav-accordion">
          <li> <a href="pages/Notification/AjoutNotification.html">Ajouter Une Notification</a> </li>
          <li> <a href="pages/Notification/ModifierNotification.html">Modifier Une Notification</a> </li>
          <li> <a href="pages/Notification/SupprimerNotification.html">SupprimmerUne Notification</a> </li>
          <li> <a href="pages/Notification/AfficherNotification.php"> Afficher les Notifications</a> </li>
         
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
          <li> <a href="pages/Promotion/AjoutPromotion.html">Ajouter Une Promotions</a> </li>
          <li> <a href="pages/Promotion/ModifierPromotion.html">Modifier Une Promotions</a> </li>
          <li> <a href="pages/Promotion/SupprimerPromotion.html">Supprimmer Une Promotions</a> </li>
          <li> <a href="pages/Promotion/AfficherPromotion.html"> Afficher les Promotions</a> </li>
         
        </ul>
      </li>
      <!-- /gestion de promotion -->

      <!-- gestion des publicite -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Publicité-page" aria-expanded="false" aria-controls="Publicité-page">
          <span><i class="fas fa-cannabis"></i>Gestion Des Publicités </span>
        </a>
        <ul id="Publicité-page" class="collapse" aria-labelledby="Publicité-page" data-parent="#side-nav-accordion">
          <li> <a href="pages/Publicité/AjoutPublicite.html">Ajouter Une Publicité</a> </li>
          <li> <a href="pages/Publicité/ModifierPublicite.html">Modifier Une Publicité</a> </li>
          <li> <a href="pages/Publicité/SupprimerPublicite.html">Supprimmer Une Publicité</a> </li>
          <li> <a href="pages/Publicité/AfficherPublicite.html"> Afficher les Publicités</a> </li>
         
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
          <li> <a href="pages/Article/AjoutArticle.html">Ajouter Un Article</a> </li>
          <li> <a href="pages/Article/ModifierArticle.html">Modifier  Un Article</a> </li>
          <li> <a href="pages/Article/SupprimerArticle.html">Supprimmer  Un Article</a> </li>
          <li> <a href="pages/Article/AfficherArticle.html"> Afficher les Articles</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des articles -->

      <!-- gestion des commentaires -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Commentaire-page" aria-expanded="false" aria-controls="Commentaire-page">
          <span><i class='far fa-comment' style='font-size:18px;color:white'></i>Gestion Des Commentaires </span>
        </a>
        <ul id="Commentaire-page" class="collapse" aria-labelledby="Commentaire-page" data-parent="#side-nav-accordion">
          <li> <a href="pages/Commentaire/AjoutCommentaire.html">Ajouter Un Commentaire</a> </li>
          <li> <a href="pages/Commentaire/ModifierCommentaire.html">Modifier Un Commentaire</a> </li>
          <li> <a href="pages/Commentaire/SupprimerCommentaire.html">Supprimmer Un Commentaire</a> </li>
          <li> <a href="pages/Commentaire/AfficherCommentaire.php"> Afficher les Commentaires</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des commentaires -->
     

      
      
      
      
      
      
     
    </ul>


  </aside>