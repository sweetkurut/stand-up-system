<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <title>Авторизация</title>
</head>
<body>
  <div class="wrapper">
    <div class="container">
      <h1 class="auth__title">Авторизация</h1>
      <form class="form" action="auth_user.php" method="POST">
        <div class="input-fields">
          <div class="input-group">
            <label class="label"><h3 class="label-title">Email</h3></label>
            <input type="text" class="input" placeholder="Введите почту">
          </div>
          <div class="input-group">
            <label class="label"><h3 class="label-title">Password</h3></label>
            <input type="password" class="input" placeholder="Введите пароль">
          </div>
          <div class="input-btn">
            <a href="main.php"><button type="submit" class="btn">Отправить</button></a>
          </div>
          <div class="input-btn__req">
            <div class="blog1"><p class="req-text">Не зарегистрировались?</p></div>
            <div class="blog2"><a href="req"><button type="submit" class="btn-req">Зарегистрироваться</button></a></div>
          </div>
        </div>
      </form>
    </div>
  </div>

<script src="../js/app.js"></script>
</body>
</html>