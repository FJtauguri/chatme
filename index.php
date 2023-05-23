<?php

// // Check if the signup form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Process signup form

//     // If signup is successful, set $signup_successful to true
//     // Otherwise, set it to false
//     $signup_successful = false; // Initialize the variable

//     // Perform the necessary checks and operations to determine the signup success
//     if ($signup_success_condition) {
//         $signup_successful = true; // Set the variable to true if signup is successful
//     }

//     // If signup is successful, perform the redirection
//     if ($signup_successful) {
//         header("Location: ../users/user.php"); // Redirect to user.php
//         exit(); // Terminate the script after redirection
//     } else {
//         // Handle other scenarios or display error messages
//     }
// }

?>


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

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <!-- AJAX -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

</head>
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