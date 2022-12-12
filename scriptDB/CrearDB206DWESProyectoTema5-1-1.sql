
/**
 * Author:  Alejandro Otalvaro
 * Created: 3 nov 2022
 */

use dbs9174059;

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

