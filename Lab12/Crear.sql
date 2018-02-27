drop TABLE Entregan
drop TABLE Materiales
drop TABLE Proyectos
drop TABLE Proveedores

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Entregan')
    drop TABLE Entregan
CREATE TABLE Entregan (
  Clave    NUMERIC(5) not null,
  RFC      CHAR(13) not null,
  Numero   NUMERIC(5) not null,
  Fecha    DATETIME not null,
  Cantidad NUMERIC(8, 2)
)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Materiales')
    drop TABLE Materiales
CREATE TABLE Materiales(
  Clave NUMERIC(5) not null,
  Descripcion VARCHAR(50),
  Costo NUMERIC(8,2)
)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Proveedores')
    drop TABLE Proveedores
CREATE TABLE Proveedores(
  RFC CHAR(13) not null,
  RazonSocial VARCHAR(50)
)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Proyectos')
    drop TABLE Proyectos
CREATE TABLE Proyectos(
  Numero NUMERIC (5) not null,
  Denominacion VARCHAR(50)
)
