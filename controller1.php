<?php require_once "controller.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM customer WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        $cid = $fetch_info['customer_id'];
        if($status == "notverified"){
            header('Location: otp.php');
        }
    }
}else{
    header('Location: login.php');
}
?>