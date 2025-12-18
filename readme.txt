anntes hay q verificar q la tabla estudiante este creada para que las otras 2 se puedan crear
aparte de esto, al final no use la de prestamo, solamente se cambia el estado de la variante estado cuando se acciona en el sistema


-- 7. BIBLIOTECA / LIBRO /

CREATE TABLE Biblioteca (
    id_biblioteca NUMBER(10)      PRIMARY KEY,
    id_estudiante NUMBER(10),          -- según diagrama, referencia a estudiante
    nombre        VARCHAR2(100)   NOT NULL,
    id_facultad   NUMBER(10)      NOT NULL,
    CONSTRAINT fk_biblioteca_estudiante
        FOREIGN KEY (id_estudiante) REFERENCES Estudiante(id_estudiante),
    CONSTRAINT fk_biblioteca_facultad
        FOREIGN KEY (id_facultad) REFERENCES Facultad(id_facultad)
);

CREATE OR REPLACE TABLE  Libro (
    id_libro      NUMBER(10)      PRIMARY KEY,
    titulo        VARCHAR2(150)   NOT NULL,
    autor         VARCHAR2(100),
    categoria     varchar(100)    NOT NULL,
    id_biblioteca NUMBER(10)      NOT NULL,
    anio          INT             NOT NULL,
    estado        ENUM('Disponible', 'Prestado') NOT NULL DEFAULT 'Disponible'  
    CONSTRAINT fk_libro_biblioteca
        FOREIGN KEY (id_biblioteca) REFERENCES Biblioteca(id_biblioteca)
);