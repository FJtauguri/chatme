<?php 

    $conn = mysqli_connect("localhost", "root", "", "chatme");
    if($conn){
        // echo "DB Connected" . mysqli_connect_error();
    } else {
        echo "Err";
    }

?>