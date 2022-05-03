<?php include("includes/dbcon.php"); 

session_start();

if(isset($_POST['login'])){
     $email = $_POST['email'];
     $pwd = $_POST['pwd'];
}



     $query = "select * from user_data where email = '".$email."' and pwd = ".$pwd."";
    //$query = "insert into user_data (email) values ('{$email}') ";
    $resultQuery = mysqli_query($con, $query);
    
    if (mysqli_num_rows($resultQuery) > 0) {
        $row = mysqli_fetch_row($resultQuery);
        if($row[2]==$email&&$row[4]==$pwd){
            echo 'Yooo';
        }
    }
    else{
        echo 'shit';
    }
