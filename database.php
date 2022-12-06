<?php

$con=new mysqli('127.0.0.1:3308','root','','crud');

if(!$con){
    die(mysqli_error($con));
}
?>