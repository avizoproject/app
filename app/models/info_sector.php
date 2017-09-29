<?php
require_once 'info_model.php';

class InfoSector extends InfoModel
{

    protected $table_name = 'secteur';

    protected $primary_key = "pk_secteur";

    protected $pk_secteur = 0;

    protected $nom_secteur = '';

    function __construct()
    {}

function getPk_secteur() {
    return $this->pk_secteur;
}

function getNom_secteur() {
    return $this->nom_secteur;
}

function setPk_secteur($pk_secteur) {
    $this->pk_secteur = $pk_secteur;
}

function setNom_secteur($nom_secteur) {
    $this->nom_secteur = $nom_secteur;
}

}

?>