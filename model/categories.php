<?php

class categorie
{
    private $nomcategorie;
    private $descriptioncategorie;





    public function getidcategorie()
    {
        return $this->idcategorie;
    }

    public function getnomcategorie()
    {
        return $this->nomcategorie;
    }
    public function getdescriptioncategorie()
    {
        return $this->descriptioncategorie;
    }
    public function getNotifCreateur()
    {
        return $this->notifCreateur;
    }

    public function setnomcategorie($nomcategorie)
    {
        $this->nomcategorie = $nomcategorie;
    }
    public function setdescriptioncategorie($descriptioncategorie)
    {
        $this->descriptioncategorie = $descriptioncategorie;
    }


    public function __construct($nomcategorie, $descriptioncategorie)
    {
        $this->nomcategorie = $nomcategorie;
        $this->descriptioncategorie = $descriptioncategorie;

    }
}
