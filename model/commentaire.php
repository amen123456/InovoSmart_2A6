<?PHP
               
    class Commentaire{
        private  $nom;
private  $prenom;
	private  $id_article;
	private  $id_commentaire;
        private  $commentaire;
       
        
        
        
        function __construct($id_article, $commentaire){
            
           
	$this->id_article=$id_article;
	
            $this->commentaire=$commentaire;
            
           
            
        }

      function getnom() {
            return $this->nom;
        }

function getprenom() {
            return $this->prenom;
        }

function getid_article() {
            return $this->id_article;
        }
function getid_commentaire() {
            return $this->id_commentaire;
        }
       function getcommentaire() {
            return $this->commentaire;
        }
        function setnom($nom) {
            $this->nom=$nom;
        }
 function setprenom($prenom) {
            $this->prenom=$prenom;
        }
        function setid_article($id_article) {
            $this->id_article=$id_article;
        }
 function setid_commentaire($id_commentaire) {
            $this->id_commentaire=$id_commentaire;
        }
 function setcommentaire($commentaire) {
            $this->commentaire=$commentaire;
        }

        
     
        
    }
?>