CREATE TABLE clientes (
  id_cliente BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255) NOT NULL,
  cpf VARCHAR(14) NOT NULL UNIQUE,
  data_nasc DATE NULL,
  endereco VARCHAR(255) NULL,
  email VARCHAR(100) NULL,
  telefone VARCHAR(20) NULL,
  pontos INT(11) DEFAULT 0,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE estoque (
  id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  item VARCHAR(100) NOT NULL,
  quantidade INT(11) NOT NULL,
  unidade VARCHAR(50) NOT NULL,
  valor_unitario DECIMAL(10,2) NOT NULL,
  status ENUM('Disponível', 'Indisponível') NOT NULL DEFAULT 'Disponível',
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE funcionarios (
  id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  telefone VARCHAR(20) NOT NULL,
  cargo VARCHAR(255) NOT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE ingredientes (
  id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  quantidade INT(11) NOT NULL,
  unidade VARCHAR(50) NOT NULL,
  valor_unitario DECIMAL(10,2) NOT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



-- Criação da tabela
CREATE TABLE mesas (
  id_mesa BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  numero INT(11) NOT NULL,
  status ENUM('Livre', 'Reservada', 'Ocupada') NOT NULL DEFAULT 'Livre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserção das mesas
INSERT INTO mesas (numero, status) VALUES
(1, 'Reservada'),
(2, 'Livre'),
(3, 'Livre'),
(4, 'Livre'),
(5, 'Ocupada'),
(6, 'Livre'),
(7, 'Livre'),
(8, 'Reservada'),
(9, 'Livre'),
(10, 'Livre'),
(11, 'Livre'),
(12, 'Livre'),
(13, 'Livre'),
(14, 'Livre'),
(15, 'Livre');




CREATE TABLE pedidos (
  id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome_cliente VARCHAR(100) NOT NULL,
  status VARCHAR(20) NOT NULL,
  total DECIMAL(10,2) DEFAULT 0.00,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE pratos (
  id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  descricao TEXT NULL,
  valor DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  composicao TEXT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE itens_pedido (
  id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  id_pedido BIGINT(20) UNSIGNED NOT NULL,
  nome_item VARCHAR(100) NOT NULL,
  quantidade INT(11) NOT NULL,
  valor_unitario DECIMAL(10,2) NOT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  CONSTRAINT fk_itens_pedido_pedido FOREIGN KEY (id_pedido) REFERENCES pedidos(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
