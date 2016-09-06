CREATE TABLE user(
    username VARCHAR(12),
	school VARCHAR(50),
	course CHAR(12),
    PRIMARY KEY (username)) ENGINE MyISAM;


CREATE TABLE book(
	name VARCHAR(50),
	id INT NOT NULL AUTO_INCREMENT,
    edition INT,
    quality INT,
    price DECIMAL(13,2),
    usefulness INT,
    comments VARCHAR(350),
    PRIMARY KEY (name,id)) ENGINE MyISAM;


CREATE TABLE description(
    username VARCHAR(12),
	name VARCHAR(50),
    PRIMARY KEY (username,name),
    FOREIGN KEY (username)
         REFERENCES user,
    FOREIGN KEY (name)
         REFERENCES book) ENGINE MyISAM;         


/*
NEW DATABASE:

CREATE TABLE newbook(
    bookname VARCHAR(50),
	author VARCHAR(50),
    PRIMARY KEY (bookname)) ENGINE MyISAM;

CREATE TABLE user(
    username VARCHAR(12),
	school VARCHAR(50),
	course VARCHAR(12),
    PRIMARY KEY (username)) ENGINE MyISAM;
    
CREATE TABLE book(
	name VARCHAR(12),
	id INT NOT NULL AUTO_INCREMENT,
    edition INT,
    quality INT,
    price DECIMAL(13,2),
    usefulness INT,
    comments VARCHAR(350),
    PRIMARY KEY (name,id)) ENGINE MyISAM;    

CREATE TABLE description(
    username VARCHAR(12),
	name VARCHAR(12),
    PRIMARY KEY (username,name),
    FOREIGN KEY (username)
         REFERENCES user,
    FOREIGN KEY (name)
         REFERENCES book) ENGINE MyISAM;  

*/