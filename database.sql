create database social_media;

create table users(
    id int not null auto_increment,
    name varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    institute_name varchar not null,
    phone_no int not null,
    primary key(id)
);


create table statuses(
    id int not null auto_increment,
    status varchar(255) not null,
    date varchar(255) not null,
    time int not null,
    user_id int,
    primary key(id),
    foreign key(user_id)references users(id)
);
