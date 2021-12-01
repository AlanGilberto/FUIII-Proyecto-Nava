-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 04:56:09
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `central_camionera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camiones`
--

CREATE TABLE `camiones` (
  `id_camion` int(20) NOT NULL,
  `chofer` varchar(50) NOT NULL,
  `salida` varchar(50) NOT NULL,
  `destino` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `pasajeros` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `camiones`
--

INSERT INTO `camiones` (`id_camion`, `chofer`, `salida`, `destino`, `tipo`, `marca`, `pasajeros`) VALUES
(1, 'Jose Alfredo', '11:00am', 'CDMX', 'Turista', 'Ford', 60),
(2, 'Miguel de la Madrid', '01:30pm', 'Zacatecas', 'Premium', 'Ford', 58),
(3, 'Carlos Andres', '12:30pm', 'Durango', 'Turista', 'Ford', 59);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chofer`
--

CREATE TABLE `chofer` (
  `id` int(10) NOT NULL,
  `nombre` varchar(16) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido1` varchar(16) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido2` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `edad` int(3) NOT NULL,
  `telefono` int(16) NOT NULL,
  `direccion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `chofer`
--

INSERT INTO `chofer` (`id`, `nombre`, `apellido1`, `apellido2`, `edad`, `telefono`, `direccion`) VALUES
(1, 'Juancho', 'Vargas', 'Vasquez', 35, 656874586, ' SIERRA DE LA CANDELARIA #5828 , COL. ANDRES FIGUEROA , JUAREZ , CHIH , C.P. 32650 '),
(2, 'Victor', 'Mendez', 'Mendez', 43, 656214698, ' AV EJERCITO NACIONAL 5911 , SAN JOSE , CIUDAD JUAREZ , CHIH , C.P. 32390 '),
(3, 'Miguel', 'Rubio', 'Santos', 58, 656873646, ' 4TA SUR 102 , CENTRO , DELICIAS , CHIH , C.P. 33000 '),
(4, 'Eduardo', 'Portillo', 'Vega', 66, 656246331, ' PASEO DE LA VICTORIA 4370 905 , PARTIDO IGLESIAS , JUAREZ , CHIH , C.P. 32528 '),
(5, 'Luis', 'Mosqueda', 'Casares', 36, 656942556, ' AV. TECNOLOGICO 4503 , PARTIDO ESCOBEDO , JUAREZ , CHIH , C.P. 32330 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

CREATE TABLE `destinos` (
  `id_viaje` int(10) NOT NULL,
  `destino` varchar(50) NOT NULL,
  `salida` varchar(25) NOT NULL,
  `horario_salida` time(6) NOT NULL,
  `id_camion` int(50) NOT NULL,
  `horario_regreso` time(6) NOT NULL,
  `retraso` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`id_viaje`, `destino`, `salida`, `horario_salida`, `id_camion`, `horario_regreso`, `retraso`) VALUES
(1, 'Guadalajara', 'Cd Juarez', '10:00:00.000000', 2, '17:00:00.000000', '01:00:00.000000'),
(2, 'Toluca', 'Cd Juarez', '12:00:00.000000', 1, '21:00:00.000000', '00:00:00.000000'),
(3, 'Guadalajara', 'Cd Juarez', '09:00:00.000000', 3, '16:00:00.000000', '00:00:00.000000'),
(4, 'Toluca', 'Cd Juarez', '13:00:00.000000', 4, '08:00:00.000000', '02:00:00.000000'),
(5, 'Mazatlan', 'Tijuana', '06:00:00.000000', 5, '19:00:00.000000', '00:00:00.000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(12) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido1` varchar(30) NOT NULL,
  `apellido2` varchar(30) NOT NULL,
  `telefono` int(16) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `ocupacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `apellido1`, `apellido2`, `telefono`, `direccion`, `ocupacion`) VALUES
(1, 'Alfredo', 'Rodriguez', 'Sanchez', 65624415, ' JUAREZ PORVENIR 8704 16 , PARTIDO SENECU , JUAREZ , CHIH , C.P. 32459 ', 'Chofer'),
(2, 'Eduardo', 'Flores', 'Morales', 656412684, ' MELON 6404 , EL GRANJERO , JUAREZ , CHIH , C.P. 32690 ', 'Gerente'),
(3, 'Luis', 'Zapién', 'de Leon', 65624892, ' JOSE BORUNDA 1720 LOCAL 102 , PARTIDO ROMERO , CD. JUAREZ , CHIH , C.P. 32030 ', 'Atencion a cliente'),
(5, 'fernando', 'suarez', 'holguin', 2147483647, 'AV. PLUTARCO ELIAS CALLES NORTE 1002 , PROGRESISTA , JUAREZ , CHIH , C.P. 32310', 'Chofer');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camiones`
--
ALTER TABLE `camiones`
  ADD PRIMARY KEY (`id_camion`);

--
-- Indices de la tabla `chofer`
--
ALTER TABLE `chofer`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`id_viaje`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `camiones`
--
ALTER TABLE `camiones`
  MODIFY `id_camion` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `chofer`
--
ALTER TABLE `chofer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `destinos`
--
ALTER TABLE `destinos`
  MODIFY `id_viaje` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
