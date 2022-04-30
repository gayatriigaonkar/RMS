<?php require_once "controller.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP verification</title>
    <link rel="stylesheet" href="3.css">
</head>
<body>
    <div id="otpbg">
        <div id="reg2">
            <h1 class="hPri center" id="regh1">OTP Verification</h1>
            <div class="reg3">
            <form action="otp.php" method="post">
                <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="txtotp">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="txtotp">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                ?>
                <div class="regform">
                    <input type="number" name="otp" placeholder="OTP">
                </div>
                <div>
                    <input class="logbtn" type="submit" name="check" value="Submit">
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>