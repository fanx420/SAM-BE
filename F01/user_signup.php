<?php 
session_start();
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $userName = htmlspecialchars($_POST['userName']);
    $role = htmlspecialchars($_POST['role']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); 

   
    $signupSql = "INSERT INTO tbl_user (firstName, lastName, userName, role, password) VALUES (?, ?, ?, ?, ?)";

    
    if ($stmt = $conn->prepare($signupSql)) {
        $stmt->bind_param("sssss", $firstName, $lastName, $userName, $role, $password);


        if ($stmt->execute()) {
            echo "Account created successfully!";
            header("Location: login.php");
        } else {
            echo "Failed to create account: " . $stmt->error;
        }


        $stmt->close();
    } else {
        echo "Failed to prepare the statement: " . $conn->error;
    }


    $conn->close();
}
?>
