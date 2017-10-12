<?php
session_start();
$anObject = null;
require_once $_SERVER["DOCUMENT_ROOT"] . '/app/app/models/info_vehicule.php';
$dateDebut = $_GET['datedebut'];
$dateFin = $_GET['datefin'];

var_dump($_GET);
$InfoVehicule = new InfoVehicule();
if(isset($_GET['id'])== true){
    $InfoVehicule->getListVehiculeSectorModif($_GET['id'],$_SESSION['user']['fk_secteur'], $dateDebut, $dateFin);
}else{
    $InfoVehicule->getListVehiculeSector($_SESSION['user']['fk_secteur'], $dateDebut, $dateFin);
}

?>