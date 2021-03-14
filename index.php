<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./headers/head.php'); ?>
</head>

<body>


    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <?php include('./headers/sidebar.php'); ?>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-dark" id="topNAV">

                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-align-left"></i>
                </button>
                <button class="btn btn-light d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-right"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link btn btn-light btn-rounded1"> <i class="far fa-bell"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-light btn-rounded1"> <i class="fas fa-user-circle"></i> </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <div id="home"><?php include('./pages/home.php'); ?></div>
                <div id="visualise"><?php include('./pages/visualise.php'); ?></div>
                <div id="profile"><?php include('./pages/profile.php'); ?></div>


            </div>

        </div>


    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




    <script src="https://www.gstatic.com/charts/loader.js"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="./assets/MDBootstrap-pro/MDB-Pro_4.11.0/js/mdb.min.js"></script>
    <script type="text/javascript" src="./js/log.js"></script>
    <script type="text/javascript" src="./js/charts.js"></script>
</body>

</html>
<?php ?>