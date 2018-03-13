<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <title>De Gokkers - Home</title>
    <script>
        function load() {
            document.getElementById('registerForm').style.display="none";
        }
    </script>
</head>
<body onload="load()">
<div class="back-top"><i class="fas fa-chevron-up"></i></div>
    <header>
        <div class="container">
            <h1>De Gokkers</h1>
            <div>
                <div>
                    <a id="btnInfo">Information</a>
                    <a id="btnDownload">Download</a>
                </div>
                <?php
                    if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true) {

                    echo "<p>" . $_SESSION['username'] . "</p>";
                ?>
                        <a href="logout.php">Logout</a>
                <?php
                }else{
                ?>
                    <a id="btnLogin"><i class="far fa-user"></i></a>
                <?php
                }
                ?>
            </div>
        </div>
    </header>
    <main>
        <div id="login" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="fas fa-times close"></i>
                    <h2 id="headertext">Login</h2>
                </div>
                <div class="modal-body">
                    <form id="loginForm" action="login.php" method="post">
                        <div>
                            <input type="text" placeholder="Username" id="username" name="username">
                        </div>
                        <div>
                            <input type="password" placeholder="Password" id="password" name="password">
                        </div>
                        <div>
                            <input type="submit" value="Login" id="loginButton" name="loginButton">
                        </div>
                        <p>Don't yet have an account? <a href="javascript:register()"">Click Here!</a></p>
                    </form>
                    <form id="registerForm" action="register.php" method="post">
                        <div>
                            <input type="text" placeholder="Username" id="username" name="username">
                        </div>
                        <div>
                            <input type="email" placeholder="Email" id="email" name="email">
                        </div>
                        <div>
                            <input type="password" placeholder="Password" id="password" name="password">
                        </div>
                        <div>
                            <input type="submit" value="Register" id="registerButton" name="registerButton">
                        </div>
                        <p>Already have an account? <a href="javascript:login()">Login!</a></p>
                    </form>
                </div>
            </div>
        </div>
        <div id="video">
            <div class="container">
                <h2>Gameplay</h2>
                <div>
                    <video src="videos/gameplay.mp4" controls>
                        Your browser does not support video.
                    </video>
                </div>
            </div>
        </div>

        <div id="info">
            <div class="container">
                <div class="title">
                    <i class="fas fa-info"></i><h2>Information</h2>
                </div>
                <div class="items">
                    <div class="item">
                        <h3>Game Info</h3>
                        <p>
                            The objective of this game is to earn money by betting on animals, in this version of the game
                            you can bet on; dolphins, sharks and fishes. You can bet on either fish #1, #2, #3 or #4. If
                            the fish you bet on won the race you will win double your bet amount! If the fish loses you
                            will lose the betted money! you are game over if you're out of money.
                        </p>
                    </div>
                    <div class="item">
                        <h3>Instrucion</h3>
                        <p>
                            To get started, run the executable file. On the left side of the program you can choose who is
                            betting. In the center you can choose what animals are racing against each other, to apply your
                            choice you must click the 'choose' button. Also in the center you can set the amount and on what
                            animal you want to bet. To bet click the 'Wedt' button. To start the race click the
                            'Start Race' button. And last, you can see what everyone betted and on what animal they did on
                            the right!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="download">
            <div class="container">
                <?php
                    if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true) {
                ?>
                <a href="">Download</a>
                <?php
                    } else {
                ?>
                <p>To download the gokkers your need to be logged in! <a id="btnLogin" href="#">Click here!</a></p>
                 <?php
                    }
                ?>
            </div>
        </div>
    </main>

    <script>
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 200) {
                    $('.back-top').fadeIn();
                } else {
                    $('.back-top').fadeOut();
                }
            });

            // scroll body to 0px on click
            $('.back-top').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 1000);
                return false;
            });
        });


        var info = document.getElementById('btnInfo');
        var download = document.getElementById('btnDownload');

        info.onclick = function () {
            document.getElementById('info').scrollIntoView({behavior: 'smooth'});
        }
        download.onclick = function (){
            document.getElementById('download').scrollIntoView({behavior: 'smooth'});
        }

        var modal = document.getElementById('login');

        var btn = document.getElementById("btnLogin");

        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function () {
            modal.style.display = "block";
        }

        span.onclick = function () {
            modal.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function validation()
        {

            var check=document.getElementById('email').type;
            if(check=="email")
            {
                var value=document.getElementById('email').value;
                if(value=="")
                {

                    document.getElementById('error').innerHTML="Incorrect Email Address";

                }
            }
        }

    </script>
    <script>

        function register() {
            document.getElementById('registerForm').style.display="block";
            document.getElementById('loginForm').style.display="none";
            document.getElementById('headertext').textContent = "Register";
        }
        function login() {
            document.getElementById('registerForm').style.display="none";
            document.getElementById('loginForm').style.display="block";
            document.getElementById('headertext').textContent = "Login";
        }
            </script>
</body>
</html>