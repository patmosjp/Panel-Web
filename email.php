<?
include ("inc/connect.php");

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['appms'])) {
header('Location: http://registro.nemesistracker.com/wpanel/');
}

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
  <link href="css/helvetica.css.html" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
  <div class="leftpanel">
    
    <div class="logopanel">
        <h1><span>[</span> bracket <span>]</span></h1>
    </div><!-- logopanel -->
    
    <div class="leftpanelinner">
        
        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">   
            <div class="media userlogged">
                <img alt="" src="images/photos/loggeduser.png" class="media-object">
                <div class="media-body">
                    <h4><?=$_GET['us']?></h4>
                </div>
            </div>
          
            <h5 class="sidebartitle actitle">Cuenta</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="profile.html"><i class="fa fa-user"></i> <span> Mi Perfil </span></a></li>
              <li><a href=""><i class="fa fa-cog"></i> <span> Configuracion </span></a></li>
              <li><a href=""><i class="fa fa-question-circle"></i> <span>Ayuda</span></a></li>
              <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Salir</span></a></li>
            </ul>
        </div>
      
      <h5 class="sidebartitle">Navegacion</h5>
      <? include ("menu.php") ?>
      <!--
      <ul class="nav nav-pills nav-stacked nav-bracket">
        <li><a href="panel.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="active"><a href="email.php"><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span>Mensajes</span></a></li>
      -->
        <!--
        <li class="nav-parent"><a href=""><i class="fa fa-edit"></i> <span>Forms</span></a>
          <ul class="children">
            <li><a href="general-forms.html"><i class="fa fa-caret-right"></i> General Forms</a></li>
            <li><a href="form-layouts.html"><i class="fa fa-caret-right"></i> Form Layouts</a></li>
            <li><a href="form-validation.html"><i class="fa fa-caret-right"></i> Form Validation</a></li>
            <li><a href="form-wizards.html"><i class="fa fa-caret-right"></i> Form Wizards</a></li>
            <li><a href="wysiwyg.html"><i class="fa fa-caret-right"></i> WYSIWYG Text Editor</a></li>
          </ul>
        </li>
        -->
        <!--
        <li class="nav-parent"><a href=""><i class="fa fa-suitcase"></i> <span>UI Elements</span></a>
          <ul class="children">
            <li><a href="buttons.html"><i class="fa fa-caret-right"></i> Buttons</a></li>
            <li><a href="icons.html"><i class="fa fa-caret-right"></i> Icons</a></li>
            <li><a href="typography.html"><i class="fa fa-caret-right"></i> Typography</a></li>
            <li><a href="alerts.html"><i class="fa fa-caret-right"></i> Alerts &amp; Notifications</a></li>
            <li><a href="tabs-accordions.html"><i class="fa fa-caret-right"></i> Tabs &amp; Accordions</a></li>
            <li><a href="sliders.html"><i class="fa fa-caret-right"></i> Sliders</a></li>
            <li><a href="graphs.html"><i class="fa fa-caret-right"></i> Graphs &amp; Charts</a></li>
            <li><a href="widgets.html"><i class="fa fa-caret-right"></i> Panels &amp; Widgets</a></li>
            <li><a href="extras.html"><i class="fa fa-caret-right"></i> Extras</a></li>
          </ul>
        </li>
        -->
        <!--<li><a href="tables.php"><i class="fa fa-th-list"></i> <span>Dispositivos</span></a></li>-->
        <!--
        <li><a href="maps.html"><i class="fa fa-map-marker"></i> <span>Maps</span></a></li>
        -->
        <!--<li><a href="profile.php"><i class="glyphicon glyphicon-user"></i> <span>Perfil</span></a></li>-->
        <!--
        <li class="nav-parent nav-active active"><a href=""><i class="fa fa-file-text"></i> <span>Pages</span></a>
          <ul class="children" style="display: block;">
            <li><a href="calendar.html"><i class="fa fa-caret-right"></i> Calendar</a></li>
            <li><a href="media-manager.html"><i class="fa fa-caret-right"></i> Media Manager</a></li>
            <li><a href="timeline.html"><i class="fa fa-caret-right"></i> Timeline</a></li>
            <li><a href="blog-list.html"><i class="fa fa-caret-right"></i> Blog List</a></li>
            <li><a href="blog-single.html"><i class="fa fa-caret-right"></i> Blog Single</a></li>
            <li><a href="people-directory.html"><i class="fa fa-caret-right"></i> People Directory</a></li>
            <li class="active"><a href="profile.html"><i class="fa fa-caret-right"></i> Profile</a></li>
            <li><a href="invoice.html"><i class="fa fa-caret-right"></i> Invoice</a></li>
            <li><a href="search-results.html"><i class="fa fa-caret-right"></i> Search Results</a></li>
            <li><a href="blank.html"><i class="fa fa-caret-right"></i> Blank Page</a></li>
            <li><a href="notfound.html"><i class="fa fa-caret-right"></i> 404 Page</a></li>
            <li><a href="locked.html"><i class="fa fa-caret-right"></i> Locked Screen</a></li>
            <li><a href="signin.html"><i class="fa fa-caret-right"></i> Sign In</a></li>
            <li><a href="signup.html"><i class="fa fa-caret-right"></i> Sign Up</a></li>
          </ul>
        </li>
      -->
        <!--
        <li class="nav-parent"><a href="layouts.html"><i class="fa fa-laptop"></i> <span>Skins &amp; Layouts</span></a>
            <ul class="children">
                <li><a href="layouts.html"><i class="fa fa-caret-right"></i> General Layouts</a></li>
                <li><a href="horizontal-menu.html"><span class="pull-right badge badge-info">new</span><i class="fa fa-caret-right"></i> Top Menu</a></li>
                <li><a href="horizontal-menu2.html"><span class="pull-right badge badge-info">new</span><i class="fa fa-caret-right"></i> Top Menu w/ Sidebar</a></li>
                <li><a href="fixed-width.html"><span class="pull-right badge badge-info">new</span><i class="fa fa-caret-right"></i> Fixed Width Page</a></li>
            </ul>
        </li>
        -->
      <!--</ul>-->
      
      <!--
      <div class="infosummary">
        <h5 class="sidebartitle">Information Summary</h5>    
        <ul>
            <li>
                <div class="datainfo">
                    <span class="text-muted">Daily Traffic</span>
                    <h4>630, 201</h4>
                </div>
                <div id="sidebar-chart" class="chart"></div>   
            </li>
            <li>
                <div class="datainfo">
                    <span class="text-muted">Average Users</span>
                    <h4>1, 332, 801</h4>
                </div>
                <div id="sidebar-chart2" class="chart"></div>   
            </li>
            <li>
                <div class="datainfo">
                    <span class="text-muted">Disk Usage</span>
                    <h4>82.2%</h4>
                </div>
                <div id="sidebar-chart3" class="chart"></div>   
            </li>
            <li>
                <div class="datainfo">
                    <span class="text-muted">CPU Usage</span>
                    <h4>140.05 - 32</h4>
                </div>
                <div id="sidebar-chart4" class="chart"></div>   
            </li>
            <li>
                <div class="datainfo">
                    <span class="text-muted">Memory Usage</span>
                    <h4>32.2%</h4>
                </div>
                <div id="sidebar-chart5" class="chart"></div>   
            </li>
        </ul>
      </div>
      -->
      
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
  
  <div class="mainpanel">
    
    <div class="headerbar">
      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
      <form class="searchform" action="index.html" method="post">
        <input type="text" class="form-control" name="keyword" placeholder="Buscar aqui..." />
      </form>

      <div class="header-right">
        <ul class="headermenu">

          <!-- Inicio de seccion de mensajes de usuarios registrados
          <li>
            <div class="btn-group">
              <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                <i class="glyphicon glyphicon-user"></i>
                <span class="badge">2</span>
              </button>
              <div class="dropdown-menu dropdown-menu-head pull-right">
                <h5 class="title">2 Newly Registered Users</h5>
                <ul class="dropdown-list user-list">
                  <li class="new">
                    <div class="thumb"><a href=""><img src="images/photos/user1.png" alt="" /></a></div>
                    <div class="desc">
                      <h5><a href="">Draniem Daamul (@draniem)</a> <span class="badge badge-success">new</span></h5>
                    </div>
                  </li>
                  <li class="new">
                    <div class="thumb"><a href=""><img src="images/photos/user2.png" alt="" /></a></div>
                    <div class="desc">
                      <h5><a href="">Zaham Sindilmaca (@zaham)</a> <span class="badge badge-success">new</span></h5>
                    </div>
                  </li>
                  <li>
                    <div class="thumb"><a href=""><img src="images/photos/user3.png" alt="" /></a></div>
                    <div class="desc">
                      <h5><a href="">Weno Carasbong (@wenocar)</a></h5>
                    </div>
                  </li>
                  <li>
                    <div class="thumb"><a href=""><img src="images/photos/user4.png" alt="" /></a></div>
                    <div class="desc">
                      <h5><a href="">Nusja Nawancali (@nusja)</a></h5>
                    </div>
                  </li>
                  <li>
                    <div class="thumb"><a href=""><img src="images/photos/user5.png" alt="" /></a></div>
                    <div class="desc">
                      <h5><a href="">Lane Kitmari (@lane_kitmare)</a></h5>
                    </div>
                  </li>
                  <li class="new"><a href="">See All Users</a></li>
                </ul>
              </div>
            </div>
          </li>
          Fin de seccion de mensajes de usuarios registrados -->

          <li>
            <div class="btn-group">
              <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                <i class="glyphicon glyphicon-envelope"></i>
                <span class="badge">1</span>
              </button>
              <div class="dropdown-menu dropdown-menu-head pull-right">
                <h5 class="title">You Have 1 New Message</h5>
                <ul class="dropdown-list gen-list">
                  <li class="new">
                    <a href="">
                    <span class="thumb"><img src="images/photos/user1.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Draniem Daamul <span class="badge badge-success">new</span></span>
                      <span class="msg">Lorem ipsum dolor sit amet...</span>
                    </span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                    <span class="thumb"><img src="images/photos/user2.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Nusja Nawancali</span>
                      <span class="msg">Lorem ipsum dolor sit amet...</span>
                    </span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                    <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Weno Carasbong</span>
                      <span class="msg">Lorem ipsum dolor sit amet...</span>
                    </span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                    <span class="thumb"><img src="images/photos/user4.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Zaham Sindilmaca</span>
                      <span class="msg">Lorem ipsum dolor sit amet...</span>
                    </span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                    <span class="thumb"><img src="images/photos/user5.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Veno Leongal</span>
                      <span class="msg">Lorem ipsum dolor sit amet...</span>
                    </span>
                    </a>
                  </li>
                  <li class="new"><a href="">Read All Messages</a></li>
                </ul>
              </div>
            </div>
          </li>

          <!-- Inicio de seccion de notificaciones en el header
          <li>
            <div class="btn-group">
              <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                <i class="glyphicon glyphicon-globe"></i>
                <span class="badge">5</span>
              </button>
              <div class="dropdown-menu dropdown-menu-head pull-right">
                <h5 class="title">You Have 5 New Notifications</h5>
                <ul class="dropdown-list gen-list">
                  <li class="new">
                    <a href="">
                    <span class="thumb"><img src="images/photos/user4.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Zaham Sindilmaca <span class="badge badge-success">new</span></span>
                      <span class="msg">is now following you</span>
                    </span>
                    </a>
                  </li>
                  <li class="new">
                    <a href="">
                    <span class="thumb"><img src="images/photos/user5.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Weno Carasbong <span class="badge badge-success">new</span></span>
                      <span class="msg">is now following you</span>
                    </span>
                    </a>
                  </li>
                  <li class="new">
                    <a href="">
                    <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Veno Leongal <span class="badge badge-success">new</span></span>
                      <span class="msg">likes your recent status</span>
                    </span>
                    </a>
                  </li>
                  <li class="new">
                    <a href="">
                    <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Nusja Nawancali <span class="badge badge-success">new</span></span>
                      <span class="msg">downloaded your work</span>
                    </span>
                    </a>
                  </li>
                  <li class="new">
                    <a href="">
                    <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Nusja Nawancali <span class="badge badge-success">new</span></span>
                      <span class="msg">send you 2 messages</span>
                    </span>
                    </a>
                  </li>
                  <li class="new"><a href="">See All Notifications</a></li>
                </ul>
              </div>
            </div>
          </li>
          Fin de seccion de notificaciones en el header-->


          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="images/photos/loggeduser.png" alt="" /><?=$_GET['us']?><span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="profile.php"><i class="glyphicon glyphicon-user"></i> Mi Perfil </a></li>
                <li><a href="profile.php#"><i class="glyphicon glyphicon-cog"></i> Configuracion </a></li>
                <li><a href="profile.php#"><i class="glyphicon glyphicon-question-sign"></i> Ayuda </a></li>
                <li><a href="index.php"><i class="glyphicon glyphicon-log-out"></i> Salir </a></li>
              </ul>
            </div>
          </li>
          <li>
            <button id="chatview" class="btn btn-default tp-icon chat-icon">
                <i class="glyphicon glyphicon-comment"></i>
            </button>
          </li>
        </ul>
      </div><!-- header-right -->
    </div><!-- headerbar -->
        




    <div class="pageheader">
      <h2><i class="fa fa-envelope"></i> Mensajes <span>Subtitulos aqui...</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">Tu estas aqui:</span>
        <ol class="breadcrumb">
          <li><a href="panel.php"><?=strtoupper($_GET['us'])?></a></li>
          <li class="active">Mensajes</li>
        </ol>
      </div>
    </div>
    
    <div class="contentpanel panel-email">

        <div class="row">
            <div class="col-sm-3 col-lg-2">
                <button class="btn btn-danger btn-block btn-compose-email">Redactar</button>
                <? include ("menuemail.php") ?>
                <div class="mb30"></div>
            </div><!-- col-sm-3 -->



       <!------------------------------------------------------------- -->     
            <div class="col-sm-9 col-lg-10">
               <? include ("listemail.php") ?>
            </div><!-- col-sm-9 -->
        <!-- ----------------------------------------------------------- -->     
            
        </div><!-- row -->
    
    </div>
    
  </div><!-- mainpanel -->
  
  <div class="rightpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a href="email.html#rp-alluser" data-toggle="tab"><i class="fa fa-users"></i></a></li>
        <li><a href="email.html#rp-favorites" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
        <li><a href="email.html#rp-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
        <li><a href="email.html#rp-settings" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
    </ul>
        
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="rp-alluser">
            <h5 class="sidebartitle">Online Users</h5>
            <ul class="chatuserlist">
                <li class="online">
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/userprofile.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Eileen Sideways</strong>
                            <small>Los Angeles, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user1.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <span class="pull-right badge badge-danger">2</span>
                            <strong>Zaham Sindilmaca</strong>
                            <small>San Francisco, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user2.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Nusja Nawancali</strong>
                            <small>Bangkok, Thailand</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user3.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Renov Leongal</strong>
                            <small>Cebu City, Philippines</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Weno Carasbong</strong>
                            <small>Tokyo, Japan</small>
                        </div>
                    </div><!-- media -->
                </li>
            </ul>
            
            <div class="mb30"></div>
            
            <h5 class="sidebartitle">Offline Users</h5>
            <ul class="chatuserlist">
                <li>
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user5.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Eileen Sideways</strong>
                            <small>Los Angeles, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user2.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Zaham Sindilmaca</strong>
                            <small>San Francisco, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user3.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Nusja Nawancali</strong>
                            <small>Bangkok, Thailand</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Renov Leongal</strong>
                            <small>Cebu City, Philippines</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user5.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Weno Carasbong</strong>
                            <small>Tokyo, Japan</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Renov Leongal</strong>
                            <small>Cebu City, Philippines</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user5.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Weno Carasbong</strong>
                            <small>Tokyo, Japan</small>
                        </div>
                    </div><!-- media -->
                </li>
            </ul>
        </div>
        <div class="tab-pane" id="rp-favorites">
            <h5 class="sidebartitle">Favorites</h5>
            <ul class="chatuserlist">
                <li class="online">
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user2.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Eileen Sideways</strong>
                            <small>Los Angeles, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user1.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Zaham Sindilmaca</strong>
                            <small>San Francisco, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user3.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Nusja Nawancali</strong>
                            <small>Bangkok, Thailand</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Renov Leongal</strong>
                            <small>Cebu City, Philippines</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user5.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Weno Carasbong</strong>
                            <small>Tokyo, Japan</small>
                        </div>
                    </div><!-- media -->
                </li>
            </ul>
        </div>
        <div class="tab-pane" id="rp-history">
            <h5 class="sidebartitle">History</h5>
            <ul class="chatuserlist">
                <li class="online">
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Eileen Sideways</strong>
                            <small>Hi hello, ctc?... would you mind if I go to your...</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user2.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Zaham Sindilmaca</strong>
                            <small>This is to inform you that your product that we...</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="email.html#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user3.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Nusja Nawancali</strong>
                            <small>Are you willing to have a long term relat...</small>
                        </div>
                    </div><!-- media -->
                </li>
            </ul>
        </div>
        <div class="tab-pane pane-settings" id="rp-settings">
            
            <h5 class="sidebartitle mb20">Settings</h5>
            <div class="form-group">
                <label class="col-xs-8 control-label">Show Offline Users</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle toggle-success"></div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-8 control-label">Enable History</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle toggle-success"></div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-8 control-label">Show Full Name</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle-chat1 toggle-success"></div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-8 control-label">Show Location</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle toggle-success"></div>
                </div>
            </div>
            
        </div><!-- tab-pane -->
        
    </div><!-- tab-content -->
  </div><!-- rightpanel -->
  
</section>


<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.cookies.js"></script>

<script src="js/custom.js"></script>
<script>
    jQuery(document).ready(function(){
    
        //Check
        jQuery('.ckbox input').click(function(){
            var t = jQuery(this);
            if(t.is(':checked')){
                t.closest('tr').addClass('selected');
            } else {
                t.closest('tr').removeClass('selected');
            }
        });
        
        // Star
        jQuery('.star').click(function(){
            if(!jQuery(this).hasClass('star-checked')) {
                jQuery(this).addClass('star-checked');
            }
            else
                jQuery(this).removeClass('star-checked');
            return false;
        });
        
        // Read mail
         //jQuery('.table-email .media').click(function(){

           jQuery('.mensaje').click(function(){

            //jQuery('#destmsg').click(function(){
             var a = jQuery(this).text();
            
           location.href="read.php?dato=" + a;
        });
        
    });
</script>

</body>
</html>