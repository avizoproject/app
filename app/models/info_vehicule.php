<?php
require_once 'info_model.php';

class InfoVehicule extends InfoModel
{

    protected $table_name = 'vehicule';

    protected $primary_key = "pk_vehicule";

    protected $pk_vehicule = 0;

    protected $fk_marque = 0;
    
    protected $fk_modele = 0;
    
    protected $annee = '';
    
    protected $couleur = '';
    
    protected $fk_secteur = 0;
    
    protected $odometre = '';
    
    protected $plaque = '';
    
    protected $photo = '';
    
    protected $VIN = '';
    
    protected $date_achat = '';    
    
    protected $fk_statut = 0;

    function __construct()
    {}
    
function getPk_vehicule() {
    return $this->pk_vehicule;
}

function getFk_marque() {
    return $this->fk_marque;
}

function getFk_modele() {
    return $this->fk_modele;
}

function getAnnee() {
    return $this->annee;
}

function getCouleur() {
    return $this->couleur;
}

function getFk_secteur() {
    return $this->fk_secteur;
}

function getOdometre() {
    return $this->odometre;
}

function getPlaque() {
    return $this->plaque;
}

function getPhoto() {
    return $this->photo;
}

function getVIN() {
    return $this->VIN;
}

function getDate_achat() {
    return $this->date_achat;
}

function getFk_statut() {
    return $this->fk_statut;
}

function setPk_vehicule($pk_vehicule) {
    $this->pk_vehicule = $pk_vehicule;
}

function setFk_marque($fk_marque) {
    $this->fk_marque = $fk_marque;
}

function setFk_modele($fk_modele) {
    $this->fk_modele = $fk_modele;
}

function setAnnee($annee) {
    $this->annee = $annee;
}

function setCouleur($couleur) {
    $this->couleur = $couleur;
}

function setFk_secteur($fk_secteur) {
    $this->fk_secteur = $fk_secteur;
}

function setOdometre($odometre) {
    $this->odometre = $odometre;
}

function setPlaque($plaque) {
    $this->plaque = $plaque;
}

function setPhoto($photo) {
    $this->photo = $photo;
}

function setVIN($VIN) {
    $this->VIN = $VIN;
}

function setDate_achat($date_achat) {
    $this->date_achat = $date_achat;
}

function setFk_statut($fk_statut) {
    $this->fk_statut = $fk_statut;
}

function getListVehiculeSector ($user_sector){
include $_SERVER["DOCUMENT_ROOT"] . '/app/app/database_connect.php';
    
    $results = $conn->query('SELECT m.nom_marque, o.nom_modele FROM modele o INNER JOIN marque m ON o.fk_marque=m.pk_marque INNER JOIN vehicule v ON m.pk_marque = v.fk_marque WHERE v.fk_secteur=' .$user_sector. '');
    
    $allvehicule = array();
    while ($row = $results->fetch_assoc()) {
        $allvehicule[] = array(
            'nom_marque' => $row['nom_marque'],
            'nom_modele' => $row['nom_modele']
        );
    }  
    
    // Frees the memory associated with a result
    $results->free();

    // close connection
    $conn->close();
    
    return $allvehicule;
}

}

?>