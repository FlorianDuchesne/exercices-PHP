<?php

class Livre{
    private $titre;
    private $auteur;
    private $editeur;
    private $nbPages;
    private $year;

public function __construct ($titre="", $auteur="", $editeur="", $nbPages=0, $year=0){
    $this->titre = $titre;
    $this->auteur = $auteur;
    $this->editeur = $editeur;
    $this->nbPages = $nbPages;
    $this->year = $year;
    }

function __toString(){
    return $this->titre . " (".$this->year. ") : " .$this->nbPages ." pages /  livre de " .$this->auteur. " édité par : ".$this->editeur;
    }    

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of nbPages
     */ 
    public function getNbPages()
    {
        return $this->nbPages;
    }

    /**
     * Set the value of nbPages
     *
     * @return  self
     */ 
    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;

        return $this;
    }

    /**
     * Get the value of year
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @return  self
     */ 
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of editeur
     */ 
    public function getEditeur()
    {
        return $this->editeur;
    }

    /**
     * Set the value of editeur
     *
     * @return  self
     */ 
    public function setEditeur($editeur)
    {
        $this->editeur = $editeur;

        return $this;
    }
}

?>