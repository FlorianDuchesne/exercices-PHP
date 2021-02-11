<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php ini_set('memory_limit','16M'); ?>
<h2>Exercice 1</h2>
<?php

//Créer une fonction personnalisée "convertirMajRouge()"
//Cette fonction doit permettre de transformer une chaîne de caractères
// de façon à ce qu'elle s'affiche en majuscules et en rouge

$phrase = "Voici une phrase";
$deuxiemeTest = "Voici une deuxième phrase";

function convertirMajRouge($string){
$string = mb_strtoupper($string);
echo '<font color="red">'.$string.'</font></br>';
}

function convertirMajVert($string){
    $string = mb_strtoupper($string);
    echo '<font color="green">'.$string.'</font></br>';
    }
    

convertirMajRouge($phrase);
convertirMajVert($deuxiemeTest);

?>

<h2>Exercice 2</h2>

<?php

function afficherTableHTML($array){
echo "<table border=1><tr><th>Pays</th><th>Capitale</th></tr>";
ksort($array);
foreach ($array as $key => $value){
    echo "<tr><td>".strtoupper($key)."</td><td>". $value."</td></tr>";
    }
echo "</table>";    
}

$capitales = ["France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome"];

afficherTableHTML($capitales);

// Purée j'aurais vraiment eu du mal !…

?>

<h2>Exercice 3</h2>

<a href='https://elan-formation.eu/' target='_blank'>Elan formations</a>

<h2>Exercice 4</h2>

<?php

function afficherTableHTML3col($array){
    echo "<table border=1><tr><th>Pays</th><th>Capitale</th><th>Wikipedia</th></tr>";
    ksort($array);
    foreach ($array as $key => $value){
        echo "<tr><td>".strtoupper($key)."</td><td>". $value."</td><td><a href='https://fr.wikipedia.org/wiki/".$value."' target='_blank'>".$value."</td></tr>";
    }
    echo "</table>";    
}

afficherTableHTML3col($capitales);

?>

<h2>Exercice 5</h2>

<?php

$nomsInput= ["Nom", "Prénom", "Ville"];

function afficherInput($array){
    echo "<form action='action.php' method='post'>";
   foreach ($array as $label){
    echo '<label style= "margin:1em 0 0 0; color:gray; font-family:sans-serif; font-size:small">'.$label.'</label><br>';
    echo "<input type='text' name=".$label."/></br>";  
   }     
   echo "</form>";
}        

afficherInput($nomsInput);

?>

<h2>Exercice 6</h2>

<?php

$elements = ["Monsieur","Madame","Mademoiselle"];

function alimenterListeDeroulante($array){
    echo"<form><br/>";
    echo "<select name='civilité'>";
    foreach ($array as $value){
        echo "<option value=".$value.">".$value."</option>";
    }
    echo "</select>";
    echo"</form><br/>";

}

alimenterListeDeroulante($elements);

?>

<h2>Exercice 7</h2>

<?php

// Faire un tableau associatif où les clés sont "choix 1", "choix 2" et "choix 3", et où les valeurs sont le fait d'être coché ou non.
// L'adapter à une fonction.

$elements = ["Choix 1" => "", "Choix 2" => "checked", "Choix 3" => ""];

function genererCheckbox($array){
    echo "<form>";
    foreach ($array as $key => $value){
        echo "<input type='checkbox' ".$value.">".$key."<br/>";
    }
    echo "</form>";
}

genererCheckbox($elements);

?>

<h2>Exercice 8</h2>

<?php

// function repeterImage($img, $repeat){
//     $img = str_repeat('<img src="http://my.mobirise.com/data/userpic/764.jpg" alt="dog"/>', $repeat);
//     echo $img;
// }

function repeterImage($url, $nb){
    for($i=1;$i<=$nb; $i++){
        echo "<img src='".$url."'/>";
    }
}

// le blocage que j'avais c'est que je ne comprenais pas (je ne sais pas pourquoi… ça m'étonne de ne pas avoir fini par trouver…)
// que le nombre à répéter devait aller dans le deuxième segment de $i dans la description de la boucle for.

$url = "http://my.mobirise.com/data/userpic/764.jpg";
repeterImage($url, 4);

?>

<h2>Exercice 9</h2>

<?php

$nomsRadio = ["Masculin","Féminin","Autre"];

function afficherRadio($array){
    echo "<form><br/>";
    for ($i=0; $i<count($array); $i++){
        echo "<input type='radio' name='sexe' value=".$array[$i].">".$array[$i]."<br/>";
        }
    echo "</form><br/>";

}

afficherRadio($nomsRadio);

?>

<h2>Exercice 10</h2>

<?php

$infos = ["Nom", "Prénom", "adresse e-mail", "ville", "sexe"];
afficherInput($infos);

$métier = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];
alimenterListeDeroulante($métier);
 
echo "<form><input type='submit' value='Envoyer le formulaire'></form>";

?>

<h2>Exercice 11</h2>

<?php

// Avoir une variable "chaine de caractère représentant une date"
// Afficher la date en toutes lettres
// En tirer une fonction

    $dateUN = '17-01-1985';
    setlocale(LC_ALL, 'fr_FR.UTF-8', 'fra');
    echo strftime('%A %d %B %Y', strtotime($dateUN));   





// totalement échoué à avoir la date en français, et pourtant j'ai cherché…
// ça ne marche pas parce que c'est MAC !


?>

<h2>Exercice 12</h2>

<?php

$tableauValeurs= [true,"texte",10,25.369,["valeur1","valeur2"]];

function affichage($array){
    foreach ($array as $value){
        echo var_dump($value);
        echo "</br>";
        }
}

affichage($tableauValeurs);

?>

<h2>Exercice 13</h2>

<?php

// Créer classe Voiture avec :
    // propriétés marque, modèle, nbPortes et vitesseActuelle
    // méthodes demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set)
    // vitesse initiale de chaque véhicule instancié est de 0.
    // faire aussi une méthode affichant toutes les infos du véhicule.
    // tester et afficher les tests.

//On crée nos objets en créant une nouvelle instance de la classe Voiture
    $V1 = new Voiture("Peugeot","408",5);
    $V2 = new Voiture("Citroën", "C4",3);

// utlisation des fonctions
echo "***INFOS VEHICULE 1 ***<br/>";
$V1->affichageInfos();
echo "***INFOS VEHICULE 2 ***<br/>";
$V2->affichageInfos();
// véhicule Peugeot démarre
$V1->demarrer();
// véhicule Peugeot accélère de 50 km/h
$V1->accelerer(50);
$V1->accelerer(30);
$V2->stopper();
$V2->accelerer(20);
$V1->accelerer(40);
$V1->ralentir(40);
$V1->stopper();

// Création de la classe, On donne des attributs/propriétés à la classe
   
class Voiture{
//propriétés
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesseActuelle;
    private $marcheArret;
    //Constructeur d'une instance de la classe
public function __construct ($marque="" ,$modele="",$nbPortes="", $vitesseActuelle=0, $marcheArret=false){
    $this->marque = $marque;
    $this->modele = $modele;
    $this->nbPortes = $nbPortes;
    $this->vitesseActuelle =  $vitesseActuelle;
    $this->marcheArret = $marcheArret;
}
    // méthodes
    public function demarrer(){    
        if (!$this->marcheArret){
            $this->marcheArret = true;
            echo "Le véhicule ".$this->affichageNom()." démarre<br/>";
        } else{
            echo "Le véhicule " .$this->getMarque()." ".$this->getModele()." est déjà démarré<br/>";
        }
    }    
    public function accelerer($vitesse){
        if ($this->marcheArret){
            $this->vitesseActuelle += $vitesse;
            echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." accélére à ".$this->vitesseActuelle." km/h<br/>"; 
        } else{
            echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." veut accélérer à ".$this->vitesseActuelle." km/h<br/>"; 
            echo "Pour accélerer, il faut démarrer le véhicule !<br/>";
            }
    }                  

    public function ralentir($vitesse){
        if ($this->marcheArret){
                $this->vitesseActuelle -= $vitesse;
                echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." ralentit à ".$this->vitesseActuelle." km/h<br/>"; 
                } else{
            echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." veut ralentir à ".$this->vitesseActuelle." km/h<br/>"; 
            echo "Pour ralentir, il faut démarrer le véhicule !<br/>";
            }          
    }
    
    public function stopper(){
        if ($this->marcheArret){
            $this->marcheArret = false;
            $vitesseActuelle = 0;
            echo "Le véhicule " .$this->getMarque()." ".$this->getModele()." est stoppé<br/>";
        } else{
            echo "Le véhicule " .$this->getMarque()." ".$this->getModele()." est déjà à l'arrêt<br/>";
        }
    }
// fonction d'affichage
public function affichageInfos(){
    echo "Nom et modèle du véhicule : ".$this->getMarque()." ".$this->getModele()."<br/> Nombre de portes : ".$this->getNbPortes()."<br/> Vitesse actuelle est de : ".$this->getVitesseActuelle()." km/h <br/>".$this->affichageMarche()."<br/>";
    }        
public function affichageNom(){
    return $this->getMarque()." ".$this->getModele();
}    
public function affichageMarche(){
    if ($this->marcheArret){
        return "Le véhicule est démarré<br/>";
    } else{
        return "Le véhicule est à l'arrêt<br/>";
    }
}
/**
 * Get the value of marque
 */ 
public function getMarque()
{
return $this->marque;
}

/**
 * Set the value of marque
 *
 * @return  self
 */ 
public function setMarque($marque)
{
$this->marque = $marque;

return $this;
}

    /**
     * Get the value of modèle
     */ 
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set the value of modèle
     *
     * @return  self
     */ 
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get the value of nbPortes
     */ 
    public function getNbPortes()
    {
        return $this->nbPortes;
    }

    /**
     * Set the value of nbPortes
     *
     * @return  self
     */ 
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }

    /**
     * Get the value of vitesseActuelle
     */ 
    public function getVitesseActuelle()
    {
        return $this->vitesseActuelle;
    }

    // /**
    //  * Set the value of vitesseActuelle
    //  *
    //  * @return  self
    //  */ 
    // public function setVitesseActuelle($vitesseActuelle)
    // {
    //     $this->vitesseActuelle = $vitesseActuelle;

    //     return $this;
    // }

    /**
     * Get the value of marcheArret
     */ 
    public function getMarcheArret()
    {
        return $this->marcheArret;
    }

    /**
     * Set the value of marcheArret
     *
     * @return  self
     */ 
    public function setMarcheArret($marcheArret)
    {
        $this->marcheArret = $marcheArret;

        return $this;
    }
}

?>

<h2>Exercice 14</h2>

<?php

$v1 = new VoitureTherm("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

class VoitureTherm{
    //propriétés
    protected $marque;
    protected $modele;
        //Constructeur d'une instance de la classe
    public function __construct ($marque="" ,$modele=""){
        $this->marque = $marque;
        $this->modele = $modele;
    }
    public function getInfos(){
        echo "<br/>". $this->getMarque()." ".$this->getModele();
        }            
    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

        /**
         * Get the value of modele
         */ 
        public function getModele()
        {
                return $this->modele;
        }

        /**
         * Set the value of modele
         *
         * @return  self
         */ 
        public function setModele($modele)
        {
                $this->modele = $modele;

                return $this;
        }
}

class VoitureElec extends VoitureTherm{
    public $autonomie;
    public function __construct ($marque="", $modele="", $autonomie=0){
        parent::__construct($marque,$modele);
        $this->autonomie = $autonomie;
    }
    public function getInfos(){
        parent::getInfos();
        echo " ".$this->getAutonomie();
    }

        /**
     * Get the value of autonomie
     */ 
    public function getAutonomie()
    {
        return $this->autonomie;
    }

    /**
     * Set the value of autonomie
     *
     * @return  self
     */ 
    public function setAutonomie($autonomie)
    {
        $this->autonomie = $autonomie;

        return $this;
    }
}

$v1->getInfos(); 
$ve1->getInfos(); 

?>

<h2>Exercice 15</h2>

<?php

$email1 = "elan@elan-formation.fr";
$email2 = "contact@elan";

// Validate e-mail
function validateMail($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo("L’adresse ".$email." est une adresse e-mail valide<br/>");
    } else {
        echo("L’adresse ".$email." est une adresse e-mail invalide<br/>");
    }
}    

validateMail($email1);
validateMail($email2);

?>

</body>
</html>