<?php
include 'DB.php';
$num_book=mysqli_real_escape_string($conn,$_POST['num_book']);
$name_book=mysqli_real_escape_string($conn,$_POST['name_book']);
$type=mysqli_real_escape_string($conn,$_POST['type']);
$sql="INSERT INTO books(number_book,name_book,type) VALUES ('$num_book','$name_book','$type')";
mysqli_query($conn,$sql);
mysqli_close($conn);
header('location:add.php');