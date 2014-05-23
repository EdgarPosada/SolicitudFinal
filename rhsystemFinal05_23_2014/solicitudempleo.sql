-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2014 at 06:50 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `solicitudempleo`
--
CREATE DATABASE IF NOT EXISTS `solicitudempleo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `solicitudempleo`;

-- --------------------------------------------------------

--
-- Table structure for table `campania`
--

CREATE TABLE IF NOT EXISTS `campania` (
  `id_campania` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `orden` int(11) NOT NULL,
  PRIMARY KEY (`id_campania`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `campania`
--

INSERT INTO `campania` (`id_campania`, `nombre`, `orden`) VALUES
(1, 'ninguna', 1),
(2, 'cash advance', 2),
(3, 'prestamo para negocio', 3),
(4, 'compliance services office', 4),
(5, 'green light', 5);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id_log` int(9) NOT NULL AUTO_INCREMENT,
  `id_solicitud` int(9) NOT NULL,
  `id_estado` int(9) NOT NULL,
  `comentario` text NOT NULL,
  `fecha` date NOT NULL,
  `id_usuario` varchar(250) NOT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id_log`, `id_solicitud`, `id_estado`, `comentario`, `fecha`, `id_usuario`) VALUES
(7, 22, 5, 'Regreso a trabajar.', '2014-05-20', 'Jorge Camacho'),
(8, 22, 1, 'a', '2014-05-20', 'Jorge Camacho'),
(9, 22, 2, 'b', '2014-05-20', 'Jorge Camacho'),
(10, 22, 3, 'c', '2014-05-20', 'Jorge Camacho'),
(11, 22, 4, 'd', '2014-05-20', 'Jorge Camacho'),
(12, 22, 5, 'e', '2014-05-20', 'Jorge Camacho'),
(13, 22, 5, 'f', '2014-05-20', 'Jorge Camacho'),
(14, 22, 6, 'g', '2014-05-20', 'Jorge Camacho'),
(15, 22, 7, 'h', '2014-05-20', 'Jorge Camacho'),
(16, 22, 8, 'i', '2014-05-20', 'Jorge Camacho'),
(17, 21, 8, 'no elegible test ', '2014-05-20', 'Jorge Camacho'),
(18, 22, 8, 'No elegiblesssssssssss', '2014-05-20', 'Jorge Camacho'),
(19, 21, 8, 'f', '2014-05-20', 'Jorge Camacho'),
(20, 22, 3, 'dffffffffffffffff', '2014-05-20', 'Jorge Camacho'),
(21, 22, 4, 'ffffffff', '2014-05-20', 'Jorge Camacho'),
(22, 22, 5, 'fsa', '2014-05-20', 'Jorge Camacho'),
(23, 22, 6, 's', '2014-05-20', 'Jorge Camacho'),
(24, 22, 7, 'ff', '2014-05-20', 'Jorge Camacho'),
(25, 17, 2, 'entrevista para el próximo 22 de mayo', '2014-05-21', 'Recursos Humanos'),
(26, 17, 3, 'Entrenamiento con Tony', '2014-05-21', 'Recursos Humanos'),
(27, 17, 4, 'training', '2014-05-21', 'Recursos Humanos'),
(28, 22, 5, 'Se integra de nuevo a la empresa.', '2014-05-21', 'Recursos Humanos'),
(29, 18, 3, 'dfdsd', '2014-05-21', 'Jorge Camacho');

-- --------------------------------------------------------

--
-- Table structure for table `solicitud`
--

CREATE TABLE IF NOT EXISTS `solicitud` (
  `id_solicitud` int(9) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `correo` varchar(125) NOT NULL,
  `paterno` varchar(125) NOT NULL,
  `materno` varchar(125) NOT NULL,
  `nombre` varchar(125) NOT NULL,
  `fechanac` date NOT NULL,
  `nacionalidad` varchar(125) NOT NULL,
  `genero` varchar(125) NOT NULL,
  `civil` varchar(125) NOT NULL,
  `calle` text NOT NULL,
  `numero` varchar(10) NOT NULL,
  `colonia` varchar(125) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `estado` varchar(125) NOT NULL,
  `municipio` varchar(125) NOT NULL,
  `nombrecto1` varchar(125) NOT NULL,
  `telefonocto1` varchar(30) NOT NULL,
  `nombrecto2` varchar(125) NOT NULL,
  `telefonocto2` varchar(30) NOT NULL,
  `gradoEstudios` varchar(125) NOT NULL,
  `institucion` varchar(125) NOT NULL,
  `edoacademico` varchar(125) NOT NULL,
  `ingles` varchar(125) NOT NULL,
  `estudia` varchar(125) NOT NULL,
  `otrosestudios` varchar(125) NOT NULL,
  `habilidades` varchar(125) NOT NULL,
  `anterior1` varchar(125) NOT NULL,
  `puesto1` varchar(125) NOT NULL,
  `salario1` varchar(125) NOT NULL,
  `anterior2` varchar(125) NOT NULL,
  `puesto2` varchar(125) NOT NULL,
  `salario2` varchar(125) NOT NULL,
  `trabaja` varchar(10) NOT NULL,
  `disponibilidad` varchar(125) NOT NULL,
  `estado_solicitud` int(9) NOT NULL,
  `resultadoExamen` int(11) DEFAULT NULL,
  `campania` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_solicitud`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `solicitud`
--

INSERT INTO `solicitud` (`id_solicitud`, `fecha`, `correo`, `paterno`, `materno`, `nombre`, `fechanac`, `nacionalidad`, `genero`, `civil`, `calle`, `numero`, `colonia`, `cp`, `estado`, `municipio`, `nombrecto1`, `telefonocto1`, `nombrecto2`, `telefonocto2`, `gradoEstudios`, `institucion`, `edoacademico`, `ingles`, `estudia`, `otrosestudios`, `habilidades`, `anterior1`, `puesto1`, `salario1`, `anterior2`, `puesto2`, `salario2`, `trabaja`, `disponibilidad`, `estado_solicitud`, `resultadoExamen`, `campania`) VALUES
(17, '2014-05-08', 'edgar@sancofunding.com', 'Rodriguez', 'Placencia', 'Raul', '2014-05-10', '', 'masculino', 'soltero', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '', '', 'primaria', '', 'pasante', 'basico', 'si', '', '', 'asd', 'asd', 'asd', '', '', '', 'no', 'medio tiempo', 4, 40, '1'),
(18, '2014-05-08', 'otro@correo.com', 'Diaz', 'Dominguez', 'Ernesto', '2014-05-09', '', 'masculino', 'soltero', 'asd', 'asd', 'asd', '', 'asd', 'asd', 'asd', 'asd', '', '', 'primaria', '', 'pasante', 'basico', 'si', '', '', 'asd', 'asd', 'asd', '', '', '', 'no', 'medio tiempo', 3, 34, '1'),
(22, '2014-05-14', 'jorgeglezcamacho@gmail.com', 'Gonzalez', 'Camacho', 'Jorge', '2014-05-15', 'Mexicana', 'masculino', 'soltero', 'Av. ganaderos ', '2481', 'Alianza', '21229', 'Baja California', 'Mexicali', 'Carlos Cervantes', '(686)1223344', 'Luis Villegas', '(686)2778899', 'licenciatura', 'UABC', 'titulado', 'basico', 'no', 'Ingles', 'programador de sistemas ', 'Guruc Webmasters', 'Desarrollador Web', '9200', 'BI Technologies', 'programador de sistemas ', '7200', 'si', 'tiempo completo', 5, 26, '4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(125) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(125) NOT NULL,
  `password` text NOT NULL,
  `type_user` int(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`, `type_user`) VALUES
(22, 'Jorge Camacho', 'jorge@sancofunding.com', '015cf7078224e573dae80f60ed8e2e11', 1),
(54, 'Jorge González Camacho', 'jorgeglezcamacho@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(55, 'Edgar Posada', 'edgar@sancofunding.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(56, 'Eduardo Sandoval', 'eddie@sancofunding.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(57, 'Recursos Humanos', 'recursoshumanos@sancofunding.com', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(58, 'Entrevistador', 'entrevistador@sancofunding.com', '81dc9bdb52d04dc20036dbd8313ed055', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
