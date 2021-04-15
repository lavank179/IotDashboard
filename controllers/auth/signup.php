<?php
global $signupSuccess, $signupErr, $email_exist;

if (isset($_POST['Submit'])) {
    $name = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $phone = $_POST['phonenumber'];

    $email_check_query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' ");
    $rowCount = mysqli_num_rows($email_check_query);

    // check if user email already exist
    if ($rowCount > 0) {
        $email_exist = '
            <div class="alert alert-danger" role="alert">
                User with this email already exist! Try with different email.
            </div>
        ';
    } else {
        // Query
        $query = "INSERT INTO `users` (email, password, name, phone, timed) VALUES ('{$email}', '{$password}', '{$name}','{$phone}', now())";

        // Create mysql query
        $sqlQuery = mysqli_query($conn, $query);

        // Redirect to login page
        if ($sqlQuery) {
            echo "<script>
                    alert('Account created successfully. Please Login to proceed.');
                    window.location.href='./index.php';
                  </script>";
        } else {
            $signupErr = '<div class="alert alert-danger"> Something went wrong. Please try again later. </div>';
        }
    }
}
