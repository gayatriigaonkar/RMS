<?php require_once "controller1.php"; ?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if(isset($_POST['addToCart'])) 
    {
        $itemId = $_POST["itemId"];
        // Check whether this item exists
        $existSql = "SELECT * FROM `cart` WHERE food_id = '$itemId' AND `customer_id`='$cid'";
        $result = mysqli_query($con, $existSql);
        $numExistRows = mysqli_num_rows($result);
        if($numExistRows > 0)
        {
            echo "<script>alert('Item Already Added.');
                    window.history.back(1);
                </script>";
        }
        else
        {
            $sql = "INSERT INTO `cart` (`food_Id`, `quantity`, `customer_id`) VALUES ('$itemId', '1', '$cid')";   
            $result = mysqli_query($con, $sql);
            if ($result)
            {
                echo "<script>
                    window.history.back(1);
                    </script>";
            }
        }
    }

    
    
    if(isset($_POST['removeItem'])) 
    {
        $itemId = $_POST["itemId"];
        $sql = "DELETE FROM `cart` WHERE `food_id`='$itemId' AND `customer_id`='$cid'";   
        $result = mysqli_query($con, $sql);
        echo "<script>alert(' Item Removed');
                window.history.back(1);
            </script>";
    }



    if(isset($_POST['removeAllItem'])) 
    {
        $sql = "DELETE FROM `cart` WHERE `customer_id`='$cid'";   
        $result = mysqli_query($con, $sql);
        echo "<script>alert('Removed All');
                window.history.back(1);
            </script>";
    }



    if(isset($_POST['checkout'])) 
    {
        $amount = $_POST["amount"];

        $passSql = "SELECT * FROM customer WHERE customer_id='$cid'"; 
        $passResult = mysqli_query($con, $passSql);
        $passRow=mysqli_fetch_assoc($passResult);
        
            $sql = "INSERT INTO `order` (`customer_id`, `total_amount`, `order_date`) VALUES ('$cid','$amount',current_timestamp())";
            $result = mysqli_query($con, $sql);
            $order_id = $con->insert_id;
            if ($result)
            {
                $addSql = "SELECT * FROM `cart` WHERE customer_id='$cid'"; 
                $addResult = mysqli_query($con, $addSql);
                while($addrow = mysqli_fetch_assoc($addResult))
                {
                    $food_id = $addrow['food_id'];
                    $quantity = $addrow['quantity'];
                    $itemSql = "INSERT INTO `orderitem` (`order_id`, `food_id`, `quantity`, `customer_id`) VALUES ('$order_id', '$food_id', '$quantity', '$cid')";
                    $itemResult = mysqli_query($con, $itemSql);
                    
                }
                $deletesql = "DELETE FROM `cart` WHERE `customer_id`='$cid'";   
                $deleteresult = mysqli_query($con, $deletesql);
                echo '<script>alert("Thanks for ordering with us. Your order id is ' .$order_id. '.");
                window.history.back(1);
                    </script>';
                    exit();
            }
    }

    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
    {
        $food_id = $_POST['food_id'];
        $qty = $_POST['quantity'];
        $updatesql = "UPDATE `cart` SET `quantity`='$qty' WHERE `food_id`='$food_id' AND `customer_id`='$cid'";
        $updateresult = mysqli_query($con, $updatesql);
    }
    
}
?>