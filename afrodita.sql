-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2016 at 08:41 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `afrodita`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
`id` int(11) NOT NULL,
  `text` longtext NOT NULL,
  `checked` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `text`, `checked`) VALUES
(1, 'Odio ipsum sadipscing mea cu. Minimum gloriatur liberavisse vel et. An usu veri officiis moderatius, qui nemore antiopam expetendis ex. Cu dico aperiam has. No cum prima dissentias, est te quando doctus, esse nibh sadipscing has id. Omittam legendos pro ut, timeam aliquip erroribus sit ex, dicat consetetur mel ad. Vel et nihil similique, cu vix tempor disputationi. Graece regione mea no, id vim wisi consul audiam. Vel quodsi dissentias in, vel eu sale scripta, ne duo alii paulo incorrupte. Eum no viderer pertinax. Ad sea harum viris dictas, nostrud expetendis mel ne. Ne qui paulo dolore, usu elitr legere id. Alia intellegam vel no.', 0),
(3, 'Lorem ipsum dolor sit amet, oportere prodesset ut eam, facilisi conclusionemque ad vix. Ne numquam fuisset eos, illum pertinacia incorrupte eam id, no ancillae volutpat voluptatibus est. Nostrud torquatos ei eos, ne mei meliore senserit. Accusata mediocritatem cu duo, et falli affert pertinax sit. Docendi salutandi scriptorem id pro, pri ne vocibus definitionem.\r\n\r\n Id duo putant verear constituam, sint dolorum iracundia cum an. Clita melius commodo ea vis, vim electram prodesset adipiscing ei. Falli probatus constituto an duo. Ei quo stet agam.\r\n\r\n Vel ei quis graeci.fdfdf', 0),
(19, 'His omnis soleat at, quaeque vituperatoribus ad cum. Harum facilisis adipiscing id mel, mel elit euismod accusamus an. Nam latine docendi cu, quo viris dissentiet concludaturque ne. Fierent euripidis usu ne, dicit vocibus delectus ex vim, atqui partem consequat duo ut.\r\n\r\nNec et habeo utroque, iriure aperiam definiebas no sed. Pri ad etiam virtute vivendo, vim ea dictas discere. Cum ocurreret scripserit an. Liber percipit mei eu, est ei porro augue consul, et est mazim eruditi. At vis alterum mandamus, eros malis legere in qui.\r\n\r\nEssent albucius ei eam, aeterno moderatius mea at. Per deleniti recteque iudicabit in, nam cetero meliore voluptua in, eum id salutandi facilisis. Ut clita quidam persequeris ius. Ex sed aeque libris, purto populo vituperatoribus id nec, id inermis partiendo pri.\r\n\r\nDelicata dissentias his no. Pri ne etiam vocibus disputationi. Ut quo fugit iudico conceptam, qui eu amet impetus propriae, enim senserit cu quo. Elit timeam senserit no quo, est ad repudiare efficiendi, debet senserit consetetur ei mea. Ne audire mediocrem has. Mea unum autem intellegam ne.\r\n\r\nEu duo quot gubergren scripserit, vel ex enim elaboraret, sonet ponderum constituam ad vis. Probo aperiam delectus et ius. Populo vidisse aperiam nam te, eius aliquando vulputate sit eu. Expetenda consulatu ad qui. Duo persecuti dissentias constituam id, ea eum vide noluisse scripserit. Unum iudicabit contentiones et quo, ea affert volutpat mei.\r\n\r\nTe has sale gloriatur, eros ludus rationibus pri ei. Duo propriae eleifend ut. Ea quo munere eligendi, eligendi accusamus laboramus sed ne. Qui ne adhuc ullamcorper, duo ea partem imperdiet, vitae forensibus cu mei. His te nobis dicant.\r\n\r\nVel id corrumpit intellegam constituam, eam et modo aliquando. Tation moderatius vis ne, mucius invenire his ad. Qui liber populo sensibus ei, eum error everti persequeris in, et mutat fabulas atomorum per. Nominavi officiis eos ut. Sea id veri clita eirmod.\r\n\r\nEa eos habeo petentium quaerendum, ei ius equidem labores, eum stet inani oporteat cu. Usu ad soluta appetere oporteat. Mutat error petentium ius ut, vis te alia omnium detracto. Iriure invidunt maluisset ea sit, ius error soleat definitiones cu. Has iudico epicuri ea, usu quidam deterruisset in, mandamus persecuti consectetuer vix ne. Pro dico tation ornatus id.\r\n\r\nEi vim habeo nobis expetendis, vitae diceret eu vim, ludus eirmod per an. Mel utamur officiis adolescens et, has vero patrioque id. Saepe vocibus mei id, vel an quot pericula. Nonumy indoctum sadipscing nec ea, quo illum nonumes adversarium id, sit te platonem expetendis.\r\n\r\nAudiam mediocrem repudiare ne eos, te tation discere suavitate ius, moderatius definitionem sed an. Duo an labore iuvaret, et eam enim assueverit, mea ex soleat tritani. Qui an essent animal, vix audire vivendo dolores te. Has cu nusquam insolens adversarium, tota delenit efficiantur ne mea. Eu pri insolens electram. Pri ne illud ignota consulatu, sit probo essent feugiat eu.\r\n      ', 1),
(25, 'fsafasfsafasd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `last` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `last`, `phone`, `email`, `message`) VALUES
(1, 'fds', 'fsf', '1234561234', 'asf@fsdas.com', 'asfdaf'),
(11, 'Dfsa', 'sdfaf', '5464564564', 'asf@fsdas.com', 'fdsf'),
(12, 'sdfaf', 'afsf', '5465464654', 'asf@fsdas.com', 'fsdfasdfsdafa sdfsfsdfasdfsdafasdfsfsdfasdf sdafasdfsf sdfasdfsdafasdfsfsdfasdf sdafasdfsfs dfasdfsdafasdfsfsdfasd fsdafasdfsfsdfa sdfsdafasdfs'),
(15, 'Kostas', 'Konstantinou', '6545645646', 'asf@fsdas.com', 'kdfjkdfjdkljf'),
(16, 'fdaf', 'fsaf', '4545465654', 'asf@fsdas.com', 'dfs');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `word` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `word`) VALUES
(1, 'restaurant1.jpg', 'see'),
(2, 'restaurant2.jpg', 'touch'),
(3, 'restaurant3.jpg', 'hear'),
(4, 'restaurant4.jpg', 'live'),
(5, 'restaurant5.jpg', 'sense'),
(6, 'restaurant6.jpg', 'experience'),
(7, 'restaurant7.jpg', 'taste'),
(8, 'restaurant8.jpg', 'smell'),
(14, 'restaurant9.jpg', 'feel');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `body` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `price` decimal(20,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `body`, `image`, `categoryId`, `price`) VALUES
(1, 'Cesare', 'Cos lettuce, homemade croutons, Grana Padano D.O.P., which tastes best with our homemade Cesar dressing.', 'm-cesare.jpg', 1, '6.80'),
(2, 'Nicoise', 'Mix of leafy salads, tuna, black olives, red onions, blanched green beans, potatoes and a boiled egg, which tastes best with our homemade Nicoise dressing.', 'm-nicoise.jpg', 1, '6.70'),
(6, 'Mista', 'Mix of leafy salads, cherry tomatoes, carrots, radishes, zucchini, red onions, mushrooms, spring onions, cucumber, bell pepper and Grana Padano D.O.P.', 'm-mista.jpg', 1, '7.50'),
(7, 'Rucola con grana padano', 'Rocket and Grana Padano D.O.P.', 'm-rucola.jpg', 1, '7.40'),
(8, 'Caprese', 'Cherry tomatoes with buffalo mozzarella, basil and rocket.', 'm-caprese.jpg', 1, '7.10'),
(9, 'Bruschetta', 'Crisply roasted ciabatta with tomatoes, marinated in garlic and in extra virgin olive oil.', 'm-bruschetta.jpg', 1, '8.30'),
(10, 'Piatto antipasti grande', 'Air dried Italian ham, Grana Padano D.O.P., homemade grilled vegetables, fresh mushrooms, green olives, Salami Napoli, homemade pesto basilico and buffalo mozzarella.', 'm-piatto-antipasti.jpg', 1, '9.10'),
(11, 'Tomatoe soup', 'Soup made from sun-ripened tomatoes, refined with aromatic basil.', 'm-tomatosoup.jpg', 1, '8.50'),
(12, 'Carpaccio', 'Thinly sliced beef fillet with fresh mushrooms, homemade Cipriani sauce and rocket.', 'm-carpaccio.jpg', 3, '8.10'),
(13, 'Vitello Tonnato', 'Pink cooked, tender veal with our tuna-caper cream.', 'm-vitello.jpg', 3, '8.20'),
(14, 'Reef and Beef', 'Tender beef fillet and scampi on a mix of leafy salads and grilled vegetables, topped with Grana Padano D.O.P. and our homemade rocket-mustard dressing.', 'm-reef.jpg', 3, '9.10'),
(16, 'Nuvoletta dolce', 'Fresh yoghurt, fresh lime and sweet raspberries, covered with fine meringue.', 'm-nuvoletta.jpg', 5, '3.20'),
(17, 'Blueberry Cheesecake', 'Homemade cream cheese with crunchy oatcakes, topped with fruity blueberries.', 'm-blue.jpg', 5, '4.20'),
(18, 'Pannacotta', 'Homemade, with fruity strawberry sauce.', 'm-panacota.jpg', 5, '5.80'),
(19, 'Crema di fragola', 'Homemade mascarpone with fresh strawberries.', 'm-crema.jpg', 5, '3.50'),
(20, 'Tiramisu della casa', 'The classic with seven hand-made layers: mascarpone, cream, sponge fingers, fine liqueur and espresso.', 'm-tiramisu.jpg', 5, '4.50'),
(21, 'Death by chocolate', 'Homemade chocolate cake.', 'm-death.jpg', 5, '6.10'),
(22, 'Cheesecake', 'Creamy homemade cheesecake.', 'm-cheese.jpg', 5, '4.10'),
(23, 'Pomodoro', 'Homemade tomato sauce.', 'm-pomodoro.jpg', 2, '7.20'),
(24, 'Pesto Basilico', 'Homemade basil pesto with roasted pine nuts and Grana Padano D.O.P.', 'm-basilico.jpg', 2, '7.50'),
(25, 'Carbonara', 'Bacon and onions in a creamy sauce with egg and Grana Padano D.O.P., refined with fresh parsley.', 'm-carbonara.jpg', 2, '9.30'),
(26, 'All'' Arrabbiata', 'Our zesty composition with tomato sauce, chili pepper and garlic.', 'm-arrabbiata.jpg', 2, '6.90'),
(27, 'Ravioli con carne', 'Homemade ravioli with bolognese filling in light tomato sauce.', 'm-ravioli.jpg', 2, '7.50'),
(28, 'Bolognese', 'Italian beef and pork ragout, finely sliced onions, celery, carrots and homemade tomato sauce.', 'm-bolognese.jpeg', 2, '8.20'),
(29, 'Aglio e olio', 'Fresh garlic in olive oil with chili and parsley.', 'm-aglio.jpg', 2, '7.90'),
(30, 'Ravioli con rucola', 'Homemade ravioli with ricotta filling, topped with rocket lettuce/arugula, cherry tomatoes and pine nuts.', 'm-ravioli2.jpg', 2, '8.30'),
(31, 'Scampi', 'Fried scampi, spring onions and fresh tomatoes in homemade tomato sauce.', 'm-scampi.jpg', 2, '9.20'),
(33, 'Margherita', 'Homemade tomato sauce and mozzarella.', 'm-margarita.jpg', 4, '7.00'),
(34, 'Prosciutto e funghi', 'Italian ham and fresh mushrooms on homemade tomato sauce and mozzarella.', 'm-prosciutto.jpg', 4, '7.10'),
(35, 'Scampi e rucola', 'Scampi, rocket and black olives on homemade tomato sauce and mozzarella.', 'm-scampi-e-rucola.jpg', 4, '7.50'),
(36, 'Verdure', 'Homemade grilled vegetables and fresh mushrooms on tomato sauce and mozzarella.', 'm-verdure.jpg', 4, '7.80'),
(37, 'Diavolo', 'Spicy pepperoni salami, fresh bell pepper and red onions on homemade tomato sauce and mozzarella.', 'm-diavolo.jpg', 4, '7.90'),
(38, 'Tropicale', 'Italian ham and fresh pineapple on tomato sauce with mozzarella.', 'm-tropicale.jpg', 4, '8.00'),
(39, 'Dell alpe', 'Mild gorgonzola, Grana Padano D.O.P., Scamorza smoked cheese, semi-dried tomatoes, fresh figs, rocket and mozzarella.', 'm-dell.jpg', 4, '7.50'),
(40, 'Crudo', 'Prosciutto and Grana Padano D.O.P. on homemade tomato sauce and mozzarella.', 'm-crude.jpg', 4, '6.80'),
(41, 'Toscana', 'Pepperoni salami, olives, fresh herbs, tomato sauce, mozzarella.', 'm-toscana.jpg', 4, '6.50'),
(42, 'Capricciosa', 'Original Italian ham, fresh mushrooms, artichokes and black olives on homemade tomato sauce and mozzarella.', 'm-capricciosa.jpg', 4, '7.50'),
(43, 'Pesto con spinaci', 'Fresh baby spinach leaves and marinated tomatoes on creamy pesto sauce, with mozzarella.', 'm-pesto-spinaci.jpg', 4, '7.90');

-- --------------------------------------------------------

--
-- Table structure for table `menucategories`
--

CREATE TABLE IF NOT EXISTS `menucategories` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menucategories`
--

INSERT INTO `menucategories` (`id`, `category`) VALUES
(1, 'Antipasti'),
(2, 'Pasta'),
(3, 'Carne e pesce'),
(4, 'Pizza'),
(5, 'Dolci');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `body` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `user_id`, `image`) VALUES
(2, 'New Pizza has arrived!', 'Our new pizza, a challenge to your senses. Takes the taste to a whole new level. Give it a try and you will remember it for ever!', 2, 'n_pizza3.jpg'),
(3, 'New fondu has arrived!', 'Our new fundu has arrived, a challenge to your senses. Takes the taste to a whole new level. Give it a try and you will remember it for ever!', 1, 'n_fondu.jpg'),
(4, 'New muffins has arrived!', 'Our new muffins have arrived, a challenge to your senses. Takes the taste to a whole new level. Give it a try and you will remember it for ever!', 2, 'n_muffins.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(11) NOT NULL,
  `quantities` varchar(200) NOT NULL,
  `TotalPrice` decimal(10,2) NOT NULL,
  `name` varchar(200) NOT NULL,
  `last` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `menuIds` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `quantities`, `TotalPrice`, `name`, `last`, `phone`, `menuIds`, `address`) VALUES
(34, '9,8,7,', '167.30', 'fsdf', '', '5454353453', '1,2,6,', ''),
(35, '1,,', '34.20', 'fdsf', '', '3454553453', '2,7,', ''),
(36, '4,3,2,', '62.30', 'Df', '', '5444444444', '1,2,6,', ''),
(37, '2,,', '35.10', 'Df', '', '5444444444', '2,6,', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `noOfGuests` int(11) NOT NULL,
  `special` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `phone`, `email`, `date`, `time`, `noOfGuests`, `special`) VALUES
(1, 'fsdf', '5454545454', 'dfsf@sdff.com', '2015-08-19', '05:08:19', 4, 'fsaf'),
(5, 'fsaf', '5465465456', 'asf@fsdas.com', '2015-09-04', '00:00:00', 5, '5'),
(6, 'lalala', '3445345345', 'asf@fsdas.com', '2015-08-21', '13:01:00', 5, '5'),
(7, 'fsaf', '4545646546', 'asf@fsdas.com', '2015-08-28', '13:01:00', 5, 'gfsdgf'),
(8, 'dsfas', '5464564564', 'asf@fsdas.com', '2015-01-09', '13:01:00', 5, '5564'),
(9, 'fdsfa', '3443443434', 'gdfsd@fdsf.com', '2015-01-01', '21:00:00', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `firstName` varchar(200) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `privilege` int(10) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `password`, `phone`, `address`, `privilege`, `email`) VALUES
(1, 'thanpar', 'Thanos', '', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', '', 1, 'ffs@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
