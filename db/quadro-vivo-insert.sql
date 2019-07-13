USE `quadro-vivo`;

INSERT INTO endereco VALUES
(DEFAULT, 'Argentina', 753, NULL, 'Jardim América', 'Ituporanga', 'SC');

INSERT INTO usuario VALUES
(DEFAULT, 'arvore', 'Daniele Borba', 'daniborbavoigt@gmail.com', 'teste', '5547996501032', '2002-05-02', -3, 12345, 'img/usuarios/usuario.png', 1, 1);

INSERT INTO usuario_has_planta VALUES
(1, 2),
(1, 1);