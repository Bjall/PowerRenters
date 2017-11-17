-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 14 nov. 2017 à 09:41
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `powerrenters`
--

-- --------------------------------------------------------

--
-- Structure de la table `accessoire`
--

DROP TABLE IF EXISTS `accessoire`;
CREATE TABLE IF NOT EXISTS `accessoire` (
  `acc_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_libelle` varchar(50) NOT NULL,
  `acc_prix_u_ht` float NOT NULL,
  PRIMARY KEY (`acc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `accessoire`
--

INSERT INTO `accessoire` (`acc_id`, `acc_libelle`, `acc_prix_u_ht`) VALUES
(1, 'Siège auto', 15),
(2, 'Réhausseur', 10),
(3, 'GPS', 5),
(4, 'Casque vélo adulte', 5),
(5, 'Casque moto', 30),
(6, 'Casque vélo enfant', 2),
(7, 'Gant moto', 15),
(8, 'Blouson moto', 20),
(9, 'Remorque vélo simple', 20),
(10, 'Remorque vélo double', 30);

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `adresse_id` int(11) NOT NULL AUTO_INCREMENT,
  `adresse_l1` varchar(50) NOT NULL,
  `adresse_l2` varchar(50) DEFAULT NULL,
  `adresse_l3` varchar(50) DEFAULT NULL,
  `cli_id` int(11) NOT NULL,
  `type_adr_id` int(11) NOT NULL,
  `cp_id` int(11) NOT NULL,
  PRIMARY KEY (`adresse_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`adresse_id`, `adresse_l1`, `adresse_l2`, `adresse_l3`, `cli_id`, `type_adr_id`, `cp_id`) VALUES
(1, '6 bis rue de l\'Enfer', NULL, NULL, 1, 1, 1),
(2, '78 rue des Pucelles', 'Appt. 5', NULL, 2, 3, 2),
(3, '243 rue des Mauvais Garçons', 'Bâtiment B 2ème étage', 'Appt. 6', 3, 2, 3),
(4, '29 ter rue de la Gerbe', NULL, NULL, 4, 2, 4),
(5, '34 rue de la Dette', NULL, NULL, 5, 1, 5),
(6, '19 rue des Merdes de Chiens', 'Appt. 2', NULL, 6, 1, 6),
(7, '114 rue de la Queue de la Vache', NULL, NULL, 7, 3, 7),
(8, '28 avenue de la Fringale', NULL, NULL, 8, 3, 8),
(9, '2 bis chemin du Paradis', NULL, NULL, 9, 1, 9),
(10, '7 rue de la Grande Truanderie', '6ème étage', NULL, 10, 2, 10),
(11, '46 rue de la Verge d\'Or', NULL, NULL, 11, 2, 11),
(12, 'Mauffans', 'rue du Cul du Putois', NULL, 12, 1, 12);

-- --------------------------------------------------------

--
-- Structure de la table `ajouter`
--

DROP TABLE IF EXISTS `ajouter`;
CREATE TABLE IF NOT EXISTS `ajouter` (
  `contrat_id` int(11) NOT NULL,
  `option_cont_id` int(11) NOT NULL,
  PRIMARY KEY (`contrat_id`,`option_cont_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ajouter`
--

INSERT INTO `ajouter` (`contrat_id`, `option_cont_id`) VALUES
(1, 1),
(1, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie_veh`
--

DROP TABLE IF EXISTS `categorie_veh`;
CREATE TABLE IF NOT EXISTS `categorie_veh` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie_veh`
--

INSERT INTO `categorie_veh` (`cat_id`, `cat_libelle`) VALUES
(1, 'Vélo'),
(2, 'Motos'),
(3, 'Voiture'),
(4, 'Utilitaire'),
(5, 'Van à chevaux');

-- --------------------------------------------------------

--
-- Structure de la table `civilite`
--

DROP TABLE IF EXISTS `civilite`;
CREATE TABLE IF NOT EXISTS `civilite` (
  `cli_civ_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_civ_libelle` varchar(5) NOT NULL,
  `cli_civ_denomination` varchar(15) NOT NULL,
  PRIMARY KEY (`cli_civ_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `civilite`
--

INSERT INTO `civilite` (`cli_civ_id`, `cli_civ_libelle`, `cli_civ_denomination`) VALUES
(1, 'Mme', 'Madame'),
(2, 'M', 'Monsieur');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_civ_id` int(11) NOT NULL,
  `cli_nom` varchar(25) NOT NULL,
  `cli_prenom` varchar(25) NOT NULL,
  `cli_date_naissance` date NOT NULL,
  `cli_mail` varchar(40) NOT NULL,
  `cli_mdp` varchar(25) NOT NULL,
  `cli_stat_id` int(11) NOT NULL,
  `cli_permis_numero` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`cli_id`),
  KEY `FK_client_cli_stat_id` (`cli_stat_id`),
  KEY `FK_client_cli_civ_id` (`cli_civ_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`cli_id`, `cli_civ_id`, `cli_nom`, `cli_prenom`, `cli_date_naissance`, `cli_mail`, `cli_mdp`, `cli_stat_id`, `cli_permis_numero`) VALUES
(1, 1, 'Delhopital', 'Nathalie', '1981-01-08', 'nathdelho@gmail.com', 'toto', 3, '080933200162'),
(2, 1, 'Jean', 'Pauline', '1991-06-07', 'pauljean@gmail.com', 'tata', 3, '080933200163'),
(3, 2, 'Jallet', 'Benoit', '1985-03-21', 'bjallet@gmail.com', 'titi', 3, '080933200164'),
(4, 1, 'Mendy', 'Bénédicte', '1996-06-01', 'benemend@gmail.com', 'tutu', 3, '080933200165'),
(5, 2, 'Soumaille', 'Lucas', '1995-02-01', 'lucassky@gmail.com', 'tete', 3, '080933200166'),
(6, 2, 'Scott', 'Jason', '1994-11-22', 'scott@yahoo.fr', 'red', 4, '080946984735'),
(7, 1, 'Hart', 'Kimberly', '1993-05-06', 'kim.hart@wanadoo.fr', 'yellow', 4, '492546987652'),
(8, 2, 'Cranston', 'William', '1995-03-21', 'cransty.crunchy@gmail.com', 'blue', 4, '080944284747'),
(9, 1, 'Kwan', 'Tini', '1997-03-02', 'kwakwakwa@hotmail.fr', 'pink', 4, '768026987432'),
(10, 2, 'Taylor', 'Zackary', '1984-11-11', 'blackisback@hotmail.fr', 'black', 4, '189526945322'),
(11, 2, 'Bambelle', 'Larry', '1972-04-01', 'lolguy@hotmail.fr', 'joke', 1, '189521989530'),
(12, 2, 'Patamoto', 'Adhemar', '1991-12-14', 'vroum@gmail.com', 'moto', 2, '187326987196'),
(13, 2, 'Auboisdormant', 'Abel', '1984-06-23', 'abel.auboisdormant@yahoo.fr', 'mickey', 1, '098563258954'),
(14, 2, 'Glace', 'Brice', '1976-10-19', 'brice_glace@hotmail.com', 'glagla', 1, '192325656232'),
(15, 1, 'Encieu', 'Cécile', '1983-01-24', 'cecile.encieu@gmail.com', 'chut', 2, '078956541236');

-- --------------------------------------------------------

--
-- Structure de la table `contratdelocation`
--

DROP TABLE IF EXISTS `contratdelocation`;
CREATE TABLE IF NOT EXISTS `contratdelocation` (
  `contrat_id` int(11) NOT NULL AUTO_INCREMENT,
  `contrat_date` date DEFAULT NULL,
  `contrat_lieu` varchar(20) NOT NULL,
  `contrat_date_fin` date NOT NULL,
  `contrat_date_debut` date NOT NULL,
  `contrat_caution` float DEFAULT NULL,
  `contrat_date_reservation` date DEFAULT NULL,
  `contrat_accompte` float DEFAULT NULL,
  `cli_id` int(11) NOT NULL,
  `tva_id` int(11) NOT NULL,
  `veh_id` int(11) NOT NULL,
  `fac_id` int(11) DEFAULT NULL,
  `forfait_id` int(11) NOT NULL,
  `statut_cont_id` int(11) NOT NULL,
  PRIMARY KEY (`contrat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contratdelocation`
--

INSERT INTO `contratdelocation` (`contrat_id`, `contrat_date`, `contrat_lieu`, `contrat_date_fin`, `contrat_date_debut`, `contrat_caution`, `contrat_date_reservation`, `contrat_accompte`, `cli_id`, `tva_id`, `veh_id`, `fac_id`, `forfait_id`, `statut_cont_id`) VALUES
(1, NULL, 'Bordeaux', '2017-10-23', '2017-10-20', NULL, '2017-10-15', 220, 11, 2, 1, NULL, 6, 1),
(2, '2017-09-20', 'Bordeaux', '2017-09-23', '2017-09-20', 200, NULL, NULL, 12, 2, 2, 1, 5, 3),
(3, '2017-08-20', 'Bordeaux', '2017-08-23', '2017-08-20', NULL, '2017-08-20', 400, 13, 2, 3, 2, 4, 3),
(4, '2017-10-10', 'Bordeaux', '2017-10-22', '2017-10-13', NULL, '2017-10-13', 400, 14, 2, 4, NULL, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `cpville`
--

DROP TABLE IF EXISTS `cpville`;
CREATE TABLE IF NOT EXISTS `cpville` (
  `cp_id` int(11) NOT NULL AUTO_INCREMENT,
  `cp_ville` varchar(20) NOT NULL,
  `cp_codepostal` varchar(10) NOT NULL,
  `pays_id` int(11) NOT NULL,
  PRIMARY KEY (`cp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cpville`
--

INSERT INTO `cpville` (`cp_id`, `cp_ville`, `cp_codepostal`, `pays_id`) VALUES
(1, 'Les Sables-d\'Olonne', '85100', 1),
(2, 'Strasbourg', '67000', 1),
(3, 'Paris', '75004', 1),
(4, 'Charvieu-Chavagneux', '38230', 1),
(5, 'Pornic', '44210', 1),
(6, 'Mortagne-sur-Gironde', '17120', 1),
(7, 'Amiens', '80000', 1),
(8, 'Tannay', '58190', 1),
(9, 'Joigny', '89300', 1),
(10, 'Paris', '75001', 1),
(11, 'Toulouse', '31000', 1),
(12, 'Mantry', '39230', 1);

-- --------------------------------------------------------

--
-- Structure de la table `detenir`
--

DROP TABLE IF EXISTS `detenir`;
CREATE TABLE IF NOT EXISTS `detenir` (
  `date_permis` date DEFAULT NULL,
  `cli_id` int(11) NOT NULL,
  `typepermis_id` int(11) NOT NULL,
  PRIMARY KEY (`cli_id`,`typepermis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `detenir`
--

INSERT INTO `detenir` (`date_permis`, `cli_id`, `typepermis_id`) VALUES
(NULL, 4, 4),
(NULL, 5, 2),
(NULL, 5, 4),
(NULL, 6, 1),
(NULL, 6, 2),
(NULL, 7, 2),
(NULL, 8, 4),
(NULL, 9, 4),
(NULL, 10, 2),
(NULL, 11, 3),
(NULL, 12, 5),
(NULL, 13, 4),
(NULL, 14, 4),
(NULL, 15, 4);

-- --------------------------------------------------------

--
-- Structure de la table `disposer`
--

DROP TABLE IF EXISTS `disposer`;
CREATE TABLE IF NOT EXISTS `disposer` (
  `option_veh_id` int(11) NOT NULL,
  `veh_id` int(11) NOT NULL,
  PRIMARY KEY (`option_veh_id`,`veh_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `disposer`
--

INSERT INTO `disposer` (`option_veh_id`, `veh_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(3, 5);

-- --------------------------------------------------------

--
-- Structure de la table `element_vehicule_etat`
--

DROP TABLE IF EXISTS `element_vehicule_etat`;
CREATE TABLE IF NOT EXISTS `element_vehicule_etat` (
  `element_id` int(11) NOT NULL AUTO_INCREMENT,
  `element_libelle` varchar(50) NOT NULL,
  `element_coefficient` float NOT NULL,
  PRIMARY KEY (`element_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `element_vehicule_etat`
--

INSERT INTO `element_vehicule_etat` (`element_id`, `element_libelle`, `element_coefficient`) VALUES
(1, 'RAS', 0),
(2, 'pneus', 1),
(3, 'aile', 5),
(4, 'rétroviseur', 0.1),
(5, 'pare-brise', 1),
(6, 'phare', 0.1);

-- --------------------------------------------------------

--
-- Structure de la table `entretien`
--

DROP TABLE IF EXISTS `entretien`;
CREATE TABLE IF NOT EXISTS `entretien` (
  `entr_id` int(11) NOT NULL AUTO_INCREMENT,
  `entr_libelle` varchar(50) NOT NULL,
  `entr_date` date NOT NULL,
  `stat_etat_id` int(11) NOT NULL,
  `pers_id` int(11) NOT NULL,
  `veh_id` int(11) NOT NULL,
  `statut_entretien_id` int(11) NOT NULL,
  PRIMARY KEY (`entr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entretien`
--

INSERT INTO `entretien` (`entr_id`, `entr_libelle`, `entr_date`, `stat_etat_id`, `pers_id`, `veh_id`, `statut_entretien_id`) VALUES
(1, 'nettoyage', '2017-10-17', 2, 2, 1, 1),
(2, 'vidange', '2017-09-12', 2, 1, 2, 1),
(3, 'changement ampoule', '2017-10-16', 2, 3, 3, 2),
(4, 'changement essuis glace', '2017-10-15', 2, 4, 3, 1),
(5, 'préparation', '2017-03-20', 2, 1, 1, 1),
(6, 'préparation', '2017-03-20', 2, 1, 2, 1),
(7, 'préparation', '2017-03-20', 2, 1, 3, 1),
(8, 'préparation', '2017-03-20', 2, 1, 4, 1),
(9, 'préparation', '2017-03-20', 2, 1, 5, 1),
(10, 'préparation', '2017-03-20', 2, 1, 6, 1),
(11, 'préparation', '2017-03-20', 2, 1, 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `etat_des_lieux`
--

DROP TABLE IF EXISTS `etat_des_lieux`;
CREATE TABLE IF NOT EXISTS `etat_des_lieux` (
  `etat_des_lieux_id` int(11) NOT NULL AUTO_INCREMENT,
  `etat_des_lieux_commentaire` blob NOT NULL,
  `etat_des_lieux_date` date NOT NULL,
  `pers_id` int(11) NOT NULL,
  `contrat_id` int(11) NOT NULL,
  PRIMARY KEY (`etat_des_lieux_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etat_des_lieux`
--

INSERT INTO `etat_des_lieux` (`etat_des_lieux_id`, `etat_des_lieux_commentaire`, `etat_des_lieux_date`, `pers_id`, `contrat_id`) VALUES
(1, 0x524153, '2017-08-20', 4, 3),
(2, 0x52c3a974726f766973657572204156472063617373c3a92c20506861726520415647, '2017-08-23', 3, 3),
(3, 0x524153, '2017-09-20', 1, 2),
(4, 0x52c3a9736572766f69722076696465, '2017-09-23', 1, 2),
(5, 0x524153, '2017-10-13', 3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `fac_id` int(11) NOT NULL AUTO_INCREMENT,
  `fac_montant` float NOT NULL,
  `fac_date` date NOT NULL,
  PRIMARY KEY (`fac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`fac_id`, `fac_montant`, `fac_date`) VALUES
(1, 200, '2017-10-17'),
(2, 220, '2017-10-16'),
(3, 250, '2017-09-15'),
(4, 300, '2017-08-14'),
(5, 2500, '2017-07-13');

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

DROP TABLE IF EXISTS `fonction`;
CREATE TABLE IF NOT EXISTS `fonction` (
  `fonc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fonc_libelle` varchar(25) NOT NULL,
  PRIMARY KEY (`fonc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`fonc_id`, `fonc_libelle`) VALUES
(1, 'mécanicien'),
(2, 'gestionnaire');

-- --------------------------------------------------------

--
-- Structure de la table `forfait`
--

DROP TABLE IF EXISTS `forfait`;
CREATE TABLE IF NOT EXISTS `forfait` (
  `forfait_id` int(11) NOT NULL AUTO_INCREMENT,
  `forfait_libelle` varchar(40) NOT NULL,
  `forfait_taux` float NOT NULL,
  PRIMARY KEY (`forfait_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `forfait`
--

INSERT INTO `forfait` (`forfait_id`, `forfait_libelle`, `forfait_taux`) VALUES
(1, 'Demi journée', 1.2),
(2, 'Un jour Hors Week-end', 1),
(3, 'Deux jours Hors Week-End', 0.94),
(4, 'Trois Jours Hors Week-End', 0.92),
(5, 'Semaine Hors Week-End', 0.88),
(6, 'Semaine Complète', 0.89),
(7, 'Week-End', 1.25),
(8, 'Mois', 0.75);

-- --------------------------------------------------------

--
-- Structure de la table `option_contrat`
--

DROP TABLE IF EXISTS `option_contrat`;
CREATE TABLE IF NOT EXISTS `option_contrat` (
  `option_cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `option_cont_libelle` varchar(30) NOT NULL,
  `option_cont_prix_journalier` float NOT NULL,
  PRIMARY KEY (`option_cont_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `option_contrat`
--

INSERT INTO `option_contrat` (`option_cont_id`, `option_cont_libelle`, `option_cont_prix_journalier`) VALUES
(1, 'conducteur supplémentaire', 8),
(2, 'rachat franchise ttc', 15);

-- --------------------------------------------------------

--
-- Structure de la table `option_veh`
--

DROP TABLE IF EXISTS `option_veh`;
CREATE TABLE IF NOT EXISTS `option_veh` (
  `option_veh_id` int(11) NOT NULL AUTO_INCREMENT,
  `option_veh_libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`option_veh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `option_veh`
--

INSERT INTO `option_veh` (`option_veh_id`, `option_veh_libelle`) VALUES
(1, 'climatisation'),
(2, 'siege chauffant'),
(3, 'siege cuir'),
(4, 'volant chauffant'),
(5, 'poignee chauffante');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `pays_id` int(11) NOT NULL AUTO_INCREMENT,
  `pays_libelle` varchar(15) NOT NULL,
  `pays_code` varchar(5) NOT NULL,
  PRIMARY KEY (`pays_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`pays_id`, `pays_libelle`, `pays_code`) VALUES
(1, 'FRANCE', 'FR'),
(2, 'ALLEMAGNE', 'DE'),
(3, 'ESPAGNE', 'ES'),
(4, 'ITALIE', 'IT'),
(5, 'BELGIQUE', 'BE'),
(6, 'ROYAUME-UNI', 'GB');

-- --------------------------------------------------------

--
-- Structure de la table `penaliser`
--

DROP TABLE IF EXISTS `penaliser`;
CREATE TABLE IF NOT EXISTS `penaliser` (
  `contrat_id` int(11) NOT NULL,
  `penalite_id` int(11) NOT NULL,
  PRIMARY KEY (`contrat_id`,`penalite_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `penaliser`
--

INSERT INTO `penaliser` (`contrat_id`, `penalite_id`) VALUES
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `penalites`
--

DROP TABLE IF EXISTS `penalites`;
CREATE TABLE IF NOT EXISTS `penalites` (
  `penalite_id` int(11) NOT NULL AUTO_INCREMENT,
  `penalite_libelle` varchar(50) NOT NULL,
  `penalite_forfait` float DEFAULT NULL,
  `penalite_coeff` float DEFAULT NULL,
  PRIMARY KEY (`penalite_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `penalites`
--

INSERT INTO `penalites` (`penalite_id`, `penalite_libelle`, `penalite_forfait`, `penalite_coeff`) VALUES
(1, 'jours de retard', NULL, 2),
(2, 'plein complet non fait', 100, NULL),
(3, 'annulation de la resa avant 7 jours', NULL, 0.2),
(4, 'contravention', 50, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

DROP TABLE IF EXISTS `personnel`;
CREATE TABLE IF NOT EXISTS `personnel` (
  `pers_id` int(11) NOT NULL AUTO_INCREMENT,
  `pers_nom` varchar(25) NOT NULL,
  `pers_prenom` varchar(25) NOT NULL,
  `fonc_id` int(11) NOT NULL,
  PRIMARY KEY (`pers_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnel`
--

INSERT INTO `personnel` (`pers_id`, `pers_nom`, `pers_prenom`, `fonc_id`) VALUES
(1, 'Larry', 'Bambelle', 1),
(2, 'Ray', 'Defesse', 2),
(3, 'Jerry', 'Kan', 1),
(4, 'Bart', 'Tabac', 1);

-- --------------------------------------------------------

--
-- Structure de la table `rajouter`
--

DROP TABLE IF EXISTS `rajouter`;
CREATE TABLE IF NOT EXISTS `rajouter` (
  `acc_id` int(11) NOT NULL,
  `contrat_id` int(11) NOT NULL,
  PRIMARY KEY (`acc_id`,`contrat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rajouter`
--

INSERT INTO `rajouter` (`acc_id`, `contrat_id`) VALUES
(1, 3),
(4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `sensuivre`
--

DROP TABLE IF EXISTS `sensuivre`;
CREATE TABLE IF NOT EXISTS `sensuivre` (
  `stat_etat_id` int(11) NOT NULL,
  `etat_des_lieux_id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL,
  PRIMARY KEY (`stat_etat_id`,`etat_des_lieux_id`,`element_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sensuivre`
--

INSERT INTO `sensuivre` (`stat_etat_id`, `etat_des_lieux_id`, `element_id`) VALUES
(2, 1, 1),
(2, 2, 3),
(2, 2, 4),
(2, 3, 1),
(2, 4, 1),
(2, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `statut_client`
--

DROP TABLE IF EXISTS `statut_client`;
CREATE TABLE IF NOT EXISTS `statut_client` (
  `cli_stat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_stat_libelle` char(25) NOT NULL,
  `cli_stat_taux` float DEFAULT NULL,
  PRIMARY KEY (`cli_stat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `statut_client`
--

INSERT INTO `statut_client` (`cli_stat_id`, `cli_stat_libelle`, `cli_stat_taux`) VALUES
(1, 'Particulier', 1),
(2, 'Professionnel', 0.9),
(3, 'Administrateur', NULL),
(4, 'Employé', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `statut_contrat`
--

DROP TABLE IF EXISTS `statut_contrat`;
CREATE TABLE IF NOT EXISTS `statut_contrat` (
  `statut_cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `statut_cont_libelle` varchar(25) NOT NULL,
  PRIMARY KEY (`statut_cont_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `statut_contrat`
--

INSERT INTO `statut_contrat` (`statut_cont_id`, `statut_cont_libelle`) VALUES
(1, 'non signé'),
(2, 'signé'),
(3, 'en attente'),
(4, 'cloturé');

-- --------------------------------------------------------

--
-- Structure de la table `statut_entretien`
--

DROP TABLE IF EXISTS `statut_entretien`;
CREATE TABLE IF NOT EXISTS `statut_entretien` (
  `statut_entretien_id` int(11) NOT NULL AUTO_INCREMENT,
  `statut_entretien_libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`statut_entretien_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `statut_entretien`
--

INSERT INTO `statut_entretien` (`statut_entretien_id`, `statut_entretien_libelle`) VALUES
(1, 'fait'),
(2, 'non fait'),
(3, 'en cours');

-- --------------------------------------------------------

--
-- Structure de la table `statut_etat_des_lieux`
--

DROP TABLE IF EXISTS `statut_etat_des_lieux`;
CREATE TABLE IF NOT EXISTS `statut_etat_des_lieux` (
  `stat_etat_id` int(11) NOT NULL AUTO_INCREMENT,
  `stat_etat_libelle` varchar(25) NOT NULL,
  PRIMARY KEY (`stat_etat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `statut_etat_des_lieux`
--

INSERT INTO `statut_etat_des_lieux` (`stat_etat_id`, `stat_etat_libelle`) VALUES
(1, 'Non Fait'),
(2, 'Fait');

-- --------------------------------------------------------

--
-- Structure de la table `tva`
--

DROP TABLE IF EXISTS `tva`;
CREATE TABLE IF NOT EXISTS `tva` (
  `tva_id` int(11) NOT NULL AUTO_INCREMENT,
  `tva_taux` float NOT NULL,
  PRIMARY KEY (`tva_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tva`
--

INSERT INTO `tva` (`tva_id`, `tva_taux`) VALUES
(1, 19.6),
(2, 20);

-- --------------------------------------------------------

--
-- Structure de la table `type_adresse`
--

DROP TABLE IF EXISTS `type_adresse`;
CREATE TABLE IF NOT EXISTS `type_adresse` (
  `type_adr_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_adr_libelle` varchar(20) NOT NULL,
  PRIMARY KEY (`type_adr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_adresse`
--

INSERT INTO `type_adresse` (`type_adr_id`, `type_adr_libelle`) VALUES
(1, 'domicile'),
(2, 'siège social'),
(3, 'facturation');

-- --------------------------------------------------------

--
-- Structure de la table `type_permis`
--

DROP TABLE IF EXISTS `type_permis`;
CREATE TABLE IF NOT EXISTS `type_permis` (
  `typepermis_id` int(11) NOT NULL AUTO_INCREMENT,
  `typepermis_denomination` varchar(50) NOT NULL,
  `typepermis_libelle` varchar(10) NOT NULL,
  PRIMARY KEY (`typepermis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_permis`
--

INSERT INTO `type_permis` (`typepermis_id`, `typepermis_denomination`, `typepermis_libelle`) VALUES
(1, 'Motocyclette légère', 'A1'),
(2, 'Motocyclette < 35kW', 'A2'),
(3, 'Motocyclette toute cylindrée', 'A'),
(4, 'Voiture', 'B'),
(5, 'Scooter et voiturette < 50cc', 'AM');

-- --------------------------------------------------------

--
-- Structure de la table `type_veh`
--

DROP TABLE IF EXISTS `type_veh`;
CREATE TABLE IF NOT EXISTS `type_veh` (
  `type_veh_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_veh_libelle` varchar(50) NOT NULL,
  `type_veh_prix` float NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`type_veh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_veh`
--

INSERT INTO `type_veh` (`type_veh_id`, `type_veh_libelle`, `type_veh_prix`, `cat_id`) VALUES
(1, 'moto_sportive', 160, 2),
(2, 'moto_routiere', 140, 2),
(3, 'moto_trail', 120, 2),
(4, 'moto_roadster', 100, 2),
(5, 'VTC', 10, 1),
(6, 'VTT', 15, 1),
(7, 'Tandem', 20, 1),
(8, 'Scooter', 40, 2),
(9, 'SUV', 75, 3),
(10, 'Berline', 60, 3),
(11, 'Citadine', 40, 3),
(12, 'Familiale', 80, 3),
(13, 'Sportive', 120, 3),
(14, 'Décapotable', 140, 3);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

DROP TABLE IF EXISTS `vehicule`;
CREATE TABLE IF NOT EXISTS `vehicule` (
  `veh_id` int(11) NOT NULL AUTO_INCREMENT,
  `veh_date_achat` date NOT NULL,
  `veh_photo` varchar(255) NOT NULL,
  `veh_nb_place` int(11) NOT NULL,
  `veh_assur` varchar(50) NOT NULL,
  `veh_date_mec` date DEFAULT NULL,
  `veh_kmage` int(11) DEFAULT NULL,
  `veh_ch_fisc` int(11) DEFAULT NULL,
  `veh_ch_reel` int(11) DEFAULT NULL,
  `veh_cyl` int(11) DEFAULT NULL,
  `type_veh_id` int(11) NOT NULL,
  `veh_boite_id` int(11) DEFAULT NULL,
  `vehm_carb_id` int(11) DEFAULT NULL,
  `veh_coul_id` int(11) NOT NULL,
  `vehmmod_id` int(11) NOT NULL,
  `veh_porte_id` int(11) DEFAULT NULL,
  `typepermis_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`veh_id`),
  KEY `FK_Vehicule_type_veh_id` (`type_veh_id`),
  KEY `FK_Vehicule_veh_boite_id` (`veh_boite_id`),
  KEY `FK_Vehicule_vehm_carb_id` (`vehm_carb_id`),
  KEY `FK_Vehicule_veh_coul_id` (`veh_coul_id`),
  KEY `FK_Vehicule_vehmmod_id` (`vehmmod_id`),
  KEY `FK_Vehicule_veh_porte_id` (`veh_porte_id`),
  KEY `FK_Vehicule_typepermis_id` (`typepermis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`veh_id`, `veh_date_achat`, `veh_photo`, `veh_nb_place`, `veh_assur`, `veh_date_mec`, `veh_kmage`, `veh_ch_fisc`, `veh_ch_reel`, `veh_cyl`, `type_veh_id`, `veh_boite_id`, `vehm_carb_id`, `veh_coul_id`, `vehmmod_id`, `veh_porte_id`, `typepermis_id`) VALUES
(1, '2017-03-19', '../images/photos/vehicule1.png', 4, 'F24415225555', '2017-03-19', 24630, 4, 90, 1242, 11, 1, 1, 8, 1, 1, 4),
(2, '2016-11-10', '../images/photos/vehicule2.png', 5, 'F24414627653', '2016-11-10', 46527, 4, 90, 1461, 11, 1, 2, 1, 2, 2, 4),
(3, '2016-08-23', '../images/photos/vehicule3.png', 5, 'F24417628652', '2016-08-23', 68426, 8, 150, 1997, 10, 1, 2, 2, 3, 3, 4),
(4, '2017-01-21', '../images/photos/vehicule4.png', 5, 'F24484622983', '2017-01-21', 12378, 12, 200, 1995, 9, 1, 1, 5, 4, 3, 4),
(5, '2017-03-19', '../images/photos/vehicule5.png', 5, 'F24417627612', '2017-03-19', 24630, 10, 184, 1242, 14, 2, 1, 10, 5, 1, 4),
(6, '2017-03-19', '../images/photos/vehicule5.png', 5, 'F24417627618', '2017-03-19', 18657, 10, 184, 1242, 14, 2, 1, 4, 5, 1, 4),
(7, '2015-09-13', '../images/photos/vehicule6.png', 1, 'F24415715223', NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, 2, 6, NULL, NULL),
(8, '2016-09-28', '../images/photos/vehicule7.png', 2, 'F24415478188', '2016-09-28', 54826, 7, 150, 749, 1, 1, 1, 2, 7, NULL, 3);

-- --------------------------------------------------------

--
-- Structure de la table `vehm_marque`
--

DROP TABLE IF EXISTS `vehm_marque`;
CREATE TABLE IF NOT EXISTS `vehm_marque` (
  `vehmar_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehmar_libelle` varchar(25) NOT NULL,
  PRIMARY KEY (`vehmar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vehm_marque`
--

INSERT INTO `vehm_marque` (`vehmar_id`, `vehmar_libelle`) VALUES
(1, 'Alfa Romeo'),
(2, 'Audi'),
(3, 'BMW'),
(4, 'Citroën'),
(5, 'Ferrari'),
(6, 'Fiat'),
(7, 'Ford'),
(8, 'Honda'),
(9, 'Jaguar'),
(10, 'Mercedes'),
(11, 'Mini'),
(12, 'Peugeot'),
(13, 'Renault'),
(14, 'SEAT'),
(15, 'Toyota'),
(16, 'Wolkswagen'),
(17, 'Volvo'),
(18, 'Suzuki');

-- --------------------------------------------------------

--
-- Structure de la table `vehm_modele`
--

DROP TABLE IF EXISTS `vehm_modele`;
CREATE TABLE IF NOT EXISTS `vehm_modele` (
  `vehmmod_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehmmod_libelle` varchar(255) NOT NULL,
  `vehmar_id` int(11) NOT NULL,
  PRIMARY KEY (`vehmmod_id`),
  KEY `FK_vehm_modele_vehmar_id` (`vehmar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vehm_modele`
--

INSERT INTO `vehm_modele` (`vehmmod_id`, `vehmmod_libelle`, `vehmar_id`) VALUES
(1, 'KA 2016 II 1.2 69 S&S BLACK EDITION', 7),
(2, 'CLIO 2013 IV 1.5 DCI 90 ENERGY DYNAMIQUE ECO2 90G', 13),
(3, 'C5 2016 II (2) 2.0 BLUEHDI 150 S&S CONFORT BV6 111Go', 4),
(4, 'STELVIO 2017 2.0 TURBO 200 Q4 LUSSO AT8', 1),
(5, 'CLASSE E 2017 IV (2) CABRIOLET 200 EXECUTIVE BVA7', 10),
(6, 'eC 01 D9', 12),
(7, '750 GSX-R 2010', 18);

-- --------------------------------------------------------

--
-- Structure de la table `veh_boite`
--

DROP TABLE IF EXISTS `veh_boite`;
CREATE TABLE IF NOT EXISTS `veh_boite` (
  `veh_boite_id` int(11) NOT NULL AUTO_INCREMENT,
  `veh_boite_libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`veh_boite_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `veh_boite`
--

INSERT INTO `veh_boite` (`veh_boite_id`, `veh_boite_libelle`) VALUES
(1, 'Manuelle'),
(2, 'Automatique');

-- --------------------------------------------------------

--
-- Structure de la table `veh_couleur`
--

DROP TABLE IF EXISTS `veh_couleur`;
CREATE TABLE IF NOT EXISTS `veh_couleur` (
  `veh_coul_id` int(11) NOT NULL AUTO_INCREMENT,
  `veh_coul_libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`veh_coul_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `veh_couleur`
--

INSERT INTO `veh_couleur` (`veh_coul_id`, `veh_coul_libelle`) VALUES
(1, 'rouge'),
(2, 'bleu'),
(3, 'vert'),
(4, 'jaune'),
(5, 'marron'),
(6, 'noir'),
(7, 'blanc'),
(8, 'gris'),
(9, 'violet'),
(10, 'bordeaux'),
(11, 'noir/orange/blanc');

-- --------------------------------------------------------

--
-- Structure de la table `veh_porte`
--

DROP TABLE IF EXISTS `veh_porte`;
CREATE TABLE IF NOT EXISTS `veh_porte` (
  `veh_porte_id` int(11) NOT NULL AUTO_INCREMENT,
  `veh_porte_libelle` int(11) NOT NULL,
  PRIMARY KEY (`veh_porte_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `veh_porte`
--

INSERT INTO `veh_porte` (`veh_porte_id`, `veh_porte_libelle`) VALUES
(1, 2),
(2, 3),
(3, 5);

-- --------------------------------------------------------

--
-- Structure de la table `veh_type_carburant`
--

DROP TABLE IF EXISTS `veh_type_carburant`;
CREATE TABLE IF NOT EXISTS `veh_type_carburant` (
  `vehm_carb_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehm_carb_libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`vehm_carb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `veh_type_carburant`
--

INSERT INTO `veh_type_carburant` (`vehm_carb_id`, `vehm_carb_libelle`) VALUES
(1, 'Essence'),
(2, 'Gazole'),
(3, 'GPL'),
(4, 'Electrique'),
(5, 'Hybride');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_client_cli_civ_id` FOREIGN KEY (`cli_civ_id`) REFERENCES `civilite` (`cli_civ_id`),
  ADD CONSTRAINT `FK_client_cli_stat_id` FOREIGN KEY (`cli_stat_id`) REFERENCES `statut_client` (`cli_stat_id`);

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `FK_Vehicule_type_veh_id` FOREIGN KEY (`type_veh_id`) REFERENCES `type_veh` (`type_veh_id`),
  ADD CONSTRAINT `FK_Vehicule_typepermis_id` FOREIGN KEY (`typepermis_id`) REFERENCES `type_permis` (`typepermis_id`),
  ADD CONSTRAINT `FK_Vehicule_veh_boite_id` FOREIGN KEY (`veh_boite_id`) REFERENCES `veh_boite` (`veh_boite_id`),
  ADD CONSTRAINT `FK_Vehicule_veh_coul_id` FOREIGN KEY (`veh_coul_id`) REFERENCES `veh_couleur` (`veh_coul_id`),
  ADD CONSTRAINT `FK_Vehicule_veh_porte_id` FOREIGN KEY (`veh_porte_id`) REFERENCES `veh_porte` (`veh_porte_id`),
  ADD CONSTRAINT `FK_Vehicule_vehm_carb_id` FOREIGN KEY (`vehm_carb_id`) REFERENCES `veh_type_carburant` (`vehm_carb_id`),
  ADD CONSTRAINT `FK_Vehicule_vehmmod_id` FOREIGN KEY (`vehmmod_id`) REFERENCES `vehm_modele` (`vehmmod_id`);

--
-- Contraintes pour la table `vehm_modele`
--
ALTER TABLE `vehm_modele`
  ADD CONSTRAINT `FK_vehm_modele_vehmar_id` FOREIGN KEY (`vehmar_id`) REFERENCES `vehm_marque` (`vehmar_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
