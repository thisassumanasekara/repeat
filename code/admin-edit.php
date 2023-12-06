<?php


if (isset($_POST["user_updatebtn"])) {
    
    $edit_id = $_POST["edit_id"];
    $edit_email = $_POST["edit_email"];
    $edit_password = $_POST["edit_password"]; 
    
    $conn = include('../includes/dbconnect.php');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE admins SET email='$edit_email', password='$edit_password' WHERE id=$edit_id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header('location: ../admin-data.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

if (isset($_POST["user_delete"])) {
   
    $id_to_delete = $_POST["delete_id"];
    $conn = include('../includes/dbconnect.php');

    $sql = "DELETE FROM admins WHERE id = $id_to_delete";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('location: ../admin-data.php');
    } else {
        echo "Error deleting record: " . $conn->error;       
    }
}
?>