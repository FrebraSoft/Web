<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('head.php');
    ?>
    
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
        <?php 
            include('header.php');
        ?>
        <!-- End header header -->

        <!-- Left Sidebar  -->
        <?php 
            include('menu-left.php')
        ?>

        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="" style="color: greey;">Home > Visão Geral</h3> </div>

            </div>
            <!-- End Bread crumb -->

            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-arrow-down f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>&nbsp&nbsp&nbsp56.230,00</h2>
                                    <p class="m-b-3">ICSM ENTRADA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-arrow-up f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>&nbsp&nbsp&nbsp56.230,00</h2>
                                    <p class="m-b-0">ICMS SAIDA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-money f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>&nbsp&nbsp&nbsp56.230,00</h2>
                                    <p class="m-b-0">SALDO CARTEIRA</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-usd f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text">
                                    <h2>&nbsp&nbsp&nbsp56.230,00</h2>
                                    <p class="m-b-0">LUCRO TOTAL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row bg-white m-l-0 m-r-0 box-shadow ">

                    <!-- column -->
                    <div class="col-lg-8">
                    
                        <div class="card">
                            <div class="card-title">
                                <center><h3>Histórico de ICMS</h3></center>
                            </div>

                            <div class="flot-container">
                                <div id="morris-bar-chart" class="flot-line"></div>
                            </div>
                        </div>

                        <!-- /# card -->

                    </div>
                    <!-- column -->

                    <!-- column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body browser">
                                
                            <p class="f-w-600">São Paulo <span class="pull-right">25%</span></p>
                                <div class="progress ">
                                    <div role="progressbar" style="width: 25%; height:8px;" class="progress-bar bg-danger wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">Minas Gerais<span class="pull-right">30%</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 30%; height:8px;" class="progress-bar bg-info wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">Rio Grande do Sul<span class="pull-right">15%</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 15%; height:8px;" class="progress-bar bg-primary wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">Bahia<span class="pull-right">3%</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 3%; height:8px;" class="progress-bar bg-warning wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

								<p class="m-t-30 f-w-600">Espirito Santo<span class="pull-right">2%</span></p>
                                <div class="progress m-b-30">
                                    <div role="progressbar" style="width: 2%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Ultimos Lançamentos </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Razão Social</th>
                                                <th>CNPJ</th>
                                                <th>Nº NFE</th>
                                                <th>Valor Total</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>Julio HDS Softwares</td>
                                                <td><span>50.200.092/000-1.21</span></td>
                                                <td><span>89982220019292</span></td>
                                                <td><span class="badge badge-warning">R$ 390.30,90</span></td>
                                                <td><button class="btn btn-success"><i class='fa fa-search'></i></button></td>
                                            </tr>

                                            <tr>
                                                <td>Julio HDS Softwares</td>
                                                <td><span>50.200.092/000-1.21</span></td>
                                                <td><span>89982220019292</span></td>
                                                <td><span class="badge badge-warning">R$ 390.30,90</span></td>
                                                <td><button class="btn btn-success"><i class='fa fa-search'></i></button></td>
                                            </tr>

                                            <tr>
                                                <td>Julio HDS Softwares</td>
                                                <td><span>50.200.092/000-1.21</span></td>
                                                <td><span>89982220019292</span></td>
                                                <td><span class="badge badge-warning">R$ 390.30,90</span></td>
                                                <td><button class="btn btn-success"><i class='fa fa-search'></i></button></td>
                                            </tr>

                                            <tr>
                                                <td>Julio HDS Softwares</td>
                                                <td><span>50.200.092/000-1.21</span></td>
                                                <td><span>89982220019292</span></td>
                                                <td><span class="badge badge-warning">R$ 390.30,90</span></td>
                                                <td><button class="btn btn-success"><i class='fa fa-search'></i></button></td>
                                            </tr>

                                            <tr>
                                                <td>Julio HDS Softwares</td>
                                                <td><span>50.200.092/000-1.21</span></td>
                                                <td><span>89982220019292</span></td>
                                                <td><span class="badge badge-warning">R$ 390.30,90</span></td>
                                                <td><button class="btn btn-success"><i class='fa fa-search'></i></button></td>
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
            <?php
                include('footer.php')
            ?>
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