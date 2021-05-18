-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 12:12 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `romaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_photo`
--

CREATE TABLE IF NOT EXISTS `activities_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activities` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `album_photo`
--

CREATE TABLE IF NOT EXISTS `album_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `album_photo`
--

INSERT INTO `album_photo` (`id`, `album`, `image_name`, `caption`, `queue`) VALUES
(1, 1, '-294354802_190908786104_1574312359_n.jpg', 'Deluxe Triple Room Pool View', 0),
(2, 1, '-138515234_191064625672_1574312373_n.jpg', 'Deluxe Triple Room Pool View', 0),
(3, 2, '-482362392_190720778514_1574312432_n.jpg', 'Food', 0),
(4, 2, '-303126071_190900014835_1574312443_n.jpg', 'Food', 0),
(5, 2, '-313346029_190889794877_1574312452_n.jpg', 'Food', 0),
(7, 1, '-153033578681_38169562225_1575003177_n.jpg', 'Deluxe Triple Room Pool View', 0),
(8, 1, '-115008922066_76194218840_1575003189_n.jpg', 'Deluxe Triple Room Pool View', 0),
(9, 3, '-147569128134_43634012772_1575003425_n.jpg', 'Garden', 0),
(10, 3, '-171736814806_19466326100_1575003445_n.jpg', 'Garden', 0),
(11, 3, '-18981754114_172221386792_1575003462_n.jpg', 'Garden', 0),
(12, 3, '-104714228966_86488911940_1575003483_n.jpg', 'Garden', 0),
(13, 4, '-134714329753_56488811153_1575003504_n.jpg', 'Villa', 1),
(14, 4, '-14087418147_177115722759_1575003514_n.jpg', 'Villa', 10),
(15, 4, '-127094843616_64108297290_1575003531_n.jpg', 'Villa', 5),
(16, 4, '-156641628419_34561512487_1575003543_n.jpg', 'Villa', 28),
(17, 4, '-85303547896_105899593010_1575003554_n.jpg', 'Villa', 2),
(18, 4, '-152467047912_38736092994_1575003573_n.jpg', 'Villa', 8),
(21, 6, '-176329279723_14873861183_1575003638_n.jpg', 'Pool', 0),
(22, 6, '-122702625160_68500515746_1575003655_n.jpg', 'Pool', 0),
(23, 3, '-175797848155_15405292751_1576480407_n.jpg', 'Garden', 0),
(24, 3, '-832826148_190370314758_1576480431_n.jpg', 'Garden', 0),
(25, 3, '-8844045159_182359095747_1576480443_n.jpg', 'Garden', 0),
(26, 3, '-111036724587_80166416319_1576480456_n.jpg', 'Garden', 0),
(27, 3, '-20497930161_170705210745_1576480471_n.jpg', 'Garden', 0),
(28, 3, '-117929485662_73273655244_1576480502_n.jpg', 'Garden', 0),
(29, 3, '-88894320666_102308820240_1576480517_n.jpg', 'Garden', 0),
(30, 3, '-161868172963_29334967943_1576480552_n.jpg', 'Garden', 0),
(31, 3, '-127130964589_64072176317_1576480596_n.jpg', 'Garden', 0),
(32, 3, '-172126429663_19076711243_1576480623_n.jpg', 'Garden', 0),
(33, 3, '-155642014221_35561126685_1576480644_n.jpg', 'Garden', 0),
(34, 3, '-87509924176_103693216730_1576480665_n.jpg', 'Garden', 0),
(35, 2, '-110742365804_80460775102_1576480726_n.jpg', 'Food', 0),
(36, 2, '-129358985835_61844155071_1576480746_n.jpg', 'Food', 0),
(37, 2, '-54284839552_136918301354_1576480771_n.jpg', 'Food', 0),
(38, 2, '-30167586275_161035554631_1576480804_n.jpg', 'Food', 0),
(39, 2, '-34551256368_156651884538_1576480840_n.jpg', 'Food', 0),
(40, 2, '-60583391671_130619749235_1576480957_n.jpg', 'Food', 0),
(41, 2, '-125381010583_65822130323_1576480977_n.jpg', 'Food', 0),
(42, 2, '-20047586800_171155554106_1576481014_n.jpg', 'Food', 0),
(43, 2, '-163023437115_28179703791_1576481034_n.jpg', 'Food', 0),
(44, 5, '-132073057629_59130083277_1576482115_n.jpg', 'Bath Room', 0),
(45, 5, '-61504154545_129698986361_1576482132_n.jpg', 'Bath Room', 0),
(46, 5, '-116379088719_74824052187_1576482141_n.jpg', 'Bath Room', 0),
(47, 5, '-72904088335_118299052571_1576482151_n.jpg', 'Bath Room', 0),
(48, 5, '-21272543867_169930597039_1576482168_n.jpg', 'Bath Room', 0),
(49, 5, '-138438155257_52764985649_1576482201_n.jpg', 'Bath Room', 0),
(50, 5, '-79870322433_111332818473_1576482251_n.jpg', 'Bath Room', 0),
(51, 5, '-13029181978_178173958928_1576482265_n.jpg', 'Bath Room', 0),
(52, 5, '-7398677865_183804463041_1576482280_n.jpg', 'Bath Room', 0),
(53, 5, '-151919057265_39284083641_1576482296_n.jpg', 'Bath Room', 0),
(54, 5, '-68515412027_122687728879_1576482312_n.jpg', 'Bath Room', 0),
(56, 5, '-189467558793_1735582113_1576482854_n.jpg', 'Bath Room', 0),
(57, 5, '-156672141300_34530999606_1576482865_n.jpg', 'Bath Room', 0),
(58, 5, '-138042790042_53160350864_1576482963_n.jpg', 'Bath Room', 0),
(59, 5, '-66812290678_124390850228_1576482974_n.jpg', 'Bath Room', 0),
(60, 5, '-183806036186_7397104720_1576482981_n.jpg', 'Bath Room', 0),
(61, 5, '-92692410825_98510730081_1576482990_n.jpg', 'Bath Room', 0),
(62, 6, '-86588439590_104614701316_1576484131_n.jpg', 'Pool', 0),
(63, 6, '-189595732945_1607407961_1576484142_n.jpg', 'Pool', 0),
(64, 6, '-64886062056_126317078850_1576484153_n.jpg', 'Pool', 0),
(65, 6, '-165328471055_25874669851_1576484162_n.jpg', 'Pool', 0),
(66, 6, '-182876048932_8327091974_1576484175_n.jpg', 'Pool', 0),
(67, 6, '-173063416254_18139724652_1576484204_n.jpg', 'Pool', 0),
(68, 6, '-32688036083_158515104823_1576484232_n.jpg', 'Pool', 0),
(69, 6, '-160993204549_30209936357_1576484260_n.jpg', 'Pool', 0),
(70, 6, '-112856837938_78346302968_1576484275_n.jpg', 'Pool', 0),
(71, 6, '-88231201044_102971939862_1576484284_n.jpg', 'Pool', 0),
(72, 6, '-59697105862_131506035044_1576484292_n.jpg', 'Pool', 0),
(73, 6, '-175905581809_15297559097_1576484321_n.jpg', 'Pool', 0),
(74, 6, '-151969567262_39233573644_1576484331_n.jpg', 'Pool', 0),
(75, 6, '-157405160812_33797980094_1576484344_n.jpg', 'Pool', 0),
(76, 4, '-86562976067_104640164839_1576484761_n.jpg', 'Villa', 7),
(77, 4, '-31504805476_159698335430_1576484778_n.jpg', 'Villa', 11),
(78, 4, '-170778346783_20424794123_1576484789_n.jpg', 'Villa', 9),
(79, 4, '-50195159055_141007981851_1576484803_n.jpg', 'Villa', 12),
(80, 4, '-43744445709_147458695197_1576484823_n.jpg', 'Villa', 19),
(81, 4, '-49498786827_141704354079_1576484831_n.jpg', 'Villa', 18),
(82, 4, '-158544280184_32658860722_1576484852_n.jpg', 'Villa', 20),
(83, 3, '-149707312157_41495828749_1576484878_n.jpg', 'Garden', 0),
(84, 3, '-163343678884_27859462022_1576484889_n.jpg', 'Garden', 0),
(85, 3, '-8643495509_182559645397_1576484900_n.jpg', 'Garden', 0),
(86, 3, '-163840300067_27362840839_1576484912_n.jpg', 'Garden', 0),
(87, 4, '-179985752710_11217388196_1576485000_n.jpg', 'Villa', 27),
(88, 4, '-115675010488_75528130418_1576485021_n.jpg', 'Villa', 24),
(89, 4, '-85239208267_105963932639_1576485043_n.jpg', 'Villa', 16),
(90, 4, '-45253421039_145949719867_1576485056_n.jpg', 'Villa', 23),
(91, 4, '-119443036387_71760104519_1576485070_n.jpg', 'Villa', 13),
(92, 4, '-124491853852_66711287054_1576485080_n.jpg', 'Villa', 14),
(93, 6, '-87287303067_103915837839_1576485100_n.jpg', 'Pool', 0),
(94, 6, '-139291576185_51911564721_1576485109_n.jpg', 'Pool', 0),
(95, 6, '-9742768576_181460372330_1576485142_n.jpg', 'Pool', 0),
(96, 4, '-171121678470_20081462436_1576485167_n.jpg', 'Villa', 15),
(97, 4, '-24785706200_166417434706_1576485178_n.jpg', 'Villa', 21),
(98, 4, '-106612658957_84590481949_1576485188_n.jpg', 'Villa', 22),
(99, 4, '-82430790612_108772350294_1576485197_n.jpg', 'Villa', 25),
(100, 4, '-10159439831_181043701075_1576485205_n.jpg', 'Villa', 26),
(101, 5, '-106063656021_85139484885_1576485279_n.jpg', 'Bath Room', 0),
(102, 6, '-68670692934_122532447972_1576485738_n.jpg', 'Pool', 0),
(103, 4, '-157345816381_33857324525_1576494104_n.jpg', 'Villa', 3),
(104, 4, '-104534845033_86668295873_1576494128_n.jpg', 'Villa', 4),
(105, 4, '-108565588987_82637551919_1576494152_n.jpg', 'Villa', 6),
(106, 4, '-10077749599_181125391307_1576494189_n.jpg', 'Villa', 17),
(107, 1, '-147323544306_43879596600_1576571292_n.jpg', 'Deluxe Triple Room Pool View', 0),
(108, 1, '-111485542313_79717598593_1576571302_n.jpg', 'Deluxe Triple Room Pool View', 0),
(109, 1, '-97408994458_93794146448_1576571315_n.jpg', 'Deluxe Triple Room Pool View', 0),
(110, 1, '-44542549974_146660590932_1576571329_n.jpg', 'Deluxe Triple Room Pool View', 0),
(111, 1, '-57257992969_133945147937_1576571344_n.jpg', 'Deluxe Triple Room Pool View', 0),
(112, 1, '-78734773284_112468367622_1576571356_n.jpg', 'Deluxe Triple Room Pool View', 0),
(113, 1, '-42012252287_149190888619_1576571417_n.jpg', 'Deluxe Triple Room Pool View', 0),
(114, 1, '-1163256822_190039884084_1576571429_n.jpg', 'Deluxe Triple Room Pool View', 0),
(115, 1, '-133347142723_57855998183_1576571444_n.jpg', 'Deluxe Triple Room Pool View', 0),
(116, 1, '-125125898722_66077242184_1576571484_n.jpg', 'Deluxe Triple Room Pool View', 0),
(117, 1, '-71726143657_119476997249_1576571515_n.jpg', 'Deluxe Triple Room Pool View', 0),
(118, 1, '-143136352021_48066788885_1576571648_n.jpg', 'Deluxe Triple Room Pool View', 0),
(119, 1, '-141570557081_49632583825_1576571662_n.jpg', 'Deluxe Triple Room Pool View', 0),
(120, 1, '-27487027135_163716113771_1576571674_n.jpg', 'Deluxe Triple Room Pool View', 0),
(121, 1, '-91038891543_100164249363_1576571698_n.jpg', 'Deluxe Triple Room Pool View', 0),
(122, 1, '-169981466601_21221674305_1576571711_n.jpg', 'Deluxe Triple Room Pool View', 0),
(123, 5, '-46116557641_145086583265_1576571832_n.jpg', 'Bath Room', 0),
(124, 5, '-43096728999_148106411907_1576571913_n.jpg', 'Bath Room', 0);

-- --------------------------------------------------------

--
-- Table structure for table `attraction`
--

CREATE TABLE IF NOT EXISTS `attraction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `short_description` longtext NOT NULL,
  `description` longtext NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `attraction`
--

INSERT INTO `attraction` (`id`, `title`, `image_name`, `short_description`, `description`, `queue`) VALUES
(1, 'Turtle Farm', '-235140292_190968000614_1574307529_n.jpg', 'Sea turtle hatchery situated in Habaraduwa is mostly visited by local and foreign nature lovers. It is a nonprofitable organization located as well as a popular tourist attraction in Sri Lanka. Habaraduwa is 5 km from the Galle â€“ Matara Road. In order to conserve turtles and other marine species, the small hatchery was firstly started in 1986. Sri Lankan beaches are reckoned as a favorable breeding spot of the sea turtles.The injured turtles are conserved in another tank in the hatchery. A small climb of sand is nearby to the tanks where clans of eggs are conserved. The sea turtles are one of the rare species found in the world. Their heritage could be traced to more than 100 million years. They are supposed to have lived during the Dinosaurs age. But at present about 8 varieties of turtles are said to be existing. But due to the destroying of these turtles, there is a threat of these species being eradicated from our planet.', '<p>Sea turtle hatchery situated in Habaraduwa is mostly visited by local and foreign nature lovers. It is a nonprofitable organization located as well as a popular tourist attraction in Sri Lanka. Habaraduwa is 5 km from the Galle &ndash; Matara Road. In order to conserve turtles and other marine species, the small hatchery was firstly started in 1986. Sri Lankan beaches are reckoned as a favorable breeding spot of the sea turtles.The injured turtles are conserved in another tank in the hatchery. A small climb of sand is nearby to the tanks where clans of eggs are conserved.<br />The sea turtles are one of the rare species found in the world. Their heritage could be traced to more than 100 million years. They are supposed to have lived during the Dinosaurs age. But at present about 8 varieties of turtles are said to be existing. But due to the destroying of these turtles, there is a threat of these species being eradicated from our planet.</p>', 0),
(2, 'Koggala Lake', '-545849321_190657291585_1574307556_n.jpg', 'Koggala Lake is a beautiful lake located a few kilometers away from Galle which is a paradise for the natural biodiversity and ecosystem. The lake is surrounded by lush green mangrove swamps. You can explore the whole area and all of the 8 islands in Koggala Lake. Koggala Lake is made by collection of seven islands in the lagoon that can be reached by boat. Most visited places are Kathaluwa Buddhist Temple, Cinnamon Garden and Martin Wickramasinghe Meuseum.', '<p>Koggala Lake is a beautiful lake located a few kilometers away from Galle which is a paradise for the natural biodiversity and ecosystem. The lake is surrounded by lush green mangrove swamps. You can explore the whole area and all of the 8 islands in Koggala Lake. Koggala Lake is made by collection of seven islands in the lagoon that can be reached by boat. Most visited places are Kathaluwa Buddhist Temple, Cinnamon Garden and Martin Wickramasinghe Meuseum.</p>', 0),
(3, 'Stilt Fishing', '-306085206_190897055700_1574307575_n.jpg', 'Stilt fishing is a tradition fishing method used local fishermen in areas like Ahangama, Kathaluwa and Koggala.In this method of fishing, a stilt with a crossbar is embedded to the shallow depths of the sea. The fishermen sit on the crossbar and use their stick to catch smaller fish that gather in the shallow water.', '<p>Stilt fishing is a tradition fishing method used local fishermen in areas like Ahangama, Kathaluwa and Koggala.In this method of fishing, a stilt with a crossbar is embedded to the shallow depths of the sea. The fishermen sit on the crossbar and use their stick to catch smaller fish that gather in the shallow water.</p>', 0),
(4, 'Unawatuna Beach', '-389869670_190813271236_1574307593_n.jpg', 'Unawatuna is a little coastal town which is a major tourist attraction  and known for its beach and corals.Unawatuna needs to be recognised and the remaining forest cover should be protected to preserve this beautiful creature. This will in turn provide unique opportunities for eco-tourism. ', '<p>Unawatuna is a little coastal town which is a major tourist attraction&nbsp; and known for its beach and corals.Unawatuna needs to be recognised and the remaining forest cover should be protected to preserve this beautiful creature. This will in turn provide unique opportunities for eco-tourism.</p>', 0),
(5, 'Galle Fort', '-469526426_190733614480_1574307610_n.jpg', 'The Galle Fort is main tourist attraction in Galle, which is the perfect scenic sun set view in the evening. It is demonstration the wonder of ancient Sri Lanka.Galle Fort also called as Dutch Fort is ancient, archaeological and architectural heritage monument south coast of Sri Lanka which was built first in 1588 by the Portuguese, then extensively fortified by the Dutch during the 17th century from 1649 onwards. It has been established UNESCO World Heritage Site which illustrates the interaction of European architecture and South Asian traditions from the 16th to the 19th centuries.', '<p>The Galle Fort is main tourist attraction in Galle, which is the perfect scenic sun set view in the evening. It is demonstration the wonder of ancient Sri Lanka.Galle Fort also called as Dutch Fort is ancient, archaeological and architectural heritage monument south coast of Sri Lanka which was built first in 1588 by the Portuguese, then extensively fortified by the Dutch during the 17th century from 1649 onwards. It has been established UNESCO World Heritage Site which illustrates the interaction of European architecture and South Asian traditions from the 16th to the 19th centuries.</p>', 0),
(6, 'Surfing', '-603478370_190599662536_1574307627_n.jpg', 'Surfing is a one of thrilling water sports in south coast Mirissa ,is suitable for beginners and intermediate surfers. Months of November to March is the best season for surf.', '<p>Surfing is a one of thrilling water sports in south coast Mirissa ,is suitable for beginners and intermediate surfers. Months of November to March is the best season for surf.</p>', 0),
(7, 'Whale Watching', '-22012775_191181128131_1574746882_n.jpg', 'Mirissa is world famouse destination in whale watching if you have chance to watch whales join in beautiful boat safari. If you lucky can see the different types whales as Killer whales, Sperm whales and Bride whales, Spinner dolphins, Bottled nosed dolphins and Riso dolphins while to see other marine species in some days. ', '<p>Mirissa is world famouse destination in whale watching if you have chance to watch whales join in beautiful boat safari. If you lucky can see the different types whales as Killer whales, Sperm whales and Bride whales, Spinner dolphins, Bottled nosed dolphins and Riso dolphins while to see other marine species in some days.</p>', 0),
(8, 'Mirissa', '-292789420_190910351486_1574747604_n.jpg', 'Mirissa is an attractive little fishing village with a nice beach and two surfing points. Mirissa Beach is a beautiful horseshoe shaped, sandy beach surrounded by palm trees. Whale Watching and Surfing is the main things to do in Mirissa which is best ideal location for beginner and intermediate surfers. Most visited places in Mirissa as Parrot Rock, Coconut Hill and Secret Beach. Mirissa Coconut Hill is a one of the most Instagram photographer spots in Mirissa which is covered with lots of palm trees overlooking the ocean.You can capture the amazing sunsets.', '<p>Mirissa is an attractive little fishing village with a nice beach and two surfing points. Mirissa Beach is a beautiful horseshoe shaped, sandy beach surrounded by palm trees. Whale Watching and Surfing is the main things to do in Mirissa which is best ideal location for beginner and intermediate surfers. Most visited places in Mirissa as Parrot Rock, Coconut Hill and Secret Beach. Mirissa Coconut Hill is a one of the most Instagram photographer spots in Mirissa which is covered with lots of palm trees overlooking the ocean.You can capture the amazing sunsets.</p>', 0),
(9, 'Snake Farm', '-239165484_190963975422_1574747825_n.jpg', 'Sanke Farm are primarily tourist attractions place is located in Matara  Thelijjawala area which is home for various Sri Lankan snakes such as kraits, pythons, cobras, vipers, blind snakes, vine snakes, keel-backs, racers and cat snakes etc. The snake farm is also a house for Ayurveda treatment for snake poisoning. ', '<p>Sanke Farm are primarily tourist attractions place is located in Matara&nbsp; Thelijjawala area which is home for various Sri Lankan snakes such as kraits, pythons, cobras, vipers, blind snakes, vine snakes, keel-backs, racers and cat snakes etc. The snake farm is also a house for Ayurveda treatment for snake poisoning.</p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `attraction_photo`
--

CREATE TABLE IF NOT EXISTS `attraction_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attraction` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `attraction_photo`
--

INSERT INTO `attraction_photo` (`id`, `attraction`, `image_name`, `caption`, `queue`) VALUES
(1, 1, '-545450286_190657690620_1574310108_n.jpg', 'Turtle Farm Habaraduwa', 0),
(2, 7, '-565787485_190637353421_1574747272_n.jpg', 'Whale Watching in Mirissa', 0),
(3, 7, '-311768129_190891372777_1574747296_n.jpg', 'Whale Watching in Mirissa', 0),
(4, 8, '-138640645_191064500261_1574747714_n.jpg', 'Mirissa Beach', 0),
(5, 9, '-329873813_190873267093_1574747904_n.jpg', 'Snake Farm Matara', 0),
(6, 6, '-170200084154_21003056752_1574922167_n.jpg', 'Surfing in Mirissa', 0),
(7, 2, '-11462794851_179740346055_1574922404_n.jpg', 'Koggala Lake', 0),
(8, 3, '-157809813866_33393327040_1574922550_n.jpg', 'Stilt Fishing', 0),
(9, 4, '-179493115411_11710025495_1574923092_n.jpg', 'Unawatuna Beach', 0);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `image_name`) VALUES
(1, 'About', '-211664440_190991476466_1574306079_n.jpg'),
(2, 'Accommodation', '-216446974_190986693932_1574306254_n.jpg'),
(3, 'Contact', '-416323505_190786817401_1574306340_n.jpg'),
(4, 'Services', '-429101495_190774039411_1574309438_n.jpg'),
(5, 'Excursion', '-413027296_190790113610_1574309452_n.jpg'),
(6, 'Gallery', '-133653868_191069487038_1574309658_n.jpg'),
(7, 'View Accomadtion', '-165685569840_25517571066_1574842437_n.jpg'),
(8, 'View Excursion', '-114013316063_77189824843_1574842687_n.jpg'),
(9, 'Reviews', '-107981562902_83221578004_1574927185_n.jpg'),
(10, 'Booking', '-179655225385_11547915521_1575009245_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `comment` longtext NOT NULL,
  `is_active` int(11) NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `title`, `country`, `image_name`, `comment`, `is_active`, `queue`) VALUES
(1, 'Saachi', 'Excellent service and hospitality', 'United Arab Emirates', '-458515289_190744625617_1574331936_n.jpg', '<p>Beautiful property with lush green trees all around. Excellent service and hospitality by the Villa Manager Suranga and his team. They were always quick to respond for any arrangements. Loved the breakfast and definitely recommend this private escape for a large group of friends or family!</p>', 1, 0),
(2, 'Izabela', 'helpful  Staff', 'Poland', '-404181479_190798959427_1574333479_n.jpg', '<p>&ldquo;This place is just amazing. We felt soiled there and very safe. Beautiful garden with cashew trees and mango trees, birds and even a lizard joining the party one day. The swimming pool was an excellent option for morning and evening swimming and we could enjoy the marvelous views just sitting there. The rooms and the bathroom were very clean, comfortable and sunny. The staff very helpful and smiling :) Last but not least - THE FOOD! You have to try their traditional dinners. Poetry :) &rdquo;</p>', 1, 0),
(3, 'Yevgine', 'A very relaxing experience ', 'United Kingdom', '-545152541_190657988365_1574333868_n.jpg', '<p style="text-align: center;">The property is set up and maintained beautifully, away from the main hustle and bustle of the main street. For me, a born and bred city girl, the best thing was how close it felt to the nature - I would just sit by the pool in the afternoon, and listen to the birds singing in the trees. The breakfast was to die for and theres a lot of it! Dont know whats the last time Ive had so much fruit... </p>', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `status`, `description`) VALUES
(1, 'danger', 'You have entered invalid password!...'),
(2, 'danger', 'Your current password is missing or incorrect!...'),
(3, 'danger', 'Password was not changed successfully!...'),
(4, 'success', 'Password has been successfully changed!...'),
(5, 'success', 'You have successfully login!...'),
(6, 'danger', 'Please enter your username and password!....'),
(7, 'danger', 'Invalid username or password!...'),
(9, 'success', 'Your changes saved successfully!...'),
(10, 'success', 'Your data was saved successfully!...'),
(11, 'danger', 'please enter your email address'),
(12, 'success', 'password reset email was sent successfully!...'),
(13, 'danger', 'Invalid email address!...'),
(14, 'danger', 'There was an error '),
(15, 'success', 'password was reset successfully '),
(16, 'danger', 'please check your reset code'),
(17, 'danger', 'new password and confirm password does not match'),
(18, 'danger', 'Old password is incorrect..!');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` double NOT NULL,
  `discount` int(11) NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `offer_photo`
--

CREATE TABLE IF NOT EXISTS `offer_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `offer` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `image_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `image_name`) VALUES
(1, 'About', '<p>Romaya Villas is wonderful place for stay and make for you unbelievable holiday. You can spend your holiday and relax on reasonable price range accommodation with pool, free Wi-Fi and delicious food in the villas you can enjoy your holiday at best. If you have special chance to get for terrace view accommodations.</p>\r\n<p>Our friendly staff get ready to provide services as soon as possible on 24 hours. We will give our best services for you as car rentals, bike rentals and arrange tours in around Sri Lanka.</p>', '-400123293_190803017613_1574317516_n.jpg'),
(2, 'Welcome Note', '<p style="text-align: justify;"><strong><span style="font-weight: normal;">Romaya Villas</span> </strong>is wonderful place for stay and make for you unbelievable holiday. You can spend your holiday and relax on reasonable price range accommodation with pool, free Wi-Fi and delicious food in the villas you can enjoy your holiday at best. If you have special chance to get for terrace view accommodations.</p>\r\n<p style="text-align: justify;">Our friendly staff get ready to provide services as soon as possible on 24 hours. We will give our best services for you as car rentals, bike rentals and arrange tours in around Sri Lanka.</p>', '-26114751_191177026155_1574330510_n.jpg'),
(3, 'Turtle Watching', '<p class="space-bottom">Watching sea turtles is a best things to do in Habaraduwa, Sri Lanka.</p>', '-124448398632_66754742274_1574916713_n.jpg'),
(4, 'Tour Arrange', '<p class="space-bottom">We can arrange customized tours explore the best of Sri Lanka.</p>', '-133921954623_57281186283_1574917793_n.jpg'),
(5, 'Airport Transfer', '<p>Our airport transfer service gives fast and reliable services for you.</p>', '-60402680997_130800459909_1574917997_n.jpg'),
(6, 'Bike Rent', '<p>Find the best deals on bicycle hire in Habaraduwa</p>', '-145994938362_45208202544_1574918152_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photo_album`
--

CREATE TABLE IF NOT EXISTS `photo_album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `photo_album`
--

INSERT INTO `photo_album` (`id`, `title`, `image_name`, `description`, `queue`) VALUES
(1, 'Rooms', '-306102853_190897038053_1574312244_n.jpg', '<p>Room</p>', 2),
(2, 'Food', '-264905411_190938235495_1574312407_n.jpg', '<p>Food</p>\r\n<p>&nbsp;</p>', 6),
(3, 'Garden', '-79834872897_111368268009_1575003346_n.jpg', '<p>ss</p>', 1),
(4, 'Villa', '-106467463872_84735677034_1575003369_n.jpg', '<p>villa</p>\r\n<p>&nbsp;</p>', 3),
(5, 'Bath Room', '-163028990573_28174150333_1575003385_n.jpg', '<p>Bath Room</p>', 4),
(6, 'Pool', '-95145622850_96057518056_1575003403_n.jpg', '<p>aa</p>', 5);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `short_description` longtext NOT NULL,
  `description` longtext NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE IF NOT EXISTS `product_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `short_description` longtext NOT NULL,
  `description` longtext NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `no_of_rooms` int(11) NOT NULL,
  `price` double NOT NULL,
  `facility` longtext NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `title`, `image_name`, `short_description`, `description`, `no_of_rooms`, `price`, `facility`, `queue`) VALUES
(1, 'Deluxe Triple Room ', '-488062085_190715078821_1574306708_n.jpg', 'The main villa includes one bedroom, it is a private villa which is most suitable for only three persons like honeymoon couple or small family. The front of the villa has a pool if you have chance to enjoy your family or partner.', '<p>The main villa includes one bedroom, it is a private villa which is most suitable for only three persons like honeymoon couple or small family. The front of the villa has a pool if you have chance to enjoy your family or partner.</p>\r\n<p>The room include accommodation are &nbsp;&nbsp;three single beds or double bed and one single bed, wardrobe and a private bathroom. The accommodation provides a shared kitchen, room service and currency exchange for guests. All guest rooms come with air conditioning, a flat-screen TV with satellite channels, a kettle, a shower, free toiletries and a desk.</p>', 2, 23, '', 0),
(2, 'Deluxe Triple Room Balcony', '-627312739_190575828167_1574306753_n.jpg', 'The main villa includes four bedroom, it is most suitable for only eight persons like large family or Group. If you can book all rooms or only one room as you wish in the villa. The front of the villa has a beautiful garden. In the morning you can relax w', '<p>The main villa includes four bedroom, it is most suitable for only eight persons like large family or Group. If you can book all rooms or only one room as you wish in the villa. The front of the villa has a beautiful garden. In the morning you can relax with nature objects like bird watching, see to bloom flowers and sun rise.</p>\r\n<p>The room include accommodation are &nbsp;&nbsp;large double bed, wardrobe and a private bathroom. The accommodation provides a shared kitchen, room service and currency exchange for guests. All guest rooms come with air conditioning, a flat-screen TV with satellite channels, a kettle, a shower, free toiletries and a desk.</p>', 3, 0, '', 0),
(3, ' Deluxe Villa Room 2', '-396597523_190806543383_1574306794_n.jpg', 'The main villa includes four bedroom, it is most suitable for only eight persons like large family or Group. If you can book all rooms or only one room as you wish in the villa. The front of the villa has a beautiful garden. In the morning you can relax w', '<p>The main villa includes four bedroom, it is most suitable for only eight persons like large family or Group. If you can book all rooms or only one room as you wish in the villa. The front of the villa has a beautiful garden. In the morning you can relax with nature objects like bird watching, see to bloom flowers and sun rise.</p>\r\n<p>The room include accommodation are &nbsp;&nbsp;large double bed, wardrobe and a private bathroom. The accommodation provides a shared kitchen, room service and currency exchange for guests. All guest rooms come with air conditioning, a flat-screen TV with satellite channels, a kettle, a shower, free toiletries and a desk.</p>', 2, 2, '', 0),
(4, 'Dulex Villa Room 3', '-80274640298_110928500608_1575002044_n.jpg', 'The main villa includes four bedroom, it is most suitable for only eight persons like large family or Group. If you can book all rooms or only one room as you wish in the villa. The front of the villa has a beautiful garden. In the morning you can relax w', '<p>The main villa includes four bedroom, it is most suitable for only eight persons like large family or Group. If you can book all rooms or only one room as you wish in the villa. The front of the villa has a beautiful garden. In the morning you can relax with nature objects like bird watching, see to bloom flowers and sun rise.</p>\r\n<p>The room include accommodation are &nbsp;&nbsp;large double bed, wardrobe and a private bathroom. The accommodation provides a shared kitchen, room service and currency exchange for guests. All guest rooms come with air conditioning, a flat-screen TV with satellite channels, a kettle, a shower, free toiletries and a desk.</p>', 2, 2, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_photo`
--

CREATE TABLE IF NOT EXISTS `room_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `room_photo`
--

INSERT INTO `room_photo` (`id`, `room`, `image_name`, `caption`, `queue`) VALUES
(1, 1, '-16431333_191186709573_1574311845_n.jpg', 'Deluxe Triple Room', 2),
(2, 1, '-128692265_191074448641_1574311852_n.jpg', 'Double Room', 6),
(3, 1, '-39726190760_151476950146_1576492052_n.jpg', 'Deluxe Triple Room', 3),
(4, 1, '-6301407021_184901733885_1576492690_n.jpg', 'Deluxe Triple Room', 5),
(5, 1, '-68007196067_123195944839_1576492703_n.jpg', 'Deluxe Triple Room', 7),
(6, 1, '-183276333809_7926807097_1576492716_n.jpg', 'Deluxe Triple Room', 8),
(7, 1, '-12989449513_178213691393_1576492769_n.jpg', 'Deluxe Triple Room', 4),
(8, 1, '-138196161062_53006979844_1576492794_n.jpg', 'Deluxe Triple Room', 1),
(9, 2, '-43387014285_147816126621_1576492855_n.jpg', 'name', 3),
(10, 2, '-29060555510_162142585396_1576492873_n.jpg', 'Deluxe Triple Room', 5),
(11, 2, '-118344696000_72858444906_1576492916_n.jpg', 'Deluxe Triple Room Balcony', 4),
(12, 2, '-46788364035_144414776871_1576492935_n.jpg', 'Deluxe Triple Room Balcony', 6),
(13, 2, '-183789032933_7414107973_1576492949_n.jpg', 'Deluxe Triple Room Balcony', 13),
(14, 2, '-49626586091_141576554815_1576492962_n.jpg', 'Deluxe Triple Room Balcony', 2),
(15, 2, '-156246258349_34956882557_1576492993_n.jpg', 'Deluxe Triple Room Balcony', 9),
(16, 2, '-48164113446_143039027460_1576493154_n.jpg', 'Deluxe Triple Room Balcony', 1),
(17, 2, '-108327591941_82875548965_1576493176_n.jpg', 'Deluxe Triple Room Balcony', 8),
(18, 2, '-98099988247_93103152659_1576493326_n.jpg', 'Deluxe Triple Room Balcony', 11),
(19, 2, '-187512420172_3690720734_1576493343_n.jpg', 'Deluxe Triple Room Balcony', 12),
(20, 2, '-26062628813_165140512093_1576493422_n.jpg', 'Deluxe Triple Room Balcony', 10),
(21, 2, '-45739050429_145464090477_1576493498_n.jpg', 'Deluxe Triple Room Balcony', 7),
(22, 1, '-82918922594_108284218312_1576493618_n.jpg', 'Deluxe Triple Room', 9),
(23, 1, '-47974031715_143229109191_1576493635_n.jpg', 'Deluxe Triple Room', 12),
(24, 1, '-8833605859_182369535047_1576493652_n.jpg', 'Deluxe Triple Room', 11),
(25, 1, '-87573809023_103629331883_1576493667_n.jpg', 'Deluxe Triple Room', 10),
(26, 1, '-17346140584_173857000322_1576493682_n.jpg', 'Deluxe Triple Room', 13);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `image_name`, `short_description`, `description`, `queue`) VALUES
(1, 'Tour Arrange', '-632153292_190570987614_1574308367_n.jpg', 'Sri Lanka tours feature for ancient cities, heritages, sandy beaches, endemic flora and fauna, and etc. We can arrange customized tours explore the best of Sri Lanka.', '<p class="space-bottom">Sri Lanka tours feature for ancient cities, heritages, sandy beaches, endemic flora and fauna, and etc. We can arrange customized tours explore the best of Sri Lanka.</p>', 0),
(2, 'Airport Transfer', '-493597394_190709543512_1574308526_n.jpg', 'Romaya Airport Transfer service is the best one-stop transportation service in Habaraduwa, they provide you with the with maximum comfort.', '<p>Romaya Airport Transfer service is the best one-stop transportation service in Habaraduwa, they provide you with the with maximum comfort.</p>', 0),
(3, 'Rent a Bike', '-415944974_190787195932_1574308654_n.jpg', 'Cycling is the best things to do in south cost sea line, is the best scenic view of tourists.Romaya Villas give a for you to get bike rental service.', '<p>Cycling is the best things to do in south cost sea line, is the best scenic view of tourists.Romaya Villas give a for you to get bike rental service.</p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `service_photo`
--

CREATE TABLE IF NOT EXISTS `service_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `url` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `image_name`, `description`, `url`, `queue`) VALUES
(1, 'Romaya Villas Habaraduwa', '-28773881_191174367025_1574329851_n.jpg', '<p>Romaya Villas Habaraduwa</p>', '0', 3),
(2, 'Romaya Villas Habaraduwa', '-636061513_190567079393_1574329868_n.jpg', '<p>Romaya Villas Habaraduwa</p>', '0', 4),
(3, 'Romaya Villas Habaraduwa', '-229714780_190973426126_1574329888_n.jpg', '<p>Romaya Villas Habaraduwa</p>', '0', 5),
(4, 'Romaya Villa Habaraduwa', '-166577080118_24626060788_1575003703_n.jpg', '<p>Romaya Villa Habaraduwa</p>', '0', 2),
(5, 'Romaya Villa Habaraduwa', '-144425727085_46777413821_1575003774_n.jpg', '<p>Romaya Villa Habaraduwa</p>', '0', 6),
(6, 'Romaya Villa Habaraduwa', '-31075512125_160127628781_1576486200_n.jpg', '<p>Romaya Villa Habaraduwa</p>', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tour_date`
--

CREATE TABLE IF NOT EXISTS `tour_date` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tour` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tour_date_photo`
--

CREATE TABLE IF NOT EXISTS `tour_date_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tour_date` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tour_package`
--

CREATE TABLE IF NOT EXISTS `tour_package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tour_type` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `dates` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `map` longtext NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tour_photo_normal`
--

CREATE TABLE IF NOT EXISTS `tour_photo_normal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tourpackage` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tour_type`
--

CREATE TABLE IF NOT EXISTS `tour_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `authToken` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastLogin` datetime NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resetcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `createdAt`, `isActive`, `authToken`, `lastLogin`, `username`, `password`, `resetcode`) VALUES
(1, 'Sublime', 'dhanusha@sublime.lk', '2017-07-05 11:03:45', 1, '31decb00ad2746dbdd59ff32e3982c2f', '2021-05-05 10:42:37', 'mahesh', '348c880664f2e1458b899ced2a3518e6', '66565');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
