<?php
/****************************************************************
Fichier : controller_reservation.php
Auteur :
Fonctionnalité :
Vérification:

======================================================

Dernière modification:

 *****************************************************************/
// Start the session
session_start();

require_once $_SERVER["DOCUMENT_ROOT"] . '/app/app/models/info_reservation.php';



/**
 * Description of
 */
class controller_reservation
{
    private $arrayReservation = array();
    private $InfosReservation;
    
    function __construct()
    {
        $this->arrayReservation[0] = isset($_GET['datedebut']) ? $_GET['datedebut'] : null;
        $this->arrayReservation[1] = isset($_GET['datefin']) ? $_GET['datefin'] : null;
        $this->arrayReservation[2] = isset($_GET['pkvehicule']) ? $_GET['pkvehicule'] : null;
        $this->arrayReservation[3] = $_SESSION['user']['fk_secteur'];
        $this->InfosReservation = new InfoReservation();
        
    }
    function ajoutReservation()
    {
        $this->InfosReservation->setDate_debut($this->arrayReservation[0]);
        $this->InfosReservation->setDate_fin($this->arrayReservation[1]);
        $this->InfosReservation->setFk_vehicule($this->arrayReservation[2]);
        $this->InfosReservation->setFk_utilisateur($this->arrayReservation[3]);
        $this->InfosReservation->setStatut(1);
        $this->InfosReservation->addDBObject();
    }

    function getInfosReservation(){
        return $this->InfosReservation;
    }

    function getarrayReservation(){
        return $this->arrayReservation;
    }
  
}
$reservControl = new controller_reservation();

if (isset($_GET['ajout'])) {
    $reservControl->ajoutReservation();
}elseif (isset($_GET['mod'])){

}

    if ($_SESSION['admin'] === 1)
        header("Location: http://localhost/app/app/views/reservation.php");
    else{
        header("Location: http://localhost/app/app/views/reservation.php");
    exit();
}

?>