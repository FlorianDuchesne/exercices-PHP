<?php

class Titulaire{
    protected $nom;
    protected $prenom;
    protected $dateNaissance;
    protected $ville;
    protected $comptes;

    public function __construct ($nom="", $prenom="", $dateNaissance="", $ville=""){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->ville = $ville;
        $this->comptes =[];
}

public function getAge(){
    return date_diff(new DateTime("now"), $this->getDateNaissance())->format("%y ans");
}

public function infos(){
    echo $this->getPrenom()." ".$this->getNom()." ville : ".$this->getVille()." âge : ".$this->getAge();
    echo " possède les comptes suivants :";
    foreach ($this->getComptes() as $value){
        echo "<br/>";
        echo $value->getLibelle();
    }
}

public function ajouterCompte($compte){
    $this->comptes[] = $compte; // lorsque la fonction est utilisée, le tableau de comptes, qui figure dans les attributs de l'objet, se voit ajouter un nouveau compte
}

// public function ajouterCompte($compte, $titulaire){
//     $x = $titulaire->getComptes();
//     $titulaire->setComptes(array_push($x, $compte)); 
//     echo $titulaire->getComptes();
// }

function __toString(){
    return $this->prenom." ".$this->nom." né le ".$this->dateNaissance->format('d/m/Y')." domicilié à ".$this->ville;
}

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of comptes
     */ 
    public function getComptes()
    {
        return $this->comptes;
    }

    /**
     * Set the value of comptes
     *
     * @return  self
     */ 
    public function setComptes($comptes)
    {
        $this->comptes = $comptes;

        return $this;
    }
}