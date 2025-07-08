<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="subs-style.css">
    <title>Subscription</title>
</head>
<body>
    <div class="container">
        <h2>Choose your plan</h2>
        <div class="price-row">
            <div class="price-col">
                <p>Starter</p>
                <h3>$89.99 <span>/ month</span></h3>
                <ul>
                    <li>10% Discount Check-in fee</li>
                    <li>5% off on Partner Services</li>
                    <li>Early check-in, Late check out</li>
                    <li>Priority Support</li>
                    <li></li>              
                    <li></li>
                </ul>
                <button class="starter_button">Subscribe</button>
            </div>

            <div class="price-col">
                <p>Advanced</p>
                <h3>$199.99 <span>/ month</span></h3>
                <ul>
                    <li>15% Discount Check-in fee</li>
                    <li>8% off on Partner Services</li>
                    <li>Early check-in, Late check out</li>
                    <li>Priority Support</li>
                    <li></li>
                    <li></li>
                </ul>
                <button class="advanced_button">Subscribe</button>
            </div>

            <div class="price-col">
                <p>Premium</p>
                <h3>$329.99 <span>/ month</span></h3>
                <ul>
                    <li>20% Discount Check-in fee</li>
                    <li>15% off on Partner Services</li>
                    <li>Early check-in, Late check out</li>
                    <li>Priority Support</li>
                    <li>Room and Flight Class Upgrade</li>
                    <li>Exclusive Offers</li>
                </ul>
                <button class="premium_button">Subscribe</button>
            </div>

        </div>
    </div>
    
</body>
</html>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="subs-style.css">
    <title>Subscription</title>
</head>
<body>
    <div class="container">
        <h2>Choose your plan</h2>
        <div class="price-row">

            --starter
            <div class="price-col">
                <p>Starter</p>
                <h3>$89.99 <span>/ month</span></h3>
                <ul>
                    <li>10% Discount Check-in fee</li>
                    <li>5% off on Partner Services</li>
                    <li>Early check-in, Late check out</li>
                    <li>Priority Support</li>
                </ul>
                <form action="process_subscription.php" method="POST">
                    <input type="hidden" name="plan" value="Starter">
                    <button type="submit" name="subscribe" class="starter_button">Subscribe</button>
                </form>
            </div>

            --advanced
            <div class="price-col">
                <p>Advanced</p>
                <h3>$199.99 <span>/ month</span></h3>
                <ul>
                    <li>15% Discount Check-in fee</li>
                    <li>8% off on Partner Services</li>
                    <li>Early check-in, Late check out</li>
                    <li>Priority Support</li>
                </ul>
                <form action="process_subscription.php" method="POST">
                    <input type="hidden" name="plan" value="Advanced">
                    <button type="submit" name="subscribe" class="advanced_button">Subscribe</button>
                </form>
            </div>

            --premium
            <div class="price-col">
                <p>Premium</p>
                <h3>$329.99 <span>/ month</span></h3>
                <ul>
                    <li>20% Discount Check-in fee</li>
                    <li>15% off on Partner Services</li>
                    <li>Early check-in, Late check out</li>
                    <li>Priority Support</li>
                    <li>Room and Flight Class Upgrade</li>
                    <li>Exclusive Offers</li>
                </ul>
                <form action="process_subscription.php" method="POST">
                    <input type="hidden" name="plan" value="Premium">
                    <button type="submit" name="subscribe" class="premium_button">Subscribe</button>
                </form>
            </div>

        </div>
    </div>
</body>
</html>

-->
<?php
/*if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['plan'])) {
    $chosenPlan = htmlspecialchars($_POST['plan']);

    // Do something with the selected plan (e.g., store in DB, redirect, etc.)
    echo "You selected the <strong>$chosenPlan</strong> plan.";
} else {
    echo "No subscription plan selected.";
}
?>