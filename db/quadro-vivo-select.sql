-- TUDO
SELECT *
FROM planta;

-- PLANTA E TIPO
SELECT p.nome AS 'Planta', t.descricao AS 'Tipo'
FROM planta p, tipoPlanta t, planta_has_tipoPlanta h
WHERE p.codigo = h.planta_codigo
AND t.codigo = h.tipoPlanta_codigo;

-- USUÁRIO E PLANTAS
SELECT u.nome AS 'Usuário', p.nome AS 'Planta'
FROM planta p, usuario u, usuario_has_planta h
WHERE p.codigo = h.planta_codigo
AND u.codigo = h.usuario_codigo;

-- USUÁRIO E PLANTAS E TIPO
SELECT u.nome AS 'Usuário', p.nome AS 'Planta', t.descricao AS 'Tipo'
FROM planta p, usuario u, usuario_has_planta h, tipoPlanta t, planta_has_tipoPlanta hh
WHERE p.codigo = h.planta_codigo
AND u.codigo = h.usuario_codigo
AND p.codigo = hh.planta_codigo
AND t.codigo = hh.tipoPlanta_codigo;