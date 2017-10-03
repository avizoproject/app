<?php
require_once 'info_model.php';

class InfoReservation extends InfoModel
{

    protected $table_name = 'reservation';

    protected $primary_key = "pk_reservation";

    protected $pk_reservation = 0;

    protected $date_debut = '';

    protected $date_fin = '';

    protected $fk_vehicule = 0;

    protected $fk_utilisateur = 0;
    
    protected $statut = 0;

    function __construct()
    {}


function getPk_reservation() {
    return $this->pk_reservation;
}

function getDate_debut() {
    return $this->date_debut;
}

function getDate_fin() {
    return $this->date_fin;
}

function getFk_vehicule() {
    return $this->fk_vehicule;
}

function getFk_utilisateur() {
    return $this->fk_utilisateur;
}

function getFk_statut_reservation() {
    return $this->fk_statut_reservation;
}

function setPk_reservation($pk_reservation) {
    $this->pk_reservation = $pk_reservation;
}

function setDate_debut($date_debut) {
    $this->date_debut = $date_debut;
}

function setDate_fin($date_fin) {
    $this->date_fin = $date_fin;
}

function setFk_vehicule($fk_vehicule) {
    $this->fk_vehicule = $fk_vehicule;
}

function setFk_utilisateur($fk_utilisateur) {
    $this->fk_utilisateur = $fk_utilisateur;
}

function setStatut($statut) {
    $this->statut = $statut;
}


}

?>