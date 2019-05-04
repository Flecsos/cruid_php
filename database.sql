create database users_and_countries;
use users_and_countries;

create table users (

                       id  int(11) NOT NULL auto_increment,
                       name varchar(30) not null,
                       email varchar(30) not null,
                       country_id varchar(30) not null,
                       PRIMARY KEY  (`id`)


);

create table countries (

                           id  int(11) NOT NULL auto_increment,
                           country varchar(30) not null,
                           PRIMARY KEY  (`id`)

)
