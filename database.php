<?php

$dbhost = "localhost";
$dbname = "test";
$dbuser = "root";
$dbpass = "password";
global $init;
global $connect;
$init = mysqli_init();
$connect = mysqli_real_connect($init, $dbhost, $dbuser, $dbpass);
mysqli_select_db($init, $dbname);
