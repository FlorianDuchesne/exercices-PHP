<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>L'algo c'est la vie</title>
</head>

<body>
  <h2>Exercice 1</h2>
  <?php
  $phrase = "Notre formation DL commence aujourd'hui";
  echo '<p>La phrase &laquo; '.$phrase.' &raquo; contient '.strlen($phrase).' caractères.</p>';
  ?>
  <h2>Exercice 2</h2>
  <?php
  echo '<p>La phrase &laquo; '.$phrase.' &raquo; contient '.str_word_count($phrase).' mots.</p>';
  ?>
  <h2>Exercice 3</h2>
  <?php 
  $newPhrase = str_replace("aujourd'hui", "demain", $phrase);
  echo "Voici la nouvelle phrase: $newPhrase";
  ?>
  <h2>Exercice 4</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <input type="text" name="phrase" id="phrase" placeholder="Donnez une phrase">
    <input type="submit" value="Est-ce un palindrome?">
  </form>
  <?php
    function isPalindrome($phrase){
      $phrase = strtolower(str_replace(" ", "", $phrase));
      $reverse = strrev($phrase);
      if($reverse === $phrase){
        return "<p>Cette phrase est un palindrome</p>";
      } else {
        return "<p>Cette phrase n'est pas un palindrome</p>";
      }
    }

    if(isset($_GET['phrase'])){
      echo isPalindrome($_GET['phrase']);
    }
  ?>

  <h2>Exercice 5</h2>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <input type="text" name="montantFrancs" id="montantFrancs" placeholder="Donnez un montant en francs">
    <input type="submit" value="Convertir en euros">
  </form>
  <?php
  isset($_GET['montantFrancs']) ? $montantFrancs = ($_GET['montantFrancs']) : $montantFrancs = 0;
  isset($_GET['quantite']) ? $quantite = ($_GET['quantite']) : $quantite = 0;
  isset($_GET['prixHT']) ? $prixHT = ($_GET['prixHT']) : $prixHT = 0;
  isset($_GET['tva']) ? $tva = ($_GET['tva']) : $tva = 0;

  $conversionEuros = round(($montantFrancs/6.55957), 2); 
  echo '<p>Montant en Francs : '. $montantFrancs.'</p>';
  echo '<p>'. $montantFrancs.' francs = '.$conversionEuros.'€</p>';
  ?>  

  <h2>Exercice 6</h2>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <input type="text" name="quantite" id="quantite" placeholder="Donnez une quantité d'articles">
    <input type="text" name="prixHT" id="prixHT" placeholder="Donnez le prix unitaire de l'article">
    <input type="text" name="tva" id="tva" placeholder="Donnez le taux de tva en décimale de l'article">
    <input type="submit" value="montant de la facture">
  </form>
  <?php
  $montantFacture = (($prixHT * ($tva + 1)) * $quantite);
  echo $montantFacture;

  // J'ai fait n'importe quoi pour cet exercice ! O_O
  // Il manque plein de trucs : définitions des variables (formulaire complètement inutile !!!)
  // Et il manque aussi l'écriture à la fin pour fournir les réponses !
   
  ?>

  <h2>Exercice 7</h2>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <input type="text" name="age" id="age" placeholder="Quel est l'âge de l'enfant ?">
    <input type="submit" value="catégorie">
  </form>
  <?php
    isset($_GET['age']) ? $age = ($_GET['age']) : $age = 0;
    if ($age < 6) {
      echo "Cette catégorie d'âge n'est pas gérée";
    } elseif ($age < 8) {
      echo '<p>L’enfant qui a '. $age .' ans appartient à la catégorie « Poussin »</p>';
    } elseif ($age < 10) {
      echo '<p>L’enfant qui a '. $age .' ans appartient à la catégorie « Pupille »</p>';
    } elseif ($age < 12) {
      echo '<p>L’enfant qui a '. $age .' ans appartient à la catégorie « Minime »</p>';
    } else {
      echo '<p>L’enfant qui a '. $age .' ans appartient à la catégorie « Cadet »</p>';
    }
  ?>  

  <h2>Exercice 8</h2>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <input type="text" name="nombre" id="nombre" placeholder="Rentrez un nombre">
    <input type="submit" value="table de multiplication">
  </form>
  <?php
    isset($_GET['nombre']) ? $nombre = ($_GET['nombre']) : $nombre = 0;
    // faire une boucle. Incrémenter la valeur de la table, publier le produit. Jusqu'à 10.
    echo '<p>Table de '. $nombre .' :</p>';
    for ($i=1; $i<11; $i++) {
      $produit = $i * $nombre;
      echo '<p>'. $i. 'x '. $nombre.' = '. $produit;
  }
  $i = 1;
while ($i <= 10) {
    $produit = $i * $nombre;
    echo '<p>'. $i. 'x '. $nombre.' = '. $produit;
    $i++;
}
  ?>

  <h2>Exercice 9</h2>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <input type="text" name="age" id="age" placeholder="Quel est votre âge ?">
    <input type="text" name="sexe" id="sexe" placeholder="Quel est votre sexe ?">
    <input type="submit" value="imposabilité">
  </form>
  <?php
    isset($_GET['age']) ? $age = ($_GET['age']) : $age = 0;
    isset($_GET['sexe']) ? $sexe = ($_GET['sexe']) : $sexe = 0;
    echo '<p>Age : '.$age.'</p>';
    echo '<p>Sexe : '.$sexe.'</p>';
    if ($sexe == 'M' and $age > 20){
        echo '<p>La personne est imposable.</p>';
      } elseif ($sexe == 'F' and $age >= 18 and $age <= 35){
        echo '<p>La personne est imposable.</p>';
      } else {
        echo '<p>La personne est non imposable.</p>';
    } 
  ?> 

    <h2>Exercice 10</h2>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <input type="text" name="montant" id="montant" placeholder="Montant à payer :">
    <input type="text" name="paiement" id="paiement" placeholder="Montant versé :">
    <input type="submit" value="rendu monnaie">
  </form>
  <?php
    isset($_GET['montant']) ? $montant = ($_GET['montant']) : $montant = 0;
    isset($_GET['paiement']) ? $paiement = ($_GET['paiement']) : $paiement = 0;
    $difference = ($paiement - $montant);
    echo '<p>Reste à payer : '. $difference.' €</p>';
    $nbBilletsDix = 0;
      while ($difference > 10){
        $difference = $difference - 10;
        $nbBilletsDix = $nbBilletsDix + 1;
      }  
    echo $nbBilletsDix.' billets de 10 € -';
    $nbBilletsCinq = 0;
      while ($difference > 5){
        $difference = $difference - 5;
        $nbBilletsCinq = $nbBilletsCinq + 1;
      }
      echo $nbBilletsCinq.' billets de 5 € -';
    $nbPiecesDeux = 0;
      while ($difference > 2){
        $difference = $difference - 2;
        $nbPiecesDeux = $nbPiecesDeux + 1;
      }
      echo $nbPiecesDeux.' pièces de 2 € -';
    $nbPiecesUn = 0;
      while ($difference >= 1){
        $difference = $difference - 1;
        $nbPiecesUn = $nbPiecesUn + 1;
      }  
      echo $nbPiecesUn.' pièces de 1 € -'; 
  ?> 

  <h2>Exercice 11</h2>

  <?php
  // Créer un tableau avec quatre marques de voitures.
  //Afficher le nombre de valeurs du tableau
  //Extraire les valeurs du tableau et en faire une liste à puces !…
  $array = array('Peugeot', 'Renault', 'BMW', 'Mercedes', 'Toyota');
  list($a, $b, $c, $d, $e) = $array;
  echo'<p>Il y a '. count($array).' marques de voitures dans le tableau :</p>';
  echo "<ul><li>$a<li>$b<li>$c<li>$d<li>$e</ul>";
?>

  <h2>Exercice 12</h2>

<?php

//CORRECTION STEPHANE  (---> essayer de le refaire pour me l'appropier, le comprendre)// 

    $ttPersonnes = [["Mickael", "FRA"], ["Virgile", "ESP"], ["Marie-Claire", "ENG"], ["Frank", "DEU"], ["Sophia", "ITA"]] ;
    $tSalutations = ["FRA" => "Bonjour", "ESP" => "Hola", "ENG" => "Hello", "DEU" => "Guten Tag"] ;
    asort($ttPersonnes); // tri par ordre croissant des valeurs
    foreach ($ttPersonnes as list($sPrenom, $sLangue)) {
        if (array_key_exists($sLangue, $tSalutations))
            printf ("%s %s<br>", $tSalutations[$sLangue], $sPrenom) ;
        else
            printf ("Langue non gérée pour %s !<br>", $sPrenom) ;
    }
    
    echo"<br>" ;
    
    $tPrenomLangue = ["Mickael" => "FRA", "Virgile" => "ESP", "Marie-Claire" => "ENG", "Frank" => "DEU", "Sophia" => "ITA"] ;
    
    ksort($tPrenomLangue); // tri par ordre croissant des clés
    
    foreach ($tPrenomLangue as $sPrenom => $sLangue) {
        if (array_key_exists($sLangue, $tSalutations))
            printf ("%s %s<br>", $tSalutations[$sLangue], $sPrenom) ;
        else
            printf ("Langue non gérée pour %s !<br>", $sPrenom) ;
    }

///// FIN CORRECTION

// créer un tabeau avec où les index sont des prénoms et les valeurs, la langue associée au prénom
// Dire bonjour dans la langue associée, suivi du prénom

// $langues = ["FRA" => "Mickaël", "ESP" => "Virgile", "ENG" => "Marie-Claire"];
// $bonjour = ["FRA" => "Salut", "ESP" => "Hola", "ENG" => "Hello"];

// $fra = array('Mickaël', 'Salut');
// $esp = array('Virgile', 'Hola');
// $eng = array('Marie-Claire', 'Hello');
//   echo '<p>'. $fra[1] . ' ' . $fra[0] .'</p>';
//   echo '<p>'. $esp[1] . ' ' . $esp[0] .'</p>';
//   echo '<p>'. $eng[1] . ' ' . $eng[0] .'</p>';


$langues = array (
  array("FRA","Mickaël","Salut"),
  array("ESP","Virgile","Hola"),
  array("ENG","Marie-Claire","Hello"),
);
$i = 0;
while ($i != 3){
  echo '<p>'. $langues[$i][2].' '.$langues[$i][1].'</p>';
  $i++;
}

// VARIANTE : j'y arrive pas… j'arrive à faire le tri, mais pas à lister le tableau trié…

?>

  <h2>Exercice 13</h2>

<?php
// Calculer la moyenne des notes d'un élève, déjà réunies dans un tableau.
// Additionner les valeurs, les diviser par leur nombre
// Arrondir à deux décimales
$notes = array(10, 12, 8, 19, 3, 16, 11, 13, 9);
$nombreNotes = 9;
$sommeNotes = 0;
for ($i=0; $i<9; $i++) {
  $sommeNotes = $notes[$i] + $sommeNotes;
}
$moyenne = $sommeNotes / $nombreNotes;
echo '<p>'.round($moyenne, 2).'</p>';

// Alexis l'a fait en vachement mieux, vachement plus court : à reprendre ! //

?>

  <h2>Exercice 14</h2>
<?php

$dateNaissance = date("17-01-1985");
$dateCourante = date("21-05-2018");
$interval = date_diff (date_create($dateNaissance) , date_create($dateCourante));
echo $interval->format("%y ans %m mois %d jours");
?>

<h2>Exercice 15</h2>
<?php

$p1 = new Personne("Durand", "Paul", "1984-05-05");

echo $p1->getNom()." ".$p1->getPrenom()."<br/>";
$p1->setPrenom("Paulette"); 
echo $p1->getNom()." ".$p1->getPrenom()."<br/>";
echo $p1->getAge()."<br/>";

class Personne {
  private $nom;
  private $prenom;
  private $dateNaissance;

public function __construct($nom, $prenom, $dateNaissance){
  $this->nom = $nom;
  $this->prenom = $prenom;
  $this->dateNaissance = $dateNaissance;
}

public function getAge(){
  $dateCourante = new DateTime('now');
  $dateNaissance = new DateTime($this->getDateNaissance());
  $interval = $dateCourante->diff($dateNaissance);
  $age = $interval->format('%y');
  echo $age;  
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
}

?>

</body>
</html>
