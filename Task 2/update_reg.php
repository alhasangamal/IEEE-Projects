<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "library_system");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt update query execution
$name_book1=mysqli_real_escape_string($link,$_POST['name_book1']);
$num_book=mysqli_real_escape_string($link,$_POST['num_book']);
$name_book=mysqli_real_escape_string($link,$_POST['name_book']);
$type=mysqli_real_escape_string($link,$_POST['type']);
$sql = "UPDATE books SET number_book='$num_book',name_book='$name_book' type='$type' WHERE name_book='$name_book1'";
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>