<?php

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

if($conn ->connect_error) {
    echo "Error: " . $conn->connect_error;
} else {
    echo "Connected successfully!";
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "admin";
$pass = "67890";
$stmt->execute();

?>