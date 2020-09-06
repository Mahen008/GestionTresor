-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 06 sep. 2020 à 21:32
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestiontresor`
--

-- --------------------------------------------------------

--
-- Structure de la table `devise`
--

CREATE TABLE `devise` (
  `id` int(11) NOT NULL,
  `numcpt` varchar(13) NOT NULL,
  `devise` varchar(5) NOT NULL,
  `ninf` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `devise`
--

INSERT INTO `devise` (`id`, `numcpt`, `devise`, `ninf`) VALUES
(5, '1621-08-150', 'USD', 'CI001');

-- --------------------------------------------------------

--
-- Structure de la table `orotcapital`
--

CREATE TABLE `orotcapital` (
  `id` int(11) NOT NULL,
  `numcpt` varchar(13) DEFAULT NULL,
  `numor` int(3) DEFAULT NULL,
  `numot_or` int(2) DEFAULT NULL,
  `exercice` int(4) DEFAULT NULL,
  `mtordev` varchar(12) DEFAULT NULL,
  `tauxdevar` varchar(9) DEFAULT NULL,
  `mtorar` varchar(12) DEFAULT NULL,
  `modepmt` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orotcapital`
--

INSERT INTO `orotcapital` (`id`, `numcpt`, `numor`, `numot_or`, `exercice`, `mtordev`, `tauxdevar`, `mtorar`, `modepmt`) VALUES
(1, '16121-09-83', 1, 1, 2006, '0', '0', '18055133,8', ''),
(2, '16121-09-83', 2, 1, 2006, '0', '0', '17757505,6', ''),
(3, '16121-09-94', 1, 1, 2006, '0', '0', '405310942,6', ''),
(4, '16121-06-38', 1, 1, 2006, '0', '0', '39829584', ''),
(5, '16121-09-83', 3, 2, 2006, '0', '0', '42904080', ''),
(6, '16121-09-83', 4, 2, 2006, '0', '0', '196886350,2', ''),
(7, '16121-06-37', 1, 1, 2006, '0', '0', '114500000', ''),
(8, '16121-09-90', 1, 1, 2006, '0', '0', '126551459,4', ''),
(9, '16121-09-100', 1, 1, 2006, '0', '0', '85916406068', ''),
(10, '16121-09-83', 5, 3, 2006, '0', '0', '15088170,6', ''),
(11, '16121-06-39', 1, 1, 2006, '0', '0', '1784000384', ''),
(12, '16121-06-38', 2, 1, 2006, '0', '0', '478400000', ''),
(13, '16121-06-38', 3, 1, 2006, '0', '0', '2825649257', ''),
(14, '1621-05-43', 1, 1, 2006, '0', '0', '78477937265', ''),
(15, '16121-09-91', 1, 1, 2006, '0', '0', '3805037289', ''),
(16, '16128', 1, 1, 2006, '0', '0', '609657905,4', ''),
(17, '16121-09-92', 1, 1, 2006, '0', '0', '11640651863', ''),
(18, '16121-07-12', 1, 1, 2006, '0', '0', '283345373,5', ''),
(20, '16121-06-42', 1, 1, 2006, '0', '0', '3030005869', ''),
(21, '16121-06-39', 2, 2, 2006, '0', '0', '1009783675', ''),
(22, '16121-07-12', 2, 2, 2006, '0', '0', '24224432', ''),
(23, '16125-52-01', 1, 1, 2005, '0', '0', '17369181457', ''),
(24, '16121-09-94', 2, 2, 2006, '0', '0', '544589246,8', ''),
(25, '16121-09-92', 2, 2, 2006, '0', '0', '1926395127', ''),
(26, '16121-09-93', 1, 1, 2006, '0', '0', '46445552,96', ''),
(27, '16121-09-94', 3, 2, 2006, '0', '0', '337904973,5', ''),
(28, '16121-09-83', 6, 4, 2006, '0', '0', '254297862', ''),
(29, '16121-06-38', 4, 2, 2006, '0', '0', '2425612046', ''),
(30, '16121-09-91', 2, 2, 2006, '0', '0', '1026140335', ''),
(31, '16121-09-91', 3, 2, 2006, '0', '0', '133764728,2', ''),
(32, '16121-09-94', 4, 2, 2006, '0', '0', '27299974,98', ''),
(33, '16121-09-92', 3, 2, 2006, '0', '0', '1114796141', ''),
(34, '16121-07-09', 1, 1, 2006, '0', '0', '699200404,8', ''),
(35, '16121-06-38', 5, 3, 2006, '0', '0', '4240040', ''),
(36, '16121-06-44', 1, 1, 2006, '0', '0', '2219476426', ''),
(37, '16128', 3, 3, 2006, '0', '0', '1923800', ''),
(38, '16121-09-91', 4, 3, 2006, '0', '0', '1165200', ''),
(39, '16121-09-97', 1, 1, 2006, '0', '0', '705770174,7', ''),
(40, '16121-07-14', 1, 1, 2006, '0', '0', '628415548,6', ''),
(41, '16121-11-13', 1, 1, 2006, '0', '0', '749889428', ''),
(42, '16121-06-10', 1, 1, 2006, '0', '0', '6421534841', ''),
(43, '16121-07-14', 2, 2, 2006, '0', '0', '12290000', ''),
(44, '16121-06-44', 2, 2, 2006, '0', '0', '504061228', ''),
(45, '16121-09-91', 5, 4, 2006, '0', '0', '1118000', ''),
(46, '16121-09-97', 2, 2, 2006, '0', '0', '569177904,6', ''),
(47, '16121-09-83', 7, 5, 2006, '0', '0', '22621700293', ''),
(382, '1621-08-150', 5, 6, 2006, '194000', '5', '1000000', 'Compte spéciale'),
(384, '1621-08-150', 4, 7, 2007, '127000', '3', '1234567', 'Paiement direct');

-- --------------------------------------------------------

--
-- Structure de la table `pret`
--

CREATE TABLE `pret` (
  `id` int(11) NOT NULL,
  `ref` varchar(20) DEFAULT NULL,
  `libpret` varchar(187) DEFAULT NULL,
  `datpret` date DEFAULT NULL,
  `bailleur` varchar(15) DEFAULT NULL,
  `numcpt` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pret`
--

INSERT INTO `pret` (`id`, `ref`, `libpret`, `datpret`, `bailleur`, `numcpt`) VALUES
(2, '', 'CRESAN II', '2020-08-12', 'IDA', '16121-09-83'),
(3, '3589-MAG', 'SIDA', '0000-00-00', 'IDA', '16121-09-94'),
(4, 'F/MAD/SAN2/99/38', 'SANTE II', '0000-00-00', 'FAD', '16121-06-38'),
(5, '3717-MAG', 'Projet de Transport en milieu rural', '0000-00-00', 'IDA', '16121-09-90'),
(6, '4221-MAG', 'CARPIII', '0000-00-00', 'IDA', '16121-09-100'),
(7, '', 'PABRP I', '0000-00-00', 'FAD', '1621-05-43'),
(8, '3498-MAG', 'FID IV', '0000-00-00', 'IDA', '16121-09-91'),
(9, 'TF054834', 'Bassin versant, p?rim?tre irrigu?', '0000-00-00', 'IDA PPF', '16128'),
(10, '3524-MAG', 'PSDR', '0000-00-00', 'IDA', '16121-09-92'),
(11, '548-MG', 'Projet MANDRARE II', '0000-00-00', 'FIDA', '16121-07-12'),
(12, 'F/MDG/PL/EA/2001/1', 'Alimentation en eau potable dans le Grand Sud', '0000-00-00', 'FAD', '16121-06-42'),
(13, '', '\"Pr?t au Gouvernement de la R?publique de Madagascar Compte M\"- Cr?dit mauricien de 300 Mios de roupies .Tirage cumul? au 31/12/05 (244 877 787.36 MUR X 70.93 =     Ar 17 369 181 457.44 )', '0000-00-00', 'MAURICE', '16125-52-01'),
(14, '3567-MAG', 'PDSP II', '0000-00-00', 'IDA', '16121-09-93'),
(15, '410-MG', 'PADANE', '0000-00-00', 'FIDA', '16121-07-09'),
(16, 'P-MG-E00-005', 'Programme Alimentation en eau potable', '0000-00-00', 'FAD', '16121-06-44'),
(17, '621-MG', 'Programme de Promotion de Revenus Ruraux  (PPRR)', '0000-00-00', 'FIDA', '16121-07-14'),
(18, '3829-MAG', 'Projet de Gouvernance et de Dev?lopement Institutionnel (PGDI)', '0000-00-00', 'IDA', '16121-09-97'),
(19, '', 'Projet de R?habilitation des Ponts', '0000-00-00', 'BADEA', '16121-02-12'),
(20, '', 'Projet de R?habilitation des Ponts', '0000-00-00', 'OPEP', '16121-11-13'),
(21, '3836-MAG', 'Infrastructure Transport', '0000-00-00', 'IDA', '16121-09-98'),
(22, '', 'R?habilitation RN 6', '0000-00-00', 'FAD', '16121-06-10'),
(23, '', 'PAS IV', '0000-00-00', 'FAD', '16121-06-41'),
(24, '', 'R?habilitation RN6', '0000-00-00', 'BADEA', '1621-02-15'),
(25, '606', 'R?habilitation RN6', '0000-00-00', 'KOWEIT', '16124-43-04'),
(26, '792P', 'R?habilitation en p?rim?tre rizicole Bas Mangoky', '0000-00-00', 'OPEP', '16121-11-15'),
(27, '4101-MAG', 'Projet P?les Int?gr?s de Croissance', '0000-00-00', 'IDA', '16121-09-104'),
(28, '3364-MAG', 'Projet de R?forme du Secteur des Transports', '0000-00-00', 'IDA', '16121-09-84'),
(29, '', 'PROJER', '0000-00-00', 'FAD', '1621-05-37'),
(30, '748P', 'Projet Am?lioration de l\'Education', '0000-00-00', 'OPEP', '16211-10-14'),
(31, '3302-MAG', 'CRESAN II', '0000-00-00', 'IDA', '16211-08-83'),
(32, 'Q 4631-MAG', 'IDA PPF', '0000-00-00', 'IDA', '16218'),
(33, '3717-MAG', 'Projet Transport en Milieu Rural', '0000-00-00', 'IDA', '1621-08-90'),
(34, '3589-MAG', 'SIDA', '0000-00-00', 'IDA', '16211-08-94'),
(35, '3829-MAG', 'PGDI', '0000-00-00', 'IDA', '16211-08-97'),
(36, '', 'SANTE II', '0000-00-00', 'FAD', '1621-05-38'),
(37, 'F/MDG/PL/EA/2001/1', 'Alimentation en Eau Potable et Assainissement en Milieu Rural dans le Grand Sud', '0000-00-00', 'FAD', '16211-05-42'),
(38, '', 'R?habilitation RN 1 Bis', '0000-00-00', 'FAD', '16211-05-47'),
(39, '', 'Reconstruction Ecoles', '0000-00-00', 'BADEA', '16211-02-16'),
(40, '4341-MAG', 'CARP IV', '0000-00-00', 'IDA', '16211-08-114'),
(41, '689-MG', 'D?veloppement Menabe et Melaky', '0000-00-00', 'FIDA', '1621-06-13'),
(42, '621-MG', 'PPRR', '0000-00-00', 'FIDA', '1621-06-14'),
(43, '3498-2-MAG', 'FID IV', '0000-00-00', 'IDA', '16211-08-105'),
(44, '3524-MAG', 'PSDR', '0000-00-00', 'IDA', '16211-08-92'),
(45, '4244-MAG', 'BVPI', '0000-00-00', 'IDA', '1621-08-103'),
(46, '4101-MAG', 'PIC', '0000-00-00', 'IDA', '16211-08-104'),
(47, '548-MG', 'MANDRARE II', '0000-00-00', 'FIDA', '16211-06-12'),
(48, '3754-MAG', 'Projet de gouvernance des ressources min?rales', '0000-00-00', 'IDA', '16211-08-96'),
(49, '998P', 'Lutte contre les Maladies Transmissibles', '0000-00-00', 'OPEP', '1621-10-20'),
(50, '792P', 'BAS MANGOKY', '0000-00-00', 'OPEP', '16211-10-15'),
(51, '', 'BAS MANGOKY', '0000-00-00', 'FAD', '1621-05-39'),
(52, '3836-MAG', 'Investissement Infrastructures Transport', '0000-00-00', 'IDA', '1621-08-98'),
(53, '', 'Projet d\'appui ? l\'Enseignement G?n?ral', '0000-00-00', 'BADEA', '16211-02-14'),
(54, '3836-1-MAG', 'Financement additionnel pour le Projet Investissement Infrastructures Transport', '0000-00-00', 'IDA', '16211-08-109'),
(55, '4486- MAG', 'CARP V', '0000-00-00', 'IDA', '16211-08-115'),
(56, '970P', 'PPRR', '0000-00-00', 'OPEP', '16211-10-18'),
(57, 'P-MG-k00-007', 'PABRP II', '0000-00-00', 'FAD', '1621-05-49'),
(58, 'F/MAD/EDU-3/98/35', 'EDUCATION III', '0000-00-00', 'FAD', '1621-05-36'),
(59, '3567-MAG', 'PDSP II', '0000-00-00', 'IDA', '16211-08-93'),
(60, '4104-MAG', 'SIDA', '0000-00-00', 'IDA', '16211-08-106'),
(61, '3498-MAG', 'FID IV', '0000-00-00', 'IDA', '16211-08-91'),
(62, '3060-2-MAG', 'Second Projet Nutrition Communautaire', '0000-00-00', 'IDA', '16211-08-102'),
(63, '', 'H?tel 5 Etoiles de Madagascar', '2020-08-12', 'CHINE', '162130-24-04'),
(64, '', 'Lutte Anti-acridienne', '0000-00-00', 'FAD', '16211-05-46'),
(65, '2,10015E+12', 'Appui aux communaut?s des p?cheurs de Toliara', '0000-00-00', 'FAD', '1621-05-45'),
(66, '4223-MAG', 'Redressement et restructuration secteur Eau et Electricit?', '0000-00-00', 'IDA', '16211-08-101'),
(67, '2,10015E+12', 'Programme Alimentation en Eau Potable et de l\'assainissement en milieu rural', '0000-00-00', 'FAD', '1621-05-44'),
(68, '3060-MAG', 'Deuxi?me Projet de Nutrition Communautaire (SEECALINE)', '0000-00-00', 'IDA', '16211-08-76'),
(69, '3217-MAG', 'Projet Microfinance', '0000-00-00', 'IDA', '16211-08-81'),
(70, '', 'R?habilitation RN6 (Ambondromamy-Port-Berg?', '0000-00-00', 'BADEA', '16211-02-15'),
(71, '', 'Projet de construction et de r?habilitation des ponts', '0000-00-00', 'OPEP', '16211-10-13'),
(72, '4305-MAG', 'Projet de D?veloppement du Syst?me de Sant? Perenne', '0000-00-00', 'IDA', '16211-08-111'),
(73, '', 'Centrale hydro-?l?ctrique d\'Andekaleka', '0000-00-00', 'BADEA', '16211-02-17'),
(74, '606 ET 788', 'R?habilitation RN6 (Bekoratsaka-Boriziny)', '0000-00-00', 'KOWEIT', '1621-35-04'),
(75, '722P', 'Projet d\'Education Primaire et Secondaire', '0000-00-00', 'OPEP', '16211-10-12'),
(76, '', 'AEP Ambalavao& Manjakandriana', '0000-00-00', 'BADEA', '16211-02-13'),
(77, '719', 'Projet d\'extension de la centrale hydro?lectrique d\'Andekaleka', '0000-00-00', 'KOWEIT', '1621-35-05'),
(78, '', 'Projet de r?habilitation des ponts', '0000-00-00', 'BADEA', '16211-02-10'),
(79, '2,10015E+13', 'Projet routier dans la province de Toliara', '0000-00-00', 'FAD', '16211-05-50'),
(80, '', 'Projet de construction et d\'?quipement du si?ge de l\'INSCAE', '0000-00-00', 'BADEA', '1621-02-19'),
(81, '1051 P', 'Projet hydro-?lectrique d\'Andekaleka (Phase II)', '0000-00-00', 'OPEP', '16211-10-19'),
(82, '737-MG', 'Programme de Soutien aux  P?les de Micro-Entreprises Rurales et aux Economies R?gionales (PROSPERER)', '0000-00-00', 'FIDA', '1621-06-15'),
(83, '', 'Projet de la Route Sambaina- Faratsiho- Soavinandriana', '0000-00-00', 'BADEA', '1621-02-20'),
(84, '753-MG', 'Projet d\'Appui au Renforcement des Organisations Professionnelles et des Services Agricoles (AROPA)', '0000-00-00', 'FIDA', '1621-06-16'),
(85, '1279P', 'Projet de r?habilitation RN6 Bekoratsaka - Boriziny', '0000-00-00', 'OPEP', '1621-10-24'),
(86, '1052 P', 'Projet de R?habilitation de la Route dans la Province de Tul?ar', '0000-00-00', 'OPEP', '16211-10-21'),
(87, '', 'Projet de R?habilitation du P?rim?tre Irrigu? de Manombo', '0000-00-00', 'FAD', '1621-05-48'),
(88, '', 'Projet de R?habilitation des Infrastructures de l\'Ile de Sainte-Marie', '0000-00-00', 'BADEA', '1621-02-18'),
(89, '4411-MAG', 'PGDI II', '0000-00-00', 'IDA', '1621-08-117'),
(90, '4399-MAG', 'PIC II', '0000-00-00', 'IDA', '1621-08-116'),
(91, '4537-MAG', 'Projet  d\'Urgence de S?curit? alimentaire et  R?construction', '0000-00-00', 'IDA', '16211-08-118'),
(92, '4525-MAG', 'Financement Additionnel pour le Projet de D?veloppement Rural', '0000-00-00', 'IDA', '16211-08-119'),
(93, '4285-MAG', 'Projet d\'Infrastructures de Communications R?gionales', '0000-00-00', 'IDA', '16211-08-120'),
(94, '', 'Accord de r?glement', '0000-00-00', 'LIBYE', '16213-05-04'),
(95, '1212P', 'Programme de Soutien aux P?les de Micro-Entreprises Rurales et aux Economies R?gionales (PROSPERER)', '0000-00-00', 'OPEP', '1621-10-23'),
(96, '12/07/1998', 'Projet Energie II', '0000-00-00', 'BADEA', '16211-02-11'),
(97, '11/03/1994', 'Projet de R?habilitation des Ponts', '0000-00-00', 'BADEA', '16211-02-12'),
(98, '', 'Projet de r?habilitation RN 35 Province de Tul?ar', '0000-00-00', 'COREE', '16213-01-01'),
(99, '4965-0 MAG', 'Projet d\'appui au troisi?me programme environnemental (PE III)', '0000-00-00', 'IDA', '1621-08-121'),
(100, '3754-1 MAG', 'PGRM', '0000-00-00', 'IDA', '16211-08-113'),
(101, '2,10015E+12', 'Pr?ts suppl - projet de rehab', '0000-00-00', 'FAD', '1621-05-51'),
(102, '  3217-1 MAG', ' MICRO FIN', '0000-00-00', 'IDA', '16211-08-112'),
(103, '11MG', 'PROJET MANGOKY', '0000-00-00', 'FIDA', '16211-06-01'),
(104, '91MG', '2EME PROJET ELEVAGE', '0000-00-00', 'FIDA', '16211-06-02'),
(105, '119MG', 'PROJET RIZICOLE DES HAUTS PL', '0000-00-00', 'FIDA', '16211-06-04'),
(106, '231MG', 'PROJET DE DEVELOPP AGRICOLE', '0000-00-00', 'FIDA', '16211-06-06'),
(107, '286MG', 'PROJET D APPUI AU DVLPMN DU MOYEN OUES', '0000-00-00', 'FIDA', '16211-06-07'),
(108, '441MG', 'PROG ENVIRONNMT 2 EME PHASE', '0000-00-00', 'FIDA', '16211-06-08'),
(109, '  410MG', 'ALIMENTATTION ET DVLPPMT AGRI NORD EST', '0000-00-00', 'FIDA', '16211-06-09'),
(110, '45MG', 'PROJET DE MISE EN VALEUR DU HAUT BASS MANDRARE', '0000-00-00', 'FIDA', '16211-06-10'),
(111, '376MG', 'PROJET DE MISE EN VALEUR', '0000-00-00', 'FIDA', '16211-06-11'),
(112, '1135P', 'Projet de r?habilitation des Infrastructures de l\'Ile Sainte-Marie', '0000-00-00', 'OPEP', '1621-10-22'),
(113, '5186-MG', 'Projet d\'Appui d\'Urgence aux services essentiels d\'?ducation, de sant? et de nutrition  (PAUSENS)', '0000-00-00', 'IDA', '1621-08-122'),
(114, '5187-MG', 'Projet d\'Urgence pour la Pr?servation des Infrastructures et de la R?duction de la Vuln?rabilit? (PUPIRV)', '0000-00-00', 'IDA', '1621-08-123'),
(115, '5124-MG', 'Deuxi?me Projet Multisectoriel de Pr?vention des IST et du VIH/SIDA (PMPS II)', '0000-00-00', 'IDA', '1621-08-124'),
(116, '4285-MG', 'Projet d\'Infrastructures de Communications R?gionales', '0000-00-00', 'IDA', '1621-08-108'),
(117, '874-MG', 'FORMAPROD', '0000-00-00', 'FIDA', '1621-06-17'),
(118, '', 'Projet des Routes Sambaina-Faratsiho-Soavinandriana', '0000-00-00', 'Fonds Saoudien', '1621-34-03'),
(119, '12-MG', 'FORMAPROD', '0000-00-00', 'FIDA', '1621-06-18'),
(120, '737-A', 'Programme de Soutien aux P?les de Micro-Entreprises Rurales et aux Economies R?gionales (PROSPERER)', '0000-00-00', 'FIDA', '1621-06-19'),
(121, '689-A', 'D?veloppement Menabe et Melaky', '0000-00-00', 'FIDA', '1621-06-20'),
(122, '55820-MG', 'Op?ration de Politique de D?veloppement et de R?engagement  OPDR', '0000-00-00', 'IDA', '1621-08-126'),
(123, '1506 P', 'Projet d\' Am?nagement des Infrastructures Routi?res (PAIR)', '0000-00-00', 'OPEP', '1621-10-25'),
(124, '1505 P', 'Projet de Construction et d\' Equipement du Si?ge de l\' INSCAE', '0000-00-00', 'OPEP', '1621-10-26'),
(125, '5,90015E+12', 'Programme d\' Urgence pour la Relance Economique (PURE)', '0000-00-00', 'FAD', '1621-05-55'),
(126, 'CMG 1480.01 R', 'Pr?t de Soutien Budg?taire', '0000-00-00', 'AFD', '1621-15-82'),
(127, '5382 - MG', 'FA Projet d\'Appui d\'Urgence aux Services Essentiels de l\'Education, de la Sant? et de la Nutrition (PAUSENS - FA)', '0000-00-00', 'IDA', '1621-08-128'),
(128, '5374 - MG', 'Projet d\' Urgence de S?curit? Alimentaire et Protection Sociale (PURSAPS)', '0000-00-00', 'IDA', '1621-08-127'),
(129, '2,10015E+12', 'Projet d\' Am?nagement des Infrastructures Routi?res (PAIR)', '0000-00-00', 'FAD', '1621-05-54'),
(130, '2,10015E+12', 'Projet de R?habilitation des Infrastructures Agricoles de la R?gion Sud Ouest (PRIASO)', '0000-00-00', 'FAD', '1621-05-52'),
(131, '2,10015E+12', 'Projet d\' Appui ? la Gouvernance Institutionnelle (PAGI)', '0000-00-00', 'FAD', '1621-05-53'),
(132, '2,20016E+12', 'Projet de R?habilitation des Infrastructures Agricoles (PRIASO)', '0000-00-00', 'BAD', '1621-01-09'),
(133, '57520 MG', 'Op?ration de Politique de D?veloppement de R?silience', '0000-00-00', 'IDA', '1621-08-130'),
(134, 'PIC II 55640 MG', 'Deuxi?me Projet des P?les Int?gr?s de Croissance', '0000-00-00', 'IDA', '1621-08-129'),
(135, '', 'R?am?nagement de la dette - 2015', '0000-00-00', 'RUSSIE', '1621-21-01'),
(136, '', 'POST COD-CP9-CP8', '0000-00-00', 'RUSSIE', '1621-21'),
(137, '2,10015E+12', 'Projet d\'Extension du P?rim?tre de Bas-Mangoky (PEPBM)', '0000-00-00', 'FAD', '1621-05-56'),
(138, '5708-MG', 'Filet de S?curit? Sociale (FSS)', '0000-00-00', 'IDA', '1621-08-131'),
(139, '', 'Financement de la balance de paiements', '0000-00-00', 'ALGERIE', '1621-25'),
(140, '5,90015E+12', 'Projet d\'Extension du P?rim?tre de Bas-Mangoky (Projet de facilit? d\'appui ? la transaction)-PEPBM', '0000-00-00', 'FAD', '1621-05-57'),
(141, '5,90015E+12', 'Projet d\'Appui a la Promotion des Investissements (PAPI)', '0000-00-00', 'FAD', '1621-05-58'),
(142, '2,10015E+12', 'Projet d\'Appui a la Promotion des Investissements', '0000-00-00', 'FAD', '1621-05-59'),
(143, '2,10015E+12', 'Projet jeunes entreprises rurales dans le moyen-ouest', '0000-00-00', 'FAD', '1621-05-60'),
(144, '5,90015E+12', 'Projet jeunes entreprises rurales dans le moyen-ouest', '0000-00-00', 'FAD', '1621-05-61'),
(145, '2,10015E+12', 'Programme d\'Appui aux R?formes de la Gestion Economique PARGE', '0000-00-00', 'FAD', '1621-05-62'),
(146, 'FEC 2016', 'FACILITE ELARGIE DE CREDITS', '0000-00-00', 'BCM', '1621-37-01'),
(147, '792', 'R?habilitation de la route nationale secondaire RN 43 entre Faratsiho - Sambaina (2?me phase)', '0000-00-00', 'BADEA', '1621-02-21'),
(148, '5775-0MG', 'Croissance Agricole et S?curisation Fonci?re - CASEF', '0000-00-00', 'IDA', '1621-08-133'),
(149, '2,10015E+12', 'Programme d\'Appui ? la R?forme du Secteur Energie - PARSE', '0000-00-00', 'FAD', '1621-05-63'),
(150, '5773-0MG', 'Projet d\' Am?lioration de la Gouvernance et des Op?rations du Secteur de l\' El?ctricit? PAGOSE', '0000-00-00', 'IDA', '1621-08-132'),
(151, ' MDG - 2  BNGRC', 'Projet de Centre de Gestion de Catastrophe Nationale', '0000-00-00', 'COREE', '1621-32-02'),
(152, '1655P', 'Projet P?le Int?gr? de Croissance 2 En?rgie', '0000-00-00', 'OFID', '1621-10-28'),
(153, '58350-MG', 'Projet d\' Appui ? la Performance du Secteur Public - PAPSP', '0000-00-00', 'IDA', '1621-08-134'),
(154, '1654P', 'Projet de D?veloppement Hydro-Agricole Beboka', '0000-00-00', 'OFID', '1621-10-27'),
(155, '', 'CONTRAT DE CREDIT', '0000-00-00', 'DEUTSCHE BANK', '1621-39-01'),
(156, 'C MG 1305 02 M', 'Programme d\' Appui et de D?veloppement des Villes d\' Equilibre de Madagascar - PADEVE', '0000-00-00', 'AFD', '1621-15-84'),
(157, 'C MG 1500 01 H', 'PROGRAMME INTEGRE D\'ASSAINISSEMENT D\'ANTANANARIVO - PIAA', '0000-00-00', 'AFD', '1621-15-85'),
(158, '59960 MG', 'RENFORCEMENT DE CAPACITE STATISTIQUE A MADAGASCAR - STATCAP', '0000-00-00', 'IDA', '1621-08-136'),
(159, '2E+11', 'PROSPERER Pr?t suppl?mentaire 2015', '0000-00-00', 'FIDA', '1621-06-21'),
(160, '2E+11', 'AD2M - 2015', '0000-00-00', 'FIDA', '1621-06-22'),
(161, '2E+11', 'AROPA Pr?t suppl?mentaire', '0000-00-00', 'FIDA', '1621-06-23'),
(162, '', 'TOAMASINA PORT DEVELOPMENT PROJECT', '0000-00-00', 'JICA', '1621-38-01'),
(163, '59790 MG', 'PROJET AGRICULTURE DURABLE POUR UNE APPROCHE PAYSAGE - PADAP', '0000-00-00', 'IDA', '1621-08-135'),
(164, '', '', '0000-00-00', '', ''),
(165, '', '', '0000-00-00', '', ''),
(166, '59870 MG', 'Projet de Gouvernance des P?ch?s et de Croissance Partage dans le Sud - Ouest de l\' Oc?an Indien - SWIOFISH2', '0000-00-00', 'IDA', '1621-08-137'),
(167, '1547 01V', 'PROJET AGRICULTURE DURABLE POUR UNE APPROCHE PAYSAGE - PADAP', '0000-00-00', 'AFD', '1621-15-86'),
(168, '', '', '0000-00-00', '', ''),
(169, 'PBC NO. (2018) 8', 'Projet de R?habilitation de la Route Ivato - Tsarasaotra et de la liaison du Boulevard de l\' Eroupe au Village de la Francophonie', '0000-00-00', 'CHINE', '1621-27-04'),
(170, 'CMG  1301  04  K', 'ROCADE', '0000-00-00', 'AFD', '1621-15-83'),
(171, '62170 MG', 'Projet d\' Appui ? l\' Education de Base (PAEB)', '0000-00-00', 'IDA', '1621-08-138'),
(172, '', '', '0000-00-00', '', ''),
(173, '61890 MG', 'Projet d\' Inclusion Financi?re (PASEF 2)', '0000-00-00', 'IDA', '1621-08-139'),
(174, '', '', '0000-00-00', '', ''),
(175, '', 'APPUI A LA RESTRUCTURATION - AIR MADAGASCAR', '0000-00-00', 'DEUTSCHE BANK', '1621-39-02'),
(176, '2E+11', 'PROGRAMME DE DEVELOPPEMENT DE FILIERES AGRICOLES INCLUSIVES - DEFIS', '0000-00-00', 'FIDA', '1621-06-24'),
(177, '2,10015E+12', 'Programme de Promotion de l\'Entreprenariat des Jeunes dans l\'Agriculture et l\'Agro-Industrie (PEJAA) - Projet1', '0000-00-00', 'FAD', '1621-05-64'),
(178, '', '', '0000-00-00', '', ''),
(179, '', 'Projet de R?habilitation de la RN43 Soavinandriana Faratsiho Sambaina Phase2 - RN43 PH2', '0000-00-00', 'ARABIE SAOUDITE', '1621-34-04'),
(180, '', 'POST CATASTROPHE', '0000-00-00', 'BEI', '1621-04-08'),
(181, 'CMG 1569 01Z', 'Lalankely 3', '0000-00-00', 'AFD', '1621-15-87'),
(182, '62450 MG', 'Projet Int?gr? de D?veloppement et de R?silience Urbains - PRODUIR', '0000-00-00', 'IDA', '1621-08-140'),
(183, '', 'MODERNISATION RESEAU ROUTIER MADAGASCAR', '0000-00-00', 'BEI', '1621-04-09'),
(184, '', 'JIRAMA ANDEKALEKA HYDRO-EXPANSION', '0000-00-00', 'BEI', '1621-04-10'),
(185, '63150 MG', 'Projet P?les Int?gr?s de Croissance et Projet SOP.2 (PIC2,2)', '0000-00-00', 'IDA', '1621-08-141'),
(186, '', 'PROJET DE CONSTRUCTION DE LA RN5 SOANIERANA IVONGO VAHIBE - RN5', '0000-00-00', 'BADEA', '1621-02-22'),
(187, 'GCL NO.(2019) 5 TOTA', 'Upgrading and Rehabilitation of the National Road 5A linking Anbilobe and Vohemar Project (RN5A)', '0000-00-00', 'CHINE', '1621-27-06'),
(188, '', 'Voie rapide reliant l\'a?roport international d\'Ivato et le Boulevard de l\'Europe - CRBC', '0000-00-00', 'CHINE', '1621-27-03'),
(189, '', 'Projet de R?habilitation de la Route Soanierana Ivongo - Vahibe (RN5)', '0000-00-00', 'ARABIE SAOUDITE', '1621-34-05'),
(190, '2E+11', 'Programme de Formation Professionnelle de la Productivit? Agricole - Financement Additionnel (FORMAPROD - FA)', '0000-00-00', 'FIDA', '1621-06-25'),
(191, '', 'Projet de construction de centrales ?lectriques hybrides  photovoltaique/Diesel', '0000-00-00', 'Belgique', '1621-40-01'),
(192, '6373-MG', 'Projet de d?veloppement d?acc?s ? l??lectricit? ? moindre co?t (LEAD)', '0000-00-00', 'IDA', '1621-08-143'),
(193, '6280-MG', 'Financement Additionnel du Projet d\'Am?lioration de la Gouvernance et des Op?rations du Secteur de l\'Electricit? (PAGOSE - FA)', '0000-00-00', 'IDA', '1621-08-142'),
(194, '2,10015E+12', 'PROGRAMME DE PROMOTION DE L\'ENTREPRENARIAT DES JEUNES DANS L\'AGRICULTURE ET L\'AGRO-INDUSTRIE (PEJAA) - PROJET 1', '0000-00-00', 'FAD', '1621-05-64EUR'),
(221, '7000-MG', 'Financement COVID', '2020-09-10', 'IDA', '1621-08-150'),
(222, '7000-MG', 'Financement COVID', '2020-09-10', 'IDA', '1621-08-150'),
(223, '7000-MG', 'Financement COVID', '2020-09-03', 'IDA', '1621-08-150');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `sexe` varchar(8) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `login`, `sexe`, `password`) VALUES
(3, 'Mahen', 'Homme', '35f504164d5a963d6a820e71614a4009'),
(7, 'Lewis', 'Homme', '1a1dc91c907325c69271ddf0c944bc72'),
(9, 'John', 'Homme', '1a1dc91c907325c69271ddf0c944bc72');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `devise`
--
ALTER TABLE `devise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `numcpt` (`numcpt`);

--
-- Index pour la table `orotcapital`
--
ALTER TABLE `orotcapital`
  ADD PRIMARY KEY (`id`),
  ADD KEY `numcpt` (`numcpt`);

--
-- Index pour la table `pret`
--
ALTER TABLE `pret`
  ADD PRIMARY KEY (`id`),
  ADD KEY `numcpt` (`numcpt`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `devise`
--
ALTER TABLE `devise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `orotcapital`
--
ALTER TABLE `orotcapital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=385;

--
-- AUTO_INCREMENT pour la table `pret`
--
ALTER TABLE `pret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
