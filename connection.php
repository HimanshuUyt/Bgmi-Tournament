<?php
    $conn=mysqli_connect("localhost","root","","bgmitournament");

    if(mysqli_connect_error())
    {
        echo"<script>alert('cannot connect to the Database');</script>";
        exit();
    }
?>