<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Optional: check if email already exists
    $check = $conn->prepare("SELECT * FROM accounts WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        echo "Email already registered!!.";
        die();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into database
    $stmt = $conn->prepare("INSERT INTO accounts (firstname, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $email, $hashedPassword); // save both as hash
    
    if ($stmt->execute()) {
        session_start();
        $_SESSION['email'] = $email;
        header("Location: login.php");
        exit();
        //echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
