<?php

$Username ='';
$Password ='';


if (isset($_POST['submit'])){
    $Username =   $_POST['Username'];
    $Password =   $_POST['Password'];

    $Hashed_Password = password_hash($Password, PASSWORD_DEFAULT);


    $db = mysqli_connect('localhost', 'root', '','php');
    $sql= sprintf("INSERT INTO login_account(login_name, login_password) VALUES('%s','%s')",
        mysqli_real_escape_string($db, $Username),
        mysqli_real_escape_string($db, $Hashed_Password));
    mysqli_query($db, $sql);
    mysqli_close($db);

}

?>