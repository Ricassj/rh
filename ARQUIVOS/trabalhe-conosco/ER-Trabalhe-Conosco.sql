CREATE TABLE cargoPretendido (
 cargoPretendido_id INT NOT NULL,
 cargo VARCHAR(200) NOT NULL
);

ALTER TABLE cargoPretendido ADD CONSTRAINT PK_cargoPretendido PRIMARY KEY (cargoPretendido_id);


CREATE TABLE colaborador (
 colaborador_id INT NOT NULL,
 cargoPretendido VARCHAR(200) NOT NULL,
 pretencaoSalarial DECIMAL(10,2),
 nome CHAR(10),
 dataNascimento CHAR(10),
 sexo CHAR(10),
 estadoCivil CHAR(10),
 filhos CHAR(10),
 naturalidade CHAR(10),
 dataCadastro CHAR(10)
);

ALTER TABLE colaborador ADD CONSTRAINT PK_colaborador PRIMARY KEY (colaborador_id);


CREATE TABLE contato (
 contato_id INT NOT NULL,
 colaborador_id INT NOT NULL,
 telefoneResideincial CHAR(15),
 celular CHAR(15),
 telefoneContato CHAR(15),
 email VARCHAR(150)
);

ALTER TABLE contato ADD CONSTRAINT PK_contato PRIMARY KEY (contato_id);


CREATE TABLE documentacao (
 doc_id INT NOT NULL,
 colaborador_id INT NOT NULL,
 cpf VARCHAR(50),
 rg VARCHAR(100),
 numeroHabilitacao VARCHAR(100),
 categoria CHAR(1) NOT NULL
);

ALTER TABLE documentacao ADD CONSTRAINT PK_documentacao PRIMARY KEY (doc_id);


CREATE TABLE endereco (
 endereco_id INT NOT NULL,
 colaborador_id INT NOT NULL,
 endereco VARCHAR(255),
 bairro VARCHAR(255),
 complemento VARCHAR(200),
 cidade VARCHAR(200),
 uf CHAR(2)
);

ALTER TABLE endereco ADD CONSTRAINT PK_endereco PRIMARY KEY (endereco_id);


CREATE TABLE esperienciaProficional (
 esperienciaProficional_id INT NOT NULL,
 colaborador_id INT NOT NULL,
 empresa VARCHAR(200),
 cargo VARCHAR(200),
 atividade VARCHAR(200),
 dataAdimissao DATE,
 dataDemissao DATE,
 Motivo VARCHAR(200)
);

ALTER TABLE esperienciaProficional ADD CONSTRAINT PK_esperienciaProficional PRIMARY KEY (esperienciaProficional_id);


CREATE TABLE estadoCivil (
 estadoCivil_id INT NOT NULL,
 estadoCivil VARCHAR(200) NOT NULL
);

ALTER TABLE estadoCivil ADD CONSTRAINT PK_estadoCivil PRIMARY KEY (estadoCivil_id);


CREATE TABLE formacao (
 formacao_id VARCHAR(200) NOT NULL,
 colaborador_id INT NOT NULL,
 formacao VARCHAR(255),
 curso VARCHAR(200),
 instituicao VARCHAR(200)
);

ALTER TABLE formacao ADD CONSTRAINT PK_formacao PRIMARY KEY (formacao_id);


ALTER TABLE contato ADD CONSTRAINT FK_contato_0 FOREIGN KEY (colaborador_id) REFERENCES colaborador (colaborador_id);


ALTER TABLE documentacao ADD CONSTRAINT FK_documentacao_0 FOREIGN KEY (colaborador_id) REFERENCES colaborador (colaborador_id);


ALTER TABLE endereco ADD CONSTRAINT FK_endereco_0 FOREIGN KEY (colaborador_id) REFERENCES colaborador (colaborador_id);


ALTER TABLE esperienciaProficional ADD CONSTRAINT FK_esperienciaProficional_0 FOREIGN KEY (colaborador_id) REFERENCES colaborador (colaborador_id);


ALTER TABLE formacao ADD CONSTRAINT FK_formacao_0 FOREIGN KEY (colaborador_id) REFERENCES colaborador (colaborador_id);


