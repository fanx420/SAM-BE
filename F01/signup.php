<?php
include 'connect.php';

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
      overflow-y: hidden;
    }

    .navbar {
      background-color: #FFB114;
      border-bottom-width: 2px;
      border-bottom-color: black;
      border-bottom-style: solid;
    }

    .card {
      margin: auto; 
      margin-top: 75px;
      width: 50%; 
      border-radius: 10px;
    }
    .btn{
      margin: auto;
    }
    
    @media screen and (max-width: 768px) {
      .card{
        width: 100%;
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

  <div class="container my-5">
    <div class="row">
      <div class="col-12">
        <div class="card shadow">
            <h1 class="text-center m-4">SIGN UP</h1>
          <div class="card-body">
                <form action="user_signup.php" method="post">
                    <input name="firstName" type="text" placeholder="First name" class="form-control my-4" required>
                    <input name="lastName" type="text" placeholder="Last name" class="form-control my-4" required>
                    <input name="userName" type="text" placeholder="Username" class="form-control my-4" required>
                    <select name="role" id="" class="form-control" required>
                      <option class="text-muted" value="">--Select Role--</option>
                      <option value="admin">Admin</option>
                      <option value="user">User</option>
                    </select>
                    <input name="password" type="password" placeholder="Password" class="form-control my-4" required>
                  </div>
                  <input type="submit" value="Sign Up" class="btn btn-primary ">

                  <p class="text-center my-4">
                    Already have an account? <a href="login.php">Login</a>
                  </p>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>