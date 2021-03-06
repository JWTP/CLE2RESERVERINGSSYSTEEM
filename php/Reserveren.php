<?php
    require 'Config.php';               //
    require 'Reservation_database.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>ID KAFEE</title>        <!-- //this is the title of the webpage, this will be seen in the browser tab -->
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
        <div class="collapse navbar-collapse" id="myNavbar">  <!--  // this is the navigation bar-->
            <ul class="nav navbar-nav">
                <li><a href="../php/index.php">ID KAFEE</a></li>      <!--  // This is the first clickable item in the navigation bar-->
                <li class="active"><a href="Reserveren.php">Reserveren</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">          <!--  // If the user has loged in he will be in a session, this code will change log out and log in based on the current state of the session-->
                <?php
                if (isset($_SESSION['UID'])){
                    echo "></span>  Log out</a></li>";
                }
                else
                    echo "<li><a href=\"Login_page.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Log in</a></li>";
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
            <form method="post" action="">            <!--  // This is the form that will be filled in by the users-->
                <div class="form-group">
                    <label for="name">Name:</label>    <!-- // This is the input for the name-->
                    <input type="text" class="form-control" id="name" name="Name" required autofocus placeholder="Name"  >
                </div>
                <div class="form-group">
                    <label for="Surname">Surname:</label><!-- // This is the input for the surname-->
                    <input type="text" class="form-control" id="Surname" name="Surname" required autofocus placeholder="Surname" >
                </div>
                <div class="form-group">
                    <label for="Email">Email:</label>  <!-- // This is the input for the Email-->
                    <input type="email" class="form-control" id="Email" name="Email" required autofocus placeholder="Example@gmail.com" >
                </div>
                <div class="form-group">
                    <label for="Phone">Phone:</label>  <!-- // This is the input for the phone-->
                    <input type="tel" class="form-control" id="Phone" name="Phone" required autofocus placeholder="0612345678">
                </div>
                <div class="form-group">
                    <label for="Time">Starting time:</label>   <!-- // This is the input for the starting time-->
                    <input type="time" class="form-control" id="Time" name="Time" required autofocus placeholder="12:00">
                </div>
                <div class="form-group">
                    <label for="Time1">Ending time:</label> <!--// This is the input for the ending time-->
                    <input type="time" class="form-control" id="Time1" name="Time1" required autofocus placeholder="13:00">
                </div>
                <div class="form-group">
                    <label for="date">Date:</label>    <!-- // This is the input for the date-->
                    <input type="date" class="form-control" id="date" name="Date" required autofocus placeholder="DD-MM-YYYY">
                </div>
                <br/>
                <div class="form-group">
                    <input type="SUBMIT" name="submit" class="form-control" id="Submit" value="Submit">
                </div>
            </form>

        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>ID KAFEE</p>             <!--    // this is the footer this text shows at the bottom of the page-->
</footer>

</body>
</html>