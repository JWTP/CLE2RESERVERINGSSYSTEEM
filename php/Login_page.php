<?php
    require 'Config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ID KAFEE</title>        <!-- //this is the title of the webpage, this will be seen in the browser tab-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Style.css">


</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">      <!--  //this is the navbar-->
            <ul class="nav navbar-nav">
                <li><a href="php/index.php">ID KAFEE</a></li>          <!--  //this is the first item shown in the navbar-->
                <li><a href="Reserveren.php">Reserveren</a></li>   <!-- //this is the second item shown in the navbar-->

            </ul>
            <ul class="nav navbar-nav navbar-right">              <!--   // If the user has loged in he will be in a session, this code will change log out and log in based on the current state of the session-->
                <?php
                if (isset($_SESSION['UID'])){
                    echo "></span> Log out</a></li>";
                }
                else
                    echo "<li><a href=\"Login_page.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Log in</a></li>"
                ?>

            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
        </div>
        <div class="col-sm-8 text-left">
            <form method="post" action="">
                <br/>
                <div class="form-group">
                    <label for="Username">Username:</label>   <!--  //this is where the admin enters its username to log in-->
                    <input type="text" name="Username" class="form-control" id="Login_username" required autofocus placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="Password">Password:</label>   <!--  //this is where the admin enters its password to log in, it will be converted into ********-->
                    <input type="password" name="Password" class="form-control" id="Login_password" required autofocus placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="SUBMIT" class="form-control" id="Login_button" value="Login">
                </div>

        </div>
        <div class="col-sm-2 sidenav">

        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>ID KAFEE</p>           <!--  // this is the footer this will show te text at the bottom of the page-->
</footer>

</body>
</html>