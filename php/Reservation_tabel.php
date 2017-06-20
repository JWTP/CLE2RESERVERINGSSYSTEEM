<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "php";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);     //this is where we connect to the database
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// this is the sql querry wich will fetch the data from the database
$sql = "SELECT Email, Username, Achternaam, Phone, Time, Time1, Datum, ID FROM Reserveringen ORDER BY `datum` ASC";

$result = $conn->query($sql);

if (isset($_SESSION['UID'])) {      // if in a session show additional data
    echo "<table><tr>
        <th>Voornaam    </th>       <!-- this is where the tabel headers are made -->
        <th>Achternaam  </th>
        <th>Email       </th>
        <th>Phone       </th>
        <th>Van         </th>
        <th>Tot         </th>
        <th>Datum       </th>
        </tr>";
    while ($row = $result->fetch_assoc()) {
        $id = $row['ID'];
        $originalDate = $row["Datum"];
        $newDate = date("d-m-Y", strtotime($originalDate));
        echo "<tr><td>" . $row["Username"]      ."</td>     <!-- this is where the data will be added in the tabel -->
                  <td>" . $row["Achternaam"]    ."</td>
                  <td>" . $row["Email"]         ."</td>
                  <td>" . $row["Phone"]         ."</td>
                  <td>" . $row["Time"]          ."</td>
                  <td>" . $row["Time1"]         ."</td>
                  <td>" . $newDate              ."</td>
                  <td><a href='edit.php?id=$id'>edit</a></td>
                  <td><a href='Delete_tabelrow.php?id=$id' onclick=\"return confirm('Are you sure you want to delete this item?');\">Delete</a></td>
                  </tr>";
    }
}
elseif ($result->num_rows > 0) {    //otherwise show limited data
    // output data of each row
    echo "<table><tr>
        <th>Voornaam    </th>
        <th>Achternaam  </th>
        <th>Van         </th>
        <th>Tot         </th>
        <th>Datum       </th></tr>";
    while($row = $result->fetch_assoc()) {
        $originalDate = $row["Datum"];
        $newDate = date("d-m-Y", strtotime($originalDate));
        echo "<tr><td>" . $row["Username"].        "</td>
                  <td>" . $row["Achternaam"].      "</td>
                  <td>" . $row["Time"].            "</td>
                  <td>" . $row["Time1"].           "</td>
                  <td>" . $newDate.                "</td></tr>";
    }
} else {?>
        <script>
            window.alert("Geen resultaten gevonden");
        </script>
    <?php
}

$conn->close();
?>