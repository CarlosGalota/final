create database final;
use final;

create table roles (
		rol tinyint primary key,
        descripcion varchar (64));        

insert into roles values (1,"administrador"), (2,"profesor"),(3,"alumno");

create table usuarios(
			id int (32) auto_increment primary key,
            nombre varchar (32),
            apellido varchar (32),
            dni int (10),
            usuario varchar (64),
			pass varchar (128),
            rol tinyint,
            foreign key (rol) references roles (rol)
            );

create table notas (
				id_notas int (32) auto_increment primary key,
                parcial1 int (2),
                parcial2 int (2),
                final int (2),
                id int(32),
                foreign key (id) references usuarios (id)
);

create table carrera (
				id_carrera int (3) auto_increment primary key,
                descripcion_carrera varchar (64)
);

create table materia (
				id_materia int (3) auto_increment primary key,
                descripcion_materia varchar (64),
                id_carrera int (3),
                foreign key (id_carrera) references carrera (id_carrera)
);

select * from usuarios;
insert into usuarios value (null, "admin", "admin", 1111, "admin", 1234, 1)