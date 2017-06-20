

<?php

if (isset($_POST['Username']) && isset($_POST['Password'])){
    $db  = mysqli_connect('localhost','root','','php');                     // this is how you connect to the database
    $sql = sprintf("SELECT * FROM login_account WHERE login_name='%s'",     // is the sql querry where we fetch the data from the login and password
        mysqli_real_escape_string($db, $_POST['Username'])
    );
    $result = mysqli_query($db, $sql);
    $row    = mysqli_fetch_assoc($result);
    if ($row){
        $hash = $row['login_password'];

        if (password_verify($_POST['Password'], $hash)){    // this will check if your password is correct
            $_SESSION['UID'] = $row['login_name'];
            header("Location: index.php");
        } else{
            ?>
            <script>                        <!-- // this will show a message if your password or username is wrong -->
            window.alert("Login failed");
            </script>
            <?php
        }
    } else {
        ?>
        <script>                            <!-- // this will show a message if your password or username is wrong -->
        window.alert("Login failed");
        </script>
        <?php
    }
    mysqli_close($db);

}



?>


