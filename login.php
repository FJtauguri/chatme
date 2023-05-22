<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- ============================================================= -->
    <!-- Local CSS -->
    <link rel="stylesheet" href="./assets/globalstyle.css">

    <!-- AJAX -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

</head>
<body>

    <div class="wrapper">
        <section class="form signup">
            <header>ChatME</header>
            <form action="#" method="post">
                <div class="error-txt">
                    Error Message code:101
                </div>
                <div class="field input">
                    <label>Username</label>
                    <input type="email" placeholder="Username">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" placeholder="Password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Signin">
                </div>
            </form>
            <div class="link">Already signup? <a href="login.php">Signin</a></div>
        </section>
    </div>

</body>
</html>