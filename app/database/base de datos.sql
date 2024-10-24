-- Crear la base de datos
CREATE DATABASE dbasistencia;

-- Usar la base de datos
USE dbasistencia;

-- Crear la tabla personas
CREATE TABLE personas (
    idpersona INT AUTO_INCREMENT PRIMARY KEY,
    apellidos VARCHAR(40) NOT NULL,
    nombres VARCHAR(40) NOT NULL,
    dni CHAR(8) NOT NULL,
    telefono CHAR(9) NULL,
    direccion VARCHAR(70) NULL,
    email VARCHAR(70) NULL,
    create_at DATETIME NOT NULL DEFAULT NOW(),
    CONSTRAINT uk_dni_per UNIQUE (dni)
) ENGINE=InnoDB;

-- Insertar datos en la tabla personas
INSERT INTO personas (apellidos, nombres, dni) VALUES
('Rojas Huarcaya', 'Max', '72672071'),
('Ochoa Prada', 'Karina', '11112222'),
('Castilla Morales', 'Carlos', '33334444');

-- Crear la tabla perfiles
CREATE TABLE perfiles (
    idperfil INT AUTO_INCREMENT PRIMARY KEY,
    perfil VARCHAR(30) NOT NULL,
    nombrecorto CHAR(3) NOT NULL,
    descripcion VARCHAR(200) NULL,
    create_at DATETIME NOT NULL DEFAULT NOW(),
    CONSTRAINT uk_perfil_per UNIQUE (perfil),
    CONSTRAINT uk_nombrecorto_per UNIQUE (nombrecorto)
) ENGINE=InnoDB;

-- Insertar datos en la tabla perfiles
INSERT INTO perfiles (perfil, nombrecorto) VALUES
('Administrador', 'ADM'),
('Supervisor', 'SPV'),
('Invitado', 'INV');

-- Crear la tabla usuarios
CREATE TABLE usuarios (
    idusuario INT AUTO_INCREMENT PRIMARY KEY,
    idpersona INT NOT NULL,
    idperfil INT NOT NULL,
    nomuser VARCHAR(20) NOT NULL,
    passuser VARCHAR(70) NOT NULL,
    create_at DATETIME NOT NULL DEFAULT NOW(),
    update_at DATETIME NULL,
    inactive_at DATETIME NULL,
    CONSTRAINT fk_idpersona_usu FOREIGN KEY (idpersona) REFERENCES personas (idpersona),
    CONSTRAINT uk_idpersona_usu UNIQUE (idpersona),
    CONSTRAINT fk_idperfil_usu FOREIGN KEY (idperfil) REFERENCES perfiles (idperfil),
    CONSTRAINT uk_nomuser_usu UNIQUE (nomuser)
) ENGINE=InnoDB;

-- Insertar datos en la tabla usuarios
INSERT INTO usuarios (idpersona, idperfil, nomuser, passuser) VALUES
(1, 1, 'Max', '123'),
(2, 2, 'Karina', '123'),
(3, 3, 'Carlos', '123');

-- Actualizar contraseñas de los usuarios
UPDATE usuarios SET passuser = '$2y$10$oQ1e3Uxeu0U.P159ORvjWe1eUDo81inIRNxZvK1a5oc.iUN51cvEW' WHERE idusuario = 1;

UPDATE usuarios SET passuser = '$2y$10$weOiyx9IXzIweKUh9BKUu.4E4r.59k4NbMQ4tXKshL7rAVS2i6qWW' WHERE idusuario = 2;

UPDATE usuarios SET passuser = '$2y$10$FI4hVlRZGS7stHUX3PweQeBKxiY8pMdEr6paxMBrPM18s42Uj8W0y' WHERE idusuario = 3;
