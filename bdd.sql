-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Ven 12 Décembre 2014 à 16:46
-- Version du serveur :  5.5.38
-- Version de PHP :  5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `blogmmi`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
`id_article` int(1) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL,
  `statut` tinyint(1) DEFAULT NULL,
  `en_avant` tinyint(1) NOT NULL,
  `date` date NOT NULL,
  `note` int(11) NOT NULL,
  `nbr_notes` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `titre`, `introduction`, `contenu`, `statut`, `en_avant`, `date`, `note`, `nbr_notes`, `id_user`, `id_cat`) VALUES
(20, 'Titre de l''article', 'qsdfqdsfqsfqsfqsfqsdfdf', 'qsdfqdsfqsfqsfqsfqsdfdf', 1, 1, '1993-03-23', 0, 0, 1, 0),
(21, 'Titre de l''article', 'qsdfqdsfqsfqsfqsfqsdfdf', 'qsdfqdsfqsfqsfqsfqsdfdf', 1, 1, '1993-03-23', 0, 0, 1, 0),
(22, 'Titre de l''article', 'qsdfqdsfqsfqsfqsfqsdfdf', 'qsdfqdsfqsfqsfqsfqsdfdf', 1, 1, '1993-03-23', 0, 0, 1, 0),
(23, 'Titre de l''article', 'qsdfqsdfqsdfqsfqfd', 'qsdfqsdfqsdfqsfqfd', 1, 1, '1993-03-23', 0, 0, 1, 0),
(24, 'Titre de l''article', 'qsdfqsdfqsdfqsfqfd', 'qsdfqsdfqsdfqsfqfd', 1, 1, '1993-03-23', 0, 0, 1, 3),
(25, 'qsdf', 'qsfqsfqsdfsdfqsdfdqsfnlqdsjfb:qdksbfkqsdfjbkq:sdhfqdksjq:dsfhdjq;:jshdf:j;qsdfds', 'qsfqsfqsdfsdfqsdfdqsfnlqdsjfb:qdksbfkqsdfjbkq:sdhfqdksjq:dsfhdjq;:jshdf:j;qsdfds', 1, 1, '1993-03-23', 0, 0, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
`id_cat` int(11) NOT NULL,
  `nom_cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu` bit(1) NOT NULL,
  `ordre` int(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id_cat`, `nom_cat`, `menu`, `ordre`) VALUES
(1, 'Deals', b'1', 10),
(2, 'Séléctions', b'1', 20),
(3, 'Articles', b'1', 30),
(4, 'Vidéos', b'1', 40),
(5, 'Production', b'1', 50),
(6, 'Events', b'1', 60);

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE `medias` (
  `id_media` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
`id_user` int(11) unsigned NOT NULL,
  `nom_user` varchar(32) NOT NULL,
  `password` char(40) NOT NULL,
  `email` varchar(128) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '1',
  `hash_validation` char(32) NOT NULL,
  `date_inscription` datetime NOT NULL,
  `avatar` varchar(128) NOT NULL DEFAULT '',
  `bio` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `vimeo` varchar(255) NOT NULL,
  `tumblr` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `soundcloud` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_user`, `nom_user`, `password`, `email`, `role`, `hash_validation`, `date_inscription`, `avatar`, `bio`, `facebook`, `twitter`, `instagram`, `vimeo`, `tumblr`, `linkedin`, `soundcloud`, `youtube`) VALUES
(1, 'Test2', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@test.com', 2, '', '0000-00-00 00:00:00', '', '', 'http://facebook.com/Loode31', 'test', 'test', '', '', '', '', ''),
(2, 'LouisLoode', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'louisdebraine@gmail.com', 1, '', '2014-12-10 19:31:06', '', '', '', '', '', '', '', '', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `medias`
--
ALTER TABLE `medias`
 ADD PRIMARY KEY (`id_media`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `nom_user` (`nom_user`), ADD UNIQUE KEY `email` (`email`), ADD KEY `password` (`password`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
MODIFY `id_article` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
MODIFY `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;