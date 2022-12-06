<?php
include 'database.php';

$id = $_GET['updateid'];

$sql="select * from `student` where id=$id";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    

    $sql= "update `student` set id=$id, name='$name', email='$email', password='$password' where id=$id ";

    $res=mysqli_query($con,$sql);

    if($res){
        header('location:show.php');
    }else{
        die(mysqli_error($con));
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
    <title>BST CRUD</title>
</head>
<body>
    <div class="container">
<header>
</header>
    </div>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
              <label>Name</label>
              <input type="test" class="form-control" placeholder="Enter Your Name" name="name" value=<?php echo $name ?>>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Your mail" name="email"value=<?php echo $email ?>>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter Your Password" name="password" value=<?php echo $password ?>>
            </div>
           
            
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
          </form>
    </div>
    <div class="bg"></div>

    <div class="star-field">
<div class="layer"></div>
<div class="layer"></div>
<div class="layer"></div>
</body>

</html>