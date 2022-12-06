<?php

include 'database.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `student` where id = $id";

    $res=mysqli_query($con,$sql);

    if($res){
       header('location:show.php');
    }
    else{
        die(mysqli_error($con)); 
    }
}



?>