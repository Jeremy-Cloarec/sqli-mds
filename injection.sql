CREATE DATABASE IF NOT EXISTS injection;
USE injection;
CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE (email(191))
);

INSERT INTO users (nom, prenom, email) VALUES
('Doe', 'John', 'john.doe@example.com'),
('Smith', 'Jane', 'jane.smith@example.com'),
('Brown', 'Charlie', 'charlie.brown@example.com'),
('Taylor', 'Samantha', 'samantha.taylor@example.com'),
('Johnson', 'Michael', 'michael.johnson@example.com'),
('Lee', 'David', 'david.lee@example.com'),
('Walker', 'Emma', 'emma.walker@example.com'),
('Hall', 'Oliver', 'oliver.hall@example.com'),
('Allen', 'Sophia', 'sophia.allen@example.com'),
('Young', 'Lucas', 'lucas.young@example.com');





