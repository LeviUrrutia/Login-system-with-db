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
    <div class="container">
        <p id="promo-deal">
            Promo Deals
        </p>
        <p id="transaction">
            Transactions
        </p>
        <p id="my-profile">
            My Profile
        </p>
        <p id="contact-us">
            Contact Us
        </p>
    </div>
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