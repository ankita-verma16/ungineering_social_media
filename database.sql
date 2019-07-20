create database social_media;

create table users(
    id int not null auto_increment,
    name varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    institute_name varchar(255) not null,
    phone_no int not null,
    primary key(id)
);


create table statuses(
    id int not null auto_increment,
    user_id int,
    status varchar(255) not null,
    date varchar(255) not null,
    time int not null,
    primary key(id),
    foreign key(user_id) references users(id)
);

ALTER TABLE statuses MODIFY user_id int NOT NULL;

ALTER TABLE users MODIFY phone_no varchar(255) NOT NULL;
