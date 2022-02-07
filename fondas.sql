-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2022 a las 02:36:47
-- Versión del servidor: 8.0.17
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fondas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `nombre_id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `calle` varchar(70) COLLATE utf16_spanish_ci NOT NULL,
  `numero_exterior` varchar(15) COLLATE utf16_spanish_ci NOT NULL,
  `numero_interior` varchar(15) COLLATE utf16_spanish_ci NOT NULL,
  `codigo_postal` varchar(10) COLLATE utf16_spanish_ci NOT NULL,
  `colonia` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `municipio` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `ciudad` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `estado` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `pais` varchar(50) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`nombre_id`, `nombre`, `calle`, `numero_exterior`, `numero_interior`, `codigo_postal`, `colonia`, `municipio`, `ciudad`, `estado`, `pais`) VALUES
(12, 'Huitzillin', 'La Morena', '225', '000', '0000', 'Valle Centro', 'Valle Centro', 'Valle Centro', 'RF', 'Mexico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nombre_id` int(11) NOT NULL,
  `nombre_plato` text CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  `descripcion` longtext COLLATE utf16_spanish_ci NOT NULL,
  `ingredientes` longtext CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  `precio` text CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `nombre_id`, `nombre_plato`, `descripcion`, `ingredientes`, `precio`, `fecha`) VALUES
(8, 11, 'porotos', 'hfhfghfghhhhhhhghyrtyrtyrtururujfgjfghjfghngfngf', 'sdfsdfsdf', 'fsdfsfdsf', '2022-02-07'),
(9, 12, 'Tortas Ahogadas', 'Carne y Aves', '1 kilo de jitomate, cebolla, 2 dientes de ajo, cucharada de comino, 1 cucharadita de orégano, 1 taza de frijoles refritos, 300 g de carnitas de cerdo, 4 bolillos, taza de agua, Aceite, Sal al gusto.', '$15000', '2022-02-07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`nombre_id`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre_id` (`nombre_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `nombre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
