<?php
/****************************************************************
 Fichier : controller_login.php
 Auteur :
 Fonctionnalité :
 Vérification:
 
 ======================================================
 
 Dernière modification:
 
 *****************************************************************/
require_once $_SERVER["DOCUMENT_ROOT"] . '/app/app/models/info_client.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/app/app/models/info_user.php';
// Start the session
session_start();
if(isset($_GET['erreur']))
{
    $message = "Le nom d\'utilisateur ou le mot de passe est erronné.";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
/**
 * Description of
 */
class controller_login
{
    private $infosLogin = array();
    private $InfosUtilisateur;
    private $Handshake = false;
    private $allUsers = array();
    function __construct()
    {
        $this->infosLogin[0] = isset($_POST['email']) ? $_POST['email'] : null;
        $this->infosLogin[1] = isset($_POST['password']) ? $_POST['password'] : null;
        $this->InfosUtilisateur = new infoUser();
        $this->allUsers = $this->InfosUtilisateur->getListOfAllDBObjects();
       
    }
    function login()
    {
        
        foreach ($this->allUsers as $row) {
            if ($row['courriel'] == $this->infosLogin[0] && $row['mot_de_passe'] == $this->infosLogin[1]) {
                echo "success ";
                $this->Handshake = true;
            }
        }
    }
    
    function getInfosUtilisateur(){
        return $this->InfosUtilisateur;
    }
    
    function getInfosLogin(){
        return $this->infosLogin;
    }
    function getHs()
    {
        return $this->Handshake;
    }
}
$loginControl = new controller_login();
$loginControl->login();
if ($loginControl->getHs() == true) {
    $user = $loginControl->getInfosUtilisateur()->getUser($loginControl->getInfosLogin()[0]);
    $_SESSION['user']=array();
    $_SESSION['user']=$user;
    $_SESSION['admin'] = $user['fk_statut'];
    $_SESSION['email'] =$user['courriel'];
    echo $_SESSION['admin'];
    if ($_SESSION['admin'] === 1)
        echo "Id user admin :".$_SESSION['admin'];
    else 
        echo "id user non admin".$_SESSION['admin'] ;
    exit();
}
else{
    header("Location: http://localhost/infoplusplus/Info++/index.php?erreur=1");
    exit();
}
?>