<?php
    // echo "Jet";
    include_once "config.php";
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchhterm']);
    $output = '';
    // echo "$searchTerm";
    // $sql = mysqli_query($conn, "SELECT users WHERE fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%'");
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%'");
    
    if(mysqli_num_rows( $sql) > 0){
        // $output .= "I'm Shocked! You have friends!";
        include "data.php";
    } else {
        $output .= "No Friends Available!";
    }
    echo $output;
?>