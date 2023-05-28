-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 28 mai 2023 à 15:58
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `artisan`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `telephone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, '3898442805', 'bauch.jerrold@example.org', 'uQ8wZCbQtJ', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(2, '7900000365', 'pschmitt@example.org', 'MxICc7TRQs', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(3, '7790049930', 'walter.vena@example.net', 'F97DpI1eYv', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(4, '6384042085', 'franecki.eloisa@example.org', 'jBrmRbtaXT', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(5, '1379802329', 'sankunding@example.net', '7qbuGZR1n4', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(6, '8797116919', 'kiarra22@example.net', 'PbpQTQ3jR5', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(7, '5709068161', 'ahackett@example.net', 'bu08SwQJkq', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(8, '6945676817', 'collier.tyrique@example.org', 'qmbtqcUGVB', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(9, '4177407393', 'jackeline.bradtke@example.com', 'YpKbzsHOHL', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(10, '7577727050', 'prohaska.dolly@example.com', '5N884GOd0t', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(11, '782666469', 'a@gmail.com', 'Message à envoyé', '2023-05-27 14:26:01', '2023-05-27 14:26:01'),
(12, '761388738', 'diop@gmail.com', 'DGFHJKJLKMLM qhgsns', '2023-05-28 13:47:50', '2023-05-28 13:47:50');

-- --------------------------------------------------------

--
-- Structure de la table `declarations`
--

CREATE TABLE `declarations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assurance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_police` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_complet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `declarations`
--

INSERT INTO `declarations` (`id`, `assurance`, `numero_police`, `nom_complet`, `email`, `contact1`, `contact2`, `lieu`, `date`, `details`, `created_at`, `updated_at`) VALUES
(1, 'l1CHFCUkh7', '7943954797', 'Hattie Spencer', 'mkonopelski@example.com', '0006202972', '1958080362', 'DQ45sj', '2023-05-27 14:11:22', 'mw4jD2IOAHePtg7ZkeifPaLK1', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(2, 'C4aUOen6tV', '8497166526', 'Prof. Mohamed O\'Connell MD', 'cleta33@example.com', '9246397476', '3858239973', 'YOwuDk', '2023-05-27 14:11:22', 'EtV3I4uqf5rC5Tfh6WfyoZD2U', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(3, 'gBRMlSux9E', '1432266893', 'Dr. Joaquin Schaefer II', 'funk.forrest@example.org', '2527692446', '3325218136', 'RtedTu', '2023-05-27 14:11:22', '8Whb0h9iHJe3vwHlS3VWi5TfD', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(4, '78gBqH0kzq', '5040891669', 'Arvid Trantow V', 'tillman.ocie@example.org', '3074865494', '7221027226', 'AMeIdu', '2023-05-27 14:11:22', 'p9nFUTTsPN1dFl3SbacB3Mp7a', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(5, 's5INfTqIBr', '8851916349', 'Drew Ratke', 'jaquan.skiles@example.net', '1689718460', '1855410446', 'Q0VzvA', '2023-05-27 14:11:22', 'Xeb1cfcL5Yr5NOKU7MTrRy2ko', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(6, 'XywjPGhfYs', '2455783567', 'Queenie Wilderman', 'lacy.mann@example.com', '9017261734', '8285548852', 'Kbn5Rx', '2023-05-27 14:11:22', 'DWlIseagDluxrHIqg7nK19X8M', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(7, 'jqkDQ3o2MX', '0735338431', 'Prof. Alberto Sawayn', 'keenan.bosco@example.org', '2652981153', '1940786180', 'jKjb8i', '2023-05-27 14:11:22', 'sg1secJHWJE6berdFzC4aKKm8', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(8, 'CePYPAw28W', '0353245675', 'Dr. Esther Yost', 'dschumm@example.net', '6253411004', '8203546450', 'WIWasr', '2023-05-27 14:11:22', 'dR8aap2FPIWfJAgEnhkVvny8X', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(9, '1wuESRjavN', '3037787639', 'Julius Champlin', 'britney.bahringer@example.org', '3863467431', '7145339238', '2mS3Jt', '2023-05-27 14:11:22', 'NrP07UKK6sPNS8A1FFnGXz0jF', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(10, 'g7xXcpKACV', '0799330998', 'Miss Paige Kunze I', 'mclaughlin.kamren@example.net', '2888631559', '1372230954', 'nSCbBe', '2023-05-27 14:11:22', 'x4gOpVYXQEwfn2082IpwZIesi', '2023-05-27 14:11:22', '2023-05-27 14:11:22'),
(11, 'Assurance1', '33 8212324', 'Aliou DIOP', 'diop@gmail.com', '761323456', '776544889', 'CONGO', '2023-05-10', 'zertyuijklzsbbs svgtgbjx', '2023-05-28 13:46:07', '2023-05-28 13:46:07');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_24_144241_create_contact', 1),
(6, '2023_05_25_110638_create_declarations_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_email_unique` (`email`);

--
-- Index pour la table `declarations`
--
ALTER TABLE `declarations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `declarations_email_unique` (`email`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `declarations`
--
ALTER TABLE `declarations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
