<?php require_once "controller1.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title id="title1">Menu</title>
    <link rel="stylesheet" href="3.css">
</head>
<body>
    <nav>
        <div id="navDiv1">
            <img src="img/foodlogo.png" alt="food logo">
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="menu.php">Menu</a></li>
            <li class="item"><a href="index.php#booktable">Book Table</a></li>
            <li class="item"><a href="cart.php">Cart</a></li>
            <li class="item"><a href="index.php#feedback">Feedback</a></li>
            <li class="item"><a href="logout.php">Logout</a></li>	
        </ul>
        <p class="welcome">Welcome, <?php echo $fetch_info['name'] ?></p>
    </nav>


    <div class="menubg">
    <h1 class="hPri center">Menu</h1>
    </div>

    <h1 class="hPri center">Starters</h1>
    <div>
        <table id="box12">
        <?php 
        $sql = "SELECT * FROM `food` WHERE cat_id = 1";
        $result = mysqli_query($con, $sql);
        $noResult = true;
        $inc=0;
        while($row = mysqli_fetch_assoc($result)){
            if($inc%3==0) {
                echo"<tr>";
            }
            $noResult = false;
            $food_id = $row['food_id'];
            $food_name = $row['food_name'];
            $food_price = $row['food_price'];
            $food_type = $row['food_type'];
            echo'<td>
                <div class="serviceboxg1">
                <img src="img/'.$food_id. '.jpg" alt="pizza">
                <div class="menubox">
                    <h1 class="hSec1 center">' . substr($food_name, 0, 50). '</h1>
                    <h1 class="hSec1 center">' . substr($food_type, 0, 20). '</h1>
                    <h1 class="hSec1 center">Rs. '.$food_price. '/-</h1> 
                    <div class="menuaa">'; 
                    $quaSql = "SELECT `quantity` FROM `cart` WHERE food_id = '$food_id' AND `customer_id`='$cid'";
                        $quaresult = mysqli_query($con, $quaSql);
                        $quaExistRows = mysqli_num_rows($quaresult);
                        if($quaExistRows == 0)
                        {
                        echo '<form action="cart1.php" method="POST">
                        <div class="regform">
                            <input type="hidden" name="itemId" value="'.$food_id. '">
                        </div>
                        <div class="regform">
                            <button type="submit" name="addToCart" class="btn1">Add to Cart</button>';
                        }else 
                        {
                        echo '<a href="cart.php"><button class="btn1">Go to Cart</button></a>';
                        }
                        echo '</form> 
                        </div>
                    </div>
                </div>
                </div>
                </td>';
            if($inc%3==2){
                echo"</br> </br> <tr>";
            }
            $inc++;
        }
        ?>
        </table>
    </div>


        

    <h1 class="hPri center">Main Course</h1>
    <div>
        <table id="box12">
        <?php 
        $sql = "SELECT * FROM `food` WHERE cat_id = 2";
        $result = mysqli_query($con, $sql);
        $noResult = true;
        $inc=0;
        while($row = mysqli_fetch_assoc($result)){
            if($inc%3==0) {
                echo"<tr>";
            }
            $noResult = false;
            $food_id = $row['food_id'];
            $food_name = $row['food_name'];
            $food_price = $row['food_price'];
            $food_type = $row['food_type'];
            echo'<td>
                <div class="serviceboxg1">
                <img src="img/'.$food_id. '.jpg" alt="pizza">
                <div class="menubox">
                    <h1 class="hSec1 center">' . substr($food_name, 0, 50). '</h1>
                    <h1 class="hSec1 center">' . substr($food_type, 0, 20). '</h1>
                    <h1 class="hSec1 center">Rs. '.$food_price. '/-</h1> 
                    <div class="menuaa">'; 
                    $quaSql = "SELECT `quantity` FROM `cart` WHERE food_id = '$food_id' AND `customer_id`='$cid'";
                        $quaresult = mysqli_query($con, $quaSql);
                        $quaExistRows = mysqli_num_rows($quaresult);
                        if($quaExistRows == 0)
                        {
                        echo '<form action="cart1.php" method="POST">
                        <div class="regform">
                            <input type="hidden" name="itemId" value="'.$food_id. '">
                        </div>
                        <div class="regform">
                            <button type="submit" name="addToCart" class="btn1">Add to Cart</button>';
                        }else 
                        {
                        echo '<a href="cart.php"><button class="btn1">Go to Cart</button></a>';
                        }
                        echo '</form> 
                        </div>
                    </div>
                </div>
                </div>
                </td>';
            if($inc%3==2){
                echo"</br> </br> <tr>";
            }
            $inc++;
        }
        ?>
        </table>
    </div>



    <h1 class="hPri center">Desserts</h1>
    <div>
        <table id="box12">
        <?php 
        $sql = "SELECT * FROM `food` WHERE cat_id = 3";
        $result = mysqli_query($con, $sql);
        $noResult = true;
        $inc=0;
        while($row = mysqli_fetch_assoc($result)){
            if($inc%3==0) {
                echo"<tr>";
            }
            $noResult = false;
            $food_id = $row['food_id'];
            $food_name = $row['food_name'];
            $food_price = $row['food_price'];
            $food_type = $row['food_type'];
            echo'<td>
                <div class="serviceboxg1">
                <img src="img/'.$food_id. '.jpg" alt="pizza">
                <div class="menubox">
                    <h1 class="hSec1 center">' . substr($food_name, 0, 50). '</h1>
                    <h1 class="hSec1 center">' . substr($food_type, 0, 20). '</h1>
                    <h1 class="hSec1 center">Rs. '.$food_price. '/-</h1> 
                    <div class="menuaa">'; 
                    $quaSql = "SELECT `quantity` FROM `cart` WHERE food_id = '$food_id' AND `customer_id`='$cid'";
                        $quaresult = mysqli_query($con, $quaSql);
                        $quaExistRows = mysqli_num_rows($quaresult);
                        if($quaExistRows == 0)
                        {
                        echo '<form action="cart1.php" method="POST">
                        <div class="regform">
                            <input type="hidden" name="itemId" value="'.$food_id. '">
                        </div>
                        <div class="regform">
                            <button type="submit" name="addToCart" class="btn1">Add to Cart</button>';
                        }else 
                        {
                        echo '<a href="cart.php"><button class="btn1">Go to Cart</button></a>';
                        }
                        echo '</form> 
                        </div>
                    </div>
                </div>
                </div>
                </td>';
            if($inc%3==2){
                echo"</br> </br> <tr>";
            }
            $inc++;
        }
        ?>
        </table>
    </div>





    <h1 class="hPri center">Snacks</h1>
    <div>
        <table id="box12">
        <?php 
        $sql = "SELECT * FROM `food` WHERE cat_id = 4";
        $result = mysqli_query($con, $sql);
        $noResult = true;
        $inc=0;
        while($row = mysqli_fetch_assoc($result)){
            if($inc%3==0) {
                echo"<tr>";
            }
            $noResult = false;
            $food_id = $row['food_id'];
            $food_name = $row['food_name'];
            $food_price = $row['food_price'];
            $food_type = $row['food_type'];
            echo'<td>
                <div class="serviceboxg1">
                <img src="img/'.$food_id. '.jpg" alt="pizza">
                <div class="menubox">
                    <h1 class="hSec1 center">' . substr($food_name, 0, 50). '</h1>
                    <h1 class="hSec1 center">' . substr($food_type, 0, 20). '</h1>
                    <h1 class="hSec1 center">Rs. '.$food_price. '/-</h1> 
                    <div class="menuaa">'; 
                    $quaSql = "SELECT `quantity` FROM `cart` WHERE food_id = '$food_id' AND `customer_id`='$cid'";
                        $quaresult = mysqli_query($con, $quaSql);
                        $quaExistRows = mysqli_num_rows($quaresult);
                        if($quaExistRows == 0)
                        {
                        echo '<form action="cart1.php" method="POST">
                        <div class="regform">
                            <input type="hidden" name="itemId" value="'.$food_id. '">
                        </div>
                        <div class="regform">
                            <button type="submit" name="addToCart" class="btn1">Add to Cart</button>';
                        }else 
                        {
                        echo '<a href="cart.php"><button class="btn1">Go to Cart</button></a>';
                        }
                        echo '</form> 
                        </div>
                    </div>
                </div>
                </div>
                </td>';
            if($inc%3==2){
                echo"</br> </br> <tr>";
            }
            $inc++;
        }
        ?>
        </table>
    </div>




    <h1 class="hPri center">Beverages</h1>
    <div>
        <table id="box12">
        <?php 
        $sql = "SELECT * FROM `food` WHERE cat_id = 5";
        $result = mysqli_query($con, $sql);
        $noResult = true;
        $inc=0;
        while($row = mysqli_fetch_assoc($result)){
            if($inc%3==0) {
                echo"<tr>";
            }
            $noResult = false;
            $food_id = $row['food_id'];
            $food_name = $row['food_name'];
            $food_price = $row['food_price'];
            $food_type = $row['food_type'];
            echo'<td>
                <div class="serviceboxg1">
                <img src="img/'.$food_id. '.jpg" alt="pizza">
                <div class="menubox">
                    <h1 class="hSec1 center">' . substr($food_name, 0, 50). '</h1>
                    <h1 class="hSec1 center">' . substr($food_type, 0, 20). '</h1>
                    <h1 class="hSec1 center">Rs. '.$food_price. '/-</h1> 
                    <div class="menuaa">'; 
                    $quaSql = "SELECT `quantity` FROM `cart` WHERE food_id = '$food_id' AND `customer_id`='$cid'";
                        $quaresult = mysqli_query($con, $quaSql);
                        $quaExistRows = mysqli_num_rows($quaresult);
                        if($quaExistRows == 0)
                        {
                        echo '<form action="cart1.php" method="POST">
                        <div class="regform">
                            <input type="hidden" name="itemId" value="'.$food_id. '">
                        </div>
                        <div class="regform">
                            <button type="submit" name="addToCart" class="btn1">Add to Cart</button>';
                        }else 
                        {
                        echo '<a href="cart.php"><button class="btn1">Go to Cart</button></a>';
                        }
                        echo '</form> 
                        </div>
                    </div>
                </div>
                </div>
                </td>';
            if($inc%3==2){
                echo"</br> </br> <tr>";
            }
            $inc++;
        }
        ?>
        </table>
    </div>

</body>
</html>