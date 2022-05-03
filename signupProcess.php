<?php include("includes/dbcon.php"); 

$fname = $_POST['id'];
$lname = $_POST['pass'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pwd = $_POST['pwd'];
$signup = $_POST['signup'];

echo $fname;

    // $queryDomain = "SELECT `id` FROM `admin` WHERE `username` = '{$id}' and `password`='{$pass}'";
    // $resultDomain = mysqli_query($con, $queryDomain);
    
    // if (!$resultDomain) {
    //     die("Validation Failed please check dbcon! ->" . mysqli_error($con));
    // } else {
    //     $data = mysqli_fetch_assoc($resultDomain);
    //     $val = $data['id'];

?>