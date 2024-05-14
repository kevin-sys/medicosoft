-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2022 a las 02:36:59
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdnomina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `Identificacion` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `PrimerNombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `SegundoNombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Sin asignar',
  `PrimerApellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `SegundoApellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Sexo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Celular` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `Ciudad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Departamento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Pais` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Facultad` text COLLATE utf8_spanish_ci NOT NULL,
  `TotalLiquidacionDocente` double DEFAULT 0,
  `TotalPuntosDocente` double DEFAULT 0,
  `Foto` varchar(250) COLLATE utf8_spanish_ci DEFAULT 'logoupc.jpg',
  `FotoFirma` varchar(255) COLLATE utf8_spanish_ci DEFAULT 'firma.png',
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`Identificacion`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `FechaNacimiento`, `Sexo`, `Celular`, `Correo`, `Direccion`, `Ciudad`, `Departamento`, `Pais`, `Facultad`, `TotalLiquidacionDocente`, `TotalPuntosDocente`, `Foto`, `FotoFirma`, `FechaRegistro`) VALUES
('1234567890', 'Adith', 'Bismarck', 'Perez ', 'Orozco', '1980-12-20', 'M', '3079098790', 'adi.perez@mail.udes.edu.co', 'Condominio club palmetto', 'Valledupar', 'Cesar', 'Colombia', 'Facultad de Ingenierías Tecnológicas', 2079000, 90, 'logoupc.jpg', 'firma.png', '2022-05-07 21:34:59'),
('23343434', 'kevin', '', 'gomez', 'cantillo', '1999-10-11', 'M', '3113950343', 'erek@gmail.com', 'calle 14 #20-32', 'valledupar', 'cesar', 'colombia', 'Facultad de Ingenierías Tecnológicas', 5198000, 368, 'logoupc.jpg', 'firma.png', '2022-05-07 21:36:32'),
('10343434545', 'MARIA', 'DE LOS REYES', 'PALMERA', 'CARRILLO', '1963-06-09', 'F', '3016234343', 'M@GMAIL.COM', 'URBANIZACION NANDO MARIN', 'VALLEDUPAR', 'CESAR', 'COLOMBIA', 'Facultad de Bellas Artes', 2669000, 141, 'logoupc.jpg', 'firma.png', '2022-05-08 00:27:03'),
('23889498348', 'JORDAN ', 'STIVEN', 'GOMEZ', 'CANTILLO', '2017-08-22', 'M', '3020434039', 'JORDA@GMAIL.COM', 'BARRIO VILLA MIRIAM', 'BARRANQUILLA', 'ATLANTICO', 'COLOMBIA', 'Facultad de Derecho, Ciencias Políticas y Sociales', 5378000, 399, 'logoupc.jpg', 'firma.png', '2022-05-08 01:53:08'),
('26847641', 'Shirley', 'Del Carmen', 'Cantillo ', 'Palmeras', '1985-05-31', 'F', '3016643434', 'shir@gmail.com', 'calle 17 #20-44', 'Barranquilla', 'Atlantico', 'Colombia', 'Facultad de Ciencias de la Salud', 2619000, 129, 'logoupc.jpg', 'firma.png', '2022-05-08 04:04:00'),
('90034837777', 'LUCAS', '', 'DAZA', 'DAZA', '2022-05-05', 'M', '3900304093', 'KE@GMAIL.COM', 'CALLE 12-204934', 'VALLEDUPAR', 'CESAR', 'COLOMBIA', 'Facultad de Ciencias Administrativas, Contables y Económicas', 3125000, 92, 'logoupc.jpg', 'firma.png', '2022-05-08 23:59:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `CodigoFacultad` int(11) NOT NULL,
  `NombreFacultad` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `CantidadProgramas` int(11) NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`CodigoFacultad`, `NombreFacultad`, `CantidadProgramas`, `FechaRegistro`) VALUES
(1, 'Facultad de Ciencias Administrativas, Contables y Económicas', 6, '2022-04-09 01:42:06'),
(2, 'Facultad de Bellas Artes', 4, '2022-04-09 01:42:41'),
(3, 'Facultad de Ciencias Básicas y de Educación', 5, '2022-04-09 01:44:02'),
(4, 'Facultad de Ciencias de la Salud', 5, '2022-04-09 01:44:23'),
(5, 'Facultad de Derecho, Ciencias Políticas y Sociales', 6, '2022-04-09 01:44:43'),
(6, 'Facultad de Ingenierías Tecnológicas', 4, '2022-04-09 01:45:00'),
(7, 'Facultad de Ciencias Contables y Económicas', 6, '2022-04-09 01:45:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `files`
--

INSERT INTO `files` (`id`, `title`, `description`, `url`, `type`, `FechaRegistro`) VALUES
(8, NULL, '20343434', 'files/horario2022-iipdf.pdf', NULL, '2022-05-09 00:04:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liquidacion`
--

CREATE TABLE `liquidacion` (
  `CodigoLiquidacion` char(8) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Identificacion` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `TipoAreaDesempeño` text COLLATE utf8_spanish_ci NOT NULL,
  `PuntosAreaDesempeño` int(11) NOT NULL,
  `BonificacionAreaDesempeño` float NOT NULL,
  `TotalBonificacionAreaDesempeño` double NOT NULL,
  `TipoCategoriaDocente` text COLLATE utf8_spanish_ci NOT NULL,
  `PuntosCategoriaDocente` int(11) NOT NULL,
  `RemuneracionCategoriaDocente` float NOT NULL,
  `TotalLiquidarCategoriaDocente` double NOT NULL,
  `TipoExperienciaDocente` text COLLATE utf8_spanish_ci NOT NULL,
  `PuntosAñoExperiencia` int(11) NOT NULL,
  `CantidadAniosExperiencia` int(11) NOT NULL,
  `PuntosTotalesExperienciaDocente` int(11) NOT NULL,
  `PuntosInvestigador` int(11) NOT NULL,
  `PuntosArticulosRevistasIdexadas` int(11) DEFAULT NULL,
  `PuntosArticulosMediosReconocidosISBN` int(11) DEFAULT NULL,
  `PuntosLibrosISBN` int(11) DEFAULT NULL,
  `PuntosCapitulosLibrosISBN` int(11) DEFAULT NULL,
  `PuntosModulosISBN` int(11) DEFAULT NULL,
  `PuntosSoftwareDerechoAutor` int(11) DEFAULT NULL,
  `PuntosPatentes` int(11) DEFAULT NULL,
  `PuntosAsesorMonografias` int(11) DEFAULT NULL,
  `PuntosAsesoriasPracticasOpcionGrado` int(11) DEFAULT NULL,
  `PuntoGrupoInvestigacion` int(11) NOT NULL,
  `PrimerNombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `SegundoNombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `PrimerApellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `SegundoApellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Facultad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `TotalBonificacionInvestigacion` double NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `liquidacion`
--

INSERT INTO `liquidacion` (`CodigoLiquidacion`, `Identificacion`, `TipoAreaDesempeño`, `PuntosAreaDesempeño`, `BonificacionAreaDesempeño`, `TotalBonificacionAreaDesempeño`, `TipoCategoriaDocente`, `PuntosCategoriaDocente`, `RemuneracionCategoriaDocente`, `TotalLiquidarCategoriaDocente`, `TipoExperienciaDocente`, `PuntosAñoExperiencia`, `CantidadAniosExperiencia`, `PuntosTotalesExperienciaDocente`, `PuntosInvestigador`, `PuntosArticulosRevistasIdexadas`, `PuntosArticulosMediosReconocidosISBN`, `PuntosLibrosISBN`, `PuntosCapitulosLibrosISBN`, `PuntosModulosISBN`, `PuntosSoftwareDerechoAutor`, `PuntosPatentes`, `PuntosAsesorMonografias`, `PuntosAsesoriasPracticasOpcionGrado`, `PuntoGrupoInvestigacion`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `Facultad`, `TotalBonificacionInvestigacion`, `FechaRegistro`) VALUES
('3K8RJK0H', '10343434545', 'M1', 40, 0.45, 450000, 'Asistente de medio tiempo', 58, 1.749, 1749000, 'Docente de catedra', 1, 3, 3, 5, 0, 5, 0, 0, 10, 0, 0, 5, 0, 15, 'MARIA', 'DE LOS REYES', 'PALMERA', 'CARRILLO', 'Facultad de Bellas Artes', 470000, '2022-05-08 00:27:03'),
('ATIFJX7V', '1234567890', 'E2', 30, 0.1, 100000, 'Auxiliar de medio tiempo', 27, 1.509, 1509000, 'Docente de tiempo completo', 4, 2, 8, 5, 0, 5, 0, 0, 0, 0, 0, 0, 0, 15, 'Adith', 'Bismarck', 'Perez ', 'Orozco', 'Facultad de Ingenierías Tecnológicas', 470000, '2022-05-07 21:34:59'),
('4KMY6U2L', '23343434', 'D2', 120, 0.9, 900000, 'Titular de tiempo completo', 96, 3.918, 3918000, 'Docente de catedra', 1, 2, 2, 3, 10, 5, 20, 5, 10, 20, 60, 5, 2, 10, 'kevin', '', 'gomez', 'cantillo', 'Facultad de Ingenierías Tecnológicas', 380000, '2022-05-07 21:36:32'),
('CO047RVI', '23889498348', 'D2', 120, 0.9, 900000, 'Titular de tiempo completo', 96, 3.918, 3918000, 'Docente de tiempo completo', 4, 4, 16, 10, 10, 5, 20, 5, 10, 20, 60, 5, 2, 20, 'JORDAN ', 'STIVEN', 'GOMEZ', 'CANTILLO', 'Facultad de Derecho, Ciencias Políticas y Sociales', 560000, '2022-05-08 01:53:08'),
('MBIY04T5', '26847641', 'M1', 40, 0.45, 450000, 'Asistente de medio tiempo', 58, 1.749, 1749000, 'Experiencia profesional', 2, 2, 4, 5, 0, 0, 0, 0, 10, 0, 0, 0, 0, 12, 'Shirley', 'Del Carmen', 'Cantillo ', 'Palmeras', 'Facultad de Ciencias de la Salud', 420000, '2022-05-08 04:04:00'),
('A33SA39S', '90034837777', 'E1', 20, 0.1, 100000, 'Auxiliar de tiempo completo', 27, 2.645, 2645000, 'Docente de tiempo completo', 4, 3, 12, 3, 0, 0, 0, 0, 0, 20, 0, 0, 0, 10, 'LUCAS', '', 'DAZA', 'DAZA', 'Facultad de Ciencias Administrativas, Contables y Económicas', 380000, '2022-05-08 23:59:27');

--
-- Disparadores `liquidacion`
--
DELIMITER $$
CREATE TRIGGER `GenerarCodigoLiquidacion` BEFORE INSERT ON `liquidacion` FOR EACH ROW BEGIN
    declare str_len int default 8;
    declare ready int default 0;
    declare rnd_str text;
    while not ready do
        set rnd_str := lpad(conv(floor(rand()*pow(36,str_len)), 10, 36), str_len, 0);
        if not exists (select * from liquidacion where CodigoLiquidacion = rnd_str) then
            set new.CodigoLiquidacion = rnd_str;
            set ready := 1;
        end if;
    end while;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `GenerarTotalPagar` AFTER INSERT ON `liquidacion` FOR EACH ROW BEGIN
SET @total = (SELECT SUM(TotalBonificacionAreaDesempeño) FROM liquidacion WHERE Identificacion = NEW.Identificacion) + (SELECT SUM(TotalLiquidarCategoriaDocente) FROM liquidacion WHERE Identificacion = NEW.Identificacion)+ (SELECT SUM(TotalBonificacionInvestigacion) FROM liquidacion WHERE Identificacion = NEW.Identificacion);
UPDATE docente SET TotalLiquidacionDocente= @total WHERE Identificacion= NEW.Identificacion;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `GenerarTotalPuntos` AFTER INSERT ON `liquidacion` FOR EACH ROW BEGIN
SET @TotalPuntos = (SELECT SUM(PuntosAreaDesempeño) FROM liquidacion WHERE Identificacion = NEW.Identificacion) + 
(SELECT SUM(PuntosCategoriaDocente) FROM liquidacion WHERE Identificacion = NEW.Identificacion)+ 
(SELECT SUM(PuntosTotalesExperienciaDocente) FROM liquidacion WHERE Identificacion = NEW.Identificacion)+
(SELECT SUM(PuntosInvestigador) FROM liquidacion WHERE Identificacion = NEW.Identificacion)+
(SELECT SUM(PuntoGrupoInvestigacion) FROM liquidacion WHERE Identificacion = NEW.Identificacion)+
(SELECT SUM(PuntosArticulosRevistasIdexadas) FROM liquidacion WHERE Identificacion = NEW.Identificacion)+
(SELECT SUM(PuntosArticulosMediosReconocidosISBN) FROM liquidacion WHERE Identificacion = NEW.Identificacion)+
(SELECT SUM(PuntosLibrosISBN) FROM liquidacion WHERE Identificacion = NEW.Identificacion)+
(SELECT SUM(PuntosCapitulosLibrosISBN) FROM liquidacion WHERE Identificacion = NEW.Identificacion)+
(SELECT SUM(PuntosModulosISBN) FROM liquidacion WHERE Identificacion = NEW.Identificacion)+
(SELECT SUM(PuntosSoftwareDerechoAutor) FROM liquidacion WHERE Identificacion = NEW.Identificacion)+
(SELECT SUM(PuntosPatentes) FROM liquidacion WHERE Identificacion = NEW.Identificacion)+
(SELECT SUM(PuntosAsesorMonografias) FROM liquidacion WHERE Identificacion = NEW.Identificacion)+
(SELECT SUM(PuntosAsesoriasPracticasOpcionGrado) FROM liquidacion WHERE Identificacion = NEW.Identificacion);


UPDATE docente SET TotalPuntosDocente= @TotalPuntos WHERE Identificacion= NEW.Identificacion; 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `InsertarBonificacionInvestigacion` BEFORE INSERT ON `liquidacion` FOR EACH ROW IF NEW.PuntoGrupoInvestigacion=20 THEN
set new.TotalBonificacionInvestigacion = 560000;
ELSEIF  
NEW.PuntoGrupoInvestigacion=15 THEN
set new.TotalBonificacionInvestigacion = 470000;
ELSEIF  
NEW.PuntoGrupoInvestigacion=12 THEN
set new.TotalBonificacionInvestigacion = 420000;
ELSEIF  
NEW.PuntoGrupoInvestigacion=10 THEN
set new.TotalBonificacionInvestigacion = 380000;
ELSEIF  
NEW.PuntoGrupoInvestigacion=6 THEN
set new.TotalBonificacionInvestigacion = 330000;
ELSEIF  
NEW.PuntoGrupoInvestigacion=0 THEN
set new.TotalBonificacionInvestigacion = 190000;
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Identificacion` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Contraseña` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Identificacion`, `Usuario`, `Contraseña`) VALUES
('1065853708', 'Administrador', 'admin'),
('17955918', 'Docente', 'ever'),
('2020', 'Docente', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`Identificacion`),
  ADD UNIQUE KEY `IDENTIFICACIONUNIQUE` (`Identificacion`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`CodigoFacultad`),
  ADD UNIQUE KEY `UKFACULTAD` (`NombreFacultad`);

--
-- Indices de la tabla `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `liquidacion`
--
ALTER TABLE `liquidacion`
  ADD PRIMARY KEY (`Identificacion`) USING BTREE,
  ADD UNIQUE KEY `CodigoLiquidacion` (`CodigoLiquidacion`) USING BTREE;

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Identificacion`,`Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `CodigoFacultad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
