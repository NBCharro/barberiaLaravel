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
-- Table structure for table `reservas`
--

CREATE TABLE `reservas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `servicio` varchar(255) NOT NULL,
  `trabajadora` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservas`
--

INSERT INTO `reservas` (`id`, `nombre`, `telefono`, `email`, `fecha`, `hora`, `servicio`, `trabajadora`, `created_at`, `updated_at`) VALUES
(1, 'Efrain Hermiston', '+1-405-398-6902', 'hertha.sawayn@feil.biz', '2023-02-21', '20:00 - 21:00', 'Corte y arreglo de barba - 21€', 'Anna', '2023-01-26 05:27:40', '2023-01-26 05:27:40'),
(2, 'Davin Ankunding', '1-743-710-0426', 'balistreri.elinor@abernathy.com', '2023-02-18', '13:00 - 14:00', 'Corte y afeitado - 24€', 'Anna', '2023-01-26 05:27:40', '2023-01-26 05:27:40'),
(3, 'Dr. Scot Stehr', '1-551-425-8986', 'kovacek.nels@gmail.com', '2023-02-05', '18:00 - 19:00', 'Corte de pelo - 14€', 'Xhemi', '2023-01-26 05:27:40', '2023-01-26 05:27:40'),
(4, 'Dr. Roberto Marvin', '267.885.9574', 'garret.wolf@gmail.com', '2023-02-27', '18:00 - 19:00', 'Arreglo y perfilado de barba - 12€', 'Guilherme', '2023-01-26 05:27:40', '2023-01-26 05:27:40'),
(5, 'Leonardo Monahan', '425-621-7005', 'maudie.schmidt@upton.com', '2023-02-17', '18:00 - 19:00', 'Corte y arreglo de barba - 21€', 'Cualquiera', '2023-01-26 05:27:40', '2023-01-26 05:27:40'),
(6, 'Mr. Santino Reynolds I', '1-513-402-8456', 'reagan.rice@yahoo.com', '2023-02-06', '20:00 - 21:00', 'Corte al cero - 9€', 'Andrea', '2023-01-26 05:27:40', '2023-01-26 05:27:40'),
(7, 'Korbin Willms', '+1-781-449-8219', 'jerald67@yahoo.com', '2023-02-02', '11:00 - 12:00', 'Afeitado - 11€', 'Anna', '2023-01-26 05:27:40', '2023-01-26 05:27:40'),
(8, 'Golden Mann', '+1 (580) 859-1459', 'reyna52@carroll.org', '2023-02-15', '17:00 - 18:00', 'Corte y arreglo de barba - 21€', 'Andrea', '2023-01-26 05:27:40', '2023-01-26 05:27:40'),
(9, 'Kamren Pacocha', '248-674-5176', 'retha.mcglynn@block.com', '2023-02-17', '10:00 - 11:00', 'Corte y arreglo de barba - 21€', 'Anna', '2023-01-26 05:27:40', '2023-01-26 05:27:40'),
(10, 'Lenora Shields Jr.', '1-352-797-6793', 'nelda41@hudson.com', '2023-02-28', '14:00 - 15:00', 'Corte y arreglo de barba - 21€', 'Guilherme', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(11, 'Shawn Strosin', '203.560.2726', 'habbott@gmail.com', '2023-02-27', '12:00 - 13:00', 'Corte y arreglo de barba - 21€', 'Guilherme', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(12, 'Mr. Lee Keeling DDS', '1-743-308-2705', 'walter.shakira@hotmail.com', '2023-02-16', '11:00 - 12:00', 'Corte con lavado y peinado - 17€', 'Guilherme', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(13, 'Holden Cremin', '458-857-9519', 'carlee.pagac@hotmail.com', '2023-02-12', '12:00 - 13:00', 'Corte al cero - 9€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(14, 'Delia Bergstrom PhD', '740.524.6257', 'mfriesen@yahoo.com', '2023-02-23', '19:00 - 20:00', 'Corte de pelo - 14€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(15, 'Prof. Rusty Mayer', '+1-954-210-5895', 'hertha60@eichmann.net', '2023-02-25', '14:00 - 15:00', 'Afeitado - 11€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(16, 'Dr. Kayleigh Wehner Jr.', '+1.936.266.4337', 'gwendolyn06@rau.net', '2023-02-08', '11:00 - 12:00', 'Corte, arreglo y perfilado de barba - 25€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(17, 'Braden Bruen Jr.', '+1.346.264.9857', 'yharvey@hickle.net', '2023-02-01', '13:00 - 14:00', 'Corte y arreglo de barba - 21€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(18, 'Neha Larson', '240-553-7385', 'wuckert.jaren@hotmail.com', '2023-02-21', '10:00 - 11:00', 'Corte y afeitado - 24€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(19, 'Prof. Murphy Krajcik DDS', '757-230-3132', 'rvandervort@hotmail.com', '2023-02-15', '18:00 - 19:00', 'Corte al cero - 9€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(20, 'Clinton Wyman', '240.483.6302', 'david.raynor@gibson.com', '2023-02-22', '13:00 - 14:00', 'Corte de pelo - 14€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(21, 'Meghan Pagac', '1-832-915-2676', 'connie.runolfsson@gmail.com', '2023-02-14', '19:00 - 20:00', 'Arreglo de barba - 8€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(22, 'Leopoldo Abbott', '1-251-601-3027', 'wiza.garnet@klocko.com', '2023-02-06', '11:00 - 12:00', 'Corte con lavado y peinado - 17€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(23, 'Edna Langosh', '479.696.3751', 'deven26@yahoo.com', '2023-02-05', '20:00 - 21:00', 'Corte, arreglo y perfilado de barba - 25€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(24, 'Ms. Oma Ritchie DDS', '820.931.5550', 'royal.schuppe@nienow.org', '2023-02-15', '12:00 - 13:00', 'Afeitado - 11€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(25, 'Miss Rae Olson', '+1.830.214.4852', 'lorenz.conroy@bahringer.com', '2023-02-14', '10:00 - 11:00', 'Arreglo de barba - 8€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(26, 'Alena Ernser', '(845) 700-4018', 'dandre.murray@emard.net', '2023-02-26', '10:00 - 11:00', 'Arreglo y perfilado de barba - 12€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(27, 'Dr. Margarett Wiegand I', '786.481.0494', 'dominique.rau@hotmail.com', '2023-02-02', '11:00 - 12:00', 'Corte de pelo - 14€', 'Guilherme', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(28, 'Krystal Beahan', '+1-351-357-7370', 'yundt.valentine@hotmail.com', '2023-02-24', '11:00 - 12:00', 'Corte de pelo - 14€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(29, 'Joe Towne', '+1 (785) 724-0907', 'myah72@yahoo.com', '2023-02-11', '13:00 - 14:00', 'Corte con lavado y peinado - 17€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(30, 'Prof. Vesta Ratke V', '414.440.0756', 'walter.caleigh@hotmail.com', '2023-02-07', '18:00 - 19:00', 'Arreglo de barba - 8€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(31, 'Emmett Doyle', '857.490.7762', 'elta.barrows@hackett.com', '2023-02-01', '19:00 - 20:00', 'Corte de pelo - 14€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(32, 'Milo Nienow', '+1.906.979.8428', 'charvey@gmail.com', '2023-02-28', '10:00 - 11:00', 'Corte al cero - 9€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(33, 'Neha Thiel', '+1-980-654-7867', 'wunsch.earline@hotmail.com', '2023-02-29', '10:00 - 11:00', 'Corte y arreglo de barba - 21€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(34, 'Deon Wilkinson', '351-961-6156', 'veum.antonetta@murray.com', '2023-02-20', '18:00 - 19:00', 'Corte con lavado y peinado - 17€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(35, 'Taylor Kreiger', '575-669-0745', 'piper.hyatt@mann.com', '2023-02-30', '10:00 - 11:00', 'Corte al cero - 9€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(36, 'Prof. Ernestina Hessel', '+1-914-315-4561', 'daniel.precious@yahoo.com', '2023-02-21', '19:00 - 20:00', 'Corte al cero - 9€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(37, 'Prof. Alford Durgan IV', '337-952-8279', 'xavier88@monahan.com', '2023-02-30', '12:00 - 13:00', 'Arreglo y perfilado de barba - 12€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(38, 'Vanessa Pfannerstill', '860-686-2374', 'lucy.bruen@halvorson.org', '2023-02-18', '20:00 - 21:00', 'Corte de pelo - 14€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(39, 'Dr. Lea Runte V', '+19497855445', 'velma02@hotmail.com', '2023-02-24', '10:00 - 11:00', 'Corte y afeitado - 24€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(40, 'Charles Zieme', '1-279-449-4997', 'pbraun@stamm.com', '2023-02-24', '19:00 - 20:00', 'Corte de pelo - 14€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(41, 'Dorris DuBuque', '1-708-918-6818', 'michael.conn@zieme.org', '2023-02-28', '20:00 - 21:00', 'Corte con lavado y peinado - 17€', 'Guilherme', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(42, 'Margaretta Keeling', '458.381.6202', 'vpredovic@botsford.com', '2023-02-29', '14:00 - 15:00', 'Arreglo y perfilado de barba - 12€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(43, 'Sadye Bergnaum', '1-361-740-0965', 'alessandra39@hotmail.com', '2023-02-12', '20:00 - 21:00', 'Corte con lavado y peinado - 17€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(44, 'Roselyn Mitchell', '979.652.5876', 'pturner@mclaughlin.com', '2023-02-19', '13:00 - 14:00', 'Arreglo y perfilado de barba - 12€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(45, 'Roxane Shanahan', '+1 (432) 266-8724', 'mraz.leopold@gmail.com', '2023-02-27', '11:00 - 12:00', 'Afeitado - 11€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(46, 'Prof. Katherine Ebert III', '580-833-0721', 'lakin.kellie@kuvalis.com', '2023-02-31', '12:00 - 13:00', 'Corte y arreglo de barba - 21€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(47, 'Dr. Golden Larkin', '(380) 512-6614', 'braun.sandy@gerhold.com', '2023-02-24', '20:00 - 21:00', 'Corte y arreglo de barba - 21€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(48, 'Benton Pollich', '351.433.9220', 'brandt43@yahoo.com', '2023-02-29', '13:00 - 14:00', 'Afeitado - 11€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(49, 'Aliyah Smitham', '734.713.1075', 'awaelchi@gutkowski.info', '2023-02-24', '11:00 - 12:00', 'Corte, arreglo y perfilado de barba - 25€', 'Guilherme', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(50, 'Rosalyn Gislason', '(820) 228-1316', 'clay.cassin@hotmail.com', '2023-02-25', '20:00 - 21:00', 'Corte, arreglo y perfilado de barba - 25€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(51, 'Jacquelyn Rutherford II', '+15342259947', 'mertz.ella@schowalter.com', '2023-02-06', '17:00 - 18:00', 'Arreglo de barba - 8€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(52, 'Jeramie Wiegand', '1-970-809-8802', 'mario14@williamson.com', '2023-02-02', '10:00 - 11:00', 'Corte y arreglo de barba - 21€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(53, 'Dr. Dewayne Schneider', '669-467-1271', 'oren42@reynolds.com', '2023-02-29', '18:00 - 19:00', 'Corte al cero - 9€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(54, 'Alexis Wilderman Sr.', '1-575-914-3098', 'ansel09@hotmail.com', '2023-02-03', '17:00 - 18:00', 'Corte de pelo - 14€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(55, 'Amanda Schaefer', '309.982.9337', 'kay54@yahoo.com', '2023-02-16', '18:00 - 19:00', 'Corte al cero - 9€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(56, 'Jon Glover', '216-962-4835', 'leslie.olson@hotmail.com', '2023-02-22', '19:00 - 20:00', 'Corte, arreglo y perfilado de barba - 25€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(57, 'Ismael Bosco', '+1-309-502-0316', 'melvina69@nader.com', '2023-02-25', '17:00 - 18:00', 'Corte, arreglo y perfilado de barba - 25€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(58, 'Celia Miller Sr.', '+1-830-656-0971', 'schowalter.melvina@yahoo.com', '2023-02-26', '10:00 - 11:00', 'Corte al cero - 9€', 'Guilherme', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(59, 'Ursula Hudson', '770.950.1049', 'mustafa45@ryan.com', '2023-02-25', '19:00 - 20:00', 'Corte con lavado y peinado - 17€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(60, 'Michele Purdy', '361.541.5862', 'lilly17@yundt.com', '2023-02-15', '10:00 - 11:00', 'Corte y arreglo de barba - 21€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(61, 'Dr. Renee Hodkiewicz', '+1 (574) 953-3880', 'brielle.rutherford@yahoo.com', '2023-02-21', '20:00 - 21:00', 'Corte y arreglo de barba - 21€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(62, 'Malika Homenick Jr.', '1-430-895-2598', 'gulgowski.florian@hotmail.com', '2023-02-01', '12:00 - 13:00', 'Corte de pelo - 14€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(63, 'Katheryn Zboncak', '+1-708-644-0517', 'frohan@hotmail.com', '2023-02-12', '13:00 - 14:00', 'Corte, arreglo y perfilado de barba - 25€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(64, 'Barrett Sawayn', '678-641-2107', 'phayes@harvey.net', '2023-02-22', '13:00 - 14:00', 'Corte con lavado y peinado - 17€', 'Guilherme', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(65, 'Miss Aubrey Lueilwitz Jr.', '+1.415.743.3654', 'ynitzsche@dare.com', '2023-02-24', '17:00 - 18:00', 'Corte y arreglo de barba - 21€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(66, 'Gage Kiehn DVM', '1-434-905-3312', 'von.brady@shields.com', '2023-02-25', '19:00 - 20:00', 'Arreglo y perfilado de barba - 12€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(67, 'Kenya McCullough', '+1-831-505-4656', 'hyatt.woodrow@hotmail.com', '2023-02-14', '17:00 - 18:00', 'Corte y arreglo de barba - 21€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(68, 'Dr. Bradford Emmerich', '+1 (734) 607-8691', 'jules24@weimann.net', '2023-02-14', '11:00 - 12:00', 'Corte de pelo - 14€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(69, 'Tyra Cartwright', '+1-678-685-9500', 'emiliano99@yahoo.com', '2023-02-20', '12:00 - 13:00', 'Corte, arreglo y perfilado de barba - 25€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(70, 'Marilyne Abbott', '(669) 631-4289', 'grayce14@rath.com', '2023-02-18', '10:00 - 11:00', 'Arreglo de barba - 8€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(71, 'Aletha West III', '1-564-452-5294', 'satterfield.tamia@grady.com', '2023-02-02', '14:00 - 15:00', 'Corte al cero - 9€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(72, 'Milton Kuvalis', '(559) 479-7708', 'zleuschke@mcglynn.com', '2023-02-23', '11:00 - 12:00', 'Arreglo y perfilado de barba - 12€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(73, 'Nelson Hagenes V', '+1-774-995-4652', 'lyla60@smitham.com', '2023-02-03', '19:00 - 20:00', 'Corte, arreglo y perfilado de barba - 25€', 'Guilherme', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(74, 'Carolina Skiles', '+1-234-968-9106', 'ereilly@hayes.com', '2023-02-16', '20:00 - 21:00', 'Arreglo de barba - 8€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(75, 'Adah Farrell PhD', '(804) 352-2839', 'jolie.white@hackett.com', '2023-02-08', '20:00 - 21:00', 'Arreglo de barba - 8€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(76, 'Ebba Bartell', '+1.951.579.4601', 'jaleel76@zieme.org', '2023-02-20', '14:00 - 15:00', 'Corte al cero - 9€', 'Guilherme', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(77, 'Brooks Klocko', '323.823.6958', 'ewell.treutel@hickle.com', '2023-02-06', '13:00 - 14:00', 'Corte y arreglo de barba - 21€', 'Guilherme', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(78, 'Abigayle Hane', '+1-832-523-2928', 'clay.olson@hotmail.com', '2023-02-06', '14:00 - 15:00', 'Afeitado - 11€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(79, 'Verlie Crona', '+1-770-564-2236', 'bulah32@gmail.com', '2023-02-27', '14:00 - 15:00', 'Corte y afeitado - 24€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(80, 'Jayce Erdman IV', '(281) 830-9280', 'auer.burdette@hotmail.com', '2023-02-21', '20:00 - 21:00', 'Afeitado - 11€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(81, 'Santiago Waelchi', '1-430-432-7351', 'dbaumbach@yahoo.com', '2023-02-30', '14:00 - 15:00', 'Arreglo de barba - 8€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(82, 'Rocio Altenwerth', '+1 (657) 698-4343', 'carmen72@heathcote.com', '2023-02-23', '17:00 - 18:00', 'Corte de pelo - 14€', 'Guilherme', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(83, 'Alda Thiel II', '(774) 616-4741', 'augustus57@gmail.com', '2023-02-19', '18:00 - 19:00', 'Corte de pelo - 14€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(84, 'Daron Rice', '1-650-591-6619', 'beier.candida@gorczany.com', '2023-02-02', '20:00 - 21:00', 'Corte al cero - 9€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(85, 'Prof. Kayley Gleason DDS', '1-573-653-3748', 'ltreutel@hotmail.com', '2023-02-31', '18:00 - 19:00', 'Corte y arreglo de barba - 21€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(86, 'Crystel Carter', '+1-540-209-2670', 'roselyn.stoltenberg@hotmail.com', '2023-02-12', '13:00 - 14:00', 'Corte al cero - 9€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(87, 'Antonetta Parisian', '361.536.6575', 'garrison52@hotmail.com', '2023-02-06', '10:00 - 11:00', 'Arreglo y perfilado de barba - 12€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(88, 'Jade Fritsch MD', '+1-734-414-6843', 'germaine.bartoletti@pfeffer.info', '2023-02-21', '13:00 - 14:00', 'Corte al cero - 9€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(89, 'Bryon Schumm', '(530) 580-2848', 'lindsay86@hotmail.com', '2023-02-15', '13:00 - 14:00', 'Corte con lavado y peinado - 17€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(90, 'Mrs. Kamille Witting', '+1-914-802-6274', 'lizzie.hermiston@schroeder.net', '2023-02-17', '10:00 - 11:00', 'Corte al cero - 9€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(91, 'Jaqueline Ruecker MD', '1-872-684-6600', 'xpfeffer@mcdermott.org', '2023-02-25', '14:00 - 15:00', 'Corte y arreglo de barba - 21€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(92, 'Prof. Walton Homenick Sr.', '707.925.8941', 'alba.nienow@frami.com', '2023-02-21', '20:00 - 21:00', 'Arreglo de barba - 8€', 'Guilherme', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(93, 'Cesar Mills', '1-260-968-7766', 'skiles.duane@schulist.com', '2023-02-11', '14:00 - 15:00', 'Afeitado - 11€', 'Cualquiera', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(94, 'Prof. Tess Kub', '469.224.7515', 'trent.mills@hotmail.com', '2023-02-17', '20:00 - 21:00', 'Corte con lavado y peinado - 17€', 'Guilherme', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(95, 'Joanne Johnson', '337.635.6709', 'vincenzo.wilderman@gmail.com', '2023-02-18', '13:00 - 14:00', 'Corte y arreglo de barba - 21€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(96, 'Verda Sporer', '+1-678-533-4170', 'ryleigh.donnelly@kuvalis.com', '2023-02-03', '12:00 - 13:00', 'Corte con lavado y peinado - 17€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(97, 'Ms. Emilia Breitenberg', '(660) 878-3527', 'matilde27@hotmail.com', '2023-02-03', '20:00 - 21:00', 'Corte y arreglo de barba - 21€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(98, 'Lilyan White', '+12563273923', 'carolyne08@hotmail.com', '2023-02-05', '12:00 - 13:00', 'Corte de pelo - 14€', 'Anna', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(99, 'Elise Lockman MD', '1-732-859-7223', 'zpfeffer@gmail.com', '2023-02-17', '13:00 - 14:00', 'Corte y arreglo de barba - 21€', 'Andrea', '2023-01-26 05:27:41', '2023-01-26 05:27:41'),
(100, 'Miss Jacinthe Gerlach DDS', '(614) 390-8791', 'randy55@gmail.com', '2023-02-01', '13:00 - 14:00', 'Corte y afeitado - 24€', 'Xhemi', '2023-01-26 05:27:41', '2023-01-26 05:27:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
