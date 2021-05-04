<?php
include "config.php";


  class CommentaireC
  {
    function affichercommentaire($commentaire){

        echo "nom: ".$commentaire->getnom()."<br>";
 echo "prenom: ".$commentaire->getprenom()."<br>";
 echo "id_article: ".$commentaire->getid_article()."<br>";
 echo "id_commentaire: ".$commentaire->getid_commentaire()."<br>";
        echo "commentaire: ".$commentaire->getcommentaire()."<br>";
       
        
                              }
    

    function ajoutercommentaire($commentaire){
        $sql="INSERT INTO commentaire (nom,prenom,id_article,id_commentaire,commentaire) VALUES (:nom,:prenom,:id_article,:id_commentaire,:commentaire)";
        $db = config::getConnexion();
        try{
            $req = $db->prepare($sql);
            
                     $nom=$commentaire->getnom();
$prenom=$commentaire->getprenom();
			$id_article=$commentaire->getid_article();
				$id_commentaire=$commentaire->getid_commentaire();
                     $commentaire=$commentaire->getcommentaire();
                     
                     
              $req->bindVAlue(':nom',$nom);
                            $req->bindVAlue(':prenom',$prenom);
			 $req->bindVAlue(':id_article',$id_article);
			 $req->bindVAlue(':id_commentaire',$id_commentaire);
                            $req->bindVAlue(':commentaire',$commentaire);
                          
                           
          $req->execute();
            
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
 
        }
    }




    function affichercommentaires(){
        $sql = "SElECT * From commentaire ORDER BY id_commentaire";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
   
    
    }




    




    function supprimercommentaire($id_commentaire)
    {
        $sql = "DELETE FROM commentaire WHERE id_commentaire= :id_commentaire";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_commentaire', $id_commentaire);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }





    function recuperercommentaire($id_commentaire){
        $sql="SELECT * from commentaire where id_commentaire=$id_commentaire";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

   

      

    function modifiercommentaire($commentaire,$id_commentaire){
        $sql="UPDATE commentaire SET nom=:nom, prenom=:prenom, id_article=:id_article,id_commentaire=:id_commentaire,commentaire=:commentaire WHERE id_commentaire=:id_commentaire";
        
        $db = config::getConnexion();
       
try{        
    $req = $db->prepare($sql);
       $nom=$commentaire->getnom();
$prenom=$commentaire->getprenom();
	$id_article=$commentaire->getid_article();
	$id_commentaire=$commentaire->getid_commentaire();
        $commentaire=$commentaire->getcommentaire();
       
        $datas=array(':nom'=>$nom,':prenom'=>$prenom,':id_article'=>$id_article,':id_commentaire'=>$id_commentaire, ':commentaire'=>$commentaire);
         $req->bindValue(':nom',$nom);
	$req->bindValue(':prenom',$prenom);
	$req->bindValue(':id_article',$id_article);
	$req->bindValue(':id_commentaire',$id_commentaire);
         $req->bindVAlue(':commentaire',$commentaire);
         
        
        
         $s=$req->execute();
            
           
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }

 function trinom(){
            $sql="SELECT * FROM commentaire ORDER BY nom ASC";
$db = config::getConnexion();
              try{
        $listecommentaire=$db->query($sql);
        return $listecommentaire;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
} 


 function triprenom(){
            $sql="SELECT * FROM commentaire ORDER BY prenom ASC";
$db = config::getConnexion();
              try{
        $listecommentaire=$db->query($sql);
        return $listecommentaire;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
} 



function tricommentaire(){
            $sql="SELECT * FROM commentaire ORDER BY commentaire ASC";
$db = config::getConnexion();
              try{
        $listecommentaire=$db->query($sql);
        return $listecommentaire;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
} 



}



    
?>

    