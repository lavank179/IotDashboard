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
                            <h1>Awesome Login Page Design</h1>
                            <p>Please use your credentials to login.
                                If you are not a member, please register. </p>
                        </div>
                        <div class="col-md-7 logn-part reg">
                            <div class="row">
                                <div class="col-lg-10 col-md-12 mx-auto">
                                    <div class="logo-cover text-center pt-5 pb-5">
                                        <!-- <img src="./assets/login-images/logo.png" alt=""> -->
                                        <h2> Marvel IoT </h2>
                                        <?php echo $signupErr; ?>
                                        <?php echo $email_exist; ?>
                                    </div>
                                    <br>
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


    <script type="text/javascript">
        let v1 = false,
            v2 = false,
            v3 = false,
            v4 = false,
            v5 = false;

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
                if (a1 == 'username') v3 = false;
                if (a1 == 'phone') v5 = false;
            } else {
                $("#" + a4).removeClass('alert-danger');
                $("#" + a4).empty();
                $("#" + a1).addClass('addGreen');
                $("#" + a1).removeClass('addRed');
                if (a1 == 'email') v1 = true;
                if (a1 == 'password') v2 = true;
                if (a1 == 'username') v3 = true;
                if (a1 == 'phone') v5 = true;
            }
            EDsubbtn();
        }

        $('form #email').keyup(function() {
            var regx = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            getInputVals("email", regx, "Email should be valid. EG: example@example.com", "er1");
        });

        $('form #username').keyup(function() {
            var regx = /^[a-zA-Z \-]{5,20}$/;
            getInputVals("username", regx, "Name should be valid.", "er3");
        });

        $('form #password').keyup(function() {
            var regx = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
            getInputVals("password", regx, "Password shuld be [7 to 15 characters which contain at least one numeric digit and a special character].", "er2");
        });

        $('form #cpassword').keyup(function() {
            var text = document.querySelector("form #password").value;
            var text1 = document.querySelector("form #cpassword").value;
            if (text != text1) {
                $("#er4").html('Password and confirm password should be same.');
                $("#er4").addClass('alert-danger');
                $("#cpassword").addClass('addRed');
                $("#cpassword").removeClass('addGreen');
                v4 = false;
            } else {
                $("#er4").removeClass('alert-danger');
                $("#er4").empty();
                $("#cpassword").addClass('addGreen');
                $("#cpassword").removeClass('addRed');
                v4 = true;
            }
            EDsubbtn();
        });

        $('form #phone').keyup(function() {
            var regx = /^([0|+[0-9]{1,5})?([7-9][0-9]{9})$/;
            getInputVals("phone", regx, `Mobile number should be valid. +(**) - country code AND (**********) - 10 digit number`, "er5");
        });


        function EDsubbtn() {
            if (v1 == true && v2 == true && v3 == true && v4 == true && v5 == true) {
                document.querySelector('#LoginSub').disabled = false;
            } else {
                document.querySelector('#LoginSub').disabled = true;
            }
        }
    </script>
</body>

</html>
<?php } ?>