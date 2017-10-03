<?php
/****************************************************************
		Fichier : login.php
		Auteur : Pierre-Marc Baril
		Fonctionnalité : Authentification pour le site web
			Date: 2017-10-03

			Vérification:

			Historique de modifications:
			2017-10-03      Pierre-Marc Baril  1 Création
 ******************************************************************/
// Start the session
session_start();
if (session_status() == true) {
    $_SESSION["loggedIn"] = false;
    session_unset();
    session_destroy();
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>      
        <?php
        if(isset($_GET['erreur']))
            {
                $message = "Le nom d\'utilisateur ou le mot de passe est erronné.";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        ?>
    </head>
    <body>
        
        
        <div id='theForm'>
            <form action="http://localhost/app/app/controllers/controller_login.php" method="post">
              <input type="text" name="email" id="password" placeholder="Courriel" size="45"> 
              <br><br>
              <input type="password" name="password" id="password" placeholder="Mot de passe" size="45">
              <br><br>
              <a class='oublie' href='../PageCommune/erreur404.php'>Mot de passe oublié</a>
              <br><br>
              <input type="submit" id="connexion" class="connexion" value="Connexion">
              <button type="button" name="inscrire" id="inscrire" onclick="location.href='../app/views/pages/404.html';">S'inscrire</button>
            </form> 
            <br>
            <img id='facebook' src='../images/icones/facebook.png'>
        </div>
    </body>
</html>