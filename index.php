<?php 
    include_once"header.php";
?>
<body>

    <div class="wrapper">
        <section class="form signup">
            <header>ChatME</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input name="fname" type="text" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input name="lname" type="text" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email</label>
                    <input name="email" type="email" placeholder="Username" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input name="password" type="password" placeholder="Password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field img">
                    <label>Select Image</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button" id="continue">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already signup? <a href="login.php">Signin</a></div>
        </section>
    </div>

    <script src="js/signup.js"></script>

</body>
</html>