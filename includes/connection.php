<?php

    $conn = mysqli_connect("localhost" , "root" , "" , "application fruits");

    if(!$conn){
        die("Erorr Connection !" . mysqli_connect_error($conn));
    }

?>