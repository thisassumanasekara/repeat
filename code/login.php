<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $connection = include('../includes/dbconnect.php');
    $login_query = "SELECT * FROM users WHERE email ='$email' AND password ='$password' LIMIT 1";
    $login_query_run = mysqli_query($connection, $login_query);

    if (mysqli_num_rows($login_query_run) > 0) {
        $row = mysqli_fetch_array($login_query_run);
        $_SESSION['user_id'] = $row['id'];
        header('location: ../cart.php');
    }else{
        echo "Invalid email or password";
    }
}
?>