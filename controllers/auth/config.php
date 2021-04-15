<?php
error_reporting(E_ALL ^ E_NOTICE);

session_set_cookie_params(0);
session_start(); // Start Session
header('Cache-control: private'); // IE 6 FIX

// always modified
header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' IST');
// HTTP/1.1
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
// HTTP/1.0
header('Pragma: no-cache');

// ---------- Cookie Info ---------- //

$cookie_name = 'siteAuth';
$cookie_time = (30); // 30 days

// ---------- Invoke Auto-Login if no session is registered ---------- //

if (!$_SESSION['email']) {
    include_once 'autologin.php';
}
?>