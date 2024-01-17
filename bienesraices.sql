-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2024 a las 19:27:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bienesraices`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `titulo` varchar(100) DEFAULT NULL,
  `imagen` varchar(150) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `autor` varchar(30) DEFAULT NULL,
  `parrafo` varchar(300) DEFAULT NULL,
  `descripcion` varchar(10000) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`titulo`, `imagen`, `fecha`, `autor`, `parrafo`, `descripcion`, `id`) VALUES
('Blog para cuidar de tu mascota en tu propiedad', '../../imagenes_plantillas/los-10-sonidos-principales-del-perro.jpg', '2024-01-24', 'Alex Whitney', 'Si deseas una buena vista para tu casa, no dudes en almacenar esta propiedad, gracias a su lago y naturaleza podrás disfrutar de una hermosa vista', 'Suspendisse potenti. Donec semper semper odio, non aliquam magna gravida ut. Vivamus condimentum justo ut viverra efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus maximus nibh ut tortor rutrum porta. Maecenas in dui non libero accumsan elementum sed efficitur est. Sed at vehicula eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra luctus eros, et viverra arcu sollicitudin et. Suspendisse scelerisque arcu odio, et tristique turpis scelerisque in. Sed commodo augue urna, vitae ullamcorper quam laoreet quis. Nulla vulputate molestie dapibus. Praesent auctor finibus urna, non tempus diam pulvinar sed. Donec et lobortis leo. Ut nec dignissim dolor.\r\n\r\nSed vel felis scelerisque, interdum nunc vel, dignissim ipsum. Quisque condimentum arcu non risus gravida, ut porta lacus faucibus. Phasellus ut lectus cursus, venenatis felis sed, efficitur libero. Phasellus fringilla risus arcu, id commodo libero euismod et. Donec tristique sagittis lectus. Etiam lectus mi, placerat in luctus et, semper ullamcorper tellus. Sed sed lacus quis erat volutpat lobortis. Nam suscipit nulla vitae nunc maximus, eu aliquam nisi condimentum. Ut suscipit sed mauris a vulputate. Nunc et nisl vel nibh feugiat ornare eu nec ligula.\r\n\r\nVivamus in dui placerat sapien ultrices accumsan vitae at magna. Nunc vehicula egestas mauris ut finibus. Aenean dignissim ultricies ligula et maximus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras congue dapibus orci, ac cursus justo egestas eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris non tortor purus.', 2),
('La mejor casa, parece un castillo, ¡échale un vistazo!', '../../imagenes_plantillas/Imagenes-de-casas-de-lujo-1.jpg', '2024-01-18', 'Wetto', 'Casa con jardín, echale un vistazo', 'Phasellus quis nunc quam. Proin pretium scelerisque turpis id cursus. Quisque viverra arcu nec nunc bibendum eleifend. Sed in sem in est mollis feugiat. Sed malesuada tortor sed mi posuere, eget porta purus pretium. Integer sagittis dignissim justo eget feugiat. Sed lacinia ipsum tellus, at varius nibh fermentum eu. Nullam ut arcu a leo commodo faucibus eu et dui. Phasellus tempor a dui nec congue. Phasellus viverra urna lorem, id dictum lectus tristique ac. Donec convallis velit tempor tellus sagittis faucibus. Maecenas arcu sapien, rutrum id mauris vel, fermentum egestas nisi. Quisque in dolor eu nisi iaculis auctor commodo sit amet nisi.\r\n\r\nSuspendisse eu metus eleifend quam commodo bibendum. Nunc ut sollicitudin est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec eu orci fringilla, euismod quam a, varius nulla. Curabitur et quam fringilla, posuere augue et, ornare est. Etiam enim turpis, posuere suscipit facilisis nec, laoreet nec sapien. Fusce pharetra at enim eu viverra.\r\n\r\nPellentesque id gravida sem, non congue velit. In vel enim eget mi pulvinar mollis et ac sapien. Maecenas congue rutrum sodales. Praesent porttitor mi nisl, sed congue purus malesuada quis. Mauris vestibulum orci condimentum est lacinia condimentum. In id eros quis ligula scelerisque cursus eget tempor mi. Sed ligula ligula, porttitor vel lorem vitae, mattis scelerisque velit. Vestibulum ex justo, molestie vitae ligula ut, rhoncus pretium magna.', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactanos`
--

CREATE TABLE `contactanos` (
  `imagen` varchar(150) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contactanos`
--

INSERT INTO `contactanos` (`imagen`, `titulo`, `id`) VALUES
('../../imagenes_plantillas/istockphoto-1330168130-612x612.jpg', 'Haz negocio con nosotros y te otorgamos una garantía de 5 años', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `mensaje` varchar(500) DEFAULT NULL,
  `movimiento` varchar(7) DEFAULT NULL,
  `presupuesto` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `opcion_contacto` varchar(10) DEFAULT NULL,
  `codigo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encabezado`
--

CREATE TABLE `encabezado` (
  `imagen` varchar(150) DEFAULT NULL,
  `titulo` varchar(80) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `encabezado`
--

INSERT INTO `encabezado` (`imagen`, `titulo`, `id`) VALUES
('../../imagenes_plantillas/Imagenes-de-casas-de-lujo-1.jpg', 'Tenemos promociones disponibles hasta que el contador acabe. ¡Aprovéchalas!', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedad`
--

CREATE TABLE `propiedad` (
  `imagen` varchar(200) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `banhos` int(11) DEFAULT NULL,
  `garajes` int(11) DEFAULT NULL,
  `habitaciones` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `propiedad`
--

INSERT INTO `propiedad` (`imagen`, `titulo`, `descripcion`, `precio`, `banhos`, `garajes`, `habitaciones`, `id`) VALUES
('../../imagenes_plantillas/casa-lujo.jpg', 'Explorando las Maravillas Subacuáticas', 'Sumérgete en un fascinante viaje submarino mientras exploras las maravillas ocultas de los océanos. Este emocionante tour virtual te llevará a través de vibrantes arrecifes de coral, hogar de una diversidad impresionante de vida marina. Desde coloridos peces tropicales hasta majestuosas criaturas marinas como tortugas y tiburones, esta experiencia te sumergirá en la riqueza y la belleza del mundo submarino.\r\n\r\nDescubre la intrincada red de ecosistemas submarinos y aprende sobre la importancia crucial de la conservación marina. Con datos fascinantes sobre la biodiversidad marina y los esfuerzos para preservar estos entornos frágiles, esta aventura virtual te dejará maravillado y con un profundo aprecio por la vida submarina.', 500000, 5, 4, 2, 26),
('../../imagenes_plantillas/Apio-Arquitectos_Casa-Lago-de-Todos-los-Santos_Alejandra-Valenzuela.jpg', 'Exploración Culinaria por el Mundo', 'Embárcate en un viaje gastronómico que te llevará a través de sabores exquisitos y platos tradicionales de diferentes rincones del planeta. Desde las callejuelas aromáticas de Marrakech hasta los puestos de comida callejera en Bangkok, este recorrido culinario virtual te sumergirá en la riqueza de las cocinas internacionales.\r\n\r\nDescubre la historia detrás de tus platillos favoritos y aprende técnicas culinarias únicas de chefs expertos. Desde la preparación de sushi en Japón hasta la elaboración de auténticas pastas italianas, esta experiencia te acercará a las tradiciones culinarias de diversas culturas. ¡Prepárate para despertar tus sentidos y deleitar tu paladar con esta emocionante aventura culinaria!', 40000, 5, 12, 6, 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedad_comprada`
--

CREATE TABLE `propiedad_comprada` (
  `nombre_completo` varchar(60) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `ciudad` varchar(20) DEFAULT NULL,
  `departamento` varchar(20) DEFAULT NULL,
  `tipo_id` varchar(25) DEFAULT NULL,
  `identificacion` varchar(15) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `detalles_extra` varchar(100) DEFAULT NULL,
  `id_propiedad` int(11) DEFAULT NULL,
  `comprador_nro` int(11) NOT NULL,
  `codigo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonio` varchar(200) DEFAULT NULL,
  `autor` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `testimonial`
--

INSERT INTO `testimonial` (`testimonio`, `autor`, `id`) VALUES
('El trato al usuario fue correcto, me sentí seguro y nunca dudé sobre el proceso de negocio. 100% recomendado para aquellos que necesiten una propiedad o casa', 'Administrador Alejandro', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propiedad`
--
ALTER TABLE `propiedad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propiedad_comprada`
--
ALTER TABLE `propiedad_comprada`
  ADD PRIMARY KEY (`comprador_nro`),
  ADD KEY `id_propiedad` (`id_propiedad`);

--
-- Indices de la tabla `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `propiedad`
--
ALTER TABLE `propiedad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `propiedad_comprada`
--
ALTER TABLE `propiedad_comprada`
  MODIFY `comprador_nro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `propiedad_comprada`
--
ALTER TABLE `propiedad_comprada`
  ADD CONSTRAINT `id_propiedad` FOREIGN KEY (`id_propiedad`) REFERENCES `propiedad` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
