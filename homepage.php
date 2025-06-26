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
    <link rel="stylesheet" href="styles.css">
</head>
<body>   
    <div class="white-section"></div>

    <h1 class="header">
        <a href="#" class="logo">Logo</a>

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