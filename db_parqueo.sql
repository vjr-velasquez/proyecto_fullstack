create database proyecto_parqueo;
use proyecto_parqueo;

create table tipo_pago(
	tipo_pago_id smallint primary key not null,
    nombre_tipo varchar(50)
);

create table facturas(
	factura_id smallint primary key not null,
    numero_factura varchar(100),
    fecha_impresion date,
    nit varchar(100),
    direccion varchar(100),
    monto double(10,2) not null,
    tipo_pago_id smallint
);

-- primer alter table para la tabla facturas
ALTER TABLE facturas
ADD CONSTRAINT fk_tipo_pago
FOREIGN KEY (tipo_pago_id)
REFERENCES tipo_pago(tipo_pago_id)
ON UPDATE CASCADE
ON DELETE CASCADE;


create table estadia(
	estadia_id smallint primary key not null,
    tarifa_id smallint,
    fecha_hora_entrada datetime,
    fecha_hora_salida datetime,
    costo double(10,2)
);

-- estadia alter table con facturas
ALTER TABLE facturas
ADD CONSTRAINT fk_estadia_id
FOREIGN KEY (factura_id)
REFERENCES estadia(estadia_id)
ON UPDATE CASCADE
ON DELETE CASCADE;

create table tarifa(
	tarifa_id smallint primary key not null,
    descripcion text,
    precio double(10,2)
);

-- estadia alter table = tabla independiente estadia , tabla dependiente tarifa
ALTER TABLE estadia
ADD CONSTRAINT fk_tarifa_id
FOREIGN KEY (tarifa_id)
REFERENCES estadia(estadia_id)
ON UPDATE CASCADE
ON DELETE CASCADE;




