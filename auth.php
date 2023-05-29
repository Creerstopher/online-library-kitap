<div class="auth">
    <div class="container">
        <h2>вход</h2>
        <div class="auth_items">
            <div class="empty_block"></div>
            <div class="auth_div_form">
                <form action="/app/action/signin.php" name="login" method="post" class="auth_form">
                    <input class="form_login" type="text" name="login" placeholder="логин">
                    <input class="form_password" type="password" name="password" placeholder="пароль">
                    <?php include('app/components/FormErrors.php'); ?>
                    <input class="form_done" name="login" type="submit" value="войти">
                </form>

                <p>или</p>
                <a href="?page=reg">зарегистрироваться</a>
            </div>
        </div>
    </div>
</div>