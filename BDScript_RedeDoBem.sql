CREATE TABLE `cadastro_animal` (
  `id_cadastro` int PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `porte` varchar(50) NOT NULL,
  `idade` varchar(50) NOT NULL,
  `foto1` image NOT NULL,
  `foto2` image NOT NULL,
  `foto3` image NOT NULL,
  `foto4` image NOT NULL,
  `historia` text NOT NULL,
  `status_animal` varchar(50) NOT NULL
);

CREATE TABLE `login` (
  `id_login` int PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL
);

CREATE TABLE `blog` (
  `id_blog` int PRIMARY KEY AUTO_INCREMENT,
  `foto1` image NOT NULL,
  `foto2` image NOT NULL,
  `foto3` image NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `tipo_conteudo` text NOT NULL
);

CREATE TABLE `patrocinadores` (
  `id_patrocinador` int PRIMARY KEY AUTO_INCREMENT,
  `foto` image NOT NULL,
  `status_patrocinador` varchar(50) NOT NULL
);
