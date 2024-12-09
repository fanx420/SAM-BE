<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/logo.png">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        .navbar-nav .nav-link {
            transition: all 0.3s ease-in-out;
            position: relative;
        }

        .navbar-nav .nav-link:hover {
            color: #FF6F61;
            text-decoration: none;
        }

        .navbar-nav .nav-link::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: #FF6F61;
            transition: width 0.3s ease-in-out;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .navbar {
            background-color: white
        }

        .navbar-nav .nav-link:hover::after {
            width: 100%;
        }

        .textContainer {
            height: 50vh;
        }

        

        .imgContainer img {
            margin: 10px;
        }

        .fw-bold {
            color: #4A90A4;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .fade-in.show {
            opacity: 1;
            transform: translateY(0);
            animation: fadeIn 1s ease forwards;
        }

        .card {
            height: 180px;
        }

        .contactContainer a {
            text-decoration: none;
            color: inherit;
            font-weight: bold;
        }
        @media (max-width: 768px) {
            .contactContainer img{
            width: 50px;
        } 
        }
        

        .contactLink:hover {
            color: #FF6F61;
            position: relative;
            transition: color 0.3s, padding-left 0.3s;
        }
        .contactLink:hover::after {
          transform: scaleX(1);
        }
    </style>
</head>

<body data-bs-theme="light" id="body">

    <nav id="navbar" class="navbar navbar-expand-lg fixed-top shadow-sm scrolling-navbar">
        <div class="container-fluid">
            <a class="navbar-brand ms-2" href="#"><img src="assets/logo.png" width="50px" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#resume">Resume</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#contact">Contact Me</a>
                    </li>
                </ul>
                <button id="btnMode" onclick="changeTheme()" class="btn btn-outline-dark ms-auto">Change theme</button>
            </div>
        </div>
    </nav>

    <section id="home">
        <div class="container">
            <div class="row fade-in">
                <div class="col-12 col-md-4 my-3 ">
                    <div class="textContainer col-12 d-flex flex-row align-items-center justify-content-center">
                        <img class="rounded-circle me-2" src="assets/profile.png" width="250px" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-8 d-flex flex-column justify-content-center">
                    <p class="text-bold">Hello, I am Kaleb Dion Francis Zosa</p>
                    <h1 class="text-bold">I am a <strong style="color:#FF6F61;">Full Stack Web Developer</strong></h1>
                    <p class="text-muted">A full stack web developer with a passion for creating beautiful and
                        functional websites. I've worked with different technologies such as HTML, CSS, JavaScript, PHP,
                        and
                        MySQL.</p>
                    <a href="https://drive.google.com/file/d/1NetnVMgmY9lw5LAsF6YfZVjLGpuygsvc/view?usp=drive_link "
                        target="_blank"><button id="btnDownload" class="btn btn-outline-dark w-30 rounded-5">Download
                            CV</button></a>
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center fw-bold fs-1 my-5">My Projects</h2>
                    <div id="carouselExampleCaptions" class="carousel carousel-dark slide shadow-lg p-3"
                        data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <a href="A05/index.php" target="_blank">
                                <div class="carousel-item active">
                                    <img src="assets/php_icon.png" class="d-block w-50 mx-auto" alt="ACTIVITY">
                            </a>
                        </div>
                        <a href="Act_03/index.html" target="_blank">
                            <div class="carousel-item">
                                <img src="assets/act_03.png" class="d-block w-100 mx-auto" alt="...">

                            </div>
                        </a>
                        <a href="Act_04/index.html" target="_blank">
                            <div class="carousel-item">
                                <img src="assets/act_04.png" class="d-block w-100 mx-auto" alt="...">

                            </div>
                        </a>
                        <a href="Act_05/index.html" target="_blank">
                            <div class="carousel-item">
                                <img src="assets/act_05.png" class="d-block w-100 mx-auto" alt="...">

                            </div>
                        </a>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="resume">
        <div class="container my-5">
            <div class="row">
                <div class="col-12 col-md-6 d-flex flex-column justify-content-start">
                    <h2 class="fw-bold p-2">Education</h2>
                    <div class="educationContainer d-flex align-items-center fade-in mb-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScmNLa6y0GaPEQ4MChxP8ahAbVIe4WSin0RA&s"
                            class="img-fluid" width="150px" alt="school" style="height: auto;">
                        <div class="ms-3">
                            <h4 class="">Polytechnic University of the Philippines</h4>
                            <p class="text-muted">2021-2025</p>
                            <p>Bachelor of Science in Information Technology</p>
                        </div>
                    </div>
                    <div class="educationContainer d-flex align-items-center fade-in mb-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS7ZRSV35RcByY-IpUXR1nVFpG1vyN6K6AcQ9A90xiFRfy_-X3av-OrXjO2ECWvqZ3dh4&usqp=CAU"
                            class="img-fluid" width="150px" alt="school" style="height: auto;">
                        <div class="ms-3">
                            <h4 class="">Calbayog City National High School</h4>
                            <p class="text-muted">2018-2020</p>
                            <p>Science Technology Engineering and Mathematics (STEM)</p>
                        </div>
                    </div>
                    <div class="educationContainer d-flex align-items-center fade-in mb-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS7ZRSV35RcByY-IpUXR1nVFpG1vyN6K6AcQ9A90xiFRfy_-X3av-OrXjO2ECWvqZ3dh4&usqp=CAU"
                            class="img-fluid" width="150px" alt="school" style="height: auto;">
                        <div class="ms-3">
                            <h4 class="">Calbayog City National High School</h4>
                            <p class="text-muted">2014-2017</p>
                            <p>Junior High School</p>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-6 d-flex flex-column justify-content-start">
                    <h2 class="fw-bold p-2">Skills</h2>
                    <div class="skillsContainer d-flex flex-column fade-in mb-4">
                        <h4 class="mt-2">Front End Development</h4>
                        <div class="imgContainer d-flex align-items-center flex-wrap">
                            <div class="card my-2 me-2 shadow">
                                <img class="img-fluid d-block" src="assets/html_icon.png" width="100px" alt="">
                                <div class="card-body">
                                    <div class="card-text text-center">
                                        <p><strong>HTML</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card me-2 shadow">
                                <img class="img-fluid" src="assets/css_icon.png" width="100px" alt="">
                                <div class="card-body">
                                    <div class="card-text text-center">
                                        <p><strong>CSS</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card me-2 shadow">
                                <img class="img-fluid"
                                    src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/bootstrap-5-logo-icon.png"
                                    width="100px" alt="">
                                <div class="card-body">
                                    <div class="card-text text-center">
                                        <p><strong>Bootstrap</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card me-2 shadow">
                                <img class="img-fluid" src="assets/javascript_icon.png" width="100px" alt="">
                                <div class="card-body">
                                    <div class="card-text text-center">
                                        <p><strong>JavaScript</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="skillsContainer d-flex flex-column fade-in mb-4">
                        <h4>Back End Development</h4>
                        <div class="imgContainer d-flex align-items-center flex-wrap">
                            <div class="card me-2 shadow">
                                <img src="assets/php_icon.png" width="100px" alt="">
                                <div class="card-body">
                                    <div class="card-text text-center">
                                        <p><strong>PHP</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card me-2 shadow">
                                <img src="assets/mysql_icon.png" width="100px" alt="">
                                <div class="card-body">
                                    <div class="card-text text-center">
                                        <p><strong>MySQL</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skillsContainer d-flex flex-column fade-in mb-4">
                        <h4>Version Control</h4>
                        <div class="imgContainer d-flex align-items-center flex-wrap">
                            <div class="card me-2 shadow">
                                <img src="assets/git_icon.png" width="100px" alt="">
                                <div class="card-body">
                                    <div class="card-text text-center">
                                        <p><strong>Git</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card me-2 shadow">
                                <img src="assets/github_icon.png" width="100px" alt="">
                                <div class="card-body">
                                    <div class="card-text text-center">
                                        <p><strong>GitHub</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skillsContainer d-flex flex-column fade-in mb-4">
                        <h4>Experienced With</h4>
                        <div class="imgContainer d-flex align-items-center flex-wrap">
                            <div class="card my-2 me-2 shadow">
                                <img src="assets/python_icon.png" width="100px" alt="">
                                <div class="card-body">
                                    <div class="card-text text-center">
                                        <p><strong>Python</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card me-2 shadow">
                                <img src="assets/java_icon.png" width="100px" alt="">
                                <div class="card-body">
                                    <div class="card-text text-center">
                                        <p><strong>Java</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card me-2">
                                <img src="assets/csharp_icon.png" width="100px" alt="">
                                <div class="card-body">
                                    <div class="card-text text-center">
                                        <p><strong>C#</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="contact" style="height: 90vh;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                    <h2 class="text-center fw-bold fs-1">Contact me here</h2>
                    <ul style="list-style-type: none;" class="p-">
                        <li class="my-3">
                            <div class="contactContainer d-flex allign-items-center ">
                                <img src="assets/facebook_icon.png" alt="">
                                <h5 class="my-auto">Facebook:
                                    <a class="contactLink" href="https://www.facebook.com/kaleb.zosa "
                                        target="_blank">Kaleb Dion Francis Zosa</a>
                                </h5>
                            </div>
                        </li>
                        <li class="my-3">
                            <div class="contactContainer d-flex allign-items-center"><img src="assets/linkedin_icon.png"
                                    alt="">
                                <h5 class="my-auto">Linkedin:
                                    <a class="contactLink"
                                        href="https://www.linkedin.com/in/kaleb-dion-francis-zosa-775057330/"
                                        target="_blank">Kaleb Dion Francis Zosa</a>
                                </h5>

                            </div>
                        </li>
                        <li class="my-3">
                            <div class="contactContainer d-flex allign-items-center">
                                <img src="assets/gmail_icon.png" alt="">
                                <h5 class="my-auto">Email:
                                    <a class="contactLink"
                                        href="https://mail.google.com/mail/?view=cm&fs=1&to=kalebdionfrancisz@gmail.com&su=Inquiry&body=Hello,%20I%20have%20an%20inquiry...%20[Your%20Message%20Here]"
                                        target="_blank">Kalebdionfrancisz@gmail.com</a>

                                </h5>
                            </div>
                        </li>
                        <li class="my-3">
                            <div class="contactContainer d-flex allign-items-center">
                                <img src="assets/phone_icon.png" alt="">
                                <h5 class="my-auto">Phone number: 09161048045</h5>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="col-12 col-sm-12 col-md-6 fade-in">
                    <iframe
                        src="https://www.google.com/maps/d/u/3/embed?mid=1Re6sFurELVTmByK7U_tGvSLdjt1mPAI&ehbc=2E312F&noprof=1"
                        width="100%" height="480"></iframe>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>

    <script>
        let colorMode = "light";
        const body = document.getElementById("body");
        const btnMode = document.getElementById("btnMode");
        const btnDownload = document.getElementById("btnDownload");
        const carousel = document.getElementById("carouselExampleCaptions");
        const nav = document.getElementById("navbar");

        function btnChangeDark() {
            body.setAttribute("data-bs-theme", "dark");
            colorMode = "dark";
            btnMode.innerHTML = "Change theme";
            btnMode.classList.remove("btn-outline-dark");
            btnMode.classList.add("btn-outline-light");
            btnDownload.classList.remove("btn-outline-dark");
            btnDownload.classList.add("btn-outline-light");
            carousel.classList.remove("carousel-dark");
            carousel.classList.add("carousel-light");
            nav.style.backgroundColor = 'black';

        }

        function btnChangeLight() {
            body.setAttribute("data-bs-theme", "light");
            colorMode = "light";
            btnMode.innerHTML = "Change theme";
            btnMode.classList.remove("btn-outline-light");
            btnMode.classList.add("btn-outline-dark");
            btnDownload.classList.remove("btn-outline-light");
            btnDownload.classList.add("btn-outline-dark");
            carousel.classList.remove("carousel-light");
            carousel.classList.add("carousel-dark");
            nav.style.backgroundColor = 'white';
        }

        function changeTheme() {
            if (colorMode == "light") {
                btnChangeDark();
            } else {
                btnChangeLight();
            }
        }
    </script>

    <script>
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });

    </script>

    <script>
        const fadeIns = document.querySelectorAll('.fade-in');

        function handleScroll() {
            fadeIns.forEach(element => {
                const rect = element.getBoundingClientRect();
                if (rect.top < window.innerHeight - 50) {
                    element.classList.add('show');
                }
            });
        }

        window.addEventListener('scroll', handleScroll);

        // Trigger the effect for elements already in view on page load
        window.addEventListener('load', handleScroll);
    </script>
</body>

</html>