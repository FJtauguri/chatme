<?php 
    include_once"header.php";
?>
<body>

    <div class="wrapper">
        <section class="form login">
            <header>ChatME</header>
            <form action="#" method="post" class="for" autocomplete="off">
                <div class="error-txt">
                    
                </div>
                <div class="field input">
                    <label>Username</label>
                    <input name="email" type="email" placeholder="Username">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input name="password" type="password" placeholder="Password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Signin">
                </div>
            </form>
            <div class="link">Don't have an account? <a href="index.php">Signup</a></div>
        </section>
    </div>
    <script src="js/login.js"></script>
</body>
</html>