<?php require_once "controller1.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
<div id="cont">
    <div class="menubg">
        <h1 class="hPri center">Cart</h1>
    </div>

    <div>
        <div id="cartm">
        <table class="center po321">
        <thead>
        <tr>
            <th class="po321">No.</th>
            <th class="po321">Food Name</th>
            <th class="po321">Price</th>
            <th class="po321">Quantity</th>
            <th class="po321">Total</th>
            <th class="po321"> 
                <form action="cart1.php" method="POST">
                <button name="removeAllItem" class="xbtn">Remove All</button>
                <input type="hidden" name="userId" value="<?php echo $fetch_info['customer_id'] ?>">
                </form>
            </th>
        </tr>
        </thead>
                        
        <tbody>
        <?php
            $sql = "SELECT * FROM `cart` WHERE `customer_id`= $cid";
            $result = mysqli_query($con, $sql);
            $counter = 0;
            $totalPrice = 0;
                while($row = mysqli_fetch_assoc($result)){
                    $food_id = $row['food_id'];
                    $quantity = $row['quantity'];
                    $mysql = "SELECT * FROM `food` WHERE food_id = $food_id";
                    $myresult = mysqli_query($con, $mysql);
                    $myrow = mysqli_fetch_assoc($myresult);
                    $food_name = $myrow['food_name'];
                    $food_price = $myrow['food_price'];
                    $total = $food_price * $quantity;
                    $counter++;
                    $totalPrice += $total;

                            echo '<tr>
                                    <td class="po321">' . $counter . '</td>
                                    <td class="po321">' . $food_name . '</td>
                                    <td class="po321">' . $food_price . '</td>
                                    <td class="po321">
                                        <form id="frm' . $food_id . '">
                                        <input type="hidden" name="food_id" value="' . $food_id . '">
                                        <input type="number" name="quantity" value="' . $quantity . '" class="text-center" onchange="updateCart(' . $food_id . ')" onkeyup="return false" style="width:60px" min=1 oninput="check(this)" ;">
                                        </form>


                                    </td>
                                     <td class="po321">' . $total . '</td>
                                    <td class="po321">
                                        <form action="cart1.php" method="POST">
                                        <button name="removeItem" class="xbtn">Remove</button>
                                        <input type="hidden" name="itemId" value="'.$food_id. '">
                                        </form>
                                    </td>
                                    </tr>';
                                }
                    if($counter==0) 
                    {
                    ?>
                    <script> document.getElementById("cont").innerHTML = '<div class="cartdiv"><div><h1 class="hPri center">Cart is empty!</h1></div><div><img src="img/cart.jpg" alt="xyz"></div><div class="cartbtn center"><a href="menu.php">View Menu</a></div></div>';</script> <?php
                    }
                    ?>
        </tbody>
        </table> 
        </div>
        
        <div class="cartsubbox">
            <h1 id="xyyy">Total Amount: Rs. <?php echo $totalPrice ?></h1>
            <form action="cart1.php" method="POST">
            <input type="hidden" name="amount" value="<?php echo $totalPrice ?>">
            <button type="submit" name="checkout" class="xbtn">Order Food</button>
            </form>
        </div>        
        

    </div>
</div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        function updateCart(id) {
            $.ajax({
                url: 'cart1.php',
                type: 'POST',
                data:$("#frm"+id).serialize(),
                success:function(res) {
                    location.reload();
                } 
            })
        }
    </script>

</body>
</html>