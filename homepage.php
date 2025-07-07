<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>   
    <div class="white-section"></div>
    <img class="img-torri" src="torri.jpg" alt="torri">
    <div class="overlay">
        <a href="#spots" id="tourist_spots">Tourist Spots</a>
        <p>Japan offers a rich blend of ancient temples, serene landscapes, 
        and futuristic cities—explore iconic sites like Mount Fuji, Kyoto’s shrines, Tokyo’s vibrant streets, 
         and the historic beauty of Nara and Hiroshima.</p>
    </div>

    <img class="img-sakura" src="sakura.jpg" alt="sakura">
    <div class="overlay-next">
        <a href="#season" id="season">Best Time to Visit</a>
        <p>Japan has four distinct seasons—cherry blossoms in spring, 
            vibrant festivals in summer, colorful leaves in autumn, and snowy 
            landscapes in winter—each offering unique beauty and experiences.</p>
    </div>

    <img class="img-food" src="food.jpg" alt="food">
    <div class="overlay-last">
        <a href="#eat" id="eat">Food Trip</a>
        <p>Japanese cuisine is known for its freshness and balance, featuring sushi, ramen, tempura, 
            and more—each dish reflecting a deep respect for tradition and flavor.</p>
    </div>
<p class="japan_slogan">Discover the beauty, culture, and flavors of Japan</br>—an unforgettable journey awaits you!</p>
<button class="button-45" role="button">Book Now!</button>

    <h1 class="header">
        <a href="#" class="logo" data-hover="日本">日本</a>

    <div class="navbar"> 
        <a href="#subs" id="subscription">Subscriptions</a>
        <a href="#help" id="help">Help</a>
        <div class="dropdown">
            <button class="dropbtn">Account
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Transactions</a>
                <a href="#">Setting</a>
                <a href="#">Logout</a>
                </div>
        </div>
</div>

        <!--<a href="#profile" id="my-profile">My Profile</a>--> 

<!--<div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Registration Successful!
       Hello  
       <?php 
       /*if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT firstname FROM accounts WHERE email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstname'];
        }
       }*/
       ?>
       :)
      </p>
      <a href="logout.php">Logout</a>
    </div>-->
</body>
</html>