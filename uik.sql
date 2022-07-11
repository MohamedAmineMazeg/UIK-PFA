-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 17 jan. 2022 à 21:38
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `uik`
--

-- --------------------------------------------------------

--
-- Structure de la table `annee_scolaire`
--

CREATE TABLE `annee_scolaire` (
  `id` int(11) NOT NULL,
  `annee_scolaire` varchar(100) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annee_scolaire`
--

INSERT INTO `annee_scolaire` (`id`, `annee_scolaire`, `actif`) VALUES
(1, '2021-2022', 1),
(2, '2020-2021', 0),
(5, '2022-2023', 0);

-- --------------------------------------------------------

--
-- Structure de la table `branche`
--

CREATE TABLE `branche` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `id_specialite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `branche`
--

INSERT INTO `branche` (`id`, `libelle`, `id_specialite`) VALUES
(11, 'Préparatoire Intégré', 5),
(12, 'Licence Business Intelligence', 5),
(13, 'Formation Ingénieur Informatique', 5),
(14, 'Master', 5);

-- --------------------------------------------------------

--
-- Structure de la table `chapitre`
--

CREATE TABLE `chapitre` (
  `id` int(11) NOT NULL,
  `id_cour` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `couverture` varchar(200) DEFAULT NULL,
  `id_type_cour` int(11) DEFAULT NULL,
  `dt_chaptire` date DEFAULT NULL,
  `support` varchar(200) DEFAULT NULL,
  `support_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chapitre`
--

INSERT INTO `chapitre` (`id`, `id_cour`, `libelle`, `description`, `couverture`, `id_type_cour`, `dt_chaptire`, `support`, `support_name`) VALUES
(1, 3, 'Chaptire 1', 'Math1', NULL, 1, '2022-01-12', '/UIK/chaptire/33/uik.sql', 'exercice_math1 (3).txt'),
(2, 3, 'Chaptire 2', 'Math2', NULL, 1, '2022-01-12', '/UIK/chaptire/33/uik.sql', 'exercice_math1 (3).txt'),
(33, 3, 'Chaptire 1', '', NULL, 2, '2022-01-12', '/UIK/chaptire/33/uik.sql', 'uik.sql'),
(36, 16, 'Chaptire 1', '', NULL, 1, '2022-01-13', '/UIK/chaptire/36/ds.png', 'ds.png'),
(37, 24, 'Chaptire 1', '', NULL, 1, '2022-01-16', '/UIK/support/chaptire/37/exercice_math1 (3).txt', 'exercice_math1 (3).txt');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `id_groupe_etud` int(11) NOT NULL,
  `id_groupe_eng` int(11) NOT NULL,
  `commentaire` varchar(2000) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `dt_commentaire` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `id_groupe_etud`, `id_groupe_eng`, `commentaire`, `id_user`, `dt_commentaire`) VALUES
(1, 1, 1, 'Bravo pour votre travial', 5, '2022-01-14'),
(2, 1, 1, 'Test', 5, '2022-01-15'),
(3, 3, 1, 'Salut', 5, '2022-01-16');

-- --------------------------------------------------------

--
-- Structure de la table `cour`
--

CREATE TABLE `cour` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `id_semester` int(11) NOT NULL,
  `id_annee_scolaire` int(11) NOT NULL,
  `id_enseignant` int(11) NOT NULL,
  `duree` varchar(100) DEFAULT NULL,
  `credits` int(1) DEFAULT NULL,
  `dt_cour` date DEFAULT NULL,
  `id_groupe` int(11) DEFAULT NULL,
  `couverture` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cour`
--

INSERT INTO `cour` (`id`, `libelle`, `description`, `id_semester`, `id_annee_scolaire`, `id_enseignant`, `duree`, `credits`, `dt_cour`, `id_groupe`, `couverture`) VALUES
(3, 'JavaScript', 'Alégbre', 1, 1, 1, '45', 4, '2022-01-10', 1, '/UIK/support/cour/3/Image 4.png'),
(4, 'Alégbre', 'JavaScript', 1, 1, 1, '45', 4, '2022-01-09', 1, '/UIK/support/cour/4/téléchargement (1).jpg'),
(5, 'Algébre 2', 'Algébre 2', 2, 1, 1, '45', 4, '2022-01-12', 2, '/UIK/support/cour/4/téléchargement (1).jpg'),
(6, 'Analyse 2', 'Analyse 2', 2, 1, 1, '45', 4, '2022-01-13', 2, '/UIK/support/cour/4/téléchargement (1).jpg'),
(14, 'Alogrthime', 'Alogrthime', 1, 1, 1, '20', 4, '2022-01-11', 1, '/UIK/support/cour/14/téléchargement.png'),
(16, 'Alégbre', 'Alégbre', 1, 1, 1, '20', 5, '2022-01-13', 2, '/UIK/support/cour/16/images.png'),
(23, 'JavaScript', 'JavaScript', 1, 1, 1, '5', 3, '2022-01-15', 2, '/UIK/support/cour/23/NoPath - Copy.png'),
(24, 'Alogrthime', 'Alogrthime', 1, 1, 1, '30', 5, '2022-01-16', 2, '/UIK/support/cour/24/logoFinalUIK.png');

-- --------------------------------------------------------

--
-- Structure de la table `cour_salle`
--

CREATE TABLE `cour_salle` (
  `id` int(11) NOT NULL,
  `id_cour` int(11) DEFAULT NULL,
  `id_salle` int(11) DEFAULT NULL,
  `dt_cour` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cour_salle`
--

INSERT INTO `cour_salle` (`id`, `id_cour`, `id_salle`, `dt_cour`) VALUES
(1, 3, 1, '2022-01-10'),
(2, 4, 2, '2022-01-10'),
(3, 3, 1, '2022-01-16'),
(4, 4, 3, '2022-01-17'),
(5, 14, 4, '2022-01-19'),
(6, 3, 2, '2022-01-11'),
(7, 4, 1, '2022-01-13'),
(8, 3, 3, '2022-01-15'),
(9, 6, 3, '2022-01-18'),
(10, 16, 5, '2022-01-20'),
(11, 24, 3, '2022-01-17'),
(14, 3, 1, '2022-01-10');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id` int(11) NOT NULL,
  `specialite` varchar(100) DEFAULT NULL,
  `id_users` int(11) NOT NULL,
  `universite` varchar(100) DEFAULT NULL,
  `lieu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id`, `specialite`, `id_users`, `universite`, `lieu`) VALUES
(1, 'Enseignent d informatique', 5, 'PhD graduate of Oregon Staate University', 'Tunis'),
(2, 'Enseignent d\'informatique', 6, 'PhD graduate of Oregon Staate University', 'Tunis'),
(3, 'Enseignent d\'informatique', 7, 'PhD graduate of Oregon Staate University', 'Tunis'),
(4, 'Enseignent d\'informatique', 8, 'PhD graduate of Oregon Staate University', 'Tunis'),
(5, 'Enseignant marketing', 14, 'ISG Tunis', 'Tunis');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `ancienne_etablissement` varchar(200) DEFAULT NULL,
  `diplome` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `id_user`, `ancienne_etablissement`, `diplome`) VALUES
(1, 4, NULL, NULL),
(2, 9, 'Lycée Hammam Lif', NULL),
(3, 10, 'Lycée hammam lif', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `evaluation_grp_etud`
--

CREATE TABLE `evaluation_grp_etud` (
  `id` int(11) NOT NULL,
  `id_rendu` int(11) DEFAULT NULL,
  `id_examen` int(11) DEFAULT NULL,
  `id_group_etud` int(11) NOT NULL,
  `note` double DEFAULT NULL,
  `dt_depot` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evaluation_grp_etud`
--

INSERT INTO `evaluation_grp_etud` (`id`, `id_rendu`, `id_examen`, `id_group_etud`, `note`, `dt_depot`) VALUES
(3, 2, NULL, 1, NULL, '2022-01-07'),
(4, 3, NULL, 1, NULL, '2022-01-06');

-- --------------------------------------------------------

--
-- Structure de la table `examen`
--

CREATE TABLE `examen` (
  `id` int(11) NOT NULL,
  `id_cour` int(11) NOT NULL,
  `id_type_examen` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `coefficient` double NOT NULL,
  `duree` double NOT NULL,
  `pourcentage` int(3) NOT NULL,
  `dt_debut` int(11) DEFAULT NULL,
  `dt_fin` int(11) DEFAULT NULL,
  `dt_examen` date DEFAULT NULL,
  `id_salle` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `examen`
--

INSERT INTO `examen` (`id`, `id_cour`, `id_type_examen`, `libelle`, `coefficient`, `duree`, `pourcentage`, `dt_debut`, `dt_fin`, `dt_examen`, `id_salle`) VALUES
(1, 3, 1, 'Ds math1', 1.5, 2, 60, 10, 12, '2022-01-15', 1),
(2, 5, 1, 'Ds math2', 1.5, 2, 60, 10, 12, '2022-01-26', 2);

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL,
  `experience` int(11) NOT NULL,
  `id_enseignant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`id`, `libelle`, `experience`, `id_enseignant`) VALUES
(1, 'le DVC de l\'université Dhofar, Oman de 2012 a 2019.', 6, 1),
(2, 'Consultant expérimenté avec une espérience démontrée de la gestion\r\ndans le secteur de l\'enseignement supérieur.', 2, 1),
(3, 'Enseignent d\'informatique et data science a l\'Université ', 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `id` int(11) NOT NULL,
  `id_branche` int(11) NOT NULL,
  `libelle` varchar(100) DEFAULT NULL,
  `id_annee_scol` int(11) NOT NULL,
  `id_niveau` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id`, `id_branche`, `libelle`, `id_annee_scol`, `id_niveau`) VALUES
(1, 13, 'Groupe 1', 1, 1),
(2, 13, 'Groupe 2', 1, 1),
(3, 11, 'G01', 1, 2),
(6, 11, 'G02', 1, 2),
(11, 13, 'Groupe 5', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `groupe_enseignant`
--

CREATE TABLE `groupe_enseignant` (
  `id` int(11) NOT NULL,
  `id_enseignant` int(11) NOT NULL,
  `id_groupe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `groupe_enseignant`
--

INSERT INTO `groupe_enseignant` (`id`, `id_enseignant`, `id_groupe`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 1, 11);

-- --------------------------------------------------------

--
-- Structure de la table `groupe_etudiant`
--

CREATE TABLE `groupe_etudiant` (
  `id` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  `id_groupe` int(11) NOT NULL,
  `id_situation_etudiant` int(11) DEFAULT NULL,
  `affecte` tinyint(1) DEFAULT NULL,
  `moyenne` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `groupe_etudiant`
--

INSERT INTO `groupe_etudiant` (`id`, `id_etudiant`, `id_groupe`, `id_situation_etudiant`, `affecte`, `moyenne`) VALUES
(1, 1, 1, NULL, NULL, NULL),
(3, 2, 1, NULL, NULL, NULL),
(4, 3, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`id`, `libelle`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, '');

-- --------------------------------------------------------

--
-- Structure de la table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `libelle` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `profile`
--

INSERT INTO `profile` (`id`, `code`, `libelle`) VALUES
(1, 'ADMIN', 'Administrateur'),
(2, 'SCOL', 'Scolarité'),
(3, 'ENSG', 'Enseignant'),
(4, 'STUD', 'Etudiant');

-- --------------------------------------------------------

--
-- Structure de la table `rendu`
--

CREATE TABLE `rendu` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `dt_depot` date NOT NULL,
  `dt_dealine` date NOT NULL,
  `support` varchar(200) NOT NULL,
  `support_name` varchar(100) NOT NULL,
  `id_chaptir` int(11) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `remarque` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rendu`
--

INSERT INTO `rendu` (`id`, `libelle`, `dt_depot`, `dt_dealine`, `support`, `support_name`, `id_chaptir`, `description`, `remarque`) VALUES
(2, 'Rendu 1', '2022-01-11', '2022-01-20', '/UIK/rendu/2/Math1.txt', 'Math1.txt', 1, 'Résoudre les équations si dessous', NULL),
(3, 'Rendu 2', '2022-01-15', '2022-01-26', '/UIK/rendu/3/Math2.txt', 'Math2.txt', 2, 'Ecrire l\'algorithme de connecion tcp/Ip dans un reseaux Local', NULL),
(4, 'Rendu 3', '2022-01-15', '2022-01-26', '/UIK/rendu/3/Math2.txt', 'Math2.txt', 33, 'Realiser un programme qui joue au t-rexgam de google chrome...', NULL),
(5, 'Rendu 1', '2022-01-15', '2022-01-26', '/UIK/rendu/3/Math2.txt', 'Math2.txt', 37, 'Résoudre les équations si dessous chaptir 1', NULL),
(6, 'Rendu 1', '2022-01-15', '2022-01-26', '/UIK/rendu/3/Math2.txt', 'Math2.txt', 36, 'Résoudre les équations', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `rendu_grp_etud`
--

CREATE TABLE `rendu_grp_etud` (
  `id` int(11) NOT NULL,
  `id_evaluation_grp_etud` int(11) NOT NULL,
  `dt_insert` date NOT NULL,
  `support` varchar(250) NOT NULL,
  `name_support` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rendu_grp_etud`
--

INSERT INTO `rendu_grp_etud` (`id`, `id_evaluation_grp_etud`, `dt_insert`, `support`, `name_support`) VALUES
(7, 3, '2022-11-01', '/UIK/rendu/etudiant/1/exercice_math1.txt', 'exercice_math1.txt'),
(16, 3, '2022-11-01', '/UIK/rendu/etudiant/1/exercice_math1.txt', 'exercice_math1.txt'),
(17, 3, '2022-11-01', '/UIK/rendu/etudiant/1/exercice_math1.txt', 'exercice_math1.txt'),
(18, 3, '2022-11-01', '/UIK/rendu/etudiant/1/exercice_math1.txt', 'exercice_math1.txt'),
(19, 3, '2022-11-01', '/UIK/rendu/etudiant/1/exercice_math1.txt', 'exercice_math1.txt'),
(20, 3, '2022-11-01', '/UIK/rendu/etudiant/1/exercice_math1.txt', 'exercice_math1.txt'),
(21, 3, '2022-11-01', '/UIK/rendu/etudiant/1/exercice_math1.txt', 'exercice_math1.txt'),
(22, 3, '2022-11-01', '/UIK/rendu/etudiant/1/exercice_math1.txt', 'exercice_math1.txt'),
(23, 3, '2022-11-01', '/UIK/rendu/etudiant/1/exercice_math1.txt', 'exercice_math1.txt'),
(24, 3, '2022-11-01', '/UIK/rendu/etudiant/1/exercice_math1.txt', 'exercice_math1.txt'),
(25, 3, '2022-11-01', '/UIK/rendu/etudiant/1/exercice_math1.txt', 'exercice_math1.txt');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id` int(11) NOT NULL,
  `libelle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id`, `libelle`) VALUES
(1, 'Salle-1'),
(2, 'Salle-2'),
(3, 'Salle-3'),
(4, 'Salle-4'),
(5, 'Salle-5'),
(6, 'Salle-6'),
(7, 'LAB-01'),
(8, 'LAB-02'),
(9, 'LAB-03'),
(10, 'LAB-04');

-- --------------------------------------------------------

--
-- Structure de la table `semestre`
--

CREATE TABLE `semestre` (
  `id` int(11) NOT NULL,
  `libelle` varchar(200) NOT NULL,
  `code` varchar(100) NOT NULL,
  `actif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `semestre`
--

INSERT INTO `semestre` (`id`, `libelle`, `code`, `actif`) VALUES
(1, 'Semestre 1', 'SM1', 1),
(2, 'Semestre 2', 'SM2', 0);

-- --------------------------------------------------------

--
-- Structure de la table `sexe`
--

CREATE TABLE `sexe` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sexe`
--

INSERT INTO `sexe` (`id`, `libelle`) VALUES
(1, 'Masculin '),
(2, 'Féminin');

-- --------------------------------------------------------

--
-- Structure de la table `situation_etudiant`
--

CREATE TABLE `situation_etudiant` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `specialite`
--

INSERT INTO `specialite` (`id`, `libelle`) VALUES
(1, 'Architecture '),
(2, 'Business'),
(3, 'Design'),
(4, 'Droite'),
(5, 'Informatique');

-- --------------------------------------------------------

--
-- Structure de la table `type_chapitre`
--

CREATE TABLE `type_chapitre` (
  `id` int(11) NOT NULL,
  `libelle` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type_chapitre`
--

INSERT INTO `type_chapitre` (`id`, `libelle`) VALUES
(1, 'Théorique'),
(2, 'Pratique');

-- --------------------------------------------------------

--
-- Structure de la table `type_examen`
--

CREATE TABLE `type_examen` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type_examen`
--

INSERT INTO `type_examen` (`id`, `libelle`) VALUES
(1, 'DS'),
(2, 'Examen');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_profile` int(11) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `num_telephone` varchar(100) DEFAULT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `dt_naissance` date DEFAULT NULL,
  `id_sexe` int(11) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `login`, `password`, `id_profile`, `photo`, `num_telephone`, `adresse`, `dt_naissance`, `id_sexe`, `actif`) VALUES
(2, 'UIK', 'Admin', 'admin.uik@uik.com', 'admin', 'admin', 1, NULL, NULL, NULL, NULL, 1, 1),
(3, 'UIK', 'Scolarite', 'scolarite.uik@uik.com', 'scolarite', 'aa', 2, NULL, NULL, NULL, NULL, 1, 1),
(4, 'Ben Ali', 'Ali', 'etud1.uik@uik.com', 'etud1', 'aa', 4, NULL, '55632469', 'Tunis', '2000-02-02', 1, 1),
(5, 'Limama', 'Mohamed', 'Mohamed.limam@gmail.com', 'prof1', 'aa', 3, '/UIK/photo/prof/5/60b781fa41975.jpg', '22645369', '7 rue habibe bougatfa, Hammam-lif', '1950-08-08', 1, 1),
(6, 'Sakly', 'Sarah', 'sarah.uik@uik.com', 'prof2', 'aa', 3, NULL, NULL, NULL, NULL, 2, 1),
(7, 'Ben mohamed', 'Mohamed', 'mohamed.uik@uik.com', 'prof3', 'aa', 3, NULL, NULL, NULL, NULL, 1, 1),
(8, 'Yousfi', 'Nour', 'nour.uik@uik.com', 'prof4', 'aa', 3, NULL, NULL, NULL, NULL, 2, 1),
(9, 'Sakly', 'Ahmed', 'ahmed.sakly@outlook.com', 'ahmed.sakly', 'aa', 4, '/UIK/dist/photo/etudiant/9/logoFinalUIK.png', '22645369', '7 rue habibe bougatfa, Hammam-lif', '1999-02-02', 1, 1),
(10, 'DouDou', 'Hanine', 'hanine.doudou@gmail.com', 'hanine.doudou', 'aa', 4, '/UIK/photo/etudiant/10/logoFinalUIK.png', '24666892', 'hammam lif', '2000-01-08', 2, 1),
(14, 'Ben ali', 'Ahlem', 'ahlem.benali@gmail.com', 'ahlem.benali', 'aa', 3, '/UIK/photo/prof/14/logoFinalUIK.png', '54693268', 'Tunis', '1988-05-14', 2, 1);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_chaptire`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_chaptire` (
`id` int(11)
,`libelle_chaptire` varchar(100)
,`id_cour` int(11)
,`dt_chaptire` date
,`support` varchar(200)
,`support_name` varchar(200)
,`id_type_cour` int(11)
,`libelle_type_chaptire` varchar(200)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_cour`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_cour` (
`id` int(11)
,`libelle` varchar(100)
,`duree` varchar(100)
,`credits` int(1)
,`id_semester` int(11)
,`libelle_semester` varchar(200)
,`id_annee_scolaire` int(11)
,`annee_scolaire` varchar(100)
,`id_enseignant` int(11)
,`prenom` varchar(100)
,`nom` varchar(100)
,`id_barnche` int(11)
,`libelle_branche` varchar(100)
,`id_specialite` int(11)
,`libelle_specialite` varchar(100)
,`id_groupe` int(11)
,`libelle_groupe` varchar(100)
,`dt_cour` date
,`id_users` int(11)
,`id_niveau` int(11)
,`libelle_niveau` varchar(100)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_cour_salle`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_cour_salle` (
`id` int(11)
,`dt_cour` date
,`id_cour` int(11)
,`cour_libelle` varchar(100)
,`id_salle` int(11)
,`salle_libelle` varchar(200)
,`id_enseignant` int(11)
,`id_users` int(11)
,`id_groupe` int(11)
,`groupe_libelle` varchar(100)
,`couverture` varchar(250)
,`id_niveau` int(11)
,`libelle_niveau` varchar(100)
,`nom` varchar(100)
,`prenom` varchar(100)
,`id_semester` int(11)
,`semestre_libelle` varchar(200)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_enseignant`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_enseignant` (
`id_user` int(11)
,`nom` varchar(100)
,`prenom` varchar(100)
,`email` varchar(100)
,`photo` varchar(200)
,`num_telephone` varchar(100)
,`adresse` varchar(200)
,`dt_naissance` date
,`profile_libelle` varchar(100)
,`id_ensigant` int(11)
,`specialite` varchar(100)
,`universite` varchar(100)
,`lieu` varchar(100)
,`login` varchar(100)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_etudiant`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_etudiant` (
`id` int(11)
,`id_user` int(11)
,`nom` varchar(100)
,`prenom` varchar(100)
,`email` varchar(100)
,`adresse` varchar(200)
,`num_telephone` varchar(100)
,`dt_naissance` date
,`id_groupe` int(11)
,`libelle_groupe` varchar(100)
,`id_branche` int(11)
,`libelle_barche` varchar(100)
,`id_niveau` int(11)
,`libelle_niveau` varchar(100)
,`id_specialite` int(11)
,`libelle_specialite` varchar(100)
,`credit` decimal(32,0)
,`photo` varchar(200)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_evaluation_rendu`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_evaluation_rendu` (
`id` int(11)
,`note` double
,`dt_depot` date
,`id_group_etud` int(11)
,`id_user` int(11)
,`id_rendu` int(11)
,`libelle_rendu` varchar(100)
,`id_chaptir` int(11)
,`libelle_chaptir` varchar(100)
,`id_cour` int(11)
,`libelle_cour` varchar(100)
,`id_semester` int(11)
,`code_semester` varchar(100)
,`libelle_semester` varchar(200)
,`id_annee_scolaire` int(11)
,`annee_scolaire` varchar(100)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_examen`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_examen` (
`id` int(11)
,`examen_libelle` varchar(100)
,`coefficient` double
,`duree` double
,`pourcentage` int(3)
,`dt_debut` int(11)
,`dt_fin` int(11)
,`dt_examen` date
,`id_type_examen` int(11)
,`type_examen_libelle` varchar(100)
,`id_cour` int(11)
,`cour_libelle` varchar(100)
,`id_semester` int(11)
,`semester_libelle` varchar(200)
,`id_annee_scolaire` int(11)
,`id_groupe` int(11)
,`groupe_libelle` varchar(100)
,`id_enseignant` int(11)
,`id_users` int(11)
,`id_salle` int(11)
,`salle_libelle` varchar(200)
,`nom` varchar(100)
,`prenom` varchar(100)
,`id_niveau` int(11)
,`libelle_niveau` varchar(100)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_groupe`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_groupe` (
`id` int(11)
,`libelle` varchar(100)
,`id_annee_scol` int(11)
,`annee_scolaire` varchar(100)
,`id_branche` int(11)
,`libelle_branche` varchar(100)
,`id_specialite` int(11)
,`libelle_specialite` varchar(100)
,`id_niveau` int(11)
,`libelle_niveau` varchar(100)
,`actif` tinyint(1)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_groupe_prof`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_groupe_prof` (
`id` int(11)
,`id_groupe` int(11)
,`libelle` varchar(100)
,`id_enseignant` int(11)
,`id_users` int(11)
,`id_annee_scol` int(11)
,`annee_scolaire` varchar(100)
,`actif` tinyint(1)
,`nom` varchar(100)
,`prenom` varchar(100)
,`id_niveau` int(11)
,`libelle_niveau` varchar(100)
,`id_branche` int(11)
,`libelle_branche` varchar(100)
,`id_specialite` int(11)
,`libelle_specialite` varchar(100)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_rendu_grp_etud`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_rendu_grp_etud` (
`id` int(11)
,`dt_insert` date
,`support` varchar(250)
,`name_support` varchar(250)
,`id_groupe` int(11)
,`libelle_groupe` varchar(100)
,`nom` varchar(100)
,`prenom` varchar(100)
,`id_etudiant` int(11)
,`id_enseignant` int(11)
,`id_users_ensg` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_rendu_prof`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_rendu_prof` (
`id` int(11)
,`rendu_libelle` varchar(100)
,`dt_depot` date
,`support` varchar(200)
,`support_name` varchar(100)
,`dt_dealine` date
,`id_chaptir` int(11)
,`chaptir_libelle` varchar(100)
,`couverture` varchar(200)
,`id_cour` int(11)
,`cour_libelle` varchar(100)
,`id_semester` int(11)
,`semester_libelle` varchar(200)
,`id_enseignant` int(11)
,`id_users` int(11)
,`id_groupe` int(11)
,`groupe_libelle` varchar(100)
,`description` varchar(500)
,`remarque` varchar(500)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_users`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_users` (
`id` int(11)
,`nom` varchar(100)
,`prenom` varchar(100)
,`email` varchar(100)
,`login` varchar(100)
,`password` varchar(25)
,`id_profile` int(11)
,`actif` tinyint(1)
,`code` varchar(50)
,`libelle` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure de la vue `v_chaptire`
--
DROP TABLE IF EXISTS `v_chaptire`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_chaptire`  AS SELECT `c`.`id` AS `id`, `c`.`libelle` AS `libelle_chaptire`, `c`.`id_cour` AS `id_cour`, `c`.`dt_chaptire` AS `dt_chaptire`, `c`.`support` AS `support`, `c`.`support_name` AS `support_name`, `c`.`id_type_cour` AS `id_type_cour`, `tc`.`libelle` AS `libelle_type_chaptire` FROM (`chapitre` `c` join `type_chapitre` `tc` on(`tc`.`id` = `c`.`id_type_cour`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `v_cour`
--
DROP TABLE IF EXISTS `v_cour`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cour`  AS SELECT `c`.`id` AS `id`, `c`.`libelle` AS `libelle`, `c`.`duree` AS `duree`, `c`.`credits` AS `credits`, `c`.`id_semester` AS `id_semester`, `s`.`libelle` AS `libelle_semester`, `c`.`id_annee_scolaire` AS `id_annee_scolaire`, `as2`.`annee_scolaire` AS `annee_scolaire`, `c`.`id_enseignant` AS `id_enseignant`, `u`.`prenom` AS `prenom`, `u`.`nom` AS `nom`, `b`.`id` AS `id_barnche`, `b`.`libelle` AS `libelle_branche`, `b`.`id_specialite` AS `id_specialite`, `s3`.`libelle` AS `libelle_specialite`, `c`.`id_groupe` AS `id_groupe`, `g`.`libelle` AS `libelle_groupe`, `c`.`dt_cour` AS `dt_cour`, `e`.`id_users` AS `id_users`, `g`.`id_niveau` AS `id_niveau`, `n`.`libelle` AS `libelle_niveau` FROM ((((((((`cour` `c` join `semestre` `s` on(`s`.`id` = `c`.`id_semester`)) join `annee_scolaire` `as2` on(`as2`.`id` = `c`.`id_annee_scolaire` and `as2`.`actif` = 1)) join `enseignant` `e` on(`e`.`id` = `c`.`id_enseignant`)) join `users` `u` on(`u`.`id` = `e`.`id_users`)) join `groupe` `g` on(`g`.`id` = `c`.`id_groupe`)) join `branche` `b` on(`b`.`id` = `g`.`id_branche`)) join `specialite` `s3` on(`s3`.`id` = `b`.`id_specialite`)) join `niveau` `n` on(`n`.`id` = `g`.`id_niveau`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `v_cour_salle`
--
DROP TABLE IF EXISTS `v_cour_salle`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cour_salle`  AS SELECT `cs`.`id` AS `id`, `cs`.`dt_cour` AS `dt_cour`, `cs`.`id_cour` AS `id_cour`, `c`.`libelle` AS `cour_libelle`, `cs`.`id_salle` AS `id_salle`, `s`.`libelle` AS `salle_libelle`, `c`.`id_enseignant` AS `id_enseignant`, `e`.`id_users` AS `id_users`, `c`.`id_groupe` AS `id_groupe`, `g`.`libelle` AS `groupe_libelle`, `c`.`couverture` AS `couverture`, `g`.`id_niveau` AS `id_niveau`, `n`.`libelle` AS `libelle_niveau`, `u`.`nom` AS `nom`, `u`.`prenom` AS `prenom`, `c`.`id_semester` AS `id_semester`, `se`.`libelle` AS `semestre_libelle` FROM ((((((((`cour_salle` `cs` join `salle` `s` on(`s`.`id` = `cs`.`id_salle`)) join `cour` `c` on(`c`.`id` = `cs`.`id_cour`)) join `semestre` `se` on(`se`.`id` = `c`.`id_semester`)) join `enseignant` `e` on(`e`.`id` = `c`.`id_enseignant`)) join `groupe` `g` on(`g`.`id` = `c`.`id_groupe`)) join `niveau` `n` on(`n`.`id` = `g`.`id_niveau`)) join `annee_scolaire` `as2` on(`as2`.`id` = `c`.`id_annee_scolaire` and `as2`.`actif` = '1')) join `users` `u` on(`u`.`id` = `e`.`id_users`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `v_enseignant`
--
DROP TABLE IF EXISTS `v_enseignant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_enseignant`  AS SELECT `u`.`id` AS `id_user`, `u`.`nom` AS `nom`, `u`.`prenom` AS `prenom`, `u`.`email` AS `email`, `u`.`photo` AS `photo`, `u`.`num_telephone` AS `num_telephone`, `u`.`adresse` AS `adresse`, `u`.`dt_naissance` AS `dt_naissance`, `p`.`libelle` AS `profile_libelle`, `e`.`id` AS `id_ensigant`, `e`.`specialite` AS `specialite`, `e`.`universite` AS `universite`, `e`.`lieu` AS `lieu`, `u`.`login` AS `login` FROM ((`users` `u` join `profile` `p` on(`p`.`id` = `u`.`id_profile` and `p`.`code` = 'ENSG')) join `enseignant` `e` on(`e`.`id_users` = `u`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `v_etudiant`
--
DROP TABLE IF EXISTS `v_etudiant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_etudiant`  AS SELECT `e`.`id` AS `id`, `e`.`id_user` AS `id_user`, `u`.`nom` AS `nom`, `u`.`prenom` AS `prenom`, `u`.`email` AS `email`, `u`.`adresse` AS `adresse`, `u`.`num_telephone` AS `num_telephone`, `u`.`dt_naissance` AS `dt_naissance`, `ge`.`id_groupe` AS `id_groupe`, `g`.`libelle` AS `libelle_groupe`, `g`.`id_branche` AS `id_branche`, `b`.`libelle` AS `libelle_barche`, `g`.`id_niveau` AS `id_niveau`, `n`.`libelle` AS `libelle_niveau`, `b`.`id_specialite` AS `id_specialite`, `s`.`libelle` AS `libelle_specialite`, (select sum(`c`.`credits`) from ((`cour` `c` join `enseignant` `e2` on(`e2`.`id` = `c`.`id_enseignant`)) join `groupe_enseignant` `ge2` on(`ge2`.`id_enseignant` = `e2`.`id` and `ge2`.`id_groupe` = `g`.`id`))) AS `credit`, `u`.`photo` AS `photo` FROM (((((((`etudiant` `e` join `users` `u` on(`u`.`id` = `e`.`id_user`)) join `groupe_etudiant` `ge` on(`ge`.`id_etudiant` = `e`.`id`)) join `groupe` `g` on(`g`.`id` = `ge`.`id_groupe`)) join `niveau` `n` on(`n`.`id` = `g`.`id_niveau`)) join `annee_scolaire` `as2` on(`as2`.`id` = `g`.`id_annee_scol` and `as2`.`actif` = '1')) join `branche` `b` on(`b`.`id` = `g`.`id_branche`)) join `specialite` `s` on(`s`.`id` = `b`.`id_specialite`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `v_evaluation_rendu`
--
DROP TABLE IF EXISTS `v_evaluation_rendu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_evaluation_rendu`  AS SELECT `ege`.`id` AS `id`, `ege`.`note` AS `note`, `ege`.`dt_depot` AS `dt_depot`, `ege`.`id_group_etud` AS `id_group_etud`, `e`.`id_user` AS `id_user`, `ege`.`id_rendu` AS `id_rendu`, `r`.`libelle` AS `libelle_rendu`, `r`.`id_chaptir` AS `id_chaptir`, `c2`.`libelle` AS `libelle_chaptir`, `c2`.`id_cour` AS `id_cour`, `c`.`libelle` AS `libelle_cour`, `c`.`id_semester` AS `id_semester`, `s`.`code` AS `code_semester`, `s`.`libelle` AS `libelle_semester`, `c`.`id_annee_scolaire` AS `id_annee_scolaire`, `as2`.`annee_scolaire` AS `annee_scolaire` FROM (((((((`evaluation_grp_etud` `ege` join `groupe_etudiant` `ge` on(`ge`.`id` = `ege`.`id_group_etud`)) join `etudiant` `e` on(`e`.`id` = `ge`.`id_etudiant`)) join `rendu` `r` on(`r`.`id` = `ege`.`id_rendu`)) join `chapitre` `c2` on(`c2`.`id` = `r`.`id_chaptir`)) join `cour` `c` on(`c`.`id` = `c2`.`id_cour`)) join `annee_scolaire` `as2` on(`as2`.`id` = `c`.`id_semester` and `as2`.`actif` = '1')) join `semestre` `s` on(`s`.`id` = `c`.`id_semester`)) ORDER BY `s`.`id` ASC, `ege`.`dt_depot` DESC ;

-- --------------------------------------------------------

--
-- Structure de la vue `v_examen`
--
DROP TABLE IF EXISTS `v_examen`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_examen`  AS SELECT `e`.`id` AS `id`, `e`.`libelle` AS `examen_libelle`, `e`.`coefficient` AS `coefficient`, `e`.`duree` AS `duree`, `e`.`pourcentage` AS `pourcentage`, `e`.`dt_debut` AS `dt_debut`, `e`.`dt_fin` AS `dt_fin`, `e`.`dt_examen` AS `dt_examen`, `e`.`id_type_examen` AS `id_type_examen`, `te`.`libelle` AS `type_examen_libelle`, `e`.`id_cour` AS `id_cour`, `c`.`libelle` AS `cour_libelle`, `c`.`id_semester` AS `id_semester`, `s`.`libelle` AS `semester_libelle`, `c`.`id_annee_scolaire` AS `id_annee_scolaire`, `c`.`id_groupe` AS `id_groupe`, `g`.`libelle` AS `groupe_libelle`, `c`.`id_enseignant` AS `id_enseignant`, `e2`.`id_users` AS `id_users`, `e`.`id_salle` AS `id_salle`, `sa`.`libelle` AS `salle_libelle`, `u`.`nom` AS `nom`, `u`.`prenom` AS `prenom`, `g`.`id_niveau` AS `id_niveau`, `n`.`libelle` AS `libelle_niveau` FROM (((((((((`examen` `e` join `type_examen` `te` on(`te`.`id` = `e`.`id_type_examen`)) join `cour` `c` on(`c`.`id` = `e`.`id_cour`)) join `semestre` `s` on(`s`.`id` = `c`.`id_semester`)) join `annee_scolaire` `as2` on(`as2`.`id` = `c`.`id_annee_scolaire` and `as2`.`actif` = '1')) join `enseignant` `e2` on(`e2`.`id` = `c`.`id_enseignant`)) join `groupe` `g` on(`g`.`id` = `c`.`id_groupe`)) join `salle` `sa` on(`sa`.`id` = `e`.`id_salle`)) join `users` `u` on(`u`.`id` = `e2`.`id_users`)) join `niveau` `n` on(`n`.`id` = `g`.`id_niveau`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `v_groupe`
--
DROP TABLE IF EXISTS `v_groupe`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_groupe`  AS SELECT `g`.`id` AS `id`, `g`.`libelle` AS `libelle`, `g`.`id_annee_scol` AS `id_annee_scol`, `scol`.`annee_scolaire` AS `annee_scolaire`, `g`.`id_branche` AS `id_branche`, `b`.`libelle` AS `libelle_branche`, `b`.`id_specialite` AS `id_specialite`, `s`.`libelle` AS `libelle_specialite`, `g`.`id_niveau` AS `id_niveau`, `n`.`libelle` AS `libelle_niveau`, `scol`.`actif` AS `actif` FROM ((((`groupe` `g` join `niveau` `n` on(`n`.`id` = `g`.`id_niveau`)) join `annee_scolaire` `scol` on(`scol`.`id` = `g`.`id_annee_scol`)) join `branche` `b` on(`b`.`id` = `g`.`id_branche`)) join `specialite` `s` on(`s`.`id` = `b`.`id_specialite`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `v_groupe_prof`
--
DROP TABLE IF EXISTS `v_groupe_prof`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_groupe_prof`  AS SELECT `ge`.`id` AS `id`, `ge`.`id_groupe` AS `id_groupe`, `g`.`libelle` AS `libelle`, `ge`.`id_enseignant` AS `id_enseignant`, `e`.`id_users` AS `id_users`, `g`.`id_annee_scol` AS `id_annee_scol`, `as2`.`annee_scolaire` AS `annee_scolaire`, `as2`.`actif` AS `actif`, `u`.`nom` AS `nom`, `u`.`prenom` AS `prenom`, `g`.`id_niveau` AS `id_niveau`, `n`.`libelle` AS `libelle_niveau`, `g`.`id_branche` AS `id_branche`, `b`.`libelle` AS `libelle_branche`, `b`.`id_specialite` AS `id_specialite`, `s`.`libelle` AS `libelle_specialite` FROM (((((((`groupe_enseignant` `ge` join `groupe` `g` on(`g`.`id` = `ge`.`id_groupe`)) join `niveau` `n` on(`n`.`id` = `g`.`id_niveau`)) join `annee_scolaire` `as2` on(`as2`.`id` = `g`.`id_annee_scol`)) join `enseignant` `e` on(`e`.`id` = `ge`.`id_enseignant`)) join `users` `u` on(`u`.`id` = `e`.`id_users`)) join `branche` `b` on(`b`.`id` = `g`.`id_branche`)) join `specialite` `s` on(`s`.`id` = `b`.`id_specialite`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `v_rendu_grp_etud`
--
DROP TABLE IF EXISTS `v_rendu_grp_etud`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_rendu_grp_etud`  AS SELECT `rge`.`id` AS `id`, `rge`.`dt_insert` AS `dt_insert`, `rge`.`support` AS `support`, `rge`.`name_support` AS `name_support`, `g`.`id` AS `id_groupe`, `g`.`libelle` AS `libelle_groupe`, `u`.`nom` AS `nom`, `u`.`prenom` AS `prenom`, `e`.`id` AS `id_etudiant`, `c2`.`id_enseignant` AS `id_enseignant`, `e2`.`id_users` AS `id_users_ensg` FROM (((((((((((`rendu_grp_etud` `rge` join `evaluation_grp_etud` `ege` on(`ege`.`id` = `rge`.`id_evaluation_grp_etud`)) join `groupe_etudiant` `ge` on(`ge`.`id` = `ege`.`id_group_etud`)) join `groupe` `g` on(`g`.`id` = `ge`.`id_groupe`)) join `etudiant` `e` on(`e`.`id` = `ge`.`id_etudiant`)) join `users` `u` on(`u`.`id` = `e`.`id_user`)) join `rendu` `r` on(`r`.`id` = `ege`.`id_rendu`)) join `chapitre` `c` on(`c`.`id` = `r`.`id_chaptir`)) join `cour` `c2` on(`c2`.`id` = `c`.`id_cour`)) join `semestre` `s` on(`s`.`id` = `c2`.`id_semester` and `s`.`actif` = '1')) join `annee_scolaire` `as2` on(`as2`.`id` = `c2`.`id_annee_scolaire` and `as2`.`actif` = '1')) join `enseignant` `e2` on(`e2`.`id` = `c2`.`id_enseignant`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `v_rendu_prof`
--
DROP TABLE IF EXISTS `v_rendu_prof`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_rendu_prof`  AS SELECT `r`.`id` AS `id`, `r`.`libelle` AS `rendu_libelle`, `r`.`dt_depot` AS `dt_depot`, `r`.`support` AS `support`, `r`.`support_name` AS `support_name`, `r`.`dt_dealine` AS `dt_dealine`, `r`.`id_chaptir` AS `id_chaptir`, `c`.`libelle` AS `chaptir_libelle`, `c`.`couverture` AS `couverture`, `c`.`id_cour` AS `id_cour`, `c2`.`libelle` AS `cour_libelle`, `c2`.`id_semester` AS `id_semester`, `s`.`libelle` AS `semester_libelle`, `c2`.`id_enseignant` AS `id_enseignant`, `e`.`id_users` AS `id_users`, `c2`.`id_groupe` AS `id_groupe`, `g`.`libelle` AS `groupe_libelle`, `r`.`description` AS `description`, `r`.`remarque` AS `remarque` FROM ((((((`rendu` `r` join `chapitre` `c` on(`c`.`id` = `r`.`id_chaptir`)) join `cour` `c2` on(`c2`.`id` = `c`.`id_cour`)) join `annee_scolaire` `as2` on(`as2`.`id` = `c2`.`id_annee_scolaire` and `as2`.`actif` = '1')) join `semestre` `s` on(`s`.`id` = `c2`.`id_semester` and `as2`.`actif` = '1')) join `enseignant` `e` on(`e`.`id` = `c2`.`id_enseignant`)) join `groupe` `g` on(`g`.`id` = `c2`.`id_groupe`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `v_users`
--
DROP TABLE IF EXISTS `v_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_users`  AS SELECT `u`.`id` AS `id`, `u`.`nom` AS `nom`, `u`.`prenom` AS `prenom`, `u`.`email` AS `email`, `u`.`login` AS `login`, `u`.`password` AS `password`, `u`.`id_profile` AS `id_profile`, `u`.`actif` AS `actif`, `p`.`code` AS `code`, `p`.`libelle` AS `libelle` FROM (`users` `u` join `profile` `p` on(`p`.`id` = `u`.`id_profile`)) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annee_scolaire`
--
ALTER TABLE `annee_scolaire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `annee_scolaire_un` (`annee_scolaire`);

--
-- Index pour la table `branche`
--
ALTER TABLE `branche`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branche_FK` (`id_specialite`);

--
-- Index pour la table `chapitre`
--
ALTER TABLE `chapitre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chapitre_FK` (`id_cour`),
  ADD KEY `chapitre_FK_1` (`id_type_cour`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentaire_FK` (`id_groupe_eng`),
  ADD KEY `commentaire_FK_1` (`id_groupe_etud`);

--
-- Index pour la table `cour`
--
ALTER TABLE `cour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cour_FK_1` (`id_enseignant`),
  ADD KEY `cour_FK_2` (`id_semester`),
  ADD KEY `cour_FK_3` (`id_annee_scolaire`);

--
-- Index pour la table `cour_salle`
--
ALTER TABLE `cour_salle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cour_salle_FK` (`id_cour`),
  ADD KEY `cour_salle_FK_1` (`id_salle`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enseignant_FK` (`id_users`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etudiant_FK` (`id_user`);

--
-- Index pour la table `evaluation_grp_etud`
--
ALTER TABLE `evaluation_grp_etud`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evaluation_grp_etud_FK` (`id_rendu`),
  ADD KEY `evaluation_grp_etud_FK_1` (`id_examen`),
  ADD KEY `evaluation_grp_etud_FK_2` (`id_group_etud`);

--
-- Index pour la table `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `examen_FK` (`id_cour`),
  ADD KEY `examen_FK_1` (`id_type_examen`),
  ADD KEY `examen_FK_2` (`id_salle`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experience_FK` (`id_enseignant`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupe_FK` (`id_annee_scol`),
  ADD KEY `groupe_FK_1` (`id_branche`),
  ADD KEY `groupe_FK_2` (`id_niveau`);

--
-- Index pour la table `groupe_enseignant`
--
ALTER TABLE `groupe_enseignant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupe_enseignant_FK` (`id_enseignant`),
  ADD KEY `groupe_enseignant_FK_1` (`id_groupe`);

--
-- Index pour la table `groupe_etudiant`
--
ALTER TABLE `groupe_etudiant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupe_etudiant_FK` (`id_groupe`),
  ADD KEY `groupe_etudiant_FK_1` (`id_etudiant`),
  ADD KEY `groupe_etudiant_FK_2` (`id_situation_etudiant`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rendu`
--
ALTER TABLE `rendu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rendu_FK` (`id_chaptir`);

--
-- Index pour la table `rendu_grp_etud`
--
ALTER TABLE `rendu_grp_etud`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rendu_grp_etud_FK` (`id_evaluation_grp_etud`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sexe`
--
ALTER TABLE `sexe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `situation_etudiant`
--
ALTER TABLE `situation_etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_chapitre`
--
ALTER TABLE `type_chapitre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_examen`
--
ALTER TABLE `type_examen`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_un` (`login`,`email`),
  ADD KEY `users_FK` (`id_profile`),
  ADD KEY `users_FK_1` (`id_sexe`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annee_scolaire`
--
ALTER TABLE `annee_scolaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `branche`
--
ALTER TABLE `branche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `chapitre`
--
ALTER TABLE `chapitre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `cour`
--
ALTER TABLE `cour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `cour_salle`
--
ALTER TABLE `cour_salle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `evaluation_grp_etud`
--
ALTER TABLE `evaluation_grp_etud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `examen`
--
ALTER TABLE `examen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `groupe_enseignant`
--
ALTER TABLE `groupe_enseignant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `groupe_etudiant`
--
ALTER TABLE `groupe_etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `rendu`
--
ALTER TABLE `rendu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `rendu_grp_etud`
--
ALTER TABLE `rendu_grp_etud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `semestre`
--
ALTER TABLE `semestre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `sexe`
--
ALTER TABLE `sexe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `situation_etudiant`
--
ALTER TABLE `situation_etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `type_chapitre`
--
ALTER TABLE `type_chapitre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `type_examen`
--
ALTER TABLE `type_examen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `branche`
--
ALTER TABLE `branche`
  ADD CONSTRAINT `branche_FK` FOREIGN KEY (`id_specialite`) REFERENCES `specialite` (`id`);

--
-- Contraintes pour la table `chapitre`
--
ALTER TABLE `chapitre`
  ADD CONSTRAINT `chapitre_FK` FOREIGN KEY (`id_cour`) REFERENCES `cour` (`id`),
  ADD CONSTRAINT `chapitre_FK_1` FOREIGN KEY (`id_type_cour`) REFERENCES `type_chapitre` (`id`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_FK` FOREIGN KEY (`id_groupe_eng`) REFERENCES `groupe_enseignant` (`id`),
  ADD CONSTRAINT `commentaire_FK_1` FOREIGN KEY (`id_groupe_etud`) REFERENCES `groupe_etudiant` (`id`);

--
-- Contraintes pour la table `cour`
--
ALTER TABLE `cour`
  ADD CONSTRAINT `cour_FK` FOREIGN KEY (`id_annee_scolaire`) REFERENCES `annee_scolaire` (`id`),
  ADD CONSTRAINT `cour_FK_1` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id`),
  ADD CONSTRAINT `cour_FK_2` FOREIGN KEY (`id_semester`) REFERENCES `semestre` (`id`);

--
-- Contraintes pour la table `cour_salle`
--
ALTER TABLE `cour_salle`
  ADD CONSTRAINT `cour_salle_FK` FOREIGN KEY (`id_cour`) REFERENCES `cour` (`id`),
  ADD CONSTRAINT `cour_salle_FK_1` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id`);

--
-- Contraintes pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `enseignant_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `evaluation_grp_etud`
--
ALTER TABLE `evaluation_grp_etud`
  ADD CONSTRAINT `evaluation_grp_etud_FK` FOREIGN KEY (`id_rendu`) REFERENCES `rendu` (`id`),
  ADD CONSTRAINT `evaluation_grp_etud_FK_1` FOREIGN KEY (`id_examen`) REFERENCES `examen` (`id`),
  ADD CONSTRAINT `evaluation_grp_etud_FK_2` FOREIGN KEY (`id_group_etud`) REFERENCES `groupe_etudiant` (`id`);

--
-- Contraintes pour la table `examen`
--
ALTER TABLE `examen`
  ADD CONSTRAINT `examen_FK` FOREIGN KEY (`id_cour`) REFERENCES `cour` (`id`),
  ADD CONSTRAINT `examen_FK_1` FOREIGN KEY (`id_type_examen`) REFERENCES `type_examen` (`id`),
  ADD CONSTRAINT `examen_FK_2` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id`);

--
-- Contraintes pour la table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_FK` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id`);

--
-- Contraintes pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `groupe_FK` FOREIGN KEY (`id_annee_scol`) REFERENCES `annee_scolaire` (`id`),
  ADD CONSTRAINT `groupe_FK_1` FOREIGN KEY (`id_branche`) REFERENCES `branche` (`id`),
  ADD CONSTRAINT `groupe_FK_2` FOREIGN KEY (`id_niveau`) REFERENCES `niveau` (`id`);

--
-- Contraintes pour la table `groupe_enseignant`
--
ALTER TABLE `groupe_enseignant`
  ADD CONSTRAINT `groupe_enseignant_FK` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id`),
  ADD CONSTRAINT `groupe_enseignant_FK_1` FOREIGN KEY (`id_groupe`) REFERENCES `groupe` (`id`);

--
-- Contraintes pour la table `groupe_etudiant`
--
ALTER TABLE `groupe_etudiant`
  ADD CONSTRAINT `groupe_etudiant_FK` FOREIGN KEY (`id_groupe`) REFERENCES `groupe` (`id`),
  ADD CONSTRAINT `groupe_etudiant_FK_1` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`id`),
  ADD CONSTRAINT `groupe_etudiant_FK_2` FOREIGN KEY (`id_situation_etudiant`) REFERENCES `situation_etudiant` (`id`);

--
-- Contraintes pour la table `rendu`
--
ALTER TABLE `rendu`
  ADD CONSTRAINT `rendu_FK` FOREIGN KEY (`id_chaptir`) REFERENCES `chapitre` (`id`);

--
-- Contraintes pour la table `rendu_grp_etud`
--
ALTER TABLE `rendu_grp_etud`
  ADD CONSTRAINT `rendu_grp_etud_FK` FOREIGN KEY (`id_evaluation_grp_etud`) REFERENCES `evaluation_grp_etud` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_FK` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id`),
  ADD CONSTRAINT `users_FK_1` FOREIGN KEY (`id_sexe`) REFERENCES `sexe` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
