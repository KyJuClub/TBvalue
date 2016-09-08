<?php
    $connection = mysqli_connect('localhost','kyjuclub','password','newbook');
    if (mysqli_connect_errno())
    {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>