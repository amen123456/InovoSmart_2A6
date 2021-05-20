<?php

class produit
{
    private $nomproduit;
    private $nbrproduit;
    private $imageproduit;
    private $descriptionproduit;




    public function getidproduit()
    {
        return $this->idproduit;
    }

    public function getnomproduit()
    {
        return $this->nomproduit;
    }
    public function getnbrproduit()
    {
        return $this->nbrproduit;
    }
    public function getimageproduit()
    {
        return $this->imageproduit;
    }
    public function getdescriptionproduit()
    {
        return $this->descriptionproduit;
    }
    public function getUrlImage()
    {
        return $this->urlImage;
    }
    public function getNotifCreateur()
    {
        return $this->notifCreateur;
    }

    public function setnomproduit($nomproduit)
    {
        $this->nomproduit = $nomproduit;
    }
    public function setnbrproduit($nbrproduit)
    {
        $this->nbrproduit = $nbrproduit;
    }
    public function setimageproduit($imageproduit)
    {
        $this->imageproduit = $imageproduit;
    }
    public function setdescriptionproduit($descriptionproduit)
    {
        $this->descriptionproduit = $descriptionproduit;
    }


    public function __construct($nomproduit, $nbrproduit, $imageproduit, $descriptionproduit)
    {
        $this->nomproduit = $nomproduit;
        $this->nbrproduit = $nbrproduit;
        $this->imageproduit = $imageproduit;
        $this->descriptionproduit = $descriptionproduit;

    }
}
