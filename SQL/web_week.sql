-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 oct. 2022 à 10:23
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

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
  `nom_animation_anglais` text NOT NULL,
  `description_animation` text NOT NULL,
  `description_animation_anglais` text NOT NULL,
  `type_animation` text NOT NULL,
  `type_animation_anglais` text NOT NULL,
  `date_animation` date NOT NULL,
  `horaire_debut` time NOT NULL,
  `horaire_fin` time NOT NULL,
  `nb_places` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `animation`
--

INSERT INTO `animation` (`id_animation`, `nom_animation`, `nom_animation_anglais`, `description_animation`, `description_animation_anglais`, `type_animation`, `type_animation_anglais`, `date_animation`, `horaire_debut`, `horaire_fin`, `nb_places`) VALUES
(1, 'Concours', 'Competition', 'Concours des meilleurs plats, jugés par un jury composé de cuisiniers et de spectateurs. ', 'Competition for the best dishes, judged by a jury made up of cooks and spectators.', 'Concours', 'Competition', '2023-05-21', '14:00:00', '22:00:00', 700),
(2, 'Cuisiner une croziflette', 'Cook a croziflette', 'Cette animation va vous permettre d\'apprendre à cuisiner votre propre croziflette ! En petit groupe, avec les aliments et le matériel fournis, vous serez encadrés d\'un chef spécialiste de ce plat.', 'This animation will allow you to learn how to cook your own croziflette! In a small group, with the food and equipment provided, you will be supervised by a chef who specializes in this dish.', 'Apprentissage', 'Learning', '2023-05-19', '14:00:00', '16:00:00', 300),
(3, 'Cuisiner une galette bretone', 'Cook a Breton buckwheat pancake', 'Cette animation va vous permettre d\'apprendre à cuisiner votre propre galette bretone ! En petit groupe, avec les aliments et le matériel fournis, vous serez encadrés d\'un chef spécialiste de ce plat.', 'This animation will allow you to learn how to cook your own buckwheat pancake! In a small group, with the food and equipment provided, you will be supervised by a chef who specializes in this dish.', 'Apprentissage', 'Learning', '2023-05-19', '18:00:00', '20:00:00', 300),
(4, 'Cuisiner une flammekueche', 'Cook a flammekueche', 'Cette animation va vous permettre d\'apprendre à cuisiner votre propre flammekueche ! En petit groupe, avec les aliments et le matériel fournis, vous serez encadrés d\'un chef spécialiste de ce plat.', 'This animation will allow you to learn how to cook your own flammekueche! In a small group, with the food and equipment provided, you will be supervised by a chef who specializes in this dish.', 'Apprentissage', 'Learning', '2023-05-20', '14:00:00', '16:00:00', 300),
(5, 'Cuisiner un bœuf bourguignon', 'Cook beef bourguignon', 'Cette animation va vous permettre d\'apprendre à cuisiner votre propre bœuf bourguignon ! En petit groupe, avec les aliments et le matériel fournis, vous serez encadrés d\'un chef spécialiste de ce plat.', 'This animation will allow you to learn how to cook your own beef bourguignon! In a small group, with the food and equipment provided, you will be supervised by a chef who specializes in this dish.', 'Apprentissage', 'Learning', '2023-05-20', '18:00:00', '20:00:00', 300),
(6, 'Histoire du macaron', 'History of the macaron', 'Durant ce spectacle, l\'histoire du macaron vous sera comptée sous forme de pièce de théâtre.', 'During this show, the story of the macaron will be told to you in the form of a play.', 'Spectacle', 'Show', '2023-05-19', '16:30:00', '17:30:00', 20),
(7, 'Histoire des cannelés', 'History of canelés', 'Durant ce spectacle, l\'histoire des cannelés vous sera comptée sous forme de pièce de théâtre.', 'During this show, the story of the canelés will be told to you in the form of a play.', 'Spectacle', 'Show', '2023-05-20', '11:30:00', '12:30:00', 20),
(8, 'Histoire de la tarte au sucre', 'History of sugar pie', 'Durant ce spectacle, l\'histoire de la tarte au sucre vous sera comptée sous forme de pièce de théâtre.', 'During this show, the story of the sugar pie will be told to you in the form of a play.', 'Spectacle', 'Show', '2023-05-20', '16:30:00', '17:30:00', 20),
(9, 'Histoire du far breton', 'History of far Breton', 'Durant ce spectacle, l\'histoire du far breton vous sera comptée sous forme de pièce de théâtre.', 'During this show, the story of the far Breton will be told to you in the form of a play.', 'Spectacle', 'Show', '2023-05-21', '11:30:00', '12:30:00', 20);

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
  `nom_plat_anglais` text NOT NULL,
  `description_plat` text NOT NULL,
  `description_plat_anglais` text NOT NULL,
  `ingredients_plat` text NOT NULL,
  `ingredients_plat_anglais` text NOT NULL,
  `image_plat` text NOT NULL,
  `id_region` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`id_plat`, `nom_plat`, `nom_plat_anglais`, `description_plat`, `description_plat_anglais`, `ingredients_plat`, `ingredients_plat_anglais`, `image_plat`, `id_region`) VALUES
(1, 'Croziflette', 'Croziflette', 'La croziflette est un plat savoyard réalisé à partir de crozets, ces pâtes de sarrasin typiques de la région. Il s’agit d’une recette proche de la tartiflette, ou les crozets remplacent les pommes de terre !', 'Croziflette is a Savoyard dish made from crozets, the buckwheat pasta typical of the region. This is a recipe similar to tartiflette, where crozets replace potatoes!', 'Crozets, chèvre, poivre, sel, oignon, lardons', 'Crozets, goat cheese, pepper, salt, onion, bacon', '', 1),
(2, 'Truffade', 'Truffade', 'La truffade est un plat, préparé auparavant l’été par les bergers dans les burons. Elle doit son nom au mot Trufada, qui signifie pomme de terre en patois.\r\nÀ base de pomme de terre et de tomme fraîche de cantal, c’est un plat savoureux et généreux, limite régressif !', 'The truffade is a dish, previously prepared in the summer by the shepherds in the burons. It owes its name to the word Trufada, which means potato in patois.\r\nBased on potatoes and fresh tomme cheese from Cantal, it is a tasty and generous dish.', 'Pomme de terre, lard blanc, ail, Tomme fraiche d\'Aubrac, sel, poivre', 'Potatoes, white bacon, garlic, fresh Aubrac Tomme cheese, salt, pepper', '', 1),
(3, 'Liqueur de verveine', 'Verbena liqueur', 'La liqueur de verveine permet de profiter des bienfaits de cette plante. Mais cela reste de l’alcool et plus spécifiquement un digestif.', 'Verbena liqueur allows you to take advantage of the benefits of this plant. But it is alcohol and more specifically a digestive.', 'Liqueur, verveine', 'Liqueur, verbena', '', 1),
(4, 'Fougasse aux grattons', 'Fougasse with pork scratchings', 'La fougasse aux grattons est une gourmandise que l\'on grignote sans fin, avec des morceaux de porc frits. C\'est une tradition totalement irrésistible dans le Gard.', 'Fougasse with pork scratchings is a delicacy that we nibble endlessly, with fried pieces of pork. It is a totally irresistible tradition in the Gard.', 'Grattons, farine, eau, sel, poivre, levure, huile d\'olive', 'Pork scratchings, flour, water, salt, pepper, yeast, olive oil', '', 12),
(5, 'Nougat d\'allauch', 'Allauch nougat', 'Mélange de miel, d\'amandes naturelles et de blanc d\'œuf battu en neige,  le nougat blanc de Provence est très tendre et onctueux.', 'With a mixture of honey, natural almonds and beaten egg white, the white nougat from Provence is very soft and creamy.', 'Blanc d\'œuf, miel, amande, sucre', 'Egg white, honey, almond, sugar', '', 12),
(6, 'Rinquinquin à la pêche', 'Peach Rinquinquin', 'Le RinQuinQuin, surprenant mélange de pêches, de feuilles de pêchers, de sucre et de vin blanc, est l’apéritif Provençal par excellence !', 'RinQuinQuin, a surprising blend of peaches, peach leaves, sugar and white wine, is the Provençal aperitif par excellence!', 'Pêche, sucre, vin blanc', 'Peach, sugar, white wine', '', 12),
(7, 'L\'omelette de la mère Poulard', 'Mother Poulard\'s omelette', 'L’omelette de la mère Poulard est une spécialité culinaire normande du Mont-Saint-Michel . Il s’agit de nos jours d’une omelette soufflée, quelquefois additionnée de crème fraîche, dont le blanc et le jaune ont été, le plus souvent, battus séparément 1 et cuite à feu vif.', 'Mother Poulard\'s omelet is a Norman culinary specialty of Mont-Saint-Michel. It is nowadays a puffed omelette, sometimes with fresh cream, whose white and yolk have usually been beaten separately 1 and cooked over high heat.', 'Œuf, beurre salé, crème fraiche', 'Egg, salted butter, fresh cream', '', 8),
(8, 'Teurgoule', 'Teurgoule', 'La Teurgoule est une sorte de gâteau de riz rond, à la cannelle, préparée et cuite dans une terrine, un plat de terre vernissé à l\'intérieur. Pendant le temps de la cuisson, le dessus du Teurgoule devient épais et craquant.', 'Teurgoule is a kind of round rice cake, with cinnamon, prepared and cooked in a terrine. During the cooking time, the top of the Teurgoule becomes thick and crunchy.', 'Riz, lait, cannelle', 'Rice, milk, cinnamon', '', 8),
(9, 'Pommeau de Normandie', 'Normandy Pommeau', 'Le Pommeau de Normandie est essentiellement utilisé comme un apéritif. Fruité et doux il se sert frais (de 8 à 10 °C). Il accompagne également le foie gras, le melon et les desserts au chocolat.', 'Normandy Pommeau is mainly used as an aperitif. Fruity and sweet, it should be served chilled (8 to 10°C). It also accompanies foie gras, melon and chocolate desserts.', 'Pommes', 'Apples', '', 8),
(10, 'Pimentade', 'Pimentade', 'La pimentade est un mets créole typique de la cuisine guyanaise. Il s\'agit d\'un court-bouillon généralement à base de poisson et parfois de viande, accompagné d\'une sauce tomate et de piment.', 'Pimentade is a typical Creole dish of Guyanese cuisine. It is a court-bouillon usually made with fish and sometimes meat, accompanied by a tomato and chilli sauce.', 'Poisson, tomate, piment, oignons, bouquet garni, citron', 'Fish, tomato, pepper, onions, bouquet garni, lemon', '', 16),
(11, 'Gratin de papaye', 'Papaya gratin', 'Gratin populaire en Guyane.', 'Popular gratin in Guyana.', 'Papaye verte, lardons fumés, tomme fraiche, épices, chapelure, oignons, béchamel', 'Green papaya, smoked bacon, fresh tomme, spices, breadcrumbs, onions, béchamel sauce', '', 16),
(12, 'Bière d\'ananas', 'Pineapple beer', 'Bière à l\'ananas légère et fruitée, avec un goût acidulé rafraîchissant.', 'Light and fruity pineapple beer, with a refreshing acid taste.', 'Ananas', 'Pineapple', '', 16),
(13, 'Galette bretonne', 'Breton buckwheat pancake', 'La galette de sarrasin ou blé noir ( appelée ainsi en haute bretagne) ou crêpe traditionnelle (en basse bretagne) est un grand classique qui se mange à toute occasion.', 'The buckwheat pancake or buckwheat (so called in Upper Brittany) or traditional crepe (in Lower Brittany) is a great classic that can be eaten on any occasion.', 'Galette Sarazin, jambon, emmental, œufs', 'Breton buckwheat pancake, ham, emmental cheese, eggs', '', 3),
(14, 'Far breton', 'Breton Far', 'Le far breton (farz forn, far au four, en breton) est une pâtisserie et spécialité culinaire traditionnelle emblématique de la cuisine bretonne.', 'Far Breton (farz forn, far in the oven, in Breton) is a traditional pastry and culinary specialty emblematic of Breton cuisine.', 'Farine, sucre, sucre vanillé, lait, pruneaux, rhum, œufs', 'Flour, sugar, vanilla sugar, milk, prunes, rum, eggs', '', 3),
(15, 'Cidre', 'Cider', 'Le cidre est une boisson alcoolisée titrant généralement entre 2 % vol. et 8 % vol. d\'alcool , obtenue à partir de la fermentation du jus de pomme.', 'Cider is an alcoholic beverage generally containing between 2% vol. and 8% vol. of alcohol, obtained from the fermentation of apple juice.', 'Pomme', 'Apple', '', 3),
(16, 'Brocciu', 'Brocciu', 'Le Brocciu est un fromage de lactosérum fabriqué à partir du petit lait (lactosérum) de chèvre et/ou de brebis, récupéré après la fabrication fromagère. Au cours de la fabrication du Brocciu, on ajoute au petit lait du sel et du lait entier.', 'Brocciu is a cheese made from goat\'s and/or sheep\'s whey, recovered after cheese making. During the production of Brocciu, salt and whole milk are added to the whey.', 'Lait de chèvre', 'Goat\'s milk', '', 13),
(17, 'Fiadone', 'Fiadone', 'Sans doute le plus “corse” des desserts, le fiadone est une sorte de gâteau au fromage, de forme ronde ou rectangulaire, peu épais, au-dessus doré foncé par la cuisson.', 'Undoubtedly the most \"Corsican\" of desserts, the fiadone is a kind of round or rectangular, thin, cheese cake.', 'Sucre, citron, brocciu, œufs', 'Sugar, lemon, brocciu, eggs', '', 13),
(18, 'Pietra', 'Pietra', 'La Pietra est une bière ambrée, à 6° d\'alcool. Elle est brassée à partir d\'un mélange de malt et de farine de châtaignes issues de cultures corses.', 'La Pietra is an amber beer, with 6° alcohol. It is brewed from a mixture of malt and chestnut flour from Corsican cultures.', 'Malt, farine de châtaignes', 'Malt, chestnut flour', '', 13),
(19, 'Accras', 'Accras', 'Les accras de morue sont de petits beignets à la morue. Les accras peuvent être aussi préparés avec d’autres poissons ou avec des légumes. Ils sont servis en apéritif ou en entrée.', 'Cod accras are small cod fritters. Accras can also be prepared with other fish or with vegetables. They are served as an aperitif or as a starter.', 'Morue, œufs, lait, farine, oignons, persil', 'Cod, eggs, milk, flour, onions, parsley', '', 14),
(20, 'Tourments d\'amour', 'Torments of love', 'Le tourment d’amour est un gâteau traditionnel de la Guadeloupe, plus précisément des Saintes. C’est un petit trésor bien connu, composé de pâte brisée, de confiture exotique et de génoise. Il est vendu le plus souvent sous forme individuelle, comme une tartelette.', 'The torment of love is a traditional cake from Guadeloupe, more precisely from Les Saintes. It is a well-known little treasure, made up of shortcrust pastry, exotic jam and sponge cake. It is most often sold in individual form, as a tartlet.', 'Pâte brisée, sucre de canne, farine, noix de coco, cannelle, crème pâtissière, muscade, citron, œufs', 'Shortcrust pastry, cane sugar, flour, coconut, cinnamon, pastry cream, nutmeg, lemon, eggs', '', 14),
(21, 'Ti-punch', 'Ti-punch', 'Un Ti’Rhum c’est un rhum arrangé, c’est-à-dire une boisson à base de rhum dans lequel on fait macérer des fruits, des épices, des herbes, des friandises, enfin à peu près tout ce qu’on veut selon les envies et goûts de chacun ! Alors, un Ti’Rhum se distingue d’un rhum arrangé « lambda » tout d’abord par la nature du rhum que l’on utilise.', 'A Ti\'Rhum is an arranged rum, that is to say a rum-based drink in which you macerate fruits, spices, herbs, sweets, well almost everything you wants according to the desires and tastes of each! So, a Ti’Rhum is distinguished from a “lambda” arranged rum by the nature of the rum that is used.', 'Rhum, fruits, épices', 'Rum, fruits, spices', '', 14),
(22, 'Aligot', 'Aligot', 'L\'aligot est une préparation faite avec une purée de pommes de terre à laquelle sont mélangés de la crème, du beurre et de la tomme d\'aligot. On ajoute un peu d\'ail pilé ou haché finement. Cette préparation doit être longuement travaillée afin d\'obtenir une texture très élastique.', 'Aligot is a preparation made with mashed potatoes mixed with cream, butter and Tomme d\'aligot. Add a little crushed or finely chopped garlic. This preparation must be moulded for a long time in order to obtain a very elastic texture.', 'Pommes de terre, crème, beurre, tomme, ail', 'Potatoes, cream, butter, tomme cheese, garlic', '', 10),
(23, 'Millas', 'Millas', 'Le millas désigne une spécialité répandue dans tout le Sud-Ouest. Dans l\'esprit d\'une revisite de polenta, il se compose tout simplement de farine de maïs cuite avec du liquide. La préparation se fige en refroidissant, avec une texture plus ou moins lisse ou granuleuse.', 'The millas designates a specialty widespread throughout the Southwest. In the spirit of a revisit of polenta, it consists simply of corn flour cooked with liquid. The preparation freezes on cooling, with a more or less smooth or grainy texture.', 'Lait, farine de maïs, sucre, beurre, sel, cognac, œufs', 'Milk, corn flour, sugar, butter, salt, cognac, eggs', '', 10),
(24, 'Hypocras', 'Hypocras', 'Au moyen-âge, l\'hypocras était surtout un vin médicinal aux épices (les ingrédients ne se trouvaient que chez l\'apothicaire). On le servait pour requinquer les guerriers épuisés par les combats mais aussi comme boisson festive et pour le dessert avec des fruits secs et des gâteaux.', 'In the Middle Ages, hypocras was a medicinal wine with spices (the ingredients could only be found at the apothecary). It was served to perk up exhausted warriors but also as a festive drink and for dessert with dried fruits and cakes.', 'Vin', 'Wine', '', 10),
(25, 'Flammekueche', 'Flammekueche', 'La flammekueche est souvent définie comme une pâte à pain étalée finement, garnie de fromage blanc, d’oignons et de lardons.', 'Flammkueche is often defined as a thinly rolled out bread dough, topped with fromage blanc, onions and bacon bits.', 'Farine, eau, huile, sel, fromage blanc, crème, oignon, lardons, poivre, muscade', 'Flour, water, oil, salt, cottage cheese, cream, onion, bacon bits, pepper, nutmeg', '', 5),
(26, 'Kouglof', 'Kouglof', 'Il s\'agit d\'une brioche à pâte levée, dont l\'apparence est caractéristique en raison de son moule, qui lui donne une forme haute, cannelée et creusée en son milieu. Le kouglof peut être sucré, avec des raisins secs imbibés de rhum ou de kirsch et des amandes, ou salé, avec des lardons et des noix.', 'It is a leavened pastry brioche, whose appearance is characteristic due to its baking pan, which gives it a high, fluted shape with a hollow in the middle. The kouglof can be sweet, with raisins soaked in rum or kirsch and almonds, or savory, with bacon bits and nuts.', 'Raisins secs, farine, œufs, sucre, sel, lait, levure, beurre, amandes, sucre glace, eau, kisch', 'Raisins, flour, eggs, sugar, salt, milk, yeast, butter, almonds, icing sugar, water, kisch', '', 5),
(27, 'Kirsch', 'Kirsch', 'Le kirsch est une eau-de-vie obtenue par simple ou double distillation de cerises fermentées, pulpes, jus et noyaux.', 'Kirsch is an eau-de-vie obtained by single or double distillation of fermented cherries, pulps, juices and pits.', 'Alcool, cerises', 'Alcohol, cherries', '', 5),
(28, 'Rougails saucisses', 'Rougails sausages', 'Le rougail saucisse est un plat traditionnel réunionnais, à base de saucisses de porc ou de poulet préparées à la créole, souvent fumées, mais parfois fraîches. Celles-ci sont ensuite coupées en morceaux, auxquels on ajoute des tomates coupées en petits dés, des oignons émincés, et souvent des piments pour les personnes qui en mangent.', 'Sausage rougail is a traditional Reunionese dish, made with pork or chicken sausages prepared in the Creole style, often smoked, but sometimes fresh. These are then cut into pieces, to which are added diced tomatoes, minced onions, and often peppers for those who eat them.', 'Saucisses, tomates, oignons, huile, ail, piment, riz', 'Sausages, tomatoes, onions, oil, garlic, chilli, rice', '', 17),
(29, 'Gâteau patate', 'Potato cake', 'Le gâteau patate est un gâteau à base de patates douces que l\'on consomme à l\' île de La Réunion.', 'Potato cake is a cake made from sweet potatoes that is eaten on Reunion Island.', 'Patates douces, farine, œufs, beurre, vanille, rhum', 'Sweet potatoes, flour, eggs, butter, vanilla, rum', '', 17),
(30, 'Rhum arrangé', 'Infused rum', 'Le rhum arrangé est une préparation de rhum dans laquelle ont macéré divers ingrédients tels que des feuilles, des fruits, des graines, des écorces ou des friandises. C\'est une boisson emblématique à La Réunion.', 'Infused rum is a rum preparation in which various ingredients such as leaves, fruits, seeds, bark or sweets have macerated. It is an emblematic drink in Reunion.', 'Rhum, fruits, épices', 'Rum, fruits, spices', '', 17),
(31, 'Fricadelle', 'Fricadelle', 'Les fricadelles sont des boulettes aplaties de hachis de bœuf et de fines herbes rissolées au saindoux et, parfois, mouillées à la bière. ', 'Fricadelles are flattened balls of minced beef and fine herbs browned in lard and, sometimes, moistened with beer.', 'Lait, oignon, muscade, persil, poivre, sel, huile, farine, viande', 'Milk, onion, nutmeg, parsley, pepper, salt, oil, flour, meat', '', 6),
(32, 'Tarte au sucre', 'Sugar Pie', 'La vraie tarte au sucre est un gâteau composé de pâte briochée hyper moelleuse recouverte de sucre cassonade et de noisette de beurres.', 'The sugar pie is a cake made of super soft brioche dough covered with brown sugar and hazelnut butter.', 'Farine, levure, œuf, sucre, cassonade, beurre, lait, cassonade, crème', 'Flour, yeast, egg, sugar, brown sugar, butter, milk, brown sugar, cream', '', 6),
(33, 'Frênette', 'Frênette', 'La Frênette est une boisson sans alcool à base de feuilles de frêne et de chicorée. C’est naturellement pétillant grâce à une fermentation très courte. A la dégustation, c’est léger et fin, peu sucrée et très rafraichissant.', 'La Frênette is a non-alcoholic drink made from ash leaves and chicory. It is naturally sparkling thanks to a very short fermentation. On tasting, it is light and fine, not very sweet and very refreshing.', 'Alcool, feuilles de frêne', 'Alcohol, ash leaves', '', 6),
(34, 'Bata-Bata', 'Bata-Bata', 'Condiments pouvant remplacer le riz ou les pâtes.', 'Condiments that can replace rice or pasta.', 'Bananes, manioc', 'Bananas, cassava', '', 18),
(35, 'Gâteau de riz', 'Rice cake', 'Un gâteau de riz est un entremets servi froid ou tiède à base de riz au lait avec de l\'œuf, cuit au four dans un moule pour qu\'il prenne la consistance d\'un gâteau . Il est souvent servi avec des fruits et nappé de crème anglaise, caramel, chocolat, sauce, coulis, ou compote de fruits.', 'A rice cake is a dessert served cold or warm based on rice pudding with egg, baked in a baking pan so that it takes on the consistency of a cake. It is often served with fruit and topped with custard, caramel, chocolate, sauce, coulis, or fruit compote.', 'Riz, lait, œufs, beurre, cassonade, rhum, vanille', 'Rice, milk, eggs, butter, brown sugar, rum, vanilla', '', 18),
(36, 'Punch', 'Punch', 'Le punch, ou ponch traditionnellement appelé planteur dans les Antilles françaises, est un cocktail contenant la plupart du temps des fruits en morceaux et le jus de ces fruits. La recette connaît plusieurs variantes, alcoolisées ou non, certaines associées aux noms de personnes célèbres.', 'The punch, or ponch traditionally called planter in the French West Indies, is a cocktail containing most of the time pieces of fruit and the juice of these fruits. The recipe has several variations, alcoholic or not, some associated with the names of famous people.', 'Rhum, fruits', 'Rum, fruit', '', 18),
(37, 'Poulet basquaise', 'Basque chicken', 'Le poulet basquaise est un plat traditionnel et typique de la cuisine basque. C\'est une recette classique mais qui permet néanmoins de changer l\'ordinaire, pour un peu de folie culinaire dans votre assiette. ', 'Basque chicken is a traditional and typical dish of Basque cuisine. It is a classic recipe but which nevertheless allows you to change the ordinary, for a little culinary madness on your plate.', 'Tomate, poivron, oignon, ail, poulet, vin blanc, huile, sel, poivre', 'Tomato, pepper, onion, garlic, chicken, white wine, oil, salt, pepper', '', 9),
(38, 'Cannelés', 'Cannelés', 'Le cannelé est une pâte à crêpes (donc très liquide) délicatement parfumée mais très sucrée, mise à cuire dans un petit récipient très conducteur de chaleur, ce qui assure une fine caramélisation extérieure tout en conservant un cœur moelleux. ', 'The cannelé is a pancake batter (therefore very liquid) delicately flavored but very sweet, cooked in a small container that conducts heat very well, which ensures a fine caramelization on the outside while maintaining a soft center.', 'Lait, vanille, rhum, farine, sucre, beurre, sel, œufs', 'Milk, vanilla, rum, flour, sugar, butter, salt, eggs', '', 9),
(39, 'Cognac', 'Cognac', 'Le cognac est une eau-de-vie de vin, produite en France dans une région délimitée centrée autour de Cognac, englobant une grande partie de la Charente, la presque totalité de la Charente-Maritime, et quelques enclaves en Dordogne et dans les Deux-Sèvres.', 'Cognac is a wine brandy, produced in France in a demarcated region centered around Cognac, including much of Charente, almost all of Charente-Maritime, and a few enclaves in Dordogne and Deux -Sevres.', 'Alcool', 'Alcohol', '', 9),
(40, 'Bœuf bourguignon', 'Beef bourguignon', 'Le bœuf bourguignon est composé de morceaux de viande de bœuf, cuits à la cocotte dans une sauce bourguignonne, à base de vin rouge, avec une garniture aromatique composée d’oignons, d\'ail, de lardons et d\'un bouquet garni (qui est retiré au moment de la présentation finale du plat). ', 'Beef bourguignon is made up of pieces of beef, cooked in a casserole in a bourguignonne sauce, made from red wine, with an aromatic garnish made up of onions, garlic, bacon bits and a bouquet garni (which is pull out at the time of the final presentation of the dish).', 'Oignons, carottes, bouquet garni, vin rouge, beurre, sel, poivre, bœuf', 'Onions, carrots, bouquet garni, red wine, butter, salt, pepper, beef', '', 2),
(41, 'Galette franc-comtoise', 'Franche-Comté galette', 'La galette comtoise est une pâtisserie traditionnelle de la cuisine franc-comtoise, variante de galette des Rois à base de pâte à choux, aromatisée à la fleur d\'oranger, dont l’origine remonte au XIV siècle.', 'The galette comtoise is a traditional pastry from Franche-Comté cuisine, a variant of galette des Rois made from choux pastry, flavored with orange blossom water, whose origin dates back to the 14th century.', 'Lait, sucre, beurre, farine, eau de fleur d\'oranger, œufs', 'Milk, sugar, butter, flour, orange blossom water, eggs', '', 2),
(42, 'Marc du jura', 'Marc du jura', 'Marc du Jura du Domaine de Montbourgeau, distillation des grappes de raisin des 4 cépages majeurs du Jura (Chardonnay, Savagnin, Poulsard et Trousseau) qui sont conservées après le pressurage et distillées pendant l’hiver qui suit. Ce marc est ensuite mis en vieillissement quelques années avant d’être embouteillé.', 'Marc du Jura from Domaine de Montbourgeau, distillation of grapes from the 4 major Jura grape varieties (Chardonnay, Savagnin, Poulsard and Trousseau) which are kept after pressing and distilled during the following winter. This marc is then aged for a few years before being bottled.', 'Alcool', 'Alcohol', '', 2),
(43, 'Brochet au beurre blanc', 'Pike with white butter sauce', 'Brochet cuit au beurre.', 'Pike cooked in butter.', 'Vin blanc, eau, ail, oignons, thym, laurier, poivre, sel', 'White wine, water, garlic, onions, thyme, bay leaf, pepper, salt', '', 11),
(44, 'Gâteau nantais', 'Nantais cake', 'Le gâteau nantais est, comme son nom l\'indique, une pâtisserie originaire de la ville de Nantes en France. Il s\'agit d\'un quatre-quarts moelleux, fait de beurre, de farine, de sucre, d’œufs, de poudre d’amande imbibé d’un punch au rhum et au citron, parfois recouvert d’une gelée d’abricot. Le dessus de ce gâteau de forme ronde est nappé d’un glaçage blanc au rhum .', 'Nantes cake is, as its name suggests, a pastry originating from the city of Nantes in France. It is a soft pound cake, made with butter, flour, sugar, eggs, ground almonds soaked in a rum and lemon punch, sometimes covered with a jelly of apricot. The top of this round-shaped cake is coated with a white rum frosting.', 'Sucre, beurre, poudre d\'amandes, farine, œufs, rhum, sel, sucre glace', 'Sugar, butter, almond\'s powder, flour, eggs, rum, salt, icing sugar', '', 11),
(45, 'Menthe pastille', 'Mint lozenge', 'La menthe-pastille a été inventée en 1885 par Émile Giffard, pharmacien herboriste à Angers qui rapporta d\'Angleterre des feuilles de menthe poivrée. Il prépara une liqueur rafraîchissante au goût des pastilles de menthe anglaise.', 'The mint-pastille was invented in 1885 by Émile Giffard, an herbal pharmacist in Angers who brought peppermint leaves from England. He prepared a refreshing liqueur with the taste of English peppermints.', 'Alcool', 'Alcohol', '', 11),
(46, 'Croque-monsieur', 'Croque-monsieur', 'Un croque-monsieur ou croquemonsieur est un sandwich chaud, originaire de France, à base de pain, de jambon blanc et de fromage (emmental, comté…), idéalement cuit à la cuisinière au feu de bois, au poêle à charbon ou même dans la cheminée grâce à un ustensile de cuisine spécialisé en fonte muni de longs manches (appelé « fer à croque-monsieur » ou « fer à sandwiches »), ou grillé à la poêle, au four, ou, depuis les années 1970-1980, dans un appareil électrique spécialisé.', 'A croque-monsieur or croquemonsieur is a hot sandwich, originating in France, made with bread, ham and cheese (Emmental, Comté, etc.), ideally cooked on the stove over a wood fire, in a charcoal stove or even in a the fireplace using a specialized cast-iron kitchen utensil with long handles (called a “croque-monsieur iron” or “sandwich iron”), or grilled in a pan, in the oven, or, since the 1970s and 1980s, in a specialized electrical device.', 'Pain de mie, beurre, gruyère, poivre, sel, jambon', 'Sandwich bread, butter, gruyère, pepper, salt, ham', '', 7),
(47, 'Macaron', 'Macaron', 'Le macaron est un petit gâteau français à l\'amande, granuleux et moelleux, à la forme arrondie, d\'environ 3 à 5 cm de diamètre, dérivé de la meringue.', 'The macaroon is a small French almond cake, grainy and soft, with a rounded shape, about 3 to 5 cm in diameter, derived from the meringue.', 'Œufs, poudre d\'amandes, sucre glace, sucre, colorant alimentaire', 'Eggs, ground almonds, icing sugar, sugar, food coloring', '', 7),
(48, 'Clacquesin', 'Clacquesin', 'Le Clacquesin est un apéritif français Parisien crée par Paul Clacquesin. En 1960 à Paris 6 ème, il est fabriqué à partir de bourgeons de pin norvégien et d\'un mélange de plantes aromatiques.', 'Clacquesin is a French Parisian aperitif created by Paul Clacquesin. In 1960 in Paris 6th, it is made from Norwegian pine buds and a mixture of aromatic plants.', 'Alcool, plantes aromatiques', 'Alcohol, aromatic plants', '', 7),
(49, 'Féroce d\'avocat', 'Féroce d\'avocat', 'Le féroce d\'avocat est un mets à base d\'avocats écrasés, de morue salée préparée en chiquetaille, de piment et de divers autres ingrédients . Mise en bouche traditionnelle de la cuisine antillaise (en particulier en Martinique ), le féroce d\'avocat est surtout servi en apéritif ou en entrée.', '\"Féroce d\'avocat\" is a dish made with mashed avocados, salt cod prepared in chiquetaille, chilli and various other ingredients. A traditional appetizer of West Indian cuisine (particularly in Martinique), \"féroce d\'avocat\" is mostly served as an aperitif or starter.', 'Morue, avocat, manioc, cives, piment, ail, persil, huile, citron, poivre, sel', 'Cod, avocado, cassava, chives, chilli, garlic, parsley, oil, lemon, pepper, salt', '', 15),
(50, 'Pain au beurre', 'Buttered bread', 'Le pain au beurre est une spécialité Martiniquaise familiale . Sous formes de tresse simple, une couronne, un coeur, un fer à cheval … . Traditionnellement, il est servi aux premières communions (et aux communions solennelles). Aujourd’hui, il est présent à toute les occasions accompagné du chocolat créole.', 'Bread with butter is a family specialty from Martinique. In the form of a simple braid, a crown, a heart, a horseshoe…. Traditionally, it is served at first communions (and solemn communions). Today, it is present on all occasions accompanied by Creole chocolate.', 'Farine, beurre, sucre, lait, sel, levure, œufs', 'Flour, butter, sugar, milk, salt, yeast, eggs', '', 15),
(51, 'Rhum de Martinique', 'Rum from Martinique', 'Les Rhums agricoles blancs de la Martinique sont caractérisés par leur limpidité, leur faible agressivité et leur finesse arômatique qui présente des notes fruités (citron, fruits de la passion), floraux (sucre de canne, fleur d\'orangé), épicés (canelle, noix muscade) ou herbacés.', 'The white agricultural rums from Martinique are characterized by their clarity, their low aggressiveness and their aromatic finesse which presents fruity (lemon, passion fruit), floral (cane sugar, orange blossom), spicy (cinnamon, nutmeg) or herbaceous.', 'Rhum', 'Rum', '', 15);

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
