<?php
session_start();
include("../common/db.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['signup'])) {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare(
        "INSERT INTO users (username, email, password) VALUES (?, ?, ?)"
    );

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sss", $username, $email, $password);
    $result = $stmt->execute();

    if ($result) {
        $_SESSION["user"] = [
            "username" => $username,
            "email"    => $email
        ];

        header("Location: /discuss");
        exit;
    }
}
?>
