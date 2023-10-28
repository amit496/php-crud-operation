<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'crud_operation';
    $conn   = mysqli_connect($host, $username, $password);
    mysqli_select_db($conn,$database );
?>