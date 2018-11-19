-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2018 a las 21:08:21
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
