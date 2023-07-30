<?php

$link = mysqli_connect("localhost", "root", "", "lyrical");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$fullname = $_POST['fullname']; 
$birthdate = $_POST['birthdate']; 
$phone = $_POST['phone']; 
$email = $_POST['email']; 
// Attempt insert query execution
$sql = "INSERT INTO music (fullname, birthdate, phone, email) VALUES ('$fullname', '$birthdate', '$phone', '$email')";
if(mysqli_query($link, $sql)){
    echo "Thanku for registering.We will contact you soon.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>