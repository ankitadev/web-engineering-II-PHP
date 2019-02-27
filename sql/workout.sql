CREATE DATABASE workout;


CREATE TABLE public.user
(
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL,
	display_name VARCHAR(100) NOT NULL
);

CREATE TABLE public.legday
(
	id SERIAL NOT NULL PRIMARY KEY,
	eqipname VARCHAR(100) NOT NULL
);

CREATE TABLE public.absday
(
	id SERIAL NOT NULL PRIMARY KEY,
	eqipname VARCHAR(100) NOT NULL
);

CREATE TABLE public.armday
(
	id SERIAL NOT NULL PRIMARY KEY,
	eqipname VARCHAR(100) NOT NULL
);
CREATE TABLE public.workoutplan
(
	id SERIAL NOT NULL PRIMARY KEY,
	legday_id INT NOT NULL REFERENCES public.legday(id),
	absday_id INT NOT NULL REFERENCES public.absday(id),
	armday_id INT NOT NULL REFERENCES public.armday(id),
	note_text TEXT NOT NULL
);