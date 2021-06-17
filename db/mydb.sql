-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 09:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catId` int(10) NOT NULL,
  `catName` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catId`, `catName`) VALUES
(1, 'Men\'s'),
(2, 'Women\'s'),
(3, 'Kid\'s'),
(4, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemId` int(10) NOT NULL,
  `iName` varchar(50) NOT NULL,
  `SID` varchar(10) NOT NULL,
  `iCategory` varchar(50) DEFAULT NULL,
  `iSubcategory` varchar(50) NOT NULL,
  `iPrice` decimal(6,2) NOT NULL,
  `qtyOnHand` int(5) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemId`, `iName`, `SID`, `iCategory`, `iSubcategory`, `iPrice`, `qtyOnHand`, `description`) VALUES
(1, 'White Blue Shirt', '1', '1', '1', '30.92', 10, 'Adidas Originals 3 Stripes Logo Tee Herren Trefoil Vintage Shirt Blue White'),
(2, 'Anime Manga T-shirt', '1', '1', '1', '18.17', 10, 'Hunter X Hunter HxH Anime Manga T-shirt'),
(3, 'Sweetshirt', '1', '1', '1', '18.04', 10, '2019 new unisex classic champion hoodie embroidered hooded sweatshirt'),
(4, 'Blue Top Jacket', '1', '1', '1', '29.99', 10, 'Vintage 80s ADIDAS Small Logo VENTEX Tracksuit Top Jacket Blue | XL'),
(5, 'Coat Outwear ', '1', '2', '3', '8.33', 10, 'Women Duck Down Jacket Fur Hooded Coat Outwear '),
(6, 'Green Cotton Casual Pant', '1', '1', '1', '11.00', 10, 'Goodfellow Slim Straight 32x30 Green Cotton Blend Casual Pants'),
(7, 'Leather Casual Shoes', '1', '1', '2', '21.75', 10, 'Men\'s Winter Pull on Loafers Leather Casual Shoes Breathable Antiskid Moccasins'),
(8, 'Grey Hiking Shoe', '1', '1', '2', '23.99', 10, 'Men\'s Salomon Speedcross 4 Sports Running Hiking Shoes Grey'),
(9, 'Timberland Shoe', '1', '1', '2', '90.99', 10, 'Timberland Bradstreet Oxford Gore-Tex Herren Schnürschuhe Sensorflex A14B1'),
(10, 'Leather Men Shoe', '1', '1', '2', '14.00', 10, 'Rainbow Size 10 M Brown Flip Flop Leather Men Shoes'),
(11, 'Black Leather House Slipper', '1', '1', '2', '715.59', 10, 'BRAND NEW - GOYARD - BLACK LEATHER HOUSE SLIPPERS - SIZE S'),
(12, 'Blouse Shirt', '1', '2', '3', '42.95', 10, 'New Martha Stewart Denim Peasant Blouse Shirt Boho Plus Size Top Size 3X'),
(13, 'Pink Blouse Shirt', '1', '2', '3', '38.95', 10, 'New Chico\'s Pink Spice Rose Peasant Blouse Shirt Boho Plus Size Top Size XXL 2X'),
(14, 'Casual Top', '1', '2', '3', '4.99', 10, 'J Crew Medium 3/4 Sleeve Striped Boatneck Top Nautical Casual Key Hole'),
(15, 'Formal Evening Dress', '1', '1', '1', '53.70', 10, 'BCBG Max Azria Womens Red Pleated Blouson Formal Evening Dress Gown 4 BHFO 3915'),
(16, 'Evening Dress Gown', '1', '1', '1', '23.20', 10, 'Adrianna Papell Womens Red Embellished Blouson Evening Dress Gown 6 BHFO 1123'),
(17, 'Open Toe High Heel', '1', '2', '4', '50.75', 10, 'Womens Ladies Open Toe High Heels Stiletto Sandals Ankle Strap Shoes Rock Buckle'),
(18, 'Lace Up High Slim Heel', '1', '2', '4', '0.99', 10, 'Office Womens Lace Up High Slim Heel Strappy Sandals Brown Suede Size 39'),
(19, 'Brown Leather Shoes', '1', '1', '2', '19.99', 10, 'Coach Ladies Brown Leather \"Opal\" Boat Shoes Size 9B'),
(20, 'Sport Sandal', '1', '2', '4', '34.97', 10, 'NEW! Chaco Women\'s Zcloud 2 Sport Sandal US 9, EUR 40, UK 7'),
(21, 'Fabric Women Sandal Shoes', '1', '2', '4', '25.00', 10, 'Chaco Size 7 M Pink Sport Sandals Fabric Women Sandal Shoes'),
(22, 'Girls Dress', '1', '3', '0', '129.00', 10, 'Gucci girls dress 6Y'),
(23, 'Navy Blue dress', '1', '2', '3', '5.99', 10, 'NWT Old Navy Girls 8y Navy Blue Gold Stars Jersey Dress New');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderDId` int(10) NOT NULL,
  `itemId` varchar(10) NOT NULL,
  `OrderID` varchar(10) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`orderDId`, `itemId`, `OrderID`, `price`) VALUES
(1, '1', '1', '11'),
(2, '6', '8', '11'),
(3, '9', '8', '91'),
(4, '12', '9', '43'),
(5, '18', '10', '1'),
(6, '1', '11', '31');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(10) NOT NULL,
  `CId` varchar(10) NOT NULL,
  `OrderDate` varchar(20) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addL1` varchar(100) NOT NULL,
  `addL2` varchar(100) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `cardName` varchar(20) NOT NULL,
  `creditCNo` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `CId`, `OrderDate`, `fname`, `lname`, `email`, `addL1`, `addL2`, `city`, `zip`, `payment`, `cardName`, `creditCNo`) VALUES
(1, '1', '2020.01.03', 'Janet', 'Jones', 'anetjones@yagoo.cm', 'No.4', 'First Street Plot', 'Frankfurt', '1000', 'cash', '', ''),
(2, '2', '2020.01.07', 'Robert', ' Phil', 'rm@tstreet.com', 'Melrose', '123', 'México D.F', '2000', 'card', 'Robert', '1111-2222-3333-4444'),
(3, '3', '2020.01.13', 'Howard', 'Wolowit', 'anetjones@yagoo.cm', 'No.4', 'First Street Plot', 'Frankfurt', '1000', 'cash', '', ''),
(4, '4', '2010.01.18', 'Karl', 'Jablonski', 'anetjones@yagoo.cm', 'No.4', 'First Street Plot', 'Frankfurt', '1000', 'cash', '', ''),
(5, '5', '2020.01.25', 'Wilman', 'Kala', 'rm@tstreet.com', 'Melrose', '123', 'México D.F', '2000', 'card', 'Robert', '1111-2222-3333-4444'),
(11, '3', '2020/01/26', 'Dumidu', 'Bandara', 'dumiduraj@gmail.com', 'No 122', 'Abhayagiriya Road', 'Anuradhapura', '50000', 'COD', '', ''),
(10, '3', '2020/01/26', 'Dumidu', 'Bandara', 'dumiduraj@gmail.com', 'No 122', 'Abhayagiriya Road', 'Anuradhapura', '50000', 'COD', '', ''),
(9, '3', '2020/01/26', 'Dumidu', 'Bandara', 'dumiduraj@gmail.com', 'No 122', 'Abhayagiriya Road', 'Anuradhapura', '50000', 'card', 'Dumidu', '12312312342545345'),
(8, '3', '2020/01/26', 'Dumidu', 'Bandara', 'dumiduraj@gmail.com', 'No 122', 'Abhayagiriya Road', 'Anuradhapura', '50000', 'COD', '', ''),
(7, '3', '2020/01/26', 'Dumidu', 'Bandara', 'dumiduraj@gmail.com', 'No 122', 'Abhayagiriya Road', 'Anuradhapura', '50000', 'COD', '', ''),
(6, '3', '2020/01/26', 'Dumidu', 'Bandara', 'dumiduraj@gmail.com', 'No 122', 'Abhayagiriya Road', 'Anuradhapura', '50000', 'cod', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcatId` int(10) NOT NULL,
  `subcatName` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcatId`, `subcatName`) VALUES
(0, '-'),
(1, 'Clothing'),
(2, 'Shoes'),
(4, 'Women\'s Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `SID` int(10) NOT NULL,
  `sFname` varchar(30) NOT NULL,
  `sLname` varchar(30) NOT NULL,
  `sAddress` varchar(100) NOT NULL,
  `sTele` varchar(11) NOT NULL,
  `sEmail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`SID`, `sFname`, `sLname`, `sAddress`, `sTele`, `sEmail`) VALUES
(1, 'Dumidu', 'Bandara', 'No 122, Abhayagiriya Road', '766344989', 'dumiduraj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `CId` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `userAddress` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userTele` varchar(11) NOT NULL,
  `userPassword` varchar(50) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`CId`, `username`, `fullname`, `userAddress`, `userEmail`, `userTele`, `userPassword`, `admin`) VALUES
(1, 'ucsc', 'UCSC', 'No: 35, Reid Avenue, Colombo 7, Sri Lanka.', 'ucsc@cmb.ac.lk', '0112741547', 'ucsc', 0),
(2, 'ucsca', 'UCSC', 'No: 35, Reid Avenue, Colombo 7, Sri Lanka.', 'ucsc@cmb.ac.lk', '0112741547', 'ucsc', 1),
(3, 'dumi', 'dumidu Kasun', 'No 122, Abhayagiriya Road', 'dumiduraj@gmail.com', '766344989', '1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemId`),
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderDId`),
  ADD KEY `OrderID` (`OrderID`),
  ADD KEY `itemId` (`itemId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `CId` (`CId`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcatId`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`CId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `orderDId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `CId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
