CREATE DATABASE codserver;
USE codserver;

create table codserver (
    id int(11) NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    ip varchar(255) NOT NULL,
    port int(11) NOT NULL,
    type varchar(255) NOT NULL,
    repository varchar(255) NOT NULL, /*Stocker le serveur dans un répertoire */
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table users (
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;