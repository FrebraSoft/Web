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