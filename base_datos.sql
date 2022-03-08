-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 04:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_datos`
--

-- --------------------------------------------------------

--
-- Table structure for table `columnas`
--

CREATE TABLE `columnas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_columnas` enum('estrategias','herramientas') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entidads`
--

CREATE TABLE `entidads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `columnas_id` bigint(20) UNSIGNED NOT NULL,
  `estrategias_id` bigint(20) UNSIGNED NOT NULL,
  `herramientas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `estrategias`
--

CREATE TABLE `estrategias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_estra` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estra_apren_interactivo` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estra_apren_colabo` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estra_autoapren` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estra_didactica` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compete_evaluar` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estra_evaluacion` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valoracion_estra` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `estrategias`
--

INSERT INTO `estrategias` (`id`, `nom_estra`, `estra_apren_interactivo`, `estra_apren_colabo`, `estra_autoapren`, `estra_didactica`, `compete_evaluar`, `estra_evaluacion`, `valoracion_estra`, `created_at`, `updated_at`) VALUES
(1, 'Elaboracion de ensayos', 'Analisis de imagenes', 'Aprendizaje basado en proyectos', 'Indagacion y analisis de informacion', 'Trabajo por proyectos', 'Cognitivo', 'Ensayo', 6, '2021-11-23 05:25:55', '2021-11-23 05:25:55'),
(2, 'Estrategia de aprendizaje interactivo', 'Clase Magistral', 'Aprendizaje basado en proyectos', 'Indagacion y analisis de informacion', 'Clase invertida (Flipped - Clasroom)', 'Procedimental', 'Articulo', 6, '2021-12-13 06:19:04', '2021-12-13 06:19:04'),
(3, 'Estrategia de aprendizaje interactivo', 'Analisis de videos', 'Analisis y discusion grupal', 'Indagacion y analisis de informacion', 'Trabajo por proyectos', 'Procedimental', 'Proyecto', 4, '2022-02-07 01:09:20', '2022-02-07 01:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `herramientas`
--

CREATE TABLE `herramientas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_herra` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_licencia` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `funciones` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interaccion` int(11) NOT NULL,
  `diseño` int(11) NOT NULL,
  `usabilidad` int(11) NOT NULL,
  `documentacion` int(11) NOT NULL,
  `actualizaciones` int(11) NOT NULL,
  `porcentaje_aprove` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `porcentaje_aproba` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `herramientas`
--

INSERT INTO `herramientas` (`id`, `nom_herra`, `tipo_licencia`, `funciones`, `interaccion`, `diseño`, `usabilidad`, `documentacion`, `actualizaciones`, `porcentaje_aprove`, `porcentaje_aproba`, `created_at`, `updated_at`) VALUES
(1, 'Equipos de Microsoft', 'Gratis', 'Encuestas', 3, 3, 3, 3, 3, '3', '3', '2021-12-13 07:21:10', '2022-02-08 18:46:17'),
(2, 'Microsoft Outlook', 'Hibrida', 'Video', 2, 2, 2, 4, 4, '8', '5', '2021-12-13 07:32:08', '2021-12-13 07:32:08'),
(5, 'Microsoft PowerPoint', 'Propietaria', 'Video', 2, 3, 3, 3, 2, '4', '3', '2022-02-07 01:09:57', '2022-02-07 01:09:57'),
(6, 'Microsoft PowerPoint', 'Propietaria', 'Audio', 5, 5, 5, 5, 5, '5', '5', '2022-02-08 18:47:37', '2022-02-08 18:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `institucion`
--

CREATE TABLE `institucion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institucion`
--

INSERT INTO `institucion` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Fundación Universitaria Juan de Castellanos (JDC)', NULL, NULL),
(2, 'Instituto Tecnológico Superior del Oriente del Estado de Hidalgo (ITESA)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(107, '2014_10_12_569854_create_users_table', 1),
(108, '2014_10_12_985632_create_password_resets_table', 1),
(109, '2014_9_11_045644_create_institucion_table', 1),
(110, '2014_9_11_061316_create_program_table', 1),
(111, '2021_09_18_152425_add_keys_users', 1),
(112, '2021_09_20_005918_create_herramientas_table', 1),
(113, '2021_09_20_010103_create_estrategias_table', 1),
(114, '2021_10_03_235906_create_permission_tables', 1),
(115, '2021_11_22_013810_create_columnas_table', 2),
(116, '2021_11_22_014705_create_entidads_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'listar admins', 'web', '2021-11-21 21:00:11', '2021-11-21 21:00:11'),
(2, 'add', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institucion_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `nombre`, `institucion_id`, `created_at`, `updated_at`) VALUES
(1, 'Administración Turística y Hotelera (JDC)', 1, NULL, NULL),
(2, 'Ingeniería en Sistemas Computacionales (ITESA)', 2, NULL, NULL),
(3, 'Artes Visuales (JDC)', 1, NULL, NULL),
(4, 'Ingeniería en Industrias Alimentarias (ITESA)', 2, NULL, NULL),
(5, 'Ciencias del Deporte y de la Actividad Física (JDC)', 1, NULL, NULL),
(6, 'Ciencias Políticas y Relaciones Internacionales (JDC)', 1, NULL, NULL),
(7, 'Contaduría Publica (JDC)', 1, NULL, NULL),
(8, 'Derecho (JDC)', 1, NULL, NULL),
(9, 'Ingeniería Ambiental (JDC)', 1, NULL, NULL),
(10, 'Ingeniería Civil (JDC)', 1, NULL, NULL),
(11, 'Ingeniería Electrónica (JDC)', 1, NULL, NULL),
(12, 'Ingeniería Industrial (JDC)', 1, NULL, NULL),
(13, 'Ingeniería de Sistemas (JDC)', 1, NULL, NULL),
(14, 'Licenciatura en Educación Física, Recreación y Deportes (JDC)', 1, NULL, NULL),
(15, 'Matemáticas (JDC)', 1, NULL, NULL),
(16, 'Ingeniería Electromecánica (ITESA)', 2, NULL, NULL),
(17, 'Ingeniería en Logística (ITESA)', 2, NULL, NULL),
(18, 'Ingeniería Civil (ITESA)', 2, NULL, NULL),
(19, 'Ingeniería Mecatrónica (ITESA)', 2, NULL, NULL),
(20, 'Ingeniería en Gestión Empresarial (ITESA)', 2, NULL, NULL),
(21, 'Ingeniería en Sistemas Automotrices (ITESA)', 2, NULL, NULL),
(22, 'Licenciatura en Administración (ITESA)', 2, NULL, NULL),
(23, 'Licenciatura en Turismo (ITESA)', 2, NULL, NULL),
(24, 'Maestría en Sistemas Computacionales (ITESA)', 2, NULL, NULL),
(25, 'Maestría en Ciencias en Alimentos (ITESA)', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-11-21 21:00:11', '2021-11-21 21:00:11'),
(2, 'docente', 'web', '2021-11-21 21:00:11', '2021-11-21 21:00:11');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `institucion` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programa` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asignatura` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_estudiante` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_m` int(11) DEFAULT NULL,
  `num_h` int(11) DEFAULT NULL,
  `semestre` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modalidad` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pais` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `edad`, `institucion`, `programa`, `asignatura`, `num_estudiante`, `num_m`, `num_h`, `semestre`, `modalidad`, `tipo`, `pais`, `ciudad`, `region`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin rojas', 'admin@test.com', '2021-11-21 21:00:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gBYbgQpXtboHjbbYuvCdArnlWpGExOK2z338nEaE2mOJX2MP1MjNR3Tk9jE5', '2021-11-21 21:00:11', '2021-11-21 21:00:11'),
(2, 'docente rojas', 'docente@test.com', '2021-11-21 21:00:11', 21, '1', '1', 'Turismo 1', NULL, 21, 11, 'VI', 'A distancia', NULL, NULL, NULL, NULL, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zJ8umz24FnvmiSemtOh1AmCjAQwWTJXkjfS6s8McypU2jM73A4r2ZtQh58gH', '2021-11-21 21:00:11', '2021-12-11 02:57:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `columnas`
--
ALTER TABLE `columnas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entidads`
--
ALTER TABLE `entidads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entidads_columnas_id_foreign` (`columnas_id`),
  ADD KEY `entidads_estrategias_id_foreign` (`estrategias_id`),
  ADD KEY `entidads_herramientas_id_foreign` (`herramientas_id`);

--
-- Indexes for table `estrategias`
--
ALTER TABLE `estrategias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herramientas`
--
ALTER TABLE `herramientas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_institucion_id_foreign` (`institucion_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `columnas`
--
ALTER TABLE `columnas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `entidads`
--
ALTER TABLE `entidads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estrategias`
--
ALTER TABLE `estrategias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `herramientas`
--
ALTER TABLE `herramientas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entidads`
--
ALTER TABLE `entidads`
  ADD CONSTRAINT `entidads_columnas_id_foreign` FOREIGN KEY (`columnas_id`) REFERENCES `columnas` (`id`),
  ADD CONSTRAINT `entidads_estrategias_id_foreign` FOREIGN KEY (`estrategias_id`) REFERENCES `estrategias` (`id`),
  ADD CONSTRAINT `entidads_herramientas_id_foreign` FOREIGN KEY (`herramientas_id`) REFERENCES `herramientas` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_institucion_id_foreign` FOREIGN KEY (`institucion_id`) REFERENCES `institucion` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
