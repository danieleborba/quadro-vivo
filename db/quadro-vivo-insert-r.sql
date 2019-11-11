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

INSERT INTO adm VALUES
(DEFAULT, 'dani', '0f1f1c9453cb8a4af73544594c57ef24ad304ffcd8c49d89b5d74dfc05af63917ce7b790f7cc54c47ad16595ac49b5b1c9851f375e3d6b5700cb52146e10ef1e');

select * from usuario;

INSERT INTO planta (especie, nome) VALUES
('Rosmarinus officinalis', 'Alecrim'),
('Petroselinum crispum', 'Salsa'),
('Allium schoenoprasum', 'Cebolinha'),
('Thymus vulgaris', 'Tomilho'),
('Origanum vulgare', 'Orégano'),
('Lactuca Sativa', 'Alface'),
('Cichorium intybus', 'Chicória'),
('Nasturtium officinale', 'Agrião'),
('Eruca vesicaria ssp. sativa', 'Rúcula'),
('Spinacia oleracea', 'Espinafre'),
('Peumus boldus', 'Boldo'),
('Mentha', 'Hortelã'),
('Plantago major', 'Tanchagem'),
('Melissa officinalis', 'Erva Cidreira'),
('Cactaceae', 'Cacto'),
('Aloe vera', 'Babosa'),
('Viola tricolor', 'Amor Perfeito');

INSERT INTO planta_has_tipoPlanta values
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 4),
(16, 4),
(17, 4);

INSERT INTO usuario VALUES
(null, 'quadro', 'quadro', 'quadro@gmail.com', 'b123e9e19d217169b981a61188920f9d28638709a5132201684d792b9264271b7f09157ed4321b1c097f7a4abecfc0977d40a7ee599c845883bd1074ca23c4af', 1234, 'img/usuarios/fazendeiro.svg', 10, 0);

select * from usuario;