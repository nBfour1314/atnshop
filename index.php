<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logoor-rbg.png">
    <title>ATN Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <?php
        session_start();
        include_once('connect.php')
        require "header.php";
    ?>

    <?php
        if(isset($_GET['page']))
        {
            $page=$_GET['page'];
            if($page=="home")
            {
                include_once("content.php");
            }
            elseif($page=="login")
            {
                include_once("login.php");
            }
            elseif($page=="register")
            {
                include_once("register.php");
            }
        }
        else
        {
            include_once("content.php");
        }
    ?>

    <?php
        require "footer.php";
    ?>
    <script src="script.js"></script>
</body>
</html>
