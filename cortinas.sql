-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2021 a las 16:11:00
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cortinas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cortinas`
--

CREATE TABLE `cortinas` (
  `id` int(255) NOT NULL,
  `tipo_de_cortina` varchar(1000) NOT NULL,
  `valor` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cortinas`
--

INSERT INTO `cortinas` (`id`, `tipo_de_cortina`, `valor`) VALUES
(2, 'blackout', 3001),
(3, 'sunscreen', 3500),
(4, 'rustica', 3900),
(5, 'roller', 6200),
(6, 'dual_eclipse', 7000),
(7, 'bandas_verticales1', 5500);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cortinas`
--
ALTER TABLE `cortinas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cortinas`
--
ALTER TABLE `cortinas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
