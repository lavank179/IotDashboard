<?php
require_once './controllers/auth/config.php';

// Is the user already logged in? Redirect him/her to the private page

if ($_SESSION['email']) {
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST['Submit'])) {
    $do_login = true;

    include_once './controllers/auth/do_login.php';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Page </title>


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/MDBootstrap-pro/MDB-Pro_4.11.0/css/mdb.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-pro-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <div class="container-fluid bg-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 login-card">
                    <div class="row">
                        <div class="col-md-5 detail-part">
                            <h1>Awesome Login Page Design</h1>
                            <p>Please use your credentials to login.
                                If you are not a member, please register. </p>
                        </div>
                        <div class="col-md-7 logn-part log">
                            <div class="row">
                                <div class="col-lg-10 col-md-12 mx-auto">
                                    <div class="logo-cover text-center pt-5 pb-5">
                                        <!-- <img src="./assets/login-images/logo.png" alt=""> -->
                                        <h2> Marvel IoT </h2>
                                        <?php echo $accountNotExistErr; ?>
                                        <?php
                                        if ($login_error) {
                                            echo '<div id="error_notification">The submitted login info is incorrect.</div>';
                                        }
                                        ?>
                                    </div>
                                    <br><br><br>
                                    <form method="POST">
                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" class="form-control" name="Email" placeholder="Email" />
                                            <div id="er1"></div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" class="form-control" name="Password" placeholder="Password" />
                                            <div id="er2"></div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col d-flex justify-content-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="auto_login" value="1" id="rememberme" />
                                                    <label class="form-check-label" for="rememberme"> Remember me </label>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <a href="#!">Forgot password?</a>
                                            </div>
                                        </div>

                                        <button type="submit" id="LoginSub" class="btn btn-primary btn-block" name="Submit">Login</button>
                                        <br>
                                        <div class="text-center"><a href="./register.php"> Don't have an account? Sign up here </a></div>
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


    <script type="text/javascript">
        let v1 = false,
            v2 = false;
        EDsubbtn();

        function getInputVals(a1, a2, a3, a4) {
            var text = document.querySelector("form #" + a1).value;
            if (!a2.test(text)) {
                $("#" + a4).html(a3);
                $("#" + a4).addClass('alert-danger');
                $("#" + a1).addClass('addRed');
                $("#" + a1).removeClass('addGreen');
                if (a1 == 'email') v1 = false;
                if (a1 == 'password') v2 = false;
            } else {
                $("#" + a4).removeClass('alert-danger');
                $("#" + a4).empty();
                $("#" + a1).addClass('addGreen');
                $("#" + a1).removeClass('addRed');
                if (a1 == 'email') v1 = true;
                if (a1 == 'password') v2 = true;
            }
            EDsubbtn();
        }
        $('form #email').keyup(function() {
            var regx = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            getInputVals("email", regx, "Email should be valid. EG: example@example.com", "er1");
        });

        $('form #password').keyup(function() {
            var regx = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
            getInputVals("password", regx, "Password shuld be [7 to 15 characters which contain at least one numeric digit and a special character].", "er2");
        });

        function EDsubbtn() {
            if (v1 == true && v2 == true) {
                document.querySelector('#LoginSub').disabled = false;
            } else {
                document.querySelector('#LoginSub').disabled = true;
            }
        }
    </script>
</body>

</html>
<?php ?>