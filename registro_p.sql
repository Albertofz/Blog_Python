-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2022 a las 06:18:29
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_p`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(10) NOT NULL,
  `nombre_apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contraseña` varchar(150) NOT NULL,
  `fecha_registro` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre_apellido`, `email`, `contraseña`, `fecha_registro`) VALUES
(1, 'Alberto Fernandez', 'albertofernandez493@ujgh.edu.ve', '772fd2c8f51176479e4fdbf4269cabf2d7a9fc57f5bd5f20ce8eabd4d2bbae79', '05/04/22'),
(2, 'Alberto Fernandez', 'albertofernandez493@ujgh.edu.ve', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '05/04/22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos`
--

CREATE TABLE `puntos` (
  `id` int(20) NOT NULL,
  `user` varchar(50) NOT NULL,
  `puntos_usuario` varchar(50) NOT NULL,
  `fecha_reg` varchar(50) NOT NULL,
  `hora_reg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `puntos`
--

INSERT INTO `puntos` (`id`, `user`, `puntos_usuario`, `fecha_reg`, `hora_reg`) VALUES
(1, 'Alberto Fernandez', '12', '05/04/22', '12:17:46 am');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puntos`
--
ALTER TABLE `puntos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `puntos`
--
ALTER TABLE `puntos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
