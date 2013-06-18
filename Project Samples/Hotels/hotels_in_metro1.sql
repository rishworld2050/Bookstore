-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2013 at 01:10 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotels_in_metro1`
--

-- --------------------------------------------------------

--
-- Table structure for table `fgusers`
--

CREATE TABLE IF NOT EXISTS `fgusers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `cpassword` varchar(250) DEFAULT NULL,
  `ph_no` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fgusers`
--

INSERT INTO `fgusers` (`ID`, `username`, `email`, `password`, `cpassword`, `ph_no`) VALUES
(1, 'rishabh1', 'rish@localhost.com', '12345678', '12345678', 2147483647),
(2, 'saurabh1', 's1@gmail.com', '12345678', '12345678', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE IF NOT EXISTS `hotels` (
  `hotel_name` varchar(20) NOT NULL,
  `hotel_img` varchar(10) NOT NULL,
  `hotel_addr` varchar(50) NOT NULL,
  `hotel_contact` int(12) NOT NULL,
  `hotel_website` varchar(20) NOT NULL,
  `hotel_desc` varchar(1000) NOT NULL,
  `hotel_rev` varchar(100) NOT NULL,
  `age` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_name`, `hotel_img`, `hotel_addr`, `hotel_contact`, `hotel_website`, `hotel_desc`, `hotel_rev`, `age`) VALUES
('delhihyatt', 'abc', 'ergerguerutthbubujhbu', 2147483647, 'ejwuerjfur.com', 'eihfrehguheruhreuhruehurehurehvhrevhrhrvhrvhrvhrvhrvrvhrvhrvbhrvhdfvhvhdhdhvreyhvyrevyhrvhdfbvfdhbvfdhvbfdhvbfdh', 'good', 'less 18'),
('delhihyatt', 'abc', 'ergerguerutthbubujhbu', 2147483647, 'ejwuerjfur.com', '235328ujhjfduuu\n\nvfvf', 'best', 'less 30');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE IF NOT EXISTS `navigation` (
  `city` varchar(15) NOT NULL,
  `food` varchar(15) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `hotel_addr` varchar(200) NOT NULL,
  `hotel_contact` varchar(15) NOT NULL,
  `hotel_website` varchar(500) NOT NULL,
  `Age` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`city`, `food`, `hotel_name`, `hotel_addr`, `hotel_contact`, `hotel_website`, `Age`) VALUES
('delhi', 'chinese', 'chinabar', 'ureegureguitrg', 'erugjtj', 'ruigjrgj', 'moderate'),
('delhi', 'chinese', 'noodle', 'jeierjfi', 'eugreugj', 'eurfreugreiu', 'moderate');

-- --------------------------------------------------------

--
-- Table structure for table `navigation1`
--

CREATE TABLE IF NOT EXISTS `navigation1` (
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `navigation21`
--

CREATE TABLE IF NOT EXISTS `navigation21` (
  `city` varchar(15) NOT NULL,
  `food` varchar(15) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `hotel_addr` varchar(200) NOT NULL,
  `hotel_contact` varchar(15) NOT NULL,
  `hotel_website` varchar(500) NOT NULL,
  `Age` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navigation21`
--

INSERT INTO `navigation21` (`city`, `food`, `hotel_name`, `hotel_addr`, `hotel_contact`, `hotel_website`, `Age`) VALUES
('Bangalore', 'chinese', 'China Pearl', '53/1, 5th cross, 6th Block, Koramangala, Bangalore, Karnataka 560095', '080 4110 5060', 'www.chinapearlindia.com', 'low'),
('Bangalore', 'chinese', 'Hunan', 'No. 10, 1st Flr, Near Mayuri Restaurant, Sanjay Nagar Bangalore', '097 39 120000', 'http://www.zomato.com/bangalore/hunan-new-bel-road', 'moderate'),
('Bangalore', 'chinese', 'Green Onion', '44/3, Chandraprabha Complex, Residency Rd, Richmond Town Bangalore', '080 2532 7146', 'greenonion.in', 'high'),
('Bangalore', 'italian', 'Little Italy', 'Plot No.2017, 100 Feet Road, Beside Reebok Showroom, HAL 2nd Stage, Indira Nagar, Bangalore, Karnataka 560038', '080 2520 7171', 'www.littleitaly.in', 'low'),
('Bangalore', 'italian', 'Via Milano', '612, Basil Moneta, 3rd Floor, Koramangala 80 Feet Road, IV Block, Koramangala, Bangalore, Karnataka 560034', '080 4130 9997', 'www.viamilano.co.in', 'moderate'),
('Bangalore', 'italian', 'Toscano', 'UB City Vittal Mallya Rd, Kg.halli, Bangalore', '080 4173 8800', 'www.toscano.co.in', 'high'),
('Bangalore', 'indian', 'SouthIndies', 'Inner Ring Rd, Indira Nagar Bangalore', '080 4163 6363', 'thesouthindies.com', 'low'),
('Bangalore', 'indian', 'Serengity', 'National Highway 7 Bangalore', '080 4000 3333', 'http://www.zomato.com/bangalore/serengeti-koramangala', 'moderate'),
('Bangalore', 'indian', 'ZAOQ - Indian Cuisine', 'No# 74 M. M. Road, Fraser Town, Bangalore, Karnataka 560005', '094 82 872501', 'www.zaoq.in', 'high'),
('Bangalore', 'punjabi', 'Punjabi Food Corner', ' No 25, 2nd Main, Near-BDA Complex, Indiranagar, Bangalore, Karnataka 560038', '080 2525 3519', 'http://www.zomato.com/bangalore/punjabi-food-corner-indiranagar', 'low'),
('Bangalore', 'punjabi', 'Chandni Chowk', ' 28, 6th Block, Opposite IBP Petrol, 80 Feet Road, Koramangala, Bengaluru, Karnataka 560095', '080 4110 5454', 'http://www.sevenstargroup.in/chandini_chowk.php', 'moderate'),
('Bangalore', 'punjabi', 'Cinnamon Kitchen', '1, Madison Complex, Second Floor, Kodihalli, HAL Airport Road, Bangalore, Karnataka 560017', '080 2521 0081', 'cinnamonkitchen.co.in', 'high'),
('Bangalore', 'american', '24 Carats', 'The Capitol Hotel   Raj Bhavan Road, Bangalore -560001', '080 - 22281234', 'http://yellowpages.sulekha.com/bangalore/24-carats-raj-bhavan-road-bangalore_contact-address', 'low'),
('Bangalore', 'american', 'Back Street Diner', 'Opposite St. Charles High SchoolShop No. 1  1st Cross, Ramaiah Layout, Kammanahalli Main Road   Kammanahalli, Bangalore -560084', '9886696155', 'http://yellowpages.sulekha.com/bangalore/back-street-diner-kammanahalli-bangalore_contact-address', 'moderate'),
('Bangalore', 'american', 'The Capitol Hotel ', '3rd Rd,  Raj Bhavan , Bangalore -560001', '080 - 23281456', 'info@Capitol Hotel .com', 'high'),
('Chandigarh', 'chinese', 'Yo China', 'SCO-4& 5, Sec-9D,Chandigarh,Chandigarh, 160009', '0172 461 3123', 'www.yo-china.com/StoreDetails.html', 'low'),
('Chandigarh', 'chinese', 'Noodle Bar', 'Sco 47, Madhya Marg, Sector 26, Madhya Marg,Chandigarh,Chandigarh, 160019', '0172 506 5959', 'https://plus.google.com/108074909975143400762/about?gl=in&hl=en', 'high'),
('Chandigarh', 'chinese', 'Hot Millions', 'SCO 196-197, Sector 17-C, Chandigarh, Chandigarh, 160017', '0172 464 3333', 'www.hotmillions.biz', 'moderate'),
('Chandigarh', 'italian', 'FORNO', 'SCO 403-404, Sector 35-C, Chandigarh, Chandigarh, 160035', '0172 500 0099', 'www.forno.in', 'low'),
('Chandigarh', 'italian', 'Pizza Corner', 'Hotel Aroma Complex, Himalaya Marg, Sector 22 C, Himalaya Marg, Chandigarh, 160022', '0172 441 1223', 'https://plus.google.com/106032320922068025478/about?gl=in&hl=en', 'moderate'),
('Chandigarh', 'italian', 'La Dolce Vita', 'LCR 165-166, Sector 43 B, Chandigarh, 160034', '095 92 111122', 'www.hotelrio.in', 'high'),
('Chandigarh', 'indian', 'Sagar Ratna', '409-410, Sector 35-C, Chandigarh, 160022', '0172 500 5511', 'www.sagarratna.in', 'low'),
('Chandigarh', 'indian', 'Swagath Restaurant & Bar', ' SCO 7,Sector 26,Madhya Marg, Chandigarh 160019', '0172 304 5678', 'www.swagath.in', 'high'),
('Chandigarh', 'indian', 'Barbeque Nation', ' SCO 39, Madhya Marg, Near Mainland China, Sector 26, Chandigarh, Chandigarh UT, 160019', '0172 466 6900', 'www.barbeque-nation.com', 'moderate'),
('Chandigarh', 'punjabi', 'Singhs Chicken', 'Sector 22-b, Chandigarh, 160022', '0172 508 7132', 'https://plus.google.com/114585020286078368250/about?gl=in&hl=en', 'moderate'),
('Chandigarh', 'punjabi', 'Sher-e-Punjab', 'Sector 35 B Chandigarh', '0172 501 6111', 'https://plus.google.com/115487107766072010422/about?gl=in&hl=en', 'high'),
('Chandigarh', 'punjabi', 'Punjabi Sweet House', 'Daddu Majra, Chandigarh', '098 15 309179', 'https://plus.google.com/117270618337258056707/about?gl=in&hl=en', 'low'),
('Chandigarh', 'american', 'Subway', 'Sco 831 NAC Shivalik Enclave , Manimajra Kalka Road Manimajra, Chandigarh', '0172 405 1010', 'http://www.subway.co.in', 'low'),
('Chandigarh', 'american', 'Over Fresh', 'Sco-437-438, Sector 35-c 35C, Sector 35, Chandigarh', '0172 465 8863', 'https://plus.google.com/109340265817470951725/about?gl=in&hl=en', 'moderate'),
('Chandigarh', 'american', 'Mc Donalds Family Restaurant', 'Sco No 457-458, Sector 35-c, Sector 35-c, Chandigarh, 160022', '0172 466 5457', 'www.mcdonaldsindia.com', 'high'),
('Chandigarh', 'indian', 'Swagath Restaurant & Bar', ' SCO 7,Sector 26,Madhya Marg, Chandigarh 160019', '0172 304 5678', 'www.swagath.in', 'low'),
('delhi', 'chinese', 'Tao Restaurant', 'E-8, Connaught Place, New Delhi, Delhi', '011 4358 2888', 'www.taorestaurant.in', 'low'),
('delhi', 'chinese', 'The Yum Yum Tree', 'First Floor Community Centre, Okhla Rd, Friends Colony New Delhi, DL', '011 4260 2020', 'www.theyumyumtree.in', 'high'),
('delhi', 'chinese', 'Fujiya', '12/48, Malcha Marg, Inside Shopping Centre, Chanakyapuri, New Delhi, Delhi, 110021', '011 2687 6059', 'www.fujiya.co.in', 'moderate'),
('delhi', 'italian', 'Hans Plaza', '15, Barakhamba Rd, Connaught Place New Delhi, DL', '011 2331 6861', 'www.hanshotels.com/delhi/index', 'moderate'),
('delhi', 'italian', 'Diva', 'M8, M Block Market, GK2 New Delhi, DL', '011 4163 7858', 'diva-italian.com', 'high'),
('delhi', 'italian', 'Flavours', 'C 51, Banks Complex, Moolchand Flyover Complex, Ring Road, Defence Colony, New Delhi, Delhi, 110024', '011 4155 0367', 'www.flavorsofitaly.net', 'low'),
('delhi', 'indian', 'Bukhara', 'Chanakyapuri New Delhi, DL', '011 2611 2233', 'https://plus.google.com/115136', 'low'),
('delhi', 'indian', 'Punjabi By Nature', '11, Near Priya PVR Complex, Basant Lok, Vasant Vihar, New Delhi, Delhi, 110057', '011 4611 7000', 'www.punjabibynature.in/', 'moderate'),
('delhi', 'indian', 'The Imperial', 'Janpath Lane, Connaught Place, New Delhi, 110001', '011 2334 1234', 'theimperialindia.com', 'high'),
('delhi', 'punjabi', 'Punjabi Rasoi', 'Sector 7, Rohini New Delhi, DL', '011 2705 5858', 'https://www.google.co.in/url?s', 'high'),
('delhi', 'punjabi', 'New shere Punjab dhaba', 'G 17, A, Main Road, Kalkaji, Kalkaji New Delhi, DL', '011 2644 4950', 'https://www.google.co.in/url?s', 'moderate'),
('delhi', 'punjabi', 'Punjab Food Court', '2, 9, Somdutt Chamber, Ug 70, Bhikaji Cama Place, Bhikaji Cama Place New Delhi, DL', '011 2618 8509', 'https://www.google.co.in/url?sa=t&rct=j&q=&esrc=s&source=web&cd=7&cad=rja&ved=0CI4BEBYwBg&url=https%3A%2F%2Fplus.google.com%2F102623123307465725683%2Fabout%3Fgl%3Din%26hl%3Den&ei=SeshUZqvGc-qrAf--4DwC', 'low'),
('delhi', 'american', 'All American Diner', 'Lodi Colony New Delhi, DL', '011 4366 3333', 'https://www.google.co.in/url?sa=t&rct=j&q=&esrc=s&source=web&cd=5&cad=rja&sqi=2&ved=0CHUQFjAE&url=http%3A%2F%2Fwww.habitatworld.com%2Flocation.php&ei=Y-whUamTKIK3rAfUsYHAAQ&usg=AFQjCNGEdIruruoYsbmqzNSgF9cDpiQ-Ng&sig2=m1Ln0cmauEsoIxINEsnzzw&bvm=bv.42553238,d.bmk', 'low'),
('delhi', 'american', 'Hard Rock Cafe', 'M 110, Multiplex Building'' 1st Floor, DLF Place, Saket District Centre, New Delhi DL', '011 4715 8888', 'https://www.google.co.in/url?sa=t&rct=j&q=&esrc=s&source=web&cd=8&cad=rja&sqi=2&ved=0CJcBEBYwBw&url=http%3A%2F%2Fwww.hardrock.com%2Flocations%2Fcafes3%2Fcafe.aspx%3FLocationID%3D542%26MIBEnumID%3D3&ei=Y-whUamTKIK3rAfUsYHAAQ&usg=AFQjCNEhGCFOKi-xRw-c7R64k7cwghymXg&sig2=aSPKS13qRQaPiiXWMWUFSA&bvm=bv.42553238,d.bmk', 'high'),
('delhi', 'american', 'T G I Fridays', '2nd Floor, West Gate Mall, Shivaji Place, Rajouri Garden New Delhi, DL', '011 4550 8081', 'https://www.google.co.in/url?sa=t&rct=j&q=&esrc=s&source=web&cd=9&cad=rja&sqi=2&ved=0CKMBEBYwCA&url=http%3A%2F%2Fwww.tgifindia.com%2F&ei=Y-whUamTKIK3rAfUsYHAAQ&usg=AFQjCNGNlduxiDRAgZaXYVk9c3wFze7mWw&sig2=lCnIvVLFgPmfzTRXWbApvg&bvm=bv.42553238,d.bmk', 'moderate'),
('Mumbai', 'chinese', 'Mainland China', ' Shalimar Morya Park, Off New Link Road, Jogeshwari West, Mumbai, MH 400053', '022 6678 0011', 'www.mainlandchinaindia.com', 'low'),
('Mumbai', 'chinese', 'China House', 'Grand Hyatt Mumbai, Off Western Express Highway, Santacruz East, Mumbai, Vakola, Mumbai, MH 400055', '022 6676 1234', 'www.hyatt.com', 'high'),
('Mumbai', 'chinese', 'Yauatcha', ' Ground floor, Raheja Tower, Bandra Kurla Complex, Bandra East, Mumbai, MH 400051', '022 2644 8888', 'yauatcha.com/mumbai', 'moderate'),
('Mumbai', 'italian', '72 Degrees North', 'No. A-2-4  Jagdamba Commercial Complex  , Off Linking Road   Malad West, Mumbai -400064', '022 - 28834391', 'http://yellowpages.sulekha.com/mumbai/72-degrees-north-malad-west-mumbai_contact-address', 'low'),
('Mumbai', 'italian', 'Across D Coast', 'Opposite Krishna Mandir#1/1, Shop #2,  Veera Desai Road, J.P. Road, Azad Nagar   Andheri West, Mumbai -400053', ' 022 - 26731945', 'http://yellowpages.sulekha.com/mumbai/across-d-coast-andheri-west-mumbai_contact-address', 'high'),
('Mumbai', 'italian', 'Alfredo''s', ' ShahNo. 5  Hotel King''s International  , Juhu Church Road   Juhu, Mumbai -400049', '022 - 66922222', 'http://yellowpages.sulekha.com/mumbai/alfredo-s-juhu-mumbai_contact-address', 'moderate'),
('Mumbai', 'indian', 'Spice Tree', 'Fernander Villa 95, Bandra, Krishna Chandra Rd, Hill Rd, Mumbai, MH 400050', '022 2640 5161', 'spicetree.co.in', 'low'),
('Mumbai', 'indian', 'The Shalimar Hotel', 'August Kranti Marg, Kemps Corner, Cumballa Hill, Mumbai, MH 400036', '022 6664 1000', 'www.theshalimarhotel.com', 'high'),
('Mumbai', 'indian', 'Jewel Of India', 'Nehru Centre, Dr Annie Besant Rd, Worli, Mumbai, MH 400018', '022 2494 9219', 'https://plus.google.com/112508031112918746751/about?gl=in&hl=en', 'moderate'),
('Mumbai', 'punjabi', 'Pind-Da-Dhaba', '3rd Rd, Khar West, Mumbai, MH', '022 2649 6806', 'https://plus.google.com/106968368344122951624/about?gl=in&hl=en', 'low'),
('Mumbai', 'punjabi', 'Chicken Centre', 'Warden Court, August Kranti Marg, Papanas Wadi, Tardeo, Mumbai, MH 400036', '022 2380 6118', 'https://plus.google.com/103759334915568243669/about?gl=in&hl=en', 'high'),
('Mumbai', 'punjabi', 'Akarshan Bar And Restaurant', 'Paras Sadan, Station Road, Vikhroli East, Mumbai, Maharashtra 400079', '022 2577 9477', 'https://plus.google.com/117148808144087631570/about?gl=in&hl=en', 'moderate'),
('Mumbai', 'american', 'Beatle Hotel', 'Orchard Avenue  , Powai   Powai, Mumbai -400072', '022 - 40895000', 'http://yellowpages.sulekha.com/mumbai/beatle-hotel-powai-mumbai_contact-address', 'low'),
('Mumbai', 'american', 'Barbeque Nation', 'Sun Magnetica Building  , Service Road   Louiswadi, Mumbai -400602', ' 022 - 32162444', 'http://yellowpages.sulekha.com/mumbai/barbeque-nation-louiswadi-mumbai_contact-address', 'high'),
('Mumbai', 'american', 'Alps Restaurant & Beer Bar', 'Roosevelt House  , Nawroji Furdunji Road   Council Hall, Mumbai -400039', '022 - 22045042', 'http://yellowpages.sulekha.com/mumbai/alps-restaurant-beer-bar-council-hall-mumbai_contact-address', 'moderate'),
('Noida', 'chinese', 'Bamboo Shots', 'F-2, F-3, Sector 18, Noida Uttar Pradesh', '0120 259 1243', 'www.bambooshootsnoida.com', 'moderate'),
('Noida', 'chinese', 'Gravity', '401 & 402, Jaipuria Plaza, sector- 26, Noida, Uttar Pradesh', '0120 253 2111', 'www.gravityrestaurant.in', 'high'),
('Noida', 'chinese', 'Baby Dragon', 'G-34, Noida Sector 18, Delhi-NCR, DL', '0120 435 5260', 'www.babydragon.co.in/', 'low'),
('Noida', 'italian', 'Top Breads', 'K-4, Ocean Heights Bldg Sector 18, Gautam Budh Nagar, New Okhla Industrial Development Area', '0120 259 1458', 'https://plus.google.com/114373715141210665516/about?gl=in&hl=en', 'high'),
('Noida', 'italian', 'My Way Or The High Way', '4th & 5th Floor, The Centrestage mall New Okhla Industrial Development Area', '098 11 203606', 'https://www.facebook.com/MyWayortheHighwayNoida', 'moderate'),
('Noida', 'italian', 'Papa Jones', 'New Okhla Industrial Development Area', '0120 434 7272', 'papajohnspizza.in', 'low'),
('Noida', 'indian', 'Desi vibes', 'G-50, 1 Floor, Near McDonald, Sector 18,Noida,Uttar Pradesh 201301', '0120 422 2228', 'www.desivibes.in', 'low'),
('Noida', 'indian', 'Vaango', 'Botanical Garden Metro Station, Noida, Next to Federal Bank New Okhla Industrial Development Area', '0120 243 3034', 'www.vaango.in', 'moderate'),
('Noida', 'indian', 'Saaga Ratna', 'Ansal Housing & Construction Ltd Fortune Arcade, Sector- 18, New Okhla Industrial Development Area', '0120 324 4780', 'www.sagarratna.in/outlets.php', 'high'),
('Noida', 'punjabi', 'punjabi by nature', 'P 19,, Sector 18 New Okhla Industrial Development Area', '0120 474 0111', 'www.punjabibynature.in', 'low'),
('Noida', 'punjabi', 'Gulati''s Punjabi Swad', 'G 8/3, Savitri Market, Sector 18, Noida', '0120 4246317', 'http://www.zomato.com/ncr/gulatis-punjabi-swad-sector-18-noida', 'high'),
('Noida', 'american', 'Quesa Lounge', 'D-1/56,Swami Vivekandand Marg,Main Market,next to Dominos, Sector - 50, New Okhla Industrial Development Area', '098 99 688376', 'www.quesalounge.com', 'high'),
('Noida', 'american', 'Subway', 'Sector-18, Market, Sector-10, Sector-10 New Okhla Industrial Development Area, DL', '0120 324 7680', 'www.subway.com', 'moderate'),
('Noida', 'american', 'Bizzy B Nitro Cafe', 'Express Trade Towers - 1, Sector 16A (Film City) New Okhla Industrial Development Area', '0120 422 3377', 'www.bizzyb.in', 'low'),
('Noida', 'punjabi', 'Pind-Da-Dhaba', '3rd Rd, sec27 ,noida', '098 11 203606', 'https://plus.google.com/106968368344122951624/about?gl=in&hl=en', 'moderate');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
