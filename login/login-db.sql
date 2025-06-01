create database system_users;

use system_users;

create table users(
    ID_User int auto_increment primary key,
    Email_User varchar(100) not null unique,
    Password_User varchar(255) not null
);

insert into users(Email_User, Password_User) values ("admin@email.com", "1234");