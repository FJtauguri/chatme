<?php

    session_start();
    if (isset($_SESSION['inuq_id'])) {
        include_once "config.php";
        $outgo = isset($_POST['outgoing_id']) ? mysqli_real_escape_string($conn, $_POST['outgoing_id']) : '';
        $ingo = isset($_POST['incoming_id']) ? mysqli_real_escape_string($conn, $_POST['incoming_id']) : '';
        $output = "";

        $sql = "SELECT m.*, u.img FROM mesahaha AS m
                JOIN users AS u ON m.msg_out = u.inuq_id
                WHERE (m.msg_out = {$outgo} AND m.msg_in = {$ingo})
                OR (m.msg_out = {$ingo} AND m.msg_in = {$outgo})
                ORDER BY m.msg_id ASC";

        $query = mysqli_query($conn, $sql);
        if ($query && mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $output .= '';

                if ($row['msg_out'] == $outgo || $row['msg_in'] == $ingo) { //user will be the sender
                    $output .= '
                    <a href="./message.php?user_id='.$row['inuq_id'].'"> 
                        <div class="content">
                            <img src="../php/ico/'. $row['img'] .'" alt="">
                            <div class="details">
                                <span>'. $row['fname'] .'</span>
                                <p>'. $row['msg'] .'</p>
                            </div>
                        </div>
                        <div class="status">
                            <i class="fas fa-circle"></i>
                        </div>
                    </a>';
                }
            }
        } else {
            $output = "No messages found."; // Optional message if there are no messages
        }

        echo $output;
    }






    // while($row = mysqli_fetch_assoc($sql)){
    //     $sql1 = "SELECT * FROM mesahehe WHERE (msg_out = {$row['inuq_id']}
    //             OR msg_in = {$row['inuq_id']}) AND (msg_out = {$outgo}
    //             OR msg_out = {$outgo})  ORDER BY ASC LIMIT 1";
    //     $query2 = mysqli_query($conn, $sql1);
    //     $row2 = mysqli_fetch_assoc($query2);
    //     if(mysqli_num_rows($query2) > 0){
    //         $result = $row2['msg'];
    //     } else {
    //         $result = "Walang Paramdam";
    //     }
    //     (strlen($result) > 28) ? $msg = substr($result, 0, 28) : $msg = $result; //fr the limitation view

    //     $output .= '
    //     <a href="./message.php?user_id='.$row['inuq_id'].'"> 
    //         <div class="content">
    //             <img src="../php/ico/'. $row['img'] .'" alt="">
    //             <div class="details">
    //                 <span>'. $row['fname'] .'</span>
    //                 <p>'. $msg .'</p>
    //             </div>
    //         </div>
    //         <div class="status">
    //             <i class="fas fa-circle"></i>
    //         </div>
    //     </a>';
    // }





    // session_start();
//     if (isset($_SESSION['inuq_id'])) {
//         include_once "config.php";
//         $outgo = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
//         $ingo = mysqli_real_escape_string($conn, $_POST['incoming_id']);
//         $output = "";

//         $sql = "SELECT m.*, u.img FROM mesahaha AS m
//                 JOIN users AS u ON m.msg_out = u.inuq_id
//                 WHERE (m.msg_out = {$outgo} AND m.msg_in = {$ingo}
//                 OR m.msg_out = {$ingo} AND m.msg_in = {$outgo})
//                 ORDER BY m.msg_id ASC";

//         $query = mysqli_query($conn, $sql);
//         if(mysqli_num_rows($query) > 0) {
//             while($row = mysqli_fetch_assoc($query)){
//             $output .= '';

//             if($row['msg_out'] === $outgo || $row['msg_in'] === $ingo){ //user will be the sender
//                 $output .= '
//                 <a href="./message.php?user_id='.$row['inuq_id'].'"> 
//                     <div class="content">
//                         <img src="../php/ico/'. $row['img'] .'" alt="">
//                         <div class="details">
//                             <span>'. $row['fname'] .'</span>
//                             <p>'. $row['msg'] .'</p>
//                         </div>
//                     </div>
//                     <div class="status">
//                         <i class="fas fa-circle"></i>
//                     </div>
//                 </a>';
//             }
//         }
//         echo $output;
//     }   
// }
?>
