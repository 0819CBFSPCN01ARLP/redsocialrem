CREATE DATABASE grupo3;
USE grupo3;

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR (50) NOT NULL,
surname VARCHAR (50) NOT NULL,
email VARCHAR (100) NOT NULL UNIQUE,
password VARCHAR (60) NOT NULL ,
created_at DATE,
updated_at DATE
);

CREATE TABLE friends (
id INT AUTO_INCREMENT PRIMARY KEY,
id_user INT  NOT NULL,
id_friend INT NOT NULL,
FOREIGN KEY (id_user) REFERENCES users(id),
FOREIGN KEY (id_friend) REFERENCES friends(id),
created_at DATE,
updated_at DATE
);

CREATE TABLE images (
id INT AUTO_INCREMENT PRIMARY KEY,
position VARCHAR (50) NOT NULL,
path VARCHAR (50) NOT NULL,
id_user INT NOT NULL,
FOREIGN KEY (id_user) REFERENCES users(id),
created_at DATE,
updated_at DATE
);

CREATE TABLE posts (
id INT AUTO_INCREMENT PRIMARY KEY,
text VARCHAR (500) NOT NULL,
id_image INT,
id_user INT NOT NULL,
FOREIGN KEY (id_user) REFERENCES users(id),
FOREIGN KEY (id_image) REFERENCES images(id),
created_at DATE,
updated_at DATE
);

CREATE TABLE comments (
id INT AUTO_INCREMENT PRIMARY KEY,
text VARCHAR (500) NOT NULL,
id_image INT,
id_user INT NOT NULL,
id_post INT NOT NULL,
FOREIGN KEY (id_image) REFERENCES images(id),
FOREIGN KEY (id_user) REFERENCES users(id),
FOREIGN KEY (id_post) REFERENCES posts(id),
created_at DATE,
updated_at DATE
);

CREATE TABLE answers (
id INT AUTO_INCREMENT PRIMARY KEY,
answer VARCHAR (250) NOT NULL,
id_user INT NOT NULL,
id_comment INT NOT NULL,
FOREIGN KEY (id_user) REFERENCES users(id),
FOREIGN KEY (id_comment) REFERENCES comments(id),
created_at DATE,
updated_at DATE
);

INSERT INTO users (name, surname, email, password)
VALUES ("Emeli", "Pasini", "emelipasini@outlook.com", "password1");

INSERT INTO users (name, surname, email, password)
VALUES ("Mauricio", "Araguez", "araguezmauricio@hotmail.com", "password1");