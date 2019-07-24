-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2019 a las 05:03:03
-- Versión del servidor: 10.3.15-MariaDB
-- Versión de PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `observatorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data`
--

CREATE TABLE `data` (
  `id` int(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `precitaee` varchar(255) NOT NULL,
  `precpobt` varchar(255) NOT NULL,
  `precpeco` varchar(255) NOT NULL,
  `poblacion` int(255) NOT NULL,
  `pobemp` int(255) NOT NULL,
  `desemp` int(255) NOT NULL,
  `itaee` double NOT NULL,
  `varpt` double NOT NULL,
  `varpy` double NOT NULL,
  `crimen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `data`
--

INSERT INTO `data` (`id`, `estado`, `precitaee`, `precpobt`, `precpeco`, `poblacion`, `pobemp`, `desemp`, `itaee`, `varpt`, `varpy`, `crimen`) VALUES
(1, 'Aguascalientes', '2018/4', '2015', '2019/1', 1316032, 581661, 19222, 8.5385, 3.1, 8.6, 5),
(2, 'Baja California', '2018/4', '2015', '2019/1', 3348898, 1729489, 44637, 1.5117, 0.2, 1.5, 6),
(3, 'Baja California Sur', '2018/4', '2015', '2019/1', 718384, 431736, 15868, 8.8931, 3.8, 8.8, 3),
(4, 'Campeche', '2018/4', '2015', '2019/1', 902250, 429382, 14941, -0.962, -2.4, -1, 0),
(5, 'Coahuila de Zaragoza', '2018/4', '2015', '2019/1', 2961708, 1370895, 57858, -0.2799, -0.2, -0.3, 3),
(7, 'Morelos', '2018/4', '2015', '2019/1', 1912211, 868723, 15680, -4.02, -1.4, -4, 8),
(8, 'Nayarit', '2018/4', '2015', '2019/1', 1181050, 631415, 23021, 0.34, -0.4, 0.4, 0),
(9, 'Nuevo León', '2018/4', '2015', '2019/1', 5119594, 2502020, 83224, 4.18, 0.3, 4.2, 4),
(10, 'Oaxaca', '2018/4', '2015', '2019/1', 3967889, 1771068, 31752, 3.28, 0.9, 3.3, 0),
(11, 'Guanajuato', '2018/4', '2015', '2019/1', 5864777, 2590890, 102633, 1.33, 1, 1.4, 6),
(12, 'Guerrero', '2018/4', '2015', '2019/1', 3542204, 1500902, 27227, 1.56, 1.2, 1.7, 3),
(13, 'Hidalgo', '2018/4', '2015', '2019/1', 2862970, 1312824, 32005, 0.34, -0.9, 0.5, 3),
(14, 'Jalisco', '2018/4', '2015', '2019/1', 7880539, 3858599, 101159, 3.58, 1.6, 3.5, 5),
(15, 'Mexico', '2018/4', '2015', '2019/1', 16225409, 7897293, 338562, -1.06, 0.3, -1.1, 5),
(16, 'Sonora', '2018/4', '2015', '2019/1', 2874391, 1455698, 61031, 1.526, 0.8, 6.8, 3),
(17, 'Tabasco', '2018/4', '2015', '2019/1', 2400967, 1013759, 76778, -10.6423, 66.6, 1.1, 7),
(18, 'Tamaulipas', '2018/4', '2015', '2019/1', 3453525, 1703036, 62058, 2.9231, 4.8, 16.4, 1),
(19, 'Tlaxcala', '2018/4', '2015', '2019/1', 1274227, 608794, 23037, -4.0032, -0.1, -4.2, 2),
(20, 'Veracruz de Ignacio de la Llave', '2018/4', '2015', '2019/1', 8127832, 3361629, 96375, 3.2024, -1.6, 3.3, 3),
(21, 'Yucatan', '2018/4', '2015', '2019/1', 2102259, 1094188, 20561, 3.2714, -0.6, 3.6, 2),
(22, 'Zacatecas', '2018/4', '2015', '2019/1', 1581575, 644409, 20315, -1.7188, -1.5, -1.7, 5),
(23, 'Puebla', '2018/4', '2015', '2019/1', 6183320, 2883130, 70286, -0.0067, -0.4, 1.2, 3),
(24, 'Querétaro', '2018/4', '2015', '2019/1', 2043851, 2883130, 23111, 1.3848, -0.3, 1.4, 5),
(25, 'Quintana Roo', '2018/4', '2015', '2019/1', 1505785, 890199, 25770, 3.4543, 0.4, 3.7, 7),
(26, 'San Luis Potosí', '2018/4', '2015', '2019/1', 2723772, 1214523, 25907, 0.0451, -1.7, 0.1, 0),
(27, 'Colima', '2018/4', '2015', '2019/1', 715095, 392758, 15240, -2, -1.2, -2, 7),
(28, 'Chihuahua', '2018/4', '2015', '2019/1', 3569479, 1695772, 51193, 2.4, 1, 2.4, 6),
(29, 'Chiapas', '2018/4', '2015', '2019/1', 5228711, 1991309, 62734, -1.4, -3.8, -1.2, 0),
(30, 'CDMX', '2018/4', '2015', '2019/1', 8985339, 4457852, 211146, 3.7, 0.7, 3.6, 5),
(31, 'Durango', '2018/4', '2015', '2019/1', 1759848, 805875, 37299, 1.6, -0.9, 1.8, 1),
(38, 'Michoacan', '2018/4', '2015', '2019/1', 4599104, 2082622, 47741, -1.6053, 1.8, -1.7, 4),
(39, 'Sinaloa', '2018/4', '2015', '2019/1', 2977104, 1396279, 47834, 4.826, 3.5, 4.8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'unipoli', 'unipoli');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `data`
--
ALTER TABLE `data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
