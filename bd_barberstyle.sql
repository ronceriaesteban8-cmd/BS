-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2023 a las 16:20:06
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_barberstyle`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `Id` int(11) NOT NULL,
  `Administrador` varchar(100) NOT NULL,
  `Clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`Id`, `Administrador`, `Clave`) VALUES
(1, 'Adm', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `servicio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `imagen`) VALUES
(8, 'https://espaciodentaljaen.com/files/entradas/riesgos-de-los-piercing-en-la-lengua-y-en-la-boca-dentista-ja-n-espacio-dental-ja-n.jpg'),
(9, 'https://www.pitayajoyeria.com/cdn/shop/products/piercingdezirconiaminititaniogradoimplante.jpg?v=1624381780'),
(18, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSK1akReMmN8x_7WTWVRPaGqdMEX2RoNwp34Q&usqp=CAU'),
(19, 'https://media.revistagq.com/photos/5ef48c064786c513db97a443/4:3/w_3359,h_2519,c_limit/cortes-pelo-verano-gq5.jpg'),
(20, 'https://cdn.shopify.com/s/files/1/0043/5961/8632/files/feed_Adamina_1_480x480.jpg?v=1651142671'),
(22, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyeHtgWe2HK79iLChf-3A2-LRpOteRg0Hhkw&usqp=CAU');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `servicio` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL,
  `duracion` varchar(10) NOT NULL,
  `precio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `servicio`, `img`, `duracion`, `precio`) VALUES
(10, 'Perfilación de cejas', 'https://i0.wp.com/thehappening.com/wp-content/uploads/2017/05/cejas-hombre-4.jpg?resize=1024%2C694&ssl=1', '5 min', '4.000'),
(11, 'Corte', 'https://i.pinimg.com/550x/78/eb/e2/78ebe2b85dc6c5ef29abf464b0989016.jpg', '45 min', '18.000'),
(12, 'Tinturas', 'https://i.pinimg.com/236x/66/d2/2a/66d22aa25b99a3ac4e5354cc3cec6d3e.jpg', '2 horas', '70.000'),
(13, 'Skin care', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPApkt6j0UmRTi5jxOAatU0UPGFk9E8QYuRQ&usqp=CAU', '20 min', '20.000'),
(14, 'Perforación lengua', 'https://espaciodentaljaen.com/files/entradas/riesgos-de-los-piercing-en-la-lengua-y-en-la-boca-dentista-ja-n-espacio-dental-ja-n.jpg', '15min', '35.000'),
(15, 'Perfilación de barba', 'https://i.ytimg.com/vi/eUEwagTamZ0/maxresdefault.jpg', '12 min', '8.000'),
(21, 'Piercing ceja', 'https://i.pinimg.com/1200x/aa/1b/76/aa1b761ebafc74353c8ba7fc9ef1a7ee.jpg', '7 min', '30.000'),
(22, 'Corte infantl', 'https://i.pinimg.com/originals/97/ed/d1/97edd1b82626f373301425c51c07e246.jpg', '15 min', '16.000'),
(23, 'Piercing medusa', 'https://i.pinimg.com/originals/df/f3/0b/dff30bc3e135b29e8f845c9ca7975f04.jpg', '6 min', '25.000'),
(24, 'Corte mujer', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG-E_zKB4VECsFiYGyHuQyoCKU5gBLorsjF73pTQQSIcvMhzq0GcVzcQk_ImnW5266w_k&usqp=CAU', '15 min', '15.000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Apellido`, `Email`, `Telefono`, `Clave`) VALUES
(1, 'Esteban', 'Ronceria', 'estebanronceria8@gmail.com', '7894561235', '1234'),
(25, 'tilin', 'jeje', 'ola@gmail.com', '111', '111');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
