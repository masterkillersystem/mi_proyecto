-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-08-2020 a las 22:39:13
-- Versión del servidor: 8.0.21-0ubuntu0.20.04.4
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_degir`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--

CREATE TABLE `distrito` (
  `id_distrito` int NOT NULL,
  `nom_distrito` varchar(50) DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `distrito`
--

INSERT INTO `distrito` (`id_distrito`, `nom_distrito`, `descripcion`, `estado`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, 'distrito 8', 'Territorio con Ploriferacion de Acopios', 1, NULL, NULL),
(2, 'distrito 12', 'Territorio Controlado Sin Novedad', 1, NULL, NULL),
(3, 'distrito 14', 'Zona de Alto Riesgo en Contagio', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` mediumint UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observaciones`
--

CREATE TABLE `observaciones` (
  `id_observaciones` int NOT NULL,
  `nom_observaciones` varchar(200) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `observaciones`
--

INSERT INTO `observaciones` (`id_observaciones`, `nom_observaciones`, `estado`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, 'Sub-Servicio: asistencia de recojo de acopio de basura', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `users_id` int UNSIGNED NOT NULL,
  `expedido_persona` enum('lp','bn','szc','or','chqq','cbba','trj','pn','pt') DEFAULT NULL,
  `ci_persona` int DEFAULT NULL,
  `nom_persona` varchar(100) DEFAULT NULL,
  `app_persona` varchar(150) DEFAULT NULL,
  `genero_persona` enum('masculino','femenino') DEFAULT NULL,
  `telefono1` int DEFAULT NULL,
  `telefono2` int DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`users_id`, `expedido_persona`, `ci_persona`, `nom_persona`, `app_persona`, `genero_persona`, `telefono1`, `telefono2`, `estado`, `fecha_creacion`, `fecha_modificacion`) VALUES
(2, 'lp', 848484, 'juan', 'flores', NULL, 8484878, NULL, 1, '2020-08-26', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamo`
--

CREATE TABLE `reclamo` (
  `id_reclamo` int NOT NULL,
  `latitud` varchar(20) DEFAULT NULL,
  `longitud` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `imagen` longblob,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `atendido` tinyint(1) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `distrito_id` int NOT NULL,
  `zona_id` int NOT NULL,
  `subobservacion_id` int NOT NULL,
  `persona_users_id` int UNSIGNED NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reclamo`
--

INSERT INTO `reclamo` (`id_reclamo`, `latitud`, `longitud`, `direccion`, `imagen`, `fecha`, `hora`, `atendido`, `estado`, `distrito_id`, `zona_id`, `subobservacion_id`, `persona_users_id`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, '-16.5117952', '-68.141056', 'av. 27 de mayo', NULL, '2020-08-11', '17:24:49', 1, 1, 2, 1, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subobservaciones`
--

CREATE TABLE `subobservaciones` (
  `id_subobs` int NOT NULL,
  `nom_subobservaciones` varchar(200) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `obs_id` int NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subobservaciones`
--

INSERT INTO `subobservaciones` (`id_subobs`, `nom_subobservaciones`, `estado`, `obs_id`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, 'limpieza y haceo urbano por modulo', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int UNSIGNED NOT NULL,
  `last_login` int UNSIGNED DEFAULT NULL,
  `active` tinyint UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$AFB2ryQayOxU85Y.Wm1cG.QdViDVKcQWf6EK93g8x7MpMa7qQBzX2', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1598425610, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', NULL, '$2y$10$imwV7.vQt.KI6Vwth/JJQ.RubOxrkx4.TJ2XiJ48S6ZXfHXFwm27m', 'reydi.reynaldo1@gmail.com', 'f1e20478b24d2cbf9e2d', '$2y$10$QBfGlyAMX62xq7jxOZhD6uVY13tWHoIziSjfeuDJmIGO7gFSvboR.', NULL, NULL, NULL, NULL, NULL, 1598418559, NULL, 0, 'junior', 'calamani', 'master', '7485521');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `group_id` mediumint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `id_zona` int NOT NULL,
  `nom_zona` varchar(150) DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`id_zona`, `nom_zona`, `descripcion`, `estado`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, 'zona 27 de mayo', 'zona roja en ruta', 1, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`id_distrito`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  ADD PRIMARY KEY (`id_observaciones`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`users_id`),
  ADD KEY `fk_persona_users1_idx` (`users_id`);

--
-- Indices de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD PRIMARY KEY (`id_reclamo`),
  ADD KEY `fk_reclamo_distrito_idx` (`distrito_id`),
  ADD KEY `fk_reclamo_zona1_idx` (`zona_id`),
  ADD KEY `fk_reclamo_subobservaciones1_idx` (`subobservacion_id`),
  ADD KEY `fk_reclamo_persona1_idx` (`persona_users_id`);

--
-- Indices de la tabla `subobservaciones`
--
ALTER TABLE `subobservaciones`
  ADD PRIMARY KEY (`id_subobs`),
  ADD KEY `fk_subobservaciones_observaciones1_idx` (`obs_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indices de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`id_zona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `distrito`
--
ALTER TABLE `distrito`
  MODIFY `id_distrito` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  MODIFY `id_observaciones` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `users_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  MODIFY `id_reclamo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `subobservaciones`
--
ALTER TABLE `subobservaciones`
  MODIFY `id_subobs` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `id_zona` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_persona_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD CONSTRAINT `fk_reclamo_distrito` FOREIGN KEY (`distrito_id`) REFERENCES `distrito` (`id_distrito`),
  ADD CONSTRAINT `fk_reclamo_persona1` FOREIGN KEY (`persona_users_id`) REFERENCES `persona` (`users_id`),
  ADD CONSTRAINT `fk_reclamo_subobservaciones1` FOREIGN KEY (`subobservacion_id`) REFERENCES `subobservaciones` (`id_subobs`),
  ADD CONSTRAINT `fk_reclamo_zona1` FOREIGN KEY (`zona_id`) REFERENCES `zona` (`id_zona`);

--
-- Filtros para la tabla `subobservaciones`
--
ALTER TABLE `subobservaciones`
  ADD CONSTRAINT `fk_subobservaciones_observaciones1` FOREIGN KEY (`obs_id`) REFERENCES `observaciones` (`id_observaciones`);

--
-- Filtros para la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
