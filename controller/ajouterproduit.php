<?PHP
include "C://xampp/htdocs/sefrim/config.php";
require_once 'C://xampp/htdocs/sefrim/model/produits.php';

class produitC
{

    public function ajouterproduit($produit)
    {
        $sql = "INSERT INTO produit(nomproduit,nbrproduit,imageproduit,descriptionproduit) 
			VALUES (:nomproduit,:nbrproduit,:imageproduit,:descriptionproduit)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'nomproduit' => $produit->getnomproduit(),
                'nbrproduit' => $produit->getnbrproduit(),
                'imageproduit' => $produit->getimageproduit(),
                'descriptionproduit' => $produit->getdescriptionproduit()

            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function afficherproduit()
    {

        $sql = "SELECT * FROM produit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function supprimerproduit($id)
    {
        $sql = "DELETE FROM produit WHERE idproduit = :idproduit";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idproduit', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function modifierproduit($produit, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE produit SET 
						nomproduit = :nomproduit, 
						nbrproduit= :nbrproduit,
						imageproduit = :imageproduit,
						descriptionproduit = :descriptionproduit
					WHERE idproduit = :idproduit'
            );
            $query->execute([
                'nomproduit' => $produit->getnomproduit(),
                'nbrproduit' => $produit->getnbrproduit(),
                'imageproduit' => $produit->getimageproduit(),
                'descriptionproduit' => $produit->getdescriptionproduit(),         
                'idproduit' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererproduit($id)
    {
        $sql = "SELECT * from produit where idproduit=$id";
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
            $sql="SELECT * FROM produit where  idproduit like '$search_value' or nomproduit like '%$search_value%' ";
    
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

        public function AfficherproduitPaginer($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM produit LIMIT {$start},{$perPage}";
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
            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM produit";
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

        

        function sortv()
    {
        $sql = "SELECT * from produit order by nbrproduit desc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function triec(){
        $sql = "SELECT   from produit a   order by nomproduit asc ";
        
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        
                    
}
