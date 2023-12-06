<?php

if(isset($_POST['register'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $connection = include('../includes/dbconnect.php');
    $query = "INSERT INTO admins (email,password) VALUES ('$email','$password')";
    mysqli_query($connection, $query); 
    header('location: ../admin.php');
}
?>