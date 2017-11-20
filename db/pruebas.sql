DROP TABLE IF EXISTS moviles CASCADE;

CREATE TABLE moviles
(
    id BIGSERIAL PRIMARY KEY
  , marca VARCHAR(255)
  , modelo VARCHAR(255)
  , pantalla NUMERIC(4,2)
  , color VARCHAR(255)
);

INSERT INTO moviles (marca, modelo, pantalla, color)
VALUES ('BQ', 'Aquaris X PRO', 5.2, 'Blanco')
     , ('Alcatel', 'Idol 3', 5.5, 'Negro');
