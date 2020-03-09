<?php 
    require "classes/db_cred.php";
    require "classes/connectdb.php";
    $Connectdb = new Connectdb();
    $Connectdb->start_conn();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/base_style.css">
    <script src="https://kit.fontawesome.com/2791852a86.js" crossorigin="anonymous"></script>
    <title>jaronvw</title>

</head>

<body>
    <header>

        <h1><img src="img\profile_pic.jpg" id="nav_picture" id="nav_pic_container" alt="profile picutre"> Jaron van Well
        </h1>
        <nav id="navbar">
            <ul>
                <li><a href="">home</a></li>
                <li><a href="">projects</a></li>
                <li><a href="">skills</a></li>
                <li><a href="">blog</a></li>
                <li><a href="">contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
  