<?php include 'include/layout/head.php'?>
<div class="bag-cloth">
<h2 class="mt-3 mb-3 text-center text-dark">авторизоваться</h2>
    <div class="form w-25 mx-auto">
        <form action="avtoritation_user.php" method="POST">
            <div class="mb-3 row">
                <p><label for="staticEmail" class="col-sm-2 col-form-label">Email</label></p>
                <input type="email" class="form-control" name="email" id="staticEmail" placeholder="введите ваше email">
            </div>
            <div class="mb-3 row">
                <p><label for="inputPassword" class="col-sm-2 col-form-label">Password</label></p>
                <input type="password" class="form-control" name="password" id="inputPassword" placeholder="введите ваше логин">
            </div>
            <button type="submit" class="btn bg-dark text-white w-100 rounded-pill">авторизоваться</button>
            У вас ещё нет аккаунта?<a href="registration">Зарегистрироваться</a> 
              
        </form>
    </div>
</div>
<?php include 'include/layout/footer.php'?>