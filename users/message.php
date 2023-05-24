<?php
    session_start();
    if(!isset($_SESSION['inuq_id'])){
        header("location: ../login.php");
    }
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
    <link rel="stylesheet" href="../assets/globalstyle.css">

    <!-- AJAX -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

</head>
<body>
    <div class="wrapper">
        <section class="message">
            <header>

                <?php
                    include_once "../php/config.php";
                    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE inuq_id = {$user_id}");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>

                <a href="user.php" class="back">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <img src="../php/ico/<?php echo $row['img']?>" alt="">
                <div class="details">
                    <span><?php echo $row['fname']?></span>
                    <p><?php echo $row['status']?></p>
                </div>
            </header>
            <div class="box-chat">

            </div>
            <form class="typo" action="../php/insert-message.php" method="post" autocomplete="off">
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['inuq_id']; ?>" hidden>
                <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input class="inputfield" name="msg" type="text" placeholder="Send a message...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
    <script src="../js/message.js"></script>
</body>
</html>