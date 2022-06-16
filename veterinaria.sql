-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220615.97c9e3ad3b
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2022 a las 04:10:20
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxiliar`
--

CREATE TABLE `auxiliar` (
  `numeroEmpleado` varchar(25) NOT NULL,
  `CURPAuxiliar` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `auxiliar`
--

INSERT INTO `auxiliar` (`numeroEmpleado`, `CURPAuxiliar`) VALUES
('2020630050', 'PERC561125MSPRMT03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `tarjetaPago` varchar(25) DEFAULT NULL,
  `CURPCliente` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`tarjetaPago`, `CURPCliente`) VALUES
('5152800963', 'MAHJ280603MSPRRV09'),
('5251900654', 'ROVI490617HSPDSS05'),
('', 'AACM651123MTSLLR06'),
('', 'TENJ010607HDFDSRA5'),
('', 'ALFP010607HDFDSRA5'),
('', 'BARJ010607HDFDSRA5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `CURPVeterinario` varchar(18) NOT NULL,
  `CURPDueno` varchar(18) NOT NULL,
  `idMascota` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `fechaConsultaInicio` datetime DEFAULT NULL,
  `fechaConsultaFinal` datetime DEFAULT NULL,
  `nombreMascota` varchar(20) NOT NULL,
  `Anotaciones` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`CURPVeterinario`, `CURPDueno`, `idMascota`, `id`, `fechaConsultaInicio`, `fechaConsultaFinal`, `nombreMascota`, `Anotaciones`) VALUES
('TOHA530902HSPRRN07', 'MAHJ280603MSPRRV09', 1, 1, '2022-03-02 02:18:59', '2022-03-09 02:18:59', 'leo', 'Pues se ve bien el perico, jejeje.'),
('TOHA530902HSPRRN07', 'MAHJ280603MSPRRV09', 1, 2, '2022-03-09 02:18:59', '2022-03-18 02:18:59', 'leo', 'Ya esta mejor.'),
('TOHA530902HSPRRN07', 'ROVI490617HSPDSS05', 3, 3, '2022-03-09 03:04:08', '2022-03-10 03:04:08', 'Bygul', 'Esta bien bonito el gatito. :D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcion`
--

CREATE TABLE `direcion` (
  `Estado` varchar(30) NOT NULL,
  `Alcaldia` varchar(30) NOT NULL,
  `CalleNumero` varchar(30) NOT NULL,
  `Colonia` varchar(30) NOT NULL,
  `CP` varchar(20) NOT NULL,
  `CURPUsuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `direcion`
--

INSERT INTO `direcion` (`Estado`, `Alcaldia`, `CalleNumero`, `Colonia`, `CP`, `CURPUsuario`) VALUES
('cdmx', '', 'Orinte 45', 'COLONIA', '03210', 'TENJ010607HDFDSRA5'),
('cdmx', 'miguel_hidalgo', 'PONIENTE 95', 'COLONIA', '09870', 'ALFP010607HDFDSRA5'),
('cdmx', 'gustavo_a_madero', 'NORTE 23, NUM 101', 'COLONIA', '01230', 'BARJ010607HDFDSRA5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `id` int(11) NOT NULL,
  `CURPDueno` varchar(18) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `especie` varchar(50) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`id`, `CURPDueno`, `nombre`, `especie`, `sexo`, `edad`) VALUES
(1, 'MAHJ280603MSPRRV09', 'leo', 'M. monachus', 'Macho', 2),
(2, 'MAHJ280603MSPRRV09', 'negra', 'C. familiaris', 'macho', 3),
(3, 'ROVI490617HSPDSS05', 'Bygul', 'Felis catus', 'Macho', 5),
(4, 'AACM651123MTSLLR06', 'Cadmo', 'Felis catus', 'Mujer', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `CURPVeterinario` varchar(18) NOT NULL,
  `CURPDueno` varchar(18) NOT NULL,
  `idMascota` int(11) NOT NULL,
  `idConsulta` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `diagnostico` varchar(200) NOT NULL,
  `medicacion` varchar(200) NOT NULL,
  `nombreMascota` varchar(20) NOT NULL,
  `especieMascota` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`CURPVeterinario`, `CURPDueno`, `idMascota`, `idConsulta`, `id`, `fecha`, `diagnostico`, `medicacion`, `nombreMascota`, `especieMascota`) VALUES
('TOHA530902HSPRRN07', 'ROVI490617HSPDSS05', 3, 3, 1, '2022-03-09', 'Pues se enfermo por el frio.', 'Tomar aguita caliente', 'Bygul', 'Felis catus');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `CURP` varchar(18) NOT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  `apellidoPaterno` varchar(20) NOT NULL,
  `apellidoMaterno` varchar(20) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `fechaNacimineto` date NOT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`CURP`, `contrasena`, `apellidoPaterno`, `apellidoMaterno`, `nombres`, `fechaNacimineto`, `genero`, `telefono`, `correo`) VALUES
('AACM651123MTSLLR06', '', 'ALTAMIRANO', 'CALDERON', 'MARTINA', '2022-03-01', 'Mujer', '5524139678', 'martinacliente@veterinaria.com'),
('ALFP010607HDFDSRA5', 'ALFP010607HDFDSRA5', 'PEREA', 'VASQUEZ', 'ALFREDO', '2022-02-17', 'Hombre', '5526183964', 'alfredo.cliente@vet.com'),
('BARJ010607HDFDSRA5', 'BARJ010607HDFDSRA5', 'BADILLO', 'ROSA', 'JORGE', '2022-06-07', 'Hombre', '5525141224', 'jorge761.jb@gmail.com'),
('MAHJ280603MSPRRV09', 'clienteMariaJimena', 'Martinez', 'Hernandez', 'Maria Jimena', '2022-03-01', 'S/G', '5525141345', 'MariaJimenacliente@veterinaria.com'),
('PERC561125MSPRMT03', 'auxiliarCatalina', 'Peralta', 'Ramírez', 'Catalina', '2022-03-02', 'Femenino', '5514296389', 'CatalinaAuxiliar@veterinaria.com'),
('ROVI490617HSPDSS05', 'clienteIsmael', 'Rodrigue', 'Vasquez', 'Ismael', '2022-03-01', 'Masculino', '5525156324', 'ismaelcliente@veterinaria.com'),
('TENJ010607HDFDSRA5', 'TENJ010607HDFDSRA5', 'Romero', 'Tena', 'Miguel', '2022-03-01', 'Mujer', '5524141325', 'angeltena.cliente@vet.com'),
('TOHA530902HSPRRN07', 'veterinarioAntonio', 'Torres', 'Hernández', 'Antonio', '2022-03-01', 'Masculino', '5524141265', 'AntonioVeterianrio@veterinaria.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinario`
--

CREATE TABLE `veterinario` (
  `numeroEmpleado` varchar(25) NOT NULL,
  `CURPVeterinario` varchar(18) NOT NULL,
  `cedulaProfesional` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `veterinario`
--

INSERT INTO `veterinario` (`numeroEmpleado`, `CURPVeterinario`, `cedulaProfesional`) VALUES
('2020630054', 'TOHA530902HSPRRN07', '12345678');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auxiliar`
--
ALTER TABLE `auxiliar`
  ADD KEY `AuxiliarFK` (`CURPAuxiliar`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD KEY `clienteFK` (`CURPCliente`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ConsultaFKMascota` (`CURPDueno`,`idMascota`),
  ADD KEY `ConsultaFKVeterinario` (`CURPVeterinario`);

--
-- Indices de la tabla `direcion`
--
ALTER TABLE `direcion`
  ADD KEY `FK_CURP` (`CURPUsuario`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaascotaFK` (`CURPDueno`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `receta_ibfk_1` (`idConsulta`),
  ADD KEY `receta_ibfk_2` (`CURPVeterinario`),
  ADD KEY `receta_ibfk_3` (`CURPDueno`,`idMascota`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CURP`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `veterinario`
--
ALTER TABLE `veterinario`
  ADD KEY `VeterinarioFK` (`CURPVeterinario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auxiliar`
--
ALTER TABLE `auxiliar`
  ADD CONSTRAINT `AuxiliarFK` FOREIGN KEY (`CURPAuxiliar`) REFERENCES `usuario` (`CURP`) ON DELETE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `clienteFK` FOREIGN KEY (`CURPCliente`) REFERENCES `usuario` (`CURP`) ON DELETE CASCADE;

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `ConsultaFKMascota` FOREIGN KEY (`CURPDueno`,`idMascota`) REFERENCES `mascota` (`CURPDueno`, `id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ConsultaFKVeterinario` FOREIGN KEY (`CURPVeterinario`) REFERENCES `veterinario` (`CURPVeterinario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `direcion`
--
ALTER TABLE `direcion`
  ADD CONSTRAINT `FK_CURP` FOREIGN KEY (`CURPUsuario`) REFERENCES `usuario` (`CURP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `MaascotaFK` FOREIGN KEY (`CURPDueno`) REFERENCES `cliente` (`CURPCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `receta`
--
ALTER TABLE `receta`
  ADD CONSTRAINT `receta_ibfk_1` FOREIGN KEY (`idConsulta`) REFERENCES `consulta` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `receta_ibfk_2` FOREIGN KEY (`CURPVeterinario`) REFERENCES `consulta` (`CURPVeterinario`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `receta_ibfk_3` FOREIGN KEY (`CURPDueno`,`idMascota`) REFERENCES `consulta` (`CURPDueno`, `idMascota`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `veterinario`
--
ALTER TABLE `veterinario`
  ADD CONSTRAINT `VeterinarioFK` FOREIGN KEY (`CURPVeterinario`) REFERENCES `usuario` (`CURP`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



