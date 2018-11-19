-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2018 a las 07:02:45
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
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(25) NOT NULL,
  `user` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `pass` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `user`, `pass`, `email`) VALUES
(1, 'admin', 'admin', 'sistemas.nojrc@nowresorts.com'),
(2, 'brian', '12345678', 'bwrc98@gmail.com'),
(3, 'bryam', 'gaucho', 'gaucho@.com');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
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
  `Departamento` text NOT NULL,
  `Puesto` text NOT NULL,
  `Personal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `Codigo`, `Marca`, `Serie`, `Producto`, `Ram`, `Discoduro`, `Sistema`, `Arquitectura`, `Procesador`, `Macadd`, `Departamento`, `Puesto`, `Personal`) VALUES
(1, '00000000001', 'Hp', '458647532', '4587', '16GB', '1TB', 'GNU Debian 9', '64bits', 'AMD10', '3e4r5t5', 'Mantenimiento', 'Asistente', 'Brian'),
(2, '00000000002', 'Dell', '4589647875', '48er784r', '8GB', '1TB', 'Window 7 Pro', '64 bits', 'Intel Core i7', '34:er:45:rt:6y', 'Sistemas', 'Asistente', 'Bryam'),
(3, '00000000003', 'Lenovo', '478644658', '4775377#455', '2GB', '1TB', 'Windows 7 pro', '32Bits', '3tuy', 'uyruy', 'Contraloria', 'rur', 'rur'),
(4, '00000000004', 'Begq', '478644658', '4775377#455', '2GB', '1TB', 'Windows 7 pro', '32Bits', '3tuy', 'uyruy', 'AyB', 'rur', 'rur'),
(5, '00000000005', 'render', '8455245', '53544555j5&', '2gb', '2bg', 'debian', '64', '64Bits', 'reb', 'chifo', 'roko', 'gui'),
(6, '00000000006', 'Toste', '4655r15345', '64556', '6526', '26w', 'wwfrr46', 'lkhiup', 'gi', 'gii', 'gpgikg', 'giÃ±gi', 'giÃ±'),
(7, '00000000007', 'hffyF', 'utufu', 'iyflifyf', 'ifiyl', 'iyfiy', 'fyiliyf', 'fÃ±ffyiÃ±', 'fiyÃ±fiÃ±f', 'fiÃ±fy', 'fiÃ±if', 'ifiÃ±fify', 'iyiÃ±ify'),
(8, '00000000008', 'iyfiÃ±i', 'fiylfiy', 'ffyi', 'iÃ±yify', 'ifiyÃ±f', 'iÃ±fiyÃ±', 'fiyÃ±fyif', 'iyfiyÃ±fi', 'fyiÃ±iyiyf', 'fyÃ±fiyf', 'yfiyÃ±y', 'fiÃ±ff'),
(9, '123456710', 'iyfiy', 'fylf', 'fyfyyflf', 'lufyylu', 'fluyfyluy', 'fluflu', 'lyufylufy', 'flyflyy', 'flfy', 'lflfyuyff', 'lyffyuyuflufy', 'yflufyo'),
(10, '123456789', 'yey', 'TUUTLF', 'uyio', 'red', 'rio', 'fer', 'riv', 'rol', 'yon', 'tam', 'tate', 'tito'),
(11, '000000000011', 'uttk', 'tydyktd', 'tkdttk', 'dtykdd', 'ktddttyk', 'ktkdtydty', 'dtkdtdttyk', 'tdttkykdt', 'dtyddkty', 'dtkdt', 'dkdtdky', 'kd'),
(13, '00000000012', 'Mac', '3f13551555', '1x65e1e51', '15exe15', 'vhulyULFU', 'ulfyflfy', 'fiÃ±fiyl', 'Ã±fyiÃ±fifyÃ±', 'yifÃ±yfyÃ±yf', 'fiÃ±iyyfi', 'uvyuvvor', 'rtruvyrvuvi'),
(14, '4654654', '4654654', '464654', '56465465', '465465', '456465', '4654654', '4564654', '4564654', '54465465', '4564654', '4654654', '465465'),
(15, '00000000015', 'jhxlleulg', 'dtdty', 'dtykdt', 'dtkd', 'dkt', 'dktd', 'kdtk', 'kdtkdty', 'dtkt', 'dthk', 'dkkd', 'dkd'),
(16, '00000000016', 'Dell', '1g34g244', 'swe3458|', '2gb', '1tb', 'windows 7 pro', '32bits', 'intel core i7  2.30Ghz', 'we:43:w4:3e:45:56', 'Sistemas', 'Gerente de sistemas', 'Salvador Avalos'),
(17, '123', 'dell', 'se34', 'serty', '4', '4', 'cenOs', '64bits', 'amd', '45ty:rt:', 'sitesmas', 'gerente', 'gilberto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impresoras`
--

CREATE TABLE `impresoras` (
  `id` int(11) NOT NULL,
  `Codigo` varchar(50) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Modelo` varchar(50) NOT NULL,
  `Serie` varchar(50) NOT NULL,
  `Producto` varchar(50) NOT NULL,
  `DireccionIP` varchar(150) NOT NULL,
  `Departamento` varchar(30) NOT NULL,
  `Puesto` varchar(50) NOT NULL,
  `Personal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `impresoras`
--

INSERT INTO `impresoras` (`id`, `Codigo`, `Marca`, `Modelo`, `Serie`, `Producto`, `DireccionIP`, `Departamento`, `Puesto`, `Personal`) VALUES
(1, 'IMPRESORA', 'Charpp', 'M204045', '12589467545', '48754', 'Consierge1', '10.155.114.182', '00000000001', 'renato'),
(2, 'IMPRESORA', 'Kiosera', 'ec45', '1589764852', '47896', 'Contraloria9', '10.155.114.19', '00000000002', 'reina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitores`
--

CREATE TABLE `monitores` (
  `id` int(11) NOT NULL,
  `Codigo` varchar(50) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Modelo` varchar(50) NOT NULL,
  `Serie` varchar(50) NOT NULL,
  `Producto` varchar(50) NOT NULL,
  `Departamento` varchar(150) NOT NULL,
  `Puesto` varchar(50) NOT NULL,
  `Personal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `monitores`
--

INSERT INTO `monitores` (`id`, `Codigo`, `Marca`, `Modelo`, `Serie`, `Producto`, `Departamento`, `Puesto`, `Personal`) VALUES
(1, 'MONITOR', 'lenovo', '48724154', 'inspiron', 'Sistemas', '00000000001', 'gerente', 'ricardo'),
(2, '4567', 'dell', '1234567', '123e345', 'e34r5', 'sistemas', 'practicante', 'Brian');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cpus`
--
ALTER TABLE `cpus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `impresoras`
--
ALTER TABLE `impresoras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `monitores`
--
ALTER TABLE `monitores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cpus`
--
ALTER TABLE `cpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `impresoras`
--
ALTER TABLE `impresoras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `monitores`
--
ALTER TABLE `monitores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
