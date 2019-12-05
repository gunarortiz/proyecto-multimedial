-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2019 a las 16:21:08
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `serietelevision`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor`
--

CREATE TABLE `actor` (
  `idactor` int(11) NOT NULL,
  `sueldo` int(11) DEFAULT NULL,
  `tipo` text,
  `anio_debut` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actor`
--

INSERT INTO `actor` (`idactor`, `sueldo`, `tipo`, `anio_debut`) VALUES
(1, 3500, 'Reparto', 2015),
(3, 5000, 'Protagonista', 2000),
(10, 4860, 'Secundario', 2013),
(15, 3800, 'Reparto', 2000),
(16, 5320, 'Secundario', 1980),
(19, 6500, 'Protagonista', 1998),
(25, 3400, 'Reparto', 1980),
(29, 4710, 'secundario', 2000),
(30, 7000, 'Protagonista', 1988),
(34, 3900, 'Extra', 1997),
(39, 4500, 'Secundario', 1981),
(41, 2500, 'Reparto', 2000),
(43, 7858, 'Protagonista', 2009),
(46, 6300, 'Protagonista', 2013),
(48, 3850, 'Reparto', 1994),
(52, 3964, 'Reparto', 2005),
(56, 9000, 'Protagonista', 2013),
(58, 3930, 'Reparto', 2015),
(60, 5500, 'Secundario', 1999),
(61, 3940, 'Reparto', 2016),
(62, 9800, 'Protagonista', 1991),
(63, 7632, 'Protagonista', 2004),
(66, 4700, 'Secundario', 2001),
(68, 3960, 'Reparto', 2010),
(70, 5800, 'Secundario', 2017),
(72, 4100, 'Extra', 1998),
(76, 4330, 'Secundario', 2013),
(78, 7800, 'Protagonista', 1985),
(80, 3555, 'Reparto', 2002),
(84, 7320, 'Protagonista', 2010),
(89, 4000, 'Extra', 2003),
(90, 4890, 'Secundario', 2000),
(91, 8900, 'Protagonista', 2014),
(92, 5500, 'Secundario', 2005),
(93, 3740, 'Reparto', 2012),
(95, 4800, 'Secundario', 2007),
(96, 4000, 'Reparto', 2008),
(97, 8410, 'Protagonista', 1999),
(98, 8000, 'Protagonista', 2007),
(100, 3800, 'Reparto', 2002),
(102, 6000, 'Secundario', 1995);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente`
--

CREATE TABLE `ambiente` (
  `idambiente` int(11) NOT NULL,
  `tipo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ambiente`
--

INSERT INTO `ambiente` (`idambiente`, `tipo`) VALUES
(301, 'Edificio en el centro'),
(302, 'Sur de Estados Unidos'),
(303, 'Ciudad en Londres'),
(304, 'New York'),
(305, 'California'),
(306, 'España'),
(307, 'Oeste de los Estados Unidos'),
(308, 'pais medieval'),
(309, 'Universidad de EEUU'),
(310, 'Casa familiar'),
(311, 'Campus Universitaro'),
(312, 'Condominios'),
(313, 'Hospital'),
(314, 'Vecindad'),
(315, 'Estacion de policias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistente`
--

CREATE TABLE `asistente` (
  `idasi` int(11) NOT NULL,
  `especialidad` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistente`
--

INSERT INTO `asistente` (`idasi`, `especialidad`) VALUES
(2, 'Maquillista'),
(5, 'Colaborador'),
(6, 'Maquillista'),
(9, 'Vestuario'),
(13, 'Maquillista'),
(14, 'Colaborador'),
(20, 'Vestuario'),
(21, 'Maquillista'),
(22, 'Maquillista'),
(24, 'Vestuario'),
(26, 'Maquillista'),
(28, 'Maquillista'),
(32, 'Colaborador'),
(33, 'Vestuario'),
(35, 'Maquillista'),
(38, 'Maquillista'),
(40, 'Vestuario'),
(42, 'Maquillista'),
(45, 'Maquillista'),
(47, 'Maquillista'),
(49, 'Colaborador'),
(50, 'Maquillista'),
(53, 'Colaborador'),
(55, 'Vestuario'),
(57, 'Maquillista'),
(65, 'Maquillista'),
(67, 'Vestuario'),
(69, 'Maquillista'),
(73, 'Colaborador'),
(74, 'Maquillista'),
(77, 'Maquillista'),
(82, 'Vestuario'),
(85, 'Maquillista'),
(86, 'Maquillista'),
(94, 'Colaborador'),
(99, 'Maquillista'),
(104, 'Maquillista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canal`
--

CREATE TABLE `canal` (
  `idcanal` int(11) NOT NULL,
  `nroemi` int(11) DEFAULT NULL,
  `nombrec` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `canal`
--

INSERT INTO `canal` (`idcanal`, `nroemi`, `nombrec`) VALUES
(201, 7, 'Bolivision'),
(202, 9, 'ATB'),
(203, 11, 'UNO'),
(204, 39, 'PAT'),
(205, 203, 'Fox-life'),
(206, 306, 'TNT Series'),
(207, 318, 'Warner Bros'),
(208, 321, 'AXN'),
(209, 330, 'FOX'),
(210, 333, 'FX'),
(211, 364, 'CineCanal'),
(212, 406, 'TNT'),
(213, 412, 'Golden'),
(214, 418, 'Studio'),
(215, 427, 'Space'),
(216, 430, 'Universal'),
(217, 618, 'el trece'),
(218, 624, 'Telemundo'),
(219, 812, 'Fox Series');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `idprog` int(11) NOT NULL,
  `idper` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`idprog`, `idper`) VALUES
(101, 2),
(101, 4),
(101, 5),
(101, 6),
(101, 7),
(101, 8),
(101, 9),
(101, 11),
(101, 13),
(101, 14),
(102, 17),
(102, 18),
(102, 20),
(102, 21),
(102, 22),
(102, 23),
(102, 26),
(103, 28),
(103, 31),
(103, 32),
(103, 33),
(104, 35),
(104, 36),
(104, 37),
(104, 38),
(104, 40),
(104, 42),
(105, 44),
(105, 45),
(105, 47),
(105, 49),
(105, 50),
(105, 51),
(105, 53),
(105, 54),
(105, 55),
(105, 57),
(106, 59),
(106, 65),
(106, 67),
(106, 69),
(106, 73),
(106, 74),
(106, 75),
(106, 77),
(106, 81),
(106, 82),
(106, 85),
(106, 86),
(107, 87),
(108, 94),
(109, 99),
(110, 101),
(110, 104),
(110, 105),
(111, 106),
(111, 107),
(111, 108),
(111, 109),
(112, 110),
(112, 111),
(112, 112),
(113, 114),
(114, 115),
(115, 116),
(115, 117),
(115, 118),
(115, 119),
(115, 120),
(115, 121),
(115, 122),
(115, 123),
(115, 124),
(115, 125);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `iddire` int(11) NOT NULL,
  `cargo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`iddire`, `cargo`) VALUES
(4, 'Escenografo'),
(7, 'Guionista'),
(8, 'Productor'),
(11, 'Escenografo'),
(12, 'Guionista'),
(17, 'Escenografo'),
(18, 'Productor'),
(23, 'Escenografo'),
(31, 'Productor'),
(36, 'Guionista'),
(37, 'Escenografo'),
(44, 'Productor'),
(51, 'Escenografo'),
(54, 'Productor'),
(59, 'Guionista'),
(75, 'Escenografo'),
(81, 'Escenografo'),
(87, 'Escenografo'),
(101, 'Productor'),
(115, 'Escenografo'),
(116, 'Guionista'),
(117, 'Guionista'),
(118, 'Productor'),
(119, 'Escenografo'),
(120, 'Guionista'),
(121, 'Escenografo'),
(122, 'Productor'),
(123, 'Escenografo'),
(124, 'Guionista'),
(125, 'Escenografo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `episodio`
--

CREATE TABLE `episodio` (
  `idepi` int(11) NOT NULL,
  `nombre` text,
  `nrotemporada` int(11) DEFAULT NULL,
  `idProg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `episodio`
--

INSERT INTO `episodio` (`idepi`, `nombre`, `nrotemporada`, `idProg`) VALUES
(1, 'La hipotesis del gran cerebro', 1, 101),
(2, 'El experto del saltamontes', 1, 101),
(3, 'La dualidad de Jerusalen', 1, 101),
(4, 'La topologia de la bragueta', 2, 101),
(5, 'La alternativa de Euclides', 2, 101),
(6, 'El algoritmo de la amistad', 2, 101),
(7, 'El vortex psiquico', 3, 101),
(8, 'La aproximacion de Einstein', 3, 101),
(9, 'La liga de la justicia: Recombinacion', 4, 101),
(10, 'Loa glosbos y las tijeras', 1, 102),
(11, 'Un banio para el chavo', 1, 102),
(12, 'El ropavejero', 2, 102),
(14, 'Don ramon peluquero', 3, 102),
(15, 'Las escondidas y la caja de madera', 5, 102),
(16, 'Año nuevo en casa de don Ramon', 6, 102),
(17, 'Showmance', 1, 103),
(18, 'Acafellas', 1, 103),
(19, 'Preggers', 1, 103),
(20, 'The new Rachel', 4, 103),
(21, 'Glease', 4, 103),
(22, 'I do', 4, 103),
(23, 'trio', 5, 103),
(24, '100', 5, 103),
(25, 'Cat in the bag', 1, 104),
(26, 'Grilled', 2, 104),
(27, 'Green light', 3, 104),
(28, 'Box Cutter', 4, 104),
(29, 'Madrigal', 5, 104),
(30, 'Episodio 1', 1, 105),
(31, 'Episodio 2', 1, 105),
(32, 'Semillas', 1, 106),
(33, 'La feria', 1, 106),
(34, 'Eureka', 2, 106),
(35, 'La cuidadora', 3, 106),
(36, 'Fruta para los cuervos', 4, 106),
(37, 'Ritos de iniciacion', 1, 107),
(38, 'Despojados', 1, 107),
(39, 'El funeral', 1, 107),
(40, 'El rescate de un rey', 1, 107),
(41, 'Paris', 3, 107),
(42, '46 largo', 1, 108),
(43, 'Universidad', 1, 108),
(44, 'Un hijo afortunado', 3, 108),
(45, 'Una segunda opinion', 3, 108),
(46, 'Los dos Tonys', 5, 108),
(47, 'Days gone Bye', 1, 109),
(48, 'Guts', 1, 109),
(49, 'Secrets', 1, 109),
(50, 'Seed', 2, 109),
(51, 'The suicide King', 3, 109),
(52, 'Crossed', 5, 109),
(53, 'Conquer', 5, 109),
(54, 'Go Getters', 7, 109),
(55, 'Estudio rosa', 1, 110),
(56, 'El banquero ciego', 1, 110),
(57, 'La carroza funebre vacia', 2, 110),
(58, 'El detective mentiroso', 4, 110),
(59, 'El problema final', 4, 110),
(60, 'El de la ecografia al final', 1, 111),
(61, 'El del poker', 1, 111),
(62, 'El del bebe en el autobus', 2, 111),
(63, 'El de la varicela', 2, 111),
(64, 'El de los Kips', 5, 111),
(65, 'La huida', 1, 112),
(66, 'Crisis matrimonial', 1, 112),
(67, 'El reencuentro', 1, 112),
(68, 'El amor perdurara', 1, 112),
(69, 'Tabula Rasa', 1, 113),
(70, 'Hearts and Mind', 1, 113),
(71, 'Collision', 2, 113),
(72, 'The long Con', 2, 113),
(73, '316', 5, 113),
(74, 'Primera fase completa', 1, 114),
(75, 'Tabaco y feromonas', 1, 114),
(76, 'Un saco lleno de corchos', 2, 114),
(77, 'Si, nomseñor', 2, 114),
(78, 'Algo salado y redondo', 3, 114),
(79, 'Suelten a los perros', 4, 114),
(80, 'Manta Odera, monja', 1, 115),
(81, 'Emilia Brasil, cocinera', 1, 115),
(82, 'Margarita, la maldita', 1, 115),
(83, 'Loenor, la madrastra', 2, 115),
(84, 'Pilar, esposa', 2, 115),
(85, 'Claudia, herida', 3, 115),
(86, 'Milagros, pastora', 3, 115),
(87, 'Dolores, poseida', 4, 115),
(88, 'Alicia, deudora', 4, 115);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escena`
--

CREATE TABLE `escena` (
  `nroescena` int(11) NOT NULL,
  `idepi` int(11) NOT NULL,
  `duracion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `escena`
--

INSERT INTO `escena` (`nroescena`, `idepi`, `duracion`) VALUES
(1, 1, '20 minutos'),
(1, 2, '20 minutos'),
(1, 3, '20 minutos'),
(1, 4, '20 minutos'),
(1, 5, '20 minutos'),
(1, 6, '20 minutos'),
(1, 7, '20 minutos'),
(1, 8, '20 minutos'),
(1, 9, '20 minutos'),
(1, 10, '20 minutos'),
(1, 11, '20 minutos'),
(1, 12, '20 minutos'),
(1, 13, '20 minutos'),
(1, 14, '20 minutos'),
(1, 15, '20 minutos'),
(1, 16, '20 minutos'),
(1, 17, '20 minutos'),
(1, 18, '20 minutos'),
(1, 19, '20 minutos'),
(1, 20, '20 minutos'),
(1, 21, '20 minutos'),
(1, 22, '20 minutos'),
(1, 23, '22 minutos'),
(1, 24, '20 minutos'),
(1, 25, '22 minutos'),
(1, 26, '22 minutos'),
(1, 27, '22 minutos'),
(1, 28, '22 minutos'),
(1, 29, '22 minutos'),
(1, 30, '25 minutos'),
(1, 31, '25 minutos'),
(1, 32, '15 minutos'),
(1, 33, '15 minutos'),
(1, 34, '15 minutos'),
(1, 35, '15 minutos'),
(1, 36, '15 minutos'),
(1, 37, '22 minutos'),
(1, 38, '22 minutos'),
(1, 39, '22 minutos'),
(1, 40, '22 minutos'),
(1, 41, '22 minutos'),
(1, 47, '15 minutos'),
(1, 48, '15 minutos'),
(1, 49, '15 minutos'),
(1, 50, '15 minutos'),
(1, 51, '15 minutos'),
(1, 52, '15 minutos'),
(1, 53, '15 minutos'),
(1, 54, '15 minutos'),
(1, 55, '20 minutos'),
(1, 56, '20 minutos'),
(1, 57, '20 minutos'),
(1, 58, '20 minutos'),
(1, 59, '20 minutos'),
(1, 60, '15 minutos'),
(1, 61, '15 minutos'),
(1, 62, '15 minutos'),
(1, 63, '15 minutos'),
(1, 64, '15 minutos'),
(1, 65, '20 minutos'),
(1, 66, '20 minutos'),
(1, 67, '20 minutos'),
(1, 68, '20 minutos'),
(1, 69, '22 minutos'),
(1, 70, '22 minutos'),
(1, 71, '22 minutos'),
(1, 72, '22 minutos'),
(1, 73, '22 minutos'),
(1, 74, '25 minutos'),
(1, 75, '25 minutos'),
(1, 76, '25 minutos'),
(1, 77, '25 minutos'),
(1, 78, '25 minutos'),
(1, 79, '25 minutos'),
(1, 80, '15 minutos'),
(1, 81, '15 minutos'),
(1, 82, '15 minutos'),
(1, 83, '15 minutos'),
(1, 84, '15 minutos'),
(1, 85, '15 minutos'),
(1, 86, '15 minutos'),
(1, 87, '15 minutos'),
(1, 88, '15 minutos'),
(2, 1, '25 minutos'),
(2, 2, '25 minutos'),
(2, 3, '25 minutos'),
(2, 4, '25 minutos'),
(2, 5, '25 minutos'),
(2, 6, '25 minutos'),
(2, 7, '25 minutos'),
(2, 8, '25 minutos'),
(2, 9, '25 minutos'),
(2, 10, '22 minutos'),
(2, 11, '22 minutos'),
(2, 12, '22 minutos'),
(2, 13, '22 minutos'),
(2, 14, '22 minutos'),
(2, 15, '22 minutos'),
(2, 16, '22 minutos'),
(2, 17, '22 minutos'),
(2, 18, '22 minutos'),
(2, 19, '22 minutos'),
(2, 20, '22 minutos'),
(2, 21, '22 minutos'),
(2, 22, '20 minutos'),
(2, 23, '22 minutos'),
(2, 24, '22 minutos'),
(2, 25, '25 minutos'),
(2, 26, '25 minutos'),
(2, 27, '25 minutos'),
(2, 28, '25 minutos'),
(2, 29, '25 minutos'),
(2, 30, '20 minutos'),
(2, 31, '20 minutos'),
(2, 32, '15 minutos'),
(2, 33, '15 minutos'),
(2, 34, '15 minutos'),
(2, 35, '15 minutos'),
(2, 36, '15 minutos'),
(2, 37, '20 minutos'),
(2, 38, '20 minutos'),
(2, 39, '20 minutos'),
(2, 40, '20 minutos'),
(2, 41, '20 minutos'),
(2, 47, '15 minutos'),
(2, 48, '15 minutos'),
(2, 49, '15 minutos'),
(2, 50, '15 minutos'),
(2, 51, '15 minutos'),
(2, 52, '15 minutos'),
(2, 53, '15 minutos'),
(2, 54, '15 minutos'),
(2, 55, '20 minutos'),
(2, 56, '20 minutos'),
(2, 57, '20 minutos'),
(2, 58, '20 minutos'),
(2, 59, '20 minutos'),
(2, 60, '20 minutos'),
(2, 61, '20 minutos'),
(2, 62, '20 minutos'),
(2, 63, '20 minutos'),
(2, 64, '20 minutos'),
(2, 65, '20 minutos'),
(2, 66, '20 minutos'),
(2, 67, '20 minutos'),
(2, 68, '20 minutos'),
(2, 69, '21 minutos'),
(2, 70, '21 minutos'),
(2, 71, '21 minutos'),
(2, 72, '21 minutos'),
(2, 73, '21 minutos'),
(2, 74, '20 minutos'),
(2, 75, '20 minutos'),
(2, 76, '20 minutos'),
(2, 77, '20 minutos'),
(2, 78, '20 minutos'),
(2, 79, '20 minutos'),
(2, 80, '25 minutos'),
(2, 81, '25 minutos'),
(2, 82, '25 minutos'),
(2, 83, '25 minutos'),
(2, 84, '25 minutos'),
(2, 85, '25 minutos'),
(2, 86, '25 minutos'),
(2, 87, '25 minutos'),
(2, 88, '25 minutos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `nombre` text,
  `apellido` text,
  `ci` int(11) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `telefono` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `nombre`, `apellido`, `ci`, `fecha_nac`, `telefono`) VALUES
(1, 'Antonio', 'Perez', 123456, '1996-08-22', '78963258'),
(2, 'Anahi', 'Huanca', 123457, '1998-02-01', '78963259'),
(3, 'Jenry', 'Marupa', 123458, '1986-09-12', '78963288'),
(4, 'Limbert', 'Calle', 123459, '1990-10-15', '78964258'),
(5, 'Silenia', 'Tirina', 123460, '1980-06-29', '73963258'),
(6, 'Daniel', 'Calle', 123461, '1994-01-10', '78063258'),
(7, 'Elvis', 'Apaza', 123462, '1997-03-09', '78763258'),
(8, 'kery', 'Flower', 123463, '1996-05-20', '79963158'),
(9, 'Yuliana', 'Cartajena', 123464, '1998-06-28', '69963158'),
(10, 'Ludui', 'Maroma', 123465, '1990-04-18', '78963158'),
(11, 'Jimy', 'Apaza', 123466, '1989-05-28', '78863158'),
(12, 'Nayeli', 'Villegas', 123467, '1988-01-20', '79900158'),
(13, 'Kensi', 'Katawari', 123468, '1978-07-08', '66963158'),
(14, 'Judith', 'Mamani', 123469, '1984-05-01', '67963158'),
(15, 'Brandon', 'Magne', 123470, '1987-04-10', '63963058'),
(16, 'Belen', 'Apaza', 123471, '1965-12-16', '79003158'),
(17, 'Beatriz', 'Suxo', 123472, '1970-11-14', '78963008'),
(18, 'Jhonatan', 'Condori', 123473, '1965-08-20', '70063158'),
(19, 'Gerardo', 'Chambi', 123474, '1984-04-16', '79963036'),
(20, 'Mishel', 'Tapia', 123475, '1970-12-25', '66963189'),
(21, 'Maria', 'Lobos', 123476, '1958-09-12', '69963100'),
(22, 'Pablo', 'Cutipa', 123477, '1959-06-14', '69900157'),
(23, 'Maria', 'Paucara', 123478, '1963-10-20', '70063151'),
(24, 'Noemi', 'Copa', 123479, '1969-09-16', '60963100'),
(25, 'Esther', 'Salazar', 123480, '1978-03-29', '79963106'),
(26, 'Margot', 'Flores', 123481, '1988-07-02', '78900157'),
(27, 'Brayan', 'Rojas', 123482, '1969-11-30', '78603100'),
(28, 'Ademar', 'Villareal', 123483, '1978-07-15', '7893166'),
(29, 'Elinge', 'Mamani', 123484, '1960-12-09', '60963189'),
(30, 'Ricardo', 'Tarqui', 123485, '1998-08-09', '60063155'),
(31, 'Leonardo', 'Dicaprio', 123486, '1966-08-18', '74963569'),
(32, 'Pablo', 'Apaza', 123487, '1990-02-19', '70963151'),
(33, 'Sebastian', 'Conde', 123488, '1989-10-25', '69963154'),
(34, 'Alejandro', 'Gamboa', 123489, '1974-05-30', '68963157'),
(35, 'Jamilton', 'Perez', 123490, '1983-09-05', '79863248'),
(36, 'Jorge', 'Intipampa', 123500, '1985-07-21', '70960051'),
(37, 'Julio', 'Quiroz', 123501, '1971-08-11', '71163115'),
(38, 'Isac', 'Ramos', 123502, '1978-04-23', '79063128'),
(39, 'Yerson', 'Salazar', 123503, '1980-08-19', '71963268'),
(40, 'Alonso', 'Reyes', 123504, '1945-08-15', '69063159'),
(41, 'Franz', 'Tincuta', 123505, '1962-03-08', '60963153'),
(42, 'Paola', 'Canaviri', 123506, '1969-08-01', '66963136'),
(43, 'Kenyi', 'Irupana', 123507, '1981-06-13', '67963189'),
(44, 'Hiroshi', 'Jimenez', 123508, '1990-07-16', '67963100'),
(45, 'Jenry', 'Pampa', 123509, '1992-04-03', '67963114'),
(46, 'Dayana', 'Montes', 123600, '1989-05-08', '67963132'),
(47, 'Noemi', 'Villa', 123601, '1987-03-29', '68963157'),
(48, 'Elvira', 'Oruño', 123602, '1991-01-14', '68963100'),
(49, 'Lizbeth', 'Villareal', 123603, '1974-09-16', '68963108'),
(50, 'Veronica', 'Mamani', 123604, '1978-05-12', '68963155'),
(51, 'Sonia', 'Alarcon', 123605, '1979-08-10', '68963123'),
(52, 'Gustavo', 'Callisaya', 123606, '1973-08-19', '68963198'),
(53, 'Beimar', 'Ramirez', 123607, '1990-09-18', '68963688'),
(54, 'Gladys', 'Ruiz', 123608, '1980-02-07', '68963159'),
(55, 'Santusa', 'Lipan', 123609, '1978-04-06', '68962152'),
(56, 'Pablo', 'Colque', 123701, '1986-09-17', '68963950'),
(57, 'Erixon', 'Rejas', 123702, '1989-08-21', '68063150'),
(58, 'Edith', 'Nina', 123703, '1995-08-14', '68963101'),
(59, 'Esther', 'Quisberth', 123704, '1975-03-05', '71963248'),
(60, 'Agustin', 'Cahuaya', 123705, '1987-07-18', '71963258'),
(61, 'Daniel', 'Chambilla', 123706, '1989-10-28', '71963198'),
(62, 'Leonardo', 'Chacayupa', 123707, '1968-12-12', '71963197'),
(63, 'Itati', 'Venegas', 123708, '1981-08-09', '71963111'),
(64, 'Clara', 'Rojas', 123709, '1987-04-19', '71963122'),
(65, 'Maria', 'Espejo', 123801, '1996-07-14', '71963133'),
(66, 'Ruth', 'Jahuira', 123802, '1980-11-27', '71963144'),
(67, 'Noelia', 'Gutierrez', 123803, '1968-09-11', '71963155'),
(68, 'Maribel', 'Poncel', 123804, '1984-04-27', '71963156'),
(69, 'Neisy', 'Lipana', 123805, '1985-06-04', '71963157'),
(70, 'Ronald', 'Ramos', 123806, '1989-05-09', '71961158'),
(71, 'Rosa', 'Humerez', 123807, '1978-01-05', '71163160'),
(72, 'Josefina', 'Choquehuanca', 123808, '1978-07-28', '72263151'),
(73, 'Antonio', 'Marca', 123809, '1971-01-27', '71863156'),
(74, 'Williams', 'Aruquipa', 123900, '1991-10-18', '76663157'),
(75, 'Jhesica', 'Layme', 123901, '1987-12-27', '73663151'),
(76, 'Aide', 'Villanueva', 123902, '1988-10-03', '79900001'),
(77, 'Abigail', 'Susara', 123903, '1984-11-07', '79963000'),
(78, 'Susan', 'Millan', 1234904, '1954-07-18', '78863150'),
(79, 'Luis', 'Ticona', 1234905, '1979-08-17', '78863198'),
(80, 'Julian', 'Gutierrez', 123906, '1980-04-13', '77963189'),
(81, 'Spenser', 'Nina', 123907, '1986-09-16', '77963123'),
(82, 'Maicol', 'Alcon', 123908, '1976-08-20', '77963154'),
(83, 'Ruddy', 'Parisaca', 123909, '1987-02-12', '77969158'),
(84, 'Daniela', 'Gironda', 121234, '1990-08-14', '77963150'),
(85, 'Joel', 'Huanca', 124123, '1996-08-10', '77960150'),
(86, 'Misael', 'Cuentas', 124234, '1984-01-28', '77963129'),
(87, 'Wilmer', 'Hilarion', 124345, '1974-01-24', '77063151'),
(88, 'Benjamin', 'Acero', 124456, '1993-05-14', '77963174'),
(89, 'Miguel', 'Calle', 124567, '1981-04-17', '76763150'),
(90, 'Ignacio', 'Gomez', 124678, '1989-04-02', '61112584'),
(91, 'Helen', 'Rivera', 124789, '1990-03-17', '61234567'),
(92, 'Denilson', 'Magne', 124890, '1981-09-21', '67895412'),
(93, 'Cristian', 'Laruta', 125123, '1997-08-14', '63254178'),
(94, 'Edgar', 'Espinoza', 125234, '1987-06-27', '69235874'),
(95, 'Dario', 'Rios', 125345, '1985-07-05', '65893214'),
(96, 'Milton', 'Llanos', 125456, '1987-04-19', '76985423'),
(97, 'Elmer', 'Cutipa', 125567, '1985-11-18', '75632841'),
(98, 'Moises', 'Fernandez', 125678, '1987-10-23', '78563241'),
(99, 'Jaime', 'Yupanqui', 125789, '1989-12-19', '79321458'),
(100, 'Denilson', 'Martinez', 125890, '1984-03-29', '63297851'),
(101, 'Alvaro', 'Orosco', 126120, '1989-02-23', '61598474'),
(102, 'Americo', 'Flores', 126234, '1980-10-19', '61328954'),
(103, 'Belinda', 'Quiroz', 185962, '1990-09-14', '64987352'),
(104, 'Roberto', 'Mata', 298654, '1976-07-07', '63987452'),
(105, 'Paul', 'Mullisaca', 298655, '1978-08-09', '63987400'),
(106, 'Fanny', 'Poma', 298656, '1985-04-15', '63900452'),
(107, 'Walter', 'Jahuira', 298657, '1987-09-25', '60087452'),
(108, 'Yilda', 'Nuñez', 298658, '1971-10-14', '63000052'),
(109, 'Lorena', 'Riveralta', 298659, '1979-11-16', '67987400'),
(110, 'Tatiana', 'Zurita', 298660, '1980-05-12', '60907050'),
(111, 'Grover', 'Bilbao', 298671, '1981-09-25', '67987477'),
(112, 'Saul', 'Sanchez', 298672, '1982-10-17', '67977472'),
(113, 'Danilo', 'Choque', 298673, '1985-12-19', '66967656'),
(114, 'Rita', 'Alvarez', 298674, '1990-08-17', '65957555'),
(115, 'Alfredo', 'Gomez', 298675, '1973-11-14', '63888852'),
(116, 'Estela', 'Choquerive', 298676, '1979-06-13', '63981111'),
(117, 'Britany', 'Humerez', 298677, '1987-07-07', '63937353'),
(118, 'Mauricio', 'Suarez', 298678, '1982-10-14', '64447454'),
(119, 'Norma', 'Gutierrez', 298679, '1986-07-24', '63987002'),
(120, 'Valeria', 'Calle', 298681, '1976-02-23', '60000452'),
(121, 'Diego', 'Loza', 298682, '1979-09-28', '63000000'),
(122, 'Emma', 'Fernandez', 298683, '1986-04-18', '63777752'),
(123, 'Patricia', 'Machaca', 298684, '1982-09-10', '6777882'),
(124, 'Omar', 'Velasquez', 298685, '1989-03-16', '61111111'),
(125, 'Miranda', 'Luna', 298686, '1982-05-01', '63982222');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personalproduccion`
--

CREATE TABLE `personalproduccion` (
  `idper` int(11) NOT NULL,
  `turno` text,
  `sueldo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personalproduccion`
--

INSERT INTO `personalproduccion` (`idper`, `turno`, `sueldo`) VALUES
(2, 'Mañana', 3562),
(4, 'Mañana', 5600),
(5, 'Tarde', 5200),
(6, 'Noche', 4000),
(7, 'Mañana', 4350),
(8, 'Noche', 3000),
(9, 'Mañana', 3875),
(11, 'Tarde', 6500),
(12, 'Tarde', 7852),
(13, 'Noche', 6350),
(14, 'Mañana', 3254),
(17, 'Mañana', 3875),
(18, 'Noche', 4987),
(20, 'Mañana', 5000),
(21, 'Mañana', 6320),
(22, 'Noche', 9620),
(23, 'Tarde', 2000),
(24, 'Mañana', 6300),
(26, 'Tarde', 8799),
(28, 'Mañana', 7400),
(31, 'Noche', 7100),
(32, 'Tarde', 7001),
(33, 'Mañana', 6542),
(35, 'Noche', 6320),
(36, 'Mañana', 6020),
(37, 'Tarde', 3800),
(38, 'Noche', 3920),
(40, 'Mañana', 3814),
(42, 'Mañana', 4536),
(44, 'Tarde', 4862),
(45, 'Noche', 4721),
(47, 'Mañana', 4500),
(49, 'Noche', 3500),
(50, 'Mañana', 3900),
(51, 'Tarde', 3714),
(53, 'Tarde', 5236),
(54, 'Noche', 4630),
(55, 'Mañana', 4920),
(57, 'Mañana', 5600),
(59, 'Tarde', 8562),
(65, 'Noche', 7400),
(67, 'Mañana', 4590),
(69, 'Mañana', 3000),
(73, 'Tarde', 3578),
(74, 'Tarde', 3700),
(75, 'Mañana', 5400),
(77, 'Noche', 5900),
(81, 'Mañana', 5630),
(82, 'Tarde', 4100),
(85, 'Noche', 4920),
(86, 'Mañana', 3600),
(87, 'Mañana', 3825),
(94, 'Tarde', 3120),
(99, 'Noche', 3913),
(101, 'Mañana', 7420),
(104, 'Tarde', 8520),
(105, 'Mañana', 7520),
(106, 'Tarde', 4520),
(107, 'Noche', 6000),
(108, 'Mañana', 7000),
(109, 'Noche', 5020),
(110, 'Tarde', 5420),
(111, 'Mañana', 3020),
(112, 'Noche', 2999),
(113, 'Noche', 3650),
(114, 'Tarde', 6530),
(115, 'Tarde', 7012),
(116, 'Mañana', 4563),
(117, 'Tarde', 3654),
(118, 'Noche', 4789),
(119, 'Mañana', 5200),
(120, 'Tarde', 4600),
(121, 'Tarde', 6300),
(122, 'Mañana', 8000),
(123, 'Noche', 8010),
(124, 'Noche', 4520),
(125, 'Tarde', 5200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posee`
--

CREATE TABLE `posee` (
  `idprog` int(11) NOT NULL,
  `idactor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `posee`
--

INSERT INTO `posee` (`idprog`, `idactor`) VALUES
(101, 1),
(101, 3),
(101, 10),
(101, 15),
(101, 16),
(101, 19),
(101, 25),
(101, 29),
(101, 30),
(101, 34),
(102, 39),
(102, 41),
(102, 43),
(102, 46),
(102, 48),
(103, 52),
(103, 56),
(103, 58),
(103, 60),
(103, 61),
(103, 62),
(103, 63),
(103, 66),
(104, 68),
(104, 70),
(104, 72),
(104, 76),
(104, 78),
(104, 80),
(105, 84),
(105, 89),
(105, 90),
(105, 91),
(105, 92),
(106, 93),
(107, 95),
(108, 96),
(109, 97),
(110, 98),
(111, 100),
(112, 102);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `idprog` int(11) NOT NULL,
  `nombre` text,
  `genero` text,
  `nrotemporadas` int(11) DEFAULT NULL,
  `pais` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`idprog`, `nombre`, `genero`, `nrotemporadas`, `pais`) VALUES
(101, 'The big bang theory', 'Comedia', 12, 'EEUU'),
(102, 'El chavo del 8', 'Comedia', 8, 'Mexico'),
(103, 'Glee', 'Comedia-Musical', 6, 'EEUU'),
(104, 'Breaking Bad', 'Drama', 5, 'EEUU'),
(105, 'El Capo', 'Telenovela', 3, 'Colombia'),
(106, 'Hijos de la anarquia', 'Drama-Crimen', 7, 'EEUU'),
(107, 'Vikingos', 'Aventura-Drama', 5, 'Canada'),
(108, 'Los Soprano', 'Drama', 6, 'EEUU'),
(109, 'The walking Dead', 'Drama-Terror', 9, 'EEUU'),
(110, 'Sherlock', 'Aventura-Drama', 4, 'Reino Unido'),
(111, 'Friends', 'comedia', 10, 'EEUU'),
(112, 'Hermanos', 'Drama-Guerra', 1, 'Espania'),
(113, 'Lost', 'Drama-Ciencia Ficcion', 6, 'EEUU'),
(114, 'Dos hombres y medio', 'comedia', 12, 'EEUU'),
(115, 'Mujeres Asesinas', 'Telenovela', 4, 'Argentina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_realiza`
--

CREATE TABLE `se_realiza` (
  `idambiente` int(11) NOT NULL,
  `idprog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `se_realiza`
--

INSERT INTO `se_realiza` (`idambiente`, `idprog`) VALUES
(301, 101),
(302, 102),
(303, 103),
(304, 104),
(305, 105),
(306, 106),
(307, 107),
(308, 108),
(309, 109),
(310, 110),
(311, 111),
(312, 112),
(313, 113),
(314, 114),
(315, 115);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_transmite`
--

CREATE TABLE `se_transmite` (
  `idcanal` int(11) NOT NULL,
  `idepi` int(11) NOT NULL,
  `hora_ini` text,
  `hora_fin` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `se_transmite`
--

INSERT INTO `se_transmite` (`idcanal`, `idepi`, `hora_ini`, `hora_fin`) VALUES
(201, 1, '14:00', '15:00'),
(201, 2, '15:00', '16:00'),
(201, 3, '16:00', '17:00'),
(201, 4, '17:00', '18:00'),
(201, 5, '18:00', '19:00'),
(201, 6, '19:00', '20:00'),
(201, 7, '20:00', '21:00'),
(201, 8, '21:00', '22:00'),
(201, 9, '22:00', '23:00'),
(201, 10, '23:00', '00:00'),
(201, 11, '00:00', '1:00'),
(202, 12, '14:00', '15:00'),
(202, 14, '15:00', '16:00'),
(202, 15, '16:00', '17:00'),
(202, 16, '17:00', '18:00'),
(202, 17, '18:00', '19:00'),
(202, 18, '19:00', '20:00'),
(202, 19, '20:00', '21:00'),
(202, 20, '21:00', '22:00'),
(202, 21, '22:00', '23:00'),
(202, 22, '23:00', '00:00'),
(202, 23, '00:00', '1:00'),
(203, 24, '14:00', '15:00'),
(203, 25, '15:00', '16:00'),
(203, 26, '16:00', '17:00'),
(203, 27, '17:00', '18:00'),
(204, 28, '14:00', '15:00'),
(204, 29, '15:00', '16:00'),
(204, 30, '16:00', '17:00'),
(204, 31, '17:00', '18:00'),
(205, 32, '14:00', '15:00'),
(205, 33, '15:00', '16:00'),
(205, 34, '16:00', '17:00'),
(205, 35, '17:00', '18:00'),
(206, 36, '21:00', '22:00'),
(206, 37, '22:00', '23:00'),
(206, 38, '23:00', '00:00'),
(206, 39, '00:00', '1:00'),
(207, 40, '18:00', '19:00'),
(207, 41, '19:00', '20:00'),
(207, 42, '20:00', '21:00'),
(207, 43, '21:00', '22:00'),
(208, 44, '18:00', '19:00'),
(208, 45, '19:00', '20:00'),
(208, 46, '20:00', '21:00'),
(208, 47, '21:00', '22:00'),
(209, 48, '18:00', '19:00'),
(209, 49, '19:00', '20:00'),
(209, 50, '20:00', '21:00'),
(209, 51, '21:00', '22:00'),
(210, 52, '16:00', '17:00'),
(210, 53, '17:00', '18:00'),
(210, 54, '18:00', '19:00'),
(210, 55, '19:00', '20:00'),
(211, 56, '16:00', '17:00'),
(211, 57, '17:00', '18:00'),
(211, 58, '18:00', '19:00'),
(211, 59, '19:00', '20:00'),
(212, 60, '16:00', '17:00'),
(212, 61, '17:00', '18:00'),
(212, 62, '18:00', '19:00'),
(212, 63, '19:00', '20:00'),
(213, 64, '18:00', '19:00'),
(213, 65, '19:00', '20:00'),
(213, 66, '20:00', '21:00'),
(214, 67, '16:00', '17:00'),
(214, 68, '17:00', '18:00'),
(214, 69, '18:00', '19:00'),
(215, 70, '16:00', '17:00'),
(215, 71, '17:00', '18:00'),
(215, 72, '18:00', '19:00'),
(216, 73, '16:00', '17:00'),
(216, 74, '17:00', '18:00'),
(216, 75, '18:00', '19:00'),
(217, 76, '16:00', '17:00'),
(217, 77, '17:00', '18:00'),
(217, 78, '18:00', '19:00'),
(218, 79, '16:00', '17:00'),
(218, 80, '17:00', '18:00'),
(218, 81, '18:00', '19:00'),
(219, 82, '16:00', '17:00'),
(219, 83, '17:00', '18:00'),
(219, 84, '18:00', '19:00'),
(219, 85, '20:00', '21:00'),
(219, 86, '21:00', '22:00'),
(219, 87, '22:00', '23:00'),
(219, 88, '23:00', '00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico`
--

CREATE TABLE `tecnico` (
  `idtec` int(11) NOT NULL,
  `mat_trabajo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tecnico`
--

INSERT INTO `tecnico` (`idtec`, `mat_trabajo`) VALUES
(4, 'guion'),
(5, 'maquinaria'),
(8, 'operario'),
(9, 'escenografia'),
(11, 'maquinaria'),
(17, 'operario'),
(18, 'operario'),
(20, 'electricista'),
(22, 'maquinaria'),
(24, 'maquinaria'),
(26, 'operario'),
(28, 'electricista'),
(31, 'maquinaria'),
(33, 'escenografia'),
(35, 'operario'),
(36, 'operario'),
(37, 'guion'),
(38, 'maquinaria'),
(42, 'guion'),
(44, 'electricista'),
(47, 'operario'),
(49, 'maquinaria'),
(50, 'escenografia'),
(53, 'escenografia'),
(54, 'maquinaria'),
(55, 'operario'),
(57, 'Electricista'),
(59, 'guion'),
(65, 'maquinaria'),
(73, 'operario'),
(74, 'escenografia'),
(75, 'operario'),
(77, 'maquinaria'),
(81, 'operario'),
(86, 'guion'),
(94, 'electricista'),
(99, 'maquinaria'),
(104, 'electricista'),
(105, 'operario'),
(106, 'escenografia'),
(107, 'operario'),
(108, 'electricista'),
(109, 'operario'),
(110, 'operario'),
(111, 'electricista'),
(112, 'operario'),
(113, 'maquinaria'),
(114, 'escenografia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`idactor`);

--
-- Indices de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD PRIMARY KEY (`idambiente`);

--
-- Indices de la tabla `asistente`
--
ALTER TABLE `asistente`
  ADD PRIMARY KEY (`idasi`);

--
-- Indices de la tabla `canal`
--
ALTER TABLE `canal`
  ADD PRIMARY KEY (`idcanal`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`idprog`,`idper`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`iddire`);

--
-- Indices de la tabla `episodio`
--
ALTER TABLE `episodio`
  ADD PRIMARY KEY (`idepi`),
  ADD KEY `idProg` (`idProg`);

--
-- Indices de la tabla `escena`
--
ALTER TABLE `escena`
  ADD PRIMARY KEY (`nroescena`,`idepi`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`);

--
-- Indices de la tabla `personalproduccion`
--
ALTER TABLE `personalproduccion`
  ADD PRIMARY KEY (`idper`);

--
-- Indices de la tabla `posee`
--
ALTER TABLE `posee`
  ADD PRIMARY KEY (`idprog`,`idactor`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`idprog`);

--
-- Indices de la tabla `se_realiza`
--
ALTER TABLE `se_realiza`
  ADD PRIMARY KEY (`idambiente`,`idprog`);

--
-- Indices de la tabla `se_transmite`
--
ALTER TABLE `se_transmite`
  ADD PRIMARY KEY (`idcanal`,`idepi`);

--
-- Indices de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`idtec`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `episodio`
--
ALTER TABLE `episodio`
  ADD CONSTRAINT `episodio_ibfk_1` FOREIGN KEY (`idProg`) REFERENCES `programa` (`idProg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
