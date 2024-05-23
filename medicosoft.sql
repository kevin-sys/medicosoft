-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2024 a las 07:59:51
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
-- Estructura de tabla para la tabla `cita_medica`
--

CREATE TABLE `cita_medica` (
  `Id` int(11) NOT NULL,
  `FechaCita` date NOT NULL,
  `HoraCita` time NOT NULL,
  `NombreProcedimiento` varchar(255) NOT NULL,
  `PrecioProcedimiento` decimal(10,2) NOT NULL,
  `NombreProfesional` varchar(255) NOT NULL,
  `IdentificacionProfesional` varchar(20) NOT NULL,
  `Identificacion` varchar(20) NOT NULL,
  `PrimerNombre` varchar(30) NOT NULL,
  `SegundoNombre` varchar(35) NOT NULL,
  `PrimerApellido` varchar(35) NOT NULL,
  `SegundoApellido` varchar(150) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Genero` varchar(35) NOT NULL,
  `GrupoSanguineo` varchar(35) NOT NULL,
  `RH` varchar(10) NOT NULL,
  `Telefono` varchar(35) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Direccion` varchar(250) NOT NULL,
  `Ciudad` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cita_medica`
--

INSERT INTO `cita_medica` (`Id`, `FechaCita`, `HoraCita`, `NombreProcedimiento`, `PrecioProcedimiento`, `NombreProfesional`, `IdentificacionProfesional`, `Identificacion`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `FechaNacimiento`, `Genero`, `GrupoSanguineo`, `RH`, `Telefono`, `Email`, `Direccion`, `Ciudad`) VALUES
(8, '2024-05-27', '15:25:00', 'CONSULTA DE PRIMERA VEZ POR OTRAS ESPECIALIDADES EN ODONTOLOGIA', 350000.00, 'MARIA MERCEDES DAZA DAZA', '17955918', '88787877', 'jose', 'Kevin ', 'Gómez ', 'Cantillo ', '1980-02-01', 'Masculino ', 'AB+ ', 'Positivo ', '3245650170 ', 'joe@hotmail.com ', 'Urb nando marin blq l apt 203 ', 'Medellin ');

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
  `Nombre` varchar(100) NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Identificacion`, `Usuario`, `Contraseña`, `ValidacionUsuario`, `Nombre`, `FechaRegistro`) VALUES
('1065853708', 'Administrador', 'admin', 1, 'Pedro Perez', '2024-05-23 04:45:06'),
('17955918', 'Especialista', '123456', 1, 'MARIA MERCEDES DAZA DAZA', '2024-05-23 05:47:54'),
('873454', 'Secretaria', '123456', 1, 'Josefa Perez', '2024-05-23 04:45:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita_medica`
--
ALTER TABLE `cita_medica`
  ADD PRIMARY KEY (`Id`);

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

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita_medica`
--
ALTER TABLE `cita_medica`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
