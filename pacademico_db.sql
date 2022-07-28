-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2021 a las 07:23:15
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pacademico_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observaciones`
--

CREATE TABLE `observaciones` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Curso` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Identi` bigint(20) DEFAULT NULL,
  `Observacion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Accion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `observaciones`
--

INSERT INTO `observaciones` (`id`, `Nombre`, `Curso`, `Identi`, `Observacion`, `Accion`, `Fecha`) VALUES
(4, 'Pepito Perez', '10°2', 1153707440, 'El estudiante no trajo su cuaderno, ni materiales para el estudio', 'Darle unas palmaditas', '0000-00-00'),
(5, 'Pepito Perez', '10°2', 1153707440, 'Esta constantemente interrumpiendo la clase, y no trajo su material de estudio', 'Amonestación escrita', '2021-08-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `TipoU` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` bigint(100) NOT NULL,
  `Genero` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `TipoDoc` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Doc` bigint(100) NOT NULL,
  `Email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `TipoU`, `Nombre`, `Apellidos`, `Telefono`, `Genero`, `TipoDoc`, `Doc`, `Email`, `Clave`, `Estado`) VALUES
(1, 'Estudiante', 'Alexandra', 'Cubillos Brand', 3217892044, 'mujer', 'cc', 1000782639, 'alexabrand8@gmail.com', 'Mateo1814', 'Activo'),
(2, 'AdminAcademico', 'Mateo', 'López Muñoz', 3042333522, 'hombre', 'cc', 1025881562, 'mmateo1804@gmail.com', 'm1a8t0e4o', 'Activo'),
(3, 'Estudiante', 'Panchito', 'Muñoz Brand', 3042333521, 'hombre', 'Tid', 1025881563, 'panchito@gmail.com', 'panchito1804', 'Inactivo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`Doc`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
