<?php

require './classes/Titulaire.php';
require './Classes/Compte.php';
$titulaire1 = new Titulaire("Dupont", "Henri", "06-07-1988", "Cherbourg");
$titulaire2 = new Titulaire("Dumont", "Delphine", "21-12-1970", "Strasbourg");
$compte1 = new Compte("livret A", "1000", "€", $titulaire1);
$compte2 = new Compte("compte courant", "700", "€", $titulaire1);
$compte3 = new Compte("compte courant", "2000", "€", $titulaire2);

// lorsqu'on crée un nouveau compte, l'objet 'titulaire de compte' (clé étrangère) fait partie des attributs.
// Dans les attributs figure aussi l'utilisation de la fonction d'ajout de compte au titulaire.
// Cette fonction permet, dans l'objet 'titulaire de compte', de rajouter le compte crée au tableau de comptes du titulaire

echo $titulaire1;
echo "<br/>";
echo $titulaire2;
echo "<br/>";
$compte1->crediter(200);
$compte1->debiter(200);
Compte::virer($compte2, $compte1, 200);
echo "<br/>";
$titulaire1->infos();
echo "<br/>";
$titulaire2->infos();
$compte1->infos();
