-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 29 sep. 2017 à 17:23
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `avizobd`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `pk_adresse` int(11) NOT NULL,
  `no_civique` int(11) NOT NULL,
  `nom_rue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `alerte`
--

CREATE TABLE `alerte` (
  `pk_alerte` int(11) NOT NULL,
  `fk_reservation` int(11) NOT NULL,
  `fk_type_entretien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `entretien`
--

CREATE TABLE `entretien` (
  `pk_entretien` int(11) NOT NULL,
  `date_entretien` date NOT NULL,
  `odometre_entretien` bigint(20) NOT NULL,
  `fk_garage` int(11) NOT NULL,
  `fk_vehicule` int(11) NOT NULL,
  `fk_type_entretien` int(11) NOT NULL,
  `cout_entretien` bigint(20) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `pk_facture` int(11) NOT NULL,
  `fk_entretien` int(11) NOT NULL,
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `garage`
--

CREATE TABLE `garage` (
  `pk_garage` int(11) NOT NULL,
  `nom` varchar(11) NOT NULL,
  `fk_adresse` int(11) NOT NULL,
  `telephone` bigint(20) NOT NULL,
  `fk_statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `pk_marque` int(11) NOT NULL,
  `nom_marque` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`pk_marque`, `nom_marque`) VALUES
(1, 'Acura'),
(2, 'Audi'),
(3, 'BMW'),
(4, 'Buick'),
(5, 'Cadillac'),
(6, 'Chevrolet'),
(7, 'Chrysler'),
(8, 'Dodge'),
(9, 'FIAT'),
(10, 'Ford'),
(11, 'GMC'),
(12, 'Honda'),
(13, 'Hyundai'),
(14, 'Infiniti'),
(15, 'Jaguar'),
(16, 'Jeep'),
(17, 'Kia'),
(18, 'Lexus'),
(19, 'Lincoln'),
(20, 'Mazda'),
(21, 'Mercedes-Benz'),
(22, 'Mitsubishi'),
(23, 'Nissan'),
(24, 'Pontiac'),
(25, 'RAM'),
(26, 'Saab'),
(27, 'Saturn'),
(28, 'Scion'),
(29, 'Smart'),
(30, 'Subaru'),
(31, 'Suzuki'),
(32, 'Tesla'),
(33, 'Toyota'),
(34, 'Volkswagen'),
(35, 'Volvo');

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

CREATE TABLE `modele` (
  `pk_modele` int(11) NOT NULL,
  `fk_marque` int(11) NOT NULL,
  `nom_modele` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `pk_reservation` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `fk_vehicule` int(11) NOT NULL,
  `fk_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `secteur`
--

CREATE TABLE `secteur` (
  `pk_secteur` int(11) NOT NULL,
  `nom_secteur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `secteur`
--

INSERT INTO `secteur` (`pk_secteur`, `nom_secteur`) VALUES
(1, 'Assainissement'),
(2, 'Environnement'),
(3, 'Génie municipal'),
(4, 'Qualité des eaux'),
(5, 'Milieux naturels'),
(6, 'Ventes'),
(7, 'Administration'),
(8, 'Dessins');

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE `statut` (
  `pk_statut` int(11) NOT NULL,
  `nom_statut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `statut`
--

INSERT INTO `statut` (`pk_statut`, `nom_statut`) VALUES
(1, 'Administrateur'),
(2, 'Utilisateur'),
(3, 'Inactif');

-- --------------------------------------------------------

--
-- Structure de la table `type_entretien`
--

CREATE TABLE `type_entretien` (
  `pk_type_entretien` int(11) NOT NULL,
  `intervalle` int(11) NOT NULL,
  `nom` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `pk_utilisateur` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `courriel` varchar(150) NOT NULL,
  `mot_de_passe` varchar(50) NOT NULL,
  `fk_statut` int(11) NOT NULL,
  `fk_secteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`pk_utilisateur`, `nom`, `prenom`, `telephone`, `courriel`, `mot_de_passe`, `fk_statut`, `fk_secteur`) VALUES
(1, 'Bédard', 'Alain', '819 574-1994', 'alain.bedard@avizo.ca', 'avizo', 2, 1),
(2, 'Bolduc', 'Michel', '819 571-8946', 'michel.bolduc@avizo.ca', 'avizo', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `pk_vehicule` int(11) NOT NULL,
  `fk_marque` int(11) NOT NULL,
  `fk_modele` int(11) NOT NULL,
  `annee` bigint(20) NOT NULL,
  `couleur` int(11) NOT NULL,
  `fk_secteur` int(11) NOT NULL,
  `odometre` bigint(20) NOT NULL,
  `plaque` text NOT NULL,
  `photo` longblob,
  `VIN` text NOT NULL,
  `date_achat` date NOT NULL,
  `fk_statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`pk_adresse`);

--
-- Index pour la table `alerte`
--
ALTER TABLE `alerte`
  ADD PRIMARY KEY (`pk_alerte`),
  ADD KEY `fk_reservation` (`fk_reservation`),
  ADD KEY `fk_type_entretien` (`fk_type_entretien`);

--
-- Index pour la table `entretien`
--
ALTER TABLE `entretien`
  ADD PRIMARY KEY (`pk_entretien`),
  ADD KEY `fk_garage` (`fk_garage`),
  ADD KEY `fk_vehicule` (`fk_vehicule`),
  ADD KEY `fk_type_entretien` (`fk_type_entretien`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`pk_facture`),
  ADD KEY `fk_entretien` (`fk_entretien`);

--
-- Index pour la table `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`pk_garage`),
  ADD KEY `fk_adresse` (`fk_adresse`),
  ADD KEY `fk_statut` (`fk_statut`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`pk_marque`);

--
-- Index pour la table `modele`
--
ALTER TABLE `modele`
  ADD PRIMARY KEY (`pk_modele`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`pk_reservation`),
  ADD KEY `fk_utilisateur` (`fk_utilisateur`),
  ADD KEY `fk_vehicule` (`fk_vehicule`);

--
-- Index pour la table `secteur`
--
ALTER TABLE `secteur`
  ADD PRIMARY KEY (`pk_secteur`);

--
-- Index pour la table `statut`
--
ALTER TABLE `statut`
  ADD PRIMARY KEY (`pk_statut`);

--
-- Index pour la table `type_entretien`
--
ALTER TABLE `type_entretien`
  ADD PRIMARY KEY (`pk_type_entretien`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`pk_utilisateur`),
  ADD KEY `fk_secteur` (`fk_secteur`),
  ADD KEY `fk_statut` (`fk_statut`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`pk_vehicule`),
  ADD KEY `fk_marque` (`fk_marque`,`fk_modele`,`fk_secteur`,`fk_statut`),
  ADD KEY `fk_modele` (`fk_modele`),
  ADD KEY `fk_statut` (`fk_statut`),
  ADD KEY `fk_secteur` (`fk_secteur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `pk_adresse` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `alerte`
--
ALTER TABLE `alerte`
  MODIFY `pk_alerte` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `entretien`
--
ALTER TABLE `entretien`
  MODIFY `pk_entretien` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `pk_facture` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `garage`
--
ALTER TABLE `garage`
  MODIFY `pk_garage` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `pk_marque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `modele`
--
ALTER TABLE `modele`
  MODIFY `pk_modele` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `pk_reservation` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `secteur`
--
ALTER TABLE `secteur`
  MODIFY `pk_secteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `statut`
--
ALTER TABLE `statut`
  MODIFY `pk_statut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `type_entretien`
--
ALTER TABLE `type_entretien`
  MODIFY `pk_type_entretien` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `pk_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `pk_vehicule` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `alerte`
--
ALTER TABLE `alerte`
  ADD CONSTRAINT `alerte_ibfk_1` FOREIGN KEY (`fk_reservation`) REFERENCES `reservation` (`pk_reservation`),
  ADD CONSTRAINT `alerte_ibfk_2` FOREIGN KEY (`fk_type_entretien`) REFERENCES `type_entretien` (`pk_type_entretien`);

--
-- Contraintes pour la table `entretien`
--
ALTER TABLE `entretien`
  ADD CONSTRAINT `entretien_ibfk_1` FOREIGN KEY (`fk_vehicule`) REFERENCES `vehicule` (`pk_vehicule`),
  ADD CONSTRAINT `entretien_ibfk_2` FOREIGN KEY (`fk_type_entretien`) REFERENCES `type_entretien` (`pk_type_entretien`),
  ADD CONSTRAINT `entretien_ibfk_3` FOREIGN KEY (`fk_garage`) REFERENCES `garage` (`pk_garage`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`fk_entretien`) REFERENCES `entretien` (`pk_entretien`);

--
-- Contraintes pour la table `garage`
--
ALTER TABLE `garage`
  ADD CONSTRAINT `garage_ibfk_1` FOREIGN KEY (`fk_adresse`) REFERENCES `adresse` (`pk_adresse`),
  ADD CONSTRAINT `garage_ibfk_2` FOREIGN KEY (`fk_statut`) REFERENCES `statut` (`pk_statut`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`fk_utilisateur`) REFERENCES `utilisateur` (`pk_utilisateur`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`fk_vehicule`) REFERENCES `vehicule` (`pk_vehicule`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`fk_statut`) REFERENCES `statut` (`pk_statut`),
  ADD CONSTRAINT `utilisateur_ibfk_2` FOREIGN KEY (`fk_secteur`) REFERENCES `secteur` (`pk_secteur`);

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `vehicule_ibfk_1` FOREIGN KEY (`fk_marque`) REFERENCES `marque` (`pk_marque`),
  ADD CONSTRAINT `vehicule_ibfk_2` FOREIGN KEY (`fk_modele`) REFERENCES `modele` (`pk_modele`),
  ADD CONSTRAINT `vehicule_ibfk_3` FOREIGN KEY (`fk_statut`) REFERENCES `statut` (`pk_statut`),
  ADD CONSTRAINT `vehicule_ibfk_4` FOREIGN KEY (`fk_secteur`) REFERENCES `secteur` (`pk_secteur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
