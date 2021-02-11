<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

require 'Auteur.php';
require 'Livre.php';
require 'Editeur.php';

$ed1 = new Editeur ('Stock');
$ed2 = new Editeur ('Seuil');
$a1 = new Auteur ('Stephen', 'King');
$a2 = new Auteur ("Robert Louis", "Stevenson");
$l1 = new Livre ('Shining', $a1, $ed1, 500, 1970);
$l2 = new Livre ("l'île au trésor", $a2, $ed1, 250, 1885);
$l3 = new Livre ("Docteur Jekyll et Mister Hyde", $a2, $ed2, 200, 1890);
$l4 = new Livre ("Voyage avec un âne dans les Cévennes", $a2, $ed1, 278, 1979);
$l5 = new Livre ("Carrie", $a1, $ed2, 600, 1980);

$tableau = array($l1, $l2, $l3, $l4, $l5);

echo "collection ". $ed1." : <br/>";
Editeur::collection($tableau, $ed1);
echo "<br/>";
echo "collection ". $ed2." : <br/>";
Editeur::collection($tableau, $ed2);
echo "<br/>";
echo "Bibliographie de ".$a1." : <br/>";
Auteur::bibliographie($tableau, $a1);
echo "<br/>";
echo "Bibliographie de ".$a2." : <br/>";
Auteur::bibliographie($tableau, $a2);
echo "<br/>";
Auteur::auteuris($l1);
Auteur::auteuris($l2);
Auteur::auteuris($l3);
Editeur::editeuris($l1);
Editeur::editeuris($l2);
Editeur::editeuris($l3);


// Auteur::bibliographie($tableau, $a2);
// $a2->bibliographie($tableau, $a2);
// $a2->bibliographie($tableau, $a2);
// Livre::test($tableau);


?>
</body>
</html>

