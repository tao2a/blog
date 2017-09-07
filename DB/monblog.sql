-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  jeu. 07 sep. 2017 à 02:14
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `monblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `T_BILLET`
--

CREATE TABLE `T_BILLET` (
  `BIL_ID` int(11) NOT NULL,
  `BIL_DATE` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `BIL_TITRE` varchar(100) NOT NULL,
  `BIL_CONTENU` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_BILLET`
--

INSERT INTO `T_BILLET` (`BIL_ID`, `BIL_DATE`, `BIL_TITRE`, `BIL_CONTENU`) VALUES
  (4, '2017-08-09 04:00:00', 'On passe au lorem ipsum', 'Nec vox accusatoris ulla licet subditicii in his malorum quaerebatur acervis ut saltem specie tenus crimina praescriptis legum committerentur, quod aliquotiens fecere principes saevi: sed quicquid Caesaris implacabilitati sedisset, id velut fas iusque perpensum confestim urgebatur impleri.'),
  (5, '2017-08-09 04:42:00', 'On passe au lorem ipsum Deuxième essai', 'Dictum vetere inlustris hac post hac descriptione Samosata hac dictum Nino clementer Commagena nunc et vetere Euphratensis prima Osdroenam ut quam Commagena Samosata Samosata discrevimus Nino ut prima Osdroenam quam amplis post discrevimus civitatibus descriptione amplis Nino civitatibus post discrevimus descriptione nunc et hac Euphratensis quam est Hierapoli Osdroenam inlustris.'),
  (6, '2017-08-16 00:00:00', 'JE N’APPARAIT PAS', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n\r\nCharming villain driving gloves mark lawrenson pencil um yesbaby.\r\n\r\n\r\n'),
  (7, '2017-08-16 00:00:00', 'Titre du billet', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n\r\nCharming villain driving gloves mark lawrenson pencil um yesbaby.\r\n\r\n\r\n'),
  (8, '2017-08-17 02:08:00', 'Un texte un peu plus long', '\r\n\r\nSi je t\'emmerde, tu me le dis, premièrement, là, j\'ai un chien en ce moment à côté de moi et je le caresse, car l\'aboutissement de l\'instinct, c\'est l\'amour ! Pour te dire comme on a beaucoup à apprendre sur la vie !\r\n\r\nSi je t\'emmerde, tu me le dis, même si on frime comme on appelle ça en France... en vérité, la vérité, il n\'y a pas de vérité et je ne cherche pas ici à mettre un point ! Et j\'ai toujours grandi parmi les chiens.\r\n\r\nYou see, premièrement, c\'est juste une question d\'awareness et ça, c\'est très dur, et, et, et... c\'est très facile en même temps. Tu vas te dire : J\'aurais jamais cru que le karaté guy pouvait parler comme ça !\r\n'),
  (9, '2017-08-25 19:04:07', 'Nouvel article', '<p><em>En se r&eacute;veillant un matin</em> apr&egrave;s des r&ecirc;ves agit&eacute;s, Gregor Samsa se retrouva, dans son lit, m&eacute;tamorphos&eacute; en un monstrueux insecte. Il &eacute;tait sur le dos, un dos aussi dur qu&rsquo;une carapace, et, en relevant un peu la t&ecirc;te, il vit, bomb&eacute;, brun, cloisonn&eacute; par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, pr&ecirc;te &agrave; glisser tout &agrave; fait, ne tenait plus qu&rsquo;&agrave; peine. Ses nombreuses pattes, lamentablement gr&ecirc;les par comparaison avec la corpulence qu&rsquo;il avait par ailleurs, grouillaient d&eacute;sesp&eacute;r&eacute;ment sous ses yeux.&laquo; Qu&rsquo;est-ce qui m&rsquo;est arriv&eacute; ? &raquo; pensa-t-il. Ce n&rsquo;&eacute;tait pas un r&ecirc;ve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, &eacute;tait l&agrave; tranquille entre les quatre murs qu&rsquo;il connaissait bien. Au-dessus de la table o&ugrave; &eacute;tait d&eacute;ball&eacute;e une collection d&rsquo;&eacute;chantillons de tissus - Samsa &eacute;tait repr&eacute;sentant de commerce - on voyait accroch&eacute;e l&rsquo;image qu&rsquo;il avait r&eacute;cemment d&eacute;coup&eacute;e dans un magazine et mise dans un joli cadre dor&eacute;. Elle repr&eacute;sentait une dame munie d&rsquo;une toque et d&rsquo;un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure o&ugrave; tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers</p>'),
  (10, '2017-08-25 19:05:53', 'Nouvel article', '<p><em>En se r&eacute;veillant un matin</em> apr&egrave;s des r&ecirc;ves agit&eacute;s, Gregor Samsa se retrouva, dans son lit, m&eacute;tamorphos&eacute; en un monstrueux insecte. Il &eacute;tait sur le dos, un dos aussi dur qu&rsquo;une carapace, et, en relevant un peu la t&ecirc;te, il vit, bomb&eacute;, brun, cloisonn&eacute; par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, pr&ecirc;te &agrave; glisser tout &agrave; fait, ne tenait plus qu&rsquo;&agrave; peine. Ses nombreuses pattes, lamentablement gr&ecirc;les par comparaison avec la corpulence qu&rsquo;il avait par ailleurs, grouillaient d&eacute;sesp&eacute;r&eacute;ment sous ses yeux.&laquo; Qu&rsquo;est-ce qui m&rsquo;est arriv&eacute; ? &raquo; pensa-t-il. Ce n&rsquo;&eacute;tait pas un r&ecirc;ve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, &eacute;tait l&agrave; tranquille entre les quatre murs qu&rsquo;il connaissait bien. Au-dessus de la table o&ugrave; &eacute;tait d&eacute;ball&eacute;e une collection d&rsquo;&eacute;chantillons de tissus - Samsa &eacute;tait repr&eacute;sentant de commerce - on voyait accroch&eacute;e l&rsquo;image qu&rsquo;il avait r&eacute;cemment d&eacute;coup&eacute;e dans un magazine et mise dans un joli cadre dor&eacute;. Elle repr&eacute;sentait une dame munie d&rsquo;une toque et d&rsquo;un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure o&ugrave; tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers</p>'),
  (11, '2017-08-26 16:52:19', 'Encore un titre de billet', '\r\n    Petit Texte, aucune inspiration aujourd\'hui'),
  (12, '2017-08-27 03:34:19', 'Essai nouvel article', '\r\n    <!-- start slipsum code -->\r\n\r\n<h1>Hold on to your butts</h1>\r\nNormally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I\'m in a transitional period so I don\'t wanna kill you, I wanna help you. But I can\'t give you this case, it don\'t belong to me. Besides, I\'ve already been through too much shit this morning over this case to hand it over to your dumb ass.\r\n\r\n<h1>No, motherfucker</h1>\r\nDo you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that\'s what you see at a toy store. And you must think you\'re in a toy store, because you\'re here shopping for an infant named Jeb.'),
  (13, '2017-09-06 17:26:19', 'Encore un titre de billet', '<p>bla blabla bla...bla blabla bla bla blabla bla bla blabla bla bla blabla bla.bla blabla blabla blabla blabla blabla blabla blabla bla, bla blabla blabla blabla blabla blabla bla????</p>');

-- --------------------------------------------------------

--
-- Structure de la table `T_COMMENTAIRE`
--

CREATE TABLE `T_COMMENTAIRE` (
  `COM_ID` int(11) NOT NULL,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTEUR` varchar(100) NOT NULL,
  `COM_CONTENU` varchar(400) NOT NULL,
  `COM_SIGNAL` tinyint(1) NOT NULL DEFAULT '0',
  `BIL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_COMMENTAIRE`
--

INSERT INTO `T_COMMENTAIRE` (`COM_ID`, `COM_DATE`, `COM_AUTEUR`, `COM_CONTENU`, `COM_SIGNAL`, `BIL_ID`) VALUES
  (9, '2017-08-09 04:45:52', 'Gilles', 'Il va falloir refaire le css', 0, 5),
  (10, '2017-08-09 04:46:36', 'fred', 'Vérification de l\'heure', 0, 4),
  (11, '2017-08-09 04:52:27', 'Joseph', 'plop', 0, 4),
  (12, '2017-08-09 04:52:50', 'Jean', 'Comment !!!!!', 1, 4),
  (13, '2017-08-09 05:01:41', 'Antoine', 'plop', 1, 5),
  (14, '2017-08-09 05:11:49', 'Jean-Jean', 'L\'heure devrais fonctionner maintenant', 0, 5),
  (15, '2017-08-10 14:28:25', 'Gérard', 'Faut vraiment que j’arrête de travail fatigué^^', 0, 5),
  (16, '2017-08-15 04:04:35', 'Antoine', 'Essai de TinyMCE', 0, 5),
  (17, '2017-08-16 19:16:55', 'robert', 'Salut, ou tu étais ???', 0, 7),
  (18, '2017-08-20 16:32:52', 'Jean-Jean', 'hello everybody', 0, 7),
  (20, '2017-08-25 20:05:26', 'Ange', 'Je te vois', 0, 10),
  (22, '2017-08-27 17:16:16', 'fred', 'hello', 5, 13),
  (27, '2017-08-29 15:18:08', 'Marc', 'Que du Bla Bla Bla', 1, 13),
  (30, '2017-09-03 16:35:38', 'Mimoun', 'Je sais, c\'est dur ;)', 3, 11);

-- --------------------------------------------------------

--
-- Structure de la table `T_UTILISATEUR`
--

CREATE TABLE `T_UTILISATEUR` (
  `UTIL_ID` int(11) NOT NULL,
  `UTIL_LOGIN` varchar(100) NOT NULL,
  `UTIL_MDP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_UTILISATEUR`
--

INSERT INTO `T_UTILISATEUR` (`UTIL_ID`, `UTIL_LOGIN`, `UTIL_MDP`) VALUES
  (1, 'alain', '$2y$10$XE4Wn.mSUojPxo8LuAgcq.KM8xw.1jQql5tsrqQqSjFEXPLRxbeZ6');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `T_BILLET`
--
ALTER TABLE `T_BILLET`
  ADD PRIMARY KEY (`BIL_ID`);

--
-- Index pour la table `T_COMMENTAIRE`
--
ALTER TABLE `T_COMMENTAIRE`
  ADD PRIMARY KEY (`COM_ID`),
  ADD KEY `BIL_ID` (`BIL_ID`);

--
-- Index pour la table `T_UTILISATEUR`
--
ALTER TABLE `T_UTILISATEUR`
  ADD PRIMARY KEY (`UTIL_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `T_BILLET`
--
ALTER TABLE `T_BILLET`
  MODIFY `BIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `T_COMMENTAIRE`
--
ALTER TABLE `T_COMMENTAIRE`
  MODIFY `COM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `T_UTILISATEUR`
--
ALTER TABLE `T_UTILISATEUR`
  MODIFY `UTIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `T_COMMENTAIRE`
--
ALTER TABLE `T_COMMENTAIRE`
  ADD CONSTRAINT `t_commentaire_ibfk_1` FOREIGN KEY (`BIL_ID`) REFERENCES `T_BILLET` (`BIL_ID`) ON DELETE CASCADE;
