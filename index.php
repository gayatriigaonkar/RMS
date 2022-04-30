<?php require_once "controller1.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMS</title>
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
            <li class="item"><a href="#booktable">Book Table</a></li>
            <li class="item"><a href="cart.php">Cart</a></li>
            <li class="item"><a href="#feedback">Feedback</a></li>
            <li class="item"><a href="logout.php">Logout</a></li>	
        </ul>
        <p class="welcome">Welcome, <?php echo $fetch_info['name'] ?></p>
    </nav>




    <section id="home">
        <h1 id="hhome">Food Paradise</h1>
        <p id="phome">Welcome to Home of taste!</p>
    </section>




    <section id="aboutus">
        <h1 class="hPri center">About us</h1>
        <div id="box1">
            <div id="au2">
                <p class="pPri">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti dicta odio in,
                    blanditiis, fugiat nam vitae optio illum voluptatem perferendis possimus nesciunt doloremque
                    voluptatum, labore ex explicabo assumenda aliquam incidunt dignissimos odit soluta cumque ullam
                    earum iste! Qui a temporibus ex runt, velit veritatis ipsam nemo quos possimus dicta, aliquam culpa
                    aliquid! Ab animi recusandae sequi praesentium doloribus eos accusamus a. Inventore deserunt,
                    veritatis maiores nulla vitae eum dolo</p>
                    <br><br>
                <p class="pPri">impedit quod veniam quae dolorum, id enim fuga ab soluta!
                    Voluptatum, eos suscipit deserunt, velit veritatis ipsam nemo quos possimus dicta, aliquam culpa
                    aliquid! Ab animi recusandae sequi praesentium doloribus eos accusamus a. Inventore deserunt,
                    veritatis maiores nulla vitae eum dolores veniam ipsum cumque debitis ullam cupiditate molestiae
                    error necessitatibus quia saepe tempora eveniet sapiente totam? Autem m</p>
            </div>
            <div id="au1">
                <img src="img/aboutus.png" alt="pizza">

            </div>
        </div>
    </section>




    <section id="service">
        <h1 class="hPri center">Our Services</h1>
        <div id="box1">
            <div class="servicebox">
                <img src="img/service1.jpg" alt="pizza">
                <h2 class="hSec1 center">Food Catering</h2>
            </div>
            <div class="servicebox">
                <img src="img/service2.jpg" alt="plate">
                <h2 class="hSec1 center">Table Booking</h2>
            </div>
            <div class="servicebox">
                <img src="img/service3.jpg" alt="deliveryboy">
                <h2 class="hSec1 center">Food Delivery</h2>
            </div>
        </div>
    </section>



    <section id="gallery">
        <h1 class="hPri center">Gallery</h1>
        <div id="box1">
            <div class="serviceboxg">
                <img src="img/1g.jpg" alt="pizza">
            </div>
            <div class="serviceboxg">
                <img src="img/2g.jpg" alt="plate">
            </div>
            <div class="serviceboxg">
                <img src="img/3g.jpg" alt="deliveryboy">
            </div>
        </div>
        <div id="box1">
            <div class="serviceboxg">
                <img src="img/4g.jpg" alt="pizza">
            </div>
            <div class="serviceboxg">
                <img src="img/5g.jpg" alt="plate">
            </div>
            <div class="serviceboxg">
                <img src="img/6g.jpg" alt="deliveryboy">
            </div>
        </div>
    </section>




    <section id="booktable">
        <h1 class="hPri center" id="t1">Table Reservation</h1>
            <div id="box1">
                <div id="bt2">
                    <form action="table.php" method="post">
                        <div class="tabform1">
                        <p>Date</p>
                        </div>
                        <div class="tabform">
                            <input type="date" name="date" placeholder="Date of reservation">
                        </div>
                        <div class="tabform1">
                            <p>Time</p>
                            </div>
                        <div class="tabform">
                         <select name="time">
                                <option value="7">7.00</option>
                                <option value="8">8.00</option>
                                <option value="9">9.00</option>
                                <option value="10">10.00</option>
                                <option value="11">11.00</option>
                                <option value="12">12.00</option>
                                <option value="13">13.00</option>
                                <option value="14">14.00</option>
                                <option value="15">15.00</option>
                                <option value="16">16.00</option>
                                <option value="17">17.00</option>
                                <option value="18">18.00</option>
                                <option value="19">19.00</option>
                                <option value="20">20.00</option>
                                <option value="21">21.00</option>
                                <option value="22">22.00</option>
                                <option value="23">23.00</option>
                                <option value="24">24.00</option>
                        </select>
                        </div>
                       <!-- <div class="tabform1">
                            <p>Time</p>
                            </div>
                        <div class="tabform">
                            <input type="time" name="time" placeholder="Time">
                        </div> -->
                        <div class="tabform1">
                            <p>Event</p>
                        </div>
                        <div class="tabform">
                            <select name="event">
                            <option value="casual meet">Casual Meet</option>
                            <option value="party">Party</option>
                        </select>
                        </div>
                        <div class="tabform1">
                            <p>Table Id</p>
                            </div>
                        <div class="tabform">
                         <select name="tid">
                                <option value="1">Table No. 1 (capacity=2)</option>
                                <option value="2">Table No. 2 (capacity=2)</option>
								<option value="3">Table No. 3 (capacity=4)</option>
								<option value="4">Table No. 4 (capacity=4)</option>
								<option value="5">Table No. 5 (capacity=4)</option>
                            </select>
                        </div>
                        <div>
                            <input class="logbtn" type="submit" name="submittable" value="Submit">
                        </div>
                    </form>
                </div>
                <div id="bt1">
                    <img src="img/table1.jpg" alt="table">
                </div>
            </div>
    </section>




    <section id="feedback">
        <h1 class="hPri center" id="f1">Feedback</h1>
        <div id="fbox1">
            <div id="bt4">
                <img src="img/emoji.png" alt="emoji">
            </div>
            <div id="bt3">
                <form action="" method="POST">
                    <div class="tabform2">
                    <p>Food Quality</p>
                    </div>
                    <div class="fform">
                        <select name="q1">
                            <option value="Excellent">Excellent</option>
                            <option value="Good">Good</option>
                            <option value="Average">Average</option>
                            <option value="bad">bad</option>
                            <option value="worst">worst</option>
                        </select>
                    </div>
                   <div class="tabform2">
                        <p>Service</p>
                    </div>
                    <div class="fform">
                        <select name="q2">
                            <option value="Excellent">Excellent</option>
                            <option value="Good">Good</option>
                            <option value="Average">Average</option>
                            <option value="bad">bad</option>
                            <option value="worst">worst</option>
                        </select>
                    </div>
                    <div class="tabform2">
                        <p>Overall Experience</p>
                    </div>
                    <div class="fform">
                        <select name="q3">
                            <option value="Excellent">Excellent</option>
                            <option value="Good">Good</option>
                            <option value="Average">Average</option>
                            <option value="bad">bad</option>
                            <option value="worst">worst</option>
                        </select>
                    </div>
                    <div class="tabform2">
                        <p>Any Suggestions?</p>
                    </div>
                    <div class="ft">
                        <textarea name="msg" id="textarea" cols="30" rows="5" placeholder="Your message"></textarea>
                    </div>
                
                    <div>
                        <input class="logbtn" type="submit" name="submitfeedback" value="Submit">
                    </div>
                </form>
            </div>
            <div id="txtotp1">

            </div>
        <div>
    </section> 
    
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['submitfeedback']))
    {
        $sql = "SELECT * FROM `order` WHERE customer_id = $cid";
        $result = mysqli_query($con, $sql);
        $row = mysqli_num_rows($result);
        if($row > 0)
        {
            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];
            $msg = $_POST['msg'];
            $sql1 = "INSERT INTO `feedback` (`customer_id`,`food_quality`,`service`,`experience`,`suggestion`,`feedback_date`) VALUES 
            ('$cid','$q1','$q2','$q3','$msg',current_timestamp())";
            $result = mysqli_query($con, $sql1);
            echo "<script>alert('Feedback Submitted successfully');</script>";
        }
        else
        {
            echo "<script>alert('you need to order food first,inorder to give feedback.'); </script>";
        }
    } 
}
?>






    <section id="map">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3846.1461445926875!2d73.97796991479935!3d15.422661589283244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfba554c97cb79%3A0xb258ca176c4668ac!2sGoa%20Engineering%20College!5e0!3m2!1sen!2sin!4v1637489550040!5m2!1sen!2sin"
                width="1515" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>



    

    <footer>
        <div id="fbox1" class="foot1">
            <div class="fbox2">
                <h2 class="hSec center f3">Contact us</h2>
                <p class="pPri center f3">
                    tel: 0832-xxxxxxx
                    <br>
                    email: xyz@gmail.com
                    <br>
                    mobile: +91-xxxxxxxxxx
                </p>
            </div>
            <div class="fbox2">
                <h2 class="hSec center f3">Timings</h2>
                    <div id="time1">
                        <div id="fo1">
                            <p class="pPri f3">
                                monday <br> tuesday <br> wednesday <br> thursday <br> friday <br> saturday <br> sunday
                            </p>
                        </div>
                        <div id="fo2">
                            <p class="pPri f3">
                                7am - 11pm <br>7am - 11pm <br>7am - 11pm <br>7am - 11pm <br>7am - 11pm <br>7am - 11pm <br>7am - 11pm <br>
                            </p>
                        </div>
                    </div>
                </p>
            </div>
            <div class="fbox2">
                <h2 class="hSec center f3">Location</h2>
                <p class="pPri center f3">
                    Food Paradise, Goa <br>
                    Bhausaheb Bandodkar Technical Education Complex  <br>
                    Farmagudi, Ponda, Goa 403401
                </p>
            </div>
        </div>
        <div class="center pPri" id="copywrite">Copyright &copy; Food Paradise, All Rights Reserved!</div>
    </footer>

</body>

</html>