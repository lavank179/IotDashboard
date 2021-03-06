<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./headers/head.php'); ?>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <?php include('./headers/sidebar.php'); ?>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <div class="position-fixed top-0 end-0 p-3" style="z-index: 5">
                    <div class="toast1" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img src="..." class="rounded me-2" alt="...">
                            <strong class="me-auto">Bulb 1 - ON</strong>
                            <small>11 mins ago</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Bulb 1 is turned on
                        </div>
                    </div>
                </div>

                <div class="position-fixed top-0 end-0 p-3" style="z-index: 5">
                    <div class="toast2" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img src="..." class="rounded me-2" alt="...">
                            <strong class="me-auto">Bulb 1 - OFF</strong>
                            <small>11 mins ago</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Bulb 1 is turned off
                        </div>
                    </div>
                </div>

                <div class="container">


                    <div class="card">
                        <div class="card-content">
                            <div class="card-title" style="text-align: center;">
                                <h2>IoT Dashboard</h2>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center py-5">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="switch">
                                        <input class="onoff but" type="checkbox" checked id="111">
                                        <span class="round"> </span>
                                    </label>
                                </div>
                                <div class="col-sm-4">
                                    <h4> Led 1 </h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="switch">
                                        <input class="onoff but" type="checkbox" checked id="112">
                                        <span class="round"> </span>
                                    </label>
                                </div>
                                <div class="col-sm-4">
                                    <h4> Led 2 </h4>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4"></div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div id="content" style="width: 800px; height: 400px;">
                        </div>
                    </div>
                </div>
            </main>
        </div>



    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>


    <script src="https://www.gstatic.com/charts/loader.js"></script>



    <script type="text/javascript" src="./js/log.js"></script>
</body>

</html>
<?php ?>