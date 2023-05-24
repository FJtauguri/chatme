<?php 
    session_start();
    if(!isset($_SESSION['inuq_id'])){
        header("location: ../login.php"); //to prevent user's place be breached
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatMe</title>

    <!-- ============================================================= -->
    <!-- Local CSS -->
    <link rel="stylesheet" href="../assets/globalstyle.css">

    <!-- AJAX -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

</head>
<body>
    <div class="wrapper">
        <section class="users" id="users">
            <header>

                <?php
                    include_once "../php/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE inuq_id = {$_SESSION['inuq_id']}");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>

                <div class="content">
                    <img src="../php/ico/<?php echo $row['img']?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname']?></span>
                        <p><?php echo $row['status']?></p>
                    </div>
                </div>
                <a href="#" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Search Users</span>
                <input id="input" type="text" name="" id="" placeholder="Enter Nmae....">
                <button id="but"><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">

            </div>
            
        </section>
    </div>
    <script src="../js/search.js"></script>
    <script src="../js/users.js"></script>
    <script>
        // const searchbar = document.querySelector(".wrapper .users .search #input");
        // const searchbut = document.querySelector(".wrapper .users .search #but");

        // searchbut.onclick = () => {
        //     searchbar.classList.toggle("active");
        //     searchbar.focus();
        // };
    </script>
</body>
</html>