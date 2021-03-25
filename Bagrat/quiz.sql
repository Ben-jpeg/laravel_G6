-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 25 mars 2021 à 09:02
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Bagrat', 'bagrat.grigorian@laposte.net', '$2y$10$r5DyNaxFRfqVRVt57cmTDO7jSm66POEcHu9OvdWxjup43qE2fyIRe');

-- --------------------------------------------------------

--
-- Structure de la table `words`
--

DROP TABLE IF EXISTS `words`;
CREATE TABLE IF NOT EXISTS `words` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wordname` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `definition` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `words`
--

INSERT INTO `words` (`id`, `wordname`, `definition`) VALUES
(1, 'CMS', ' Système de gestion de contenu'),
(2, 'Javascript', ' Script, langage de programmation '),
(4, 'Cookie', ' Petit texte envoyé par un serveur HTTP à un client HTTP, que ce dernier renverra les prochaines fois qu\'il se connectera aux serveurs partageant le même nom de domaine.'),
(5, 'Chemin absolu', ' Succession des répertoires à parcourir depuis la racine pour accéder au fichier spécifié'),
(6, 'EventListener', ' Un écouteur d\'événement en JS qui s\'applique à un élément selon le type souhaité: par exemple au clic '),
(7, 'Faille XSS', 'Type de faille de sécurité des sites web permettant d\'injecter du contenu dans une page, provoquant ainsi des actions sur les navigateurs web visitant la page'),
(8, 'Jointure', 'Dans les bases de données relationnelles, il s\'agit de l\'opération permettant d\'associer plusieurs tables'),
(9, 'Clé primaire', ' Dans une base de données relationnelle, c\'est la donnée qui permet d\'identifier de manière unique un enregistrement dans une table'),
(13, 'Ancre', 'Mot ou texte visible par l’internaute qui sert de support à un lien cliquable.  Joue un rôle dans le référencement naturel et doit être optimisée pour sa prise en compte par les moteurs de recherche'),
(14, 'API', ' Interface de programmation qui permet de se « brancher » sur une application pour échanger des données. Elle est ouverte et proposée par le propriétaire du programme'),
(15, 'Backlink', ' Des liens pointant vers un site ou une page web, c’est un critère d’évaluation pour les moteurs de recherche pour déterminer la popularité et la pertinence d’un site'),
(16, 'Base de données', 'Ensemble d’informations stockées dans un dispositif informatique, permettant la gestion, la mémorisation et le traitement des informations'),
(17, 'Cache mémoire', ' Copie locale et fichier temporaire sur votre ordinateur d’informations distantes destinée à accélérer les nouveaux accès à ces données'),
(18, 'Call to Action', ' Elément d’une page web dont l’objectif est d’inciter l’utilisateur à réaliser une action. Cet élément peut par exemple prendre la forme d’un bouton, d’une image ou d’un lien'),
(19, 'Captcha', ' Programme de test visant à protéger un site web (souvent une page de formulaire ou d’inscription) des robots. Doit pouvoir être résolu rapidement et simplement par un humain et doit déjouer les robots.'),
(20, 'Charte graphique', '  Document de travail qui contient l’ensemble des règles fondamentales d’utilisation des signes graphiques qui constituent l’identité graphique d’une organisation, d’un projet, d’une entreprise'),
(21, 'Clickbait', ' Une méthode utilisée pour attirer le visiteur vers son article, sa page, produit ou tout type autre contenu en attisant la curiosité de l’internaute par le biais d’un message exagéré'),
(22, 'CNIL', ' Autorité administrative indépendante française qui veille à ce que l’informatique soit au service du citoyen et qu’elle ne porte atteinte ni à l’identité humaine, ni aux droits de l’homme, ni à la vie privée, ni aux libertés individuelles ou publiques'),
(23, 'Community Manager', ' Professionnels dont le rôle est d’animer une communauté sur le web pour le compte d’une marque, d’une personnalité ou d’une organisation'),
(24, 'Contenu dynamique', ' Pages web avec des informations qui changent en fonction d’une base de données ou d’éléments provenant de l’utilisateur'),
(25, 'Ergonomie du net', '  Optimisation de l’interface (menu et navigation) pour améliorer l’accès aux fonctionnalités d’un site Internet et de ses données'),
(26, 'Expérience client', ' Désigne l’ensemble des émotions et sentiments ressentis par un client avant, pendant et après l’achat d’un produit ou service. C’est le résultat de l’ensemble des interactions qu’un client peut avoir avec la marque ou l’entreprise'),
(27, 'Favicon', ' Icône d’un site internet qui s’affiche dans la barre d’adresse, la barre de titre, les favoris, les onglets et les autres raccourcis'),
(28, 'Firewall', '  Il s’agit d’un système de sécurité comportant un simple programme ou une machine spécifique, qui sert de filtre de protection entre un ordinateur ou un réseau privé d’une part, et Internet d’autre part.'),
(29, 'Footer', ' Pied de page en français, il désigne le bas d’une page web où se trouve des compléments d’informations'),
(30, 'Forum', ' Service permettant l’échange et la discussion sur un thème donné : chaque utilisateur peut lire à tout moment les interventions de tous les autres et apporter sa propre contribution sous forme de messages'),
(31, 'Hypertexte', ' Un concept de structuration de données permettant d’établir des liens entre divers éléments au sein d’un ensemble de documents. On peut ainsi directement accéder depuis un document aux documents connexes référencés par l’auteur en suivant les liens'),
(32, 'Hyperlien', ' Lien permettant de passer automatiquement d’un document ou d’une page web consulté à un autre document ou page web. Ce système est à la base du web'),
(33, 'Indexation', '  Fait d’enregistrer une page internet dans un index, une base de données ou un moteur de recherche. Cela s’effectue généralement via un formulaire qui comprend une adresse email valide et l’adresse URL du site en question'),
(34, 'Internet', ' C\'est le réseau mondial du web qui rend accessible au public des services comme le courrier électronique et le World Wide Web'),
(35, 'Pop-up', ' Fenêtre publicitaire qui s’affiche automatiquement sur l’écran de l’utilisateur sans que celui-ci l’ait demandé'),
(36, 'Requête', ' Le lancement d’une recherche par un mot, ou expression ou groupe de mots, chiffres employés afin de passer des instructions à un outil de recherche, ou à une base de donnée afin de localiser des résultats ou des pages web sur une recherche.'),
(37, 'Référencement', '  L’ensemble des techniques qui permettent d’inscrire un site dans les moteurs de recherche ou dans les annuaires'),
(38, 'Refonte', ' Révision totale d’un site web dans le but d’améliorer l’aspect marketing, graphique, ergonomique, fonctionnel du site'),
(39, 'Responsive design', 'Un site qui adapte automatiquement sa mise en page et son apparence en fonction de la taille de la fenêtre d’affichage, et par conséquent du type d’appareil utilisé pour consulter le site (ordinateur, tablette ou smartphone)'),
(40, 'SEO', ' Ensemble de techniques destinées à faciliter le travail des moteurs de recherche internet et à obtenir un meilleur classement des contenus');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
