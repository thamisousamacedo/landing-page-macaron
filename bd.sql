CREATE TABLE contatos (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
mensagem TEXT NOT NULL,
data_envio TIMESTAMP DEFAULT current_timestamp
);

SELECT * FROM contatos;