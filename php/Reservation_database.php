<?php

$username   = '';
$achternaam = '';
$email      = '';
$phone      = '';
$time       = '';
$datum      = '';
$time1      = '';

if (isset($_POST['submit'])) {
    $username   = $_POST['Name'];
    $achternaam = $_POST['Surname'];
    $email      = $_POST['Email'];
    $phone      = $_POST['Phone'];
    $time       = $_POST['Time'];
    $time1      = $_POST['Time1'];
    $datum      = $_POST['Date'];

    $db = mysqli_connect('localhost', 'root', '', 'php');
    $sql = sprintf("INSERT INTO Reserveringen(Phone, Username, Email, Achternaam, Time, Time1, Datum) VALUES ('%s','%s','%s','%s','%s','%s','%s')",
        mysqli_real_escape_string($db, $phone),
        mysqli_real_escape_string($db, $username),
        mysqli_real_escape_string($db, $email),
        mysqli_real_escape_string($db, $achternaam),
        mysqli_real_escape_string($db, $time),
        mysqli_real_escape_string($db, $time1),
        mysqli_real_escape_string($db, $datum));
    mysqli_query($db, $sql);
    mysqli_close($db);

}


?>