-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-04-2021 a las 01:17:23
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `Nombre de producto` varchar(11) NOT NULL,
  `Referencia` varchar(11) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Peso` int(11) NOT NULL,
  `Categoria` varchar(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Fecha de creacion` date NOT NULL,
  `Fecha de ultima venta` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Nombre de producto`, `Referencia`, `Precio`, `Peso`, `Categoria`, `Stock`, `Fecha de creacion`, `Fecha de ultima venta`) VALUES
(8, 'producto', '1', 2, 3333, '1', 2, '2021-04-06', '2021-04-21 18:08:00.000000'),
(9, 'producto', '1', 2, 3333, '1', 2, '2021-04-06', '2021-04-21 18:08:00.000000'),
(10, 'producto', '1', 2, 3333, '1', 2, '2021-04-06', '2021-04-21 18:08:00.000000'),
(11, 'producto', '1', 2, 3333, '1', 2, '2021-04-06', '2021-04-21 18:08:00.000000'),
(12, 'producto', '1', 2, 3333, '1', 2, '2021-04-06', '2021-04-21 18:08:00.000000'),
(13, 'producto', '1', 2, 3333, '1', 2, '2021-04-06', '2021-04-21 18:08:00.000000'),
(14, 'producto', '1', 2, 3333, '1', 2, '2021-04-06', '2021-04-21 18:08:00.000000'),
(15, 'producto', '1', 2, 3333, '1', 2, '2021-04-06', '2021-04-21 18:08:00.000000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
