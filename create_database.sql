create database dbEnquete;
use dbEnquete;

create table questionnaire(
cle varchar(12),
name varchar(40),
displayName varchar(60),
clescription varchar(124),
CONSTRAINT pk_questionnaire PRIMARY KEY(cle)
);

create table questions(
cle varchar(12),
rang varchar(6),
typeQ varchar(5),
name varchar(20),
text varchar(60),
reponse1 varchar(31),
reponse2 varchar(31),
reponse3 varchar(31),
reponse4 varchar(31),
reponse5 varchar(31),
clefaut varchar(1),
CONSTRAINT pk_questions PRIMARY KEY(cle,rang),
CONSTRAINT fk_questions_cle FOREIGN KEY(cle) REFERENCES questionnaire(cle)
);
