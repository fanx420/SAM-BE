<?php
session_start();
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userName = htmlspecialchars($_POST['userName']);
    $password = $_POST['password'];
    $role = $_POST['role']; 

    $sql = "SELECT userName, role, password FROM tbl_user WHERE userName = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $userName);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();


            if (password_verify($password, $user['password'])) {
             
                if ($role === $user['role']) {

                    $_SESSION['userName'] = $user['userName'];
                    $_SESSION['role'] = $user['role'];

                    if ($user['role'] === 'admin') {
                        header("Location: admin.php");
                        exit();
                    } elseif ($user['role'] === 'user') {
                        header("Location: user_dashboard.php");
                        exit();
                    }
                } else {

                    echo '<script type="text/javascript">
                            alert("The role you selected does not match your account role. Please try again.");
                            window.location.href = "login.php"; 
                          </script>';
                    exit();
                }
            } else {
                echo '<script type="text/javascript">
                        alert("Invalid password.");
                        window.location.href = "login.php"; 
                      </script>';
                exit();
            }
        } else {
            echo '<script type="text/javascript">
                    alert("No account found with that username.");
                    window.location.href = "login.php"; 
                  </script>';
            exit();
        }

        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
