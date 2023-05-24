<?php
    session_start();
    if(isset($_SESSION['inuq_id'])){
        include_once "config.php";
        $outgo = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
        $ingo = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $msg = mysqli_real_escape_string($conn, $_POST['msg']);

        if(!empty($msg)){
            $sql = mysqli_query($conn, "INSERT INTO mesahaha (msg_in, msg_out, msg)
                  VALUE ({$ingo}, {$ingo}, {$outgo}, '{$msg}')") or die();
        }
    } else {
        header("../login.php");
    }
?>