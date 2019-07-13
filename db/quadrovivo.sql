create table usuario (
    codigo int primary key auto_increment,
    nome varchar(40),
    sobrenome varchar(100),
    usuario varchar(40) unique,
    email varchar(100) unique,
    senha varchar(128),
    telefone int(11),
    codigo_compra int unique,
    imagem varchar(140),
    data_nascimento date,
    plantas varchar(140),
    fuso varchar(140),
    wifi varchar(140),
    senha_wifi varchar(140)
);

use quadrovivo;

INSERT INTO usuario values (null, 'bb', 'bb', 'bb', 'bb@bb.com', '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9', '222', '222', 'img/usuarios/user.png', '2002-01-01', 'null', '-8', 'bb', '222');

insert into usuario values(
	null,
    'Daniele',
    'Borba',
    'dani',
    'daniborbavoigt@gmail.com',
    '5362625a023cd4c233f71e13c04aa299178a778f',
    '47996501032',
    '123456',
    null,
    '2002-05-02',
    null
);