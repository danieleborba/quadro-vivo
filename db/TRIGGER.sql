use quadrovivo;

DELIMITER $$

CREATE TRIGGER criar_quadro_usuario
AFTER INSERT ON usuario FOR EACH ROW
BEGIN     
    INSERT INTO quadro
    VALUES (null, 1);
END
$$

DELIMITER ;

insert into usuario values (null, 'dani2', 'dani', 'dani2@dani.com', 'b123e9e19d217169b981a61188920f9d28638709a5132201684d792b9264271b7f09157ed4321b1c097f7a4abecfc0977d40a7ee599c845883bd1074ca23c4af', 2222, 'img/usuarios/fazendeiro.png', 10, 0);

drop trigger criar_quadro_usuario;


select * from quadro_has_planta;

insert into quadro_has_usuario values (8,1);

INSERT INTO tipoQuadro(descricao) VALUES ('Enorme');