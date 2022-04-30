SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `customer` (
  `customer_id` int(20) Not Null,
  `name` varchar(255) Not Null,
  `address` varchar(100) Not Null,
  `mobile` varchar(20) unique Not Null,
  `email` varchar(255) unique Not Null,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `order` (
  `order_id` int(21) NOT NULL,
  `customer_id` int(21) NOT NULL,
  `total_amount` int(200) NOT NULL, 
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `orderitem` (
  `orderitem_id` int(21) NOT NULL,
  `order_id` int(21) NOT NULL,
  `customer_id` int(21) NOT NULL,
  `food_id` int(21) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `quantity` int(100) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `food_quality` varchar(30) NOT NULL,
  `service` varchar(30) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `suggestion` text NOT NULL,
  `feedback_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `food` (
  `food_id` int(12) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_price` int(12) NOT NULL,
  `food_type` varchar(20) NOT NULL,
  `cat_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `category` (
  `cat_id` int(12) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `table` (
  `table_id` int(11) NOT NULL,
  `capacity` int(30) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `reserve_table` (
  `reserve_table_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `reserve_date` DATE NOT NULL,
  `reserve_time` time NOT NULL,
  `leave_time` time NOT NULL,
  `event` varchar(40) NOT NULL,
  `capacity` int(30) NOT NULL,
  `table_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `table` (`table_id`, `capacity`) VALUES
(1,2),(2,2),(3,4),(4,4),(5,4);


INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1,'Starters'),(2,'Main Course'),(3,'Desserts'),(4,'Snacks'),(5,'Beverages');

INSERT INTO `food` (`food_id`, `food_name`, `food_price`, `food_type`, `cat_id`) VALUES
(1,'bread roll',50,'veg',1),(2,'egg burger',50,'non veg',1),(3,'nachos',50,'veg',1),
(4,'chicken cutlet',100,'non veg',1),(5,'momos',50,'veg',1),(6,'chicken fingers',100,'non veg',1),
(7,'cheese pasta',50,'veg',2),(8,'chicken korma',100,'non veg',2),(9,'fish curry',100,'non veg',2),
(10,'fried prawns',100,'non veg',2),(11,'paneer roll',50,'veg',2),(12,'veg pulao',100,'veg',2),
(13,'gulab jamun',50,'veg',3),(14,'ice cream',100,'veg',3),(15,'egg pudding',100,'non veg',3),
(16,'cheese cake',100,'non veg',3),(17,'rasgulla',100,'veg',3),(18,'pudding',100,'veg',3),
(19,'veg burger',50,'veg',4),(20,'samosa',30,'veg',4),(21,'cheese pizza',100,'veg',4),
(22,'french fries',50,'veg',4),(23,'chicken pizza',100,'non veg',4),(24,'hamburger',100,'non veg',4),
(25,'hot chocolate',100,'veg',5),(26,'lemonade',50,'veg',5),(27,'ice tea',50,'veg',5),
(28,'coffee',50,'veg',5),(29,'milkshake',100,'veg',5),(30,'banana smoothie',100,'veg',5);



ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`orderitem_id`);

ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

ALTER TABLE `table`
  ADD PRIMARY KEY (`table_id`);

ALTER TABLE `reserve_table`
  ADD PRIMARY KEY (`reserve_table_id`);

ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

ALTER TABLE `customer`
  MODIFY `customer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `orderitem`
  MODIFY `orderitem_id` int(21) NOT NULL AUTO_INCREMENT;

ALTER TABLE `order`
  MODIFY `order_id` int(21) NOT NULL AUTO_INCREMENT;

ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `category`
  MODIFY `cat_id` int(12) NOT NULL AUTO_INCREMENT;

ALTER TABLE `food`
  MODIFY `food_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `table`
  MODIFY `table_id` int(12) NOT NULL AUTO_INCREMENT;

ALTER TABLE `reserve_table`
  MODIFY `reserve_table_id` int(12) NOT NULL AUTO_INCREMENT;

ALTER TABLE `feedback`
  MODIFY `feedback_id` int(12) NOT NULL AUTO_INCREMENT;

COMMIT;
