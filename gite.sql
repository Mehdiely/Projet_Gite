-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 07 déc. 2023 à 16:42
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gite`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231205083832', '2023-12-05 09:38:42', 1270);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231205084701', '2023-12-05 09:47:07', 1118);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231205085207', '2023-12-05 09:52:13', 1401);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231205090409', '2023-12-05 10:04:18', 1539);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231205091034', '2023-12-05 10:10:40', 925);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231205130914', '2023-12-05 14:09:20', 1045);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231205133109', '2023-12-05 14:31:14', 1729);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231206073816', '2023-12-06 08:38:22', 403);

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE `equipement` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `equipement_ext`
--

CREATE TABLE `equipement_ext` (
  `id` int(11) NOT NULL,
  `id_gite_eex_id` int(11) NOT NULL,
  `terasse` tinyint(1) NOT NULL,
  `terasse_prix` int(11) DEFAULT NULL,
  `bbq` tinyint(1) NOT NULL,
  `bbq_prix` int(11) DEFAULT NULL,
  `piscine_priv` tinyint(1) NOT NULL,
  `piscine_priv_prix` int(11) DEFAULT NULL,
  `piscine_part` tinyint(1) NOT NULL,
  `piscine_part_prix` int(11) DEFAULT NULL,
  `tennis` tinyint(1) NOT NULL,
  `tennis_prix` int(11) DEFAULT NULL,
  `pingpong` tinyint(1) NOT NULL,
  `pingpong_prix` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipement_ext`
--

INSERT INTO `equipement_ext` (`id`, `id_gite_eex_id`, `terasse`, `terasse_prix`, `bbq`, `bbq_prix`, `piscine_priv`, `piscine_priv_prix`, `piscine_part`, `piscine_part_prix`, `tennis`, `tennis_prix`, `pingpong`, `pingpong_prix`) VALUES(1, 19, 1, 19, 1, 10, 1, 43, 1, 15, 1, 19, 0, 0);
INSERT INTO `equipement_ext` (`id`, `id_gite_eex_id`, `terasse`, `terasse_prix`, `bbq`, `bbq_prix`, `piscine_priv`, `piscine_priv_prix`, `piscine_part`, `piscine_part_prix`, `tennis`, `tennis_prix`, `pingpong`, `pingpong_prix`) VALUES(2, 20, 1, 15, 1, 5, 1, 15, 1, 10, 1, 10, 0, 0);
INSERT INTO `equipement_ext` (`id`, `id_gite_eex_id`, `terasse`, `terasse_prix`, `bbq`, `bbq_prix`, `piscine_priv`, `piscine_priv_prix`, `piscine_part`, `piscine_part_prix`, `tennis`, `tennis_prix`, `pingpong`, `pingpong_prix`) VALUES(3, 21, 1, 13, 1, 12, 1, 17, 1, 20, 1, 11, 0, 0);
INSERT INTO `equipement_ext` (`id`, `id_gite_eex_id`, `terasse`, `terasse_prix`, `bbq`, `bbq_prix`, `piscine_priv`, `piscine_priv_prix`, `piscine_part`, `piscine_part_prix`, `tennis`, `tennis_prix`, `pingpong`, `pingpong_prix`) VALUES(4, 22, 1, 17, 1, 14, 1, 25, 1, 9, 1, 7, 0, 0);
INSERT INTO `equipement_ext` (`id`, `id_gite_eex_id`, `terasse`, `terasse_prix`, `bbq`, `bbq_prix`, `piscine_priv`, `piscine_priv_prix`, `piscine_part`, `piscine_part_prix`, `tennis`, `tennis_prix`, `pingpong`, `pingpong_prix`) VALUES(5, 23, 1, 19, 1, 17, 1, 19, 1, 8, 1, 11, 0, 0);
INSERT INTO `equipement_ext` (`id`, `id_gite_eex_id`, `terasse`, `terasse_prix`, `bbq`, `bbq_prix`, `piscine_priv`, `piscine_priv_prix`, `piscine_part`, `piscine_part_prix`, `tennis`, `tennis_prix`, `pingpong`, `pingpong_prix`) VALUES(6, 24, 1, 15, 1, 12, 1, 27, 1, 7, 1, 17, 0, 0);
INSERT INTO `equipement_ext` (`id`, `id_gite_eex_id`, `terasse`, `terasse_prix`, `bbq`, `bbq_prix`, `piscine_priv`, `piscine_priv_prix`, `piscine_part`, `piscine_part_prix`, `tennis`, `tennis_prix`, `pingpong`, `pingpong_prix`) VALUES(7, 25, 1, 11, 1, 5, 1, 23, 1, 8, 1, 11, 0, 0);
INSERT INTO `equipement_ext` (`id`, `id_gite_eex_id`, `terasse`, `terasse_prix`, `bbq`, `bbq_prix`, `piscine_priv`, `piscine_priv_prix`, `piscine_part`, `piscine_part_prix`, `tennis`, `tennis_prix`, `pingpong`, `pingpong_prix`) VALUES(8, 26, 1, 7, 1, 5, 1, 22, 1, 5, 1, 8, 0, 0);
INSERT INTO `equipement_ext` (`id`, `id_gite_eex_id`, `terasse`, `terasse_prix`, `bbq`, `bbq_prix`, `piscine_priv`, `piscine_priv_prix`, `piscine_part`, `piscine_part_prix`, `tennis`, `tennis_prix`, `pingpong`, `pingpong_prix`) VALUES(9, 27, 1, 17, 1, 13, 1, 34, 1, 20, 1, 20, 0, 0);
INSERT INTO `equipement_ext` (`id`, `id_gite_eex_id`, `terasse`, `terasse_prix`, `bbq`, `bbq_prix`, `piscine_priv`, `piscine_priv_prix`, `piscine_part`, `piscine_part_prix`, `tennis`, `tennis_prix`, `pingpong`, `pingpong_prix`) VALUES(10, 28, 1, 16, 1, 20, 1, 18, 1, 15, 1, 7, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `equipement_int`
--

CREATE TABLE `equipement_int` (
  `id` int(11) NOT NULL,
  `gite_id_ei_id` int(11) NOT NULL,
  `lave_vaiss` tinyint(1) NOT NULL,
  `lave_vaiss_prix` int(11) DEFAULT NULL,
  `lave_linge` tinyint(1) NOT NULL,
  `lave_linge_prix` int(11) DEFAULT NULL,
  `climatisation` tinyint(1) NOT NULL,
  `climatisation_prix` int(11) DEFAULT NULL,
  `tele` tinyint(1) NOT NULL,
  `tele_prix` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipement_int`
--

INSERT INTO `equipement_int` (`id`, `gite_id_ei_id`, `lave_vaiss`, `lave_vaiss_prix`, `lave_linge`, `lave_linge_prix`, `climatisation`, `climatisation_prix`, `tele`, `tele_prix`) VALUES(1, 19, 1, 14, 1, 13, 1, 12, 0, 5);
INSERT INTO `equipement_int` (`id`, `gite_id_ei_id`, `lave_vaiss`, `lave_vaiss_prix`, `lave_linge`, `lave_linge_prix`, `climatisation`, `climatisation_prix`, `tele`, `tele_prix`) VALUES(2, 20, 1, 13, 1, 20, 1, 10, 0, 6);
INSERT INTO `equipement_int` (`id`, `gite_id_ei_id`, `lave_vaiss`, `lave_vaiss_prix`, `lave_linge`, `lave_linge_prix`, `climatisation`, `climatisation_prix`, `tele`, `tele_prix`) VALUES(3, 21, 1, 8, 1, 16, 1, 14, 0, 5);
INSERT INTO `equipement_int` (`id`, `gite_id_ei_id`, `lave_vaiss`, `lave_vaiss_prix`, `lave_linge`, `lave_linge_prix`, `climatisation`, `climatisation_prix`, `tele`, `tele_prix`) VALUES(4, 22, 1, 14, 1, 13, 1, 11, 0, 11);
INSERT INTO `equipement_int` (`id`, `gite_id_ei_id`, `lave_vaiss`, `lave_vaiss_prix`, `lave_linge`, `lave_linge_prix`, `climatisation`, `climatisation_prix`, `tele`, `tele_prix`) VALUES(5, 23, 1, 20, 1, 6, 1, 9, 0, 16);
INSERT INTO `equipement_int` (`id`, `gite_id_ei_id`, `lave_vaiss`, `lave_vaiss_prix`, `lave_linge`, `lave_linge_prix`, `climatisation`, `climatisation_prix`, `tele`, `tele_prix`) VALUES(6, 24, 1, 8, 1, 12, 1, 8, 0, 17);
INSERT INTO `equipement_int` (`id`, `gite_id_ei_id`, `lave_vaiss`, `lave_vaiss_prix`, `lave_linge`, `lave_linge_prix`, `climatisation`, `climatisation_prix`, `tele`, `tele_prix`) VALUES(7, 25, 1, 15, 1, 14, 1, 16, 0, 17);
INSERT INTO `equipement_int` (`id`, `gite_id_ei_id`, `lave_vaiss`, `lave_vaiss_prix`, `lave_linge`, `lave_linge_prix`, `climatisation`, `climatisation_prix`, `tele`, `tele_prix`) VALUES(8, 26, 1, 19, 1, 10, 1, 5, 0, 7);
INSERT INTO `equipement_int` (`id`, `gite_id_ei_id`, `lave_vaiss`, `lave_vaiss_prix`, `lave_linge`, `lave_linge_prix`, `climatisation`, `climatisation_prix`, `tele`, `tele_prix`) VALUES(9, 27, 1, 15, 1, 15, 1, 14, 0, 8);
INSERT INTO `equipement_int` (`id`, `gite_id_ei_id`, `lave_vaiss`, `lave_vaiss_prix`, `lave_linge`, `lave_linge_prix`, `climatisation`, `climatisation_prix`, `tele`, `tele_prix`) VALUES(10, 28, 1, 16, 1, 16, 1, 9, 0, 5);

-- --------------------------------------------------------

--
-- Structure de la table `gite`
--

CREATE TABLE `gite` (
  `id` int(11) NOT NULL,
  `nom_gite` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `nombre_chambre` int(11) NOT NULL,
  `surface` int(11) NOT NULL,
  `couchage` int(11) NOT NULL,
  `animaux` tinyint(1) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `id_proprio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `gite`
--

INSERT INTO `gite` (`id`, `nom_gite`, `ville`, `region`, `departement`, `nombre_chambre`, `surface`, `couchage`, `animaux`, `service_id`, `id_proprio_id`) VALUES(19, 'excepturi', 'East Eldaview', 'qui', 'aliquam', 4, 138, 3, 1, NULL, 55);
INSERT INTO `gite` (`id`, `nom_gite`, `ville`, `region`, `departement`, `nombre_chambre`, `surface`, `couchage`, `animaux`, `service_id`, `id_proprio_id`) VALUES(20, 'quibusdam', 'East Jessika', 'libero', 'et', 5, 130, 9, 1, NULL, 55);
INSERT INTO `gite` (`id`, `nom_gite`, `ville`, `region`, `departement`, `nombre_chambre`, `surface`, `couchage`, `animaux`, `service_id`, `id_proprio_id`) VALUES(21, 'et', 'Ronaldoland', 'velit', 'minima', 1, 200, 7, 1, NULL, 56);
INSERT INTO `gite` (`id`, `nom_gite`, `ville`, `region`, `departement`, `nombre_chambre`, `surface`, `couchage`, `animaux`, `service_id`, `id_proprio_id`) VALUES(22, 'voluptas', 'Rolfsonfurt', 'in', 'et', 1, 126, 5, 1, NULL, 56);
INSERT INTO `gite` (`id`, `nom_gite`, `ville`, `region`, `departement`, `nombre_chambre`, `surface`, `couchage`, `animaux`, `service_id`, `id_proprio_id`) VALUES(23, 'ea', 'Champlinland', 'eum', 'nihil', 1, 133, 6, 1, NULL, 57);
INSERT INTO `gite` (`id`, `nom_gite`, `ville`, `region`, `departement`, `nombre_chambre`, `surface`, `couchage`, `animaux`, `service_id`, `id_proprio_id`) VALUES(24, 'deserunt', 'South Kaileymouth', 'id', 'et', 4, 51, 8, 1, NULL, 57);
INSERT INTO `gite` (`id`, `nom_gite`, `ville`, `region`, `departement`, `nombre_chambre`, `surface`, `couchage`, `animaux`, `service_id`, `id_proprio_id`) VALUES(25, 'reprehenderit', 'Maiafort', 'voluptatem', 'saepe', 4, 159, 3, 0, NULL, 58);
INSERT INTO `gite` (`id`, `nom_gite`, `ville`, `region`, `departement`, `nombre_chambre`, `surface`, `couchage`, `animaux`, `service_id`, `id_proprio_id`) VALUES(26, 'dolores', 'West Baby', 'et', 'veniam', 4, 193, 9, 0, NULL, 58);
INSERT INTO `gite` (`id`, `nom_gite`, `ville`, `region`, `departement`, `nombre_chambre`, `surface`, `couchage`, `animaux`, `service_id`, `id_proprio_id`) VALUES(27, 'veniam', 'Port Lydia', 'tempora', 'temporibus', 3, 185, 2, 0, NULL, 59);
INSERT INTO `gite` (`id`, `nom_gite`, `ville`, `region`, `departement`, `nombre_chambre`, `surface`, `couchage`, `animaux`, `service_id`, `id_proprio_id`) VALUES(28, 'sit', 'South Cecil', 'repudiandae', 'hic', 4, 125, 3, 0, NULL, 59);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `proprio`
--

CREATE TABLE `proprio` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `horaire` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `proprio`
--

INSERT INTO `proprio` (`id`, `nom`, `horaire`, `numero`, `email`) VALUES(55, 'Monahan', '01:10:38', 2147483647, 'Quinn.Kuvalis@hotmail.com');
INSERT INTO `proprio` (`id`, `nom`, `horaire`, `numero`, `email`) VALUES(56, 'Dibbert', '17:10:33', 712563984, 'Grant42@Blick.info');
INSERT INTO `proprio` (`id`, `nom`, `horaire`, `numero`, `email`) VALUES(57, 'Braun', '14:58:19', 633218964, 'iWilliamson@Hagenes.com');
INSERT INTO `proprio` (`id`, `nom`, `horaire`, `numero`, `email`) VALUES(58, 'Schmeler', '13:14:48', 625397850, 'Corwin.Arlo@gmail.com');
INSERT INTO `proprio` (`id`, `nom`, `horaire`, `numero`, `email`) VALUES(59, 'Glover', '08:35:31', 788962531, 'Elvis17@Borer.com');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `loc_linge` tinyint(1) NOT NULL,
  `prix_loc_linge` int(11) DEFAULT NULL,
  `menage` tinyint(1) NOT NULL,
  `prix_menage` int(11) DEFAULT NULL,
  `internet` tinyint(1) NOT NULL,
  `prix_internet` int(11) DEFAULT NULL,
  `id_gite_s_id` int(11) NOT NULL,
  `animaux` tinyint(1) NOT NULL,
  `animaux_prix` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id`, `loc_linge`, `prix_loc_linge`, `menage`, `prix_menage`, `internet`, `prix_internet`, `id_gite_s_id`, `animaux`, `animaux_prix`) VALUES(7, 1, 8, 1, 8, 1, 17, 19, 1, 11);
INSERT INTO `service` (`id`, `loc_linge`, `prix_loc_linge`, `menage`, `prix_menage`, `internet`, `prix_internet`, `id_gite_s_id`, `animaux`, `animaux_prix`) VALUES(8, 1, 14, 1, 18, 1, 19, 20, 1, 15);
INSERT INTO `service` (`id`, `loc_linge`, `prix_loc_linge`, `menage`, `prix_menage`, `internet`, `prix_internet`, `id_gite_s_id`, `animaux`, `animaux_prix`) VALUES(9, 1, 9, 1, 6, 1, 6, 21, 1, 13);
INSERT INTO `service` (`id`, `loc_linge`, `prix_loc_linge`, `menage`, `prix_menage`, `internet`, `prix_internet`, `id_gite_s_id`, `animaux`, `animaux_prix`) VALUES(10, 1, 5, 1, 7, 1, 6, 22, 1, 9);
INSERT INTO `service` (`id`, `loc_linge`, `prix_loc_linge`, `menage`, `prix_menage`, `internet`, `prix_internet`, `id_gite_s_id`, `animaux`, `animaux_prix`) VALUES(11, 1, 13, 1, 17, 1, 13, 23, 1, 20);
INSERT INTO `service` (`id`, `loc_linge`, `prix_loc_linge`, `menage`, `prix_menage`, `internet`, `prix_internet`, `id_gite_s_id`, `animaux`, `animaux_prix`) VALUES(12, 1, 8, 1, 14, 1, 6, 24, 1, 15);
INSERT INTO `service` (`id`, `loc_linge`, `prix_loc_linge`, `menage`, `prix_menage`, `internet`, `prix_internet`, `id_gite_s_id`, `animaux`, `animaux_prix`) VALUES(13, 1, 18, 1, 18, 1, 13, 25, 1, 13);
INSERT INTO `service` (`id`, `loc_linge`, `prix_loc_linge`, `menage`, `prix_menage`, `internet`, `prix_internet`, `id_gite_s_id`, `animaux`, `animaux_prix`) VALUES(14, 1, 17, 1, 10, 1, 19, 26, 1, 14);
INSERT INTO `service` (`id`, `loc_linge`, `prix_loc_linge`, `menage`, `prix_menage`, `internet`, `prix_internet`, `id_gite_s_id`, `animaux`, `animaux_prix`) VALUES(15, 1, 12, 1, 18, 1, 16, 27, 1, 9);
INSERT INTO `service` (`id`, `loc_linge`, `prix_loc_linge`, `menage`, `prix_menage`, `internet`, `prix_internet`, `id_gite_s_id`, `animaux`, `animaux_prix`) VALUES(16, 1, 12, 1, 13, 1, 10, 28, 1, 20);

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

CREATE TABLE `tarif` (
  `id` int(11) NOT NULL,
  `id_gite_t_id` int(11) NOT NULL,
  `loc_hiver` int(11) NOT NULL,
  `loc_ete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tarif`
--

INSERT INTO `tarif` (`id`, `id_gite_t_id`, `loc_hiver`, `loc_ete`) VALUES(1, 19, 71, 125);
INSERT INTO `tarif` (`id`, `id_gite_t_id`, `loc_hiver`, `loc_ete`) VALUES(2, 20, 52, 152);
INSERT INTO `tarif` (`id`, `id_gite_t_id`, `loc_hiver`, `loc_ete`) VALUES(3, 21, 62, 116);
INSERT INTO `tarif` (`id`, `id_gite_t_id`, `loc_hiver`, `loc_ete`) VALUES(4, 22, 82, 149);
INSERT INTO `tarif` (`id`, `id_gite_t_id`, `loc_hiver`, `loc_ete`) VALUES(5, 23, 67, 169);
INSERT INTO `tarif` (`id`, `id_gite_t_id`, `loc_hiver`, `loc_ete`) VALUES(6, 24, 53, 125);
INSERT INTO `tarif` (`id`, `id_gite_t_id`, `loc_hiver`, `loc_ete`) VALUES(7, 25, 97, 108);
INSERT INTO `tarif` (`id`, `id_gite_t_id`, `loc_hiver`, `loc_ete`) VALUES(8, 26, 82, 183);
INSERT INTO `tarif` (`id`, `id_gite_t_id`, `loc_hiver`, `loc_ete`) VALUES(9, 27, 68, 143);
INSERT INTO `tarif` (`id`, `id_gite_t_id`, `loc_hiver`, `loc_ete`) VALUES(10, 28, 67, 181);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipement_ext`
--
ALTER TABLE `equipement_ext`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_85A8C41F93187C7` (`id_gite_eex_id`);

--
-- Index pour la table `equipement_int`
--
ALTER TABLE `equipement_int`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1DD8C0F2DEA8992D` (`gite_id_ei_id`);

--
-- Index pour la table `gite`
--
ALTER TABLE `gite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B638C92CED5CA9E6` (`service_id`),
  ADD KEY `IDX_B638C92CA332A6D7` (`id_proprio_id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `proprio`
--
ALTER TABLE `proprio`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E19D9AD28B4DDEEF` (`id_gite_s_id`);

--
-- Index pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E7189C9169AE656` (`id_gite_t_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `equipement`
--
ALTER TABLE `equipement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `equipement_ext`
--
ALTER TABLE `equipement_ext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `equipement_int`
--
ALTER TABLE `equipement_int`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `gite`
--
ALTER TABLE `gite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `proprio`
--
ALTER TABLE `proprio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `equipement_ext`
--
ALTER TABLE `equipement_ext`
  ADD CONSTRAINT `FK_85A8C41F93187C7` FOREIGN KEY (`id_gite_eex_id`) REFERENCES `gite` (`id`);

--
-- Contraintes pour la table `equipement_int`
--
ALTER TABLE `equipement_int`
  ADD CONSTRAINT `FK_1DD8C0F2DEA8992D` FOREIGN KEY (`gite_id_ei_id`) REFERENCES `gite` (`id`);

--
-- Contraintes pour la table `gite`
--
ALTER TABLE `gite`
  ADD CONSTRAINT `FK_B638C92CA332A6D7` FOREIGN KEY (`id_proprio_id`) REFERENCES `proprio` (`id`),
  ADD CONSTRAINT `FK_B638C92CED5CA9E6` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`);

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `FK_E19D9AD28B4DDEEF` FOREIGN KEY (`id_gite_s_id`) REFERENCES `gite` (`id`);

--
-- Contraintes pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD CONSTRAINT `FK_E7189C9169AE656` FOREIGN KEY (`id_gite_t_id`) REFERENCES `gite` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
