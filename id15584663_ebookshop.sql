-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-12-2020 a las 01:06:47
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id15584663_ebookshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Apellido` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contraseña` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Rol` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FechaDeRegistro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `Nombre`, `Apellido`, `correo`, `contraseña`, `Rol`, `FechaDeRegistro`) VALUES
(1, 'Sebastian', 'Reyes', 'sebas@gmail.com', '1234567890', 'super administrador', '2020-12-06 18:22:18'),
(2, 'Luis', 'Castorena', 'luis@gmail.com', '1234567890', 'estadisticas', '2020-12-06 18:22:56'),
(3, 'Hector', 'Luna', 'hector@gmail.com', '1234567890', 'atencion', '2020-12-06 18:23:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL,
  `NombreAutor` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ApellidosAutor` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nacionalidad` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FNacimiento` date DEFAULT NULL,
  `id_nacionalidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `NombreAutor`, `ApellidosAutor`, `Nacionalidad`, `FNacimiento`, `id_nacionalidad`) VALUES
(1, 'Stephen', 'Hawking', 'Estadounidense', '1942-01-08', 15),
(2, 'Olga', 'Wornat', 'Argentina', '1959-08-02', 1),
(3, 'Daniel', 'Habif', 'Mexicana', '1983-10-05', 26),
(4, 'Woody', 'Allen', 'Estadounidense', '1935-12-01', 15),
(5, 'Mark', 'Manson', 'Estadounidense', '1984-03-09', 15),
(6, 'Anabel', 'Hernández', 'Mexicana', '1971-04-25', 26),
(7, 'Guillermo', 'Arriaga', 'Mexicana', '1958-03-13', 26),
(8, 'Rick', 'Riordan', 'Estadounidense', '1964-01-05', 15),
(9, 'Antoine', 'de Saint Exupery', 'Francesa', '1900-01-29', 17),
(10, 'Joanne', 'Rowling', 'Británica', '1965-07-31', 4),
(11, 'Edward', 'De Bono', 'Española', '1933-05-19', 14),
(12, 'Darren', 'Shan', 'Británica', '1972-07-02', 4),
(13, 'Rachel', 'Hollis', 'Estadounidense', '1983-01-09', 15),
(14, 'Daniel', 'H. Pink', 'Estadounidense', '1964-07-23', 15),
(15, 'Kim', 'Richardson', 'Canadiense', '1965-12-22', 5),
(16, 'Kiran', 'Millwood', 'Británica', '1990-03-29', 4),
(17, 'Bob', 'Woodward', 'Estadounidense', '1943-03-26', 15),
(18, 'Edith', 'Eger', 'Finlandesa', '1927-09-29', 16),
(19, 'Alberto', 'Chan', 'Española', '1986-11-23', 14),
(20, 'Paul', 'Watzlawick', 'Estadounidense', '1921-01-25', 15),
(21, 'Julie', 'Murphy', 'Estadounidense', '1985-11-08', 15),
(22, 'Gail', 'Brenner', 'Estadounidense', '1964-02-18', 15),
(23, 'Edgar', 'Poe', 'Estadounidense', '1809-01-19', 15),
(24, 'Jules', 'Verne', 'Francesa', '1928-02-08', 17),
(25, 'Hilary', 'Clinton', 'Estadounidense', '1947-10-26', 15),
(26, 'Ken', 'Follett', 'Británica', '1949-06-05', 4),
(27, 'Luis', 'Navarro', 'Chilena', '1984-08-22', 6),
(28, 'Guadalupe', 'Nettel', 'Mexicana', '1973-05-27', 26),
(29, 'Sophie', 'Kinsella', 'Británica', '1969-12-12', 4),
(30, 'R.M', 'Romero', 'Española', '1952-04-17', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor_libro`
--

CREATE TABLE `autor_libro` (
  `id_autor` int(11) DEFAULT NULL,
  `id_libro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `autor_libro`
--

INSERT INTO `autor_libro` (`id_autor`, `id_libro`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_libro` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `FechaCarrito` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesventa`
--

CREATE TABLE `detallesventa` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `precio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `id_editorial` int(11) NOT NULL,
  `Editorial` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Pais` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`id_editorial`, `Editorial`, `Pais`) VALUES
(1, 'Debate', 'México'),
(2, 'E-BOOKARAMA', 'México'),
(3, 'Roca editorial', 'México'),
(4, 'Paidos Mexico', 'México'),
(5, 'GRIJALBO', 'México'),
(6, 'ALFAGUARA', 'México'),
(7, 'SALAMADRA INFANTIL Y JUVENIL', 'México'),
(8, 'SALAMANDRA BOLSILLO', 'México'),
(9, '', 'México'),
(10, 'Debate', 'Estados Unidos'),
(11, 'Debate', 'Estados Unidos'),
(12, 'Debate', 'México'),
(13, 'Debate', 'California'),
(14, 'Debate', 'México'),
(15, 'Debate', 'México'),
(16, 'Debate', 'México'),
(17, 'Debate', 'Estados Unidos'),
(18, 'Debate', 'México'),
(19, 'Debate', 'Estados Unidos'),
(20, 'Debate', 'México'),
(21, 'Debate', 'Estados Unidos'),
(22, 'Debate', 'Estados Unidos'),
(23, 'Debate', 'México'),
(24, 'Debate', 'México'),
(25, 'Debate', 'México'),
(26, 'Debate', 'México');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial_libro`
--

CREATE TABLE `editorial_libro` (
  `id_editorial` int(11) DEFAULT NULL,
  `id_libro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `editorial_libro`
--

INSERT INTO `editorial_libro` (`id_editorial`, `id_libro`) VALUES
(1, 1),
(24, 2),
(25, 3),
(20, 4),
(25, 5),
(5, 6),
(6, 7),
(7, 8),
(5, 9),
(9, 10),
(4, 11),
(10, 12),
(11, 13),
(12, 14),
(13, 15),
(14, 16),
(3, 17),
(12, 18),
(16, 19),
(17, 20),
(18, 21),
(19, 22),
(2, 23),
(21, 24),
(22, 25),
(23, 26),
(12, 27),
(26, 28),
(15, 29),
(3, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `Genero` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `Genero`) VALUES
(1, 'Infantiles/Juveniles'),
(2, 'Humor y Sátira'),
(3, 'Arte'),
(4, 'Educativos'),
(5, 'Partituras '),
(6, 'Poesía'),
(7, 'Filosofía'),
(8, 'Clásicos'),
(9, 'Romance'),
(10, 'Novelas'),
(11, 'Erótica'),
(12, 'Derecho'),
(13, 'Deportes y Recreación'),
(14, 'Hogar y Jardín'),
(15, 'Tecnología e Ingenieria'),
(16, 'Viajes'),
(17, 'Ficción general'),
(18, 'Ficción religiosa'),
(19, 'Ficción literaria'),
(20, 'Ciencia y matemática');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero_libro`
--

CREATE TABLE `genero_libro` (
  `id_genero` int(11) DEFAULT NULL,
  `id_libro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `genero_libro`
--

INSERT INTO `genero_libro` (`id_genero`, `id_libro`) VALUES
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(10, 6),
(10, 7),
(1, 8),
(1, 9),
(1, 10),
(4, 11),
(10, 12),
(1, 13),
(4, 14),
(10, 15),
(10, 16),
(4, 17),
(10, 18),
(4, 19),
(1, 20),
(1, 21),
(4, 22),
(10, 23),
(10, 24),
(4, 25),
(10, 26),
(4, 27),
(1, 28),
(1, 29),
(1, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historiaregistro`
--

CREATE TABLE `historiaregistro` (
  `id_registro` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `TipoCambio` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TablaSeleccionada` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FechaDelCambio` datetime DEFAULT NULL,
  `PrecioNuevo` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `isbn_libro`
--

CREATE TABLE `isbn_libro` (
  `isbn` int(11) DEFAULT NULL,
  `id_libro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `Titulo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_Autor` int(11) DEFAULT NULL,
  `id_Genero` int(11) DEFAULT NULL,
  `id_Editorial` int(11) DEFAULT NULL,
  `NoPaginas` int(11) DEFAULT NULL,
  `Precio` decimal(19,4) DEFAULT NULL,
  `isbn` bigint(22) DEFAULT NULL,
  `Idioma` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Edicion` int(11) DEFAULT NULL,
  `Año` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ImagenLibro` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `href` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `Titulo`, `id_Autor`, `id_Genero`, `id_Editorial`, `NoPaginas`, `Precio`, `isbn`, `Idioma`, `Edicion`, `Año`, `ImagenLibro`, `href`) VALUES
(1, 'La Teoría del Todo', 1, 4, 1, 416, 25.0000, 9788416620524, 'Español', 1, '2020', 'Recursos/img/teoria.jpg', 'teoriaTodo.php'),
(2, 'Felipe, El Oscuro', 2, 4, 24, 416, 10.0000, 9788416620524, 'Español', 1, '2020', 'Recursos/img/felipe.jpg', 'felipeOscuro.php'),
(3, 'Inquebrantables', 3, 4, 25, 416, 45.0000, 9788416620524, 'Español', 1, '2020', 'Recursos/img/increbrantable.jpg', 'inquebrantables.php'),
(4, 'A propósito de nada', 4, 4, 20, 416, 30.0000, 9788416620524, 'Español', 1, '2020', 'Recursos/img/proposito.jpg', 'propositoDeNata.php'),
(5, 'El Sutil Arte de que te Importe un Caraj*', 5, 4, 25, 416, 35.0000, 9788416620524, 'Español', 1, '2020', 'Recursos/img/sutilarte.jpg', 'suiteArte.php'),
(6, 'El traidor', 6, 10, 5, 416, 30.0000, 9788416620524, 'Español', 1, '2020', 'Recursos/img/traidor.jpg', 'elTraidor.php'),
(7, 'Salvar Fuego', 7, 10, 6, 416, 60.0000, 9788416620524, 'Español', 1, '2020', 'Recursos/img/salvarfuego.jpg', 'salvarFuego.php'),
(8, 'Percy Jackson Y El Ladron del Rayo', 8, 1, 7, 416, 60.0000, 9788416620524, 'Español', 1, '2020', 'Recursos/img/percyjackson.jpg', 'ladronRayo.php'),
(9, 'El Principito', 9, 1, 5, 416, 40.0000, 9788416620524, 'Español', 1, '2020', 'Recursos/img/principito.jpg', 'pricipito.php'),
(10, 'Harry Potter y la Piedra Filosofal', 10, 1, 9, 416, 45.0000, 9788416620524, 'Español', 1, '2020', 'Recursos/img/harry.jpg', 'harryPotter1.php'),
(11, 'El poder del pensamiento lateral para la creación de nuevas ideas', 11, 4, 10, 464, 70.0000, 9789688532676, 'Español', 1, '2013', 'Recursos/img/Pensamientocreativo.png', 'PensamientoCreativo.php'),
(12, 'Demon thief', 12, 10, 4, 250, 50.0000, 9780316012386, 'Español', 1, '2013', 'Recursos/img/Demonthief.png', 'DemonThief.php'),
(13, 'Un plan sin pretextos para abrazar y alcanzar tus metas', 13, 1, 11, 286, 70.0000, 9781400213603, 'Español', 1, '2019', 'Recursos/img/Amigadisc.png', 'AmigaDisc.php'),
(14, '¿Cuándo?: La ciencia de encontrar el momento preciso', 14, 4, 12, 604, 60.0000, 9788417568023, 'Español', 1, '2018', 'Recursos/img/Monemtop.png', 'MomentoP.php'),
(15, 'El Señor de la Obscuridad', 15, 10, 13, 306, 65.0000, 9780463876268, 'Español', 1, '2019', 'Recursos/img/Elseñorobsc.png', 'ElSeñorObsc.php'),
(16, 'Vardo: La isla de las mujeres', 16, 10, 14, 381, 30.0000, 9788418217227, 'Español', 1, '2020', 'Recursos/img/IslaWomen.png', 'VardoIslaWomen.php'),
(17, 'Rabia', 17, 4, 3, 589, 120.0000, 9788418417603, 'Español', 1, '2020', 'Recursos/img/Rabia.png', 'Rabia.php'),
(18, 'La bailarina de Auschwitz', 18, 10, 12, 339, 50.0000, 9788408188346, 'Español', 1, '2020', 'Recursos/img/LaBailarinaAusch.png', 'LabailarinadeAuschwitz.php'),
(19, 'Educación financiera', 19, 4, 16, 176, 65.0000, 9788416620524, 'Español', 1, '2016', 'Recursos/img/EducaF.png', 'EducaciónF.php'),
(20, 'El arte de amargarse la vida', 20, 1, 17, 83, 35.0000, 9788425432019, 'Español', 1, '2013', 'Recursos/img/Amargo.png', 'ElArteAmargo.php'),
(21, 'Dumplin', 21, 1, 18, 388, 75.0000, 9788416858187, 'Español', 1, '2017', 'Recursos/img/Dumplin.png', 'Dumplin.php'),
(22, 'Inglés para Dummies', 22, 4, 19, 627, 120.0000, 9788432900198, 'Español', 1, '2012', 'Recursos/img/InlgesDummies.png', 'InglesDummies.php'),
(23, 'El Gato negro', 23, 10, 2, 19, 15.0000, 9788827576915, 'Español', 1, '2018', 'Recursos/img/ElGato.png', 'ElGatoBlack.php'),
(24, 'La vuelta al mundo en 80 días', 24, 10, 21, 275, 50.0000, 9788832951035, 'Español', 1, '1873', 'Recursos/img/LaVueltaAlM.png', 'LaVueltaAlMundo.php'),
(25, 'Lo que pasó', 25, 4, 22, 755, 70.0000, 9781982102029, 'Español', 1, '2018', 'Recursos/img/LoQuePaso.png', 'LoQuePaso.php'),
(26, 'Las tinieblas y el alba', 26, 10, 23, 936, 65.0000, 9786073196987, 'Español', 1, '2020', 'Recursos/img/Tinieblas.png', 'LasTinieblasyElAlba.php'),
(27, 'Los 4 hábitos de la gente delgada', 27, 4, 12, 236, 35.0000, 9788408206095, 'Español', 1, '2019', 'Recursos/img/LosCuatroHábitos.png', 'Los4Hábitos.php'),
(28, 'La hija única', 28, 1, 26, 217, 25.0000, 9788433941855, 'Español', 1, '2016', 'Recursos/img/HijaÚnica.png', 'LaHijaÚnica.php'),
(29, 'Mi vida (no del todo) perfecta', 29, 1, 15, 473, 35.0000, 9788417302122, 'Español', 1, '2017', 'Recursos/img/MiVida.png', 'MiVida.php'),
(30, 'El fabricante de muñecas', 30, 1, 3, 291, 25.0000, 9788417167332, 'Español', 1, '2017', 'Recursos/img/Muñecas.png', 'FabricanteDeMuñecas.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros_stock`
--

CREATE TABLE `libros_stock` (
  `id_libro` int(11) NOT NULL,
  `isbn` int(11) DEFAULT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UnidadesEnStock` int(11) DEFAULT NULL,
  `FechaDeEntrada` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `masvendidos`
--

CREATE TABLE `masvendidos` (
  `id_libro` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FechaDeVenta` datetime DEFAULT NULL,
  `CantidadVendidos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `masvisitados`
--

CREATE TABLE `masvisitados` (
  `id_libro` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FechaDeVisita` datetime DEFAULT NULL,
  `CantidadDeVisitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodopago`
--

CREATE TABLE `metodopago` (
  `id_metodo` int(11) NOT NULL,
  `nombreMetodo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacionalidades`
--

CREATE TABLE `nacionalidades` (
  `Id` int(11) NOT NULL,
  `Nacionalidad` varchar(35) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `nacionalidades`
--

INSERT INTO `nacionalidades` (`Id`, `Nacionalidad`) VALUES
(1, 'Argentina'),
(2, 'Boliviana'),
(3, 'Brasileña'),
(4, 'Británica'),
(5, 'Canadiense'),
(6, 'Chilena'),
(7, 'China'),
(8, 'Colombiana'),
(9, 'Costarricense'),
(10, 'Cubana'),
(11, 'Dominica'),
(12, 'Dominicana'),
(13, 'Egipcia'),
(14, 'Española'),
(15, 'Estadounidense'),
(16, 'Finlandesa'),
(17, 'Francesa'),
(18, 'Griega'),
(19, 'Guatemalteca'),
(20, 'Hondureña'),
(21, 'Húngara'),
(22, 'Irlandesa'),
(23, 'Islandesa'),
(24, 'Italiana'),
(25, 'Jamaiquina'),
(26, 'Mexicana'),
(27, 'Nicaragüense'),
(28, 'Norcoreana'),
(29, 'Panameña'),
(30, 'Paraguaya'),
(31, 'Peruana'),
(32, 'Puertorriqueña'),
(33, 'Salvadoreña'),
(34, 'Sudafricana'),
(35, 'Sudcoreana'),
(36, 'Venezolana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id_libro` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FechaInicio` datetime DEFAULT NULL,
  `FechaFinal` datetime DEFAULT NULL,
  `PrecioViejo` decimal(10,0) DEFAULT NULL,
  `PrecioNuevo` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendaciones`
--

CREATE TABLE `recomendaciones` (
  `id_libro` int(11) NOT NULL,
  `titulo` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FechaDeRecomendacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `NombreCliente` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ApellidosCliente` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Pais` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ciudad` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contraseña` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `NombreCliente`, `ApellidosCliente`, `Pais`, `Ciudad`, `correo`, `contraseña`) VALUES
(1, 'Noe', 'Reyes', 'Mexico', 'Aguascalientes', 'noe@gmail.com', 123),
(2, 'Juan', 'Lopez', 'MExico', 'Aguascalientes', 'juan@gmail.com', 1234),
(3, 'Carlos', 'Lopez', 'Mexico', 'Camerun', 'manuel@gamil.com', 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_libro` int(11) DEFAULT NULL,
  `id_metodo` int(11) DEFAULT NULL,
  `FechaVenta` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitaspagina`
--

CREATE TABLE `visitaspagina` (
  `id_visita` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `FechaDeVisita` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wishList`
--

CREATE TABLE `wishList` (
  `id_libro` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FechaWishList` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `autor_libro`
--
ALTER TABLE `autor_libro`
  ADD KEY `FK__autor_lib__id_au__797309D9` (`id_autor`),
  ADD KEY `FK__autor_lib__id_li__7A672E12` (`id_libro`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD KEY `FK__carrito__id_libr__01142BA1` (`id_libro`),
  ADD KEY `FK__carrito__id_usua__02084FDA` (`id_usuario`);

--
-- Indices de la tabla `detallesventa`
--
ALTER TABLE `detallesventa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`id_editorial`);

--
-- Indices de la tabla `editorial_libro`
--
ALTER TABLE `editorial_libro`
  ADD KEY `FK__editorial__id_ed__7B5B524B` (`id_editorial`),
  ADD KEY `FK__editorial__id_li__7C4F7684` (`id_libro`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `genero_libro`
--
ALTER TABLE `genero_libro`
  ADD KEY `FK__genero_li__id_ge__74AE54BC` (`id_genero`),
  ADD KEY `FK__genero_li__id_li__75A278F5` (`id_libro`);

--
-- Indices de la tabla `historiaregistro`
--
ALTER TABLE `historiaregistro`
  ADD PRIMARY KEY (`id_registro`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `isbn_libro`
--
ALTER TABLE `isbn_libro`
  ADD KEY `FK__isbn_libro__isbn__02FC7413` (`isbn`),
  ADD KEY `FK__isbn_libr__id_li__03F0984C` (`id_libro`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `FK__Libros__id_Autor__6B24EA82` (`id_Autor`),
  ADD KEY `FK__Libros__id_Gener__6C190EBB` (`id_Genero`),
  ADD KEY `FK__Libros__id_Edito__6D0D32F4` (`id_Editorial`);

--
-- Indices de la tabla `libros_stock`
--
ALTER TABLE `libros_stock`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `masvendidos`
--
ALTER TABLE `masvendidos`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `masvisitados`
--
ALTER TABLE `masvisitados`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  ADD PRIMARY KEY (`id_metodo`);

--
-- Indices de la tabla `nacionalidades`
--
ALTER TABLE `nacionalidades`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `recomendaciones`
--
ALTER TABLE `recomendaciones`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `FK__venta__id_libro__18EBB532` (`id_libro`),
  ADD KEY `FK__venta__id_metodo__19DFD96B` (`id_metodo`),
  ADD KEY `FK__venta__id_usuari__1AD3FDA4` (`id_usuario`);

--
-- Indices de la tabla `visitaspagina`
--
ALTER TABLE `visitaspagina`
  ADD PRIMARY KEY (`id_visita`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `wishList`
--
ALTER TABLE `wishList`
  ADD KEY `FK__WishList__id_usu__1BC821DD` (`id_usuario`),
  ADD KEY `FK__WishList__id_lib__7E37BEF6` (`id_libro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detallesventa`
--
ALTER TABLE `detallesventa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autor_libro`
--
ALTER TABLE `autor_libro`
  ADD CONSTRAINT `FK__autor_lib__id_au__797309D9` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK__autor_lib__id_li__7A672E12` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `FK__carrito__id_libr__01142BA1` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK__carrito__id_usua__02084FDA` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `editorial_libro`
--
ALTER TABLE `editorial_libro`
  ADD CONSTRAINT `FK__editorial__id_ed__7B5B524B` FOREIGN KEY (`id_editorial`) REFERENCES `editorial` (`id_editorial`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK__editorial__id_li__7C4F7684` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `genero_libro`
--
ALTER TABLE `genero_libro`
  ADD CONSTRAINT `FK__genero_li__id_ge__74AE54BC` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK__genero_li__id_li__75A278F5` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `historiaregistro`
--
ALTER TABLE `historiaregistro`
  ADD CONSTRAINT `historiaregistro_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `historiaregistro_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `historiaregistro_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `historiaregistro_ibfk_4` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `isbn_libro`
--
ALTER TABLE `isbn_libro`
  ADD CONSTRAINT `FK__isbn_libr__id_li__03F0984C` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK__isbn_libro__isbn__02FC7413` FOREIGN KEY (`isbn`) REFERENCES `libros` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `FK__Libros__id_Autor__6B24EA82` FOREIGN KEY (`id_Autor`) REFERENCES `autor` (`id_autor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK__Libros__id_Edito__6D0D32F4` FOREIGN KEY (`id_Editorial`) REFERENCES `editorial` (`id_editorial`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK__Libros__id_Gener__6C190EBB` FOREIGN KEY (`id_Genero`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `libros_stock`
--
ALTER TABLE `libros_stock`
  ADD CONSTRAINT `FK__Libros_St__id_li__160F4887` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `masvendidos`
--
ALTER TABLE `masvendidos`
  ADD CONSTRAINT `masvendidos_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `masvendidos_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `masvendidos_ibfk_3` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `masvendidos_ibfk_4` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`);

--
-- Filtros para la tabla `masvisitados`
--
ALTER TABLE `masvisitados`
  ADD CONSTRAINT `masvisitados_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `masvisitados_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `masvisitados_ibfk_3` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `masvisitados_ibfk_4` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`);

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `ofertas_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `ofertas_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `ofertas_ibfk_3` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `ofertas_ibfk_4` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`);

--
-- Filtros para la tabla `recomendaciones`
--
ALTER TABLE `recomendaciones`
  ADD CONSTRAINT `recomendaciones_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `recomendaciones_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `recomendaciones_ibfk_3` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `recomendaciones_ibfk_4` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `FK__venta__id_libro__18EBB532` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK__venta__id_metodo__19DFD96B` FOREIGN KEY (`id_metodo`) REFERENCES `metodopago` (`id_metodo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK__venta__id_usuari__1AD3FDA4` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `visitaspagina`
--
ALTER TABLE `visitaspagina`
  ADD CONSTRAINT `visitaspagina_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `visitaspagina_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `visitaspagina_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `visitaspagina_ibfk_4` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `wishList`
--
ALTER TABLE `wishList`
  ADD CONSTRAINT `FK__WishList__id_lib__7E37BEF6` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK__WishList__id_usu__1BC821DD` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
