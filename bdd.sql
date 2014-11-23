-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Dim 23 Novembre 2014 à 22:04
-- Version du serveur: 5.6.11-log
-- Version de PHP: 5.4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `blogmmi`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(1) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `contenu` text NOT NULL,
  `date` date NOT NULL,
  `note` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `titre`, `contenu`, `date`, `note`, `id_auteur`) VALUES
(1, 'Snatch', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dui mauris, tristique quis magna ac, ullamcorper volutpat est. Integer at tincidunt erat, non faucibus risus. Cras accumsan venenatis libero, non consectetur diam sollicitudin a. Vestibulum vitae semper ex. Duis massa magna, tempus sollicitudin justo nec, dictum tempor odio. Nam tempus ornare volutpat. Vivamus imperdiet turpis a tristique aliquet. Quisque et lacus ac augue tristique tincidunt non eget sapien. Nullam feugiat scelerisque vulputate. Suspendisse luctus lobortis risus ac aliquam. Praesent vitae elit at lorem tempor tincidunt in eu nulla.\r\n\r\nMaecenas mi massa, placerat ut ornare sed, suscipit nec sapien. Sed purus ligula, finibus ut erat vel, pulvinar accumsan nisi. Donec ac diam vitae tellus mollis laoreet. Phasellus mattis pellentesque erat sit amet dictum. Nunc aliquam magna a condimentum vestibulum. Mauris nulla nibh, laoreet vitae tristique eget, congue vel est. Suspendisse at dolor eget mauris suscipit rhoncus quis nec eros. Donec ornare arcu et vestibulum sodales. Aliquam tincidunt sagittis rutrum. Curabitur gravida, dui ac feugiat ultrices, elit elit volutpat ipsum, gravida cursus quam arcu et mi.\r\n\r\nNulla malesuada lectus non eros fermentum, vel feugiat turpis facilisis. Morbi efficitur velit purus, posuere convallis nibh dapibus id. Duis laoreet lacinia neque quis pulvinar. Nullam sed ultricies lectus. Etiam semper nibh ac lacus tincidunt viverra. Suspendisse maximus scelerisque nibh eu eleifend. Suspendisse potenti. Praesent pretium lorem quis libero congue, a pharetra mauris varius. Proin tincidunt pharetra odio quis commodo. Donec eu est at justo aliquam faucibus a id ante. Proin id metus tempor, fermentum augue sed, posuere dui. Nam aliquet molestie mauris, a mollis eros ullamcorper quis. Sed vitae interdum ipsum, rutrum porttitor sem. ', '2014-12-10', 5, 1),
(2, 'God Of War II', ' c nec dictum eros, pharetra blandit arcu.\n\nPhasellus mollis tortor fringilla, faucibus ipsum viverra, fringilla purus. Sed vulputate nec elit non placerat. In eu elit nec neque imperdiet consequat nec et neque. Aliquam egestas scelerisque lacus, id efficitur nunc varius at. Phasellus suscipit mattis convallis. Maecenas luctus euismod enim. Integer id metus at mi feugiat condimentum id vitae risus. Nullam nec urna ante.\n\nDonec viverra scelerisque augue vitae luctus. Ut dignissim ante at purus blandit volutpat. Sed tincidunt imperdiet felis. Nam venenatis metus eu sem posuere tincidunt. Donec nec dignissim justo. Nunc rutrum libero et arcu scelerisque, id maximus tortor sodales. Duis nec suscipit ante. Curabitur nisi tellus, facilisis sed neque eget, feugiat aliquet ex. Phasellus porta est neque, sed porta dui dapibus non. Suspendisse pharetra mauris semper massa dictum eleifend. Vestibulum in orci volutpat, dictum lectus nec, pulvinar enim. Quisque vitae nisi augue. Cras at massa egestas, ullamcorper', '2014-12-02', 3, 2),
(3, 'Bienvenue à Gattaca', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis condimentum massa. Aenean convallis iaculis accumsan. Duis et augue eros. Nulla ornare neque at felis convallis, eu suscipit nisl lobortis. Pellentesque eget arcu dapibus, viverra sapien in, consequat nisi. Sed sit amet efficitur tortor. Sed efficitur laoreet congue. Proin eget elementum augue. Aliquam ac urna a sapien accumsan venenatis. Cras libero quam, posuere sit amet venenatis ut, sodales in elit. Aenean est lorem, dapibus sit amet bibendum ut, tristique non velit. Nulla at malesuada tellus, non fringilla elit. Cras metus neque, sodales sed mollis eget, egestas ut metus. In tempor placerat magna, id suscipit felis euismod a.\r\n\r\nSed ac purus ut neque sodales dictum non a nisl. Aliquam nec facilisis ex. Curabitur tempor ligula in ex scelerisque ultricies. Nunc ut vehicula ipsum, a mollis sem. Duis placerat hendrerit congue. Nullam sed est et lacus suscipit consectetur eget id enim. Vestibulum eu purus dapibus, vestibulum urna rhoncus, lobortis purus. Maecenas dictum nisi sem, viverra sollicitudin mi imperdiet et. Nam dignissim lectus erat, et consectetur leo facilisis vitae. Aenean feugiat leo at nulla tincidunt, vitae lacinia lacus mollis.\r\n\r\nMaecenas felis mi, posuere ut ultrices vitae, convallis tempor felis. Ut mauris nunc, lobortis a turpis vitae, ullamcorper tristique risus. Duis dictum congue suscipit. Pellentesque sed nisl eleifend, tristique libero ac, aliquet turpis. Curabitur auctor pharetra fermentum. Nam sed nisi quis libero convallis scelerisque quis sed magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent vitae tellus a lacus hendrerit iaculis. Etiam mollis sapien vel dui condimentum, eu tincidunt nibh vehicula. Integer a sodales lorem. Nam nec placerat lectus. Praesent in dui eu nisi mollis vulputate sed eu purus. ', '2014-11-21', 10, 1),
(4, 'Red Dead Redemption', ' nisi quis libero convallis scelerisque quis sed magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent vitae tellus a lacus hendrerit iaculis. Etiam mollis sapien vel dui condimentum, eu tincidunt nibh vehicula. Integer a sodales lorem. Nam nec placerat lectus. Praesent in dui eu nisi mollis vulputate sed eu purus.\r\n\r\nAenean nec fermentum ipsum, ac tincidunt nisi. Nulla cursus lobortis urna, vitae sagittis nisi laoreet tincidunt. Cras ligula nisl, posuere ac efficitur ut, convallis sit amet neque. Sed quis euismod quam. Aliquam ac pulvinar dolor. Suspendisse a libero sit amet lectus euismod sodales vel vel est. Phasellus ac velit nisl. Curabitur nibh lorem, feugiat et arcu sit amet, auctor gravida purus. Duis euismod mi quis finibus porttitor. Integer cursus velit quis sem laoreet dictum. Praesent nec tellus a ligula commodo porta. Morbi suscipit metus et turpis pulvinar molestie. Integer egestas enim eu suscipit efficitur.\r\n\r\nProin blandit interdum justo ut tincidunt. Nunc iaculis diam nibh, hendrerit pellentesque nisl porta et. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tempus porttitor ', '2014-11-05', 9, 2);

-- --------------------------------------------------------

--
-- Structure de la table `articles_rubriques`
--

CREATE TABLE IF NOT EXISTS `articles_rubriques` (
  `id_article` int(11) NOT NULL,
  `id_rubrique` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles_rubriques`
--

INSERT INTO `articles_rubriques` (`id_article`, `id_rubrique`) VALUES
(1, 1),
(2, 2),
(3, 1),
(4, 2);

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

CREATE TABLE IF NOT EXISTS `auteurs` (
  `id_auteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_au` varchar(255) NOT NULL,
  PRIMARY KEY (`id_auteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `auteurs`
--

INSERT INTO `auteurs` (`id_auteur`, `nom_au`) VALUES
(1, 'Michel Sardou'),
(2, 'C Jerome');

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

CREATE TABLE IF NOT EXISTS `profils` (
  `Id_Profil` int(11) NOT NULL AUTO_INCREMENT,
  `Role` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_Profil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `profils`
--

INSERT INTO `profils` (`Id_Profil`, `Role`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `rubriques`
--

CREATE TABLE IF NOT EXISTS `rubriques` (
  `id_rubrique` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ru` text NOT NULL,
  PRIMARY KEY (`id_rubrique`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `rubriques`
--

INSERT INTO `rubriques` (`id_rubrique`, `nom_ru`) VALUES
(1, 'Cinéma'),
(2, 'Jeux vidéos');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `Id_Utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Id_Profil` int(11) NOT NULL,
  PRIMARY KEY (`Id_Utilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`Id_Utilisateur`, `Email`, `Password`, `Id_Profil`) VALUES
(1, 'tyranocif@gmail.com', '*6DD354C4B85BAF76EFE8FB48605920FD978BFF0C', 1),
(2, 'toto@toto.com', '*63D85DCA15EAFFC58C908FD2FAE50CCBC60C4EA2', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
