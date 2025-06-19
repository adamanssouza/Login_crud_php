CREATE DATABASE sistema;
USE sistema;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (login, senha) VALUES
('adamans', '0000'),
('maria', '456'),
('carlos', '789');

SET SQL_SAFE_UPDATES = 0;
DELETE FROM usuarios WHERE login = 'admin';
SET SQL_SAFE_UPDATES = 1; -- (opcional, para reativar depois)
select * from usuarios;
DELETE FROM usuarios WHERE id BETWEEN 3 AND 19;

INSERT INTO usuarios (login, senha) VALUES ('admin','0000');



CREATE TABLE pessoas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    sobrenome VARCHAR(50),
    sexo ENUM('Masculino', 'Feminino'),
    idade INT,
    endereco VARCHAR(100)
);

INSERT INTO pessoas (nome, sobrenome, sexo, idade, endereco) VALUES
('Lucas', 'Silva', 'Masculino', 28, 'Rua das Flores, 123 - São Paulo'),
('Mariana', 'Souza', 'Feminino', 34, 'Av. Brasil, 234 - Rio de Janeiro'),
('João', 'Oliveira', 'Masculino', 40, 'Rua Bela Vista, 45 - Salvador'),
('Fernanda', 'Pereira', 'Feminino', 22, 'Rua Alegre, 567 - Curitiba'),
('Carlos', 'Lima', 'Masculino', 31, 'Av. Central, 1001 - Belo Horizonte'),
('Aline', 'Almeida', 'Feminino', 26, 'Rua dos Cravos, 87 - Recife'),
('Roberto', 'Fernandes', 'Masculino', 38, 'Rua Maranhão, 56 - Fortaleza'),
('Julia', 'Rocha', 'Feminino', 29, 'Av. Atlântica, 900 - Niterói'),
('Rafael', 'Costa', 'Masculino', 44, 'Rua Itapoã, 300 - Brasília'),
('Patrícia', 'Gomes', 'Feminino', 36, 'Rua das Acácias, 78 - Campinas'),
('Thiago', 'Barbosa', 'Masculino', 24, 'Av. São João, 150 - Manaus'),
('Vanessa', 'Ramos', 'Feminino', 33, 'Rua Parnaíba, 62 - Belém'),
('Gustavo', 'Cardoso', 'Masculino', 27, 'Rua Verde, 999 - Goiânia'),
('Camila', 'Monteiro', 'Feminino', 41, 'Rua Porto Feliz, 12 - Vitória'),
('André', 'Martins', 'Masculino', 35, 'Rua do Sol, 456 - São Luís'),
('Isabela', 'Dias', 'Feminino', 30, 'Av. Paulista, 700 - São Paulo'),
('Pedro', 'Nascimento', 'Masculino', 23, 'Rua das Palmeiras, 321 - Aracaju'),
('Larissa', 'Teixeira', 'Feminino', 39, 'Rua Nova, 55 - João Pessoa'),
('Felipe', 'Melo', 'Masculino', 25, 'Rua Aurora, 410 - Maceió'),
('Bianca', 'Araújo', 'Feminino', 42, 'Rua da Praia, 88 - Teresina'),
('Henrique', 'Moreira', 'Masculino', 37, 'Av. América, 312 - Porto Alegre'),
('Tainá', 'Farias', 'Feminino', 28, 'Rua Lago Azul, 61 - Natal'),
('Eduardo', 'Batista', 'Masculino', 32, 'Rua da Paz, 212 - Palmas'),
('Letícia', 'Correia', 'Feminino', 26, 'Rua 7 de Setembro, 301 - Rio Branco'),
('Renan', 'Castro', 'Masculino', 45, 'Av. Guararapes, 199 - Recife'),
('Priscila', 'Duarte', 'Feminino', 31, 'Rua da Esperança, 16 - Florianópolis'),
('Daniel', 'Santana', 'Masculino', 38, 'Av. Dom Pedro, 77 - Campo Grande'),
('Bruna', 'Vieira', 'Feminino', 29, 'Rua das Pedras, 5 - Cuiabá'),
('Leandro', 'Campos', 'Masculino', 40, 'Rua Cristal, 89 - Macapá'),
('Tatiane', 'Menezes', 'Feminino', 33, 'Rua Estrela, 102 - Boa Vista'),
('Diego', 'Rezende', 'Masculino', 36, 'Av. Beira Mar, 300 - Salvador'),
('Michelle', 'Lopes', 'Feminino', 27, 'Rua Alto da Serra, 112 - Curitiba'),
('Victor', 'Freitas', 'Masculino', 34, 'Rua do Comércio, 40 - Belém'),
('Amanda', 'Barros', 'Feminino', 25, 'Rua Pedra Branca, 88 - Fortaleza'),
('Alan', 'Nascimento', 'Masculino', 30, 'Av. Ceará, 1234 - Porto Velho'),
('Juliana', 'Carvalho', 'Feminino', 44, 'Rua Santa Rita, 15 - Teresina'),
('Rodrigo', 'Tavares', 'Masculino', 29, 'Rua Joaquim Nabuco, 70 - Manaus'),
('Elaine', 'Pinto', 'Feminino', 35, 'Av. Getúlio Vargas, 67 - Salvador'),
('César', 'Ferreira', 'Masculino', 41, 'Rua Campo Verde, 23 - São Paulo'),
('Tatiana', 'Costa', 'Feminino', 37, 'Rua Guarujá, 79 - Campinas'),
('Marcelo', 'Morais', 'Masculino', 26, 'Av. Brasil, 300 - Niterói'),
('Karla', 'Sales', 'Feminino', 32, 'Rua Pérola, 33 - Belo Horizonte'),
('Igor', 'Bezerra', 'Masculino', 28, 'Rua Limoeiro, 109 - Recife'),
('Daniele', 'Assis', 'Feminino', 39, 'Rua Vinte e Um, 21 - João Pessoa'),
('José', 'Neves', 'Masculino', 43, 'Av. Contorno, 77 - Salvador'),
('Viviane', 'Santos', 'Feminino', 36, 'Rua Curió, 88 - Goiânia'),
('Murilo', 'Marques', 'Masculino', 30, 'Rua Tapajós, 57 - São Luís'),
('Simone', 'Silveira', 'Feminino', 27, 'Rua Lagoa Azul, 14 - Curitiba'),
('Alexandre', 'Ribeiro', 'Masculino', 31, 'Rua Ipanema, 90 - Rio de Janeiro'),
('Cristiane', 'Machado', 'Feminino', 34, 'Rua Mário Lago, 19 - Florianópolis');

drop table pessoas;


INSERT INTO usuarios (login, senha) VALUES ('admin', '1234');
SELECT * FROM pessoas;
