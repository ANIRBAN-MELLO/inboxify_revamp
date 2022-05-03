<?php include("includes/dbcon.php");

session_start();

if (isset($_GET['type'])) {
    $type = $_GET['type'];
    $plan = $_GET['plan'];
}

if (isset($_POST['order_type'])) {
    $type = $_POST['order_type'];
    $plan = $_POST['plan'];
}


if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
} else {
    header('location:signup.php?type=order&order_type=' . $type.'&plan='.$plan);
}

$query = "insert into user_querry (user_id,querry) values ({$user_id},'{$querry}') ";

$resultDomain = mysqli_query($con, $query);

if (!$resultDomain) {
    die("User data not saved, please check code ->" . mysqli_error($con));
} else {
    header('location:index.php?msg=We will get Back to You Shortly!');
}
