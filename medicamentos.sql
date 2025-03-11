-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2025 a las 01:35:43
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
-- Base de datos: `medicamentos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `n_medicamento` varchar(30) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `f_vencimiento` varchar(50) NOT NULL,
  `c_stock` int(255) NOT NULL,
  `estado` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`id`, `codigo`, `n_medicamento`, `descripcion`, `f_vencimiento`, `c_stock`, `estado`) VALUES
(4, 'MED004', 'Loratadina 10mg', 'Antihistamínico utilizado para tratar los síntomas de alergias como rinitis y urticaria.', '2026-03-10', 120, 'Disponible'),
(5, 'MED005', 'Salbutamol 100mcg', 'Broncodilatador utilizado para el alivio de los síntomas del asma y otras enfermedades respiratorias.', '2025-08-15', 50, 'Agotado'),
(6, 'MED006', 'Enalapril 10mg', 'Inhibidor de la ECA utilizado para tratar la hipertensión y la insuficiencia cardíaca.', '2025-11-01', 100, 'Disponible'),
(7, 'MED007', 'Metformina 500mg', 'Medicamento utilizado en el tratamiento de la diabetes tipo 2.', '2026-01-05', 300, 'Disponible'),
(8, 'MED008', 'Ciprofloxacino 500mg', 'Antibiótico de la clase de las fluoroquinolonas utilizado para tratar infecciones bacterianas.', '2025-07-22', 60, 'Disponible'),
(9, 'MED009', 'Diazepam 5mg', 'Benzodiacepina utilizada para tratar la ansiedad, el insomnio y los trastornos musculares.', '2026-06-10', 80, 'Disponible'),
(10, 'MED010', 'Ácido acetilsalicílico 100mg', 'Utilizado para aliviar el dolor, la fiebre y prevenir problemas cardiovasculares.', '2025-04-05', 200, 'Agotado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
