-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 11:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barberia`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fabricante` varchar(255) NOT NULL,
  `categoria` enum('Barba','Cabello','Complementos','Fijacion','Afeitado') NOT NULL,
  `precio` double(7,2) UNSIGNED NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `fabricante`, `categoria`, `precio`, `stock`, `descripcion`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Face Fresh Shaving Gel Gold', 'RedOne ', 'Afeitado', 6.31, 60, 'Gel de afeitar de textura ultra lubricante para un afeitado suave y limpio. ', 'FaceFreshShavingGelGold.jpg', '2023-01-28 15:30:18', '2023-02-01 08:40:10'),
(2, 'Beard snake oil whiskey and vanilla', 'Dick johnson', 'Barba', 55.77, 30, 'El aceite Snake beard oil hidrata la piel, acondiciona el cabello y huele muy bien, con el exclusivo aroma de whisky y vainilla de Dick Johnson.', 'Beardsnakeoilwhiskeyandvanilla.jpg', '2023-01-28 15:30:18', '2023-02-01 08:46:46'),
(3, 'Polvos de volumen slick', 'Gorilla', 'Fijacion', 44.59, 40, 'Dos polvos de volumen silk gorilla al mejor precio.', 'Polvosdevolumenslick.jpg', '2023-01-28 15:30:18', '2023-02-01 08:40:10'),
(4, 'American crew Champú', 'Fortifying', 'Cabello', 45.56, 84, 'Gracias al Nuevo Champú Anti Caída American Crew (Champú Anti Hair Loss) con su fórmula única y patentada, los hombres pueden tener un medio sano para el crecimiento rápido del pelo rápido, consiguiendo un pelo más lleno, más grueso y más fuerte. Obteniendo además una mayor prolongación de la vida del cabello.', 'AmericancrewChampu.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(5, 'Pack Barba Piel Fresca y Limpia', 'Bandido', 'Afeitado', 57.84, 67, 'Pack de Champú para barba a base de hierbas que elimina los picores y la caspa de la piel. Limpia y cuida el vello facial y afther shave cream cologne cuida tu piel ,despues del afeitado con un olor muy agradable y masculino.', 'PackBarbaPielFrescayLimpia.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(6, 'Crema Hidratante Expedition Reserve', 'Captain Fawcett', 'Complementos', 32.17, 55, 'Bálsamo elegante con su fórmula a base de extractos vitamínicos y nutrientes de origen vegetal que facilitan la eliminación de toxinas y mantienen el cutis sano y limpio. ', 'CremaHidratanteExpeditionReserve.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(7, 'Aceite para barba tequila sunrise', 'Dick johnson, Schowalter and Hessel', 'Barba', 96.67, 32, 'Deliciosa fragancia hará que tu mandíbula se relaje y tu suelo pélvico palpite al tranquilo ritmo del mediterráneo: una fresca fragancia de naranja y limón con un toque de fruta tropical y un sutil toque de tequila añejado en barrica.', 'Aceiteparabarbatequilasunrise.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(8, 'Cera fiber', 'American crew', 'Cabello', 14.41, 75, 'Este producto de resina aporta grosor, textura y mayor volumen. Ofrece una fijación fuerte y moldeable, con acabado mate. Funciona bien en cabellos de 2 a 8 centímetros de longitud.', 'Cerafiber.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(9, 'Pack bandido afeitado', 'Bandido', 'Afeitado', 23.76, 65, 'Ideal para arreglo de barba y afeitado completo muy fresco.', 'Packbandidoafeitado.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(10, 'Maquinilla de afeitar clásica', 'Fatip Piccol', 'Afeitado', 86.29, 100, 'Ofrece un rendimiento excepcional, su peine perfectamente diseñado, levanta el bello fácilmente facilitando el afeitado y mejorando le apurado. Recomendada para barbas duras.', 'Maquinilladeafeitarclásica.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(11, 'Pomada para el cabello', 'Suavecito', 'Cabello', 36.62, 62, 'Pomada para el cabello soluble en agua tiene una consistencia cremosa, peina con facilidad y proporciona un fuerteagarre para una máxima flexibilidad de estilo.', 'Pomadaparaelcabello.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(12, 'Shaving gel moisturizing effect', 'Bandido', 'Afeitado', 68.44, 64, 'Hidrata y suaviza tu barba  Para antes del afeitado  Para todo tipo de pieles.', 'Shavinggelmoisturizingeffect.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(13, 'Arcilla lightwork slick', 'Gorilla', 'Fijacion', 93.08, 87, 'Arcilla de peinado a base de agua sin parabenos, elaborada con ingredientes naturales producidos éticamente.', 'Arcillalightworkslick.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(14, 'Densify shampoo', 'Beardburys', 'Barba', 76.99, 11, 'Su fórmula rica en cafeína activa la microcirculación y el Oxycell favorece la oxigenación celular del cuero cabelludo. El Aloe Vera acondiciona el cabello dejándolo más suave e hidratado. Aroma mentolado para una sensación de frescor. Libre de parabenos.Lavar y masajear ,dejar actuar 3 minutos.', 'Densifyshampoo.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(15, 'Pack afeitado clásico tradicional de barbería', 'Barberia Laravel', 'Afeitado', 20.48, 12, 'El mejor pack para el afeitado clásico en casa con las mismas técnicas que en la peluquería barbería.', 'Packafeitadoclásicotradicionaldebarbería.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(16, 'Aceite barba citrus', 'Mr Bear', 'Barba', 57.15, 80, 'Hidrata y nutre tu barba, aportándole vivacidad y volumen. Permite un cuidado extremo, ya que facilita el peinado del vello.', 'Aceitebarbacitrus.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(17, 'Navaja de afeitado tradicional con paquete de hojillas', 'Barberia Laravel', 'Afeitado', 10.10, 64, 'Navaja barbera para un afeitado tradicional. Un material resistente a la corrosión, de muy larga duración y con un brillo atractivo. El afeitado tradicional es un afeitado más respetuoso con tu piel y con el medio ambiente.', 'Navajadeafeitadotradicionalconpaquetedehojillas.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(18, 'Grease medium hold green', 'Reuzel', 'Cabello', 72.50, 32, 'Pomada Reuzel es más fuerte cuando se aplica sobre el cabello seco, para una fijación extra fuerte, use el secador de pelo antes de aplicar. Para una fijacion media, simplemente seque con una toalla antes de aplicar.', 'Greasemediumholdgreen.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(19, 'Hair styling wax', 'Ossion', 'Fijacion', 33.24, 57, 'Estilo con brillo, fuerte fijacion. Provoca diferentes y creativos estilos mientras le das forma a tu cabello.', 'Hairstylingwax.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(20, 'Colonia Ricki Hall Booze&Baccy', 'Captain Fawcett', 'Complementos', 0.73, 100, 'Colonia masculina con notas altas de ron, naranja y bergamota que combina un fondo exuberante de hoja de tabaco fresco y miel. En  las notas medias destaca el incienso y la cálida vainilla que bailan con el tomillo blanco y el cilantro.', 'ColoniaRickiHall.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(21, 'Water soluble high sheen red', 'Reuzel', 'Cabello', 1.14, 52, 'Pomada Ruezel es más fuerte cuando se aplica sobre el cabello seco, para una fijación fuerte, use el secador de pelo antes de aplicar. Para una fijacion media, simplemente seque con una toalla antes de aplicar.', 'Watersolublehighsheenred.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(22, 'Brocha barbera tradicional para afeitado clásico', 'Barberia Laravel', 'Afeitado', 15.85, 44, 'Brocha de afeitado barbera. Con esta brocha de afeitar barbera profesional con de pelo caballo extra largo y mango de madera de boj y virola metálica disfrutarás del placer del afeitado diario. El pelo de caballo es más absorbente que el de tejón y que las fibras sintéticas lo que permite una mejor aplicación de la crema y jabón para conseguir un afeitado más apurado.', 'Brochabarberatradicionalparaafeitadoclásico.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(23, 'Bálsamo para barba', 'Mr Bear', 'Barba', 76.76, 94, 'Bálsamo para barba \"Mr Bear Family Beard Balm Citrus\" hecho con manteca y aceites naturales. Suaviza e hidrata tu barba y tu piel con un delicioso aroma cítrico.', 'Bálsamoparabarba.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(24, 'Pomada deluxe', 'Uppercut', 'Cabello', 18.47, 32, 'La Uppercut Deluxe es un moderna pomada a base de agua. Fue desarrollada por barberos y es adecuada para todo tipo de cabellos y peinados. El diseño de la lata es realmente llamativo, y no es sólo por los fanáticos del boxeo si no que embelleze el cuarto de baño . La fragancia es muy sutil en el cabello y deja en el ambiente un olor que todo el mundo se preguntará que huele tan bien.', 'Pomadadeluxe.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(25, 'Pomada deluxe Monster', 'Uppercut', 'Cabello', 95.65, 51, 'Monster Hold de Uppercut es una pomada muy pesada, elaborada de forma tradicional, resistente al sudor y con un aroma de menta suave. Sin la química moderna, pero con cera de abejas y lanolina. Empaquetado en una caja de lata con un diseño muy llamativo y con tapón de rosca.', 'PomadadeluxeMonster.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(26, 'Precision Shave Gel', 'American Crew', 'Afeitado', 88.12, 89, 'Fórmula sin espuma para tipo de barba normal y fina. El gel proporciona un afeitado definitivo, apurado y limpio. El extracto de semillas de calabaza y aceite de té verde trabajan para suavizar la piel y protegerla de irritaciones. Utilizarlo para apurar el cuello o el rostro, patillas o cabeza.', 'PrecisionShaveGel.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(27, 'Cera NAK', 'done.n dirt', 'Cabello', 76.24, 72, 'Cera moldeadora ideal para tupes extravagantes y con una fijación alta para que tu peinado permanezca intacto todo el día.', 'ceraNakDirty.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(28, 'Aceite para barba barberism', 'Captain Fawcett', 'Barba', 34.44, 68, 'Un excepcional aceite de Barba con un aroma atemporal refrescante y elegante. Notas altas de Lima y Naranja. Medias de Rosa y Galbanum junto con notas base terrosas de cedro, Pachulí y Musgo. Un brebaje alquímico, simplemente delicioso, que contiene aceites hidratantes de almendra dulce, jojoba y vitamina E.', 'Aceiteparabarbabarberism.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(29, 'Maharajah eau de parfum', 'Captain Fawcett', 'Complementos', 22.45, 2, 'Esta fragancia tentadora a base de especias picantes, almizcle, cedro y cuero tachonado con unas notas iniciales cítricas te transportará a la antigua India. Un aroma único creado únicamente para el disfrute y el deleite. ', 'Maharajaheaudeparfum.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(30, 'Polvos de volumen slick', 'Gorilla', 'Fijacion', 30.64, 54, 'Polvos de volumen mate ,desafia la gravedad muy natural.', 'PolvosdevolumenslickGorilla.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(31, 'Arcilla clay pomade slick', 'Gorilla', 'Fijacion', 3.09, 68, 'Arcilla de peinado en pomada sin parabenos elaboradas con ingredientes naturales producidos éticamente.', 'Arcillaclaypomadeslick.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(32, 'Bálsamo de barba', 'Bohemian', 'Barba', 98.47, 20, 'El bálsamo bohemian men para barba es un producto formulado a base de ingredientes naturales que cuidan tu barba.', 'Balsamodebarba.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(33, 'Cerveza con tequila botella', 'Desperados', 'Complementos', 68.93, 67, 'Cerveza de tipo lager, elaborada con ingredientes naturales: malta de cebada, maíz, jarabe de glucosa, extracto de lúpulo y aromas naturales de tequila.', 'Cervezacontequilabotella.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(34, 'Cera NAK', 'outakontrol', 'Cabello', 17.84, 56, 'Sujeción firme, arcilla de acabado mate para crear looks imaginativos.', 'CeraNAKoutakontrol.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(35, 'Polvos volumen styling powder', 'Uppercut', 'Fijacion', 59.49, 70, 'Este producto es notablemente versátil, puede desde agregar volumen al cabello fino,  hasta crear textura y movimiento para estilos relajados, es casi demasiado fácil usarlo.', 'Polvosvolumenstylingpowder.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(36, 'Cera NAK', 'in shape', 'Cabello', 89.04, 61, 'Pasta moldeadora fijación media, ideal para looks repeinados y vivos para poder moldear a lo largo del día.', 'CeraNAKinshape.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(37, 'Cera suave para bigote', 'Macho Beard', 'Fijacion', 16.24, 3, '¡No te quedes sin un sólo beso más, Machote! La cera suave para bigote ha sido formulada para neutralizar los olores, nutrir e hidratar tu bigote, y provocar besos inolvidables para tu pareja.', 'Cerasuaveparabigote.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(38, 'Crema contorno de ojos', 'Reuzel', 'Complementos', 13.28, 15, ' Crema para ojos de secado rápido, no grasa.', 'Cremacontornodeojos.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(39, 'Jabón purificante para barba', 'Bohemian', 'Barba', 20.39, 42, 'Jabón especialmente diseñado para purificar, suavizar y acondicionar tu barba. Gracias a sus ingredientes activos naturales a base de aceites vegetales y mantecas seleccionadas, atraerás todas las miradas con una barba limpia, sana y cuidada.', 'Jabonpurificanteparabarba.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(40, 'After shave cream cologne', 'Red One', 'Barba', 55.35, 79, 'Corrupti aut aspernatur aut est. Nobis et perferendis quasi qui pariatur.', 'Aftershavecreamcologne.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(41, 'Pack volumen', 'texture', 'Complementos', 63.77, 11, 'Pack ideal para dar textura, fijacion y volumen.', 'Packvolumen.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(42, 'Classic paste ambar lima', 'Noberu', 'Fijacion', 6.02, 48, 'Crema de fijación Flexible.', 'Classicpasteambarlima.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(43, 'Jabón especial para barba', 'Skull Men', 'Barba', 19.61, 8, 'Jabon de barba,nutre e hidrata la piel y la barba.', 'Jabonespecialparabarba.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(44, 'Pomade psycho hold', 'Shiner Gold', 'Fijacion', 75.11, 14, 'Shiner Gold es una pomada de fijación fuerte que se aplica de forma espesa pero no te arrancará el cabello.', 'Pomadepsychohold.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(45, 'Grooming spray', 'Suavecito', 'Fijacion', 49.90, 76, 'Este spray para el cabello está hecho para garantizar que satisfagas las exigencias de tu estilo personal.', 'Groomingspray.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(46, 'Peine pompadour para crear mejor estilo en tu peinado', 'Barberia Laravel', 'Complementos', 8.57, 25, 'Consigue el peine que está de moda, para crear un mejor estilo con la aplicación de productos humedos en el cabello. Consigue mejor volumen y un aspecto más natural.', 'Peinepompadourparacrearmejorestiloentupeinado.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(47, 'Pomada azul', 'Reuzel', 'Cabello', 52.47, 3, 'Fuerte brillo y fuerte fijación ,soluble al agua se lava fácilmente. Nunca se endurece o escama,olor vainilla.', 'Pomadaazul.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(48, 'Peine de bolsillo en forma de navaja', 'Suavecito', 'Complementos', 43.67, 61, 'Saca cuando necesites tu peine en forma de navaja y date un retoque en los lugares más inesperados del planeta. Todo contra esos pelos rebeldes que se resisten.', 'Peinedebolsilloenformadenavaja.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(49, 'Camiseta de Barberia Laravel', 'Barberia Laravel', 'Complementos', 65.18, 17, 'Con el cambio de logo que hicimos recientemente hemos creado esta camiseta, pues a muchos les ha gustado el resultado y queríamos dar la oportunidad este año de dar más calidad en la camiseta que hacemos para nuestros clientes. ¿quieres conseguir tu camiseta?', 'logoCamiseta.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18'),
(50, 'Super hold pomade', 'Layrite', 'Cabello', 63.30, 23, 'Peinados extremos requieren de productos extremos, para ello Layrite ha creado Super Hold, una pomada basada en su fórmula original pero añadiendo cera de abeja para aumentar la fijación y dureza del peinado.', 'Superholdpomade.jpg', '2023-01-28 15:30:18', '2023-01-28 15:30:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
