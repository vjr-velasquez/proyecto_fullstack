create database proyecto_parqueo;
use proyecto_parqueo;

create table tipo_pago(
	tipo_pago_id smallint primary key,
    nombre_tipo varchar(50)
);

create table facturas(
	factura_id MEDIUMINT primary key,
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
	estadia_id MEDIUMINT primary key,
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
	tarifa_id smallint primary key ,
    descripcion text,
    precio double(10,2)
);

-- estadia alter table = tabla independiente estadia , tabla dependiente tarifa
ALTER TABLE estadia
ADD CONSTRAINT fk_tarifa_id
FOREIGN KEY (tarifa_id)
REFERENCES tarifa(tarifa_id)
ON UPDATE CASCADE
ON DELETE CASCADE;


CREATE TABLE estadia_vehiculo(
	estadia_id MEDIUMINT PRIMARY KEY,
    vehiculo_id SMALLINT,
    carril_id SMALLINT
);

CREATE TABLE carriles(
	carril_id SMALLINT PRIMARY KEY,
    disponibilidad VARCHAR(10)    
);

CREATE TABLE vehiculos(
	vehiculo_id SMALLINT PRIMARY KEY,
    matricula VARCHAR(7),
    usuario_id MEDIUMINT,
    marca SMALLINT,
    modelo VARCHAR(30),
    color VARCHAR(30)
);

CREATE TABLE marcas(
	marca_id SMALLINT PRIMARY KEY,
	nombre_marca VARCHAR(50)
);

CREATE TABLE usuarios(
	usuario_id MEDIUMINT PRIMARY KEY,
    nit VARCHAR(12),
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    direccion VARCHAR(100)
);

CREATE TABLE usuarios_fijos(
	usuario_id MEDIUMINT PRIMARY KEY,
    tipo_identificacion VARCHAR(13),
    no_identificacion VARCHAR(13),
    correo_electronico VARCHAR(100),
    password VARCHAR(100),
    tipo_usuario SMALLINT
);

CREATE TABLE empleados(
	empleado_id MEDIUMINT PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    telefono INT(8),
    correo_electronico VARCHAR(100),
    direccion VARCHAR(100),
    password VARCHAR(100),
    tipo_usuario SMALLINT
);

CREATE TABLE tipos_usuarios(
	tipo_usuario_id SMALLINT PRIMARY KEY,
    nombre_tipo VARCHAR(50)
);

ALTER TABLE estadia_vehiculo ADD CONSTRAINT FOREIGN KEY (estadia_id) REFERENCES estadia(estadia_id) ON UPDATE CASCADE ON DELETE CASCADE;
AlTER TABLE estadia_vehiculo ADD CONSTRAINT FOREIGN KEY (vehiculo_id) REFERENCES vehiculos(vehiculo_id) ON UPDATE CASCADE ON DELETE CASCADE;
AlTER TABLE estadia_vehiculo ADD CONSTRAINT FOREIGN KEY (carril_id) REFERENCES carriles(carril_id) ON UPDATE CASCADE ON DELETE CASCADE;
AlTER TABLE vehiculos ADD CONSTRAINT FOREIGN KEY (marca) REFERENCES marcas(marca_id) ON UPDATE CASCADE ON DELETE CASCADE;
AlTER TABLE vehiculos ADD CONSTRAINT FOREIGN KEY (usuario_id) REFERENCES usuarios(usuario_id) ON UPDATE CASCADE ON DELETE CASCADE;
AlTER TABLE usuarios_fijos ADD CONSTRAINT FOREIGN KEY (usuario_id) REFERENCES usuarios(usuario_id) ON UPDATE CASCADE ON DELETE CASCADE;
AlTER TABLE usuarios_fijos ADD CONSTRAINT FOREIGN KEY (tipo_usuario) REFERENCES tipos_usuarios(tipo_usuario_id) ON UPDATE CASCADE ON DELETE CASCADE;
AlTER TABLE empleados ADD CONSTRAINT FOREIGN KEY (tipo_usuario) REFERENCES tipos_usuarios(tipo_usuario_id) ON UPDATE CASCADE ON DELETE CASCADE;


