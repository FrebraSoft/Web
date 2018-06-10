<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b><img src="images/logo_febrasoft.png" alt="homepage" style="width: 150px;" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <!-- <span><img src="images/logo-text2.png" alt="homepage" class="dark-logo" /></span> -->
                    </a>
                </div>  
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                       
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->

        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <br>
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li> 
                            <a href="index.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span style="vertical-align: text-top;">Visão Geral</span></a>
                        </li>
                        <li> 
                            <a href="client.php" aria-expanded="false"><i class="fa fa-users"></i>Clientes</span></a>
                        </li>
                        <li> 
                            <a href="produtos.php" aria-expanded="false"><i class="fa fa-product-hunt"></i>Produtos</span></a>
                        </li>
                        <li> 
                            <a href="nfe-emit.php" aria-expanded="false"><i class="fa fa-copy"></i>Nfes-Emitidas</span></a>
                        </li>
                        <li> 
                            <a href="nfe-rec.php" aria-expanded="false"><i class="fa fa-file"></i>Nfes-Recebidas</span></a>
                        </li>
                        <li> 
                            <a href="users.php" aria-expanded="false"><i class="fa fa-user-circle"></i>Usuarios</span></a>
                        </li>
                        <li> 
                            <a href="login.php" aria-expanded="false"><i class="fa fa-arrow-left"></i>Sair</span></a>
                        </li>

                        <li class="nav-label">Apps</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Email</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="email-compose.html">Compose</a></li>
                                <li><a href="email-read.html">Read</a></li>
                                <li><a href="email-inbox.html">Inbox</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Charts</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="chart-flot.html">Flot</a></li>
                                <li><a href="chart-morris.html">Morris</a></li>
                                <li><a href="chart-chartjs.html">ChartJs</a></li>
                                <li><a href="chart-chartist.html">Chartist </a></li>
                                <li><a href="chart-amchart.html">AmChart</a></li>
                                <li><a href="chart-echart.html">EChart</a></li>
                                <li><a href="chart-sparkline.html">Sparkline</a></li>
                                <li><a href="chart-peity.html">Peity</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Features</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Bootstrap UI <span class="label label-rouded label-warning pull-right">6</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="ui-alert.html">Alert</a></li>
                                <li><a href="ui-button.html">Button</a></li>
                                <li><a href="ui-dropdown.html">Dropdown</a></li>
                                <li><a href="ui-progressbar.html">Progressbar</a></li>
                                <li><a href="ui-tab.html">Tab</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                            </ul>
                        </li>
						<li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Components <span class="label label-rouded label-danger pull-right">6</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="uc-calender.html">Calender</a></li>
                                <li><a href="uc-datamap.html">Datamap</a></li>
                                <li><a href="uc-nestedable.html">Nestedable</a></li>
                                <li><a href="uc-sweetalert.html">Sweetalert</a></li>
                                <li><a href="uc-toastr.html">Toastr</a></li>
                                <li><a href="uc-weather.html">Weather</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="form-basic.html">Basic Forms</a></li>
                                <li><a href="form-layout.html">Form Layout</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-editor.html">Editor</a></li>
                                <li><a href="form-dropzone.html">Dropzone</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Tables</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="table-bootstrap.html">Basic Tables</a></li>
                                <li><a href="table-datatable.html">Data Tables</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Layout</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-columns"></i><span class="hide-menu">Layout</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="layout-blank.html">Blank</a></li>
                                <li><a href="layout-boxed.html">Boxed</a></li>
                                <li><a href="layout-fix-header.html">Fix Header</a></li>
                                <li><a href="layout-fix-sidebar.html">Fix Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">EXTRA</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Pages <span class="label label-rouded label-success pull-right">8</span></span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a href="#" class="has-arrow">Authentication <span class="label label-rounded label-success">6</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="page-login.html">Login</a></li>
                                        <li><a href="page-register.html">Register</a></li>
                                        <li><a href="page-invoice.html">Invoice</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="has-arrow">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="page-error-400.html">400</a></li>
                                        <li><a href="page-error-403.html">403</a></li>
                                        <li><a href="page-error-404.html">404</a></li>
                                        <li><a href="page-error-500.html">500</a></li>
                                        <li><a href="page-error-503.html">503</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-map-marker"></i><span class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="map-google.html">Google</a></li>
                                <li><a href="map-vector.html">Vector</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-level-down"></i><span class="hide-menu">Multi level dd</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">item 1.1</a></li>
                                <li><a href="#">item 1.2</a></li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#">item 1.3.1</a></li>
                                        <li><a href="#">item 1.3.2</a></li>
                                        <li><a href="#">item 1.3.3</a></li>
                                        <li><a href="#">item 1.3.4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">item 1.4</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>

        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Usuários Cadastrados</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Usuários</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->

            <!-- Container fluid  -->
            <div class="container-fluid">
                                       
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Cadastrados </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>CPF</th>
                                                <th>Usuario</th>
                                                <th>Data Cadastro</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>Julio Henrique dos Santos</td>
                                                <td><span>390.352.768-84</span></td>
                                                <td><span>juliohds</span></td>
                                                <td><span class="">21/04/2017</span></td>
                                                <td><button class="btn btn-success" style="background-color: green; border-color: black;"><i class='fa fa-edit'></i></button></td>
                                            </tr>

                                            <tr>
                                                <td>Julio Henrique dos Santos</td>
                                                <td><span>390.352.768-84</span></td>
                                                <td><span>juliohds</span></td>
                                                <td><span class="">21/04/2017</span></td>
                                                <td><button class="btn btn-success" style="background-color: green; border-color: black;"><i class='fa fa-edit'></i></button></td>
                                            </tr>

                                            <tr>
                                                <td>Julio Henrique dos Santos</td>
                                                <td><span>390.352.768-84</span></td>
                                                <td><span>juliohds</span></td>
                                                <td><span class="">21/04/2017</span></td>
                                                <td><button class="btn btn-success" style="background-color: green; border-color: black;"><i class='fa fa-edit'></i></button></td>
                                            </tr>

                                            <tr>
                                                <td>Julio Henrique dos Santos</td>
                                                <td><span>390.352.768-84</span></td>
                                                <td><span>juliohds</span></td>
                                                <td><span class="">21/04/2017</span></td>
                                                <td><button class="btn btn-success" style="background-color: green; border-color: black;"><i class='fa fa-edit'></i></button></td>
                                            </tr>

                                            <tr>
                                                <td>Julio Henrique dos Santos</td>
                                                <td><span>390.352.768-84</span></td>
                                                <td><span>juliohds</span></td>
                                                <td><span class="">21/04/2017</span></td>
                                                <td><button class="btn btn-success" style="background-color: green; border-color: black;"><i class='fa fa-edit'></i></button></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
     <script src="js/lib/morris-chart/raphael-min.js"></script>
    <script src="js/lib/morris-chart/morris.js"></script>
    <script src="js/lib/morris-chart/dashboard1-init.js"></script>


	<script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.init.js"></script>

    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>

    <!-- scripit init-->
    <!--  flot-chart js -->
    <script src="js/lib/flot-chart/excanvas.min.js"></script>
    <script src="js/lib/flot-chart/jquery.flot.js"></script>
    <script src="js/lib/flot-chart/jquery.flot.pie.js"></script>
    <script src="js/lib/flot-chart/jquery.flot.time.js"></script>
    <script src="js/lib/flot-chart/jquery.flot.stack.js"></script>
    <script src="js/lib/flot-chart/jquery.flot.resize.js"></script>
    <script src="js/lib/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="js/lib/flot-chart/curvedLines.js"></script>
    <script src="js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="js/lib/flot-chart/flot-chart-init.js"></script>

    <script src="js/lib/morris-chart/morris.js"></script>
    <script src="js/lib/morris-chart/morris-init.js"></script>
    
    <script src="js/scripts.js"></script>

</body>

</html>