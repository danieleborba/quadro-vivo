CREATE DATABASE quadrovivo DEFAULT CHARACTER SET utf8 ;
USE quadrovivo;
SET CHARACTER SET utf8;

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
-- `fusoHorario`
-- -----------------------------------------------------
CREATE TABLE `fusoHorario` (
	`codigo` INT AUTO_INCREMENT,
	`descricao` int(1) NULL,
	PRIMARY KEY (`codigo`)
);

-- -----------------------------------------------------
-- `usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuario` (
	`codigo` INT AUTO_INCREMENT PRIMARY KEY,
	`usuario` VARCHAR(45) NOT NULL UNIQUE,
	`nome` VARCHAR(100) NOT NULL,
	`email` VARCHAR(45) NOT NULL UNIQUE,
	`senha` VARCHAR(512) NOT NULL,
	`codigoCompra` INT NOT NULL UNIQUE,
	`imagem` VARCHAR(45) NOT NULL,
	`fusoHorario` INT(2) NOT NULL,
    `valida` INT(1) NOT NULL,
	FOREIGN KEY (`f	usoHorario`)
	REFERENCES `fusoHorario` (`codigo`)
);

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
-- `usuario_has_wifi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuario_has_wifi` (
	`usuario` INT NOT NULL,
	`wifi` INT NOT NULL,
	PRIMARY KEY (`usuario`, `wifi`),
		FOREIGN KEY (`usuario`)
		REFERENCES `usuario` (`codigo`),
		FOREIGN KEY (`wifi`)
		REFERENCES `wifi` (`codigo`));

-- -----------------------------------------------------
-- `planta_has_tipoPlanta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `planta_has_tipoPlanta` (
	`planta` INT NOT NULL,
	`tipoPlanta` INT NOT NULL,
	PRIMARY KEY (`planta`, `tipoPlanta`),
		FOREIGN KEY (`planta`)
		REFERENCES `planta` (`codigo`),
		FOREIGN KEY (`tipoPlanta`)
		REFERENCES `tipoPlanta` (`codigo`));
		
-- -----------------------------------------------------
-- `adm`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adm` (
	`codigo` INT AUTO_INCREMENT,
	`usuario` VARCHAR(45) NOT NULL UNIQUE,
	`senha` VARCHAR(512) NOT NULL,
	PRIMARY KEY (`codigo`));

-- -----------------------------------------------------
-- `quadro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `quadro` (
	`codigo` INT AUTO_INCREMENT PRIMARY KEY,
	`tipoQuadro` INT,
	FOREIGN KEY (`tipoQuadro`)
		REFERENCES `tipoQuadro` (`codigo`)
);

-- -----------------------------------------------------
-- `quadro_has_planta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `quadro_has_planta` (
	`quadro` INT NOT NULL,
	`planta` INT NOT NULL,
	PRIMARY KEY (`quadro`, `planta`),
	FOREIGN KEY (`quadro`)
	REFERENCES `quadro` (`codigo`),
	FOREIGN KEY (`planta`)
	REFERENCES `planta` (`codigo`)
);
-- -----------------------------------------------------
-- `quadro_has_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `quadro_has_usuario` (
	`quadro` INT NOT NULL,
	`usuario` INT NOT NULL,
	PRIMARY KEY (`quadro`, `usuario`),
	FOREIGN KEY (`quadro`)
	REFERENCES `quadro` (`codigo`),
	FOREIGN KEY (`usuario`)
	REFERENCES `usuario` (`codigo`)
);

-- -----------------------------------------------------
-- `quadro_has_wifi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `quadro_has_wifi` (
	`quadro` INT NOT NULL,
	`wifi` INT NOT NULL,
	PRIMARY KEY (`quadro`, `wifi`),
	FOREIGN KEY (`quadro`)
	REFERENCES `quadro` (`codigo`),
	FOREIGN KEY (`wifi`)
	REFERENCES `wifi` (`codigo`)
);


CREATE VIEW quadro_vivo
AS SELECT q.codigo AS quadro, u.usuario AS usuario, w.wifi AS wifi
FROM quadro q
	INNER JOIN quadro_has_wifi w
	ON q.codigo = w.quadro
		INNER JOIN quadro_has_usuario u
		ON q.codigo = u.quadro;	

CREATE VIEW planta_tipo 
AS SELECT p. codigo as codigo_planta, p.nome AS nome, t.codigo as tipo, t.descricao as tipoPlanta
FROM planta p, tipoPlanta t, planta_has_tipoPlanta tp
WHERE tp.planta = p.codigo
AND tp.tipoPlanta = t.codigo
GROUP BY p.codigo;


CREATE VIEW quadro_vivo_nomes
AS SELECT q.codigo AS quadro, u.nome AS usuario, w.nome AS wifi
FROM quadro q
	INNER JOIN quadro_has_wifi qhw
	ON q.codigo = qhw.quadro
		INNER JOIN wifi w
		ON qhw.wifi = w.codigo
			INNER JOIN quadro_has_usuario qhu
			ON qhu.usuario = q.codigo
				INNER JOIN usuario u
				ON u.codigo = qhu.usuario;


CREATE VIEW quadro_plantas
AS SELECT q.codigo AS quadro, p.codigo AS planta
FROM quadro q
	INNER JOIN quadro_has_planta qhp
	ON qhp.quadro = q.codigo
		INNER JOIN planta p
        ON qhp.planta = p.codigo;


CREATE VIEW usuario_endereco
AS SELECT u.codigo AS usuario, e.codigo AS endereco
FROM usuario u
	INNER JOIN usuario_has_endereco uhe
	ON uhe.usuario = u.codigo
		INNER JOIN endereco e
		ON uhe.endereco = e.codigo;
        
SELECT *
FROM adm;