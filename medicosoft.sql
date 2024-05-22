-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2024 a las 05:52:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `medicosoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `Identificacion` varchar(12) NOT NULL,
  `PrimerNombre` varchar(30) DEFAULT NULL,
  `SegundoNombre` varchar(30) DEFAULT NULL,
  `PrimerApellido` varchar(30) DEFAULT NULL,
  `SegundoApellido` varchar(30) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Genero` enum('Masculino','Femenino') DEFAULT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Ciudad` varchar(50) DEFAULT NULL,
  `Eps` varchar(50) DEFAULT NULL,
  `Pais` varchar(50) DEFAULT NULL,
  `GrupoSanguineo` enum('A+','A-','B+','B-','AB+','AB-','O+','O-') DEFAULT NULL,
  `RH` enum('Positivo','Negativo') DEFAULT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`Identificacion`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `FechaNacimiento`, `Genero`, `Telefono`, `Email`, `Direccion`, `Ciudad`, `Eps`, `Pais`, `GrupoSanguineo`, `RH`, `FechaRegistro`) VALUES
('88787877', 'jose', 'Kevin', 'Gómez', 'Cantillo', '1980-02-01', 'Masculino', '3245650170', 'joe@hotmail.com', 'Urb nando marin blq l apt 203', 'Medellin', 'CAJACOPI', 'Colombia', 'AB+', 'Positivo', '2024-05-21 04:08:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procedimiento`
--

CREATE TABLE `procedimiento` (
  `Id_CUPS` varchar(15) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `PrecioProcedimiento` float NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `procedimiento`
--

INSERT INTO `procedimiento` (`Id_CUPS`, `Nombre`, `PrecioProcedimiento`, `FechaRegistro`) VALUES
('890204', 'CONSULTA DE PRIMERA VEZ POR OTRAS ESPECIALIDADES EN ODONTOLOGIA', 350000, '2024-05-22 03:28:36'),
('890208', 'CONSULTA DE PRIMERA VEZ POR PSICOLOGÍA', 9800, '2024-05-22 03:33:52'),
('937000', 'TERAPIA FONOAUDIOLÓGICA INTEGRAL SOD', 50000, '2024-05-22 03:15:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Identificacion` varchar(12) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Contraseña` varchar(30) NOT NULL,
  `ValidacionUsuario` int(1) NOT NULL DEFAULT 0,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Identificacion`, `Usuario`, `Contraseña`, `ValidacionUsuario`, `FechaRegistro`) VALUES
('1065853708', 'Administrador', 'admin', 1, '2024-05-21 08:42:00'),
('873454', 'Secretaria', '123456', 1, '2024-05-21 15:56:08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`Identificacion`);

--
-- Indices de la tabla `procedimiento`
--
ALTER TABLE `procedimiento`
  ADD PRIMARY KEY (`Id_CUPS`),
  ADD UNIQUE KEY `Nombre` (`Nombre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Identificacion`,`Usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
