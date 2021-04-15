<?php

ob_start();
    // Set sessions
    if(!isset($_SESSION)) {
        session_set_cookie_params(0);
        session_start();
    }
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "dp";

$conn = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.");
global $accountNotExistErr;
if (!$do_login) exit;

// declare post fields

$post_email = trim($_POST['Email']);
$post_password = trim($_POST['Password']);

$post_autologin = $_POST['auto_login'];

// Query if email exists in db
$sql = "SELECT * From users WHERE email = '{$post_email}' ";
$query = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($query);

// Check if email exist
if ($rowCount <= 0) {
    $accountNotExistErr = '<div class="alert alert-danger">
            User account does not exist.
        </div>';
} else {

    while ($row = mysqli_fetch_array($query)) {
        // ---------- Login Info ---------- //
        $config_email = $row['email'];
        $config_password = $row['password'];
    }


    if (($post_email == $config_email) && ($post_password == $config_password)) {
        $login_ok = true;

        $_SESSION['email'] = $config_email;

        // Autologin Requested?

        if ($post_autologin == 1) {
            $password_hash = md5($config_password); // will result in a 32 characters hash
            setcookie($cookie_name, 'usr=' . $config_email . '&hash=' . $password_hash, time() + $cookie_time);
        }

        header("Location: ./dashboard.php");
        exit;
    } else {
        $login_error = true;
    }
}
?>