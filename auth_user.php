<?php
include 'config.php';
    $email = filter_var(trim($_POST['email']));

    $password = filter_var(trim($_POST['password']));


    echo($email . $password);

    $sql= "SELECT * FROM `users` WHERE email = '$email' and password = '$password'";

    $result = mysqli_query($connect, $sql);

    setcookie('user' , $email, time() + 36000, "/");


    header("Location: /req");
?>