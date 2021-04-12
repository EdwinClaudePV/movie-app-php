CREATE DATABASE movie_app;

USE movie_app;

CREATE TABLE movies (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(20) CHARACTER SET utf8,
  date DATETIME NOT NULL
);

INSERT INTO movies (title, date)
  VALUES ('Blade Runner', '1982-09-15');

INSERT INTO movies (title, date)
  VALUES ('12 Angry Men', '1954-09-04');
