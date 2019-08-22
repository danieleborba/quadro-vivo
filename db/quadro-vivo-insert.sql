USE `quadrovivo`;

SELECT *
FROM planta;

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

INSERT INTO fusoHorario VALUES
(NULL, -12),
(NULL, -11),
(NULL, -10),
(NULL, -9),
(NULL, -8),
(NULL, -7),
(NULL, -6),
(NULL, -5),
(NULL, -4),
(NULL, -3),
(NULL, -2),
(NULL, -1),
(NULL, 0),
(NULL, 1),
(NULL, 2),
(NULL, 3),
(NULL, 4),
(NULL, 5),
(NULL, 6),
(NULL, 7),
(NULL, 8),
(NULL, 9),
(NULL, 10),
(NULL, 11),
(NULL, 12);

INSERT INTO endereco VALUES
(DEFAULT, 'Argentina', 753, NULL, 'Jardim América', 'Ituporanga', 'SC');

INSERT INTO usuario VALUES
(NULL, 'arvore', 'Daniele Borba', 'daniborbavoigt@gmail.com', '6fb2de907fbc1ff1ba7fb445aa4e36bbc068b7c30e2a3f8f715ec0cdbf2e2a96e4a390808d2f2203ffffa9efa7e2661dbcf6032b0399c14f1815b286bddf5b99', '5547996501032', '2002-05-02', 12345, 'img/usuarios/usuario.png', 10);

INSERT INTO usuario_has_endereco VALUES
(1, 1);

INSERT INTO adm VALUES
(DEFAULT, 'dani', '0f1f1c9453cb8a4af73544594c57ef24ad304ffcd8c49d89b5d74dfc05af63917ce7b790f7cc54c47ad16595ac49b5b1c9851f375e3d6b5700cb52146e10ef1e');


INSERT INTO quadro VALUES
(NULL, 1);

INSERT INTO quadro_has_planta values
(1, 1),
(1, 2);

INSERT INTO quadro_has_usuario VALUES
(1, 1);

INSERT INTO wifi VALUES
(NULL, 'IF_Catarinense', 'ifcatarinense');

INSERT INTO quadro_has_wifi VALUES
(1, 1);