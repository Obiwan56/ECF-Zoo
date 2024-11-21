-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 nov. 2024 à 17:23
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `zoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `animals`
--

CREATE TABLE `animals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `race` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `etat` text NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  `img5` varchar(255) DEFAULT NULL,
  `habitat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `animals`
--

INSERT INTO `animals` (`id`, `race`, `prenom`, `etat`, `img1`, `img2`, `img3`, `img4`, `img5`, `habitat_id`, `created_at`, `updated_at`) VALUES
(11, 'Poisson clown', 'Némo', 'Les poissons-clowns, ou Amphiprioninae, sont une sous-famille de poissons appartenant à la famille des pomacentridés. Elle contient trente espèces faisant toutes partie du genre Amphiprion. Ce sont des poissons d\'une dizaine de centimètres dans les tons d\'orange et de noir. Certaines espèces présentent des bandes ou des barres blanches. Ils fréquentent les lagons et les récifs coralliens du bassin Indo-Pacifique et de la mer Rouge où ils se nourrissent généralement de copépodes et de larves de tuniciers.', 'Animaux/L5DJEsYavYlzHTmciPGAxznDUvo8mBOTuk7laTbI.jpg', 'Animaux/DrDsCrY3ASsO3n8mEvkDViQ6eVRYpfRbPXuUwSak.jpg', 'Animaux/x211B04qpf8kGH9JfAjFBqOWrLLQtkgIxuLs6MLf.jpg', '', '', 3, '2024-09-17 07:40:41', '2024-10-01 07:22:35'),
(12, 'Lion', 'Gérard', 'Le Lion (Panthera leo) est une espèce de mammifères carnivores de la famille des Félidés. La femelle du lion est la lionne, son petit est le lionceau. Le mâle adulte, aisément reconnaissable à son importante crinière, accuse une masse moyenne qui peut être variable selon les zones géographiques où il se trouve, allant de 145 à 180 kg pour les lions d\'Asie à plus de 225 kg pour les lions d\'Afrique. Certains spécimens très rares peuvent dépasser exceptionnellement 300 kg. Un mâle adulte se nourrit de 7 kg de viande chaque jour contre 5 kg chez la femelle. Le lion est un animal grégaire, c\'est-à-dire qu\'il vit en larges groupes familiaux, contrairement aux autres félins. Son espérance de vie, à l\'état sauvage, est comprise entre 7 et 12 ans pour le mâle et 14 à 20 ans pour la femelle, mais il dépasse fréquemment les 30 ans en captivité.', 'Animaux/hwEbBtvaW85qS3pCHK4MNJcOGxP2vT1Zx0MSUpc5.jpg', 'Animaux/sjHoL2RLq4PVSmUPvHVLQWmORdhaUOuIMB7IOzRj.jpg', 'Animaux/sdwgixHQ993X9GOHEOoiWVXQkIzVBAUnhB62ABJE.jpg', 'Animaux/FLM0rknMQH15cymZobA9mEYObfFMS3gxhvvmGYAU.jpg', 'Animaux/qIFU2LoILPENio9Er4L9K0w4uvPRz0dixDn88tW1.jpg', 8, '2024-09-17 07:45:34', '2024-09-17 07:45:34'),
(13, 'Elephant', 'Dumbo', 'Né en Afrique latine, il est arrivé il y a quelque temps déjà et c\'est très bien adapté.', 'Animaux/PvQn2VdCrCq7G0RhRv6A1fAv5NZIY9KaG4jfj6FD.jpg', 'Animaux/4Whb353J3kIEnzhKx4l9VFZHVhuhQmiutKBBdnDW.jpg', 'Animaux/TdgCd76DsdcBhNXztRzXPA3W5CaoUpseRPe3pxWh.jpg', 'Animaux/CqiQq2BvAMAHZxrq4ZwWms1hX7wLhxn6gzwZZktM.jpg', '', 6, '2024-09-28 06:48:04', '2024-09-28 06:48:04'),
(14, 'Girafe', 'Lucie', 'La Girafe (Giraffa camelopardalis) est une espèce de mammifères ongulés artiodactyles, du groupe des ruminants, vivant dans les savanes africaines et répandue du Tchad jusqu\'en Afrique du Sud. Son nom commun vient de l\'arabe زرافة, zarāfah, mais l\'animal fut anciennement appelé camélopard, du latin camelopardus1, contraction de camelus (chameau) en raison du long cou et de pardus (léopard) en raison des taches recouvrant son corps. Après des millions d\'années d\'évolution, la girafe a acquis une anatomie unique avec un cou particulièrement allongé qui lui permet notamment de brouter haut dans les arbres.', 'Animaux/igQis9TUQsUqPHk5yY2G1pNxtp5xFmbkX9eGbJmh.jpg', 'Animaux/8Wp5OahsTCxXiJRzCyDREN4w3ZEOFMJjs5QD3e6R.jpg', 'Animaux/nq5oQE7INbQNiqSxrAavcIOuCISj3oXdqWUTV3Pc.jpg', '', '', 7, '2024-10-10 07:28:33', '2024-10-10 07:28:33'),
(15, 'Ours', 'Winnie', 'Les Ours forment la famille de mammifères des Ursidés (Ursidae), de l\'ordre des Carnivores (Carnivora). Le Grand panda, dont la classification a longtemps prêté à débat, est aujourd\'hui considéré comme un ours herbivore au sein de cette famille1,2. Il n\'existe que huit espèces d\'ours vivantes réparties dans une grande variété d\'habitats, à la fois dans l\'hémisphère Nord et dans une partie de l\'hémisphère Sud. Les ours vivent sur les continents d\'Europe, d\'Amérique, et en Asie.', 'Animaux/XIB8GlQPpJkvvID9ZxHcfLzz9kXbo4UTRazjzE0S.jpg', 'Animaux/q9uchOTXyTK6cKm4MgVnN3prHK0ygGxSR7QDl5Wb.jpg', 'Animaux/4S8wynecxxE0B4cVLYa8QPWSxPHJJNmfiusHFDHP.jpg', '', '', 9, '2024-10-10 07:31:03', '2024-10-10 07:31:03'),
(16, 'Requin', 'Willy', 'Les requins, squales ou sélachimorphes forment un super-ordre de poissons cartilagineux, possédant cinq à sept fentes branchiales sur les côtés de la tête et les nageoires pectorales qui ne sont pas fusionnées à la tête. Ils sont présents dans tous les océans du globe et dans certains grands fleuves. Les requins modernes sont classés au sein du super-ordre Selachimorpha ou Selachii et constituent le groupe-frère des raies modernes au sein de la micro-classe Neoselachii. Toutefois, le terme « requin », au sens large, désigne aussi communément des espèces disparues de la sous-classe des Elasmobranchii, comme Cladoselache et Xenacanthus, qui appartiennent à d’autres infra-classes qu’Euselachii.', 'Animaux/1kynR99C0f7pB4oTIWc7PFIrEtAZrIAYO3sV2j8c.jpg', 'Animaux/AasicPi9Jd2y7EkYqbp2wNII4Eax22XbK9NBJrQI.webp', 'Animaux/vo31m53P4CjX0ebZqZV6x9bCGCbBRI3wHffdgvIw.jpg', '', '', 4, '2024-10-10 07:31:58', '2024-10-10 07:31:58'),
(17, 'Aigle', 'Arthurus', 'Les aigles sont de grands rapaces planeurs diurnes qui possèdent des pattes puissantes et de grandes serres qui leur permettent de saisir leurs proies. Ils ont grande acuité visuelle leur permettant de repérer celles-ci à distance', 'Animaux/fozBmgPaCn5RAxxNAyDXrF7sKV0caBEjfZotP7ln.jpg', 'Animaux/desImGfaKZwuKEvkYHcmTwjieC7XZzOnkTUZoKIp.webp', 'Animaux/f0pYH6rsS2xwpoKJNBVxqUwE7zPSPQVmw5HPEIdK.jpg', '', '', 5, '2024-10-10 07:33:15', '2024-10-10 07:33:15'),
(18, 'Lama', 'Bernard', 'Le lama (genre Lama) est un terme générique désignant un grand camélidé de 2,5 m de long, originaire de la cordillère des Andes. Le terme « lama » désigne en lui-même deux espèces de camélidés d\'Amérique du Sud :', 'Animaux/oeUOuVabGLjyOk1qkDSGr1E6Iel7gNJVWcWMnYfn.jpg', 'Animaux/EV1Dv8kYj2EjTGtFGi6tGIrShpuDBr9lFUTvBC67.jpg', 'Animaux/CRQZuNQtaRyn8PMTHIhofDcEmZV3ZTWrZOE1LmwQ.jpg', '', '', 10, '2024-10-10 07:34:17', '2024-10-10 07:34:17'),
(19, 'Faucon', 'Millenium', 'Les Faucons (Falco) sont un genre de rapaces diurnes, éponyme de la famille des Falconidés. On les retrouve sur pratiquement toute la planète, à l\'exception des régions polaires.\r\n\r\nEn France, citons parmi les espèces les plus connues le Faucon crécerelle (Falco tinnunculus) connu pour son chant chevalin, un rapace commun sur le territoire, et le Faucon pèlerin (Falco peregrinus) qui a souvent été apprivoisé dans le cadre de la fauconnerie.', 'Animaux/fHhqCm3r6IhwMuaeNG5gmDTNxQMkkhoH1fBkJ28t.jpg', 'Animaux/lN4oUMhqLZoPZdryWHSuxwivgcFteV182hRbhh7G.jpg', 'Animaux/rbWm0TXVi6XGgveztrEssPgHKYLVlmfjVlsnjXFq.jpg', '', '', 5, '2024-10-10 07:36:53', '2024-10-10 07:36:53'),
(20, 'Orque', 'Willy 2', 'L\'orque, ou épaulard (Orcinus orca), est une espèce de mammifères marins du sous-ordre des cétacés à dents, les odontocètes.\r\n\r\nDes auteurs proposent de scinder l\'espèce en plusieurs, dont, pour le Pacific nord-est :\r\n\r\nOrcinus ater (orque résident) ;\r\nOrcinus rectipinnus (orque de Bigg).\r\nElle a une répartition cosmopolite ; elle vit dans les régions arctiques et antarctiques jusqu\'aux mers tropicales. Son régime alimentaire est très diversifié, bien que les populations se spécialisent souvent dans des types particuliers de proies. Certaines se nourrissent de poissons, tandis que d\'autres chassent les mammifères marins tels que les lions de mer, les phoques, les morses et même de grandes baleines (généralement des baleineaux). Les orques sont situées au sommet de la chaîne alimentaire des océans et sont les superprédateurs qui occupent la plus large aire de répartition sur Terre. Les anglophones les surnomment baleines tueuses (killer whales), bien que le genre Orcinus soit propre aux seules orques.', 'Animaux/eIcqajSNFZQDHQBGuKC93LdfxKAhO9cmVHCjCkcf.jpg', 'Animaux/icfIiX4m4pA8UIj0u3NlU7ZJxZxTyRWI2ZzTOgl5.jpg', '', '', '', 4, '2024-10-10 07:40:07', '2024-10-10 07:40:07'),
(21, 'Dauphin', 'Gallak', 'Le substantif masculin « dauphin » (/do.ˈfɛ̃/) est issu, par l\'intermédiaire d\'un latin vulgaire *dalphinus, du latin classique delphinus, lui-même issu du grec δελφίς / delphís1,2,3, peut-être lui-même issu de δελφὐς / delphús, « utérus4 » ou apparenté à delphax, le porc, qui partage une couche de graisse analogue4,N 1.\r\n\r\nL\'ancien français daufin est attesté au milieu2 du XIIe siècle1 : d\'après le Trésor de la langue française informatisé, sa plus ancienne occurrence connue se trouve dans un manuscrit du Roman d\'Alexandre2.', 'Animaux/gcqg79ViuQxsnvOlvPr05aqmUKoFF72U0qEWFpYh.jpg', 'Animaux/0DGlSEbdvyy1av41kkVrvWlpEkcxP8YUGOpu4rkR.jpg', 'Animaux/tU49V5BateKYPHeUOgc0WbJEFFoyfnSAH8J8Oqs5.jpg', '', '', 4, '2024-10-10 07:41:39', '2024-10-10 07:41:39'),
(22, 'Mouton', 'Fromage', 'Le mouton, Ovis aries, est un animal domestique, mammifère herbivore ruminant appartenant au genre Ovis (ovins) de la sous-famille des Caprinés, dans la grande famille des Bovidés. Comme tous les ruminants, les moutons sont des ongulés marchant sur deux doigts (Cetartiodactyla). Dans le langage courant et notamment en termes de boucherie, le mot mouton désigne indifféremment la femelle (la brebis) et le mâle (le bélier), tandis que le mot agneau désigne tant le jeune mâle que la jeune femelle (l\'agnelle).', 'Animaux/gi8niCCN1qcOcLSrkRJONxnmhvl4wOWnJPmYPQaW.jpg', 'Animaux/A7hRktQd848P8TgHuMfucFp58KDNvVd5hkgVn0XS.jpg', 'Animaux/ap4fi84hKAQJN6Uds3cpiovWYBdqAbcXeFczT5IQ.jpg', '', '', 10, '2024-10-10 07:43:46', '2024-10-10 07:43:46');

-- --------------------------------------------------------

--
-- Structure de la table `animal_nourriture`
--

CREATE TABLE `animal_nourriture` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `animal_id` bigint(20) UNSIGNED NOT NULL,
  `nourriture_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `validation` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `pseudo`, `commentaire`, `validation`, `created_at`, `updated_at`) VALUES
(1, 'Gérard', 'De Palma', 'ok', '2024-09-20 06:17:32', '2024-09-20 06:17:39'),
(2, 'Richard', 'Je crois avoir oublié ma Fouégo!!!! sur le parking', 'ok', '2024-10-10 07:46:38', '2024-10-10 07:47:50'),
(3, 'Jean-michel', 'Jarr', 'ok', '2024-10-10 07:46:53', '2024-10-10 07:47:51'),
(4, 'Johnny', 'Halliday ou Jean-Philippe Smeth?', 'ok', '2024-10-10 07:47:37', '2024-10-10 07:47:53');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `habitats`
--

CREATE TABLE `habitats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `habitats`
--

INSERT INTO `habitats` (`id`, `nom`, `description`, `img1`, `img2`, `img3`, `created_at`, `updated_at`) VALUES
(3, 'Aquarium petit poisson', 'Un aquarium est un réservoir rempli d\'eau dans lequel vivent des animaux et/ou des plantes aquatiques, par exemple des poissons, des mollusques, des crustacés, des tortues aquatiques ou des coraux, ainsi que des algues, mais aussi de nombreux microorganismes invisibles à l\'œil nu.\r\n\r\nL\'aquarium communautaire décoratif, d\'eau douce ou d\'eau de mer, est la forme la plus populaire. Il s\'agit d\'un bac vitré de petite dimension placé dans une habitation ou un lieu public. Il est une reproduction de l\'habitat naturel de l\'espèce ou des espèces qui habite(ent) dans cet aquarium. Il peut aussi contenir des décorations diverses à l\'apparence moins naturelle. Il demande des soins particuliers qui peuvent devenir un loisir, l\'aquariophilie.\r\n\r\nPar extension, un aquarium est aussi un lieu public rassemblant de nombreux bacs remplis d\'eau, destinés à présenter des espèces aquatiques.', 'habitat/7uDhUEd1VaQ0M03KLzFfAEijASlgnYMFoZzg7icJ.jpg', '', '', '2024-09-17 07:17:39', '2024-09-17 07:17:39'),
(4, 'Aquarium Gros poisson', 'L\'aquarium héberge 500 espèces animales de poissons et d\'invertébrés, et présente environ 10 000 spécimens hors végétaux. Le bac polynésien comporte 750 coraux. Le grand bassin contient 38 requins de sept espèces différentes dans 3 millions de litres d\'eau. De ce fait, il est le 2e plus grand bassin artificiel en France, le plus grand étant celui de l\'aquarium Nausicaa de Boulogne-sur-Mer, avec 10 millions de litres. Au total, 5,3 millions de litres d\'eau sont répartis en 43 bassins et grands aquariums, dont l\'Aquastudio de 160 000 litres présente un spectacle avec une sirène, c\'est le deuxième plus grand bassin de l\'aquarium avec sa vitre de 34 cm d’épaisseur et un poids de 24 tonnes.', 'habitat/sThc4fLGyFl7rt853Z87h49QcPvTBvIeTrTJCNTT.jpg', '', '', '2024-09-17 07:26:57', '2024-09-17 07:26:57'),
(5, 'Volière', 'Comme son nom l\'indique, c\'est la première pièce dans laquelle on entre. Le hall d\'entrée est immense (une maison entière pourrait y être construite1) et son plafond est invisible tant il est haut. Des torches sont accrochées aux murs et le sol est en dalles de pierre. Des niches sont creusées dans le mur de la porte d\'entrée et abritent les grands sabliers remplis de pierres précieuses qui comptabilisent les points remportés par les différentes maisons pour chaque bonne action. Le grand escalier de marbre se trouve en face de la porte d\'entrée pour accéder au étages supérieurs. Il est éclairé par des centaines de torches et plusieurs portes se situent autour pour accéder à couloirs de rez-de-chaussée ou aux étages inférieurs.', 'habitat/ZRUrY8lrTBh1IoGeF4mGWeUPjcQOB0Qp9ivUA4wc.jpg', '', '', '2024-09-17 07:27:54', '2024-09-17 07:27:54'),
(6, 'Eléphant', 'Les éléphants sont des mammifères proboscidiens de la famille des Éléphantidés. Ils correspondent aujourd\'hui à trois espèces réparties en deux genres distincts. L\'éléphant de savane d\'Afrique et l\'éléphant de forêt d\'Afrique, autrefois regroupés sous la même espèce d\'« éléphant d\'Afrique », appartiennent au genre Loxodonta, tandis que l\'éléphant d\'Asie, anciennement appelé « éléphant indien », appartient au genre Elephas. Ils se différencient par certaines caractéristiques anatomiques, les éléphants d\'Asie étant en général plus petits avec des oreilles plus petites, ou encore une différence du bout de la trompe. Ces espèces survivantes font localement l\'objet de programmes ou de projets de réintroduction et de protection.', 'habitat/Nffy7XBwboKToi5LRzd7Eq4xa1mWkzegJT9Xj8dq.jpg', '', '', '2024-09-17 07:29:40', '2024-09-17 07:29:40'),
(7, 'Girafe', 'La Girafe (Giraffa camelopardalis) est une espèce de mammifères ongulés artiodactyles, du groupe des ruminants, vivant dans les savanes africaines et répandue du Tchad jusqu\'en Afrique du Sud. Son nom commun vient de l\'arabe زرافة, zarāfah, mais l\'animal fut anciennement appelé camélopard, du latin camelopardus1, contraction de camelus (chameau) en raison du long cou et de pardus (léopard) en raison des taches recouvrant son corps. Après des millions d\'années d\'évolution, la girafe a acquis une anatomie unique avec un cou particulièrement allongé qui lui permet notamment de brouter haut dans les arbres.', 'habitat/X6Ox4BdfnxT2aIAxpUSd9BGntgPvJEonDiOYvdV1.jpg', '', '', '2024-09-17 07:30:21', '2024-09-17 07:30:21'),
(8, 'Lion', 'Le Lion (Panthera leo) est une espèce de mammifères carnivores de la famille des Félidés. La femelle du lion est la lionne, son petit est le lionceau. Le mâle adulte, aisément reconnaissable à son importante crinière, accuse une masse moyenne qui peut être variable selon les zones géographiques où il se trouve, allant de 145 à 180 kg pour les lions d\'Asie à plus de 225 kg pour les lions d\'Afrique. Certains spécimens très rares peuvent dépasser exceptionnellement 300 kg. Un mâle adulte se nourrit de 7 kg de viande chaque jour contre 5 kg chez la femelle. Le lion est un animal grégaire, c\'est-à-dire qu\'il vit en larges groupes familiaux, contrairement aux autres félins. Son espérance de vie, à l\'état sauvage, est comprise entre 7 et 12 ans pour le mâle et 14 à 20 ans pour la femelle, mais il dépasse fréquemment les 30 ans en captivité.', 'habitat/CfwdYOXDrcAoeNV3bzgIZzoidkLMG9spiHtnJqsA.jpg', '', '', '2024-09-17 07:31:24', '2024-09-17 07:31:24'),
(9, 'Maison Ours', 'L\'Ours brun peut vivre trente ans à l\'état sauvage et jusqu\'à quarante ans en captivité. L\'Ours brun a une fourrure dans les teintes blondes, brunes, noires, ou une combinaison de ces couleurs. Les Ours bruns ont une grande bosse de muscles au-dessus de leurs épaules qui donne la force aux membres antérieurs pour creuser. Leur tête est grande et ronde avec un profil facial concave. Debout, cet ours atteint une hauteur de 1,5 à 3,5 mètres. Malgré leur taille, ils peuvent courir à des vitesses allant jusqu’à 55 km/h. Pour la marche, l’Ours brun est digitigrade des pattes avant et plantigrade des pattes arrière. C’est-à-dire qu’il pose en premier les « doigts » puis le talon de ses pattes antérieures et qu’il pose toute la plante de ses pattes postérieures en même temps.', 'habitat/vhFLbinwKEGT9tAjyuCclOfWmeEESf0vzGBsZnvF.jpg', 'habitat/vspV5O3zkMaZQAXjcJSqW5sUYAMaKkTDqHTG7hl8.jpg', '', '2024-09-17 07:33:13', '2024-09-17 07:33:13'),
(10, 'Bergerie', 'La bergerie est le bâtiment, ou éventuellement l\'enclos réservé à l\'élevage des ovins. Des bergeries existent probablement depuis l\'apparition de l\'élevage du mouton. Elles n\'étaient parfois que de simples enclos, ou de solides bâtiments de pierre.\r\n\r\nLes moutons y sont protégés du mauvais temps, des nuits froides, de la saison hivernale (là où elle est rigoureuse), ou y passent simplement la nuit, dans les régions où des prédateurs peuvent chercher à tuer des moutons la nuit.\r\n\r\nC\'était aussi un moyen pour le propriétaire du troupeau de se protéger du vol des moutons par autrui.\r\n\r\nOn peut aussi y effectuer la traite, et produire du lait de brebis, yoghourt et fromage de lait de brebis.', 'habitat/GRSbwwk73VWSgTcttHGYsvKZ3MtFEi9DUKLGFjhR.jpg', '', '', '2024-09-17 07:34:32', '2024-09-17 07:34:32');

-- --------------------------------------------------------

--
-- Structure de la table `horaires`
--

CREATE TABLE `horaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `horaire1` varchar(255) DEFAULT NULL,
  `horaire2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `horaires`
--

INSERT INTO `horaires` (`id`, `horaire1`, `horaire2`, `created_at`, `updated_at`) VALUES
(5, 'Ouvert tous les jours de 09h30 à 20h00', 'Fermeture prévu pour travaux du 01/01/2025 au 31/01/2025', '2024-10-04 07:59:58', '2024-10-05 07:40:15');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_07_25_085640_create_habitats_table', 1),
(7, '2024_07_25_085711_create_animals_table', 1),
(8, '2024_07_25_085828_create_rapport_vetos_table', 1),
(9, '2024_07_25_090037_create_services_table', 1),
(10, '2024_07_29_084602_create_commentaires_table', 1),
(11, '2024_09_20_084442_create_nourriture_animauxes_table', 2),
(12, '2024_09_26_085828_create_rapport_vetos_table', 3),
(13, '2024_09_26_151905_create_nourritures_table', 3),
(14, '2024_09_26_152008_create_repas_animals_table', 4),
(15, '2024_09_26_151907_create_nourritures_table', 5),
(16, '2024_09_26_152009_create_repas_animals_table', 5),
(17, '2024_10_01_091743_animal_nourriture', 6),
(18, '2024_10_04_091928_create_horaires_table', 7);

-- --------------------------------------------------------

--
-- Structure de la table `nourritures`
--

CREATE TABLE `nourritures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aliment` varchar(255) NOT NULL,
  `animal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `nourritures`
--

INSERT INTO `nourritures` (`id`, `aliment`, `animal_id`, `created_at`, `updated_at`) VALUES
(1, 'Nourriture  poison clowns', 11, '2024-09-28 06:26:38', '2024-10-01 07:20:48'),
(2, 'Nourriture Lion', 12, '2024-09-28 06:26:53', '2024-09-28 06:26:53'),
(6, 'Nourriture pour Elephant', 13, '2024-09-28 07:58:42', '2024-09-28 07:58:42');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rapport_vetos`
--

CREATE TABLE `rapport_vetos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `detail` text DEFAULT NULL,
  `animal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rapport_vetos`
--

INSERT INTO `rapport_vetos` (`id`, `date`, `detail`, `animal_id`, `created_at`, `updated_at`) VALUES
(7, '2024-09-28', 'Gérard a mal a la gorge', 12, '2024-09-28 09:40:48', '2024-09-30 06:52:58');

-- --------------------------------------------------------

--
-- Structure de la table `repas_animals`
--

CREATE TABLE `repas_animals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantite` int(11) NOT NULL,
  `observation` text DEFAULT NULL,
  `date` date NOT NULL,
  `animal_id` bigint(20) UNSIGNED NOT NULL,
  `nourriture_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `repas_animals`
--

INSERT INTO `repas_animals` (`id`, `quantite`, `observation`, `date`, `animal_id`, `nourriture_id`, `created_at`, `updated_at`) VALUES
(2, 2000, 'ras', '2024-09-28', 12, 2, '2024-09-28 08:44:15', '2024-10-01 07:21:03'),
(3, 100, NULL, '2024-09-28', 11, 1, '2024-09-28 08:45:39', '2024-09-28 08:45:39'),
(4, 30000, 'Le docteur Daniel Jackson est rejeté par la communauté des autres égyptologues en raison de ses théories controversées sur la fonction des pyramides d\'Égypte qui seraient des lieux d\'atterrissage de vaisseaux spatiaux. Cependant, à la sortie d\'une conférence, il est recruté par Catherine Langford pour travailler sur un projet secret de l’armée américaine., une habitante de la planète.', '2024-11-05', 11, 6, '2024-11-05 15:36:32', '2024-11-05 15:36:32');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `nom`, `description`, `img1`, `img2`, `img3`, `created_at`, `updated_at`) VALUES
(5, 'O\'NNEILL', 'À l\'origine, Stargate, la porte des étoiles est un film réalisé par Roland Emmerich en 1994. À cette époque, seule une porte des étoiles extérieure est connue, celle d\'Abydos. En 1997, la MGM rachète les droits sur le film et tourne l\'épisode-pilote de la série télévisée Stargate SG-1, Enfants des dieux (Children of the Gods), où on découvre l\'existence de tout un réseau de portes des étoiles dans la galaxie. Des équipes d\'exploration composées, pour la plupart, de membres de l\'United States Air Force sont alors formées, leur principale mission étant de découvrir sur d\'autres mondes des technologies utiles à la défense de la Terre. Ils découvrent des civilisations étrangères (Asgard, Tok\'ra) dont certaines se montrent hostiles (Goa\'uld, Réplicateurs, Ori) et dont les technologies sont à différents stades d\'évolution.', 'Service/HBUf61dLIGgVfJv00fS5oF1pgC9uJZhe8zZ7muJK.webp', 'Service/RzvrLPz40A69kQwU9qmlQ10DCdJt3vOPP8SaspGa.webp', 'Service/7yXn6XJkr0CEZtvIVPdKDQh79UMRI54sENoVN0cm.jpg', '2024-09-09 07:12:02', '2024-09-09 07:12:02'),
(6, 'Carther', 'Contrairement à la plupart des films et séries de science-fiction basés sur l\'exploration de la galaxie, l\'action de Stargate ne se situe pas dans le futur mais à notre époque. Toutefois, l\'existence de la Porte des étoiles n\'est connue que d\'une infime partie de la population terrienne. L\'univers de la franchise commerciale continuera de s\'étendre avec l\'élargissement du cadre spatial dans les séries télévisées Stargate Atlantis qui se déroule dans une nouvelle galaxie et Stargate Universe dont l\'intrigue est centrée sur un groupe de terriens bloqué sur le Destinée, un vaisseau qui erre aux confins de l\'espace', 'Service/CejZd3tmhG4R7B78FRhMviycMFRDwtCk2wyJcxpi.jpg', 'Service/HN19352D3pyod7UuKsEBeg5V8s04CQOoiXtQt4x4.jpg', 'Service/VlPhxSXq0ereOiKVQQIOq37bJfDdF3eEAU4SHILf.jpg', '2024-09-09 07:12:34', '2024-09-09 07:12:34'),
(7, 'HAMMOND', 'Après l\'annulation de Stargate Universe, la franchise connut un coup d\'arrêt, mais le producteur Roland Emmerich annonça en septembre 2013 qu\'une nouvelle trilogie en lien avec le premier film allait voir le jour dans les années suivantes, avec un premier film prévu pour 2017. Ce projet fut annulé en 2016.\r\n\r\nÀ la fin de 2017, la MGM annonce la création du Stargate Command, une plateforme en ligne dédiée à la franchise, avec la possibilité de revoir les films et séries Stargate. Début 2018, la plateforme diffuse une création originale sous format Web-série, Stargate Origins, qui retrace les pas de la jeune Catherine Langford à la découverte du fonctionnement de la porte des étoiles. La plateforme est finalement fermée le 31 décembre 2019.', 'Service/UnVljZ2j8WMDC993GZ5Uma6Zo9nBd4jl0CeAlMFn.jpg', 'Service/O7Ik2NycVGRbmbydumX4lAYTzWkIvtFew2Kt00Mw.jpg', 'Service/UHjBLGXus5KtQiXFSxLT0WBwQN4hFNLOYAeXicoh.jpg', '2024-09-09 07:13:04', '2024-09-09 07:13:04');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `prenom`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'O\'nneil', 'Jack', 'jack@sg1.fr', NULL, '$2y$10$XuqINXyOt3/olIWBod5jGOpMjMDvviv172Hmpmbs8j3d7pP19PF.K', 'admin', NULL, '2024-09-30 07:35:23', '2024-11-05 15:23:36'),
(2, 'Carther', 'Sam', 'sam@sg1.fr', NULL, '$2y$10$wqDU8CPQKhM60ccT9eSbmuvWpJY7JotXQEt03h71nJtXSg0NMUdlm', 'veto', NULL, '2024-09-30 07:37:23', '2024-09-30 07:37:23'),
(3, 'Jackson', 'Daniel', 'daniel@sg1.fr', NULL, '$2y$10$gEDueaxUA/CIUkIXqoeSyeHh02awo0xqBmnhvCztVwgUBBNi6rvLS', 'employe', NULL, '2024-09-30 07:37:42', '2024-10-10 11:48:53');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animals_habitat_id_foreign` (`habitat_id`);

--
-- Index pour la table `animal_nourriture`
--
ALTER TABLE `animal_nourriture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animal_nourriture_animal_id_foreign` (`animal_id`),
  ADD KEY `animal_nourriture_nourriture_id_foreign` (`nourriture_id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `habitats`
--
ALTER TABLE `habitats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `horaires`
--
ALTER TABLE `horaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nourritures`
--
ALTER TABLE `nourritures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nourritures_animal_id_foreign` (`animal_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_user_id_foreign` (`user_id`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `rapport_vetos`
--
ALTER TABLE `rapport_vetos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rapport_vetos_animal_id_foreign` (`animal_id`);

--
-- Index pour la table `repas_animals`
--
ALTER TABLE `repas_animals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `repas_animals_animal_id_foreign` (`animal_id`),
  ADD KEY `repas_animals_nourriture_id_foreign` (`nourriture_id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `animal_nourriture`
--
ALTER TABLE `animal_nourriture`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `habitats`
--
ALTER TABLE `habitats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `horaires`
--
ALTER TABLE `horaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `nourritures`
--
ALTER TABLE `nourritures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rapport_vetos`
--
ALTER TABLE `rapport_vetos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `repas_animals`
--
ALTER TABLE `repas_animals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animals_habitat_id_foreign` FOREIGN KEY (`habitat_id`) REFERENCES `habitats` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `animal_nourriture`
--
ALTER TABLE `animal_nourriture`
  ADD CONSTRAINT `animal_nourriture_animal_id_foreign` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `animal_nourriture_nourriture_id_foreign` FOREIGN KEY (`nourriture_id`) REFERENCES `nourritures` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `nourritures`
--
ALTER TABLE `nourritures`
  ADD CONSTRAINT `nourritures_animal_id_foreign` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD CONSTRAINT `personal_access_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `rapport_vetos`
--
ALTER TABLE `rapport_vetos`
  ADD CONSTRAINT `rapport_vetos_animal_id_foreign` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `repas_animals`
--
ALTER TABLE `repas_animals`
  ADD CONSTRAINT `repas_animals_animal_id_foreign` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `repas_animals_nourriture_id_foreign` FOREIGN KEY (`nourriture_id`) REFERENCES `nourritures` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
