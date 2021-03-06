-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-02-2018 a las 11:41:33
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_valvula1`
--

CREATE TABLE `estados_valvula1` (
  `ID` int(255) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado_val1` int(11) NOT NULL,
  `estado_val2` int(11) NOT NULL,
  `estado_val3` int(11) NOT NULL,
  `estado_val4` int(11) NOT NULL,
  `estado_val5` int(11) NOT NULL,
  `estado_val6` int(11) NOT NULL,
  `estado_val7` int(11) NOT NULL,
  `estado_val8` int(11) NOT NULL,
  `estado_val9` int(11) NOT NULL,
  `estado_val10` int(11) NOT NULL,
  `estado_val11` int(11) NOT NULL,
  `estado_val12` int(11) NOT NULL,
  `estado_val13` int(11) NOT NULL,
  `estado_val14` int(11) NOT NULL,
  `estado_val15` int(11) NOT NULL,
  `estado_val16` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados_valvula1`
--

INSERT INTO `estados_valvula1` (`ID`, `Fecha`, `estado_val1`, `estado_val2`, `estado_val3`, `estado_val4`, `estado_val5`, `estado_val6`, `estado_val7`, `estado_val8`, `estado_val9`, `estado_val10`, `estado_val11`, `estado_val12`, `estado_val13`, `estado_val14`, `estado_val15`, `estado_val16`) VALUES
(1, '2018-01-03 16:25:15', 1, 1, 1, 0, 1, 0, 1, 0, 1, 0, 0, 1, 1, 1, 1, 1),
(2, '2018-01-03 16:32:15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '2018-01-03 16:32:36', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '2018-01-03 16:56:58', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(5, '2018-01-03 20:52:21', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16),
(6, '2018-01-03 20:53:43', 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1),
(7, '2018-01-04 01:24:31', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, '2018-01-04 01:25:40', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, '2018-01-04 01:26:04', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, '2018-01-04 02:45:22', 1, 0, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1),
(11, '2018-02-07 18:35:26', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, '2018-02-07 18:35:26', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, '2018-02-07 18:35:35', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(14, '2018-02-07 19:13:44', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, '2018-02-07 19:13:53', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(16, '2018-02-07 19:13:57', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, '2018-02-07 19:13:57', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, '2018-02-07 19:14:46', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(19, '2018-02-07 19:14:51', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, '2018-02-07 19:52:23', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, '2018-02-07 19:52:23', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, '2018-02-07 20:42:13', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(23, '2018-02-07 20:42:25', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(24, '2018-02-07 20:43:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, '2018-02-07 20:43:12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, '2018-02-07 20:43:14', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(27, '2018-02-07 20:43:32', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(28, '2018-02-07 20:43:35', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(29, '2018-02-07 20:45:48', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, '2018-02-07 20:46:02', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(31, '2018-02-08 17:31:02', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, '2018-02-08 20:01:50', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, '2018-02-08 20:03:35', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(34, '2018-02-08 20:07:28', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, '2018-02-08 20:07:28', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, '2018-02-08 20:16:41', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(37, '2018-02-09 13:19:57', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(38, '2018-02-09 13:20:16', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(39, '2018-02-09 13:21:39', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(40, '2018-02-09 13:21:44', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(41, '2018-02-09 13:21:48', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(42, '2018-02-09 13:21:51', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(43, '2018-02-09 13:21:56', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, '2018-02-09 13:22:03', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(45, '2018-02-09 13:22:08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, '2018-02-09 13:53:45', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, '2018-02-09 14:05:35', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(48, '2018-02-09 14:05:52', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, '2018-02-09 14:08:55', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(50, '2018-02-09 14:09:45', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, '2018-02-09 14:13:01', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(52, '2018-02-09 14:15:17', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(53, '2018-02-09 14:15:17', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(54, '2018-02-09 14:15:24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, '2018-02-09 14:19:35', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(56, '2018-02-09 14:19:35', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(57, '2018-02-09 14:19:39', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, '2018-02-09 14:26:22', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(59, '2018-02-09 14:35:03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, '2018-02-09 14:38:12', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(61, '2018-02-09 14:38:39', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, '2018-02-09 14:38:39', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, '2018-02-09 14:38:47', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(64, '2018-02-09 14:39:24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, '2018-02-09 14:39:24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, '2018-02-09 14:44:30', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(67, '2018-02-09 14:49:39', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, '2018-02-09 14:49:39', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, '2018-02-09 14:49:50', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, '2018-02-09 15:15:24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, '2018-02-09 17:29:55', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(72, '2018-02-09 17:29:55', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(73, '2018-02-09 17:30:03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, '2018-02-09 17:30:12', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(75, '2018-02-09 18:00:41', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, '2018-02-09 18:00:48', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(77, '2018-02-09 18:00:48', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(78, '2018-02-09 18:00:53', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, '2018-02-09 18:00:55', 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(80, '2018-02-11 00:00:14', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(81, '2018-02-11 00:02:29', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 1),
(82, '2018-02-12 15:24:53', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(83, '2018-02-12 15:24:57', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, '2018-02-12 15:34:03', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(85, '2018-02-12 15:34:05', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(86, '2018-02-12 15:34:06', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(87, '2018-02-12 15:34:10', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(88, '2018-02-12 15:35:06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, '2018-02-12 15:36:08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, '2018-02-12 15:37:17', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(91, '2018-02-12 15:37:27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, '2018-02-12 15:38:11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, '2018-02-12 15:40:54', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(94, '2018-02-12 15:40:58', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, '2018-02-12 15:41:30', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(96, '2018-02-12 15:41:56', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(97, '2018-02-12 15:41:56', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(98, '2018-02-12 15:42:45', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(99, '2018-02-12 15:42:45', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(100, '2018-02-12 15:42:47', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(101, '2018-02-12 15:44:19', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(102, '2018-02-12 15:44:54', 1, 1, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(103, '2018-02-12 15:46:52', 1, 0, 1, 1, 0, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1),
(104, '2018-02-12 15:47:08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(105, '2018-02-12 15:49:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(106, '2018-02-13 01:43:49', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(107, '2018-02-13 01:43:54', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(108, '2018-02-13 02:24:23', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(109, '2018-02-13 02:25:21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(110, '2018-02-13 04:11:46', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(111, '2018-02-13 04:12:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicion_humedad`
--

CREATE TABLE `medicion_humedad` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL,
  `sensor1` int(11) NOT NULL,
  `sensor2` int(11) NOT NULL,
  `sensor3` int(11) NOT NULL,
  `sensor4` int(11) NOT NULL,
  `sensor5` int(11) NOT NULL,
  `sensor6` int(11) NOT NULL,
  `sensor7` int(11) NOT NULL,
  `sensor8` int(11) NOT NULL,
  `sensor9` int(11) NOT NULL,
  `sensor10` int(11) NOT NULL,
  `sensor11` int(11) NOT NULL,
  `sensor12` int(11) NOT NULL,
  `sensor13` int(11) NOT NULL,
  `sensor14` int(11) NOT NULL,
  `sensor15` int(11) NOT NULL,
  `sensor16` int(11) NOT NULL,
  `sensor17` int(11) NOT NULL,
  `sensor18` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicion_humedad`
--

INSERT INTO `medicion_humedad` (`id`, `fecha`, `sensor1`, `sensor2`, `sensor3`, `sensor4`, `sensor5`, `sensor6`, `sensor7`, `sensor8`, `sensor9`, `sensor10`, `sensor11`, `sensor12`, `sensor13`, `sensor14`, `sensor15`, `sensor16`, `sensor17`, `sensor18`) VALUES
(1, '2018-01-17 11:29:33', 21, 21, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38),
(2, '2018-01-17 14:33:40', 11, 22, 33, 44, 55, 66, 77, 88, 99, 10, 11, 12, 13, 14, 15, 16, 17, 18),
(3, '2018-01-17 16:34:18', 21, 32, 42, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modo_activo`
--

CREATE TABLE `modo_activo` (
  `ID` int(12) NOT NULL,
  `tiempo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `m_manual` tinyint(1) NOT NULL DEFAULT '0',
  `m_automatico` tinyint(1) NOT NULL DEFAULT '0',
  `m_programado` tinyint(1) NOT NULL DEFAULT '0',
  `m_apagado` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modo_activo`
--

INSERT INTO `modo_activo` (`ID`, `tiempo`, `m_manual`, `m_automatico`, `m_programado`, `m_apagado`) VALUES
(1, '2018-01-29 17:52:33', 0, 1, 0, 0),
(2, '2018-02-01 04:00:00', 0, 0, 1, 0),
(3, '2018-02-01 18:10:50', 0, 0, 0, 1),
(4, '2018-02-01 18:11:20', 0, 1, 0, 0),
(5, '2018-02-06 13:43:59', 0, 1, 0, 0),
(6, '2018-02-06 13:44:14', 0, 1, 0, 0),
(7, '2018-02-06 13:44:20', 0, 1, 0, 0),
(8, '2018-02-06 13:48:08', 0, 1, 0, 0),
(9, '2018-02-06 13:50:39', 0, 1, 0, 0),
(10, '2018-02-06 13:51:39', 0, 1, 0, 0),
(11, '2018-02-06 14:04:24', 1, 0, 0, 0),
(12, '2018-02-06 14:04:58', 1, 0, 0, 0),
(13, '2018-02-06 14:06:03', 0, 0, 0, 1),
(14, '2018-02-06 14:06:08', 1, 0, 0, 0),
(15, '2018-02-06 14:06:11', 0, 0, 0, 1),
(16, '2018-02-06 14:06:15', 1, 0, 0, 0),
(17, '2018-02-06 14:44:01', 0, 0, 0, 1),
(18, '2018-02-06 15:28:48', 1, 0, 0, 0),
(19, '2018-02-06 15:28:54', 0, 0, 0, 1),
(20, '2018-02-06 15:28:55', 1, 0, 0, 0),
(21, '2018-02-07 13:33:28', 0, 1, 0, 0),
(22, '2018-02-07 13:36:19', 0, 1, 0, 0),
(23, '2018-02-07 13:37:30', 0, 1, 0, 0),
(24, '2018-02-07 13:48:45', 1, 0, 0, 0),
(25, '2018-02-07 14:02:58', 0, 1, 0, 0),
(26, '2018-02-07 14:04:05', 0, 1, 0, 0),
(27, '2018-02-07 14:04:53', 1, 0, 0, 0),
(28, '2018-02-07 14:05:05', 0, 0, 0, 1),
(29, '2018-02-07 14:05:07', 0, 0, 0, 1),
(30, '2018-02-07 14:26:25', 1, 0, 0, 0),
(31, '2018-02-07 14:26:33', 0, 1, 0, 0),
(32, '2018-02-07 14:26:42', 0, 0, 0, 1),
(33, '2018-02-07 14:26:44', 0, 0, 0, 1),
(34, '2018-02-07 14:26:46', 0, 0, 0, 1),
(35, '2018-02-07 14:31:44', 0, 0, 0, 1),
(36, '2018-02-07 14:31:45', 0, 0, 0, 1),
(37, '2018-02-07 14:32:04', 0, 1, 0, 0),
(38, '2018-02-07 14:32:22', 1, 0, 0, 0),
(39, '2018-02-07 14:32:26', 0, 1, 0, 0),
(40, '2018-02-07 14:32:29', 1, 0, 0, 0),
(41, '2018-02-07 14:32:40', 0, 0, 0, 1),
(42, '2018-02-07 14:32:41', 0, 0, 0, 1),
(43, '2018-02-07 14:54:33', 1, 0, 0, 0),
(44, '2018-02-07 14:54:35', 1, 0, 0, 0),
(45, '2018-02-07 14:54:35', 0, 0, 0, 1),
(46, '2018-02-07 15:49:30', 0, 0, 0, 1),
(47, '2018-02-07 15:52:28', 0, 1, 0, 0),
(48, '2018-02-07 15:53:14', 0, 1, 0, 0),
(49, '2018-02-07 15:53:27', 0, 1, 0, 0),
(50, '2018-02-07 15:55:07', 0, 1, 0, 0),
(51, '2018-02-07 15:55:19', 1, 0, 0, 0),
(52, '2018-02-07 15:55:39', 0, 0, 0, 1),
(53, '2018-02-07 15:55:45', 0, 0, 0, 1),
(54, '2018-02-07 15:55:53', 0, 0, 0, 1),
(55, '2018-02-07 15:56:47', 0, 0, 0, 1),
(56, '2018-02-07 15:56:48', 1, 0, 0, 0),
(57, '2018-02-07 15:57:31', 0, 0, 1, 0),
(58, '2018-02-07 15:57:48', 0, 0, 1, 0),
(59, '2018-02-07 16:00:00', 0, 0, 1, 0),
(60, '2018-02-07 16:00:58', 0, 0, 1, 0),
(61, '2018-02-07 16:19:51', 0, 0, 0, 1),
(62, '2018-02-07 16:19:52', 1, 0, 0, 0),
(63, '2018-02-07 18:35:26', 0, 0, 0, 1),
(64, '2018-02-07 18:35:26', 0, 0, 0, 1),
(65, '2018-02-07 18:35:35', 0, 1, 0, 0),
(66, '2018-02-07 19:13:44', 0, 0, 0, 1),
(67, '2018-02-07 19:13:53', 0, 1, 0, 0),
(68, '2018-02-07 19:13:57', 0, 0, 0, 1),
(69, '2018-02-07 19:13:57', 0, 0, 0, 1),
(70, '2018-02-07 19:14:46', 0, 1, 0, 0),
(71, '2018-02-07 19:14:50', 0, 0, 0, 1),
(72, '2018-02-07 19:46:17', 1, 0, 0, 0),
(73, '2018-02-07 19:52:23', 0, 0, 0, 1),
(74, '2018-02-07 19:52:23', 0, 0, 0, 1),
(75, '2018-02-07 20:42:13', 0, 1, 0, 0),
(76, '2018-02-07 20:42:25', 0, 1, 0, 0),
(77, '2018-02-07 20:42:49', 1, 0, 0, 0),
(78, '2018-02-07 20:43:00', 0, 0, 0, 1),
(79, '2018-02-07 20:43:12', 0, 0, 0, 1),
(80, '2018-02-07 20:43:14', 0, 1, 0, 0),
(81, '2018-02-07 20:43:32', 0, 0, 1, 0),
(82, '2018-02-07 20:43:35', 0, 0, 1, 0),
(83, '2018-02-07 20:45:48', 0, 0, 0, 1),
(84, '2018-02-07 20:46:02', 0, 1, 0, 0),
(85, '2018-02-08 17:31:01', 0, 0, 0, 1),
(86, '2018-02-08 17:31:02', 0, 0, 0, 1),
(87, '2018-02-08 20:00:44', 1, 0, 0, 0),
(88, '2018-02-08 20:01:49', 0, 0, 0, 1),
(89, '2018-02-08 20:01:50', 0, 0, 0, 1),
(90, '2018-02-08 20:03:35', 1, 0, 0, 0),
(91, '2018-02-08 20:07:26', 0, 0, 0, 1),
(92, '2018-02-08 20:07:26', 0, 0, 0, 1),
(93, '2018-02-08 20:07:28', 0, 0, 0, 1),
(94, '2018-02-08 20:07:28', 0, 0, 0, 1),
(95, '2018-02-08 20:16:41', 1, 0, 0, 0),
(96, '2018-02-09 13:19:57', 0, 1, 0, 0),
(97, '2018-02-09 13:20:16', 0, 1, 0, 0),
(98, '2018-02-09 13:21:39', 1, 0, 0, 0),
(99, '2018-02-09 13:21:44', 1, 0, 0, 0),
(100, '2018-02-09 13:21:48', 1, 0, 0, 0),
(101, '2018-02-09 13:21:51', 1, 0, 0, 0),
(102, '2018-02-09 13:21:56', 0, 0, 0, 1),
(103, '2018-02-09 13:22:03', 1, 0, 0, 0),
(104, '2018-02-09 13:22:08', 0, 0, 0, 1),
(105, '2018-02-09 13:53:45', 0, 0, 0, 1),
(106, '2018-02-09 14:05:35', 1, 0, 0, 0),
(107, '2018-02-09 14:05:52', 0, 0, 0, 1),
(108, '2018-02-09 14:08:55', 0, 1, 0, 0),
(109, '2018-02-09 14:09:45', 0, 0, 0, 1),
(110, '2018-02-09 14:13:01', 0, 1, 0, 0),
(111, '2018-02-09 14:15:17', 1, 0, 0, 0),
(112, '2018-02-09 14:15:17', 1, 0, 0, 0),
(113, '2018-02-09 14:15:24', 0, 0, 0, 1),
(114, '2018-02-09 14:19:35', 1, 0, 0, 0),
(115, '2018-02-09 14:19:35', 1, 0, 0, 0),
(116, '2018-02-09 14:19:39', 0, 0, 0, 1),
(117, '2018-02-09 14:26:22', 0, 1, 0, 0),
(118, '2018-02-09 14:35:01', 0, 0, 0, 1),
(119, '2018-02-09 14:35:03', 0, 0, 0, 1),
(120, '2018-02-09 14:38:12', 0, 1, 0, 0),
(121, '2018-02-09 14:38:39', 0, 0, 0, 1),
(122, '2018-02-09 14:38:39', 0, 0, 0, 1),
(123, '2018-02-09 14:38:47', 0, 1, 0, 0),
(124, '2018-02-09 14:39:24', 0, 0, 0, 1),
(125, '2018-02-09 14:39:24', 0, 0, 0, 1),
(126, '2018-02-09 14:44:30', 0, 1, 0, 0),
(127, '2018-02-09 14:49:39', 0, 0, 0, 1),
(128, '2018-02-09 14:49:39', 0, 0, 0, 1),
(129, '2018-02-09 14:49:50', 0, 0, 0, 1),
(130, '2018-02-09 15:15:24', 0, 0, 0, 1),
(131, '2018-02-09 17:29:55', 1, 0, 0, 0),
(132, '2018-02-09 17:29:55', 1, 0, 0, 0),
(133, '2018-02-09 17:30:03', 0, 0, 0, 1),
(134, '2018-02-09 17:30:12', 0, 1, 0, 0),
(135, '2018-02-09 18:00:36', 1, 0, 0, 0),
(136, '2018-02-09 18:00:41', 0, 0, 0, 1),
(137, '2018-02-09 18:00:48', 1, 0, 0, 0),
(138, '2018-02-09 18:00:48', 1, 0, 0, 0),
(139, '2018-02-09 18:00:53', 0, 0, 0, 1),
(140, '2018-02-09 18:00:55', 0, 0, 0, 1),
(141, '2018-02-10 23:59:23', 1, 0, 0, 0),
(142, '2018-02-11 00:00:14', 0, 1, 0, 0),
(143, '2018-02-11 00:02:28', 1, 0, 0, 0),
(144, '2018-02-12 15:24:53', 1, 0, 0, 0),
(145, '2018-02-12 15:24:57', 0, 0, 0, 1),
(146, '2018-02-12 15:31:25', 1, 0, 0, 0),
(147, '2018-02-12 15:32:48', 1, 0, 0, 0),
(148, '2018-02-12 15:32:50', 1, 0, 0, 0),
(149, '2018-02-12 15:32:50', 1, 0, 0, 0),
(150, '2018-02-12 15:34:03', 1, 0, 0, 0),
(151, '2018-02-12 15:34:05', 1, 0, 0, 0),
(152, '2018-02-12 15:34:06', 1, 0, 0, 0),
(153, '2018-02-12 15:34:10', 1, 0, 0, 0),
(154, '2018-02-12 15:35:06', 0, 0, 0, 1),
(155, '2018-02-12 15:35:55', 1, 0, 0, 0),
(156, '2018-02-12 15:36:07', 0, 0, 0, 1),
(157, '2018-02-12 15:37:17', 1, 0, 0, 0),
(158, '2018-02-12 15:37:27', 0, 0, 0, 1),
(159, '2018-02-12 15:38:00', 1, 0, 0, 0),
(160, '2018-02-12 15:38:11', 0, 0, 0, 1),
(161, '2018-02-12 15:40:54', 1, 0, 0, 0),
(162, '2018-02-12 15:40:58', 0, 0, 0, 1),
(163, '2018-02-12 15:41:30', 1, 0, 0, 0),
(164, '2018-02-12 15:41:56', 0, 0, 0, 1),
(165, '2018-02-12 15:41:56', 0, 0, 0, 1),
(166, '2018-02-12 15:42:45', 1, 0, 0, 0),
(167, '2018-02-12 15:42:45', 1, 0, 0, 0),
(168, '2018-02-12 15:42:47', 1, 0, 0, 0),
(169, '2018-02-12 15:44:19', 1, 0, 0, 0),
(170, '2018-02-12 15:44:54', 0, 0, 0, 1),
(171, '2018-02-12 15:44:56', 1, 0, 0, 0),
(172, '2018-02-12 15:46:40', 1, 0, 0, 0),
(173, '2018-02-12 15:46:52', 1, 0, 0, 0),
(174, '2018-02-12 15:47:07', 0, 0, 0, 1),
(175, '2018-02-12 15:47:08', 0, 0, 0, 1),
(176, '2018-02-12 15:49:00', 0, 0, 0, 1),
(177, '2018-02-12 15:49:04', 1, 0, 0, 0),
(178, '2018-02-13 01:43:49', 0, 0, 0, 1),
(179, '2018-02-13 01:43:52', 1, 0, 0, 0),
(180, '2018-02-13 01:43:54', 0, 0, 0, 1),
(181, '2018-02-13 02:24:23', 0, 1, 0, 0),
(182, '2018-02-13 02:25:21', 0, 0, 0, 1),
(183, '2018-02-13 04:11:46', 0, 1, 0, 0),
(184, '2018-02-13 04:12:00', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevo_horario`
--

CREATE TABLE `nuevo_horario` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hora_1` int(11) NOT NULL,
  `min_1` int(11) NOT NULL,
  `seg_1` int(11) NOT NULL,
  `duracion_1` int(11) NOT NULL,
  `hora_2` int(11) NOT NULL DEFAULT '0',
  `min_2` int(11) NOT NULL DEFAULT '0',
  `seg_2` int(11) NOT NULL DEFAULT '0',
  `duracion_2` int(11) NOT NULL DEFAULT '0',
  `hora_3` int(11) NOT NULL DEFAULT '0',
  `min_3` int(11) NOT NULL DEFAULT '0',
  `seg_3` int(11) NOT NULL DEFAULT '0',
  `duracion_3` int(11) NOT NULL DEFAULT '0',
  `hora_4` int(11) NOT NULL DEFAULT '0',
  `min_4` int(11) NOT NULL DEFAULT '0',
  `seg_4` int(11) NOT NULL DEFAULT '0',
  `duracion_4` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nuevo_horario`
--

INSERT INTO `nuevo_horario` (`id`, `fecha`, `hora_1`, `min_1`, `seg_1`, `duracion_1`, `hora_2`, `min_2`, `seg_2`, `duracion_2`, `hora_3`, `min_3`, `seg_3`, `duracion_3`, `hora_4`, `min_4`, `seg_4`, `duracion_4`) VALUES
(1, '2018-01-03 21:58:43', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '2018-01-03 21:59:35', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16),
(3, '2018-01-04 02:46:23', 11, 22, 33, 44, 55, 66, 77, 88, 99, 1010, 1111, 1212, 1313, 1414, 1515, 1616),
(12, '2018-02-01 18:10:02', 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, '2018-02-01 18:11:20', 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, '2018-02-06 13:44:20', 2, 1, 1, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, '2018-02-06 13:48:08', 16, 5, 5, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, '2018-02-06 13:51:39', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, '2018-02-07 13:33:28', 3, 8, 3, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, '2018-02-07 13:36:19', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, '2018-02-07 13:37:30', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0),
(20, '2018-02-07 14:02:58', 3, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, '2018-02-07 14:04:05', 3, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, '2018-02-07 14:26:33', 3, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, '2018-02-07 14:32:04', 6, 18, 18, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, '2018-02-07 14:32:26', 6, 18, 18, 18, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0),
(25, '2018-02-07 15:52:28', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, '2018-02-07 15:53:14', 15, 14, 15, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, '2018-02-07 15:53:27', 15, 14, 15, 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, '2018-02-07 15:55:07', 15, 14, 15, 49, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0),
(29, '2018-02-07 18:35:35', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, '2018-02-07 19:13:53', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, '2018-02-07 19:14:46', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, '2018-02-07 20:42:13', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, '2018-02-08 17:21:02', 12, 16, 15, 20, 13, 20, 0, 0, 17, 50, 0, 0, 0, 0, 0, 0),
(34, '2018-02-07 20:43:14', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, '2018-02-07 20:46:02', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, '2018-02-08 17:31:02', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, '2018-02-08 20:01:50', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, '2018-02-08 20:07:28', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, '2018-02-08 20:07:28', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, '2018-02-09 13:19:57', 4, 15, 18, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, '2018-02-09 13:20:16', 4, 15, 16, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, '2018-02-09 13:21:56', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, '2018-02-09 13:22:08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, '2018-02-09 13:53:45', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, '2018-02-09 14:05:52', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, '2018-02-09 14:08:55', 4, 16, 18, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, '2018-02-09 14:09:45', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, '2018-02-09 14:13:01', 6, 4, 7, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, '2018-02-09 14:15:24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, '2018-02-09 14:19:39', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, '2018-02-09 14:26:22', 18, 4, 7, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, '2018-02-09 14:35:03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, '2018-02-09 14:38:12', 12, 1, 1, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, '2018-02-09 14:38:39', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, '2018-02-09 14:38:39', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, '2018-02-09 14:38:47', 12, 1, 1, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, '2018-02-09 14:41:38', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, '2018-02-09 14:39:24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, '2018-02-09 14:44:28', 12, 1, 1, 16, 30, 34, 1, 1, 8, 27, 2, 1, 0, 0, 0, 0),
(60, '2018-02-09 14:49:39', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, '2018-02-09 14:49:43', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, '2018-02-09 15:13:34', 12, 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, '2018-02-09 15:15:24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, '2018-02-09 17:30:03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, '2018-02-09 17:30:11', 10, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, '2018-02-09 18:00:41', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, '2018-02-09 18:00:55', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, '2018-02-11 00:00:14', 6, 10, 19, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, '2018-02-12 15:24:57', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, '2018-02-12 15:35:06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, '2018-02-12 15:36:08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, '2018-02-12 15:37:27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, '2018-02-12 15:38:11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, '2018-02-12 15:40:58', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, '2018-02-12 15:41:56', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, '2018-02-12 15:41:56', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, '2018-02-12 15:44:54', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, '2018-02-12 15:47:08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, '2018-02-12 15:49:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, '2018-02-13 01:43:16', 3, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, '2018-02-13 01:43:49', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, '2018-02-13 01:43:54', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, '2018-02-13 02:24:23', 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, '2018-02-13 02:25:21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, '2018-02-13 04:11:46', 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, '2018-02-13 04:12:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempo_zona`
--

CREATE TABLE `tiempo_zona` (
  `id` int(11) NOT NULL,
  `tiempo` timestamp NOT NULL,
  `zona_1` int(11) NOT NULL DEFAULT '0',
  `zona_2` int(11) NOT NULL DEFAULT '0',
  `zona_3` int(11) NOT NULL DEFAULT '0',
  `zona_4` int(11) NOT NULL DEFAULT '0',
  `zona_5` int(11) NOT NULL DEFAULT '0',
  `zona_6` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valvulas_por_zonas`
--

CREATE TABLE `valvulas_por_zonas` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `zona_val1` int(11) NOT NULL DEFAULT '0',
  `zona_val2` int(11) NOT NULL DEFAULT '0',
  `zona_val3` int(11) NOT NULL DEFAULT '0',
  `zona_val4` int(11) NOT NULL DEFAULT '0',
  `zona_val5` int(11) NOT NULL DEFAULT '0',
  `zona_val6` int(11) NOT NULL DEFAULT '0',
  `zona_val7` int(11) NOT NULL DEFAULT '0',
  `zona_val8` int(11) NOT NULL DEFAULT '0',
  `zona_val9` int(11) NOT NULL DEFAULT '0',
  `zona_val10` int(11) NOT NULL DEFAULT '0',
  `zona_val11` int(11) NOT NULL DEFAULT '0',
  `zona_val12` int(11) NOT NULL DEFAULT '0',
  `zona_val13` int(11) NOT NULL DEFAULT '0',
  `zona_val14` int(11) NOT NULL DEFAULT '0',
  `zona_val15` int(11) NOT NULL DEFAULT '0',
  `zona_val16` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `valvulas_por_zonas`
--

INSERT INTO `valvulas_por_zonas` (`id`, `fecha`, `zona_val1`, `zona_val2`, `zona_val3`, `zona_val4`, `zona_val5`, `zona_val6`, `zona_val7`, `zona_val8`, `zona_val9`, `zona_val10`, `zona_val11`, `zona_val12`, `zona_val13`, `zona_val14`, `zona_val15`, `zona_val16`) VALUES
(1, '2018-01-03 22:22:30', 1, 2, 3, 4, 5, 6, 1, 2, 3, 4, 5, 6, 1, 2, 3, 4),
(2, '2018-01-04 02:48:09', 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 1, 2, 3, 4),
(5, '2018-02-01 17:05:45', 1, 2, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1),
(6, '2018-02-01 17:59:07', 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estados_valvula1`
--
ALTER TABLE `estados_valvula1`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `medicion_humedad`
--
ALTER TABLE `medicion_humedad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modo_activo`
--
ALTER TABLE `modo_activo`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `nuevo_horario`
--
ALTER TABLE `nuevo_horario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiempo_zona`
--
ALTER TABLE `tiempo_zona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `valvulas_por_zonas`
--
ALTER TABLE `valvulas_por_zonas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estados_valvula1`
--
ALTER TABLE `estados_valvula1`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de la tabla `medicion_humedad`
--
ALTER TABLE `medicion_humedad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `modo_activo`
--
ALTER TABLE `modo_activo`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT de la tabla `nuevo_horario`
--
ALTER TABLE `nuevo_horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `tiempo_zona`
--
ALTER TABLE `tiempo_zona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `valvulas_por_zonas`
--
ALTER TABLE `valvulas_por_zonas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
