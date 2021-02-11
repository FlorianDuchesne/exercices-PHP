<?php 
//On crée nos objets en créant une nouvelle instance de la classe Personne
$p1 = new Personne("Durand","Paul","1984-05-05");
$p2 = new Personne("Leblanc", "Gandalf","1984-05-04");
$p3 = new Personne("Bidule", "Truc", "2000-12-12");
$p4 = new Personne("Bidule", "Truc", "2000-12-12");
//On affiche le nom/prénom de nos personnes crées
echo $p1->getNom()." ".$p1->getPrenom()."<br/>";
echo $p2->getNom()."<br/>";
//On change le prenom de p1 en utilisant la méthode publique setPrenom afin d'attribuer
//une valeur au prenom, puis on affiche le nouveau prénom
$p1->setPrenom("Paulette");
echo $p1->getNom()." ".$p1->getPrenom()."<br/>";
echo $p3;
echo $p3->getNom()." ".$p3->getPrenom()."<br/>"; 
echo $p1->calculerAge()."<br/>"; 
echo $p3->getNom()." ".$p3->getPrenom()." à ".$p3->calculerAge()." ans "."<br/>";
// Création de la classe, On donne des attributs/proprétés à la classe
class Personne{
private $nom;
    private $prenom;
    private $dateNaissance;
//Constructeur d'une instance de la classe
public function __construct ($nom="" ,$prenom="",$dateNaissance=""){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->dateNaissance = $dateNaissance;
}
//Les getters nous permettent d'accéder à la valeur d'une propriété
//Les setters permmettent d'attribuer une valeur à un propriété
    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }    /**
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
}    /**
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
    //fonction personnalisée pour calculer l'âge d'une personne.
    public function calculerAge()
    {
        $date1 = new DateTime($this->getDateNaissance());
        $date2 = new DateTime("now"); 
        $interval = $date1->diff($date2); 
        $age = $interval->format('%y'); 
        return $age; 
    }
    // Méthode "magique", à utiliser pour afficher le contenu d'une instance de la classe (sous forme de "string")
    public function __toString()
    {
        return $this->nom." ".$this->prenom;
    }
}
