<!doctype html>

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Avizo</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="page-signin">

    <div class="center-block">
        <div class="center-block">
            <section class="logo">
                
                  <img class="center-block" src="../img/avizo-logo.png">
                
            </section>
        </div>
    </div>

    <div class="main-body">
        <div class="container">
            <div class="form-container">              

                <br/>

                <form class="form-horizontal">
                    <fieldset>
                        <div class="">
                                                   
                            <input class="center-block" name="email" type="text" placeholder="Adresse courriel">
                         
                        </div>
                        <br>
                        <div class="">                          
                            <input class="center-block" name="password" type="password" placeholder="Mot de passe">
                        
                        </div>   
                        <br>
                        <div class="">
                          <input type="submit" class="btn center-block" value="Se connecter">
                        </div>
                        <br>
                    </fieldset>
                </form>

                <section>
                    <p class="text-center"><a href="signin.html#/pages/forgot">Mot de passe oublié?</a></p>
                    <p class="text-center text-muted text-small">Pas de compte? <br><a href="signin.html#/pages/signup">Envoyer un message à l'administrateur</a></p>
                </section>
                
            </div>
        </div>
    </div>

</div>
</body>
	<!--   Core JS Files   -->
	<script src="../js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>