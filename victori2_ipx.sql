-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2020 at 11:25 AM
-- Server version: 5.6.47
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `victori2_ipx`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `tipo_doc` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `id_nrodoc` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `pnombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `snombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `papellido` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `sapellido` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `ciudad` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(15) NOT NULL,
  `nombresC` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidosC` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `correoC` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `nombresF` text COLLATE utf8_spanish2_ci NOT NULL,
  `apellidosF` int(15) NOT NULL,
  `correoF` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `id_nrocotizacion` int(12) NOT NULL,
  `usuario` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`tipo_doc`, `id_nrodoc`, `pnombre`, `snombre`, `papellido`, `sapellido`, `ciudad`, `direccion`, `telefono`, `nombresC`, `apellidosC`, `correoC`, `nombresF`, `apellidosF`, `correoF`, `id_nrocotizacion`, `usuario`) VALUES
('cc', '52245374', 'Martha', 'Elena', 'Cantillo', 'Gonzalez', 'Copacabana', 'Cll 57A #53-31', 3045567, 'Mary', 'Hernandez', 'mhernandez@gmail.com', ' Mary', 156545644, 'mhernandez@hotmail.com', 10, 12);

-- --------------------------------------------------------

--
-- Table structure for table `cotizaciones`
--

CREATE TABLE `cotizaciones` (
  `nrocot` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `descripción` longtext COLLATE utf8_spanish2_ci NOT NULL,
  `valor_u` int(10) NOT NULL,
  `valor_t` int(10) NOT NULL,
  `id_nrodoc` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `cotizaciones`
--

INSERT INTO `cotizaciones` (`nrocot`, `cantidad`, `descripción`, `valor_u`, `valor_t`, `id_nrodoc`) VALUES
(12, 10, 'gdhjjkklgigfryty hntry tyutjiuyuh', 1000, 10500, 101);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rol` varchar(50) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `cedula`, `first_name`, `last_name`, `email`, `password`, `rol`, `estado`, `created`) VALUES
(11, '8431644', 'ORFREY ESNEYDER', 'AGUDELO', 'correo@gmail.com', '$2y$04$E0mrsL2M5qZTw8OdTaW5LO6TIqYzz.nvBYUQTAFN0P0nymq.NKarK', 'ADMINISTRADOR SIG', 1, '2020-04-23 18:52:30');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `ident` int(12) NOT NULL,
  `pnombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `snombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `papellido` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `sapellido` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `ext` int(6) NOT NULL,
  `cargo` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `password` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`ident`, `pnombre`, `snombre`, `papellido`, `sapellido`, `correo`, `ext`, `cargo`, `usuario`, `password`) VALUES
(26312973, 'Eleazar', 'Ricardo', 'Marquez', 'Cantillo', 'emarquez@ipx.com.co', 106, 'asesor', 'emarquez', 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`tipo_doc`),
  ADD UNIQUE KEY `Tipo doc` (`tipo_doc`);

--
-- Indexes for table `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD PRIMARY KEY (`nrocot`),
  ADD UNIQUE KEY `NroCot` (`nrocot`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ident`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
