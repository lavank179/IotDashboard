<?php ob_start();
// Set sessions
if (!isset($_SESSION)) {
    session_start();
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./headers/head.php'); ?>
</head>

<body id="hom">
    <?php
    if (isset($_SESSION['email'])) { ?>

        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <?php include('./headers/sidebar.php'); ?>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="topNAV">

                    <button id="sidebarCollapse" class="btn btn-sm btn-outline-primary shadow-none">
                        <i class="fas fa-align-left"></i>
                    </button>

                    <h3 class="ml-auto mr-auto" id="mobile-head"> Marvel IoT </h3>
                    <button class="d-inline-block d-lg-none ml-auto btn btn-sm btn-outline-primary shadow-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-right"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link btn-rounded1 btn btn-sm btn-outline-primary shadow-none" onclick="RefreshAll();" data-toggle="popover" data-content="Refresh All" data-placement="bottom" data-trigger="hover"> <i class="fas fa-sync-alt d-inline"></i>
                                    <div class="d-lg-none d-md-block d-sm-block d-inline">Refresh all data</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-rounded1 btn btn-sm btn-outline-primary shadow-none" data-toggle="popover" data-content="Notifications" data-placement="bottom" data-trigger="hover"> <i class="far fa-bell d-inline"></i>
                                    <div class="d-lg-none d-md-block d-sm-block d-inline">Notifications</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-rounded1 btn btn-sm btn-outline-primary shadow-none" data-toggle="popover" data-content="User Details" data-placement="bottom" data-trigger="hover"> <i class="fas fa-user-circle d-inline"></i>
                                    <div class="d-lg-none d-md-block d-sm-block d-inline">User Details</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-rounded1 btn btn-sm btn-outline-primary shadow-none" onclick="Logout();" data-toggle="popover" data-content="Logout" data-placement="bottom" data-trigger="hover"> <i class="fas fa-sign-out-alt d-inline"></i>
                                    <div class="d-lg-none d-md-block d-sm-block d-inline">Logout</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="container-fluid">
                    <div id="home"><?php include('./pages/home.php'); ?></div>
                    <div id="visualise"><?php include('./pages/visualise.php'); ?></div>
                    <div id="profile"><?php include('./pages/profile.php'); ?></div>
                    <div id="contact"><?php include('./pages/contact.php'); ?></div>


                </div>

                <footer>
                    <div><?php include('./headers/footer.php'); ?></div>
                </footer>

            </div>


        </div>





        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




        <script src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

        <script src="./assets/apexcharts/dist/apexcharts.js"></script>


        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>


        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <script src="./assets/MDBootstrap-pro/MDB-Pro_4.11.0/js/mdb.min.js"></script>
        <script type="text/javascript" src="./js/log.js"></script>
        <script type="text/javascript" src="./js/chartsLight.js"></script>
        <script type="text/javascript" src="./js/chartsFan.js"></script>
        <script type="text/javascript" src="./js/chartsGauge.js"></script>
        <script type="text/javascript" src="./js/chartsSensor.js"></script>
        <script type="text/javascript" src="./js/chartsArea.js"></script>

    <?php } else {
        echo "<script>
         alert('A valid session was not exist. Please Login to Access.');
         window.location.href='./';
         </script>";
    } ?>
</body>

</html>
<?php ?>