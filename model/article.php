<?PHP
               
    class Article{
        private  $id_article;
        private  $titre;
        private  $Description;
        
        
        
        function __construct($id_article,$titre,$Description){
            
            $this->id_article=$id_article;
            $this->titre=$titre;
            $this->Description=$Description;
           
            
        }
        
      function getid_article() {
            return $this->id_article;
        }
       function gettitre() {
            return $this->titre;
        }
        
       function getDescription() {
            return $this->Description;
        }
        

        
       function setid_article($id_article) {
            $this->id_article=$id_article;
        }
       function settitre($titre) {
            $this->titre=$titre;
        }
       
      function setDescription($Description) {
            $this->Description=$Description;
        }
       
        
    }
?>