-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Vært: localhost:8889
-- Genereringstid: 25. 02 2015 kl. 20:56:13
-- Serverversion: 5.5.38
-- PHP-version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sigarhats`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `collections`
--

CREATE TABLE `collections` (
`id` int(11) NOT NULL,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `collections`
--

INSERT INTO `collections` (`id`, `name`) VALUES
(2, '2013');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `concepts`
--

CREATE TABLE `concepts` (
`id` int(11) NOT NULL,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `concepts`
--

INSERT INTO `concepts` (`id`, `name`, `description`) VALUES
(1, 'Two-of-a-kind', 'Is the shit'),
(2, 'Residual-materials', 'Residual-materials');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `contacts`
--

CREATE TABLE `contacts` (
`id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `subejct` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `films`
--

CREATE TABLE `films` (
`id` int(28) NOT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `embed_url` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `filmType` int(11) NOT NULL,
  `landingpage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `films`
--

INSERT INTO `films` (`id`, `title`, `embed_url`, `img`, `filmType`, `landingpage`) VALUES
(8, 'asdad', '//player.vimeo.com/video/108940057', 'logo-small.jpg', 5, 0),
(9, 'asdad', '//player.vimeo.com/video/108940057?', 'test-error-icon.png', 5, 0),
(10, 'johnjoh', '//player.vimeo.com/video/108940057', 'hero.jpg', 6, 0);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `filmtypes`
--

CREATE TABLE `filmtypes` (
`id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `filmtypes`
--

INSERT INTO `filmtypes` (`id`, `name`) VALUES
(5, 'Shortfilms'),
(6, 'john');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `images`
--

CREATE TABLE `images` (
`id` int(11) NOT NULL,
  `img` varchar(260) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `feature_images` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `images`
--

INSERT INTO `images` (`id`, `img`, `title`, `product_id`, `feature_images`) VALUES
(1, 'IMG_2325.JPG', 'yoyo', '111', 0),
(2, 'IMG_2303.PNG', 'hehH', '111', 1),
(4, '_DSC0505.JPG', '', '112', 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `materials`
--

CREATE TABLE `materials` (
`id` int(11) NOT NULL,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dir` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `materials`
--

INSERT INTO `materials` (`id`, `name`, `img`, `dir`) VALUES
(1, 'sweet material', 'balmoral_wool.jpg', '1'),
(2, 'blue texture', 'download (1).jpeg', '2'),
(3, 'Cashmire finest', 'download.jpeg', '3');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `productitems`
--

CREATE TABLE `productitems` (
`id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `number` varchar(126) COLLATE utf8_unicode_ci NOT NULL,
  `size_id` int(11) NOT NULL,
  `necklable_id` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `reseller_id` int(11) NOT NULL,
  `sold` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `productitems`
--

INSERT INTO `productitems` (`id`, `product_id`, `created`, `number`, `size_id`, `necklable_id`, `reseller_id`, `sold`) VALUES
(10, 101, '2015-02-25 15:17:43', '12', 2, '0027-101', 1, 1),
(11, 102, '2014-12-05 11:37:09', '22', 1, '1020-102', 1, 0),
(12, 101, '2014-12-06 14:35:15', 'wew', 1, '1723-101', 1, 0),
(13, 111, '2015-02-25 14:58:20', '12', 1, '7889-111', 1, 0),
(14, 112, '2015-02-25 19:21:36', '1', 1, '3073-112', 1, 1),
(15, 112, '2015-02-25 19:32:41', 'asdasd', 1, '3210-112', 1, 0);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products`
--

CREATE TABLE `products` (
`id` int(11) NOT NULL,
  `concept_id` int(11) NOT NULL,
  `collection_id` int(11) NOT NULL,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `active` int(1) NOT NULL,
  `featured` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `products`
--

INSERT INTO `products` (`id`, `concept_id`, `collection_id`, `name`, `description`, `version`, `price`, `active`, `featured`) VALUES
(101, 1, 1, 'silas', '<p>den er god</p>', '1', 22, 1, 1),
(102, 2, 1, 'model 2', '<p>wool cap</p>', 'wool ', 3, 1, 1),
(103, 1, 1, 'asdasd', '<p>dsadasda</p>', 'asdasda', 21121, 1, 0),
(104, 1, 2, 'wqwe', 'qeqwe', 'dsada', 22, 1, 0),
(105, 1, 1, 'asda', 'adasdad', '232', 232, 1, 1),
(106, 1, 1, 'sada', 'adds', 'edass', 232, 1, 0),
(107, 1, 1, 'asd', 'asdasd', 'asdasd', 32, 1, 0),
(108, 1, 1, 'asdad', 'asdad', 'asdas', 232, 1, 1),
(109, 1, 2, 'ewsda', 'asdasd', 'asdasd', 22, 1, 1),
(110, 1, 1, 'sadasd', 'asdas', '12', 2, 1, 0),
(111, 1, 2, 'asdasd', 'dasdad', 'sadd', 22, 1, 1),
(112, 1, 1, 'test', '<p>sadasdasdaa</p>', '12', 123, 1, 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `registered_caps`
--

CREATE TABLE `registered_caps` (
`id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `birth` varchar(20) DEFAULT NULL,
  `profession` varchar(140) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `image_url` varchar(100) DEFAULT NULL,
  `productitem_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `registered_caps`
--

INSERT INTO `registered_caps` (`id`, `name`, `location`, `birth`, `profession`, `email`, `image_url`, `productitem_id`) VALUES
(1, 'Adam ', 'Denmark', '1990', 'jonny', 'hey@gmail.com', 'uploads/images/registered_caps/1417875628.jpg', 10),
(2, 'fhbcvbcvbcv', 'iojil', '', 'dsaasd', 'gmail@fmg.dj', 'uploads/images/registered_caps/1424891741.jpg', 14);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `resellers`
--

CREATE TABLE `resellers` (
`id` int(11) NOT NULL,
  `name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `ordernumber` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `resellers`
--

INSERT INTO `resellers` (`id`, `name`, `address`, `img`, `url`, `ordernumber`) VALUES
(1, 'Sigar hats & caps basement', '<p><strong>Glentevej</strong></p><p><strong>239239</strong></p><p><strong>weqw</strong></p>', '1378300103693912416.JPG', 'sigarhats.com', 1),
(11, 'asdasd', '<p>asdasdasdasdasdas</p>', '', '', 0);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `sizes`
--

CREATE TABLE `sizes` (
`id` int(11) NOT NULL,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `sizes`
--

INSERT INTO `sizes` (`id`, `name`) VALUES
(1, '55 CM'),
(2, '56 CM');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `stories`
--

CREATE TABLE `stories` (
`id` int(11) NOT NULL,
  `langues` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `headline` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `story` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `stories`
--

INSERT INTO `stories` (`id`, `langues`, `headline`, `story`) VALUES
(1, 'Dansk', 'Historien om Sigar Hats & Caps', '<h2></h2><h4>Af Silas GÃ¤rtner</h4><p>	I midten af 2009 befandt jeg mig pludselig uden fodfÃ¦ste pÃ¥ min livsrejse. SÃ¸gende efter en meningsfuld uddannelse, samt et Ã¸nske om igen at have et sted at bo i min hjemby part 3, KÃ¸benhavn! En kamp for fast bopÃ¦l mange kÃ¸benhavnere igen og igen kastes ud i, sÃ¦nkede med gentagende nederlags tyngde, mine knÃ¦ og mit blik lÃ¦ngere og lÃ¦ngere nedad.	<br>	 Min vilje var ved at vÃ¦re mÃ¦t af dage, og jeg besluttede derfor at rejse bort i en tid. Hvad der udsprang af rodlÃ¸shed skulle senere vise sig at blive en dannelsesrejse.</p><p>	Med tommelfingeren, skateboardet og en liste over venner og bekendte i Tyskland, gik det rask af sted langs motorvejene. Leberwurst, kÃ¤sebrot og familie jeg end ikke vidste jeg havde, blev nu en gangbar, dog uvis og foranderlig levevej for mig. Efter at have besÃ¸gt mange dejlige steder, var der pÃ¥ mit ophold hos bekendte i Jena, noget som fangede min opmÃ¦rksomhed.</p><p>	 Jeg havde snuset omkring i en hatteforretning i over en time i den lille gade. Stemningen duftede af hÃ¥ndvÃ¦rk og slÃ¥ende kvalitet. Jeg stillede endelig damen et i vore dage usÃ¦dvanligt spÃ¸rgsmÃ¥l: â€Er der nogen der stadig producerer nogle af disse fantastiske kasketter her i nÃ¦rheden af Tyskland?â€	<br>	 Med en formodning om at al europÃ¦isk tekstil produktion var indstillet, til fordel for en bestillingsliste til Asien, kom damen med et svar jeg blev overasket over.	<br>	 â€Ja!â€ Svarede hun, i en nÃ¦rliggende by fandtes et firma ved navn Bullani MÃ¼tzen, der stadig producerede alt fra bunden. Hun gav mig et telefon nummer. Hmm? Dagen derpÃ¥ pakkede jeg mine ting og drog af sted. Nu var det ud pÃ¥ eventyr, og min rejsen rundt var blevet til en mission. En mission hvor jeg skulle lÃ¦re alt om kasketter og hovedbeklÃ¦dning. Halvvejs pÃ¥ min kun 100 km. rejse mod Bamberg blev jeg sat af pÃ¥ en tankstation, hvorfra jeg kunne ringe.	<br>	 â€Jaaah? Hmmm.â€ med en lidt tÃ¸vende stemmefÃ¸ring, svarede en venlig dame i telefonen. Jeg var da velkommen til at komme forbi og se vÃ¦rkstedet, men det var altsÃ¥ blot en lille virksomhed med kun 6-7 ansatte, og hvad jeg prÃ¦cis ville, forstod hun ikke helt? Men jeg var heldigvis velkommen til at forklare mig nÃ¥r jeg kom frem. Fabrikken og vÃ¦rkstedssalget lÃ¥ i AugustenstraÎ²e 10, Bamberg.</p><p>	Afsted pÃ¥ hesteryg det gik. Fire rullende hjul, og en brezel (Bayrisk fÃ¸rsteklasses bagerkunst fra Sydtyskland) med salt pÃ¥! Jeg oksede mig fremad!	<br>	 Da jeg trÃ¥dte ind af dÃ¸ren pÃ¥ Hr. og Fru Bullmanns fabrik, kom en kraftig, tÃ¦t bygget mand svingende igennem dÃ¸ren med, et fast blik og en 12 tommers saks i Ã¦delstÃ¥l i hÃ¥nden. Der skulle ordnes nogle ting kunne man se. Han marcherede direkte forbi mig og ind i et andet rum, hvor jeg kunne skimte en bÃ¥ndsav for fuld drÃ¸n. â€Wir haben besuchâ€ nÃ¦vnte han i forbifarten.	<br>	 Jeg blev stÃ¥ende. â€Grussgottâ€ en dame kom ud af en anden dÃ¸r, og kiggede pÃ¥ mit skateboard og min oppakning og mit vindblÃ¦ste hÃ¥r.	<br>	 â€Ha-halloâ€ udtalte jeg mig? â€Ich bin Silas GÃ¤rtner, wir haben vor kurzer zeit im telefon geschprochen.â€ Sagde jeg, nu lidt mere selvsikker.	<br>	 Nu smilte hun: â€Gut, Herr GÃ¤rtner, und was wollen Sie ganz genau. Ich habe verstanden Sie wollen MÃ¼tzen machen lernen?â€	<br>	 Jeg forklarede at det var netop det jeg gerne ville: Jeg ville lÃ¦re at lave kasketter.	<br>	 Vi talte et stykke tid om min rejse hertil, mine fÃ¦rdigheder og erfaringer pÃ¥ en symaskine. En egenskab jeg vist fik slÃ¥et op i et lidt stÃ¸rre brÃ¸d, end hvad jeg reelt vidste om industrisymaskiner. Men nuvel, jeg havde bÃ¥de syet en heldragt og lavet nogle kostumer en gang, sÃ¥ at trÃ¥de en nÃ¥l var ikke ukendt. Desuden var jeg ferm med det meste andet vÃ¦rktÃ¸j, og kunne tage fra mig hvis tingene blev lidt hektisk. Hr. og Fru Bullmann lyttede. Hr. Bullmann mente: â€Ja det er meget fint, men hvis du vil lÃ¦re at lave kasketter, sÃ¥ kommer du ikke til at lÃ¦re det pÃ¥ en mÃ¥ned, eller et halvt Ã¥r. Det tager Ã¥revis!â€	<br>	 Jeg bebudede jeg var en lÃ¦renem type, og bare jeg kunne lÃ¦re at sy en sixpence ville jeg vÃ¦re godt tilfreds. Men end ikke det ville jeg kunne lÃ¦re pÃ¥ en mÃ¥ned mente Hr. Bullmann. Man kunne mÃ¥ske komme lidt i gang, og snuse lidt til periferien af Ã¦gte hÃ¥ndvÃ¦rk, hvilket mÃ¥ske var det jeg var kommet efter? Vi snakkede lidt frem og tilbage om hvad man ville kunne nÃ¥ og hvordan. Til sidst sagde han: â€Fint. Hvis du skal lÃ¦re her, sÃ¥ mÃ¥ du kÃ¸be mig lidt tid fri, til at lÃ¦re dig det. SÃ¥ du mÃ¥ arbejde hÃ¥rdt noget af dagen hos mig, sÃ¥ jeg hen ad eftermiddagen kan sÃ¦tte noget tid af til dig? Vi arbejder en normal arbejdsuge der starter kl. 8:00 og slutter 16:30, du kan bo hjemme hos mig hvis du vil, og du kan starte pÃ¥ mandag!â€</p><p>	Hr. Bullmann var fabriksejer af den gamle type. Der skulle produceres og hjulene holdes i gang. Samtidig var han udlÃ¦rt skrÃ¦dder med speciale i hovedbeklÃ¦dning, ogsÃ¥ det af den gamle skole, sÃ¥ tingene skulle vÃ¦re i orden, eller â€pico belloâ€ som han sÃ¥ ofte sagde.</p><p>	<strong><br>	</strong></p><p>	<img src="/sigarhats/img/story/BullaniBullmann.jpg" alt="Sigar hats and caps logo"></p><h5>Her er Hr. Bullmann i gang med at fÃ¦rdiggÃ¸re en original sixpence kasket for Bullani MÃ¼tzen. De absolut bedste sixpence kommer derfra, og jeg er stolt af at vÃ¦re den eneste forhandler af min lÃ¦remesters sixpence modeller her i Danmark.</h5><p>	PrÃ¸vetiden var pÃ¥ en mÃ¥ned, og jeg skulle give besked i lÃ¸bet af ugen om jeg ville starte? Han forÃ¦rede mig en Bullani MÃ¼tzen cap i nyuld/alpacca uld blend, med en smuk lÃ¦derskÃ¦rm, fordi historien om min rejse havde fornÃ¸jet Hr. Bullmann i en sÃ¥dan grad, at han mente jeg fortjente en rigtig kasket, uanset hvad jeg besluttede. Vi tog vores afsked, og jeg traskede ud pÃ¥ gaden.	<br>	 En time efter, ringede jeg og meldte mig til.</p><p>	Den weekend boede jeg hos nogle venner af mine forÃ¦ldre, som i fordumstid havde Bamberg som studieby. Hen over weekenden fik jeg nogle nye bekendtskaber, bl.a. ved en gÃ¥rdfest i et kÃ¦mpestort kollektiv midt inde i byen. Da det senere viste sig at hattemagerens datter ogsÃ¥ boede i huset, med hendes kÃ¦reste og 8 andre studerende, fik jeg tilbuddet om at flytte ind pÃ¥ deres gÃ¦stevÃ¦relse, og min uofficielle praktikperiode begyndte. â€“Mandag morgen, med stakkevis af kasketter der skulle stryges, bankes med et stykke trÃ¦, stryges igen og sÃ¥ forfra med en ny. Dagen var lang, dampstrygejernet duggede pÃ¥ mine briller, og solen skinnede uden for fabrikkens vinduer.</p><p>	Jeg knoklede pÃ¥.</p><p>	Om eftermiddagen snusede jeg rundt og dannede mig en masse indtryk fra vÃ¦rkstedet og dets medarbejdere.</p><p>	<img src="/sigarhats/img/story/LearningtimeBullani.jpg" alt="Sigar hats and caps logo"></p><h5>Den fÃ¸rste tid i lÃ¦re hos Bullani MÃ¼tzen, mÃ¥tte jeg bruge mange timer ved damp strygejernet. En tjans der gav sved pÃ¥ panden alt imens sommer solen buldrede ind af vinduerne pÃ¥ det lille vÃ¦rksted.</h5><p>	Tirsdag morgen. Samme program. Jeg fik lov at stÃ¥ ved dampstrygejernet i timevis. Jeg fik ogsÃ¥ en lektion i at sy pÃ¥ industrisymaskine. Jeg skulle skÃ¦re til og sy foer sammen til produktionen. Men senere pÃ¥ dagen fik jeg lov at finde stof frem fra lageret, som jeg Ã¸nskede at sy min fÃ¸rste kasket i. Samme dag var min fÃ¸rste cap fÃ¦rdig. Hr. Bullmann var ikke tilfreds for kvaliteten og forarbejdningen havde naturligvis ikke nÃ¥et hans niveau, og mÃ¸nstrene lÃ¥ helt skÃ¦vt over hinanden. Desuden var skÃ¦rmen, 1 mm. for meget til venstre, og det var naturligvis forkasteligt. Han mente jeg nok hellere burde smide dem ud. Jeg selv var sÃ¥dan okay tilfreds, og ville bare have den med hjem, hvilket jeg sÃ¥ fik lov til. For som Hr. Bullmann sagde, det var da lidt sjovt, nu hvor det var den fÃ¸rste. I forsÃ¸get pÃ¥ at sy nummer to, mÃ¥tte jeg flere gange sy om og forfra. Da jeg viste Hr. Bullmann resultatet, og han rev syningerne op og sagde forfra, det er ikke godt nok. Det gav mig blod pÃ¥ tanden, nu skulle den blive perfekt.</p><h5>Lille film optaget i Bullani MÃ¼tzens lokaler: Bullani MÃ¼tzen SIGAR Hats learning</h5><iframe src="//player.vimeo.com/video/60093145?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="367" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe><p>	<br>	 De fÃ¸lgende fire dage var Hr. Bullmann ude af byen. Han skulle pÃ¥ rundtur og vise sin vinterkollektion frem til alle forhandlere i nord og nordvest Tyskland. Jeg stod derfor uden lÃ¦remester, tidligt hver morgen stod jeg med dampstrygejernet og trÃ¦pinden og bankede. Hr. Bullmanns produktion kom godt foran om produktionsplanen tÃ¦nkte jeg. Men om eftermiddagen havde jeg frie tÃ¸jler, til at begynde forsÃ¸g pÃ¥, at skabe modeller selv. Da Hr. Bullmann var tilbage efter weekenden, var der igen et kritisk blik, og en god lÃ¦remester i huset.	<br>	 Selve arbejdet blev efter den fÃ¸rste uges strÃ¦ben lidt mere fritstillet. Jeg fik mere tid til at udfÃ¸re egne interesser, og Bullmann kommenterede mit arbejde nu med lejlighedsvis optimisme selvom hÃ¥ndvÃ¦rket godt kunne blive bedre, og jeg ofte mÃ¥tte sprÃ¦tte stikningerne op, og sy dem om pÃ¥ ny. Denne Ã¦rlige kritik holdt dampen oppe, og hver eftermiddag kom jeg hjem med 1-2 nye kasketter til kollektivet, og sagde, denne kasket syntes han (hattemageren) var lidt bedre, men disse to andre hÃ¸rte til i skraldespanden. Ofte tilberedte jeg nogle kÃ¦mpe mÃ¥ltider til veganere, og vegetarer og fisketarer i mit nye midlertidige hjem. I weekenderne havde vi ture til skoven, og holdt fester, samt tog ud i byen i Bamberg.</p><p>	<br>	 Langsomt dag for dag opbyggede jeg min kollektionen, der kom til at hedde: Bamberg Special Collection, Anno 2009. Alle caps skulle vÃ¦re i str. 59, min egen, og de fik alle et nummereret label hvori jeg skrev navnet pÃ¥ hvad jeg troede mit firma skulle hedde, inden vi skiftede navn til SIGAR Hats. Dengang hed det RETRO, og alle caps er mÃ¦rket: Designed by RETRO in collaboration with BULLANI MÃ¼tzen, Bamberg.	<br>	 Kollektionen indeholder 21 numre, og de fleste er bÃ¦rer jeg stadig med stolthed i dag. Kollektionen har en stor affektionsvÃ¦rdi, trods der er mange fejl og forsÃ¸g med former i den.</p><p>	Efter 4 uges slid, fik jeg nys om at Deutsche Bahn fejrede 20 Ã¥r forenet Tyskland, med nogle uhyggeligt billige togrejsebilletter. Nogle af mine ubehageligt gode venner i Jena ville tage til GardasÃ¸en og holde ferie. Jeg takkede mange gange for opholdet og min nye lÃ¦rdom, og tog min afsked med Bullani MÃ¼tzen for denne gang. Et par uger senere var jeg tilbage i Danmark og sÃ¸gte ind pÃ¥ KÃ¸benhavns Erhvervsakademi (KEA) pÃ¥ linjen Accessories Design, med en helt bestemt type accessoirer for Ã¸je.</p><p>	To Ã¥r efter tog jeg et professionelt praktikforlÃ¸b fra januar til marts gennem uddannelsen pÃ¥ skolen, det var blevet klart at kasketter havde en drivende kraft i mig. I dette forlÃ¸b var arbejdet meget mere intensivt, og jeg fik lov at arbejde selvstÃ¦ndigt meget af tiden. Efter jeg havde produceret 18,5 kg. Kasketter, som jeg mÃ¥tte sende hjem i en kÃ¦mpestor kasse, blev dette til Bamberg Edition 2012, enkelte kan stadig ses her pÃ¥ hjemmesiden og er endnu ikke solgt.</p><p>	Jeg producerer fortsat i KÃ¸benhavns Nordvestkvarter, i et lille kÃ¦lderlokale i fuglekvarteret nÃ¦r NÃ¸rrebro st. hvor kollektionen Copenhagen NV 2013 og fremtidige kollektioner bliver syet.</p><p>	Jeg holder stadig et tÃ¦t forhold til Bullani MÃ¼tzen i Bamberg, og der bl.a. producerer den klassiske HerrensportmÃ¼tze, med aller kÃ¦rligste hÃ¥nd, og i aller hÃ¸jste kvalitet. Jeg forhandler ogsÃ¥ denne type cap som dog er syet af min lÃ¦remester Hr. Bullmann, Bullani MÃ¼tzen. Et godt forbillede for SIGAR Hats om hvordan Ã¦gte hÃ¥ndvÃ¦rk skal produceres i et fint vÃ¦rksted i Sydtyskland.</p><h5>	Mit eget vÃ¦rksted blev oprettet i Ã¥r 2013. Det ligger pÃ¥ Glentevej i KÃ¸benhavn NV, og du skal vÃ¦re sÃ¥ velkommen til at komme forbi. Husk dog at lave en aftale i forvejen.</h5><p>	<strong><br>	</strong></p><p>	<img src="/sigarhats/img/story/SIGARHatsbasment.jpg" alt="Sigar hats and caps logo"></p><p>	<img src="/sigarhats/img/story/SIGARHATSSILAS.JPG" alt="Sigar hats and caps logo"></p><p>	<strong>SIGAR HATS I DAG:</strong></p><p>	<strong>Virksomheden er ejet af Silas GÃ¤rtner, der forsÃ¸ger at mÃ¥lrette den fremtidige udvikling. Han er en stolt producent af hovedbeklÃ¦dning der slider hÃ¥rdt i det lille men godt udrustede kÃ¦lder-sy lokale i KÃ¸benhavns Nordvest kvarter. Silas GÃ¤rtner stÃ¥r ogsÃ¥ bag flere koncepter der forsÃ¸ger at tilfÃ¸je en emotionel tilknytning til hans produkter. Velkommen hos SIGAR!</strong></p>'),
(2, 'English', 'The story of Sigar Hats & Caps', '<h2></h2><h4>By Silas GÃ¤rtner</h4><p>	In mid-2009, I found myself without a foothold in the journey of my life. I sought for a meaningful education and a need for housing in my hometown, Copenhagen. Repeated failure fighting for permanent residence, as many local Copenhageners are, weight my knees and my eyes further down than ever.</p><p>	My spirit of luck was satiated with days, and I decided to go away for a while. What started as rootlessness would later prove to be my educational rite of passage.</p><p>	Hitchhicking with my skateboard and a list of acquaintances in Germany, I went along the motorways. Leberwurst, KÃ¤sebrot and family I never knew were now a viable, however uncertain and thrilling, way of life. After visiting many wonderful places, I found something that by instinct caught my attention in the town of Jena.</p><p>	I had shopped around in a hat shop for over an hour on a small street downtown. The atmosphere smelled of craftsmanship and striking quality. I finally asked a nowadays unusual question: "Is there anyone who still produces some of these great caps here near Germany?"	<br>	 With the assumption that all European textile production was discontinued in favor of an order list to Asia, the lady came up with an answer that surprised me:</p><p>	"Yes," she said. In a nearby town was a company called Bullani MÃ¼tzen, which still produced everything from scratch. She gave me a phone number. The next day I packed my stuff and went off. Now it was time for another adventure and my journey around had become a mission. I had to learn everything about hats.</p><p>	Halfway on my only 100 km. journey to Bamberg I was dropped off at a gas station, where I could make a phone call.</p><p>	"Jaaah? Hmmm. " Said a friendly lady with a hesitant voice over the phone. I was free to come by and see the workshop, but it was just a small company with only 6-7 employees. It was exactly what I wanted, she did not quite understand. Fortunately I was free to explain it on my arrival.</p><p>	The factory and shop sales were in AugustenstraÎ²e 10, Bamberg. Four rolling wheels, and a brezel with salt (Bavarian prime baker art from southern Germany) I forced myself forward!</p><p>	When I entered the door of Mr. and Mrs. Bullmanns factory, a strong stocky man with a fixed gaze and 12-inch stainless steel scissors at hand came swinging through the door. There had to be taken care of things was the attitude. He marched right past me and into another room, where I could catch a glimpse of a band saw at full tilt. "Wir haben besuch" he mentioned in passing.</p><p>	I waited right there. "Grussgott" a lady came out of another door, and looked at my skateboard, my backpack and my windblown hair.</p><p>	"Ha-hello" I spoke. "Ich bin Silas GÃ¤rtner, wir haben im Telefon geschprochen." I said a bit more confidently then to start with.</p><p>	Now she smiled: "Gut, Mr. GÃ¤rtner und was wollen Sie ganz genau? Ich habe verstehen Sie wollen MÃ¼tzen machen lernen? "</p><p>	I explained that it was just what I wanted: I wanted to learn how to make hats.</p><p>	We talked a while about my trip, my skills and experience with sewing machines. I told that threading a needle was not unknown to me, I was adept with most other tools, but I had never worked on industrial sewing machines. Mr. And Mrs. Bullmann listened. Mr. Bullmann said: "Yes thatâ€™s very fine, but if you want to learn how to make hats, you''re not going to learn it in a month or six months.â€</p><p>	I announced I was a quick learner. If only I could learn to sew a basecap, I would be happy. But Mr. Bullmann looked skeptical at me and said: â€œYou might get a taste of the periphery of true craftsmanship, but sewing caps takes years my friend.â€ We talked back and forth about what could be able to reach and how.</p><p>	Finally he said: "Fine. If you need to learn here, you have to buy me a little time off to teach you. You have to work for me part of the day, so I move along with production. In the afternoon I can put aside some learning time for you. A normal work week starts at 8:00 and ends 16:30, you can stay at my house if you want, and you can start on Monday!"</p><p>	The probationary period was one month, and I could give my final answer whether I wanted to start, after having some thoughts first. He gave me a Bullani MÃ¼tzen cap, an Alpaca and wool blend with a beautiful leather bill. The story of my journey had amused Mr. Bullmann to such an extent that he thought I deserved a real cap, no matter what I decided. We took our parting and I trudged out into the street again.</p><p>	An hour later, I called and signed up.</p><p>	<img src="/sigarhats/img/story/BullaniBullmann.jpg" alt="Sigar hats and caps logo"></p><h5>	Mr. Bullmann was factory-owner of the old type. There had to be productivity and the wheels had to keep turning. He was a skilled tailor specializing in headgear and things had to be created perfectly or "Pico bello" as he often said.</h5><p>	That weekend, I stayed with some friends of my parents, who back in the days studied in Bamberg. Over the weekend I attended a backyard party in a huge young cohabitation in the heart of the city. As it later turned out, the hatter''s daughter also lived in the house with her boyfriend and eight other students. I was offered to move into their guest room, and my unofficial training period began. Monday morning: Stacks of caps to be ironed, beaten with a piece of wood and then ironed again. And then it went on with a new one. The day was long, the steam iron misted my glasses, and the summer sun shone outside the factory windows.</p><p>	I worked hard and consistent.</p><p>	In the afternoons I sniffed around and formed impressions from the workshop and its employees.</p><p>	Tuesday morning: the program was repeated. I was allowed to stand by the steam iron for hours. I took a lesson in using industrial sewing machines, how to cut and sew, and lining together for production. Later in the day I was allowed to find fabric from the storeroom that I wanted to sew my first cap in. The next day was my first cap was complete. Mr. Bullmann was not satisfied with the quality, and the processing obviously had not reached his level. The pattern squares were slightly skewed against each other, the brim set 1 mm. too far to the left, and that was reprehensible. He said I had better throw the cap in the bin. I myself was proud and just wanted to wear it all week. So I did, after obtaining permission to do so. Mr. Bullmann decided it was kind of a funny cap, being that it was my first.</p><p>	 In trying to sew number two, I had to repeatedly start over. I showed Mr. Bullmann my result and he tore the seams up. â€œDo it over again. that''s not good enough.â€	<br>	 I pushed my limits, the next should be perfect.</p><p>	<img src="/sigarhats/img/story/LearningtimeBullani.jpg" alt="Sigar hats and caps logo"></p><h5>	Photos of me working at the steam iron at Bullani MÃ¼tzen.</h5><p>	The following four days Mr. Bullmann was out of town. He was on tour showing his winter collection to all traders in the north and northwest of Germany. I was therefore left with no teacher, and stood early every morning with the steam iron and the wooden bar and knocked. Mr. Bullmannâ€™s production came well ahead of schedule I thought. In the afternoon I had free reign to begin attempts creating new shapes and models of my own. When Mr. Bullmann returned there was once again a critical eye and a good mentor in the studio.</p><p>	The work became a bit more loose the following weeks. I was given more time to perform my own interests and Bullmann commented on my work with occasional optimism. The craft could be better and I often had to unpick stitching and sew them up again. This honest criticism kept up the pace and every afternoon I came home with 1-2 new crafted caps, and showed the community my days work. In the evenings I often prepared huge meals for the vegans and vegetarians and fishietarians in my new temporary home. On weekends we had trips to the forest, held celebrations, and went out enjoying the city.</p><p>	Slowly and day by day, I built up my first line which came to be called: Bamberg Special Collection, Anno 2009. All caps were made my size: 59, and came with a numbered label reading: Design by RETRO in collaboration with BULLANI MÃ¼tzen, Bamberg. I later came up with SIGAR Hats, a simple connection of my first name and last name: Silas GÃ¤rtner.</p><p>	The first collection contained 21 pieces most of which are worn by myself. The collection has a great sentimental value although there are many mistakes and unusual experiments with shapes and materials.</p><p>	After 4 weeks of work and practice, I heard of Deutsche Bahn (Railway Germany) celebrating 20 years of united Germany with selling creepy cheap train tickets. Some of my unpleasantly good friends in Jena planned to take to Lake Garda on holiday. So I thanked Mr. Bullmann for the stay and my new teachings, and took my leave of Bullani MÃ¼tzen for the time. A few weeks later I was back in Denmark and enrolled to begin at the Copenhagen School of Design and Technology (KEA) with specialty in Accessories Design, with a very specific type of accessories in mind.</p><p>	In the summer of 2011 I once again visited Bullani MÃ¼tzen in Bamberg, this time for very short period. I returned home with a few caps that I had to finish on the school''s sewing machines. Throughout 2011, I spent long evenings after school in the workshops. They did not have the best sewing machines available, and I was missing some fundamental materials as well.</p><p>	This work became the Copenhagen Collection 2011. It is characterized by varying quality, weird forms and templates, as well as a combination of materials that are fully in line with the standard of genuine SIGAR HATS &amp; CAPS.</p><p>	The following year I took a professional internship at Bullani MÃ¼tzen from January to March through KEA. It had become clear that the caps were a driving force for me.</p><p>	This time the work was much more intense and I was allowed to work independently much of the time.</p><p>	Afterwards, I had produced 18.5 kg. of caps which I had to send home in a huge box. This was Bamberg Edition 2012.</p><h5>	Small film shot in Bullani MÃ¼tzens premises.</h5><iframe src="//player.vimeo.com/video/60093145?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="367" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe><p>	I now produce in Northwest Copenhagen, in a small basement room in Birds neighborhood near NÃ¸rrebro Station. This is where collection Copenhagen NV 2013 and future collections will be made.</p><p>	I have maintained a close relationship with Bullani MÃ¼tzen in Bamberg. Mr. Bullmann produces the classic HerrensportmÃ¼tze, with a most loving hand and to the very highest quality, which I now sell in my shop. It remains a good example and reminder for SIGAR HATS on how genuine craft is created in a fine workshop in southern Germany.</p><p>	It is with this history in mind that SIGAR HATS will continue to create hand-crafted and personalized headwear. To know more about the history or to speak with Silas, refer to the contact section.</p><p>	<img src="/sigarhats/img/story/SIGARHatsbasment.jpg" alt="Sigar hats and caps logo"></p><p>	<img src="/sigarhats/img/story/SIGARHATSSILAS.JPG" alt="Sigar hats and caps logo"></p><h5>	Images from SIGAR Hats workshop and Basement Business.</h5>');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(7, 'admin', '0c5ea0d43e32ac030dbf382d86286e0a55c3d5a3', 'admin', '2014-08-22 11:41:39', '2014-08-22 11:41:39'),
(8, 'hej', '72486a429136038963d3e4d04636579e131fb1af', 'admin', '2014-08-26 10:50:34', '2014-08-26 10:50:34'),
(9, 'john', '6cbcb4da9badd9d2dc62d3dafe2668a125d47ccd', 'admin', '2014-09-04 11:27:56', '2014-09-04 11:27:56'),
(10, 'admin', '0c5ea0d43e32ac030dbf382d86286e0a55c3d5a3', 'admin', '2014-12-06 15:37:40', '2014-12-06 15:37:40'),
(11, 'admin', '0c5ea0d43e32ac030dbf382d86286e0a55c3d5a3', 'admin', '2014-12-06 15:37:53', '2014-12-06 15:37:53'),
(12, 'sigarhats@gmail.com', 'aea699c4a7176dc63674207fc24504b6cfc6ae90', 'admin', '2014-12-06 16:01:36', '2014-12-06 16:01:36');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `user_avatars`
--

CREATE TABLE `user_avatars` (
`id` int(11) NOT NULL,
  `name` varchar(38) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(38) COLLATE utf8_unicode_ci NOT NULL,
  `birth` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(38) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(38) COLLATE utf8_unicode_ci NOT NULL,
  `productitem_id` int(11) NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `user_avatars`
--

INSERT INTO `user_avatars` (`id`, `name`, `location`, `birth`, `gender`, `email`, `img`, `productitem_id`, `password`) VALUES
(1, 'Adam Zaken', 'Copenhagen', '280390', '1', 'adamzakenweb@gmail.com', 'somerandom.jpg', 1, ''),
(2, 'John Zaken', 'UK', '2929392', '2', 'something@gmail.com', 'jjehah.jpeg', 0, ''),
(3, 'Emil Johnson', 'Frb', '020490', '2', 'jsjsi@gmail.com', 'jsjsj.jpg', 0, '');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `collections`
--
ALTER TABLE `collections`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `concepts`
--
ALTER TABLE `concepts`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `films`
--
ALTER TABLE `films`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `filmtypes`
--
ALTER TABLE `filmtypes`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `materials`
--
ALTER TABLE `materials`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `productitems`
--
ALTER TABLE `productitems`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `registered_caps`
--
ALTER TABLE `registered_caps`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `resellers`
--
ALTER TABLE `resellers`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indeks for tabel `sizes`
--
ALTER TABLE `sizes`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `stories`
--
ALTER TABLE `stories`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `user_avatars`
--
ALTER TABLE `user_avatars`
 ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `collections`
--
ALTER TABLE `collections`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tilføj AUTO_INCREMENT i tabel `concepts`
--
ALTER TABLE `concepts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tilføj AUTO_INCREMENT i tabel `contacts`
--
ALTER TABLE `contacts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tilføj AUTO_INCREMENT i tabel `films`
--
ALTER TABLE `films`
MODIFY `id` int(28) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Tilføj AUTO_INCREMENT i tabel `filmtypes`
--
ALTER TABLE `filmtypes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Tilføj AUTO_INCREMENT i tabel `images`
--
ALTER TABLE `images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Tilføj AUTO_INCREMENT i tabel `materials`
--
ALTER TABLE `materials`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Tilføj AUTO_INCREMENT i tabel `productitems`
--
ALTER TABLE `productitems`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Tilføj AUTO_INCREMENT i tabel `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=113;
--
-- Tilføj AUTO_INCREMENT i tabel `registered_caps`
--
ALTER TABLE `registered_caps`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tilføj AUTO_INCREMENT i tabel `resellers`
--
ALTER TABLE `resellers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Tilføj AUTO_INCREMENT i tabel `sizes`
--
ALTER TABLE `sizes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tilføj AUTO_INCREMENT i tabel `stories`
--
ALTER TABLE `stories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Tilføj AUTO_INCREMENT i tabel `user_avatars`
--
ALTER TABLE `user_avatars`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
