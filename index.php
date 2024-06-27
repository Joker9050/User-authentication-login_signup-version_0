<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login logoout project version 0</title>
</head>

<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Login Form</div>
            <div class="title signup">Signup Form</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <form action="login_user.php" method="POST" class="login">
                    <div class="field">
                        <input type="text" placeholder="Email Address"name="l_email" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" name="l_pass" required>
                    </div>
                    <!-- <div class="pass-link"><a href="#">Forgot password?</a></div> -->
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">Not a member? <a href="">Signup now</a></div>
                </form>
                <form action="register_user.php" method="POST" class="signup">
                    <div class="field">
                        <input type="text" placeholder="Email Address" name ="s_email"required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" name = "s_pass" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Confirm password" name="s_cpass" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Signup">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>