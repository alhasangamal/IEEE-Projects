<?php
include 'DB.php';

$title=mysqli_real_escape_string($conn,$_POST['title']);
$full_name=mysqli_real_escape_string($conn,$_POST['full_name']);
$position=mysqli_real_escape_string($conn,$_POST['position']);
$company=mysqli_real_escape_string($conn,$_POST['company']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$street_address=mysqli_real_escape_string($conn,$_POST['street_address']);
$street_address2=mysqli_real_escape_string($conn,$_POST['street_address2']);
$country=mysqli_real_escape_string($conn,$_POST['country']);
$city=mysqli_real_escape_string($conn,$_POST['city']);
$status=mysqli_real_escape_string($conn,$_POST['status']);
$zip_code=mysqli_real_escape_string($conn,$_POST['zip_code']);
$phone_number=mysqli_real_escape_string($conn,$_POST['phone_number']);
$sql="INSERT INTO register(title,full_name,position,company,email,street_address,street_address_line_2,country,city,status,zip_postal_code,phone_number) VALUES ('$title','$full_name','$position','$company','$email','$street_address','$street_address2','$country','$city','$status','$zip_code','$phone_number')";
mysqli_query($conn,$sql);
mysqli_close($conn);

header('location:index.php');