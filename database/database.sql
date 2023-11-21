CREATE TABLE personas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    edad INT,
    estilo VARCHAR(50)
);

INSERT INTO personas (nombre, edad, estilo) VALUES ('Alex', '25', 'Rock');
INSERT INTO personas (nombre, edad, estilo) VALUES ('Pepe', '30', 'Pop');
