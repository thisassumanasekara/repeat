<?php
if (isset($_POST["user_updatebtn"])) {
    $edit_id = $_POST["edit_id"];
    $edit_name = $_POST["edit_name"];
    $edit_price = $_POST["edit_price"];
    $edit_64 = $_POST["edit_64"];
    $edit_128 = $_POST["edit_128"];
    $edit_256 = $_POST["edit_256"];

    $conn = include('../includes/dbconnect.php');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (!empty($_FILES['edit_image']['name'])) {
        $target_dir = "../assets/";
        $target_file = $target_dir . basename($_FILES["edit_image"]["name"]);
        move_uploaded_file($_FILES["edit_image"]["tmp_name"], $target_file);
        $image_file_name = basename($_FILES["edit_image"]["name"]);
        $sql = "UPDATE mobile SET 
                mobile_name='$edit_name', 
                mobile_price='$edit_price', 
                64_stock='$edit_64', 
                128_stock='$edit_128', 
                256_stock='$edit_256', 
                mobile_image='$image_file_name' 
                WHERE id=$edit_id";
    } else {
        
        $sql = "UPDATE mobile SET 
                mobile_name='$edit_name', 
                mobile_price='$edit_price', 
                64_stock='$edit_64', 
                128_stock='$edit_128', 
                256_stock='$edit_256' 
                WHERE id=$edit_id";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header('location: ../device-data.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

if (isset($_POST["user_delete"])) {
   
    $id_to_delete = $_POST["delete_id"];
    $conn = include('../includes/dbconnect.php');

    $sql = "DELETE FROM mobile WHERE id = $id_to_delete";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('location: ../device-data.php');
    } else {
        echo "Error deleting record: " . $conn->error;       
    }
}
?>