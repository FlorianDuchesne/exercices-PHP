<?php

class Editeur{
    private $nom;

public function __construct($nom=""){
    $this->nom = $nom;
    }

function __toString(){
    return $this->nom . " ";
    }

public function editeuris($livre){
    echo "L'editeur de ".$livre->getTitre()." est ".$livre->getEditeur()."<br/>";
}    


public function collection($array, $editeur){
    foreach ($array as $value){
        if ($editeur == $value->getEditeur()){
            echo $value;
            echo "<br/>";
        }
    }
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
}



?>