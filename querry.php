<?php include("includes/dbcon.php"); 

session_start();


if(isset($_SESSION['id']))
{
    $user_id = $_SESSION['id'];
    if(isset($_GET['the_query'])){
      $querry = $_GET['the_query'];
    }
    else{
      $querry = $_POST['site'];
    }
}
else
{
    $querry = $_POST['site'];
    header('location:signup.php?type=signup&query='.$querry);
}
    
    $query = "insert into user_querry (user_id,querry) values ({$user_id},'{$querry}') ";

    $resultDomain = mysqli_query($con, $query);
    
    if (!$resultDomain) 
    {
         die("User data not saved, please check code ->" . mysqli_error($con));
    } 
   else{   
     header('location:index.php?msg=We will get Back to You Shortly!');
   }