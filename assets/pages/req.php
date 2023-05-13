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
  <div class="container-req">
    <div class="registration">
      <h1>Регистрация</h1>
      <form class="req" action="req_user.php" method="POST">
        <div class="input-group_req">
          <label class="label_req" for="">Ф.И.О</label>
          <input class="input_req" type="name" name="name">
        </div>
        <div class="input-group_req">
          <label class="label_req" for="">Номер телефона</label>
          <input class="input_req" type="number" name="number">
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
          <a href="main.php"><input class="btn_req" type="submit" value="Зарегистрироваться"></a>
        </div>
        <div class="auth">
          <p>Уже есть аккаунт?</p>
          <a href="main.php">Вы можете авторизоваться</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>