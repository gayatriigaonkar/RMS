<?php require_once "controller.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="3.css">
</head>
<body>
    
    <div id="reg">
        <div id="reg2">
            <h1 class="hPri center" id="regh1">Sign Up</h1>
            <div class="reg3">
            <form action="register.php" method="post">
                <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="txtotp">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="txtotp">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                ?>
                <div class="regform">
                    <input type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                </div>
                <div class="regform">
                    <input type="text" name="address" placeholder="Address">
                </div>
                <div class="regform">
                    <input type="tel" name="mobile" placeholder="Phone Number">
                </div>
                <div class="regform">
                    <input type="email" name="email" placeholder="Email Id" required value="<?php echo $email ?>">
                </div>
                <div class="regform">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div>
                    <input class="logbtn" type="submit" name="register" value="sign up">
                </div>
            </form>
            <div class="txt"> Already a member? <a href="login.php">Login here</a></div>
            </div>
        </div>
    </div>
    
</body>
</html>