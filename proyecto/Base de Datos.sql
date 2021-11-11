-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2021 a las 16:47:57
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_autoscolombia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_automoviles`
--

CREATE TABLE `tb_automoviles` (
  `id` int(255) NOT NULL,
  `placa` varchar(5) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `documento` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_automoviles`
--

INSERT INTO `tb_automoviles` (`id`, `placa`, `tipo`, `documento`, `nombre`, `fecha`, `hora`) VALUES
(114, 'ekv71', 'carro', 98645082, 'juan', '2021-11-04', '09:32:00'),
(115, 'jprol', 'moto', 123124, 'juan', '2021-11-11', '01:00:00'),
(116, 'jprol', 'carro', 98645082, 'juan', '2021-11-11', '10:15:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(255) NOT NULL,
  `user` varchar(18) NOT NULL,
  `password` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `user`, `password`) VALUES
(36, '1020', '123'),
(52, '1020', '123'),
(53, 'jproldanpulgarin', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_automoviles`
--
ALTER TABLE `tb_automoviles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_automoviles`
--
ALTER TABLE `tb_automoviles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
