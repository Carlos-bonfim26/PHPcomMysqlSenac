create database carrinho;

use carrinho;

create table produto(

    Id_User int auto_increment primary key,
    Nome_Produto varchar(100),
    Preco decimal(10,2),
)

insert into produto(Nome_Produto, Preco) values ('Camisa do Paysandu', 299.99), ('Boné do Vasco', 32.50), ('Camisa de Honduras', 150.90);