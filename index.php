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
             
        <h1><img src="img\profile_pic.jpg" id="nav_picture" id="nav_pic_container"alt="profile picutre"> Jaron van Well</h1>  
        <nav id="navbar" >
            <ul>
             <li><a href="">gdfgd</a></li>
             <li><a href="">dgdgfdg</a></li>
             <li><a href="">dg</a></li>
             <li><a href="">sfsefffes</a></li>
             <li><a href="">esffsfe</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div>
            <h2>hallo</h2>
            <article><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat velit consectetur animi illum nobis vitae impedit voluptatibus sed qui odio?</p></article>
        </div>
        <div>
            <article></article>
        </div>
        <div>
            <article></article>
        </div>
    </main>
    <footer>
    <div id="socialmedia">
            <p>@jaron van well 2020</p>
            
                <i class="fab fa-github-square"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fas fa-envelope"></i>
           
          
        </div>
    </footer>
</body>
</html>