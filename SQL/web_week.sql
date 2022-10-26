-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 oct. 2022 à 11:29
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `web_week`
--

-- --------------------------------------------------------

--
-- Structure de la table `animation`
--

CREATE TABLE `animation` (
  `id_animation` int(3) NOT NULL,
  `nom_animation` varchar(30) NOT NULL,
  `description_animation` text NOT NULL,
  `type_animation` text NOT NULL,
  `date_animation` date NOT NULL,
  `horaire_début` time NOT NULL,
  `horaire_fin` time NOT NULL,
  `places_max` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `animation`
--

INSERT INTO `animation` (`id_animation`, `nom_animation`, `description_animation`, `type_animation`, `date_animation`, `horaire_début`, `horaire_fin`, `places_max`) VALUES
(1, 'Concours', 'Concours des meilleurs plats, jugés par un jury composé de cuisiniers et de spectateurs. ', 'Concours', '2023-05-21', '14:00:00', '22:00:00', 700),
(2, 'Cuisiner une croziflette', 'Cette animation va vous permettre d\'apprendre à cuisiner votre propre croziflette ! En petit groupe, avec les aliments et le matériel fournis, vous serez encadrés d\'un chef spécialiste de ce plat.', 'Apprentissage', '2023-05-19', '14:00:00', '16:00:00', 20),
(3, 'Cuisiner une galette bretone', 'Cette animation va vous permettre d\'apprendre à cuisiner votre propre galette bretone ! En petit groupe, avec les aliments et le matériel fournis, vous serez encadrés d\'un chef spécialiste de ce plat.', 'Apprentissage', '2023-05-19', '18:00:00', '20:00:00', 20),
(4, 'Cuisiner une flammekueche', 'Cette animation va vous permettre d\'apprendre à cuisiner votre propre flammekueche ! En petit groupe, avec les aliments et le matériel fournis, vous serez encadrés d\'un chef spécialiste de ce plat.', 'Apprentissage', '2023-05-20', '14:00:00', '16:00:00', 20),
(5, 'Cuisiner un bœuf bourguignon', 'Cette animation va vous permettre d\'apprendre à cuisiner votre propre bœuf bourguignon ! En petit groupe, avec les aliments et le matériel fournis, vous serez encadrés d\'un chef spécialiste de ce plat.', 'Apprentissage', '2023-05-20', '18:00:00', '20:00:00', 20),
(6, 'Histoire du macaron', 'Durant ce spectacle, l\'histoire du macaron vous sera comptée sous forme de pièce de théâtre.', 'Spectacle', '2023-05-19', '16:30:00', '17:30:00', 300),
(7, 'Histoire des cannelés', 'Durant ce spectacle, l\'histoire des cannelés vous sera comptée sous forme de pièce de théâtre.', 'Spectacle', '2023-05-20', '11:30:00', '12:30:00', 300),
(8, 'Histoire de la tarte au sucre', 'Durant ce spectacle, l\'histoire de la tarte au sucre vous sera comptée sous forme de pièce de théâtre.', 'Spectacle', '2023-05-20', '16:30:00', '17:30:00', 300),
(9, 'Histoire du far breton', 'Durant ce spectacle, l\'histoire du far breton vous sera comptée sous forme de pièce de théâtre.', 'Spectacle', '2023-05-21', '11:30:00', '12:30:00', 300);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id_personne` int(3) NOT NULL,
  `nom_personne` varchar(30) NOT NULL,
  `prenom_personne` varchar(30) NOT NULL,
  `email_personne` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE `plat` (
  `id_plat` int(3) NOT NULL,
  `nom_plat` varchar(30) NOT NULL,
  `description_plat` text NOT NULL,
  `ingredients_plat` text NOT NULL,
  `image_plat` text NOT NULL,
  `id_region` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`id_plat`, `nom_plat`, `description_plat`, `ingredients_plat`, `image_plat`, `id_region`) VALUES
(1, 'Croziflette', 'La croziflette est un plat savoyard réalisé à partir de crozets, ces pâtes de sarrasin typiques de la région. Il s’agit d’une recette proche de la tartiflette, ou les crozets remplacent les pommes de terre !', 'Crozets, chèvre, poivre, sel, oignon, lardons', '', 1),
(2, 'Truffade', 'La truffade est un plat, préparé auparavant l’été par les bergers dans les burons. Elle doit son nom au mot Trufada, qui signifie pomme de terre en patois.\r\nÀ base de pomme de terre et de tomme fraîche de cantal, c’est un plat savoureux et généreux, limite régressif !', 'Pomme de terre, lard blanc, ail, Tomme fraiche d\'Aubrac, sel, poivre', '', 1),
(3, 'Liqueur de verveine', 'La liqueur de verveine permet de profiter des bienfaits de cette plante. Mais cela reste de l’alcool et plus spécifiquement un digestif.', 'Liqueur, verveine', '', 1),
(4, 'Fougasse aux grattons', 'La fougasse aux grattons est une gourmandise que l\'on grignote sans fin, avec des morceaux de porc frits. C\'est une tradition totalement irrésistible dans le Gard.', 'Grattons de canard, farine, eau, sel, poivre, levure, huile d\'olive', '', 12),
(5, 'Nougat d\'Alo', 'Mélange de miel, d\'amandes naturelles et de blanc d\'œuf battu en neige,  le nougat blanc de Provence est très tendre et onctueux.', 'Blanc d\'œuf, miel, amande, sucre', '', 12),
(6, 'Rinquinquin à la pêche', 'Le RinQuinQuin, surprenant mélange de pêches, de feuilles de pêchers, de sucre et de vin blanc est l’apéritif Provençal par excellence !', 'Pêche, sucre, vin blanc', '', 12),
(7, 'L\'omelette de la mère Poulard', 'L’ omelette de la mère Poulard est une spécialité culinaire normande du Mont-Saint-Michel . Il s’agit de nos jours d’une omelette soufflée, quelquefois additionnée de crème fraîche, dont le blanc et le jaune ont été, le plus souvent, battus séparément 1 et cuite à feu vif.', 'Œuf, beurre salé, crème fraiche', '', 8),
(8, 'Teurgoule', 'La Teurgoule est une sorte de gâteau de riz rond, à la cannelle, préparée et cuite dans une terrine, un plat de terre vernissé à l\'intérieur. Pendant le temps de la cuisson, la Teurgoule se recouvre d\'une peau épaisse et craquante.', 'Riz, lait, cannelle', '', 8),
(9, 'Pommeau de Normandie', 'Le Pommeau de Normandie est essentiellement utilisé comme un apéritif. Fruité et doux il se sert frais (de 8 à 10 °C). Il accompagne également le foie gras, le melon et les desserts au chocolat.', 'Pommes', '', 8),
(10, 'Pimentade', 'La pimentade est un mets créole typique de la cuisine guyanaise. Il s\'agit d\'un court-bouillon généralement à base de poisson et parfois de viande, accompagné d\'une sauce tomate et de piment.', 'Poisson, tomate, piment, oignons, bouquet garni, citron', '', 16),
(11, 'Gratin de papaye', 'Gratin populaire en Guyane.', 'Papaye verte, lardons fumés, tomme fraiche, épices, chapelure, oignons, béchamel', '', 16),
(12, 'Bière d\'ananas', 'Bière à l\'ananas légère et fruitée, avec un goût acidulé rafraîchissant.', 'Ananas', '', 16),
(13, 'Galette bretonne', 'La galette de sarrasin ou blé noir ( appelée ainsi en haute bretagne) ou crêpe traditionnelle (en basse bretagne) est un grand classique qui se mange à toute occasion.', 'Galette Sarazin, jambon, emmental, œufs', '', 3),
(14, 'Far breton', ' Le far breton (farz forn, far au four, en breton) est une pâtisserie et spécialité culinaire traditionnelle emblématique de la cuisine bretonne.', 'Farine, sucre, sucre vanillé, lait, pruneaux, rhum, œufs', '', 3),
(15, 'Cidre', 'Le cidre est une boisson alcoolisée titrant généralement entre 2 % vol. et 8 % vol. d\'alcool , obtenue à partir de la fermentation du jus de pomme.', 'Pomme', '', 3),
(16, 'Brocciu', 'Le Brocciu est un fromage de lactosérum fabriqué à partir du petit lait (lactosérum) de chèvre et/ou de brebis, récupéré après la fabrication fromagère. Au cours de la fabrication du Brocciu, on ajoute au petit lait du sel et du lait entier.', 'Lait de chèvre', '', 13),
(17, 'Fiadone', 'Sans doute le plus “corse” des desserts, le fiadone est une sorte de gâteau au fromage, de forme ronde ou rectangulaire, peu épais, au-dessus doré foncé par la cuisson.', 'Sucre, citron, brocciu, œufs', '', 13),
(18, 'Pietra', 'La Pietra est une bière ambrée, à 6° d\'alcool. Elle est brassée à partir d\'un mélange de malt et de farine de châtaignes issues de cultures corses.', 'Malt, farine de châtaignes', '', 13),
(19, 'Accras', 'Les accras de morue sont de petits beignets à la morue. Les accras peuvent être aussi préparés avec d’autres poissons ou avec des légumes. Ils sont servis en apéritif ou en entrée.', 'Morue, œufs, lait, farine, oignons, persil', '', 14),
(20, 'Tourments d\'amour', 'Le tourment d’amour est un gâteau traditionnel de la Guadeloupe, plus précisément des Saintes. C’est un petit trésor bien connu, composé de pâte brisée, de confiture exotique et de génoise. Il est vendu le plus souvent sous forme individuelle, comme une tartelette.', 'Pâte brisée, sucre de canne, farine, noix de coco, cannelle, crème pâtissière, muscade, citron, œufs', '', 14),
(21, 'Ti-punch', 'Un Ti’Rhum c’est un rhum arrangé, c’est-à-dire une boisson à base de rhum dans lequel on fait macérer des fruits, des épices, des herbes, des friandises, enfin à peu près tout ce qu’on veut selon les envies et goûts de chacun ! Alors, un Ti’Rhum se distingue d’un rhum arrangé « lambda » tout d’abord par la nature du rhum que l’on utilise.', 'Rhum, fruits, épices', '', 14),
(22, 'Aligot', 'L\'aligot est une préparation faite avec une purée de pommes de terre à laquelle sont mélangés de la crème, du beurre et de la tomme d\'aligot. On ajoute un peu d\'ail pilé ou haché finement. Cette préparation doit être longuement travaillée afin d\'obtenir une texture très élastique.', 'Pommes de terre, crème, beurre, tomme, ail', '', 10),
(23, 'Millas', 'Le millas désigne une spécialité répandue dans tout le Sud-Ouest. Dans l\'esprit d\'une revisite de polenta, il se compose tout simplement de farine de maïs cuite avec du liquide. La préparation se fige en refroidissant, avec une texture plus ou moins lisse ou granuleuse.', 'Lait, farine de maïs, sucre, beurre, sel, cognac, œufs', '', 10),
(24, 'Hypocras', 'Au moyen-âge, l\' hypocras était surtout un vin médicinal aux épices (les ingrédients ne se trouvaient que chez l\'apothicaire). On le servait pour requinquer les guerriers épuisés par les combats mais aussi comme boisson festive et pour le dessert avec des fruits secs et des gâteaux.', 'Vin', '', 10),
(25, 'Flammekueche', 'La flammekueche est souvent définie comme une pâte à pain étalée finement, garnie de fromage blanc, d’oignons et de lardons.', 'Farine, eau, huile, sel, fromage blanc, crème, oignon, lardons, poivre, muscade', '', 5),
(26, 'Kouglof', 'Il s\'agit d\'une brioche à pâte levée, dont l\'apparence est caractéristique en raison de son moule, qui lui donne une forme haute, cannelée et creusée en son milieu. Le kouglof peut être sucré, avec des raisins secs imbibés de rhum ou de kirsch et des amandes, ou salé, avec des lardons et des noix.', 'Raisins secs, farine, œufs, sucre, sel, lait, levure, beurre, amandes, sucre glace, eau, kisch', '', 5),
(27, 'Kirsch', 'Le kirsch est une eau-de-vie obtenue par simple ou double distillation de cerises fermentées, pulpes, jus et noyaux.', 'Alcool, cerises', '', 5),
(28, 'Rougails saucisses', 'Le rougail saucisse est un plat traditionnel réunionnais, à base de saucisses de porc ou de poulet préparées à la créole, souvent fumées, mais parfois fraîches. Celles-ci sont ensuite coupées en morceaux, auxquels on ajoute des tomates coupées en petits dés, des oignons émincés, et souvent des piments pour les personnes qui en mangent.', 'Saucisses, tomates, oignons, huile, ail, piment, riz', '', 17),
(29, 'Gâteau patate', 'Le gâteau patate est un gâteau à base de patates douces que l\'on consomme à l\' île de La Réunion.', 'Patates douces, farine, œufs, beurre, vanille, rhum', '', 17),
(30, 'Rhum arrangé', 'Le rhum arrangé est une préparation de rhum dans laquelle ont macéré divers ingrédients tels que des feuilles, des fruits, des graines, des écorces ou des friandises. C\'est une boisson emblématique à La Réunion.', 'Rhum, fruits, épices', '', 17),
(31, 'Fricadelle', 'Les fricadelles sont des boulettes aplaties de hachis de bœuf et de fines herbes rissolées au saindoux et, parfois, mouillées à la bière. ', 'Lait, oignon, muscade, persil, poivre, sel, huile, farine, viande', '', 6),
(32, 'Tarte au sucre', 'La vraie tarte au sucre est un gâteau composé de pâte briochée hyper moelleuse recouverte de sucre cassonade et de noisette de beurres.', 'Farine, levure, œuf, sucre, cassonade, beurre, lait, cassonade, crème', '', 6),
(33, 'Frênette', 'La Frênette est une boisson sans alcool à base de feuilles de frêne et de chicorée. C’est naturellement pétillant grâce à une fermentation très courte. A la dégustation, c’est léger et fin, peu sucrée et très rafraichissant.', 'Alcool, feuilles de frêne', '', 6),
(34, 'Bata-Bata', 'Condiments pouvant remplacer le riz ou les pâtes.', 'Bananes, manioc', '', 18),
(35, 'Gâteau de riz', 'Un gâteau de riz est un entremets servi froid ou tiède à base de riz au lait lié à l\'œuf, cuit au four dans un moule pour qu\'il prenne la consistance d\'un gâteau . Il est souvent servi avec des fruits et nappé de crème anglaise, caramel, chocolat, sauce, coulis, ou compote de fruits.', 'Riz, lait, œufs, beurre, cassonade, rhum, vanille', '', 18),
(36, 'Punch', 'Le punch, ou ponch traditionnellement appelé planteur dans les Antilles françaises, est un cocktail contenant la plupart du temps des fruits en morceaux et le jus de ces fruits. La recette connaît plusieurs variantes, alcoolisées ou non, certaines associées aux noms de personnes célèbres.', 'Rhum, fruits', '', 18),
(37, 'Poulet basquaise', 'Le poulet basquaise est un plat traditionnel et typique de la cuisine basque. C\'est une recette classique mais qui permet néanmoins de changer l\'ordinaire, pour un peu de folie culinaire dans votre assiette. ', 'Tomate, poivron, oignon, ail, poulet, vin blanc, huile, sel, poivre', '', 9),
(38, 'Cannelés', 'Le cannelé est une pâte à crêpes (donc très liquide) délicatement parfumée mais très sucrée, mise à cuire dans un petit récipient très conducteur de chaleur, ce qui assure une fine caramélisation extérieure tout en conservant un cœur moelleux. ', 'Lait, vanille, rhum, farine, sucre, beurre, sel, œufs', '', 9),
(39, 'Cognac', 'Le cognac est une eau-de-vie de vin, produite en France dans une région délimitée centrée autour de Cognac, englobant une grande partie de la Charente, la presque totalité de la Charente-Maritime, et quelques enclaves en Dordogne et dans les Deux-Sèvres.', 'Alcool', '', 9),
(40, 'Bœuf bourguignon', 'Le bœuf bourguignon est composé de morceaux de viande de bœuf, cuits à la cocotte dans une sauce bourguignonne, à base de vin rouge, avec une garniture aromatique composée d’oignons, d\'ail, de lardons et d\'un bouquet garni (qui est retiré au moment de la présentation finale du plat). ', 'Oignons, carottes, bouquet garni, vin rouge, beurre, sel, poivre, bœuf', '', 2),
(41, 'Galette franc-comtoise', 'La galette comtoise est une pâtisserie traditionnelle de la cuisine franc-comtoise, variante de galette des Rois à base de pâte à choux, aromatisée à la fleur d\'oranger, dont l’origine remonte au XIV siècle.', 'Lait, sucre, beurre, farine, eau de fleur d\'oranger, œufs', '', 2),
(42, 'Marc du jura', 'Marc du Jura du Domaine de Montbourgeau, distillation des grappes de raisin des 4 cépages majeurs du Jura (Chardonnay, Savagnin, Poulsard et Trousseau) qui sont conservées après le pressurage et distillées pendant l’hiver qui suit. Ce marc est ensuite mis en vieillissement quelques années avant d’être embouteillé.', 'Alcool', '', 2),
(43, 'Brochet au beurre blanc', 'Brochet cuit au beurre.', 'Vin blanc, eau, ail, oignons, thym, laurier, poivre, sel', '', 11),
(44, 'Gâteau nantais', 'Le gâteau nantais est, comme son nom l\'indique, une pâtisserie originaire de la ville de Nantes en France. Il s\'agit d\'un quatre-quarts moelleux, fait de beurre, de farine, de sucre, d’œufs, de poudre d’amande imbibé d’un punch au rhum et au citron, parfois recouvert d’une gelée d’abricot. Le dessus de ce gâteau de forme ronde est nappé d’un glaçage blanc au rhum .', 'Sucre, beurre, poudre d\'amandes, farine, œufs, rhum, sel, sucre glace', '', 11),
(45, 'Menthe pastille', 'La menthe-pastille a été inventée en 1885 par Émile Giffard, pharmacien herboriste à Angers qui rapporta d\'Angleterre des feuilles de menthe poivrée. Il prépara une liqueur rafraîchissante au goût des pastilles de menthe anglaise.', 'Alcool', '', 11),
(46, 'Croque-monsieur', 'Un croque-monsieur ou croquemonsieur est un sandwich chaud, originaire de France, à base de pain, de jambon blanc et de fromage (emmental, comté…), idéalement cuit à la cuisinière au feu de bois, au poêle à charbon ou même dans la cheminée grâce à un ustensile de cuisine spécialisé en fonte muni de longs manches (appelé « fer à croque-monsieur » ou « fer à sandwiches »), ou grillé à la poêle, au four, ou, depuis les années 1970-1980, dans un appareil électrique spécialisé.', 'Pain de mie, beurre, gruyère, poivre, sel, jambon', '', 7),
(47, 'Macaron', 'Le macaron est un petit gâteau français à l\'amande, granuleux et moelleux, à la forme arrondie, d\'environ 3 à 5 cm de diamètre, dérivé de la meringue.', 'Œufs, poudre d\'amandes, sucre glace, sucre, colorant alimentaire', '', 7),
(48, 'Clacquesin', 'Le Clacquesin est un apéritif français Parisien crée par Paul Clacquesin. En 1960 à Paris 6 ème, il est fabriqué à partir de bourgeons de pin norvégien et d\'un mélange de plantes aromatiques.', 'Alcool, plantes aromatiques', '', 7),
(49, 'Féroce d\'avocat', 'Le féroce d\'avocat est un mets à base d\'avocats écrasés, de morue salée préparée en chiquetaille, de piment et de divers autres ingrédients . Mise en bouche traditionnelle de la cuisine antillaise (en particulier en Martinique ), le féroce d\'avocat est surtout servi en apéritif ou en entrée.', 'Morue, avocat, manioc, cives, piment, ail, persil, huile, citron, poivre, sel', '', 15),
(50, 'Pain au beurre', 'Le pain au beurre est une spécialité Martiniquaise familiale . Sous formes de tresse simple, une couronne, un coeur, un fer à cheval … . Traditionnellement, il est servi aux premières communions (et aux communions solennelles). Aujourd’hui, il est présent à toute les occasions accompagné du chocolat créole.', 'Farine, beurre, sucre, lait, sel, levure, œufs', '', 15),
(51, 'Rhum de Martinique', ' Les Rhums agricoles blancs de la Martinique sont caractérisés par leur limpidité, leur faible agressivité et leur finesse arômatique qui présente des notes fruités (citron, fruits de la passion), floraux (sucre de canne, fleur d\'orangé), épicés (canelle, noix muscade) ou herbacés.', 'Rhum', '', 15);

-- --------------------------------------------------------

--
-- Structure de la table `preinscrit`
--

CREATE TABLE `preinscrit` (
  `id_animation` int(3) NOT NULL,
  `id_personne` int(3) NOT NULL,
  `nb_personne` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `id_region` int(3) NOT NULL,
  `nom_region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`id_region`, `nom_region`) VALUES
(1, 'Auvergne-Rhône-Alpes'),
(2, 'Bourgogne-Franche-Comté'),
(3, 'Bretagne '),
(4, 'Centre-Val de Loire'),
(5, 'Grand Est'),
(6, 'Hauts-de-France'),
(7, 'Ile-de-France'),
(8, 'Normandie'),
(9, 'Nouvelle-Aquitaine'),
(10, 'Occitanie'),
(11, 'Pays de la Loire'),
(12, 'Provence-Alpes-Côte d’Azur'),
(13, 'Corse'),
(14, 'Guadeloupe'),
(15, 'Martinique'),
(16, 'Guyane'),
(17, 'La Réunion'),
(18, 'Mayotte');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animation`
--
ALTER TABLE `animation`
  ADD PRIMARY KEY (`id_animation`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id_personne`);

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
  ADD PRIMARY KEY (`id_plat`),
  ADD KEY `id_region` (`id_region`);

--
-- Index pour la table `preinscrit`
--
ALTER TABLE `preinscrit`
  ADD PRIMARY KEY (`id_animation`,`id_personne`),
  ADD KEY `id_personne` (`id_personne`),
  ADD KEY `id_animation` (`id_animation`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animation`
--
ALTER TABLE `animation`
  MODIFY `id_animation` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id_personne` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `plat`
--
ALTER TABLE `plat`
  MODIFY `id_plat` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id_region` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `plat`
--
ALTER TABLE `plat`
  ADD CONSTRAINT `plat_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id_region`);

--
-- Contraintes pour la table `preinscrit`
--
ALTER TABLE `preinscrit`
  ADD CONSTRAINT `preinscrit_ibfk_1` FOREIGN KEY (`id_animation`) REFERENCES `animation` (`id_animation`),
  ADD CONSTRAINT `preinscrit_ibfk_2` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
