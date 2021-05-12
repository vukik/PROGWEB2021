create database tienda;
use tienda;

create table productos(
id int primary key unique,
nombre varchar(50),
precio float(50,2),
categoria varchar(50),
imagen varchar(100),
stock int);

insert into productos (id,nombre,precio,categoria,imagen,stock)
values ("1","camisa",99.99,"hombre","camisa.jpg",10);
