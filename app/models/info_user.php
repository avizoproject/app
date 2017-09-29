<?php
require_once 'info_model.php';

class InfoUser extends InfoModel
{

    protected $table_name = 'utilisateur';

    protected $primary_key = "pk_utilisateur";

    protected $pk_utilisateur = 0;

    protected $nom = '';
    
    protected $prenom = '';
    
    protected $telephone = '';
    
    protected $courriel = '';
    
    protected $mot_de_passe = '';
    
    protected $fk_statut = 0;
    
    protected $fk_secteur = 0;

    function __construct()
    {}

function getPk_utilisateur() {
    return $this->pk_utilisateur;
}

function getNom() {
    return $this->nom;
}

function getPrenom() {
    return $this->prenom;
}

function getTelephone() {
    return $this->telephone;
}

function getCourriel() {
    return $this->courriel;
}

function getMot_de_passe() {
    return $this->mot_de_passe;
}

function getFk_statut() {
    return $this->fk_statut;
}

function getFk_secteur() {
    return $this->fk_secteur;
}

function setPk_utilisateur($pk_utilisateur) {
    $this->pk_utilisateur = $pk_utilisateur;
}

function setNom($nom) {
    $this->nom = $nom;
}

function setPrenom($prenom) {
    $this->prenom = $prenom;
}

function setTelephone($telephone) {
    $this->telephone = $telephone;
}

function setCourriel($courriel) {
    $this->courriel = $courriel;
}

function setMot_de_passe($mot_de_passe) {
    $this->mot_de_passe = $mot_de_passe;
}

function setFk_statut($fk_statut) {
    $this->fk_statut = $fk_statut;
}

function setFk_secteur($fk_secteur) {
    $this->fk_secteur = $fk_secteur;
}

}

?>