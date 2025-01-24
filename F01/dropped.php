<?php
session_start();
include 'connect.php';

if (empty($_SESSION['userName'])) {
    header("Location: login.php");
    exit;
}

$tasks = [];
$userName = $_SESSION['userName'];

$sql = "SELECT id FROM tbl_user WHERE userName = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $userName);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($userId);
$stmt->fetch();

if ($userId > 0) {
    $sql = "SELECT * FROM tbl_task WHERE user_id = ? AND status = 'dropped'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $tasks = $result->fetch_all(MYSQLI_ASSOC);
    }
} else {
    echo " script>alert('Invalid user.')</script>"; 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Olympic+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/logo.png">

    <style>
        body {
            font-family: 'Olympic Sans', sans-serif;
        }

        .navbar {
            background-color: #FFB114;
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
            margin-top: 10px;
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
                    <a href="user_dashboard.php">Tasks</a>
                    <a href="completed.php">Completed</a>
                    <a href="dropped.php" class="active">Dropped</a>
                </div>

                <a href="logout.php" class="btn btn-danger logout-btn">Logout</a>
            </div>


            <div class="col-md-9 content my-5">
                <h2 class="fw-bold mt-3">Dropped</h2>
                <div class="row">
                    <?php if (count($tasks) > 0): ?>
                        <?php foreach ($tasks as $task): ?>
                            <div class="col-md-4 mb-4">
                                <div class="card shadow-sm" style="background-color:  #F0282D;">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo htmlspecialchars($task['taskName']); ?></h5>
                                        <p class="card-text"><?php echo htmlspecialchars($task['taskDescription']); ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No tasks assigned.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>