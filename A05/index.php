<?php
include 'connect.php';
include 'class.php';
include 'islands.php';
include 'content.php';

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Islands of Personalities</title>
    <link rel="icon" href="../assets/logo.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">

    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Nunito", sans-serif;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #FFD700, #1E90FF, #FF4500, #32CD32, #800080);
            background-size: 400% 400%;
            animation: gradientAnimation 10s ease infinite;

            margin: 0;
        }

        .w3-sidebar {
            background-color: #7000c3;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .card {
            background-color: rgba(255, 255, 255, 0.5);
            overflow-y: auto;
            height: 450px;  
        }

        .card-body img{
         height: 250px;
         width: 250px;
        }
    </style>
</head>

<body class="w3-light-grey w3-content" style="max-width:1600px">
    <div class="container">
        <div class="backgroundContainer">

        </div>
    </div>
    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white shadow" style="z-index:3;width:300px; left:0;" id="mySidebar"><br>
        <div class="w3-container">
            <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
                <i class="fa fa-remove"></i>
            </a>
            <img src="../assets/profile.png" style="width:45%;" class="w3-round"><br><br>
            <h4><b>Kaleb's Island of personalities</b></h4>
        </div>
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">

        <!-- Header -->
        <header id="portfolio">
            <a href="#"><img src="../assets/profile.png" style="width:100px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
            <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
            <div class="w3-container">
                <h1 class="mt-3"><b>Islands of Personalities</b></h1>
            </div>
        </header>

        <!-- First Photo Grid-->
        <div class="container mt-2">
            <div class="row">
                <?php
                foreach ($islands as $island) {
                    $html= $island->generateIsland();
                    echo $html;
                }
                
                 ?>
            </div>
        </div>
    
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Chivalry Island</h1>
                    <?php
                        foreach ($content1 as $content) {
                            echo $content->generateContent();
                        }
                    ?>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Independence Island</h1>
                    <?php
                        foreach ($content2 as $content) {
                            echo $content->generateContent();
                        }
                    ?>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Discipline Island</h1>
                    <?php
                        foreach ($content3 as $content) {
                            echo $content->generateContent();
                        }
                    ?>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Courage Island</h1>
                    <?php
                        foreach ($content4 as $content) {
                            echo $content->generateContent();
                        }
                    ?>

                </div>
            </div>
        </div>



        <script>
            // Script to open and close sidebar
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }
        </script>

            

</body>

</html>