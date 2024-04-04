CREATE TABLE [filtros] (
  [id_filtro] int PRIMARY KEY IDENTITY(1, 1),
  [tipo] varchar(50) NOT NULL,
  [genero] varchar(50) NOT NULL,
  [porte] varchar(50) NOT NULL,
  [idade] varchar(50) NOT NULL
)
GO

CREATE TABLE [cadastro_animal] (
  [id_cadastro] int PRIMARY KEY IDENTITY(1, 1),
  [nome] varchar(30) NOT NULL,
  [tipo] varchar(50) NOT NULL,
  [genero] varchar(50) NOT NULL,
  [porte] varchar(50) NOT NULL,
  [idade] varchar(50) NOT NULL,
  [foto1] image NOT NULL,
  [foto2] image NOT NULL,
  [foto3] image NOT NULL,
  [foto4] image NOT NULL,
  [historia] text NOT NULL,
  [filtros_id_filtro] int
)
GO

CREATE TABLE [login] (
  [id_login] int PRIMARY KEY IDENTITY(1, 1),
  [email] varchar(100) NOT NULL,
  [senha] varchar(50) NOT NULL
)
GO

CREATE TABLE [blog] (
  [id_blog] int PRIMARY KEY IDENTITY(1, 1),
  [foto1] image NOT NULL,
  [foto2] image NOT NULL,
  [foto3] image NOT NULL,
  [titulo] varchar(50) NOT NULL,
  [texto] text NOT NULL,
  [tipo_conteudo] text NOT NULL
)
GO

ALTER TABLE [cadastro_animal] ADD FOREIGN KEY ([filtros_id_filtro]) REFERENCES [filtros] ([id_filtro])
GO
