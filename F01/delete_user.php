<?php
session_start();
include 'connect.php';

// Redirect to login if session variables are empty
if (empty($_SESSION['userName'] || empty($_SESSION['role'] || empty($_SESSION['password'])))) {
    header("Location: login.php");
    exit;
}

// Fetch the user details if 'id' is passed in the URL
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Query to fetch the user details
    $sql = "SELECT id, firstName, lastName, userName FROM tbl_user WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id); // Bind the ID as an integer
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc(); // Fetch user data as an associative array

    // If user is not found, show error and exit
    if (!$user) {
        echo "User not found.";
        exit;
    }

    $stmt->close();
}

// Handle form submission to update the user details
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];

    // Update the user details in the database
    $updateSql = "UPDATE tbl_user SET firstName = ?, lastName = ?, userName = ? WHERE id = ?";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param("sssi", $firstName, $lastName, $username, $user_id);

    if ($stmt->execute()) {
        // Redirect to the admin page after successful update
        header("Location: admin.php");
        exit;
    } else {
        echo "Error updating user: " . $stmt->error;
    }

    $stmt->close();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="edit_user.php" method="POST">
        <input type="hidden" name="user_id" value="<?= $user['id']; ?>">
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" value="<?= htmlspecialchars($user['firstName']); ?>" required><br>>
        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" value="<?= htmlspecialchars($user['lastName']); ?>" required><br>
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?= htmlspecialchars($user['userName']); ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
