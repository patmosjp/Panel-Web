<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['appms']);
// Delete all session variables
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Panel de Administración | Nemesis GPS Tracker Dealers</title>

  <link href="css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
    <div class="signinpanel">
        
        <div class="row">
            
            <div class="col-md-7">
                
                <div class="signin-info">
                    <div class="logopanel"><img src="images/logog.png" ></div><!-- logopanel -->
                
                    <div class="mb20"></div>
                
                    <h5><strong>Panel de Administración | Nemesis GPS Tracker Dealers</strong></h5>
                    <ul>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> GPS Dealer Manager</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Comunicacion con usuarios</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Soporte a GPS Tracker</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Reportes</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Control de flota</li>
                    </ul>
                    <div class="mb20"></div>
                </div><!-- signin0-info -->
            
            </div><!-- col-sm-7 -->
            
            <div class="col-md-5">
                
                <form method="post" action="power/inus.php">
                    <h4 class="nomargin">Ingresar</h4>
                    <p class="mt5 mb20">Ingreso a su cuenta.</p>
                
                    <input type="text" class="form-control uname" placeholder="Usuario" id="user"  name="user"/>
                    <input type="password" class="form-control pword" placeholder="Contraseña"  id="pass"  name="pass"/>
                    <a href=""><small>Olvido su acceso?</small></a>
                    <button class="btn btn-success btn-block">Ingreso</button>
                    
                </form>
            </div><!-- col-sm-5 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2014. All Rights Reserved. Nemesis GPS Tracker
            </div>
            <div class="pull-right">
                Created By: <a href="http://www.nemesisla.com" target="_blank">Globaltronic Panama S.A</a>
            </div>
        </div>
        
    </div><!-- signin -->
  
</section>


<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/retina.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>
