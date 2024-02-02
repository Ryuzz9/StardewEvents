create database eventstardew;
use eventstardew;

create table login(
id int primary key auto_increment,
nickname varchar(55),
nome varchar (55),
email varchar(55),
senha varchar(100)
);

create table nicknameFazenda(
id int primary key auto_increment,
nickname varchar (55),
id_fazendas int,
foreign key (id_fazendas) references fazendas(id)
);

select * from nicknameFazenda;

create table fazendas(
id int primary key auto_increment,

tipoFazenda varchar (55),
anoFazenda int (10),
quantidade int (10),
descricao varchar (255)
);
select*from login;	
select*from fazendas;			


SELECT nicknameFazenda.nickname, fazendas.quantidade
              FROM nicknameFazenda 
               JOIN fazendas ON fazendas.id = nicknameFazenda.id_fazendas;        

SELECT*from nicknameFazenda;
SELECT*from fazendas;
drop database eventstardew;




