-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 01 Décembre 2014 à 13:55
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
  `titre` text COLLATE utf8_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL,
  `statut` tinyint(1) DEFAULT NULL,
  `en_avant` tinyint(1) NOT NULL,
  `date` date NOT NULL,
  `note` int(11) NOT NULL,
  `nbr_notes` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `titre`, `introduction`, `contenu`, `statut`, `en_avant`, `date`, `note`, `nbr_notes`, `id_user`) VALUES
(1, 'Snatch', '', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dui mauris, tristique quis magna ac, ullamcorper volutpat est. Integer at tincidunt erat, non faucibus risus. Cras accumsan venenatis libero, non consectetur diam sollicitudin a. Vestibulum vitae semper ex. Duis massa magna, tempus sollicitudin justo nec, dictum tempor odio. Nam tempus ornare volutpat. Vivamus imperdiet turpis a tristique aliquet. Quisque et lacus ac augue tristique tincidunt non eget sapien. Nullam feugiat scelerisque vulputate. Suspendisse luctus lobortis risus ac aliquam. Praesent vitae elit at lorem tempor tincidunt in eu nulla.\r\n\r\nMaecenas mi massa, placerat ut ornare sed, suscipit nec sapien. Sed purus ligula, finibus ut erat vel, pulvinar accumsan nisi. Donec ac diam vitae tellus mollis laoreet. Phasellus mattis pellentesque erat sit amet dictum. Nunc aliquam magna a condimentum vestibulum. Mauris nulla nibh, laoreet vitae tristique eget, congue vel est. Suspendisse at dolor eget mauris suscipit rhoncus quis nec eros. Donec ornare arcu et vestibulum sodales. Aliquam tincidunt sagittis rutrum. Curabitur gravida, dui ac feugiat ultrices, elit elit volutpat ipsum, gravida cursus quam arcu et mi.\r\n\r\nNulla malesuada lectus non eros fermentum, vel feugiat turpis facilisis. Morbi efficitur velit purus, posuere convallis nibh dapibus id. Duis laoreet lacinia neque quis pulvinar. Nullam sed ultricies lectus. Etiam semper nibh ac lacus tincidunt viverra. Suspendisse maximus scelerisque nibh eu eleifend. Suspendisse potenti. Praesent pretium lorem quis libero congue, a pharetra mauris varius. Proin tincidunt pharetra odio quis commodo. Donec eu est at justo aliquam faucibus a id ante. Proin id metus tempor, fermentum augue sed, posuere dui. Nam aliquet molestie mauris, a mollis eros ullamcorper quis. Sed vitae interdum ipsum, rutrum porttitor sem. ', 1, 0, '2014-12-10', 5, 0, 1),
(2, 'God Of War II', '', ' c nec dictum eros, pharetra blandit arcu.\n\nPhasellus mollis tortor fringilla, faucibus ipsum viverra, fringilla purus. Sed vulputate nec elit non placerat. In eu elit nec neque imperdiet consequat nec et neque. Aliquam egestas scelerisque lacus, id efficitur nunc varius at. Phasellus suscipit mattis convallis. Maecenas luctus euismod enim. Integer id metus at mi feugiat condimentum id vitae risus. Nullam nec urna ante.\n\nDonec viverra scelerisque augue vitae luctus. Ut dignissim ante at purus blandit volutpat. Sed tincidunt imperdiet felis. Nam venenatis metus eu sem posuere tincidunt. Donec nec dignissim justo. Nunc rutrum libero et arcu scelerisque, id maximus tortor sodales. Duis nec suscipit ante. Curabitur nisi tellus, facilisis sed neque eget, feugiat aliquet ex. Phasellus porta est neque, sed porta dui dapibus non. Suspendisse pharetra mauris semper massa dictum eleifend. Vestibulum in orci volutpat, dictum lectus nec, pulvinar enim. Quisque vitae nisi augue. Cras at massa egestas, ullamcorper', 1, 0, '2014-12-02', 3, 0, 2),
(3, 'Bienvenue à Gattaca', '', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis condimentum massa. Aenean convallis iaculis accumsan. Duis et augue eros. Nulla ornare neque at felis convallis, eu suscipit nisl lobortis. Pellentesque eget arcu dapibus, viverra sapien in, consequat nisi. Sed sit amet efficitur tortor. Sed efficitur laoreet congue. Proin eget elementum augue. Aliquam ac urna a sapien accumsan venenatis. Cras libero quam, posuere sit amet venenatis ut, sodales in elit. Aenean est lorem, dapibus sit amet bibendum ut, tristique non velit. Nulla at malesuada tellus, non fringilla elit. Cras metus neque, sodales sed mollis eget, egestas ut metus. In tempor placerat magna, id suscipit felis euismod a.\r\n\r\nSed ac purus ut neque sodales dictum non a nisl. Aliquam nec facilisis ex. Curabitur tempor ligula in ex scelerisque ultricies. Nunc ut vehicula ipsum, a mollis sem. Duis placerat hendrerit congue. Nullam sed est et lacus suscipit consectetur eget id enim. Vestibulum eu purus dapibus, vestibulum urna rhoncus, lobortis purus. Maecenas dictum nisi sem, viverra sollicitudin mi imperdiet et. Nam dignissim lectus erat, et consectetur leo facilisis vitae. Aenean feugiat leo at nulla tincidunt, vitae lacinia lacus mollis.\r\n\r\nMaecenas felis mi, posuere ut ultrices vitae, convallis tempor felis. Ut mauris nunc, lobortis a turpis vitae, ullamcorper tristique risus. Duis dictum congue suscipit. Pellentesque sed nisl eleifend, tristique libero ac, aliquet turpis. Curabitur auctor pharetra fermentum. Nam sed nisi quis libero convallis scelerisque quis sed magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent vitae tellus a lacus hendrerit iaculis. Etiam mollis sapien vel dui condimentum, eu tincidunt nibh vehicula. Integer a sodales lorem. Nam nec placerat lectus. Praesent in dui eu nisi mollis vulputate sed eu purus. ', 1, 0, '2014-11-21', 10, 0, 1),
(4, 'Red Dead Redemption', '', ' nisi quis libero convallis scelerisque quis sed magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent vitae tellus a lacus hendrerit iaculis. Etiam mollis sapien vel dui condimentum, eu tincidunt nibh vehicula. Integer a sodales lorem. Nam nec placerat lectus. Praesent in dui eu nisi mollis vulputate sed eu purus.\r\n\r\nAenean nec fermentum ipsum, ac tincidunt nisi. Nulla cursus lobortis urna, vitae sagittis nisi laoreet tincidunt. Cras ligula nisl, posuere ac efficitur ut, convallis sit amet neque. Sed quis euismod quam. Aliquam ac pulvinar dolor. Suspendisse a libero sit amet lectus euismod sodales vel vel est. Phasellus ac velit nisl. Curabitur nibh lorem, feugiat et arcu sit amet, auctor gravida purus. Duis euismod mi quis finibus porttitor. Integer cursus velit quis sem laoreet dictum. Praesent nec tellus a ligula commodo porta. Morbi suscipit metus et turpis pulvinar molestie. Integer egestas enim eu suscipit efficitur.\r\n\r\nProin blandit interdum justo ut tincidunt. Nunc iaculis diam nibh, hendrerit pellentesque nisl porta et. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tempus porttitor ', 1, 0, '2014-11-05', 9, 0, 2),
(5, 'BRATISLAVA', '', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dui mauris, tristique quis magna ac, ullamcorper volutpat est. Integer at tincidunt erat, non faucibus risus. Cras accumsan venenatis libero, non consectetur diam sollicitudin a. Vestibulum vitae semper ex. Duis massa magna, tempus sollicitudin justo nec, dictum tempor odio. Nam tempus ornare volutpat. Vivamus imperdiet turpis a tristique aliquet. Quisque et lacus ac augue tristique tincidunt non eget sapien. Nullam feugiat scelerisque vulputate. Suspendisse luctus lobortis risus ac aliquam. Praesent vitae elit at lorem tempor tincidunt in eu nulla.\r\n\r\nMaecenas mi massa, placerat ut ornare sed, suscipit nec sapien. Sed purus ligula, finibus ut erat vel, pulvinar accumsan nisi. Donec ac diam vitae tellus mollis laoreet. Phasellus mattis pellentesque erat sit amet dictum. Nunc aliquam magna a condimentum vestibulum. Mauris nulla nibh, laoreet vitae tristique eget, congue vel est. Suspendisse at dolor eget mauris suscipit rhoncus quis nec eros. Donec ornare arcu et vestibulum sodales. Aliquam tincidunt sagittis rutrum. Curabitur gravida, dui ac feugiat ultrices, elit elit volutpat ipsum, gravida cursus quam arcu et mi.\r\n\r\nNulla malesuada lectus non eros fermentum, vel feugiat turpis facilisis. Morbi efficitur velit purus, posuere convallis nibh dapibus id. Duis laoreet lacinia neque quis pulvinar. Nullam sed ultricies lectus. Etiam semper nibh ac lacus tincidunt viverra. Suspendisse maximus scelerisque nibh eu eleifend. Suspendisse potenti. Praesent pretium lorem quis libero congue, a pharetra mauris varius. Proin tincidunt pharetra odio quis commodo. Donec eu est at justo aliquam faucibus a id ante. Proin id metus tempor, fermentum augue sed, posuere dui. Nam aliquet molestie mauris, a mollis eros ullamcorper quis. Sed vitae interdum ipsum, rutrum porttitor sem. ', 1, 0, '2014-12-10', 5, 0, 1),
(6, 'Call of duty', '', ' c nec dictum eros, pharetra blandit arcu.\n\nPhasellus mollis tortor fringilla, faucibus ipsum viverra, fringilla purus. Sed vulputate nec elit non placerat. In eu elit nec neque imperdiet consequat nec et neque. Aliquam egestas scelerisque lacus, id efficitur nunc varius at. Phasellus suscipit mattis convallis. Maecenas luctus euismod enim. Integer id metus at mi feugiat condimentum id vitae risus. Nullam nec urna ante.\n\nDonec viverra scelerisque augue vitae luctus. Ut dignissim ante at purus blandit volutpat. Sed tincidunt imperdiet felis. Nam venenatis metus eu sem posuere tincidunt. Donec nec dignissim justo. Nunc rutrum libero et arcu scelerisque, id maximus tortor sodales. Duis nec suscipit ante. Curabitur nisi tellus, facilisis sed neque eget, feugiat aliquet ex. Phasellus porta est neque, sed porta dui dapibus non. Suspendisse pharetra mauris semper massa dictum eleifend. Vestibulum in orci volutpat, dictum lectus nec, pulvinar enim. Quisque vitae nisi augue. Cras at massa egestas, ullamcorper', 1, 0, '2014-12-02', 3, 0, 2),
(7, 'Bienvenue à Gattaca', '', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis condimentum massa. Aenean convallis iaculis accumsan. Duis et augue eros. Nulla ornare neque at felis convallis, eu suscipit nisl lobortis. Pellentesque eget arcu dapibus, viverra sapien in, consequat nisi. Sed sit amet efficitur tortor. Sed efficitur laoreet congue. Proin eget elementum augue. Aliquam ac urna a sapien accumsan venenatis. Cras libero quam, posuere sit amet venenatis ut, sodales in elit. Aenean est lorem, dapibus sit amet bibendum ut, tristique non velit. Nulla at malesuada tellus, non fringilla elit. Cras metus neque, sodales sed mollis eget, egestas ut metus. In tempor placerat magna, id suscipit felis euismod a.\r\n\r\nSed ac purus ut neque sodales dictum non a nisl. Aliquam nec facilisis ex. Curabitur tempor ligula in ex scelerisque ultricies. Nunc ut vehicula ipsum, a mollis sem. Duis placerat hendrerit congue. Nullam sed est et lacus suscipit consectetur eget id enim. Vestibulum eu purus dapibus, vestibulum urna rhoncus, lobortis purus. Maecenas dictum nisi sem, viverra sollicitudin mi imperdiet et. Nam dignissim lectus erat, et consectetur leo facilisis vitae. Aenean feugiat leo at nulla tincidunt, vitae lacinia lacus mollis.\r\n\r\nMaecenas felis mi, posuere ut ultrices vitae, convallis tempor felis. Ut mauris nunc, lobortis a turpis vitae, ullamcorper tristique risus. Duis dictum congue suscipit. Pellentesque sed nisl eleifend, tristique libero ac, aliquet turpis. Curabitur auctor pharetra fermentum. Nam sed nisi quis libero convallis scelerisque quis sed magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent vitae tellus a lacus hendrerit iaculis. Etiam mollis sapien vel dui condimentum, eu tincidunt nibh vehicula. Integer a sodales lorem. Nam nec placerat lectus. Praesent in dui eu nisi mollis vulputate sed eu purus. ', 1, 0, '2014-11-21', 10, 0, 1),
(8, 'Red Dead Redemption', '', ' nisi quis libero convallis scelerisque quis sed magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent vitae tellus a lacus hendrerit iaculis. Etiam mollis sapien vel dui condimentum, eu tincidunt nibh vehicula. Integer a sodales lorem. Nam nec placerat lectus. Praesent in dui eu nisi mollis vulputate sed eu purus.\r\n\r\nAenean nec fermentum ipsum, ac tincidunt nisi. Nulla cursus lobortis urna, vitae sagittis nisi laoreet tincidunt. Cras ligula nisl, posuere ac efficitur ut, convallis sit amet neque. Sed quis euismod quam. Aliquam ac pulvinar dolor. Suspendisse a libero sit amet lectus euismod sodales vel vel est. Phasellus ac velit nisl. Curabitur nibh lorem, feugiat et arcu sit amet, auctor gravida purus. Duis euismod mi quis finibus porttitor. Integer cursus velit quis sem laoreet dictum. Praesent nec tellus a ligula commodo porta. Morbi suscipit metus et turpis pulvinar molestie. Integer egestas enim eu suscipit efficitur.\r\n\r\nProin blandit interdum justo ut tincidunt. Nunc iaculis diam nibh, hendrerit pellentesque nisl porta et. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tempus porttitor ', 1, 0, '2014-11-05', 9, 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `articles_categories`
--

CREATE TABLE `articles_categories` (
  `id_article` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `articles_categories`
--

INSERT INTO `articles_categories` (`id_article`, `id_cat`) VALUES
(1, 1),
(2, 2),
(3, 1),
(4, 2);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
`id_cat` int(11) NOT NULL,
  `nom_cat` text COLLATE utf8_unicode_ci NOT NULL,
  `menu` bit(1) NOT NULL,
  `ordre` int(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id_cat`, `nom_cat`, `menu`, `ordre`) VALUES
(1, 'Cinéma', b'1', 30),
(2, 'Jeux vidéos', b'1', 20),
(3, 'Test', b'1', 100),
(4, 'Testé@àè', b'1', 110);

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
-- Structure de la table `profils`
--

CREATE TABLE `profils` (
`id_profil` int(11) NOT NULL,
  `role` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `profils`
--

INSERT INTO `profils` (`id_profil`, `role`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
`id_user` int(11) unsigned NOT NULL,
  `nom_user` varchar(32) NOT NULL,
  `password` char(40) NOT NULL,
  `email` varchar(128) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_user`, `nom_user`, `password`, `email`, `hash_validation`, `date_inscription`, `avatar`, `bio`, `facebook`, `twitter`, `instagram`, `vimeo`, `tumblr`, `linkedin`, `soundcloud`, `youtube`) VALUES
(1, 'Test', '*94BDCEBE19083CE2A1F959FD02F964C7AF4CFC2', 'test@test.com', '', '0000-00-00 00:00:00', '', '', 'http://facebook.com/Loode31', 'test', 'test', '', '', '', '', ''),
(2, 'Test 2', '*7CEB3FDE5F7A9C4CE5FBE610D7D8EDA62EBE5F4', 'test2@test.com', '', '2014-11-27 00:00:00', '', '', '', '', '', '', '', '', '', ''),
(12, 'test6', '*94BDCEBE19083CE2A1F959FD02F964C7AF4CFC2', 'test6@test.com', '', '2014-11-27 12:28:14', '', '', '', '', '', '', '', '', '', '');

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
-- Index pour la table `profils`
--
ALTER TABLE `profils`
 ADD PRIMARY KEY (`id_profil`);

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
MODIFY `id_article` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `profils`
--
ALTER TABLE `profils`
MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
MODIFY `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;