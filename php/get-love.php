<?php

    session_start();
    if (isset($_SESSION['inuq_id'])) {
        include_once "config.php";
        $outgo = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
        $ingo = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";

        // $sql = "SELECT * FROM mesahaha WHERE (msg_out = {$outgo} AND msg_in = {$ingo}
        //         OR msg_out = {$ingo} AND msg_in = {$outgo}) ORDER BY msg_id ASC";
        // $sql = "SELECT m.*, u.img FROM mesahaha m
        //         JOIN users u ON (m.msg_out = u.inuq_id OR m.msg_in = u.inuq_id)
        //         WHERE (m.msg_out = {$outgo} AND m.msg_in = {$ingo}
        //         OR m.msg_out = {$ingo} AND m.msg_in = {$outgo}) ORDER BY m.msg_id ASC";
            $sql = "SELECT m.*, u.img FROM mesahaha AS m
                    JOIN users AS u ON m.msg_out = u.inuq_id
                    WHERE (m.msg_out = {$outgo} AND m.msg_in = {$ingo}
                    OR m.msg_out = {$ingo} AND m.msg_in = {$outgo})
                    ORDER BY m.msg_id ASC";

        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0) {
            while($row = mysqli_fetch_assoc($query)){
                if($row['msg_out'] === $outgo){ //user will be the sender
                    $output .= '
                    <div class="messages outgoing">
                        <div class="details">
                            <p>'. $row['msg'] .'</p>
                        </div>
                    </div>
                    ';
                } else {  //user will be the reciever
                    $output .= '
                    <div class="messages incoming">
                        <img src="../php/ico/'. $row['img'] .'" alt="">
                        <div class="details">
                            <p>'. $row['msg'] .'</p>
                        </div>
                    </div>
                    ';
                }
            }
            echo $output;
        } else {
            $output .= '
            <div class="messages">
                <div class="details">
                    <p>Wl sya paki sayo!</p>
                </div>
            </div>
            ';
        }
        echo $output;
    } else {
        header("Location: ../login.php");
        exit();
    }

?>
