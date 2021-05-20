<?php
include "C:/wamp64/www/Integration/config.php";

include_once 'C:/wamp64/www/Integration/model/categories.php';

class categorieC
{

    public function ajoutercategorie($categorie)
    {
        $sql = "INSERT INTO categorie(nomcategorie,descriptioncategorie) 
			VALUES (:nomcategorie,:descriptioncategorie)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'nomcategorie' => $categorie->getnomcategorie(),
                'descriptioncategorie' => $categorie->getdescriptioncategorie()

            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function affichercategorie()
    {

        $sql = "SELECT * FROM categorie";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function supprimercategorie($id)
    {
        $sql = "DELETE FROM categorie WHERE idcategorie = :idcategorie";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idcategorie', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function modifiercategorie($categorie, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE categorie SET 
						nomcategorie = :nomcategorie, 
						descriptioncategorie= :descriptioncategorie
					WHERE idcategorie = :idcategorie'
            );
            $query->execute([
                'nomcategorie' => $categorie->getnomcategorie(),
                'descriptioncategorie' => $categorie->getdescriptioncategorie(),      
                'idcategorie' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recuperercategorie($id)
    {
        $sql = "SELECT * from categorie where idcategorie=$id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function recherche($search_value)
        {
            $sql="SELECT * FROM categorie where  idcategorie like '$search_value' or nomcategorie like '%$search_value%' ";
    
            //global $db;
            $db =Config::getConnexion();
    
            try{
                $result=$db->query($sql);
    
                return $result;
    
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        public function AffichercategoriePaginer($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM categorie LIMIT {$start},{$perPage}";
            $db = config::getConnexion();
            try {
                $liste = $db->prepare($sql);
                $liste->execute();
                $liste = $liste->fetchAll(PDO::FETCH_ASSOC);
                return $liste;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }
    
    
        public function calcTotalRows($perPage)
        {
            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM categorie";
            $db = config::getConnexion();
            try {
    
                $liste = $db->query($sql);
                $total = $db->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
                $pages = ceil($total / $perPage);
                return $pages;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }

        

     
        
                    
}
