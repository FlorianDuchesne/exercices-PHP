<?php

class Compte{
    protected $libelle;
    protected $solde;
    protected $devise;
    protected $titulaire;

        public function __construct($libelle="", $solde=0, $devise="", Titulaire $titulaire){
            $this->libelle = $libelle;
            $this->solde = $solde;
            $this->devise = $devise;
            $this->titulaire = $titulaire;
            $titulaire->ajouterCompte($this); // emploie la fonction "ajouter compte" dès la construction de l'objet, permettant de l'attribuer tout de suite au titulaire
        }

        function __toString(){
            return $this->libelle." ".$this->soldeInitial." ".$this->devise." ".$this->titulaire;
        }

        public function crediter($credit){
            $this->solde += $credit; 
            // (ancienne version, avant correction Stéphane)
            // $solde = $this->getSolde(); 
            // $solde += $credit;
            // $this->setSolde($solde);
            echo "<br/>Le compte ".$this->getLibelle()." a été crédité de ".$credit, $this->getDevise().", son solde est à présent de ". $this->solde, $this->getDevise();
        }

        public function debiter($debit){
            $this->solde -= $debit; 
            // (ancienne version, avant correction Stéphane)
            // $solde = $this->getSolde(); 
            // $solde -= $debit;
            // $this->setSolde($solde);
            echo "<br/>Le compte ".$this->getLibelle()." a été débité de ".$debit, $this->getDevise().", son solde est à présent de ". $this->solde, $this->getDevise();
        }

        public function virer($compteCredite, $virement){
            $this->debiter($virement);
            $compteCredite->crediter($virement);
            // (ancienne version, avant correction Stéphane)
            // $solde = $compteDebite->getSolde(); 
            // $solde -= $virement;
            // $compteDebite->setSolde($solde);
            // $solde = $compteCredite->getSolde();
            // $solde += $virement;
            // $compteCredite->setSolde($solde);
            // echo "<br/>Le compte ".$this->getLibelle()." a été débité de ".$virement, $this->getDevise().", son solde est à présent de ".$this->getSolde(), $this->getDevise();
            // echo "<br/>Le compte ".$compteCredite->getLibelle()." a été crédité de ".$virement, $compteCredite->getDevise().", son solde est à présent de ".$compteCredite->getSolde(), $compteCredite->getDevise();
        }

        public function infos(){
            echo "<br/>";
            echo $this->getLibelle()." solde : ".$this->getSolde()." devise : ".$this->getDevise()." propriétaire du compte : ".$this->getTitulaire();
        }
        
    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of soldeInitial
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of soldeInitial
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get the value of devise
     */ 
    public function getDevise()
    {
        return $this->devise;
    }

    /**
     * Set the value of devise
     *
     * @return  self
     */ 
    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get the value of titulaire
     */ 
    public function getTitulaire()
    {
        return $this->titulaire;
    }

    /**
     * Set the value of titulaire
     *
     * @return  self
     */ 
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }
}