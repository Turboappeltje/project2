CREATE DATABASE project2;

CREATE TABLE account(
	id INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(250) UNIQUE NOT NULL,
    password VARCHAR(250) NOT NULL,
    PRIMARY KEY(id)
    
    
);

CREATE TABLE persoon(
    id INT NOT NULL AUTO_INCREMENT,
    account_id INT NOT NULL,
    voornaam VARCHAR(250) NOT NULL,
    tussenvoegsel VARCHAR(250),
    achternaam VARCHAR(250) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (account_id) REFERENCES account(id)
    
);