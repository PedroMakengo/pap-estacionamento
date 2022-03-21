
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
  espaco_vago varchar(50),
  preco int(4),
  descricao text,
  FOREIGN KEY (id_admin) REFERENCES tb_admin (id_admin) ON DELETE CASCADE ON UPDATE;
);

CREATE TABLE tb_solicitacao_vaga (
  id_solicitacao_vaga int(11) PRIMARY KEY AUTO_INCREMENT,
  id_cliente int(11),
  mensagem varchar(50),
  estado_solicitacao int(2),
  data_solicitacao datetime, 
  FOREIGN KEY (id_cliente) REFERENCES clientes (id_cliente) ON DELETE CASCADE ON UPDATE
);

CREATE TABLE tb_entrada_saida(
  id_entrada int(11) PRIMARY KEY AUTO_INCREMENT,
  id_carro int(11),
  dia_entrada day(10),
  dia_saida day(10),
  hora_entrada time,
  hora_saida time, 
  estado int(2),
  data_registro_entrada datetime
);

CREATE TABLE tb_cliente(
  id_cliente int(11) PRIMARY KEY AUTO_INCREMENT, 
  nome_cliente varchar(50),
  senha_cliente varchar(50),
  foto_cliente varchar(250),
);

CREATE TABLE tb_carro_cliente (
  id_carro int(11) PRIMARY KEY AUTO_INCREMENT, 
  id_cliente int(11),
  cor varchar(50),
  modelo varchar(50),
  matricula varchar(50), 
  data_registro_carro datetime, 
  FOREIGN KEY (id_cliente) REFERENCES clientes (id_cliente) ON DELETE CASCADE ON UPDATE
  );
