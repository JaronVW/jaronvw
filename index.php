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
    <h2>hallo</h2>
        <div id="grid_container">
            <div >
                
                <img src="img/me.png" id="me" alt="">

            </div>
            <div>
                <article>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non earum ipsam voluptas cupiditate a animi, natus qui, accusamus fuga itaque iure fugit culpa odit! Natus consectetur itaque minima molestias error vero nemo id incidunt ipsum qui. Sapiente magnam quam dignissimos perferendis laudantium, molestiae deleniti, corporis quas exercitationem impedit distinctio, dicta eligendi nesciunt dolorem qui facere! Illum ducimus magni unde doloremque, cum aperiam atque perferendis, deserunt cupiditate ipsum itaque impedit recusandae consequuntur autem. Id libero vel ipsa harum aspernatur voluptates debitis, hic voluptas doloribus! Adipisci reiciendis, minus sed eius modi voluptates culpa excepturi quod architecto exercitationem temporibus, odit numquam aspernatur. Explicabo!</p>
                </article>
            </div>

            


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