<?php
    while($row = mysqli_fetch_assoc($sql)){
        $output .= '
        <a href="#">
            <div class="content">
                <img src="../php/ico/'. $row['img'] .'" alt="">
                <div class="details">
                    <span>'. $row['fname'] .'</span>
                    <p>Hola! '. $row['fname'] .'</p>
                </div>
            </div>
            <div class="status">
                <i class="fas fa-circle"></i>
            </div>
        </a>';
    }
?>