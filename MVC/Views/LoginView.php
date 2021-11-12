<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập</title>
        <meta charset="utf8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
    </head>
    <body>
        <div class="login-container">
            <div id="login">
                <div class="title"><h2>Đăng nhập</h2></div>
                <div class="formBox">
                    <form method="POST" action=<?= "Login/checkUser"?>>
                        <div>
                            <label>Tên đăng nhập</label>
                            <input type="text" name="username" placeholder="Nhập tên đăng nhập">
                        </div>
                        <div>
                            <label>Mật khẩu</label>
                            <input type="password" name="password" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="alert">* Mật khẩu hoặc tên đăng nhập chưa chính xác.</div>
                        <div>
                            <input type="submit" value="Đăng nhập">
                        </div>
                    </form>
                </div>
            </div>
        </div>        
    </body>
</html>
