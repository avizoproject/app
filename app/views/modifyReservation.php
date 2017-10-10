<?php
/****************************************************************
		File : modifyReservation.php
		Authour : Jérémy Besserer-Lemay
		Functionality : Page to modify a vehicule's reservation
			Date: 2017-10-03

			Last modification:
			2017-10-03     Jérémy Besserer-Lemay   1 Creation
      2017-10-06     Frédérick Morin         2 Ajout calendrier
      2017-10-03     Frédérick Morin         3 Modification calendrier

 ******************************************************************/
session_start();
error_reporting(0);
require_once $_SERVER["DOCUMENT_ROOT"] . '/app/app/models/info_reservation.php';
$gReservation = new InfoReservation();
?>
<html>
    <head>
        <meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Modification de reservation</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!-- Bootstrap core CSS     -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" />

        <!--  Material Dashboard CSS    -->
        <link href="../css/material-dashboard.css" rel="stylesheet"/>

        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link rel="stylesheet" href="../css/table.css">
        <link href="../css/demo.css" rel="stylesheet" />

        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

        <!--     Calendar     -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
      	<link rel="stylesheet" href="../css/calendar.css"> <!-- Resource style -->
    </head>
    <body>

	<div class="wrapper">
	    <div class="sidebar" data-color="purple" data-image="../img/sidebar-1.jpg">
			<!--
	        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
		    Tip 2: you can also add an image using data-image tag

			-->

			<div class="logo">
				<img class="center-block" src="../img/avizo-logo.png">
			</div>


	    	<div class="sidebar-wrapper">
				<ul class="nav">
	                <li>
	                    <a href="dashboard.html">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="user.html">
	                        <i class="material-icons">person</i>
	                        <p>User Profile</p>
	                    </a>
	                </li>
	                <li class="active">
	                    <a href="table.html">
	                        <i class="material-icons">content_paste</i>
	                        <p>Table List</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="typography.html">
	                        <i class="material-icons">library_books</i>
	                        <p>Typography</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="icons.html">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Icons</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="maps.html">
	                        <i class="material-icons">location_on</i>
	                        <p>Maps</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="notifications.html">
	                        <i class="material-icons text-gray">notifications</i>
	                        <p>Notifications</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
		</div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Gestionnaire de réservations</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">5</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								</ul>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
	 						   </a>
							</li>
						</ul>
					</div>
				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Simple Table</h4>
	                                <p class="category">Here is a subtitle for this table</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table" id="example">
	                                    <thead class="text-primary">
	                                    	<th>ID Réservation</th>
	                                    	<th>Vehicule</th>
	                                    	<th>Réservé par</th>
						                    <th>Date de début</th>
                                                <th>Date de retour prévu</th>
	                                    </thead>
	                                    <tbody>
                                                <?php $gReservation->getListReservations(); ?>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
	                    </div>
                            <div class="buttons">
                                <div class="centerbuttons">
                                    <button class="btn btn-default" name="Ajouter" id="Ajouter">Ajouter</button>
                                    <button class="btn btn-default" name="Modifier" id="Modifier">Modifier</button>
                                    <button class="btn btn-default" name="Consulter" id="Consulter">Consulter</button>
                                </div>
                            </div>
	                </div>
	            </div>
              <div class="cd-schedule loading">
              	<div class="timeline">
              		<ul>
                    <?php $gReservation->getReservationsNamesCalendar(); ?>
              		</ul>
              	</div>

              	<div class="events">
              		<ul>
                    <?php $gReservation->getReservationsCalendar(); ?>
              		</ul>
              	</div>

              	<div class="event-modal">
              		<header class="header">
              			<div class="content">
              				<span class="event-date"></span>
              				<h3 class="event-name"></h3>
              			</div>

              			<div class="header-bg"></div>
              		</header>

              		<div class="body">
              			<div class="event-info"></div>
              			<div class="body-bg"></div>
              		</div>

              		<a href="#0" class="close">Close</a>
              	</div>

              	<div class="cover-layer"></div>
              </div>
	        </div>

	        <footer class="footer">
	            <div class="container-fluid">
	                <nav class="pull-left">
	                    <ul>
	                        <li>
	                            <a href="#">
	                                Home
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Company
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Portfolio
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                               Blog
	                            </a>
	                        </li>
	                    </ul>
	                </nav>
	            </div>
	        </footer>
	    </div>
	</div>
    </body>

    <!--   Core JS Files   -->


        <script src="../js/jquery-3.1.0.min.js" type="text/javascript"></script>
        <script src="../js/jquery.dataTables.min.js"></script>

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

                var table = $('#example').DataTable();

                //modifie les styles pour la sélection de rangée
                $('#example tbody').on('click', 'tr', function () {
                    if ($(this).hasClass('selected')) {
                        $(this).removeClass('selected');
                    } else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                    }
                });

                //clic modifier, envoie en get le id selectionné
                $('#Modifier').click(function () {

                    if ($('#example tr.selected td:first').length > 0) {
                        var idcont = $('#example tr.selected td:first').html();
                        window.location.href = "http://localhost/Presentation/VueModifierClient?client=" + idcont + "";
                    }else{
                        swal({
                                title:"",
                                text:"Vous devez sélectionner un client.",
                                type:"warning",
                                allowOutsideClick : true
                            });
                    }
                });

                //clic consulter, envoie en get le id selectionné
                $('#Consulter').click(function () {
                    if ($('#example tr.selected td:first').length > 0) {
                        var idcons = $('#example tr.selected td:first').html();
                        window.location.href = "http://localhost/Presentation/VueConsulterClient?client=" + idcons + "";
                    }else{
                        swal({
                                title:"",
                                text:"Vous devez sélectionner un client.",
                                type:"warning",
                                allowOutsideClick : true
                            });
                    }
                });

                //clic ajouter
                $('#Ajouter').click(function () {
                    window.location.href = "http://localhost/Presentation/VueAjouterClient";
                });

    	});
	</script>
  <script src="../js/calendarModernizr.js"></script>
  <script>
  	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
  </script>
  <script src="../js/calendarMain.js"></script> <!-- Resource jQuery -->
</html>
