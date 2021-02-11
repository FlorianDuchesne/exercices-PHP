<?php

class Auteur{
    private $prenom;
    private $nom;

public function __construct ($prenom ="", $nom =""){
    $this->prenom = $prenom;
    $this->nom = $nom;
    }

function __toString(){
    return $this->prenom." ".$this->nom;
}

public function auteuris($livre){
    echo "L'auteur de ".$livre->getTitre()." est ".$livre->getAuteur();
    echo "<br/>";
}

//foreach
public function bibliographie($array, $auteur){
    foreach ($array as $value){
        if ($auteur == $value->getAuteur()){
            echo $value;
            echo "<br/>";
    }
 }
}
//  for (même fonction que ci-dessus)

// public function bibliographie($array, $auteur){
//     for ($i=0; $i<count($array); $i++){
//         if ($auteur == $array[$i]->getAuteur());
//             echo $array[$i];
//             echo "<br/>";
//     }
// }

    /**
     * Get the value of titre
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

        /**
     * Get the value of titre
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of titre
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