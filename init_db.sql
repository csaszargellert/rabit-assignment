CREATE DATABASE IF NOT EXISTS rabit_assignment;

USE rabit_assignment;

CREATE TABLE IF NOT EXISTS users (
  id int NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS advertisements (
  id int NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  userid int,
  PRIMARY KEY(id),
  FOREIGN KEY (userid) REFERENCES users(id)
);

INSERT INTO users (name) VALUES ('TEST-NAME-1'), ('TEST-NAME-2'), ('TEST-NAME-3');

INSERT INTO advertisements (title, userid) VALUES ('ADVERTISEMENT-1', 1), ('ADVERTISEMENT-2', 2), ('ADVERTISEMENT-3', 3), ('ADVERTISEMENT-4', 2), ('ADVERTISEMENT-5', 1);