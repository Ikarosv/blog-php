-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 31-Jan-2022 às 22:42
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_data`
--

DROP TABLE IF EXISTS `blog_data`;
CREATE TABLE IF NOT EXISTS `blog_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `blog_data`
--

INSERT INTO `blog_data` (`id`, `title`, `content`) VALUES
(3, 'Uber abre 70 vagas de engenharia no Brasil para backend, Android e iOS.', 'A Uber anunciou, nesta quinta-feira (27), a abertura de mais de 70 vagas para engenheiros de software para o seu Centro de Tecnologia no Brasil. Os contratados irão trabalhar a partir do Uber Campus, em Osasco (SP), mas poderão seguir um regime de trabalho híbrido ou totalmente em home office.'),
(4, 'Windows 10 exige recurso de segurança que causa engasgos em PCs com chip AMD', 'Os computadores equipados com processadores Ryzen estão tendo problemas de desempenho no Windows 11, devido ao recurso de firmware TPM (fTPM) presente nos chips da AMD. Apesar do fTPM ser compatível com os requisitos do Microsoft TPM, usuários têm notado engasgos aleatórios durante o uso do PC, após instalar o Windows 11 na máquina.'),
(5, 'Aula Programação Web', 'Php MySQL');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
