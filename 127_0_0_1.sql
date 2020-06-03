-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Jun-2020 às 15:48
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id13745096_site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE `paginas` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `link` text NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paginas`
--

INSERT INTO `paginas` (`id`, `nome`, `link`, `conteudo`) VALUES
(6, 'quemsomos', 'quem_somos.php', 'Me chamo Renato, e sou estudante de Ciências da Computação, este site \r\nfoi criado com a intenção de apresentar um projeto como nota para a disciplina de Desenvolvimento Web da Faculdade FPB, e com intuito\r\nde indexar links de programas que são bastantes uteis e que muita gente ainda não conhece.'),
(7, 'pedidos', 'pedidos', 'Email: renatomsma@gmail.com<br>\r\n        Linkedin: <a href=\"https://www.linkedin.com/in/renato-moura-49298019a/\" target=\"_blank\">Clique aqui!</a><br>\r\n        Instagram: <a href=\"http://instagram.com/rennaatoo\" target=\"_blank\">@rennaatoo</a><br>\r\n   	    WhatsApp: <a href=\"https://api.whatsapp.com/send?phone=5583986192869&text=Oi%20Renato%20Tudo%20Bem?\" target=\"_blank\">WhatsApp</a>'),
(8, 'principal', 'principal', '<div class=\"fakeimg4\" style=\"height:auto;text-align: center;font-size: 25px;\">Cliente P2P\r\n     <div style=\"height:auto;text-align: center;font-size: 12px;color: #ffffff;\">Postado por: Renato em 20 de Maio de 2020<br></div></div>\r\n        <div class=\"fakeimg3\" style=\"height:auto;text-align:justify;\">\r\n        qBitTorrent<br><br>\r\n        Apesar do uTorrent ser o programa de torrent mais popular, existem alternativas muito melhores, \r\n        como por exemplo o qBitTorrent, que é sem dúvida o melhor cliente de BitTorrent gratuito disponível para o Windows.<br><br>\r\n          <div class=\"\" style=\"height:auto;text-align:center;\">\r\n          <img src=\"./imagens/qbittorrent.png\"></a><br><br>\r\n          <a href=\"https://www.qbittorrent.org/\" target=\"_blank\">\r\n          <img src=\"./imagens/download.png\" width=\"240\" height=\"80\"></a>\r\n          </div>\r\n      </div><br>\r\n    <div class=\"fakeimg4\" style=\"height:auto;text-align: center;font-size: 25px;\">Programa para escritório gratuito<br>\r\n      <div style=\"height:auto;text-align: center;font-size: 12px;color: #ffffff;\">Postado por: Renato em 20 de Maio de 2020<br></div></div>\r\n        <div class=\"fakeimg3\" style=\"height:auto;text-align:justify;\">\r\n        Libre Office<br><br>\r\n        Embora o Microsoft Office seja o programa mais popular, existem ótimas alternativas, \r\n        como por exemplo, o Libre Office, um programa gratuito que lhe oferece alternativas \r\n        para o Microsoft Word, Excel e Power Point.<br><br>\r\n          <div class=\"\" style=\"height:3;text-align:center;\">\r\n          <img src=\"./imagens/libreoffice.png\"></a><br><br>\r\n          <a href=\"https://pt-br.libreoffice.org/\" target=\"_blank\">\r\n          <img src=\"./imagens/download.png\" width=\"240\" height=\"80\"></a>\r\n          </div>\r\n    </div><br>\r\n    <div class=\"fakeimg4\" style=\"height:auto;text-align: center;font-size: 25px;color: #000000;\">Gerenciador de Downloads\r\n       <div style=\"height:auto;text-align: center;font-size: 12px;color: #ffffff;\">Postado por: Renato em 20 de Maio de 2020<br></div></div>\r\n        <div class=\"fakeimg3\" style=\"height:auto;text-align:justify;\">\r\n        Free Download Manager<br><br>\r\n        Free Download Manager é um programa gratuito que oferece uma forma mais eficiente de você gerenciar e \r\n        organizar os downloads em seu computador, além de permitir que você faça downloads mais rapidamente.<br><br>\r\n          <div class=\"\" style=\"height:auto;text-align:center;\">\r\n          <img src=\"./imagens/fdm.png\"></a><br><br>\r\n          <a href=\"https://www.freedownloadmanager.org/pt/\" target=\"_blank\">\r\n          <img src=\"./imagens/download.png\" width=\"240\" height=\"80\"></a>\r\n          </div>\r\n        </div>');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
