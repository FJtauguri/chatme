<?php 
    session_start();
    include_once"config.php";
    $sql = mysqli_query($conn, "SELECT * FROM users");
    $output = "";
    if (mysqli_num_rows($sql) == 1) {
        $output .= "You have no friends. Wawa";
    } elseif(mysqli_num_rows($sql) > 0) {
        // while($row = mysqli_fetch_assoc($sql)){
        //     $output .= '
        //     <a href="#">
        //         <div class="content">
        //             <img src="../php/ico/'. $row['img'] .'" alt="">
        //             <div class="details">
        //                 <span>'. $row['fname'] .'</span>
        //                 <p>Hola! '. $row['fname'] .'</p>
        //             </div>
        //         </div>
        //         <div class="status">
        //             <i class="fas fa-circle"></i>
        //         </div>
        //     </a>';
        // }
        include "data.php";
    }
    echo $output;   
    
?>