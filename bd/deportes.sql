create database deportes;
use deportes;

create table t_deportes (id_deporte int auto_increment, 
	nombre varchar(150), 
	anio varchar(150), 
	TipoDeporte varchar(150), 
	primary key(id_deporte));
ALTER TABLE t_deportes CONVERT TO CHARACTER SET utf8;

insert into t_deportes (nombre,anio,TipoDeporte) values ('','','');
