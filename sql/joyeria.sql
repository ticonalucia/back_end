-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2024 a las 22:18:26
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `joyeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `joya`
--

CREATE TABLE `joya` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `material` varchar(100) NOT NULL,
  `peso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `joya`
--

INSERT INTO `joya` (`id`, `nombre`, `tipo`, `material`, `peso`) VALUES
(11, 'evo', 'medalla', 'plata', '15ss'),
(13, 'collar', 'collar', 'oro', '18kilates'),
(14, 'manilla', 'pulsera', 'plata', '14gramos'),
(15, 'lucia', 'gvfdegv', 'ttty', '15jj'),
(16, 'aretes', 'colgante', 'acero', '17gramos'),
(17, 'fdgf', 'dgfg', 'dgg', '11kl'),
(18, 'anillo', 'circulo', 'plata', '78gs'),
(19, 'gfg', 'dfd', 'gfgd', '55hh'),
(21, 'pulsera', 'manilla', 'oro', '10g');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `joya`
--
ALTER TABLE `joya`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `joya`
--
ALTER TABLE `joya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
