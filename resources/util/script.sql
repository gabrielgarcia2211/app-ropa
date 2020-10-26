-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para ropa
CREATE DATABASE IF NOT EXISTS `ropa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ropa`;
ULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
-- Volcando estructura para tabla ropa.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ropa.categorias: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `descripcion`, `estado`) VALUES
	(0, 'Prisma', 'Coleccion'),
	(1, 'Caribe', 'Individual'),
	(2, 'Cojuntos', 'Antiguo'),
	(3, 'Casual', 'Pareja'),
	(4, 'Feeling free', 'Colección');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla ropa.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ropa.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla ropa.marcas
CREATE TABLE IF NOT EXISTS `marcas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ropa.marcas: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` (`id`, `nombre`, `descripcion`) VALUES
	(0, 'Latitid', 'Diseñada para las mujeres irreverentes, con actitud, que buscan destinos cosmopolitas que abrazan la fusión de la cultura, el arte y la modernidad.'),
	(1, 'Kitess Clothing', 'calidad en marcha'),
	(2, 'LAFAYETTE', 'El informe de tendencias de Lafayette es el'),
	(3, 'Selvaggi Swimwear', 'Es una marca comprometida con el medio ambiente pues sus telas están hechas a base de redes de pesca fantasma que se dejan en los mares.'),
	(4, 'Senzabela', 'Diseñadores de todas partes del mundo…estamos para darte la libertad de expresarte a través de diseños primaverales'),
	(5, 'Bakana', 'Trajes de baño de todas las formas y colores, su boutique se encuentra en la Roma y ofrece beachwear y accesorios 100 por ciento colombianos que te van a enamorar desde el minuto uno'),
	(6, 'Primavera', 'Estilos Personalizados');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;

-- Volcando estructura para tabla ropa.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT N
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ropa.migrations: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2013_10_11_221113_create_rols_table', 1),
	(2, '2014_10_12_000000_create_users_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2020_10_14_213801_create_marcas_table', 1),
	(6, '2020_10_14_214130_create_categorias_table', 1),
	(7, '2020_10_14_214317_create_productos_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla ropa.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ropa.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla ropa.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `referencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcioncorta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `palabraclave` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `marca_id` int(11) NOT NULL,
  `ruta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productos_categoria_id_foreign` (`categoria_id`),
  KEY `productos_marca_id_foreign` (`marca_id`),
  CONSTRAINT `productos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  CONSTRAINT `productos_marca_id_foreign` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ropa.productos: ~31 rows (aproximadamente)
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id`, `referencia`, `nombre`, `descripcioncorta`, `detalle`, `valor`, `palabraclave`, `estado`, `categoria_id`, `marca_id`, `ruta`) VALUES
	(7, '111', 'Mar', 'libre', 'unico', 65000, 'libre', 'actual', 0, 3, 'mar.PNG'),
	(8, '201', 'Nude', 'Calido', 'ninguno', 45000, 'libre', 'actual', 1, 3, 'piel.PNG'),
	(9, '112', 'Red flowers', 'sencillo y cómodo', 'unico', 45000, 'cómodo', 'Colección', 0, 1, 'azul claro.PNG'),
	(10, '113', 'White sheets', 'Mar', 'ninguno', 55000, 'sensual', 'actual', 0, 2, 'azul delta.PNG'),
	(11, '114', 'Exotic', 'sensual', 'unico', 45000, 'libre', 'actual', 0, 3, 'exotico.PNG'),
	(12, '115', 'Hawaiian', 'Estilo Floral', 'unico', 53000, 'primavera', 'Colección', 0, 4, 'hawaiano.PNG'),
	(13, '116', 'Jungle', 'Estilo salvaje', 'unico', 55000, 'libre', 'actual', 0, 2, 'hojas negras.PNG'),
	(14, '117', 'Purple Sea', 'Estilo libre', 'ninguno', 55000, 'libre', 'actual', 0, 3, 'mar morado.PNG'),
	(15, '118', 'lightning', 'Cómodo y Simple', 'unico', 60000, 'simple', 'actual', 0, 5, 'mar.PNG'),
	(16, '119', 'Spring daisy', 'Simple y Sexy', 'ninguno', 60000, 'primavera', 'Colección', 0, 1, 'margaritas.PNG'),
	(17, '110', 'Passion-red', 'Libre y sexy', 'unico', 55000, 'sensual', 'actual', 0, 2, 'sensual.PNG'),
	(18, '202', 'Night', 'Simple', 'unico', 60000, 'basico', 'actual', 1, 1, 'azul.PNG'),
	(19, '203', 'Forest', 'Natural', 'unico', 65000, 'Selva', 'Colección', 1, 4, 'flores verdes.PNG'),
	(20, '204', 'Flowers Red', 'Estilo jungla', 'unico', 45000, 'Salvaje', 'Colección', 1, 2, 'flroes.PNG'),
	(21, '205', 'Basic black', 'Traje básico negro', 'ninguno', 45000, 'basico', 'actual', 1, 1, 'negro dos.PNG'),
	(22, '301', 'Conjunto de Pijama Pato', 'Cómodo', 'ninguno', 70000, 'cómodo', 'Colección', 2, 5, 'cerdito.PNG'),
	(23, '302', 'Conjunto de Pijama Elmo', 'Comodo', 'ninguno', 55000, 'cómodo', 'Colección', 2, 2, 'elmo.PNG'),
	(24, '303', 'Conjunto de Gatito', 'Simple y Tierno', 'ninguno', 75000, 'cómodo', 'Colección', 2, 4, 'gatitos.PNG'),
	(25, '304', 'Conjunto de Comida China', 'Tierno', 'ninguno', 650000, 'cómodo', 'Colección', 2, 1, 'muchis.PNG'),
	(26, '305', 'Conjunto de Pikachu', 'Tierno y Simple', 'ninguno', 70000, 'sensual', 'Colección', 2, 4, 'pikachu.PNG'),
	(27, '306', 'Conjunto de Pijama Stitch', 'Tierno', 'unico', 750000, 'Tierno', 'Colección', 2, 2, 'stich.PNG'),
	(28, '401', 'Conjunto de Pareja Aguacate', 'Parejas', 'unico', 150000, 'básico', 'Colección', 3, 1, 'aguacate.PNG'),
	(29, '402', 'Conjunto de Pareja Ancla', 'Pareja', 'unico', 145000, 'simple', 'Colección', 3, 3, 'ancla.PNG'),
	(30, '403', 'Conjunto de Pareja Hojas Azules', 'Parejas', 'ninguno', 145000, 'primavera', 'Colección', 3, 2, 'calido.PNG'),
	(31, '404', 'Conjunto de Pareja Estrellas de Mar', 'Mar', 'unico', 150000, 'cómodo', 'Colección', 3, 3, 'estrellas mar.PNG'),
	(32, '405', 'Conjunto de Pareja Kiwi', 'Parejas', 'Primavera', 150000, 'primavera', 'Colección', 3, 3, 'kiwi.PNG'),
	(33, '501', 'Estilo Basico', 'Personalizado', 'Primavera', 45000, 'basico', 'actual', 4, 6, 'estilos.PNG'),
	(34, '502', 'Sombrero Parejas', 'Personalizado', 'ninguno', 80000, 'primavera', 'Colección', 4, 6, 'love blaco.PNG'),
	(35, '503', 'Sombrero con Nombre', 'Estilo Personalizado', 'Primavera', 60000, 'primavera', 'Colección', 4, 6, 'love.PNG'),
	(36, '504', 'Sombrero con Nombre', 'Estilo Personalizado', 'Primavera', 60000, 'primavera', 'Colección', 4, 6, 'nomb.PNG'),
	(37, '505', 'Sombrero Básico con Nombre', 'Estilo Personalizado', 'unico', 55000, 'primavera', 'Colección', 4, 6, 'pavas per.PNG');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla ropa.rols
CREATE TABLE IF NOT EXISTS `rols` (
  `id` int(11) NOT NULL,
  `nombre_rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ropa.rols: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `rols` DISABLE KEYS */;
/*!40000 ALTER TABLE `rols` ENABLE KEYS */;

-- Volcando estructura para tabla ropa.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quienessomos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`),
  KEY `users_rol_foreign` (`rol`),
  CONSTRAINT `users_rol_foreign` FOREIGN KEY (`rol`) REFERENCES `rols` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ropa.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `quienessomos`, `direccion`, `telefono`, `email`, `email_verified_at`, `password`, `username`, `facebook`, `twitter`, `instagram`, `rol`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Camila Arevalo', 'Somos una empresa creada para complacer a nuestro cliente, ofrecer diferentes tipos de traje de baño respecto al diseño de tu preferencia, puedes escoger el tipo de panty que desees .', NULL, NULL, 'dixie63@example.org', '2020-10-17 20:37:34', '$2y$10$isUUiiBfcueJlINBLYeEJ.97rGxlBKxIvCBw7xiEpGpXilzgt.5/6', 'gabo12', NULL, NULL, NULL, NULL, '5vXA3MbiyfxSQlOvSIV5XaggyT0RdV6ewSf2316H6DqIPNY5JUa9w2isEkrB', '2020-10-17 20:37:34', '2020-10-24 19:58:35');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
