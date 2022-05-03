<?php include("includes/dbcon.php"); 

session_start();


if(isset($_SESSION['id']))
{
    $user_id = $_SESSION['id'];
    $querry = $_POST['site'];
}
    
    echo $query = "insert into user_querry (user_id,querry) values ({$user_id},'{$querry}') ";
    //$query = "insert into user_data (email) values ('{$email}') ";
    $resultDomain = mysqli_query($con, $query);
    
    if (!$resultDomain) 
    {
         die("User data not saved, please check code ->" . mysqli_error($con));
    } 
   else{   
     $_SESSION['id']  = mysqli_insert_id($con);
     $_SESSION['name'] = ucfirst($fname);
     header('location:index.php?msg=We will get Back to You Shortly!');
   }