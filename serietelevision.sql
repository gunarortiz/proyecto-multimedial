-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2019 a las 02:35:18
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

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
  `idactor` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `sueldo` int(11) DEFAULT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anio_debut` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `actor`
--

INSERT INTO `actor` (`idactor`, `sueldo`, `tipo`, `anio_debut`) VALUES
('act1', 1600, 'Secundario', '2010-07-17'),
('act10', 1600, 'Secundario', '1996-07-17'),
('act11', 1600, 'Secundario', '2010-12-15'),
('act12', 1600, 'Secundario', '2015-07-16'),
('act13', 1600, 'Reparto', '1980-07-18'),
('act14', 1600, 'Figurante', '1999-07-19'),
('act15', 1600, 'Pequeño', '1989-09-17'),
('act16', 2000, 'Protagonista', '2000-09-14'),
('act17', 2000, 'Protagonista', '1990-03-14'),
('act18', 2000, 'Protagonista', '1972-08-15'),
('act19', 1600, 'Figurante', '1978-08-17'),
('act2', 2000, 'Protagonista', '2015-07-17'),
('act20', 1600, 'Reparto', '1996-06-17'),
('act3', 1600, 'Reparto', '1980-07-17'),
('act4', 1600, 'Figurante', '1999-07-17'),
('act5', 1600, 'Pequeño', '1989-07-17'),
('act6', 1600, 'Secundario', '2000-07-17'),
('act7', 2000, 'Protagonista', '1990-07-17'),
('act8', 1600, 'Reparto', '1972-07-17'),
('act9', 1600, 'Figurante', '1978-07-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente`
--

CREATE TABLE `ambiente` (
  `idambiente` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ambiente`
--

INSERT INTO `ambiente` (`idambiente`, `tipo`) VALUES
('amb100', 'colegio'),
('amb110', 'acuario'),
('amb120', 'colegio'),
('amb130', 'casa'),
('amb140', 'cuarto1'),
('amb150', 'cuarto2'),
('amb160', 'baño'),
('amb170', 'cocina'),
('amb180', 'sala'),
('amb190', 'garaje'),
('amb200', 'casa'),
('amb210', 'patio'),
('amb220', 'acuario'),
('amb300', 'cuarto1'),
('amb400', 'cuarto2'),
('amb500', 'baño'),
('amb600', 'cocina'),
('amb700', 'sala'),
('amb800', 'garaje'),
('amb900', 'patio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistente`
--

CREATE TABLE `asistente` (
  `idasi` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `especialidad` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `asistente`
--

INSERT INTO `asistente` (`idasi`, `especialidad`) VALUES
('asi01', 'iluminacion'),
('asi02', 'vestuario'),
('asi03', 'decoracion'),
('asi04', 'color'),
('asi05', 'sonido'),
('asi06', 'musica'),
('asi07', 'iluminacion'),
('asi08', 'vestuario'),
('asi09', 'decoracion'),
('asi10', 'color'),
('asi11', 'iluminacion'),
('asi12', 'vestuario'),
('asi13', 'decoracion'),
('asi14', 'color'),
('asi15', 'sonido'),
('asi16', 'musica'),
('asi17', 'iluminacion'),
('asi18', 'vestuario'),
('asi19', 'decoracion'),
('asi20', 'color');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canal`
--

CREATE TABLE `canal` (
  `idcanal` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `nroemi` int(11) DEFAULT NULL,
  `nombrec` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `canal`
--

INSERT INTO `canal` (`idcanal`, `nroemi`, `nombrec`) VALUES
('can01', 777, 'fox'),
('can02', 122, 'tnt'),
('can03', 586, 'atb'),
('can04', 574, 'warner'),
('can05', 562, 'cinecanal'),
('can06', 525, 'el trece'),
('can07', 613, 'a&e'),
('can08', 758, 'history'),
('can09', 714, 'axn'),
('can10', 912, 'golden'),
('can11', 5, 'Bolivision'),
('can12', 2, 'Unitel'),
('can13', 100, 'Discovery'),
('can14', 106, 'Nick Jr'),
('can15', 121, 'DisneyXD'),
('can16', 127, 'Disney'),
('can17', 130, 'Boomerang'),
('can18', 218, 'TL Novelas'),
('can19', 353, 'NatGeo wild'),
('can20', 365, 'Tru TV');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `idprog` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `idper` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`idprog`, `idper`) VALUES
('pro01', 'per01'),
('pro02', 'per02'),
('pro03', 'per03'),
('pro04', 'per04'),
('pro05', 'per05'),
('pro06', 'per06'),
('pro07', 'per07'),
('pro08', 'per08'),
('pro09', 'per09'),
('pro10', 'per10'),
('pro11', 'per11'),
('pro12', 'per12'),
('pro13', 'per13'),
('pro14', 'per14'),
('pro15', 'per15'),
('pro16', 'per16'),
('pro17', 'per17'),
('pro18', 'per18'),
('pro19', 'per19'),
('pro20', 'per20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `iddire` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `cargo` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`iddire`, `cargo`) VALUES
('dir01', 'mañana'),
('dir02', 'tarde'),
('dir03', 'tarde'),
('dir04', 'mañana'),
('dir05', 'mañana'),
('dir06', 'tarde'),
('dir07', 'mañana'),
('dir08', 'tarde'),
('dir09', 'mañana'),
('dir10', 'tarde'),
('dir11', 'mañana'),
('dir12', 'tarde'),
('dir13', 'tarde'),
('dir14', 'mañana'),
('dir15', 'mañana'),
('dir16', 'tarde'),
('dir17', 'mañana'),
('dir18', 'tarde'),
('dir19', 'mañana'),
('dir20', 'tarde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `episodio`
--

CREATE TABLE `episodio` (
  `idepi` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(300) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nrotemporada` int(11) DEFAULT NULL,
  `idprog` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `episodio`
--

INSERT INTO `episodio` (`idepi`, `nombre`, `nrotemporada`, `idprog`) VALUES
('epi01', 'piloto', 2, 'pro07'),
('epi02', 'empapada', 2, 'pro07'),
('epi03', 'pinguino', 2, 'pro07'),
('epi04', 'el amiguito y el leon', 2, 'pro07'),
('epi05', 'prendido fuego', 1, 'pro07'),
('epi06', 'el huevo', 1, 'pro07'),
('epi07', 'la guarida del dragon', 1, 'pro07'),
('epi08', 'borron y cuenta nueva', 1, 'pro07'),
('epi09', 'vivir en altura', 1, 'pro07'),
('epi10', 'ernest', 1, 'pro07'),
('epi11', 'Dia del Trabajo', 3, 'pro09'),
('epi12', 'La fortuna y el amor', 3, 'pro09'),
('epi13', 'Como ser artista', 3, 'pro09'),
('epi14', 'Bienvenidos', 1, 'pro10'),
('epi15', 'Deseo', 1, 'pro10'),
('epi16', 'Sabado Noche', 1, 'pro10'),
('epi17', 'El monologo del pajaro', 1, 'pro11'),
('epi18', 'Combate escenico', 1, 'pro11'),
('epi19', 'La Canción de la Semana', 1, 'pro11'),
('epi20', 'Jade bota a Beck', 1, 'pro11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escena`
--

CREATE TABLE `escena` (
  `nroescena` int(11) NOT NULL,
  `idepi` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `duracion` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `escena`
--

INSERT INTO `escena` (`nroescena`, `idepi`, `duracion`) VALUES
(100, 'epi01', '35'),
(101, 'epi02', '37'),
(102, 'epi03', '35'),
(103, 'epi04', '35'),
(104, 'epi05', '21'),
(105, 'epi06', '35'),
(106, 'epi07', '35'),
(107, 'epi08', '24'),
(108, 'epi09', '22'),
(109, 'epi10', '35'),
(110, 'epi11', '35'),
(111, 'epi12', '37'),
(112, 'epi13', '40'),
(113, 'epi14', '35'),
(114, 'epi15', '21'),
(115, 'epi16', '55'),
(116, 'epi17', '35'),
(117, 'epi18', '41'),
(118, 'epi19', '20'),
(119, 'epi20', '35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ci` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `ci`, `nombre`, `apellido`, `fecha_nac`, `telefono`) VALUES
('act1', 123401, 'Will', 'Smith', '1980-07-07', 2334200),
('act2', 123402, 'Johnny', 'Depp', '1981-08-17', 2334256),
('act3', 123403, 'Adam', 'Sandler', '1982-09-27', 2312356),
('act4', 123404, 'Vin', 'Diesel', '1983-01-13', 2334123),
('act5', 123405, 'Jackie', 'Chan', '1980-02-04', 2332345),
('act6', 123406, 'Morgan', 'Freeman', '1981-03-25', 2334556),
('act7', 123407, 'Brad', 'Pitt', '1982-04-26', 2356756),
('act8', 123408, 'Angelina', 'Jolie', '1983-05-13', 2389056),
('act9', 123409, 'Jennifer', 'Aniston', '1984-06-19', 2319056),
('act10', 123410, 'Jim', 'Carrey', '1986-07-29', 2289056),
('act11', 123411, 'Sandra', 'Bullock', '1987-08-28', 2309056),
('act12', 123412, 'Cameron', 'Diaz', '1988-09-27', 2316756),
('act13', 123413, 'Ben', 'Stiller', '1980-01-26', 2331785),
('act14', 123414, 'Julia', 'Roberts', '1986-02-25', 2334890),
('act15', 123415, 'Owen', 'Wilson', '1987-03-24', 2334560),
('act16', 123416, 'Matt', 'Damon', '1988-04-23', 2334231),
('act17', 123417, 'Keanu', 'Reeves', '1980-05-22', 2334892),
('act18', 123418, 'Megan', 'Fox', '1986-06-21', 2334092),
('act19', 123419, 'Meryl', 'Streep', '1987-07-20', 2334078),
('act20', 123420, 'Salma', 'Hayek', '1988-08-19', 2334012),
('asi01', 123421, 'Andrea', 'Lopez', '1981-01-19', 2334012),
('asi02', 123422, 'Amanda', 'Cortez', '1982-02-19', 2334012),
('asi03', 123423, 'Ashley', 'Lima', '1983-03-19', 2334012),
('asi04', 123424, 'Ana', 'Roberts', '1984-04-19', 2334012),
('asi05', 123425, 'Bianca', 'Lopez', '1985-05-19', 2334012),
('asi06', 123426, 'Blanca', 'Perez', '1986-06-19', 2334012),
('asi07', 123427, 'Bruno', 'Lima', '1987-07-19', 2334012),
('asi08', 123428, 'Carlos', 'Romero', '1988-08-19', 2334012),
('asi09', 123429, 'Cesar', 'Apaza', '1988-09-19', 2334012),
('asi10', 123430, 'Cristian', 'Sienna', '1981-10-19', 2334012),
('asi11', 123431, 'David', 'Stiller', '1982-11-19', 2334012),
('asi12', 123432, 'Daniel', 'Morales', '1983-12-19', 2334012),
('asi13', 123433, 'Denis', 'Calcina', '1984-01-19', 2334012),
('asi14', 123434, 'Ernesto', 'Catari', '1985-02-19', 2334012),
('asi15', 123435, 'Eugenia', 'Catacora', '1986-03-19', 2334012),
('asi16', 123436, 'Eva', 'Campos', '1987-04-19', 2334012),
('asi17', 123437, 'Fernanda', 'Laura', '1988-05-19', 2334012),
('asi18', 123438, 'Fernando', 'Calani', '1989-06-19', 2334012),
('asi19', 123439, 'Francisco', 'Cabrera', '1981-07-19', 2334012),
('asi20', 123440, 'Franco', 'Cachi', '1982-08-19', 2334012),
('dir01', 123441, 'Sienna', 'Guillory', '1983-09-19', 2334012),
('dir02', 123442, 'Rebeca', 'Romijn', '1984-10-19', 2334012),
('dir03', 123443, 'Stella', 'Warren', '1985-11-19', 2334012),
('dir04', 123444, 'Mike', 'Myers', '1986-12-19', 2334012),
('dir05', 123445, 'Aishwarya', 'Rai', '1987-01-19', 2334012),
('dir06', 123446, 'Alicia', 'Silverstone', '1988-02-19', 2334012),
('dir07', 123447, 'Carmen', 'Electra', '1989-02-19', 2334012),
('dir08', 123448, 'Cristina', 'Ricci', '1980-03-19', 2334012),
('dir09', 123449, 'Rosario', 'Dawson', '1981-04-19', 2334012),
('dir10', 123450, 'Carla', 'Gugino', '1982-05-19', 2334012),
('dir11', 123451, 'Jessica', 'Bell', '1983-06-19', 2334012),
('dir12', 123452, 'Amanda', 'Bynes', '1984-07-19', 2334012),
('dir13', 123453, 'Jane', 'Fonda', '1985-08-19', 2334012),
('dir14', 123454, 'Winona', 'Ryder', '1986-09-19', 2334012),
('dir15', 123455, 'Karmen', 'Vega', '1987-10-19', 2334012),
('dir16', 123456, 'Cinthya', 'Molina', '1988-11-19', 2334012),
('dir17', 123457, 'Ninfa', 'Moreno', '1989-12-19', 2334012),
('dir18', 123458, 'Bernardo', 'Soto', '1980-01-19', 2334012),
('dir19', 123459, 'Alcides', 'Zeballos', '1981-02-19', 2334012),
('dir20', 123460, 'Ronald', 'Alanoca', '1982-03-19', 2334012),
('per01', 123461, 'Gabriel', 'Bynes', '1983-04-19', 2334012),
('per02', 123462, 'Javier', 'Bell', '1984-05-19', 2334012),
('per03', 123463, 'Jimena', 'Ben', '1985-06-19', 2334012),
('per04', 123464, 'Karen', 'Cachi', '1986-07-19', 2334012),
('per05', 123465, 'Kevin', 'Cabrera', '1987-08-19', 2334012),
('per06', 123466, 'Laura', 'Calani', '1988-09-19', 2334012),
('per07', 123467, 'Lilian', 'Campos', '1989-10-19', 2334012),
('per08', 123468, 'Maria', 'Catacora', '1980-11-19', 2334012),
('per09', 123469, 'Mario', 'Catari', '1981-12-19', 2334012),
('per10', 123470, 'Oscar', 'Calcina', '1982-01-19', 2334012),
('per11', 123471, 'Osvaldo', 'Cortez', '1983-02-19', 2334012),
('per12', 123472, 'Pedro', 'Dawson', '1984-03-19', 2334012),
('per13', 123473, 'Pablo', 'Damon', '1985-04-19', 2334012),
('per14', 123474, 'Ramiro', 'Diaz', '1986-05-19', 2334012),
('per15', 123475, 'Reina', 'Depp', '1987-06-19', 2334012),
('per16', 123476, 'Rebeca', 'Fonda', '1988-07-19', 2334012),
('per17', 123477, 'Sandra', 'Freeman', '1980-08-19', 2334012),
('per18', 123478, 'Sandro', 'Guillory', '1981-09-19', 2334012),
('per19', 123479, 'Sergio', 'Hayek', '1982-10-19', 2334012),
('per20', 123480, 'Teodoro', 'Keanu', '1983-11-19', 2334012),
('tec01', 123481, 'Tina', 'Lima', '1984-12-19', 2334012),
('tec02', 123482, 'Waldo', 'Lopez', '1985-01-19', 2334012),
('tec03', 123483, 'Wendy', 'Moreno', '1986-02-19', 2334012),
('tec04', 123484, 'Milton', 'Myers', '1987-03-19', 2334012),
('tec05', 123485, 'Manuel', 'Molina', '1988-04-19', 2334012),
('tec06', 123486, 'Paola', 'Morales', '1989-05-19', 2334012),
('tec07', 123487, 'Maria', 'Owen', '1980-06-19', 2334012),
('tec08', 123488, 'Magadalena', 'Perez', '1981-07-19', 2334012),
('tec09', 123489, 'Mery', 'Paredes', '1982-08-19', 2334012),
('tec10', 123490, 'Antonio', 'Roberts', '1983-09-19', 2334012),
('tec11', 123491, 'Rodolfo', 'Ryder', '1984-10-19', 2334012),
('tec12', 123492, 'Lurdes', 'Ricci', '1985-11-19', 2334012),
('tec13', 123493, 'Raquel', 'Soto', '1986-12-19', 2334012),
('tec14', 123494, 'Silvia', 'Stiller', '1987-01-19', 2334012),
('tec15', 123495, 'Dante', 'Streep', '1988-02-19', 2334012),
('tec16', 123496, 'Dennis', 'Vega', '1989-03-19', 2334012),
('tec17', 123497, 'Deysi', 'Tori', '1980-04-19', 2334012),
('tec18', 123498, 'Marina', 'Casas', '1981-05-19', 2334012),
('tec19', 123499, 'Ruben', 'Lima', '1982-06-19', 2334022),
('tec20', 123500, 'Eddy', 'Lima', '1983-08-19', 2334010);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personalproduccion`
--

CREATE TABLE `personalproduccion` (
  `idper` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `turno` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sueldo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `personalproduccion`
--

INSERT INTO `personalproduccion` (`idper`, `turno`, `sueldo`) VALUES
('per01', 'mañana', 2500),
('per02', 'tarde', 2500),
('per03', 'tarde', 2500),
('per04', 'mañana', 2500),
('per05', 'mañana', 2500),
('per06', 'tarde', 2500),
('per07', 'mañana', 2500),
('per08', 'tarde', 2500),
('per09', 'mañana', 2500),
('per10', 'tarde', 2500),
('per11', 'mañana', 2500),
('per12', 'tarde', 2500),
('per13', 'tarde', 2500),
('per14', 'mañana', 2500),
('per15', 'mañana', 2500),
('per16', 'tarde', 2500),
('per17', 'mañana', 2500),
('per18', 'tarde', 2500),
('per19', 'mañana', 2500),
('per20', 'tarde', 2500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posee`
--

CREATE TABLE `posee` (
  `idprog` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `idactor` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `posee`
--

INSERT INTO `posee` (`idprog`, `idactor`) VALUES
('pro01', 'act1'),
('pro02', 'act2'),
('pro03', 'act3'),
('pro04', 'act4'),
('pro05', 'act5'),
('pro06', 'act6'),
('pro07', 'act7'),
('pro08', 'act8'),
('pro09', 'act9'),
('pro10', 'act10'),
('pro11', 'act11'),
('pro12', 'act12'),
('pro13', 'act13'),
('pro14', 'act14'),
('pro15', 'act15'),
('pro16', 'act16'),
('pro17', 'act17'),
('pro18', 'act18'),
('pro19', 'act19'),
('pro20', 'act20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `idprog` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(300) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `genero` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nrotemporadas` int(11) DEFAULT NULL,
  `pais` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`idprog`, `nombre`, `genero`, `nrotemporadas`, `pais`) VALUES
('pro01', 'friends', 'drama', 7, 'EEUU'),
('pro02', 'como conoci a tu madre', 'drama', 7, 'EEUU'),
('pro03', 'la casa de papel', 'drama', 3, 'España'),
('pro04', 'las chicas gildmore', 'drama', 7, 'EEUU'),
('pro05', 'flash', 'accion', 5, 'EEUU'),
('pro06', 'la casa de las flores', 'drama', 2, 'Mexico'),
('pro07', 'atypical', 'drama', 3, 'EEUU'),
('pro08', 'supergirl', 'accion', 4, 'EEUU'),
('pro09', 'riverdale', 'drama', 3, 'EEUU'),
('pro10', 'elite', 'drama', 3, 'EEUU'),
('pro11', 'Victorius', 'comedia', 7, 'EEUU'),
('pro12', 'Sam y Cat', 'comedia', 7, 'EEUU'),
('pro13', 'Soy Luna', 'drama', 3, 'Argentina'),
('pro14', 'The end of fucking world', 'drama', 2, 'EEUU'),
('pro15', 'Rick y Morty', 'entretenimiento', 4, 'EEUU'),
('pro16', 'Gravity Falls', 'entretenimiento', 5, 'EEUU'),
('pro17', 'Greys Anatomy', 'drama', 15, 'EEUU'),
('pro18', 'Lucifer', 'accion', 4, 'EEUU'),
('pro19', 'I Carly', 'comedia', 10, 'EEUU'),
('pro20', 'Drake y Josh', 'comedia', 10, 'EEUU');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_realiza`
--

CREATE TABLE `se_realiza` (
  `idambiente` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `idprog` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `se_realiza`
--

INSERT INTO `se_realiza` (`idambiente`, `idprog`) VALUES
('amb100', 'pro01'),
('amb200', 'pro02'),
('amb300', 'pro03'),
('amb400', 'pro04'),
('amb500', 'pro05'),
('amb600', 'pro06'),
('amb700', 'pro07'),
('amb800', 'pro08'),
('amb900', 'pro09'),
('amb110', 'pro10'),
('amb120', 'pro11'),
('amb130', 'pro12'),
('amb140', 'pro13'),
('amb150', 'pro14'),
('amb160', 'pro15'),
('amb170', 'pro16'),
('amb180', 'pro17'),
('amb190', 'pro18'),
('amb200', 'pro19'),
('amb210', 'pro20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_transmite`
--

CREATE TABLE `se_transmite` (
  `idcanal` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `idepi` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `hora_ini` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `hora_fin` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `se_transmite`
--

INSERT INTO `se_transmite` (`idcanal`, `idepi`, `hora_ini`, `hora_fin`) VALUES
('can01', 'epi01', '05:00', '06:00'),
('can02', 'epi02', '18:00', '19:00'),
('can03', 'epi03', '20:00', '21:00'),
('can04', 'epi04', '08:00', '09:00'),
('can05', 'epi05', '10:00', '11:00'),
('can06', 'epi06', '05:00', '06:00'),
('can07', 'epi07', '14:00', '15:00'),
('can08', 'epi08', '19:00', '20:00'),
('can09', 'epi09', '12:00', '13:00'),
('can10', 'epi10', '23:00', '00:00'),
('can11', 'epi11', '05:00', '06:00'),
('can12', 'epi12', '18:00', '19:00'),
('can13', 'epi13', '20:00', '21:00'),
('can14', 'epi14', '08:00', '09:00'),
('can15', 'epi15', '10:00', '11:00'),
('can16', 'epi16', '05:00', '06:00'),
('can17', 'epi17', '14:00', '15:00'),
('can18', 'epi18', '19:00', '20:00'),
('can19', 'epi19', '12:00', '13:00'),
('can20', 'epi20', '23:00', '00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico`
--

CREATE TABLE `tecnico` (
  `idtec` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `mat_trabajo` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tecnico`
--

INSERT INTO `tecnico` (`idtec`, `mat_trabajo`) VALUES
('tec01', 'iluminacion'),
('tec02', 'vestuario'),
('tec03', 'decoracion'),
('tec04', 'color'),
('tec05', 'sonido'),
('tec06', 'musica'),
('tec07', 'iluminacion'),
('tec08', 'vestuario'),
('tec09', 'decoracion'),
('tec10', 'color'),
('tec11', 'iluminacion'),
('tec12', 'vestuario'),
('tec13', 'decoracion'),
('tec14', 'color'),
('tec15', 'sonido'),
('tec16', 'musica'),
('tec17', 'iluminacion'),
('tec18', 'vestuario'),
('tec19', 'decoracion'),
('tec20', 'color');

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
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`iddire`);

--
-- Indices de la tabla `episodio`
--
ALTER TABLE `episodio`
  ADD PRIMARY KEY (`idepi`),
  ADD KEY `idprog` (`idprog`);

--
-- Indices de la tabla `escena`
--
ALTER TABLE `escena`
  ADD PRIMARY KEY (`nroescena`),
  ADD KEY `idepi` (`idepi`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `personalproduccion`
--
ALTER TABLE `personalproduccion`
  ADD PRIMARY KEY (`idper`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`idprog`);

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
  ADD CONSTRAINT `episodio_ibfk_1` FOREIGN KEY (`idprog`) REFERENCES `programa` (`idprog`);

--
-- Filtros para la tabla `escena`
--
ALTER TABLE `escena`
  ADD CONSTRAINT `escena_ibfk_1` FOREIGN KEY (`idepi`) REFERENCES `episodio` (`idepi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
