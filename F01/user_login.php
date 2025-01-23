<?php
session_start();
include 'connect.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $userName = htmlspecialchars($_POST['userName']);
    $password = $_POST['password'];

  
    $sql = "SELECT userName, role, password FROM tbl_user WHERE userName = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $userName);
        $stmt->execute();
        $result = $stmt->get_result();

        
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();


            if (password_verify($password, $user['password'])) {

                $_SESSION['userName'] = $user['userName'];
                $_SESSION['role'] = $user['role'];


                if ($user['role'] === 'admin') {
                    header("Location: admin.php");
                } else {
                    header("Location: user_dashboard.php");
                }
                exit();
            } else {
                echo '<script type="text/javascript">
                        alert("Invalid password.");
                        window.location.href = "login.php"; // Redirect to login.php
                      </script>';
            }
            } else {
                echo '<script type="text/javascript">
                        alert("No account found with that username.");
                        window.location.href = "login.php"; // Redirect to login.php
                      </script>';
            }
            

        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
