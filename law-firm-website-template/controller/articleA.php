<?php
include "../config.php";


  class ArticleA
  {
    function afficherarticle($article){

        echo "id_article: ".$article->getid_article()."<br>";
        echo "titre: ".$article->gettitre()."<br>";
       
        echo "description: ".$article->getDescription()."<br>";
       
                              }
    

    function ajouterarticle($article){
        $sql="INSERT INTO article (id_article,titre,Description) VALUES (:id_article,:titre,:Description)";
        $db = config::getConnexion();
        try{
            $req = $db->prepare($sql);
            
                     $id_article=$article->getid_article();
                     $titre=$article->gettitre();
                     $Description=$article->getDescription();
                     
             
                            $req->bindVAlue(':id_article',$id_article);
                            $req->bindVAlue(':titre',$titre);
                            $req->bindVAlue(':Description',$Description);
                           
          $req->execute();
            
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
 
        }
    }




    function afficherarticles(){
        $sql = "SElECT * From article ORDER BY id_article";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
   
    
    }




    




    function supprimerarticle($id_article)
    {
        $sql = "DELETE FROM article WHERE id_article= :id_article";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_article', $id_article);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }





    function recupererarticle($id_article){
        $sql="SELECT * from article where id_article=$id_article";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

   

      

    function modifierarticle($article,$id_article){
        $sql="UPDATE article SET id_article=:id_article, titre=:titre,Description=:Description WHERE id_article=:id_article";
        
        $db = config::getConnexion();
       
try{        
    $req = $db->prepare($sql);
       $id_article=$article->getid_article();
       $titre=$article->gettitre();
       $Description=$article->getDescription();
        $datas=array(':id_article'=>$id_article, ':titre'=>$titre,':Description'=>$Description);
         $req->bindValue(':id_article',$id_article);
         $req->bindVAlue(':titre',$titre);
         
         $req->bindVAlue(':Description',$Description);
        
         $s=$req->execute();
            
           
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }




 function triid_article(){
            $sql="SELECT * FROM article ORDER BY id_article ASC";
$db = config::getConnexion();
              try{
        $listearticle=$db->query($sql);
        return $listearticle;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
} 


 function trititre(){
            $sql="SELECT * FROM article ORDER BY titre ASC";
$db = config::getConnexion();
              try{
        $listearticle=$db->query($sql);
        return $listearticle;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
} 



function tridescription(){
            $sql="SELECT * FROM article ORDER BY description ASC";
$db = config::getConnexion();
              try{
        $listearticle=$db->query($sql);
        return $listearticle;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
} 





public function AfficherarticleFiltre($titre){
        $sql="SELECT * FROM article where 1=1 ";
        if($titre != '')
            $sql .='  and titre like :titre' ;
       
        
        $db = config::getConnexion();
        $req=$db->prepare($sql);
		
        if($titre != '')
			$req->bindValue(':titre', $titre);
		
       
		
        try{
            $req->execute();
            return $req->fetchAll();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }






}



    
?>

    