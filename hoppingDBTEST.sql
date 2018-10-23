-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-10-2018 a las 16:58:00
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `billingHistory`
--

CREATE TABLE `billingHistory` (
  `id_place` int(11) NOT NULL,
  `dateTransaction` varchar(10) NOT NULL,
  `amount` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `id_place` int(8) NOT NULL,
  `img_1` varchar(2000) NOT NULL,
  `img_2` varchar(2000) NOT NULL,
  `img_3` varchar(2000) NOT NULL,
  `img_4` varchar(2000) NOT NULL,
  `img_5` varchar(2000) NOT NULL,
  `img_6` varchar(2000) NOT NULL,
  `img_7` varchar(2000) NOT NULL,
  `img_8` varchar(2000) NOT NULL,
  `img_9` varchar(2000) NOT NULL,
  `img_0` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`id_place`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`, `img_7`, `img_8`, `img_9`, `img_0`) VALUES
(1, 'prod.jpg', 'prod.jpg', 'prod.jpg', 'prod.jpg', 'prod.jpg', 'prod.jpg', 'prod.jpg', 'prod.jpg', 'prod.jpg', 'bbback.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `places`
--

CREATE TABLE `places` (
  `profileimage` varchar(2000) NOT NULL,
  `placename` varchar(25) NOT NULL,
  `id_place` int(8) NOT NULL,
  `latitude` double NOT NULL DEFAULT '0',
  `longitude` double NOT NULL DEFAULT '0',
  `id_user` int(8) NOT NULL,
  `description` varchar(120) NOT NULL,
  `contactnumber` char(10) NOT NULL,
  `address` varchar(75) NOT NULL,
  `backgroundimage` varchar(2000) NOT NULL,
  `accountType` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `places`
--

INSERT INTO `places` (`profileimage`, `placename`, `id_place`, `latitude`, `longitude`, `id_user`, `description`, `contactnumber`, `address`, `backgroundimage`, `accountType`) VALUES
('32073930_1642161192500471_8027894600414789632_n.jpg', 'Privé', 1, 24.014409152644856, -104.68679219484329, 1, 'Antro mas popular de Durango', '0000000000', '', '', 'unsuscribed');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promos`
--

CREATE TABLE `promos` (
  `id_place` int(8) NOT NULL,
  `promomon` varchar(1000) NOT NULL,
  `promotue` varchar(1000) NOT NULL,
  `promowen` varchar(1000) NOT NULL,
  `promothu` varchar(1000) NOT NULL,
  `promofri` varchar(1000) NOT NULL,
  `promosat` varchar(1000) NOT NULL,
  `promosun` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `promos`
--

INSERT INTO `promos` (`id_place`, `promomon`, `promotue`, `promowen`, `promothu`, `promofri`, `promosat`, `promosun`) VALUES
(1, 'asdf', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temp_images_profiles`
--

CREATE TABLE `temp_images_profiles` (
  `id_place` int(11) NOT NULL,
  `profileimage` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `temp_images_profiles`
--

INSERT INTO `temp_images_profiles` (`id_place`, `profileimage`) VALUES
(1, '32073930_1642161192500471_8027894600414789632_n.jpg');

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
('test', '1234', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_place`);

--
-- Indices de la tabla `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id_place`),
  ADD UNIQUE KEY `index_id_place` (`id_place`),
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
