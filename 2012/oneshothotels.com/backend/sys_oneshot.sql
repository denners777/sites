-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.8-log
-- Versão do PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `sys_oneshot`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE IF NOT EXISTS `cidades` (
  `c_ID` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `c_Nome` varchar(100) NOT NULL,
  `c_Slug` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `c_MetaDados` text,
  PRIMARY KEY (`c_ID`),
  UNIQUE KEY `c_Slug` (`c_Slug`),
  KEY `c_Nome` (`c_Nome`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`c_ID`, `c_Nome`, `c_Slug`, `c_MetaDados`) VALUES
(1, 'Madri', 'madri', '{"Descricao_EN":"Desk EN","Descricao_ES":"DESK ES"}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
  `co_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `co_Nome` varchar(100) NOT NULL,
  `co_Email` varchar(100) NOT NULL,
  `co_Data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `co_Dados` text,
  PRIMARY KEY (`co_ID`),
  KEY `co_Email` (`co_Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `f_ID` int(11) NOT NULL AUTO_INCREMENT,
  `f_Pergunta` tinytext NOT NULL,
  `f_Resposta` text,
  PRIMARY KEY (`f_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `faq`
--

INSERT INTO `faq` (`f_ID`, `f_Pergunta`, `f_Resposta`) VALUES
(2, '{"EN":"Qual o Seu nome em EN","ES":"Qual o seu Nome em ES"}', '{"EN":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultricies aliquam aliquet. Vestibulum ante nibh, malesuada vel venenatis eu, lacinia nec augue. Ut ligula velit, hendrerit et volutpat at, venenatis nec dui. Proin non tincidunt neque. Cras posuere, nulla mattis varius gravida, libero risus vulputate nunc, ac pharetra leo tellus mattis lorem. Etiam porttitor risus et dolor accumsan in suscipit dui vulputate.","ES":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultricies aliquam aliquet. Vestibulum ante nibh, malesuada vel venenatis eu, lacinia nec augue. Ut ligula velit, hendrerit et volutpat at, venenatis nec dui. Proin non tincidunt neque. Cras posuere, nulla mattis varius gravida, libero risus vulputate nunc, ac pharetra leo tellus mattis lorem. Etiam porttitor risus et dolor accumsan in suscipit dui vulputate."}'),
(3, '{"EN":"Qual o Seb","ES":"Qual o Seb ES"}', '{"EN":"XXX","ES":"AAAA"}'),
(4, '{"EN":"TESTE","ES":"TES ES"}', '{"EN":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultricies aliquam aliquet. Vestibulum ante nibh, malesuada vel venenatis eu, lacinia nec augue. Ut ligula velit, hendrerit et volutpat at, venenatis nec dui. Proin non tincidunt neque. Cras posuere, nulla mattis varius gravida, libero risus vulputate nunc, ac pharetra leo tellus mattis lorem. Etiam porttitor risus et dolor accumsan in suscipit dui vulputate.","ES":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultricies aliquam aliquet. Vestibulum ante nibh, malesuada vel venenatis eu, lacinia nec augue. Ut ligula velit, hendrerit et volutpat at, venenatis nec dui. Proin non tincidunt neque. Cras posuere, nulla mattis varius gravida, libero risus vulputate nunc, ac pharetra leo tellus mattis lorem. Etiam porttitor risus et dolor accumsan in suscipit dui vulputate."}'),
(5, '{"EN":"[EN] Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet.@","ES":"[ES] Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet."}', '{"EN":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultricies aliquam aliquet. Vestibulum ante nibh, malesuada vel venenatis eu, lacinia nec augue. Ut ligula velit, hendrerit et volutpat at, venenatis nec dui. Proin non tincidunt neque. Cras posuere, nulla mattis varius gravida, libero risus vulputate nunc, ac pharetra leo tellus mattis lorem. Etiam porttitor risus et dolor accumsan in suscipit dui vulputate. Curabitur egestas eros eget orci bibendum a volutpat mauris tincidunt. Aliquam aliquam euismod tempus. In gravida ullamcorper eleifend. Ut facilisis porttitor elit eu tincidunt. Integer quis sem sit amet diam dapibus pretium vitae quis purus. Aenean vestibulum venenatis malesuada. Aliquam interdum lorem ante. Cras ut nibh libero. Aenean ligula velit, faucibus a convallis vel, consectetur et quam. Etiam eros mi, ullamcorper sit amet auctor in, faucibus a justo.","ES":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultricies aliquam aliquet. Vestibulum ante nibh, malesuada vel venenatis eu, lacinia nec augue. Ut ligula velit, hendrerit et volutpat at, venenatis nec dui. Proin non tincidunt neque. Cras posuere, nulla mattis varius gravida, libero risus vulputate nunc, ac pharetra leo tellus mattis lorem. Etiam porttitor risus et dolor accumsan in suscipit dui vulputate. Curabitur egestas eros eget orci bibendum a volutpat mauris tincidunt. Aliquam aliquam euismod tempus. In gravida ullamcorper eleifend. Ut facilisis porttitor elit eu tincidunt. Integer quis sem sit amet diam dapibus pretium vitae quis purus. Aenean vestibulum venenatis malesuada. Aliquam interdum lorem ante. Cras ut nibh libero. Aenean ligula velit, faucibus a convallis vel, consectetur et quam. Etiam eros mi, ullamcorper sit amet auctor in, faucibus a justo."}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galerias`
--

CREATE TABLE IF NOT EXISTS `galerias` (
  `g_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `g_Vinculo` varchar(20) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `g_Slug` varchar(20) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `g_Habitaciones` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `g_Dados` text,
  PRIMARY KEY (`g_ID`),
  KEY `g_Vinculo` (`g_Vinculo`,`g_Slug`),
  KEY `g_Habitaciones` (`g_Habitaciones`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Extraindo dados da tabela `galerias`
--

INSERT INTO `galerias` (`g_ID`, `g_Vinculo`, `g_Slug`, `g_Habitaciones`, `g_Dados`) VALUES
(3, 'hoteis', 'hotel-2012', NULL, '{"TITLE":" IMAGEM!","DESC":{"EN":"DESK EN","ES":"DESK ES"},"IMG":"hoteis\\/hotel-2012\\/galeria\\/ef960a0ee18cf68935f7ea984a2c5851.jpg"}'),
(4, 'hoteis', 'hotel-2012', 'executive', '{"TITLE":"TITULO da IMAGEM!","DESC":{"EN":"EN","ES":"ES"},"IMG":"hoteis\\/hotel-2012\\/habitaciones\\/executive\\/31ea702425515eabeb83c2fb43a2e0e9.jpg"}'),
(10, 'staff', 'one-shot-04', NULL, '{"TITLE":"OI SSa","DESC":{"EN":"","ES":""},"IMG":"staff\\/one-shot-04\\/galeria\\/71d9d31c28cf4458e66e85d353a4d5c6.jpg"}'),
(11, 'staff', 'one-shot-04', NULL, '{"TITLE":"OI SS","DESC":{"EN":"","ES":""},"IMG":"staff\\/one-shot-04\\/galeria\\/6608948704dcd9c2195bf53d33be2104.jpg"}'),
(8, 'hoteis', 'hotel-2012', 'executive-slider', '{"TITLE":"TITULO","DESC":{"EN":"W","ES":"S"},"IMG":"hoteis\\/hotel-2012\\/habitaciones\\/executive-slider\\/3d41c948906a1c4f5b423016d149a222.jpg"}'),
(9, 'staff', 'one-shot-04', NULL, '{"TITLE":"OI SS","DESC":{"EN":"ENF","ES":"ESD"},"IMG":"staff\\/one-shot-04\\/galeria\\/a8985eaa130f424046ce8967932709ed.jpg"}'),
(12, 'staff', 'one-shot-04', NULL, '{"TITLE":"OI SS","DESC":{"EN":"","ES":""},"IMG":"staff\\/one-shot-04\\/galeria\\/e96ee1ec3d1f9eb5a5b81f51c7efa07e.jpg"}'),
(16, 'hoteis', 'one-shot-04', NULL, '{"TITLE":"TITULO 0","DESC":{"EN":"","ES":""},"IMG":"hoteis\\/one-shot-04\\/galeria\\/b2fa39be47c80f7af20be64fa6b36bc3.jpg"}'),
(14, 'staff', 'one-shot-04', NULL, '{"TITLE":"a","DESC":{"EN":"","ES":""},"IMG":"staff\\/one-shot-04\\/galeria\\/fa2ceb052229410878d51457069f159a.jpg"}'),
(15, 'staff', 'one-shot-04', NULL, '{"TITLE":"zzz","DESC":{"EN":"z","ES":""},"IMG":"staff\\/one-shot-04\\/galeria\\/f2ff4fa9cb413c19debfedf43a824a24.jpg"}'),
(17, 'hoteis', 'one-shot-04', NULL, '{"TITLE":"TITULO 0","DESC":{"EN":"","ES":""},"IMG":"hoteis\\/one-shot-04\\/galeria\\/41edde8f3622279dc860eae9ade9c74b.jpg"}'),
(18, 'hoteis', 'one-shot-04', NULL, '{"TITLE":"TITULO 01","DESC":{"EN":"","ES":""},"IMG":"hoteis\\/one-shot-04\\/galeria\\/e4ef2280a053ac23a0a65245dfeb2a3b.jpg"}'),
(19, 'hoteis', 'one-shot-04', NULL, '{"TITLE":"TITULO 0","DESC":{"EN":"","ES":""},"IMG":"hoteis\\/one-shot-04\\/galeria\\/bc9f27814d93812111b30f098ff2ad56.jpg"}'),
(20, 'hoteis', 'one-shot-04', NULL, '{"TITLE":"TITULO 01","DESC":{"EN":"","ES":""},"IMG":"hoteis\\/one-shot-04\\/galeria\\/6d59d6918defafeb7c025f9279b38e07.jpg"}'),
(21, 'hoteis', 'one-shot-04', 'executive', '{"TITLE":"TITULO 0","DESC":{"EN":"gg","ES":"gyy"},"IMG":"hoteis\\/one-shot-04\\/habitaciones\\/executive\\/8adfd824beb84815966109ed67a71b9b.jpg"}'),
(22, 'hoteis', 'one-shot-04', 'executive', '{"TITLE":"TITULO 01","DESC":{"EN":"ooo","ES":"ooiuuyy"},"IMG":"hoteis\\/one-shot-04\\/habitaciones\\/executive\\/a2bfd1a52ae2b5da3eb94171f5554bcc.jpg"}'),
(23, 'hoteis', 'one-shot-04', 'executive', '{"TITLE":"TITULO 01","DESC":{"EN":"jj","ES":"hhh"},"IMG":"hoteis\\/one-shot-04\\/habitaciones\\/executive\\/e097035741c7a42989ff624fed79bc1a.jpg"}'),
(24, 'hoteis', 'one-shot-04', 'executive', '{"TITLE":"THTHT","DESC":{"EN":"","ES":""},"IMG":"hoteis\\/one-shot-04\\/habitaciones\\/executive\\/0678c90f76e57e1a38d64d6573bdbb86.jpg"}'),
(25, 'hoteis', 'one-shot-04', 'executive-slider', '{"TITLE":"TITULO 0","DESC":{"EN":"bbb","ES":"bbbb"},"IMG":"hoteis\\/one-shot-04\\/habitaciones\\/executive-slider\\/7ef54e43a04327687769c95036d79072.jpg"}'),
(26, 'hoteis', 'one-shot-04', 'executive-slider', '{"TITLE":"TITULO 01","DESC":{"EN":"rgrgfrffrfrfrr","ES":"ttttttttttttttttttttttt"},"IMG":"hoteis\\/one-shot-04\\/habitaciones\\/executive-slider\\/1f8ed35f45b2ef4fc2dc6fd25c424e1e.jpg"}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `habitaciones`
--

CREATE TABLE IF NOT EXISTS `habitaciones` (
  `h_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `h_Tipo` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `h_Slug` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `h_Ativo` char(1) NOT NULL DEFAULT 'N',
  `h_Dados` text,
  PRIMARY KEY (`h_ID`),
  UNIQUE KEY `h_Tipo` (`h_Tipo`,`h_Slug`),
  KEY `h_Ativo` (`h_Ativo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `habitaciones`
--

INSERT INTO `habitaciones` (`h_ID`, `h_Tipo`, `h_Slug`, `h_Ativo`, `h_Dados`) VALUES
(1, 'executive', 'hotel-2012', 'S', '{"TITULO":"Meu Titulo","DESC":{"EN":"EN","ES":"ES"},"LINK":"http:\\/\\/frasesdeanimes.com"}'),
(2, 'executive', 'one-shot-04', 'S', '{"TITULO":"EXECUTIVE","DESC":{"EN":"[EN] Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet libero sapien. Sed commodo leo et dui lobortis pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec at diam at sem vestibulum egestas. Phasellus turpis leo, porttitor vitae pellentesque vitae, lobortis a ligula.","ES":"[ES] Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet libero sapien. Sed commodo leo et dui lobortis pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec at diam at sem vestibulum egestas. Phasellus turpis leo, porttitor vitae pellentesque vitae, lobortis a ligula. "},"LINK":"http:\\/\\/google.com","CAPA":"hoteis\\/one-shot-04\\/habitaciones\\/executive\\/capa\\/0d5beb3e2ca504246b76e5efb4d1dcf0.jpg"}'),
(3, 'suite', 'one-shot-04', 'S', '{"TITULO":"SUITE RECOLETO","DESC":{"EN":"xxx","ES":"ssss"},"LINK":"","CAPA":"hoteis\\/one-shot-04\\/habitaciones\\/suite\\/capa\\/d8f1791d1c9f6473f3fd646966cc9728.jpg"}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hoteis`
--

CREATE TABLE IF NOT EXISTS `hoteis` (
  `h_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `h_Cidade` smallint(5) unsigned NOT NULL,
  `h_Slug` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `h_Nome` varchar(100) NOT NULL,
  `h_MetaDados` text,
  PRIMARY KEY (`h_ID`),
  UNIQUE KEY `h_Slug` (`h_Slug`),
  KEY `h_Cidade` (`h_Cidade`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `hoteis`
--

INSERT INTO `hoteis` (`h_ID`, `h_Cidade`, `h_Slug`, `h_Nome`, `h_MetaDados`) VALUES
(1, 1, 'hotel-2012', 'Hotel 2012', NULL),
(2, 1, 'one-shot-23', 'One Shot 23', '{"Descricao_EN":"DEN","Descricao_ES":"DES"}'),
(3, 1, 'one-shot-04', 'One Shot 04', '{"Descricao_EN":"EN","Descricao_ES":"ES"}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `legales`
--

CREATE TABLE IF NOT EXISTS `legales` (
  `le_ID` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `le_Nome` text NOT NULL,
  `le_Valor` text NOT NULL,
  PRIMARY KEY (`le_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `legales`
--

INSERT INTO `legales` (`le_ID`, `le_Nome`, `le_Valor`) VALUES
(1, '{"EN":"LEGALE ENii","ES":"LEGALE ESooo"}', '{"EN":"VA ENss","ES":"VA ESsss"}'),
(2, '{"EN":"LEGALE ENbb","ES":"LEGALE ESs"}', '{"EN":"bbb","ES":"bbb"}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `l_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `l_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `l_User` int(10) unsigned NOT NULL DEFAULT '0',
  `l_Type` varchar(5) DEFAULT NULL,
  `l_Info` text,
  PRIMARY KEY (`l_ID`),
  KEY `l_User` (`l_User`,`l_Type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `metadados`
--

CREATE TABLE IF NOT EXISTS `metadados` (
  `m_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `m_VinculoID` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `m_NomeMeta` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `m_Dados` text,
  PRIMARY KEY (`m_ID`),
  UNIQUE KEY `m_VinculoID` (`m_VinculoID`,`m_NomeMeta`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `metadados`
--

INSERT INTO `metadados` (`m_ID`, `m_VinculoID`, `m_NomeMeta`, `m_Dados`) VALUES
(3, 'one-shot-04', 'logo', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"one-shot-04\\/logo\\/img\\/4bf65bf6ee9e48d837408e9693ffbf93.png"}'),
(4, 'one-shot-04', 'img_destaque', '{"DESC":{"EN":"DES ENN","ES":"DESS ESSS"},"URL":"","IMAGEM":"one-shot-04\\/img_destaque\\/img\\/77ba2f4715c1b523871c22600dd64191.jpg"}'),
(5, 'one-shot-23', 'logo', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"one-shot-23\\/logo\\/img\\/a513135e328297184d0ca4fcdea9e95e.png"}'),
(6, 'one-shot-23', 'img_destaque', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"one-shot-23\\/img_destaque\\/img\\/bb364a99c3546cf0f57972d2eb825130.jpg"}'),
(7, 'hotel-2012', 'logo', '{"DESC":{"EN":"Logo em ingles","ES":"logo espanhol"},"URL":"","IMAGEM":"hotel-2012\\/logo\\/img\\/37b4d8f6417a7e6290033d562e2fe8a8.png"}'),
(8, 'hotel-2012', 'img_destaque', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"hotel-2012\\/img_destaque\\/img\\/5a245e28b8156793b60bdbd811e006b4.jpg"}'),
(9, 'madri', 'img_01', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"madri\\/img_01\\/img\\/c61667cb12d9f2eaa0ac8f16b2e63747.jpg"}'),
(10, 'madri', 'img_02', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"madri\\/img_02\\/img\\/e1e396d7c5d68feafebbf3a6f62ae1d4.jpg"}'),
(11, 'madri', 'img_eventos', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"madri\\/img_eventos\\/img\\/3cbb0e3084634f9a73a0986ea3aec33d.jpg"}'),
(12, 'madri', 'img_guia', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"madri\\/img_guia\\/img\\/156fd0fa680c4c8dd6faaf5a340e6c71.jpg"}'),
(13, 'madri', 'img_03', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"madri\\/img_03\\/img\\/bc073259b62603b46564ccaea6a7cedf.jpg"}'),
(14, 'madri', 'img_04', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"madri\\/img_04\\/img\\/c37f746e31842715f278a3a6b7ef7d3f.jpg"}'),
(15, 'madri', 'img_05', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"madri\\/img_05\\/img\\/c7d150bf5757018470979456d358084b.jpg"}'),
(16, 'one-shot-04', 'habitaciones', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"one-shot-04\\/habitaciones\\/img\\/495816e2693e099440267acb6048a094.jpg"}'),
(17, 'one-shot-04', 'localization', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"one-shot-04\\/localization\\/img\\/d2f969831286e88a345be62df712d48b.jpg"}'),
(18, 'one-shot-04', 'staff', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"one-shot-04\\/staff\\/img\\/a45f4f08c5cb1d5d3f3d83fc275d1695.jpg"}'),
(19, 'one-shot-04', 'eventos', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"one-shot-04\\/eventos\\/img\\/4bf004d96ea9e770f1b769391ac8f879.jpg"}'),
(20, 'one-shot-04', 'foto01', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"one-shot-04\\/foto01\\/img\\/6f68465d34b6e1a02fe89d1ade1283d7.jpg"}'),
(21, 'one-shot-04', 'foto02', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"one-shot-04\\/foto02\\/img\\/39a4fd8c91c3de860f26150982596a5d.jpg"}'),
(22, 'one-shot-04', 'fotos', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"one-shot-04\\/fotos\\/img\\/90fc47c2bd70e8bc62ee516fe0b38f9e.jpg"}'),
(23, 'one-shot-04', 'foto04', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"one-shot-04\\/foto04\\/img\\/a5d4ace75ba7938eb1701958d07008c7.jpg"}'),
(24, 'one-shot-04', 'foto03', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"one-shot-04\\/foto03\\/img\\/c629f3c7af19efab2d4c28eed55e26c3.jpg"}'),
(25, 'one-shot-04', 'eventos2', '{"DESC":{"EN":"","ES":""},"URL":"","IMAGEM":"one-shot-04\\/eventos2\\/img\\/3e4c3cc570db6f905188b68d85797499.jpg"}'),
(27, 'one-shot-04', 'servicios', '{"TITULO":"TITULO!!","DESC":{"EN":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent feugiat rutrum lorem ut imperdiet. Duis vulputate laoreet velit, at posuere nibh ornare sit amet. Aliquam nunc nulla, interdum id iaculis et, dapibus id elit. Cras venenatis, nisi quis bibendum tristique, erat tortor aliquam arcu, eget congue magna libero in diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent quis odio tortor, quis bibendum leo. Praesent rutrum risus eget augue fringilla bibendum at in est. Vivamus non velit a magna sollicitudin consectetur. Aenean nec elit lectus. Donec eu consequat nisi. In lacinia placerat dolor, imperdiet imperdiet ligula scelerisque vitae. Sed facilisis, quam in facilisis mollis, enim dolor auctor felis, in pellentesque ipsum arcu at tellus.","ES":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent feugiat rutrum lorem ut imperdiet. Duis vulputate laoreet velit, at posuere nibh ornare sit amet. Aliquam nunc nulla, interdum id iaculis et, dapibus id elit. Cras venenatis, nisi quis bibendum tristique, erat tortor aliquam arcu, eget congue magna libero in diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent quis odio tortor, quis bibendum leo. Praesent rutrum risus eget augue fringilla bibendum at in est. Vivamus non velit a magna sollicitudin consectetur. Aenean nec elit lectus. Donec eu consequat nisi. In lacinia placerat dolor, imperdiet imperdiet ligula scelerisque vitae. Sed facilisis, quam in facilisis mollis, enim dolor auctor felis, in pellentesque ipsum arcu at tellus."},"LINK":"http:\\/\\/google.com"}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prensa`
--

CREATE TABLE IF NOT EXISTS `prensa` (
  `p_ID` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `p_Titulo` varchar(100) NOT NULL,
  `p_Data` date DEFAULT NULL,
  `p_Dados` text,
  `p_Arquivo` text,
  `p_Foto` text,
  PRIMARY KEY (`p_ID`),
  KEY `p_Data` (`p_Data`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `s_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `s_Tipo` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `s_Slug` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `s_Ativo` char(1) NOT NULL DEFAULT 'N',
  `s_Dados` text,
  PRIMARY KEY (`s_ID`),
  UNIQUE KEY `h_Tipo` (`s_Tipo`,`s_Slug`),
  KEY `h_Ativo` (`s_Ativo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `servicios`
--

INSERT INTO `servicios` (`s_ID`, `s_Tipo`, `s_Slug`, `s_Ativo`, `s_Dados`) VALUES
(4, 'living', 'one-shot-04', 'S', '{"IMG":"hoteis\\/one-shot-04\\/servicios\\/living\\/ab22170f0f5a0df16dbcdee25645671d.jpg","TITULO":"Meu Titulo","DESC":{"EN":"ENo","ES":"ESo"},"LINK":"http:\\/\\/google.com"}'),
(5, 'snacking', 'one-shot-04', 'S', '{"IMG":"hoteis\\/one-shot-04\\/servicios\\/snacking\\/b7d986dfd0f5e764b0a2a7327f1bdfc0.jpg","TITULO":"Titulo","DESC":{"EN":"SSSS","ES":"EEEEE"},"LINK":""}'),
(6, 'beauty', 'one-shot-04', 'S', '{"IMG":"hoteis\\/one-shot-04\\/servicios\\/beauty\\/1536f294c6834dce5e2951e2be6ac9dc.jpg","TITULO":"Titulo","DESC":{"EN":"mmlllllllllllllll","ES":"mmmmmmmmm"},"LINK":""}'),
(7, 'bicicletas', 'one-shot-04', 'N', '{"IMG":"","TITULO":"TT","DESC":{"EN":"ENNNNNNNNNNNNN","ES":"ESSSSSSSSSSSSSSSSSSSSS"},"LINK":""}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `u_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `u_Nome` varchar(100) NOT NULL,
  `u_Apelido` varchar(10) NOT NULL,
  `u_Email` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `u_Senha` varchar(60) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `u_Token` varchar(32) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `c_Online` char(1) NOT NULL DEFAULT 'N',
  `u_LastIP` varchar(15) DEFAULT NULL,
  `u_LastAction` datetime DEFAULT NULL,
  `c_LastURL` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`u_ID`),
  UNIQUE KEY `u_Email` (`u_Email`),
  UNIQUE KEY `u_Apelido` (`u_Apelido`),
  KEY `u_Token` (`u_Token`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`u_ID`, `u_Nome`, `u_Apelido`, `u_Email`, `u_Senha`, `u_Token`, `c_Online`, `u_LastIP`, `u_LastAction`, `c_LastURL`) VALUES
(1, 'Luiz Vinicius', 'vinicius73', 'luiz.vinicius73@gmail.com', '$2a$08$NTE1NDEyOTE3NTA0NGMxNuc91abd59Y9CB.tbEhmLi8SNwcvbk5XG', '4dbd8b09655cc8cf16772c89ec235455', 'S', '192.168.0.109', '2012-09-27 18:41:26', '/login/logar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
