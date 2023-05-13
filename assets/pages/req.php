<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="registration">
      <form class="req" action="" method="post">
        <div class="input-group_req">
          <label class="label_req" for="">Ф.И.О</label>
          <input class="input_req" type="text" name="name">
        </div>
        <div class="input-group_req">
          <label class="label_req" for="">Номер телефона</label>
          <input class="input_req" type="num" name="phone">
        </div>
        <div class="input-group_req">
          <label class="label_req" for="">Эл. почта</label>
          <input class="input_req" type="email" name="email">
        </div>
        <div class="input-group_req">
          <label class="label_req" for="">Пароль</label>
          <input class="input_req" type="password" name="password">
        </div>
        <div class="input_btn_req">
          <input class="btn_req" type="submit" value="Зарегистрироваться">
        </div>
        <div class="auth">
          <p>Уже есть аккаунт?</p>
          <a href="./auth.php">Вы можете авторизоваться</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>