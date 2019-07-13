CREATE DATABASE IF NOT EXISTS `quadro-vivo` DEFAULT CHARACTER SET utf8 ;
USE `quadro-vivo` ;

-- -----------------------------------------------------
-- `endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `endereco` (
  `codigo` INT AUTO_INCREMENT,
  `rua` VARCHAR(45) NOT NULL,
  `numero` INT NOT NULL,
  `complemento` VARCHAR(45) NULL,
  `bairro` VARCHAR(45) NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(2) NOT NULL,
  PRIMARY KEY (`codigo`));


-- -----------------------------------------------------
-- `tipoQuadro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tipoQuadro` (
  `codigo` INT AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`codigo`));


-- -----------------------------------------------------
-- `usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuario` (
  `codigo` INT AUTO_INCREMENT,
  `usuario` VARCHAR(45) NOT NULL UNIQUE,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(45) NOT NULL UNIQUE,
  `senha` VARCHAR(225) NOT NULL,
  `telefone` VARCHAR(13) NULL UNIQUE,
  `dataNascimento` DATE NULL,
  `fusoHorario` INT(2) NOT NULL,
  `codigoCompra` INT NOT NULL UNIQUE,
  `imagem` VARCHAR(45) NOT NULL,
  `endereco_codigo` INT NOT NULL,
  `tipoQuadro_codigo` INT NOT NULL,
  PRIMARY KEY (`codigo`, `tipoQuadro_codigo`),
    FOREIGN KEY (`endereco_codigo`)
    REFERENCES `endereco` (`codigo`),
    FOREIGN KEY (`tipoQuadro_codigo`)
    REFERENCES `tipoQuadro` (`codigo`));

-- -----------------------------------------------------
-- `wifi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wifi` (
  `codigo` INT AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(225) NOT NULL,
  PRIMARY KEY (`codigo`));


-- -----------------------------------------------------
-- `planta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `planta` (
  `codigo` INT AUTO_INCREMENT,
  `especie` VARCHAR(45) NOT NULL UNIQUE,
  `nome` VARCHAR(45) NOT NULL UNIQUE,
  `descricao` VARCHAR(600) NULL,
  PRIMARY KEY (`codigo`));


-- -----------------------------------------------------
-- `tipoPlanta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tipoPlanta` (
  `codigo` INT AUTO_INCREMENT,
  `descricao` VARCHAR(45) NOT NULL UNIQUE,
  PRIMARY KEY (`codigo`));


-- -----------------------------------------------------
-- `usuario_has_planta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuario_has_planta` (
  `usuario_codigo` INT NOT NULL,
  `planta_codigo` INT NOT NULL,
  PRIMARY KEY (`usuario_codigo`, `planta_codigo`),
    FOREIGN KEY (`usuario_codigo`)
    REFERENCES `usuario` (`codigo`),
    FOREIGN KEY (`planta_codigo`)
    REFERENCES `planta` (`codigo`));


-- -----------------------------------------------------
-- `usuario_has_wifi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuario_has_wifi` (
  `usuario_codigo` INT NOT NULL,
  `wifi_codigo` INT NOT NULL,
  PRIMARY KEY (`usuario_codigo`, `wifi_codigo`),
    FOREIGN KEY (`usuario_codigo`)
    REFERENCES `usuario` (`codigo`),
    FOREIGN KEY (`wifi_codigo`)
    REFERENCES `wifi` (`codigo`));

-- -----------------------------------------------------
-- `planta_has_tipoPlanta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `planta_has_tipoPlanta` (
  `planta_codigo` INT NOT NULL,
  `tipoPlanta_codigo` INT NOT NULL,
  PRIMARY KEY (`planta_codigo`, `tipoPlanta_codigo`),
    FOREIGN KEY (`planta_codigo`)
    REFERENCES `planta` (`codigo`),
    FOREIGN KEY (`tipoPlanta_codigo`)
    REFERENCES `tipoPlanta` (`codigo`));
    

INSERT INTO tipoQuadro VALUES
(DEFAULT, 'Mini'),
(DEFAULT, 'Pequeno'),
(DEFAULT, 'Médio'),
(DEFAULT, 'Grande');

INSERT INTO tipoPlanta VALUES
(DEFAULT, 'Tempero'),
(DEFAULT, 'Chá'),
(DEFAULT, 'Hortaliça'),
(DEFAULT, 'Ornamental'),
(DEFAULT, 'Cacto/Suculenta');

INSERT INTO planta VALUES
(DEFAULT, 'Lactuca sativa var. crispa', 'Alface', 'O valor energético da alface é baixo, pois seu conteúdo em água representa 95% do seu peso. A alface contém ferro, mineral com importante papel no transporte de oxigênio no organismo. Contém fibras, que auxiliam na digestão e no bom funcionamento do intestino, além de apresentar pequenos teores de minerais como cálcio e fósforo.'),
(DEFAULT, 'Mentha spicata', 'Hortelã', 'É utilizada como tempero em culinária, como aromatizante em certos produtos alimentares, ou para a extração do seu óleo essencial. Por vezes, simplesmente cultivada como planta ornamental.É uma das plantas mais usadas do mundo. É também utilizada como planta medicinal, estando inscrita nas farmacopeias de muitos países da Europa. De entre as inúmeras virtudes citadas, podem destacar-se: estimulante, estomacal, carminativo. Usado nas atonias digestivas, flatulências, dispepsias nervosas, empregado nas palpitações e tremores nervosos, vômitos, cólicas uterinas, etc.');

INSERT INTO planta_has_tipoPlanta VALUES
(1, 3),
(2, 2);