<?php

$id = $_GET['id'];      //this will get the id from the database

$dbc = mysqli_connect('localhost', 'root', '', 'php') or die('Connection error!');  //this is where you connect to the database

$query = "DELETE FROM Reserveringen WHERE ID = '$id'";      //this the sql query that you run to delete data from the table
mysqli_query($dbc, $query) or die('Database error!');

header('location: index.php');                               //this will take you to the homepage after you deleted the data



