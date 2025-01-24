<?php
session_start();
include 'connect.php';

if (empty($_SESSION['userName'] || empty($_SESSION['role'] || empty($_SESSION['password'])))) {
    header("Location: login.php");
    exit;
}

$sql = "SELECT id, userName  FROM tbl_user WHERE role = 'user' ";
$result = executeQuery($sql);
$users = $result->fetch_all(MYSQLI_ASSOC);

if (isset($_POST['submit'])) {
    $task_name = $_POST['taskName'];  
    $task_description = $_POST['taskDescription'];  
    $userName = $_POST['userName'];  
    $status = $_POST['status'];


    $sql = "SELECT id FROM tbl_user WHERE userName = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $userName);  
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        $userId = $row['id'];


        $sql = "INSERT INTO tbl_task (taskName, taskDescription, user_id, status) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssis", $task_name, $task_description, $userId, $status); 
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
            echo "<script type='text/javascript'>alert('Task successfully added!');</script>";
        } else {
            echo "<script type='text/javascript'>alert('Failed to add task.');</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('User not found.');</script>";
    }
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

        .card {
            top: 100px;
            right: 50px
        }

        @media screen and (max-width: 1200px) {
            .card {
                top: 100px;
                right: 0px
            }
        }

        @media screen and (max-width: 850px) {
            .card {
                top: 100px;
                right: 0px
            }
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

            .card {
                top: 0px;
                right: 0px
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
                    <a href="admin.php">Users</a>
                    <a href="add_task.php" class="active">Add task</a>
                </div>

                <a href="logout.php" class="btn btn-danger logout-btn">Logout</a>
            </div>


            <div class="container my-5">
                <div class="row justify-content-end allign-items-center">
                    <div class="col-md-9">
                        <div class="card shadow-lg p-4">
                            <h2 class="text-center mb-4">Add New Task</h2>
                            <form action="add_task.php" method="POST">
                                <div class="form-group mb-3">
                                    <input type="hidden" name="status"value="pending">
                                    <label for="task_name" class="form-label">Task Name:</label>
                                    <input type="text" class="form-control" name="taskName"  required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="task_description" class="form-label">Task Description:</label>
                                    <textarea class="form-control" name="taskDescription" rows="4" required></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="username" class="form-label">Assign User:</label>
                                    <select  class="form-control" name="userName" id="username">
                                        <option value="">--Select User--</option>
                                        <?php
                                        foreach ($users as $user): ?>
                                            <option value="<?= $user['userName']; ?>"><?= $user['userName']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-primary">Add Task</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>