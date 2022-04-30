<?php require_once "controller.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="3.css">
</head>
<body>
    
    <div id="log">
        <div id="reg2">
            <h1 class="hPri center" id="regh1">Sign in</h1>
            <div class="reg3">
            <form action="login.php" method="post">
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
                    <input type="email" name="email" placeholder="Email Id" required value="<?php echo $email ?>">
                </div>
                <div class="regform">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div>
                    <input class="logbtn" type="submit" name="login" value="sign in">
                </div>
            </form>
                <div class="txt"> Not a member? <a href="register.php">Signup now</a></div>
            </div>
        </div>
    </div>
    
</body>
</html>