<?php
session_start();
include 'connect.php';


if (empty($_SESSION['userName'] || empty($_SESSION['role'] || empty($_SESSION['password'])))) {
    header("Location: login.php");
    exit;
}





if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];


    $updateSql = "UPDATE tbl_user SET firstName = ?, lastName = ?, userName = ? WHERE id = ?";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param("sssi", $firstName, $lastName, $username, $user_id);

    if ($stmt->execute()) {

        header("Location: admin.php");
        exit;
    } else {
        echo "Error updating user: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Olympic+Sans&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Olympic Sans', sans-serif;
        }

        .navbar {
            border-bottom-width: 2px;
            border-bottom-color: black;
            border-bottom-style: solid;
        }

        .sidebar {
            position: fixed;
            top: 55px;
            left: 0;
            width: 250px;
            border-right-width: 2px;
            border-right-color: black;
            border-right-style: solid;
            padding: 20px;
            height: calc(100vh - 55px);
            overflow-y: auto;
            background-color: #f8f9fa;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .sidebar .profile {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar .profile img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .sidebar .menu a {
            display: block;
            padding: 10px;
            margin: 5px 0;
            text-decoration: none;
            color: #000;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .sidebar .menu a.active {
            background-color: #e9ecef;
            color: #007bff;
        }

        .sidebar .menu a:hover {
            background-color: #e9ecef;
        }

        .sidebar .logout-btn {
            margin-top: 20px;
            display: block;
            text-align: center;
        }

        @media screen and (max-width: 768px) {
            .sidebar {
                width: 100%;
                position: relative;
                height: auto;
            }

            .content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top shadow-sm scrolling-navbar">
        <div class="container-fluid">
            <a class="navbar-brand ms-2" href="#"><img src="assets/logo.png" width="50px" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    </nav>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3 sidebar">
                <div class="profile">
                    <img src="assets/default_pfp.jpg" alt="">
                    <p>Hello <?php echo $_SESSION['userName']; ?></p>
                </div>
                <div class="menu my-5">
                    <a href="admin.php" class="active">Users</a>
                    <a href="add_task.php">Add task</a>
                </div>

                <a href="logout.php" class="btn btn-danger logout-btn">Logout</a>
            </div>


            <div class="col-md-9 content my-5">
                <h1>Edit User</h1>
                <form action="edit_user.php" method="POST">
                    <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['id']); ?>">

                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="firstName" value="<?= htmlspecialchars($user['firstName']); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" name="lastName" value="<?= htmlspecialchars($user['lastName']); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" name="username" value="<?= htmlspecialchars($user['userName']); ?>" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="admin.php" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>