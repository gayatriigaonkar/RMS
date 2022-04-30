<?php 
session_start();
require "connection.php";
$email = "";
$name = "";
$errors = array();

//if user clicks signup button
if(isset($_POST['register'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $email_check = "SELECT * FROM customer WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email already exists!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO customer (name, address, mobile, email, password, code, status)
                        values('$name', '$address', '$mobile', '$email', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            $sender = "From: ";
            //write your email above from where u want to send eg. xyz@gmail.com
            if(mail($email, $subject, $message, $sender)){
                $info = "verification code is sent on - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: otp.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed sending otp!";
            }
        }else{
            $errors['db-error'] = "Failed inserting data into database!";
        }
    }

}
    //if user click code verification submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM customer WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE customer SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: index.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed updating code!";
            }
        }else{
            $errors['otp-error'] = "Wrong code entered!";
        }
    }

    //if user clicks login button
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_email = "SELECT * FROM customer WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                    header('location: index.php');
                }else{
                    $info = "Email $email not yet verified";
                    $_SESSION['info'] = $info;
                    header('location: otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "You are not yet a member, please click signup now.";
        }
    }

?>