<?php
session_start();
include 'connect.php'; // make sure this connects to your DB

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['email'];

// Fetch first name from database
$stmt = $conn->prepare("SELECT firstName FROM accounts WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $firstName = $row['firstName'];
} else {
    $firstName = "Guest"; // fallback if something fails
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f4f4;
        }

        h1 {
            font-size: 3rem;
            color: #333;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeSlideIn 1s ease-out forwards;
        }

        @keyframes fadeSlideIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <h1>Hello, <?php echo htmlspecialchars($firstName); ?>!</h1>
</body>
</html>