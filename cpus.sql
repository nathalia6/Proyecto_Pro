-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2018 a las 21:08:09
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cpus`
--

CREATE TABLE `cpus` (
  `id` int(11) NOT NULL,
  `Codigo` varchar(50) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Serie` varchar(50) NOT NULL,
  `Producto` varchar(50) NOT NULL,
  `Ram` varchar(20) NOT NULL,
  `Discoduro` varchar(20) NOT NULL,
  `Sistema` varchar(20) NOT NULL,
  `Arquitectura` varchar(20) NOT NULL,
  `Procesador` varchar(50) NOT NULL,
  `Macadd` varchar(50) NOT NULL,
  `Departamento` varchar(100) NOT NULL,
  `Puesto` varchar(100) NOT NULL,
  `Personal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cpus`
--

INSERT INTO `cpus` (`id`, `Codigo`, `Marca`, `Serie`, `Producto`, `Ram`, `Discoduro`, `Sistema`, `Arquitectura`, `Procesador`, `Macadd`, `Departamento`, `Puesto`, `Personal`) VALUES
(1, 'CPU', 'Dell', '456982456', '7', '1G', '3TB', 'Windows 10 ', '64bits', 'core i7', '00000000001', 'Sistemas', 'Gerente', 'roro'),
(3, '789', 'del', 'sert45', '2345to', '1', '2', 'win7', '64bits', 'intel i7', 'chifo', 'contraloria', 'contador', 'miguel');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cpus`
--
ALTER TABLE `cpus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cpus`
--
ALTER TABLE `cpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
