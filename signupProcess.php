<?php include("includes/dbcon.php"); 

$fname = $_POST['fname'];
$lname = $_POST['pass'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pwd = $_POST['pwd'];
$signup = $_POST['signup'];

echo $fname;

     //$query = "SELECT `id` FROM `admin` WHERE `username` = '{$id}' and `password`='{$pass}'";
    //$query = "insert into user_data (fname,lname,email,phone,pwd) values ('{$fname}','{$lname}','{$email}','{$phone}','{$pwd}') ";
    $query = "insert into user_data (email) values ('{$email}') ";
    $resultDomain = mysqli_query($con, $query);
    
    if (!$resultDomain) 
    {
         die("Validation Failed please check dbcon! ->" . mysqli_error($con));
    } 
    //else {
    //     $data = mysqli_fetch_assoc($resultDomain);
    //     $val = $data['id'];

?>