-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-03-2018 a las 21:59:57
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hoppingDBTEST`
--
CREATE DATABASE IF NOT EXISTS `hoppingDBTEST` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hoppingDBTEST`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `places`
--

CREATE TABLE `places` (
  `profileimage` varchar(25) CHARACTER SET utf8 NOT NULL,
  `placename` varchar(75) CHARACTER SET utf8 NOT NULL,
  `id_place` int(8) NOT NULL,
  `latitude` double NOT NULL DEFAULT '0',
  `longitude` double NOT NULL DEFAULT '0',
  `id_user` int(8) NOT NULL,
  `description` varchar(125) CHARACTER SET utf8 NOT NULL,
  `contactnumber` char(10) CHARACTER SET utf8 NOT NULL,
  `address` varchar(75) CHARACTER SET utf8 NOT NULL,
  `backgroundimage` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `places`
--

INSERT INTO `places` (`profileimage`, `placename`, `id_place`, `latitude`, `longitude`, `id_user`, `description`, `contactnumber`, `address`, `backgroundimage`) VALUES
('LocalHost.jpg', 'test place 01', 1, 24.024338803271803, -104.6702241897583, 1, 'test description 01', '0', 'test address', ''),
('lambo.jpg', 'test place 02', 2, 9999, 9999, 2, 'test description 02', '2', 'dos', ''),
('IMG_6303.png', 'test place 03', 3, 0, 0, 2, 'test description 03', '3', '3', ''),
('huracan.jpg', 'asdf', 11, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('LocalHost.jpg', 'asdf', 12, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('10445.jpeg', 'asdf', 13, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('huracan.jpg', 'asdf', 14, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('LocalHost.jpg', 'asdf', 15, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('10445.jpeg', 'asdf', 16, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('huracan.jpg', 'asdf', 17, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('LocalHost.jpg', 'asdf', 18, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('10445.jpeg', 'asdf', 19, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('huracan.jpg', 'asdf', 20, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('LocalHost.jpg', 'asdf', 21, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('10445.jpeg', 'asdf', 22, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('huracan.jpg', 'asdf', 23, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('LocalHost.jpg', 'asdf', 24, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('10445.jpeg', 'asdf', 25, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('huracan.jpg', 'asdf', 26, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('LocalHost.jpg', 'asdf', 27, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('10445.jpeg', 'asdf', 28, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('huracan.jpg', 'asdf', 29, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('LocalHost.jpg', 'asdf', 30, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('10445.jpeg', 'asdf', 31, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('LocalHost.jpg', 'asdf', 32, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('huracan.jpg', 'asdf', 33, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('LocalHost.jpg', 'asdf', 34, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('10445.jpeg', 'asdf', 35, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('LocalHost.jpg', 'asdf', 36, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('huracan.jpg', 'asdf', 37, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('LocalHost.jpg', 'asdf', 38, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('10445.jpeg', 'asdf', 39, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('LocalHost.jpg', 'asdf', 40, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('huracan.jpg', 'asdf', 41, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('LocalHost.jpg', 'asdf', 42, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('10445.jpeg', 'asdf', 43, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('LocalHost.jpg', 'asdf', 44, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('huracan.jpg', 'asdf', 45, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('LocalHost.jpg', 'asdf', 46, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('10445.jpeg', 'asdf', 47, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('LocalHost.jpg', 'asdf', 48, 0, 0, 1, 'asdf', 'asdf', 'asdf', ''),
('112126_0.jpg', 'ALGO', 49, 0, 0, 1, 'asdf', 'asdf', 'asdf', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promos`
--

CREATE TABLE `promos` (
  `id_place` int(8) NOT NULL,
  `promomon` varchar(250) CHARACTER SET utf8 NOT NULL,
  `promotue` varchar(250) CHARACTER SET utf8 NOT NULL,
  `promowen` varchar(250) CHARACTER SET utf8 NOT NULL,
  `promothu` varchar(250) CHARACTER SET utf8 NOT NULL,
  `promofri` varchar(250) CHARACTER SET utf8 NOT NULL,
  `promosat` varchar(250) CHARACTER SET utf8 NOT NULL,
  `promosun` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `promos`
--

INSERT INTO `promos` (`id_place`, `promomon`, `promotue`, `promowen`, `promothu`, `promofri`, `promosat`, `promosun`) VALUES
(2, 'promo lunes', 'promo martes', 'promo miercoles', 'promo jueves', 'promo virenes', 'promo sabado', 'promo domingo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temp_images_profiles`
--

CREATE TABLE `temp_images_profiles` (
  `id_place` int(11) NOT NULL,
  `profileimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`username`, `password`, `id_user`) VALUES
('test', '1234', 1),
('user2', '2222', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id_place`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `promos`
--
ALTER TABLE `promos`
  ADD UNIQUE KEY `id_user` (`id_place`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `places_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
