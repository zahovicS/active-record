-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-10-2019 a las 01:12:35
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `dni` char(8) NOT NULL,
  `sexo` char(1) NOT NULL DEFAULT 'm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombres`, `apellidos`, `dni`, `sexo`) VALUES
(1, 'zahovic', 'saravia', '12345678', ''),
(2, 'zahovic', 'saravia', '12345678', ''),
(3, 'zahovic', 'saravia', '12345678', 'm'),
(4, 'zahovic', 'saravia', '12345678', 'm'),
(5, 'zahovic', 'saravia', '12345678', 'm'),
(6, 'zahovic', 'saravia', '12345678', 'm'),
(7, 'zahovic', 'saravia', '12345678', 'm'),
(8, 'zahovic', 'saravia', '12345678', 'm'),
(9, 'zahovic', 'saravia', '12345678', 'm'),
(10, 'zahovic', 'saravia', '12345678', 'm'),
(11, 'zahovic', 'saravia', '12345678', 'm'),
(12, 'maria', 'mercado', '123232', 'f'),
(13, 'hugo', 'huaeoto', '12323232', 'm'),
(14, 's', 's', 's', 'm'),
(15, '22', '22', '222', 'm'),
(16, 'w', 'w', 'w', 'm'),
(17, '4', '4', '44', 'm'),
(18, '4', '4', '44', 'm'),
(19, '22', '22', '222', 'm'),
(20, '222', '22', '222', 'm'),
(21, 'ss', 'ss', '2222', 'm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
