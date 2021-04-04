<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "library_system");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$type=mysqli_real_escape_string($link,$_POST['type']);
$sql = "SELECT * FROM books where type ='$type'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table style='border: 1px solid black;'>";
        echo "<tr style='border: 1px solid black;'>";
        echo "<th style='border: 1px solid black;'>id</th>";
        echo "<th style='border: 1px solid black;'>number_book</th>";
        echo "<th style='border: 1px solid black;'>name_book</th>";
        echo "<th style='border: 1px solid black;'>type</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr style='border: 1px solid black;'>";
            echo "<td style='border: 1px solid black;'>" . $row['id'] . "</td>";
            echo "<td style='border: 1px solid black;'>" . $row['number_book'] . "</td>";
            echo "<td style='border: 1px solid black;'>" . $row['name_book'] . "</td>";
            echo "<td style='border: 1px solid black;'>" . $row['type'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>