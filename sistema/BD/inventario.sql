-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2019 a las 23:22:40
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `carrito_venta`
--

CREATE TABLE `carrito_venta` (
  `id` int(11) NOT NULL,
  `fk_producto` int(11) NOT NULL,
  `can_productos` varchar(45) NOT NULL,
  `fk_ventas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrito_venta`
--

INSERT INTO `carrito_venta` (`id`, `fk_producto`, `can_productos`, `fk_ventas`) VALUES
(1, 443, '2', 1),
(2, 455, '9', 2),
(3, 456, '3', 3),
(4, 443, '4', 4),
(5, 457, '1', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `nombre_usuario` varchar(255) NOT NULL,
  `usuario` varchar(455) NOT NULL,
  `password` varchar(455) NOT NULL,
  `cargo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_login`, `nombre_usuario`, `usuario`, `password`, `cargo`) VALUES
(7, 'boutique servi-cel', 'servicel', 'b8500a49901e3462b6df665e55edf3aa', '1'),
(8, 'luis', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `descripcion` text NOT NULL,
  `precio_salida` varchar(45) NOT NULL,
  `existencia` varchar(45) NOT NULL,
  `minima` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `tipo`, `modelo`, `descripcion`, `precio_salida`, `existencia`, `minima`, `estado`) VALUES
(1, 'CLIP', 'Lanix L910', 'USO RUDO', '130', '5', 2, 1),
(2, 'CLIP', 'Lanix Alpha 950', 'USO RUDO', '130', '1', 1, 1),
(3, 'CLIP', 'Lanix X710', 'USO RUDO', '130', '2', 1, 1),
(4, 'CLIP', 'Lanix X520', 'USO RUDO', '130', '1', 1, 1),
(5, 'CLIP', 'Lanix X512', 'USO RUDO', '130', '1', 1, 1),
(6, 'CLIP', 'Lanix X510', 'USO RUDO', '130', '2', 1, 1),
(7, 'CLIP', 'Lanix X500', 'USO RUDO', '130', '2', 1, 1),
(8, 'CLIP', 'Lanix LT500', 'USO RUDO', '130', '1', 1, 1),
(9, 'CLIP', 'Lanix X110', 'USO RUDO', '130', '2', 1, 1),
(10, 'CLIP', 'Lanix X210', 'USO RUDO', '130', '1', 1, 1),
(11, 'CLIP', 'Moto G6 PLUS', 'USO RUDO', '130', '2', 1, 1),
(12, 'CLIP', 'Moto G', 'USO RUDO', '130', '2', 1, 1),
(13, 'CLIP', 'Moto G2', 'USO RUDO', '130', '4', 1, 1),
(14, 'CLIP', 'Moto G3', 'USO RUDO', '130', '2', 1, 1),
(15, 'CLIP', 'Moto G5 PLUS', 'USO RUDO', '130', '6', 2, 1),
(16, 'CLIP', 'Moto G4 PLUS', 'USO RUDO', '130', '7', 2, 1),
(17, 'CLIP', 'Moto G4', 'USO RUDO', '130', '4', 2, 1),
(18, 'CLIP', 'Moto G4 PLAY', 'USO RUDO', '130', '2', 1, 1),
(19, 'CLIP', 'Moto E2', 'USO RUDO', '130', '1', 1, 1),
(20, 'CLIP', 'Moto E4', 'USO RUDO', '130', '2', 1, 1),
(21, 'CLIP', 'Moto C', 'USO RUDO', '130', '2', 1, 1),
(22, 'CLIP', 'Moto E4 PLUS', 'USO RUDO/Camuflaje', '150', '5', 2, 1),
(23, 'CLIP', 'Moto X PLAY', 'USO RUDO', '130', '1', 1, 1),
(24, 'CLIP', 'Moto Z2 PLAY', 'USO RUDO', '130', '1', 1, 1),
(25, 'CLIP', 'Moto X4', 'USO RUDO', '130', '8', 2, 1),
(26, 'CLIP', 'Sony XA', 'USO RUDO', '130', '4', 2, 1),
(27, 'CLIP', 'Sony XA ULTRA', 'USO RUDO', '130', '1', 1, 1),
(28, 'CLIP', 'Sony T2 ULTRA', 'USO RUDO', '130', '1', 1, 1),
(29, 'CLIP', 'Sony T3', 'USO RUDO', '130', '2', 1, 1),
(30, 'CLIP', 'Sony E5', 'USO RUDO', '130', '4', 2, 1),
(31, 'CLIP', 'Sony Z2', 'USO RUDO', '130', '1', 1, 1),
(32, 'CLIP', 'Sony M2 Aqua', 'USO RUDO', '130', '7', 2, 1),
(33, 'CLIP', 'Sony M4 Aqua', 'USO RUDO', '130', '1', 1, 1),
(34, 'CLIP', 'Sony C5', 'USO RUDO', '130', '5', 1, 1),
(35, 'CLIP', 'Sony C4', 'USO RUDO', '130', '7', 2, 1),
(36, 'CLIP', 'HTC U11', 'USO RUDO', '130', '1', 1, 1),
(37, 'CLIP', 'HTC DESIRE 625', 'USO RUDO', '130', '1', 1, 1),
(38, 'CLIP', 'HTC DESIRE 626', 'USO RUDO', '130', '7', 2, 1),
(39, 'CLIP', 'HTC DESIRE 650', 'USO RUDO', '130', '2', 1, 1),
(40, 'CLIP', 'HTC M9', 'USO RUDO', '130', '3', 1, 1),
(41, 'CLIP', 'Nyx Fly Mini', 'USO RUDO', '130', '1', 1, 1),
(42, 'CLIP', 'M4 SS1090', 'USO RUDO', '130', '3', 1, 1),
(43, 'CLIP', 'M4 SS4458', 'USO RUDO', '130', '2', 1, 1),
(44, 'CLIP', 'M4 SS4455', 'USO RUDO', '130', '1', 1, 1),
(45, 'CLIP', 'M4 SS4453', 'USO RUDO', '130', '5', 2, 1),
(46, 'CLIP', 'M4 SS4451', 'USO RUDO', '130', '1', 1, 1),
(47, 'CLIP', 'M4 SS4452', 'USO RUDO', '130', '2', 1, 1),
(48, 'CLIP', 'LG K10 2017', 'USO RUDO', '130', '4', 2, 1),
(49, 'CLIP', 'LG Q10', 'USO RUDO', '130', '5', 2, 1),
(50, 'CLIP', 'LG K8 2018', 'USO RUDO', '130', '2', 1, 1),
(51, 'CLIP', 'LG Q7', 'USO RUDO', '130', '1', 1, 1),
(52, 'CLIP', 'LG K4', 'USO RUDO', '130', '3', 1, 1),
(53, 'CLIP', 'LG G4 Stylus', 'USO RUDO', '130', '4', 1, 1),
(54, 'CLIP', 'LG G3 Stylus', 'USO RUDO', '130', '3', 1, 1),
(55, 'CLIP', 'LG Stylus 3', 'USO RUDO', '130', '4', 2, 1),
(56, 'CLIP', 'LG Stylus 2', 'USO RUDO', '130', '5', 2, 1),
(57, 'CLIP', 'LG PRO LITE', 'USO RUDO', '130', '7', 2, 1),
(58, 'CLIP', 'LG XCAM', 'USO RUDO', '130', '2', 1, 1),
(59, 'CLIP', 'LG XScreen/K500', 'USO RUDO', '130', '7', 2, 1),
(60, 'CLIP', 'LG X Max', 'USO RUDO', '130', '4', 2, 1),
(61, 'CLIP', 'LG Zone/X180', 'USO RUDO', '130', '4', 2, 1),
(62, 'CLIP', 'LG L70', 'USO RUDO', '130', '1', 1, 1),
(63, 'CLIP', 'LG Spirit/H420', 'USO RUDO', '130', '2', 1, 1),
(64, 'CLIP', 'LG LEON/H340', 'USO RUDO', '130', '3', 1, 1),
(65, 'CLIP', 'LG G2 Mini/D620', 'USO RUDO', '130', '2', 1, 1),
(66, 'CLIP', 'LG K3', 'USO RUDO', '130', '1', 1, 1),
(67, 'CLIP', 'LG L45', 'USO RUDO', '130', '3', 1, 1),
(68, 'CLIP', 'LG L9', 'USO RUDO', '130', '1', 1, 1),
(69, 'CLIP', 'LG L90', 'USO RUDO', '130', '1', 1, 1),
(70, 'CLIP', 'Samsung S8', 'USO RUDO', '130', '3', 1, 1),
(71, 'CLIP', 'Samsung S7 EDGE', 'USO RUDO', '130', '1', 1, 1),
(72, 'CLIP', 'Samsung S6 EDGE PLUS', 'USO RUDO', '130', '1', 1, 1),
(73, 'CLIP', 'Samsung S5', 'USO RUDO', '130', '12', 2, 1),
(74, 'CLIP', 'Samsung S4', 'USO RUDO', '130', '2', 1, 1),
(75, 'CLIP', 'Samsung Note 4', 'USO RUDO', '130', '1', 1, 1),
(76, 'CLIP', 'Samsung A3 2016', 'USO RUDO', '130', '5', 2, 1),
(77, 'CLIP', 'Samsung Grand Neo', 'USO RUDO', '130', '5', 2, 1),
(78, 'CLIP', 'Samsung Core 2/G355', 'USO RUDO', '130', '4', 2, 1),
(79, 'CLIP', 'Samsung A5 2017', 'USO RUDO', '130', '1', 1, 1),
(80, 'CLIP', 'Samsung Grand Prime/G530H', 'USO RUDO', '130', '7', 2, 1),
(81, 'CLIP', 'Samsung J7 Max', 'USO RUDO', '130', '1', 1, 1),
(82, 'CLIP', 'Samsung J7 Neo', 'USO RUDO', '130', '6', 2, 1),
(83, 'CLIP', 'Samsung J6 2018', 'USO RUDO', '130', '3', 1, 1),
(84, 'CLIP', 'Samsung J5 Pro', 'USO RUDO', '130', '1', 1, 1),
(85, 'CLIP', 'Samsung J5 Prime', 'USO RUDO', '130', '1', 1, 1),
(86, 'CLIP', 'Samsung J500', 'USO RUDO', '130', '1', 1, 1),
(87, 'CLIP', 'Samsung J5 2016', 'USO RUDO', '130', '1', 1, 1),
(88, 'CLIP', 'Samsung J4 2018', 'USO RUDO', '130', '3', 1, 1),
(89, 'CLIP', 'Samsung J3 2016', 'USO RUDO', '130', '6', 2, 1),
(90, 'CLIP', 'Samsung J2 Pro', 'USO RUDO', '130', '3', 1, 1),
(91, 'CLIP', 'Samsung J2 2016', 'USO RUDO', '130', '5', 2, 1),
(92, 'CLIP', 'Samsung J1 Metal', 'USO RUDO', '130', '1', 1, 1),
(93, 'CLIP', 'Samsung J1 100', 'USO RUDO', '130', '3', 1, 1),
(94, 'CLIP', 'Samsung S8 PLUS', 'USO RUDO', '130', '5', 2, 1),
(95, 'CLIP', 'Samsung S9 PLUS', 'USO RUDO', '130', '2', 1, 1),
(96, 'CLIP', 'Samsung S9', 'USO RUDO', '130', '2', 1, 1),
(97, 'CLIP', 'Samsung Note 5', 'USO RUDO', '130', '2', 1, 1),
(98, 'CLIP', 'LG G6', 'USO RUDO', '130', '2', 1, 1),
(99, 'CLIP', 'Lenovo K6', 'USO RUDO', '130', '3', 1, 1),
(100, 'CLIP', 'Alcatel 9008/A3XL', 'USO RUDO', '130', '1', 1, 1),
(101, 'CLIP', 'Alcatel 8050', 'USO RUDO', '130', '2', 1, 1),
(102, 'CLIP', 'Alcatel 7048/ Go PLAY', 'USO RUDO', '130', '4', 2, 1),
(103, 'CLIP', 'Alcatel 6055/ Idol 4', 'USO RUDO', '130', '1', 1, 1),
(104, 'CLIP', 'Alcatel 5098', 'USO RUDO', '130', '2', 1, 1),
(105, 'CLIP', 'Alcatel 5086', 'USO RUDO', '130', '1', 1, 1),
(106, 'CLIP', 'Alcatel 5080', 'USO RUDO', '130', '3', 1, 1),
(107, 'CLIP', 'Alcatel 5058', 'USO RUDO', '130', '1', 1, 1),
(108, 'CLIP', 'Alcatel 5056', 'USO RUDO', '130', '3', 1, 1),
(109, 'CLIP', 'Alcatel 5054', 'USO RUDO', '130', '1', 1, 1),
(110, 'CLIP', 'Alcatel 5051', 'USO RUDO', '130', '1', 1, 1),
(111, 'CLIP', 'Alcatel 3C/5026', 'USO RUDO', '130', '4', 2, 1),
(112, 'CLIP', 'Alcatel 5025', 'USO RUDO', '130', '3', 1, 1),
(113, 'CLIP', 'Alcatel 5015', 'USO RUDO', '130', '2', 1, 1),
(114, 'CLIP', 'Alcatel 5012', 'USO RUDO', '130', '4', 1, 1),
(115, 'CLIP', 'Alcatel 5011', 'USO RUDO', '130', '5', 2, 1),
(116, 'CLIP', 'Alcatel 5010', 'USO RUDO', '130', '6', 2, 1),
(117, 'CLIP', 'Alcatel 4013', 'USO RUDO', '130', '4', 2, 1),
(118, 'CLIP', 'Alcatel 4009', 'USO RUDO', '130', '3', 1, 1),
(119, 'CLIP', 'Alcatel C9', 'USO RUDO', '130', '1', 1, 1),
(120, 'CLIP', 'Alcatel C7', 'USO RUDO', '130', '1', 1, 1),
(121, 'CLIP', 'Alcatel C5', 'USO RUDO', '130', '2', 1, 1),
(122, 'CLIP', 'Alcatel C1', 'USO RUDO', '130', '2', 1, 1),
(123, 'CLIP', 'ZTE L110', 'USO RUDO', '130', '1', 1, 1),
(124, 'CLIP', 'ZTE V8Q', 'USO RUDO', '130', '2', 1, 1),
(125, 'CLIP', 'ZTE V7', 'USO RUDO', '130', '1', 1, 1),
(126, 'CLIP', 'ZTE A460', 'USO RUDO', '130', '4', 2, 1),
(127, 'CLIP', 'ZTE A521', 'USO RUDO', '130', '1', 1, 1),
(128, 'CLIP', 'ZTE A580', 'USO RUDO', '130', '2', 1, 1),
(129, 'CLIP', 'ZTE Blade L7', 'USO RUDO', '130', '3', 1, 1),
(130, 'CLIP', 'ZTE L5', 'USO RUDO', '130', '2', 1, 1),
(131, 'CLIP', 'ZTE L2 Plus', 'USO RUDO', '130', '2', 1, 1),
(132, 'CLIP', 'ZTE V6 Max', 'USO RUDO', '130', '6', 2, 1),
(133, 'CLIP', 'ZTE V6 Plus', 'USO RUDO', '130', '3', 1, 1),
(134, 'CLIP', 'ZTE L2', 'USO RUDO', '130', '2', 1, 1),
(135, 'CLIP', 'Iphone 4', 'USO RUDO', '130', '1', 1, 1),
(136, 'CLIP', 'Iphone 5', 'USO RUDO', '130', '4', 2, 1),
(137, 'CLIP', 'Iphone 6', 'USO RUDO', '130', '4', 2, 1),
(138, 'CLIP', 'Iphone 6 Plus', 'USO RUDO', '130', '6', 2, 1),
(139, 'CLIP', 'Iphone 7', 'USO RUDO', '130', '2', 1, 1),
(140, 'CLIP', 'Iphone 7 Plus', 'USO RUDO', '130', '5', 2, 1),
(141, 'CLIP', 'Huawei Y3 2017', 'USO RUDO', '130', '1', 1, 1),
(142, 'CLIP', 'Huawei Y6 Prime', 'USO RUDO', '130', '1', 1, 1),
(143, 'CLIP', 'Huawei Y7 2018', 'USO RUDO', '130', '3', 1, 1),
(144, 'CLIP', 'Huawei Y6 2018', 'USO RUDO', '130', '1', 1, 1),
(145, 'CLIP', 'Huawei Y635', 'USO RUDO', '130', '1', 1, 1),
(146, 'CLIP', 'Huawei Y6II', 'USO RUDO', '130', '1', 1, 1),
(147, 'CLIP', 'Huawei G Elite Plus', 'USO RUDO', '130', '1', 1, 1),
(148, 'CLIP', 'Huawei P9', 'USO RUDO', '130', '1', 1, 1),
(149, 'CLIP', 'Huawei Y5 2018', 'USO RUDO', '130', '3', 1, 1),
(150, 'CLIP', 'Huawei P10 Lite Plus', 'USO RUDO', '130', '2', 1, 1),
(151, 'CLIP', 'Huawei P10 Lite ', 'USO RUDO', '130', '2', 1, 1),
(152, 'CLIP', 'Huawei Y5II Pro', 'USO RUDO', '130', '2', 1, 1),
(153, 'CLIP', 'Huawei P Smart', 'USO RUDO', '130', '2', 1, 1),
(154, 'CLIP', 'Huawei P9 Lite 2017', 'USO RUDO', '130', '2', 1, 1),
(155, 'CLIP', 'Huawei P8 Lite', 'USO RUDO', '130', '3', 1, 1),
(156, 'CLIP', 'Huawei Mate 8', 'USO RUDO', '130', '1', 1, 1),
(157, 'CLIP', 'Huawei P8 Lite 2017', 'USO RUDO', '130', '2', 1, 1),
(158, 'CLIP', 'Huawei GR3', 'USO RUDO', '130', '2', 1, 1),
(159, 'CLIP', 'Huawei Honor9 Lite', 'USO RUDO', '130', '1', 1, 1),
(160, 'CLIP', 'Huawei Mate 9 Lite', 'USO RUDO', '130', '2', 1, 1),
(161, 'CLIP', 'Huawei Mate 10 ', 'USO RUDO', '130', '2', 1, 1),
(162, 'CLIP', 'Huawei G Play Mini', 'USO RUDO', '130', '3', 1, 1),
(163, 'CLIP', 'Huawei Nova 2 Plus', 'USO RUDO', '130', '1', 1, 1),
(164, 'CLIP', 'Nokia 640XL', 'USO RUDO', '130', '3', 1, 1),
(165, 'CLIP', 'Nokia 3', 'USO RUDO', '130', '2', 1, 1),
(166, 'CLIP', 'Hisense U963', 'USO RUDO', '130', '2', 1, 1),
(167, 'CLIP', 'Hisense F23', 'USO RUDO', '130', '5', 2, 1),
(168, 'CLIP', 'HTC M10', 'USO RUDO', '130', '1', 1, 1),
(169, 'CLIP', 'Lanix L620', 'USO RUDO', '130', '1', 1, 1),
(170, 'CLIP', 'Alcatel 6070', 'USO RUDO', '130', '1', 1, 1),
(171, 'CLIP', 'Hisense F32', 'USO RUDO', '130', '1', 1, 1),
(172, 'CLIP', 'ZTE V8 Mini', 'USO RUDO', '130', '1', 1, 1),
(173, 'CLIP', 'LG L40', 'USO RUDO', '130', '1', 1, 1),
(174, 'CLIP', 'Huawei Y520', 'USO RUDO', '130', '1', 1, 1),
(175, 'CLIP', 'Moto E5', 'USO RUDO', '130', '1', 1, 1),
(176, 'MICA', 'ZTE V580', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(177, 'MICA', 'ZTE A475', 'CRISTAL TEMPLADO', '50', '3', 2, 1),
(178, 'MICA', 'ZTE A602', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(179, 'MICA', 'ZTE A460', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(180, 'MICA', 'ZTE A465', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(181, 'MICA', 'ZTE A510', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(182, 'MICA', 'ZTE A511', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(183, 'MICA', 'ZTE V8', 'CRISTAL TEMPLADO', '50', '1', 1, 1),
(184, 'MICA', 'ZTE V8Q', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(185, 'MICA', 'ZTE V6 Max', 'CRISTAL TEMPLADO', '50', '9', 2, 1),
(186, 'MICA', 'ZTE V6 Plus', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(187, 'MICA', 'ZTE V6', 'CRISTAL TEMPLADO', '50', '9', 2, 1),
(188, 'MICA', 'ZTE V7', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(189, 'MICA', 'ZTE L7', 'CRISTAL TEMPLADO', '50', '6', 2, 1),
(190, 'MICA', 'ZTE L5', 'CRISTAL TEMPLADO', '50', '13', 2, 1),
(191, 'MICA', 'ZTE L2 ', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(192, 'MICA', 'Samsung Core 2', 'CRISTAL TEMPLADO', '50', '10', 2, 1),
(193, 'MICA', 'Samsung A8', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(194, 'MICA', 'Samsung A7', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(195, 'MICA', 'ZTE A5 2016', 'CRISTAL TEMPLADO', '50', '13', 2, 1),
(196, 'MICA', 'Samsung A5 2017', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(197, 'MICA', 'Samsung A3 2016', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(198, 'MICA', 'Samsung Note 5', 'CRISTAL TEMPLADO', '50', '9', 2, 1),
(199, 'MICA', 'Samsung Note 4', 'CRISTAL TEMPLADO', '50', '7', 2, 1),
(200, 'MICA', 'Samsung Note 3', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(201, 'MICA', 'Samsung Note 2', 'CRISTAL TEMPLADO', '50', '12', 2, 1),
(202, 'MICA', 'Samsung J1 Mini', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(203, 'MICA', 'Samsung J1 Ace', 'CRISTAL TEMPLADO', '50', '6', 2, 1),
(204, 'MICA', 'Samsung J1 2016', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(205, 'MICA', 'Samsung J2 2016', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(206, 'MICA', 'Samsung J3 Prime', 'CRISTAL TEMPLADO', '50', '7', 2, 1),
(207, 'MICA', 'Samsung J3 Pro', 'CRISTAL TEMPLADO', '50', '8', 2, 1),
(208, 'MICA', 'Samsung J5', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(209, 'MICA', 'Samsung Grand Prime/G530H', 'CRISTAL TEMPLADO', '50', '17', 2, 1),
(210, 'MICA', 'Samsung J5 Prime', 'CRISTAL TEMPLADO', '50', '15', 2, 1),
(211, 'MICA', 'Samsung J7 Prime', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(212, 'MICA', 'Samsung J7 Neo', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(213, 'MICA', 'Samsung Grand Neo', 'CRISTAL TEMPLADO', '50', '7', 2, 1),
(214, 'MICA', 'Samsung S3', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(215, 'MICA', 'Samsung S4', 'CRISTAL TEMPLADO', '50', '9', 2, 1),
(216, 'MICA', 'Samsung S5', 'CRISTAL TEMPLADO', '50', '7', 2, 1),
(217, 'MICA', 'Samsung Ace 4', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(218, 'MICA', 'LG Sprint', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(219, 'MICA', 'LG XCAM', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(220, 'MICA', 'LG Max', 'v', '50', '12', 2, 1),
(221, 'MICA', 'LG X Max', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(222, 'MICA', 'LG G5', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(223, 'MICA', 'LG G6', 'v', '50', '5', 2, 1),
(224, 'MICA', 'LG XScreen/K500', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(225, 'MICA', 'LG Skin', 'CRISTAL TEMPLADO', '50', '1', 1, 1),
(226, 'MICA', 'LG LEON/H340', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(227, 'MICA', 'LG Zero', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(228, 'MICA', 'LG Magna', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(229, 'MICA', 'LG Zone/X180', 'CRISTAL TEMPLADO', '50', '12', 2, 1),
(230, 'MICA ', 'LG X Style', 'CRISTAL TEMPLADO', '50', '8', 2, 1),
(231, 'MICA', 'LG K10', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(232, 'MICA', 'LG K8', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(233, 'MICA', 'LG K7', 'CRISTAL TEMPLADO', '50', '12', 2, 1),
(234, 'MICA', 'LG K4', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(235, 'MICA', 'LG K3', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(236, 'MICA', 'LG X Power', 'CRISTAL TEMPLADO', '50', '6', 2, 1),
(237, 'MICA', 'LG X Power 2', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(238, 'MICA', 'LG PRO LITE', 'v', '50', '6', 2, 1),
(239, 'MICA', 'LG Stylus 2', 'CRISTAL TEMPLADO', '50', '6', 2, 1),
(240, 'MICA', 'LG Stylus 3', 'CRISTAL TEMPLADO', '50', '1', 1, 1),
(241, 'MICA ', 'LG G3 Stylus', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(242, 'MICA', 'LG G4 Stylus', 'CRISTAL TEMPLADO', '50', '12', 2, 1),
(243, 'MICA', 'LG L70', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(244, 'MICA', 'LG L80 Bello', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(245, 'MICA', 'LG L80 ', 'v', '50', '13', 2, 1),
(246, 'MICA', 'LG L90', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(247, 'MICA', 'HTC DESIRE 10', 'CRISTAL TEMPLADO', '50', '9', 2, 1),
(248, 'MICA', 'HTC DESIRE 650', 'CRISTAL TEMPLADO', '50', '1', 1, 1),
(249, 'CLIP', 'HTC DESIRE 626', 'v', '50', '2', 1, 1),
(250, 'MICA', 'HTC M9', 'CRISTAL TEMPLADO', '50', '1', 1, 1),
(251, 'MICA', 'Lenovo K6', 'CRISTAL TEMPLADO', '50', '11', 2, 1),
(252, 'MICA', 'Moto Z PLAY', 'CRISTAL TEMPLADO', '30', '3', 1, 1),
(253, 'MICA', 'Moto X4', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(254, 'MICA', 'Moto E4 PLUS', 'v', '50', '10', 2, 1),
(255, 'MICA', 'Moto E4', 'v', '50', '4', 2, 1),
(256, 'MICA', 'Moto M', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(257, 'MICA', 'Moto E', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(258, 'MICA', 'Moto C Plus', 'CRISTAL TEMPLADO', '50', '10', 2, 1),
(259, 'MICA', 'Moto C', 'v', '50', '5', 2, 1),
(260, 'MICA', 'Moto Z Force', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(261, 'MICA', 'Moto XForce', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(262, 'MICA', 'Moto X3', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(263, 'MICA', 'Moto X', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(264, 'MICA', 'Moto G', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(265, 'MICA', 'Moto G Turbo', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(266, 'MICA', 'Moto G2', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(267, 'MICA', 'Moto G3', 'CRISTAL TEMPLADO', '50', '7', 2, 1),
(268, 'MICA', 'Moto G4', 'CRISTAL TEMPLADO', '50', '9', 2, 1),
(269, 'MICA', 'Moto G4 PLAY', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(270, 'MICA', 'Moto G4 PLUS', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(271, 'MICA', 'Moto G5', 'CRISTAL TEMPLADO', '50', '15', 2, 1),
(272, 'MICA', 'Moto G5 PLUS', 'CRISTAL TEMPLADO', '50', '6', 2, 1),
(273, 'MICA ', 'Moto E5', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(274, 'MICA', 'Moto G6 Play', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(275, 'MICA', 'Sony Xperia L1', 'v', '50', '1', 1, 1),
(276, 'MICA', 'Sony XA ULTRA', 'CRISTAL TEMPLADO', '50', '8', 2, 1),
(277, 'MICA', 'Sony XA ', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(278, 'MICA', 'Sony XA 1', 'CRISTAL TEMPLADO', '50', '13', 2, 1),
(279, 'MICA', 'Sony T2 ULTRA', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(280, 'MICA', 'Sony E4', 'CRISTAL TEMPLADO', '50', '1', 1, 1),
(281, 'MICA', 'Sony E5', 'CRISTAL TEMPLADO', '50', '8', 2, 1),
(282, 'MICA', 'Sony Z2', 'CRISTAL TEMPLADO', '40', '4', 2, 1),
(283, 'MICA', 'Sony Z3', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(284, 'MICA', 'Sony C5', 'CRISTAL TEMPLADO', '50', '9', 2, 1),
(285, 'MICA', 'Sony C4', 'CRISTAL TEMPLADO', '50', '1', 1, 1),
(286, 'MICA', 'Sony M2', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(287, 'MICA', 'Sony M2 Aqua', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(288, 'MICA', 'Sony M4 Aqua', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(289, 'MICA', 'Huawei G Play Mini', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(290, 'MICA', 'Huawei Y5II ', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(291, 'MICA', 'Huawei Y625', 'CRISTAL TEMPLADO', '50', '10', 2, 1),
(292, 'MICA', 'Huawei Y520', 'CRISTAL TEMPLADO', '50', '1', 1, 1),
(293, 'MICA', 'Huawei 530', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(294, 'MICA', 'Huawei Y550', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(295, 'MICA', 'Huawei Y560', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(296, 'MICA', 'Huawei Y6II', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(297, 'MICA', 'Huawei P9 Lite ', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(298, 'MICA', 'Huawei P8 Lite 2017', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(299, 'MICA', 'Huawei P8 Lite', 'CRISTAL TEMPLADO', '50', '11', 2, 1),
(300, 'MICA', 'Huawei GW Metal', 'CRISTAL TEMPLADO', '50', '11', 2, 1),
(301, 'MICA', 'Huawei G3 Mini', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(302, 'MICA', 'Huawei Mate 8', 'CRISTAL TEMPLADO', '50', '1', 1, 1),
(303, 'MICA', 'Huawei Mate 9 Lite', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(304, 'MICA', 'Huawei P Smart', 'CRISTAL TEMPLADO', '50', '1', 1, 1),
(305, 'MICA', 'Huawei G8', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(306, 'MICA', 'Alcatel 8050', 'CRISTAL TEMPLADO', '50', '9', 2, 1),
(307, 'MICA', 'Huawei P20 Lite', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(308, 'MICA', 'Alcatel 5095', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(309, 'MICA', 'Alcatel 5080', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(310, 'MICA', 'Alcatel 5051', 'CRISTAL TEMPLADO', '50', '1', 1, 1),
(311, 'MICA', 'Alcatel 5054', 'CRISTAL TEMPLADO', '50', '8', 2, 1),
(312, 'MICA', 'Alcatel 5056', 'Cristal Templado', '50', '4', 2, 1),
(313, 'MICA', 'Alcatel 5025', 'CRISTAL TEMPLADO', '50', '15', 2, 1),
(314, 'MICA', 'Alcatel 5015', 'CRISTAL TEMPLADO', '50', '4', 1, 1),
(315, 'MICA', 'Alcatel 5012', 'CRISTAL TEMPLADO', '50', '12', 2, 1),
(316, 'MICA', 'Alcatel 5010', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(317, 'MICA', 'Alcatel 4009', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(318, 'MICA', 'Alcatel 4027', 'CRISTAL TEMPLADO', '50', '1', 1, 1),
(319, 'MICA', 'Alcatel 4047', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(320, 'MICA', 'Alcatel A3', 'CRISTAL TEMPLADO', '50', '10', 2, 1),
(321, 'MICA', 'Alcatel C3', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(322, 'MICA', 'Alcatel C5', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(323, 'MICA', 'Nokia 3', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(324, 'MICA', 'Nokia 5', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(325, 'MICA', 'Nokia 6', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(326, 'MICA', 'Nokia 530', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(327, 'MICA', 'Nokia 640XL', 'CRISTAL TEMPLADO', '50', '4', 2, 1),
(328, 'MICA', 'Lanix LT500', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(329, 'MICA', 'Lanix X510', 'CRISTAL TEMPLADO', '50', '3', 1, 1),
(330, 'MICA', 'Lanix X710', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(331, 'MICA', 'Iphone 5', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(332, 'MICA', 'Iphone 6 Plus', 'CRISTAL TEMPLADO', '50', '8', 2, 1),
(333, 'MICA', 'Iphone 6', 'CRISTAL TEMPLADO', '50', '5', 2, 1),
(334, 'MICA', 'Iphone 7 Plus', 'CRISTAL TEMPLADO', '50', '2', 1, 1),
(335, 'MICA', 'Universal', 'CRISTAL TEMPLADO', '50', '12', 2, 1),
(336, 'MICA', 'Tornasol', 'CRISTAL TEMPLADO', '100', '10', 2, 1),
(337, 'MICA', 'Curvas', 'CRISTAL TEMPLADO', '200', '4', 2, 1),
(338, 'CLIP', 'Iphone 7 Plus', 'USO RUDO GOMA', '150', '1', 1, 1),
(339, 'CLIP', 'Samsung J5 Prime', 'USO RUDO MILIATR', '180', '1', 1, 1),
(340, 'CLIP', 'Iphone x', 'USO RUDO MILITAR', '180', '1', 1, 1),
(341, 'CLIP', 'Samsung J7 Pro', 'USO RUDO MILIATR', '180', '1', 1, 1),
(342, 'CLIP', 'Moto G6 PLUS', 'USO RUDO MILIATR', '180', '2', 1, 1),
(343, 'CLIP', 'Moto G6 ', 'USO RUDO MILIATR', '180', '2', 1, 1),
(344, 'CLIP', 'Samsung A7 ', 'USO RUDO MILIATR', '180', '1', 1, 1),
(345, 'CLIP', 'Moto E4', 'USO RUDO MILIATR', '180', '1', 1, 1),
(346, 'CLIP', 'LG Q6 PRIME', 'USO RUDO MILIATR', '180', '1', 1, 1),
(347, 'CLIP', 'Moto G4 PLAY', 'USO RUDO MILIATR', '180', '1', 1, 1),
(348, 'CLIP', 'LG K10 2017', 'USO RUDO MILIATR', '180', '2', 1, 1),
(349, 'CLIP', 'Samsung J5 Prime', 'USO RUDO GOMA', '150', '1', 1, 1),
(350, 'Audifono', 'A30033', 'Dona', '230', '1', 1, 1),
(351, 'Audifono', 'A2323', 'Dona', '160', '3', 1, 1),
(352, 'Audifono', 'A2319', 'Dona', '160', '2', 1, 1),
(353, 'Audifono', 'KD-V5', 'Dona', '180', '1', 1, 1),
(354, 'Audifono', 'T5801', 'Dona', '200', '2', 1, 1),
(355, 'Audifono', '2308', 'Dona', '90', '3', 1, 1),
(356, 'Soporte/Funda Para Moto', 'Universal', 'Resistente al agua', '220', '1', 1, 1),
(357, 'Chicharo', 'B63', 'Bluetooth', '120', '6', 2, 1),
(358, 'Chicharo ', 'Samsung ', 'Bluetooth', '250', '1', 1, 1),
(359, 'Chicharo', 'Quality', 'Bluetooth', '210', '1', 1, 1),
(360, 'Chicharo', 'Quality Economico', 'Bluetooth', '120', '1', 1, 1),
(361, 'Audifono', 'DeportivonA29', 'Manos libres', '120', '1', 1, 1),
(362, 'Audifono', 'Deportivo Economico 077', 'Manos libres', '210', '1', 1, 1),
(363, 'SD', 'BlackPcs', '8 GB', '130', '13', 5, 1),
(364, 'SD', 'BlackPcs', '16 GB', '210', '4', 2, 1),
(365, 'USB', 'Kingston', '16 GB', '180', '6', 2, 1),
(366, 'Audifono', 'Economico', 'Manos libres', '60', '8', 3, 1),
(367, 'Audifono', 'Sencillo', 'Sencillo', '30', '14', 5, 1),
(368, 'Auxiliar', 'CB112', 'Economico', '30', '9', 3, 1),
(369, 'Cargador Para Bocina', 'Universal', 'Bocinas', '120', '3', 1, 1),
(370, 'Cargador Pulpo', 'Pulpo', 'Universal', '60', '3', 1, 1),
(371, 'Cargador V3', 'MTLIDER', 'V3', '60', '2', 1, 1),
(372, 'Cargador Inalambrico', 'Inalambrico', 'Inalambrico', '320', '1', 1, 1),
(373, 'Cargador Iphone 3/4', 'MTLIDER', 'Cargador Iphone', '120', '4', 2, 1),
(374, 'Cargador para Tablet', 'Punta', 'Para tablet de punta', '120', '2', 1, 1),
(375, 'Cargador para Tablet', 'MTLIDER', 'Carga Rapida', '120', '1', 1, 1),
(376, 'Multicargador', 'MTLIDER', 'Universal', '70', '2', 1, 1),
(377, 'Calble Datos', 'Iphone 5 C1063', 'Cable datos', '40', '2', 1, 1),
(378, 'Cable Datos 3 Puntas', 'C1077', 'Varias Puntas', '50', '6', 2, 1),
(379, 'Cable OTG S5', 'C1097', 'Samsung S5', '35', '4', 2, 1),
(380, 'Cable de Audio 2 puntas', 'C1081', 'Auxiliar', '35', '2', 1, 1),
(381, 'Cargador Samsung', 'S8', 'Carga rapida', '200', '1', 1, 1),
(382, 'Cargador Samsung Original', 'S6/Note4', 'Carga Rapida', '200', '1', 1, 1),
(383, 'Adaptador SD', 'SD/USB', 'Adaptador SD', '25', '9', 2, 1),
(384, 'Multi contactos', 'LumiRa', 'Multicontaco LumiRa', '80', '2', 1, 1),
(385, 'Cable HDMI', 'HDMI', 'Cable HDMI', '80', '2', 1, 1),
(386, 'Baston SELFIE', 'Bluetooth', 'Bluetooth', '180', '2', 1, 1),
(387, 'Antena', 'QFX', 'Antena TV', '80', '4', 2, 1),
(388, 'Pop Soket', 'Universal', 'universal', '60', '2', 1, 1),
(389, 'Pop Soket', 'Universal', 'Peluche', '100', '2', 1, 1),
(390, 'Control ', 'Sky', 'Sky', '130', '1', 1, 1),
(391, 'Control ', 'Universal', 'Universal', '130', '3', 1, 1),
(392, 'Funda', 'Universal', 'Cacahuate/Chicas', '120', '5', 2, 1),
(393, 'Funda', 'Universal Chica Economica', 'Economica', '60', '2', 1, 1),
(394, 'Funda', 'Universal Mediana', 'Universal Mediana', '120', '15', 5, 1),
(395, 'Funda', 'Universal Grande', 'Universal Grande', '120', '4', 2, 1),
(396, 'Funda', 'Tablet Universal', 'Universal MTLIDER 9"', '200', '3', 1, 1),
(397, 'Antena', 'QFX Plana', 'TV', '210', '2', 1, 1),
(398, 'MICA', 'Tablet 7', 'CRISTAL TEMPLADO 7"', '150', '2', 1, 1),
(399, 'MICA', 'Plastico Universa', 'Plastico', '100', '2', 1, 1),
(400, 'Cable DatosV3', 'Economico', 'Economico', '30', '10', 3, 1),
(401, 'Cable de Datos V10', 'V10', 'Cable de datos V10', '80', '5', 2, 1),
(402, 'Cable de Audio ', 'Rojo/Blanco', 'Auxiliar', '25', '8', 2, 1),
(403, 'Cable Auxiliar', '2.5', 'Auxiliar', '25', '2', 1, 1),
(404, 'Cable de Tablet', 'Samsung ', 'Normal', '80', '2', 1, 1),
(405, 'Cable Iphone 5/6', '1066', 'Cable de datos', '80', '1', 1, 1),
(406, 'Cable datos', 'Iphone 4', 'Datos', '40', '1', 1, 1),
(407, 'Cable de Datos V8', 'V8', 'V8', '30', '3', 1, 1),
(408, 'Inversor', 'Radox', 'inversor', '75', '1', 1, 1),
(409, 'Cargador ', 'Motorola TURBO', 'MOTO TURBO', '200', '2', 1, 1),
(410, 'Raton', 'Inalambrico', 'Raton Inalambrico', '180', '1', 1, 1),
(411, 'USB Grabada', 'USB MUsica', 'Musica', '160', '7', 2, 1),
(412, 'Cubos CORAS', 'Carga Rapida', '\r\n\r\nCubo Cora\r\n\r\n\r\n\r\n', '50', '13', 5, 1),
(413, 'Cubo Economico', 'Cubo Economico', 'Cubo Economico', '40', '5', 2, 1),
(414, 'Cargador de chupon para auto', 'Cargador de chupon para auto', 'Cargador de chupon para auto', '40', '14', 5, 1),
(415, 'Linterna de Chicharra', 'Linterna de Chicharra', 'Linterna de Chicharra', '250', '1', 1, 1),
(416, 'Pila', 'Solar', 'Portatil', '210', '1', 1, 1),
(417, 'Lente clip Universal', 'Lente clip Universal', 'Lente clip Universal', '150', '2', 1, 1),
(418, 'Baston SELFIE', 'Elux', 'Selfie', '120', '1', 1, 1),
(419, 'Cable De datos', 'Cora', 'Cable cora de datos', '80', '3', 1, 1),
(420, 'Masajeador', 'Masajeador', 'vibrador', '80', '2', 1, 1),
(421, 'Bocina Velika', 'Bluetooth', 'De carita', '210', '6', 3, 1),
(422, 'Bocina Velika', 'Sin Bluetooth', 'De carita', '180', '8', 3, 1),
(423, 'Bocina Mini', 'Y6', 'Bocina', '150', '2', 1, 1),
(424, 'Bolso Dama', 'Bolso Dama', 'Bolso Dama', '250', '2', 1, 1),
(425, 'Microfono', 'Universal', 'Microfono universal', '110', '9', 2, 1),
(426, 'Funda Con teclado para tablet', '7"', '7"', '250', '1', 1, 1),
(427, 'Funda 7', 'Universal', 'universal', '180', '2', 1, 1),
(428, 'Funda', 'Ipad 2', 'Uso rudo', '350', '1', 1, 1),
(429, 'Funda', 'Samsung T350', 'Uso rudo', '280', '1', 1, 1),
(430, 'Multicontacto', 'De escritorio', 'Multicontacto', '250', '1', 1, 1),
(431, 'Celular', 'Iphone 8', 'Genertico', '3500', '1', 1, 1),
(432, 'Reloj ', 'QFX', 'Despertador', '280', '1', 1, 1),
(433, 'Bocina Link bits', 'KTS03', 'Bocina', '250', '1', 1, 1),
(434, 'Bocina Redio cargador', '181BT', 'bocina', '350', '1', 1, 1),
(435, 'Bocina Link bits', 'chica KTS02', 'Bocina', '200', '1', 1, 1),
(436, 'Ventilador', 'Para celular', 'Ventilador', '60', '2', 1, 1),
(437, 'Bocina Con lampara', '1609', 'Bocina', '480', '1', 1, 1),
(438, 'Bocina Link bits', '003', 'bocina', '450', '1', 1, 1),
(439, 'Lentes de Bluetooth', 'Lentes de Bluetooth', 'Lentes de Bluetooth', '200', '9', 2, 1),
(440, 'Drone', 'Chico', 'Drone', '200', '3', 1, 1),
(441, 'Baloncitos', 'Baloncitos', 'Baloncitos', '200', '3', 1, 1),
(442, 'OTG V8', 'OTG V8', 'OTG V8', '80', '1', 1, 1),
(443, 'Accesorio', 'Goma', 'Todos los modelos', '60', '49', 20, 1),
(444, 'Accesorio', 'IGLOW', 'Todos los modelos', '80', '423', 150, 1),
(445, 'Accesorio', 'Varios', 'Todos los modelos', '120', '199', 60, 1),
(446, 'Accesorio', 'Varios', 'Todos los modelos', '150', '497', 150, 1),
(447, 'Accesorio', 'New Case', 'Todos los modelos', '180', '31', 15, 1),
(448, 'Accesorio', 'Case Original', 'Iphone', '200', '9', 2, 1),
(449, 'Funda Tabalet', 'Manitas Para ipad', 'Funda ipad', '250', '3', 1, 1),
(450, 'Funda', 'Tablet 7"', 'Universal Goma', '120', '1', 1, 1),
(451, 'Bocina', ' Velika', '15", con base', '2200', '1', 1, 1),
(452, 'Bocina', 'Rino', '12", con base', '1750', '4', 2, 1),
(453, 'Bocina', 'Rino', '10", con base', '1500', '1', 1, 1),
(454, 'Bocinaa', 'Gadiz', '8"', '850', '2', 1, 1),
(455, 'mica', 'moto g6 plus', 'cristal templado', '50', '1', 2, 1),
(456, 'motorola g7', 'mica', 'cristal ', '50', '2', 2, 1),
(457, 'Moto g7 power', 'mica', 'mica de cristal', '50', '9', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparacion_cell`
--

CREATE TABLE `reparacion_cell` (
  `id_cliente` int(11) NOT NULL,
  `nombre_c` varchar(455) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `modelo_cell` varchar(45) NOT NULL,
  `descripcion_falla` text NOT NULL,
  `precio_reparacion` float NOT NULL,
  `fecha_entrada` date NOT NULL,
  `fecha_salida` date DEFAULT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_ventas` int(11) NOT NULL,
  `total_venta` float NOT NULL,
  `fecha_venta` date NOT NULL,
  `hora_venta` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_ventas`, `total_venta`, `fecha_venta`, `hora_venta`) VALUES
(1, 120, '2019-05-26', '16:17:37'),
(2, 450, '2019-05-26', '16:19:45'),
(3, 150, '2019-05-27', '11:17:04'),
(4, 240, '2019-05-29', '10:35:04'),
(5, 50, '2019-05-29', '10:36:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito_venta`
--
ALTER TABLE `carrito_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_carrito_venta_producto` (`fk_producto`),
  ADD KEY `fk_carrito_venta_ventas1` (`fk_ventas`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `reparacion_cell`
--
ALTER TABLE `reparacion_cell`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_ventas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito_venta`
--
ALTER TABLE `carrito_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=458;
--
-- AUTO_INCREMENT de la tabla `reparacion_cell`
--
ALTER TABLE `reparacion_cell`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito_venta`
--
ALTER TABLE `carrito_venta`
  ADD CONSTRAINT `fk_carrito_venta_producto` FOREIGN KEY (`fk_producto`) REFERENCES `producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_carrito_venta_ventas1` FOREIGN KEY (`fk_ventas`) REFERENCES `ventas` (`id_ventas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
