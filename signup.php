<?php
include 'connect.php';

if (isset($_POST['signup'])) {
    $firstName = trim($_POST['firstName']);
    $lastName  = trim($_POST['lastName']);
    $email     = trim($_POST['email']);
    $password  = $_POST['password'];
    $confirm   = $_POST['confirm'];

    if ($password !== $confirm) {
        echo "Passwords do not match.";
        exit();
    }

    $stmt = $conn->prepare("SELECT id FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        $insert = $conn->prepare("INSERT INTO user (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        $insert->bind_param("ssss", $firstName, $lastName, $email, $hashed);

        if ($insert->execute()) {
            header("Location: index.php#login");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>
