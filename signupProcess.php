<?php include("includes/dbcon.php"); 

session_start();

if(isset($_POST['signup'])){
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $pwd = $_POST['pwd'];
}



     //$query = "SELECT `id` FROM `admin` WHERE `username` = '{$id}' and `password`='{$pass}'";
    $query = "insert into user_data (fname,lname,email,phone,pwd) values ('{$fname}','{$lname}','{$email}',{$phone},'{$pwd}') ";
    //$query = "insert into user_data (email) values ('{$email}') ";
    $resultDomain = mysqli_query($con, $query);
    
    if (!$resultDomain) 
    {
         die("User data not saved, please check code ->" . mysqli_error($con));
    } 
   else{   
     $_SESSION['id']  = mysqli_insert_id($con);
     $_SESSION['name'] = ucfirst($fname);
     header('location:index.php?msg=Thank you!');
   }
