<?php
include 'config.php';
    $name =filter_var(trim($_POST['name']));
    $number =filter_var(trim($_POST['number']));
    $email =filter_var(trim($_POST['email']));
    $password =filter_var(trim($_POST['password']));
  
    if(mb_strlen($name) < 5 or mb_strlen($name) > 100){
        echo('недопустимая длина');
    }elseif(mb_strlen($email) < 10 or mb_strlen($email) > 50){
        echo('недопустимая длина почты');
    }elseif(mb_strlen($password) < 8 or mb_strlen($password) > 32){
        echo('недопустимая длина почты пароля');
    }

    $password = md5($password."rddfffjif4454rf5r");        

    $check = "SELECT * FROM users WHERE email = 'admin@mail.ru'";
    $result = mysqli_query($connect,$check);
    $result = mysqli_fetch_assoc($result);
    if($result){
        echo('зарегистрированный user вы не можете повторно регистрировать');
    }else{
        $add_user = "INSERT INTO `users` (`name`,`number`, `email`,`password`) VALUES('$name', '$number','$email','$password')";
        mysqli_query($connect, $add_user);

    }
 
    

    setcookie('user' , $email, time() + 36000, "/");



    header('location: /main');
?>