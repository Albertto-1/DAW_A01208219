BULK INSERT Proyectos
   FROM 'e:\wwwroot\a1208219\proyectos.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )
ALTER TABLE Proyectos add constraint llaveProyectos PRIMARY KEY (Numero)

BULK INSERT Proveedores
   FROM 'e:\wwwroot\a1208219\proveedores.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )
ALTER TABLE Proveedores add constraint llaveProveedores PRIMARY KEY (RFC)

BULK INSERT Materiales
   FROM 'e:\wwwroot\a1208219\materiales.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )
ALTER TABLE Materiales add constraint llaveMateriales PRIMARY KEY (Clave)

SET DATEFORMAT dmy
BULK INSERT Entregan
   FROM 'e:\wwwroot\a1208219\entregan.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )
ALTER TABLE Entregan add constraint llaveEntregan PRIMARY KEY (Clave, RFC, Numero, Fecha)

ALTER TABLE entregan add constraint cfentreganclave
foreign key (clave) references materiales(clave)

ALTER TABLE entregan add constraint cfentreganrfc
foreign key (RFC) references Proveedores(RFC)

ALTER TABLE entregan add constraint cfentregannumero
foreign key (Numero) references Proyectos(Numero)

ALTER TABLE entregan add constraint cantidad check (cantidad > 0) ;