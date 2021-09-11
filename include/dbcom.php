<?php
    $con = mysqli_connect("localhost","root","","food_db");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Falha de conexão com MySQL: " . mysqli_connect_error();
    }

?>