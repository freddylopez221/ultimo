drop table if exists carreras;
drop table if exists semestres;
drop table if exists usuarios;
drop table if exists diagnosticogrupal;
drop table if exists estudiantessituacion;
drop table if exists objetivodelplan;
drop table if exists actividades;



create table tiposdeusuarios
(
id bigserial NOT NULL,
	administrador text,
	docente text,
	alumno text,

	PRIMARY KEY(id)
);

create table carreras
(
id bigserial NOT NULL,
	carrera text NOT NULL,

	PRIMARY KEY(id)

);

create table semestres
(
id bigserial NOT NULL,
	semestre text NOT NULL,

	PRIMARY KEY(id)
);

create table usuarios
(
id bigserial NOT NULL,
		nombre  text NOT NULL,
		paterno text NOT NULL,
		materno text NOT NULL,
		edad integer NOT NULL,
		genero text NOT NULL,
		direccion text NOT NULL,
		telefono text NOT NULL,
		estado text NOT NULL,
		ciudad text NOT NULL,
		nu_carreras bigint REFERENCES carreras(id),
		nu_semestres bigint REFERENCES semestres(id),
		redessociales text,
		nu_usuario bigint REFERENCES tiposdeusuarios(id),
		

		PRIMARY KEY(id),
		FOREIGN KEY (nu_carreras) REFERENCES carreras(id),
		FOREIGN KEY (nu_semestres) REFERENCES semestres(id),
		FOREIGN KEY (nu_usuario) REFERENCES tiposdeusuarios(id)
		
);




create table diagnosticogrupal
(
id bigserial NOT NULL,
	descripcion_general_inicial text NOT NULL,
	PRIMARY KEY(id)
);

create table estudiantessituacion
(
id bigserial NOT NULL,
	nombre_alumno text NOT NULL,
	situacion_academica text NOT NULL,

	PRIMARY KEY(id)
);

create table objetivodelplan
(
id bigserial NOT NULL,
	plan_accion text NOT NULL,

	PRIMARY KEY(id)
);

create table actividades
(
id bigserial NOT NULL,
	secciones text,
	PRIMARY KEY(id)
);