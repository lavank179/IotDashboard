<?php
ob_start();
// Set sessions
if(!isset($_SESSION)) {
    session_set_cookie_params(0);
    session_start();
}
if (isset($_SESSION['email'])) {
    echo "<script>
         alert('A valid session is still running. Please Logout to proceed to Login Page.');
         window.location.href='dashboard.php';
         </script>";
} else {

include('./controllers/db.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up </title>


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/MDBootstrap-pro/MDB-Pro_4.11.0/css/mdb.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-pro-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <?php include('./controllers/auth/signup.php'); ?>
    <div class="container-fluid bg-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 login-card">
                    <div class="row">
                        <div class="col-md-5 detail-part">
                            <h1> Marvel IoT welcomes you </h1>
                            <p> Please register to use Marvel IoT. </p>
                        </div>
                        <div class="col-md-7 logn-part reg">
                            <div class="row">
                                <div class="col-lg-10 col-md-12 mx-auto">
                                    <div class="logo-cover text-center">
                                        <img src="./assets/images/logo.png" alt="marvel iot" width="300px" height="300px" />
                                        <?php echo $signupErr; ?>
                                        <?php echo $email_exist; ?>
                                    </div>
                                    <form method="POST">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="username" class="form-control" name="Username" placeholder="UserName" />
                                            <div id="er3"></div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" class="form-control" name="Email" placeholder="Email" />
                                            <div id="er1"></div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" class="form-control" name="Password" placeholder="Password" />
                                            <div id="er2"></div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="cpassword" class="form-control" name="cPassword" placeholder="Confirm Password" />
                                            <div id="er4"></div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="phone" class="form-control" name="phonenumber" placeholder="Phone Number" />
                                            <div id="er5"></div>
                                        </div>

                                        <button type="submit" id="LoginSub" class="btn btn-primary btn-block" name="Submit">Sign Up</button>
                                        <br>
                                        <div class="text-center"><a href="./"> Already have an account? Login In here </a></div>
                                    </form>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="./assets/MDBootstrap-pro/MDB-Pro_4.11.0/js/mdb.min.js"></script>
    <script type="text/javascript" src="./js/log.js"></script>


    <script type="text/javascript" src="./js/authUI/signup.js"></script>
</body>

</html>
<?php } ?>