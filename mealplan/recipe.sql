/*
create table account(
    uname varchar(30),
    fname varchar(30),
    lname varchar(30),
    pass varchar(20),    

    primary key (uname)
);

create table recipe(
    recid int auto_increment not null,
    recdate date, 
    recname varchar(30),
    recinfo varchar(500),

    primary key (recid)
);

create table measurement(
    measureid int auto_increment not null,
    measure varchar(10),

    primary key (measureid)
);

create table ingredients(
    Iid int auto_increment not null,
    ingredname varchar(15),

    primary key (Iid)
);

create table instructions(
    instructid int auto_increment not null,
    command varchar(15),

    primary key (instructid)
);

create table kitchen(
    ingredID int auto_increment not null,
    quantity varchar(10),
    ingredName varchar(15),

    primary key (ingredID)
);

create table supermarket(
    groceryID int auto_increment not null,
    groceryname varchar(15),
    quantity varchar(10),

    primary key (groceryID)
);

*/
insert into account(fname,lname,pass,uname) values ("Michelle","Bowers","Monica","Julia");
insert into account(fname,lname,pass,uname) values ("William","Esparza","Marc","Laura");
 
insert into recipe(recdate,recname,recinfo) values ("2021-03-27","Local","Listen discuss reduce color.");
insert into recipe(recdate,recname,recinfo) values ("2021-03-27","Anything","Voice room listen inside speech.");
 
insert into measurement(measure) values ("Ok");
insert into measurement(measure) values ("Now");
 
insert into ingredients(ingredname) values ("Form");
insert into ingredients(ingredname) values ("City");
 
insert into instructions(command) values ("Site");
insert into instructions(command) values ("Mind");
 
insert into kitchen(quantity,ingredName) values ("Part","To hot");
insert into kitchen(quantity,ingredName) values ("Cup","Full rule");
 
insert into supermarket(groceryname,quantity) values ("Mind","Take");
insert into supermarket(groceryname,quantity) values ("Can","Unit");
