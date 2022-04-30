<?php require_once "controller1.php"; ?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['submittable']))
    {
        $cap = $_POST["tid"];
        $sql = "SELECT * FROM `table` WHERE table_id = $cap";
        $result = mysqli_query($con, $sql);
        $row = mysqli_num_rows($result);
        if($row > 0)
        {
            $fetch_info = mysqli_fetch_assoc($result);
            $tid = $_POST['tid'];
            
            $date = $_POST['date'];
            $time = $_POST['time'];
            $event = $_POST['event'];
		    
           if($event == "casual meet")
		   {
            $rt = strtotime($time) + 7200;
		   $TT = date('h:i:s', $rt);
            }
		   else
           {
			$rt = strtotime($time) + 18000;
			$TT = date('h:i:s', $rt);
		   }
                 //$leave_time=$time+2;
				$sql2 = "SELECT * FROM `reserve_table` WHERE '$date' = reserve_date and (reserve_time>='$time' or reserve_time<='$TT') and table_id=$tid";
				//echo $sql2;
				$result2 = mysqli_query($con, $sql2);
				$row2 = mysqli_num_rows($result2);
				if($row2 <= 0)
				{
				$sql1 = "INSERT INTO `reserve_table` (`customer_id`,`reserve_date`,`reserve_time`,`event`,`capacity`,`table_id`,`leave_time`) VALUES 
				('$cid','$date','$time','$event','$cap','$tid','$TT')";
				//echo $sql1;
				$result1 = mysqli_query($con, $sql1);
				if($result1)
				echo "<script>alert('Table booked successfully');</script>";
			    }
                else
                {
                echo "<script>alert('Sorry, no availlable table at this time slot!'); </script>";
                }
	     

        }
    }
}
?>