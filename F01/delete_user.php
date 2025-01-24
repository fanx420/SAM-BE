<?php
session_start();
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user_id = $_POST['id'];


    $deleteSql = "DELETE FROM tbl_user WHERE id = ?";
    $stmt = $conn->prepare($deleteSql);


    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }


    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {

        $_SESSION['message'] = "User deleted successfully.";
        header("Location: admin.php");
        exit;
    } else {
        echo "Error deleting user: " . $stmt->error;
    }
}
