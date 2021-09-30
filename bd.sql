CREATE TABLE imagenes (
  nombree varchar(30) NOT NULL,
  imagenes longblob,
  creado datetime,
  PRIMARY KEY (nombree)
);

CREATE TABLE inicioSesion (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
contrasena VARCHAR(30) NOT NULL,
register INT(1) DEFAULT 0,
FOREIGN KEY (nombre) REFERENCES  imagenes(nombree)
);