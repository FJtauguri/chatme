<?php 

    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    // echo ("hellowww");

    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['inuq_id'] = $row['inuq_id'];
            echo ("success");
        } else {
            echo ("Incorrect email or password");
        }
    } else {
        echo ("All fields are required!");
    }

?>