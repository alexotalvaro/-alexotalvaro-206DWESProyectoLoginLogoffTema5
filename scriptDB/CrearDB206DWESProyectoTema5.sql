
/**
 * Author:  Alejandro Otalvaro
 * Created: 1 dic 2022
 */

/*CREACION DE LA BASE DE DATOS*/
create database if not exists DB206DWESProyectoLoginLogoffTema5; 

/*CREACION DEL USUARIO*/
create user if not exists 'user206DWESLoginLogoffTema5' identified by 'paso';

/*OTORGAR PRIVILEGIOS*/
GRANT ALL PRIVILEGES ON DB206DWESProyectoLoginLogoffTema5.* TO 'user206DWESLoginLogoffTema5'@'%'; 
flush privileges ;


use DB206DWESProyectoLoginLogoffTema5;


/*CREACION DE LA TABLA CON SUS RESPECTIVOS CAMPOS*/
create table if not exists T01_Usuario(
    T01_CodUsuario varchar(8) primary key not null,
    T01_Password varchar(255) not null,
    T01_DescUsuario varchar(255) not null,
    T01_NumConexiones int not null default 1,
    T01_FechaHoraUltimaConexion datetime not null,
    T01_Perfil enum('administrador','usuario') default 'usuario',
    T01_ImagenUsuario MEDIUMBLOB null)engine=Innodb;
 

/*CREACION DE LA TABLA CON SUS RESPECTIVOS CAMPOS*/
create table T02_Departamento(T02_CodDepartamento char(3) primary key,
    T02_DescDepartamento varchar(255) not null,
    T02_FechaCreacionDepartamento int not null,
    T02_VolumenNegocio float not null,
    T02_FechaBajaDepartamento int null)engine=Innodb;


