create database test;
use test;
create table fish(
	id int not null auto_increment,
    name varchar(10),
    primary key (id)
);
create table amount(
	id int not null auto_increment,
	size int not null,
    fish_id int,
    primary key(id),
	foreign key (fish_id) references fish(id)
);
alter table fish add column big varchar(10);
alter table amount add column tame int;
insert into amount(tame) values (2016),(2015),(2011),(2021);
select * from amount;
