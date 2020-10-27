<!DOCTYPE HTML>

<html lang="en">
    
<?php
    
    session_start(); // allow variable transfer between pages
    include("config.php");
        
    //Connect to database
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if(mysqli_connect_errno()) {
    echo "Connection failed:".mysqli_connect_error();
    exit;
    }
    
    ?>

<head>
    <meta charset="utf-8">
    <meta name="description" content="pokemon">
    <meta name="GTT" content="Pokemon database">
    <meta name="keywords" content="pokemon">
    
    <title>Pokemon Database</title>

    <!-- for multiple fonts change | to %7c * no spaces*  -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet">  

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/data_style.css">    <!-- custom style sheet -->

    
</head>

<body>
    
    <p class="message">Eek!  Your browser does not support grid.  Please upgrade your system.</p>
        
    <div class="wrapper">
    
        <!-- logo / small image goes here -->
        <div class="box logo">
            <a href="index.php"><img src="images/logo.png" width="300" height="150" alt="Pokeball" /></a>
        </div> <!-- / logo -->
        
        <div class="box banner">
            <h1>Pokemon Database</h1>        
        </div> <!-- / banner -->