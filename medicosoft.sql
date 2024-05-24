-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2024 a las 22:41:17
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
  `Ciudad` varchar(250) NOT NULL,
  `EstadoCita` varchar(50) NOT NULL DEFAULT 'Confirmada',
  `Valoracion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cita_medica`
--

INSERT INTO `cita_medica` (`Id`, `FechaCita`, `HoraCita`, `NombreProcedimiento`, `PrecioProcedimiento`, `NombreProfesional`, `IdentificacionProfesional`, `Identificacion`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `FechaNacimiento`, `Genero`, `GrupoSanguineo`, `RH`, `Telefono`, `Email`, `Direccion`, `Ciudad`, `EstadoCita`, `Valoracion`) VALUES
(10, '2024-05-27', '08:00:00', 'TERAPIA OCUPACIONAL INTEGRAL', 70000.00, 'MANUEL MORENO MENDOZA GARCIA', '36531923', '17955918', 'KEVIN', 'MANUEL ', 'GOMEZ ', 'CANTILLO ', '1999-10-11', 'Masculino', '', '', '3113940272 ', 'KEVIN@GMAIL.COM', 'Urb nando marin blq l apt 203 ', 'Valledupar ', 'Completada', 'El paciente asitio a la cita medica y se le hizo su respectiva terapia, se le practican una serie de ejercicios, y se envia al consultorio');

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
('17955918', 'KEVIN', 'MANUEL', 'GOMEZ', 'CANTILLO', '1999-10-11', 'Masculino', '3113940272', 'KEVIN@GMAIL.COM', 'Urb nando marin blq l apt 203', 'Valledupar', 'NUEVA EPS', 'Colombia', 'O+', 'Positivo', '2024-05-24 20:30:25');

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
('937000', 'TERAPIA OCUPACIONAL INTEGRAL', 70000, '2024-05-24 20:28:28');

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
('1065853708', 'Administrador', '123456', 1, 'Pedro Perez', '2024-05-24 20:24:54'),
('12345678', 'Secretaria', '123456', 0, 'MARIA MERCEDES DAZA DAZA', '2024-05-24 20:26:01'),
('36531923', 'Especialista', '123456', 1, 'MANUEL MORENO MENDOZA GARCIA', '2024-05-24 20:35:30');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
