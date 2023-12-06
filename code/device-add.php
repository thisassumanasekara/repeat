<?php
if (isset($_POST["user_updatebtn"])) {
    $mobile_name = $_POST["name"];
    $mobile_price = $_POST["price"];
    $stock_64 = $_POST["64"];
    $stock_128 = $_POST["128"];
    $stock_256 = $_POST["256"];
    $conn = include('../includes/dbconnect.php');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (!empty($_FILES['image']['name'])) {
        $target_dir = "../assets/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image_file_name = basename($_FILES["image"]["name"]);
        $sql = "INSERT INTO mobile (mobile_name, mobile_price, 64_stock, 128_stock, 256_stock, mobile_image) 
                VALUES ('$mobile_name', '$mobile_price', '$stock_64', '$stock_128', '$stock_256', '$image_file_name')";
    } else {
        echo "Please upload a mobile image.";
        
    }

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
        header('location: ../device-data.php');
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}
