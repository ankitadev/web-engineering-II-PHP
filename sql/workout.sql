CREATE DATABASE workout;


CREATE TABLE public.user
(
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL,
	display_name VARCHAR(100) NOT NULL
);

CREATE TABLE records (
    id SERIAL PRIMARY KEY,
    name VARCHAR(60) NOT NULL
);

CREATE TABLE bmi(
    id SERIAL PRIMARY KEY,
    weight VARCHAR(60) NOT NULL,
    height VARCHAR(10) NOT NULL,
    bmical VARCHAR(10) NOT NULL
);

CREATE TABLE calories (
    id SERIAL PRIMARY KEY,
    gender VARCHAR(60) NOT NULL,
    age VARCHAR(60) NOT NULL,
    weight VARCHAR(60) NOT NULL,
    height VARCHAR(10) NOT NULL,
    cal VARCHAR(10) NOT NULL
);


INSERT INTO calories(gender, age, weight, height, cal) VALUES ('Female', '11', '11', '11', '11');
INSERT INTO bmi(weight, height, bmical) VALUES ('22', '22', '22');