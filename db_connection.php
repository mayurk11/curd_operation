<?php
    $conn=mysqli_connect("localhost",'root',"Root","blog");

    if (!$conn){
        die ("Connection failed" . mysqli_connect_error());
        exit;
    }
?>