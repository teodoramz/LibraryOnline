<?php
 session_start();

    include("connection.php");
    include("dbfunctions.php");
    include("functions.php");

    session_destroy();

    header('Location: ../Startup/LoginPage.php');
    die;

?>