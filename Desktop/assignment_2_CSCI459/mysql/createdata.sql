# Create the sample database
create database mydatabase;

# Create a table in the database
create table mydatabase.test (id smallint unsigned not null auto_increment,
                             animal varchar(100) not null, age int not null, name varchar(100) not null,
                             constraint pk_example primary key(id));

# Load some data into the database
insert into mydatabase.test (animal) values ('Dog');
insert into mydatabase.test (animal) values ('Cat');
insert into mydatabase.test (animal) values ('Hamster');
insert into mydatabase.test (age) values ('9');
insert into mydatabase.test (age) values ('2');
insert into mydatabase.test (age) values ('4');
insert into mydatabase.test (name) values ('Jerry');
insert into mydatabase.test (name) values ('Monica');
insert into mydatabase.test (name) values ('Steve');