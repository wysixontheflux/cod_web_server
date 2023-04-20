CREATE DATABASE codserver;
USE codserver;

create table codserver (
    id int(11) NOT NULL AUTO_INCREMENT,
    server_name varchar(255) NOT NULL,
    server_ip varchar(255) NOT NULL,
    server_port int(11) NOT NULL,
    server_rcon varchar(255) NOT NULL,
    server_status varchar(255) NOT NULL,
    server_maxplayers int(11) NOT NULL,
/*    server_map varchar(255) NOT NULL,*/
    server_game varchar(255) NOT NULL,
    server_version varchar(255) NOT NULL,
    repository varchar(255) NOT NULL, /*Stocker le serveur dans un répertoire */
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table users (
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;