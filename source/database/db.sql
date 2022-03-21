
CREATE TABLE tb_admin(
  id_admin int(11) PRIMARY KEY AUTO_INCREMENT
  nome varchar(50),
  email varchar(50),
  senha varchar(50),
  foto varchar(250)
);

CREATE TABLE tb_vaga(
  id_vaga int(11) PRIMARY KEY AUTO_INCREMENT, 
  id_admin int(11),
  vaga varchar(50)
);

CREATE TABLE tb_entrada_saida(

);

CREATE TABLE tb_cliente(
  id_cliente int(11) PRIMARY KEY AUTO_INCREMENT, 
  nome_cliente varchar(50),
  senha_cliente varchar(50),
  foto_cliente varchar(250),
  morada_cliente varchar(50)
);

CREATE TABLE tb_carro_cliente (
  id_carro int(11), 
)

CREATE TABLE tb_estacionamento();

CREATE TABLE tb_preco();