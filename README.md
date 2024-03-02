# Eyes-A Project - Eyes-of-Amanda v1.0.0

Equip development:
* [Manoel Vitor](https://github.com/manoelvitorsilvasantos)

## Como clonar esse repositório

Pra clonar esse repositório para sua máquina local, siga as etapas:

1. Abra o terminal
2. Navegue até o diretório aonde você irá clonar o repositório.
3. Execute o comado para clonar o repositório.

```bash
cd C:/users/{your_username}/Documents/
git clone https://github.com/manoelvitorsilvasantos/Eyes-V
cd C:/users/{your_username}/Documents/Eyes-V
```

## Como instalar as dependências (dlib)
1. Abra o terminal
2. Navegue até o diretório aonde está salvo o repositório
3. Execute o seguinte comando.

```bash
cd C:/users/{your_username}/Documents/Eyes-V
pip install -r requirements.txt
```

# Se você estiver usando o python 3.11, porfavor crie um ambiente virtual.
1. Crie seu próprio ambiente virtual da seguinte forma.
```bash
python3 -m venv venv
```
2. Ativar o ambiente virtual.
```bash
source venv/bin/activate
```
3. Instalar as dependências.
```bash
pip install -r requirements
```
4. Desativar ambiente virtual.
```bash
deactivate
```

## Como corrigir error com a biblioteca dlib.
1. Abra o terminal de comandos.
2. Navegue para a pasta aonde você clonou o repositório.
3. Execute o comando para instalar a biblioteca já compilada.

```bash
cd C:/users/{your_username}/Documents/Eyes-V
pip install dlib-19.19.0-cp38-cp38-win_amd64.whl
```
Um video tutorial como resolver problemas ou bugs com a biblioteca dlib.
[Click Here](https://www.youtube.com/watch?v=d0pMd-MLqtc)

Visual Studio é recomendável para corrigir o error, o link embaixo para baixar.
[Click Here](https://visualstudio.microsoft.com/pt-br/downloads/)

## Como criar um base de dados usando o comando mysql no terminal ou CMD (Windows)

1. Abra o terminal
2. Execute o comando
3. Digite a senha

Eu recomendo você usar o xampp nesse projeto.
[Xampp](https://www.apachefriends.org/download.html)

```bash
mysql -u root -p
```
Depois execute isso.
```bash
CREATE USER 'ifba'@'localhost' IDENTIFIED BY 'ifba6514';
GRANT ALL PRIVILEGES ON *.* TO 'ifba'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
```
Agora nós executaremos uma consulta para criar a base de dados.
```sql
-- drop database exist
DROP DATABASE image_db;
-- create database image_db
CREATE DATABASE image_db;
-- use database
USE image_db;
-- create table usuario_credencial if not exist 
CREATE TABLE IF NOT EXISTS usuarios_credencial(
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	usuario VARCHAR(32) NOT NULL,
	senha VARCHAR(255) NOT NULL,
	tipo CHAR(1) NOT NULL,
	data DATE,
	PRIMARY KEY(id)
);
-- create table aluno if not exist
CREATE TABLE IF NOT EXISTS aluno(
   id INT NOT NULL,
   nome VARCHAR(32) NOT NULL,
   phone VARCHAR(15) NOT NULL,
   email VARCHAR(150) NOT NULL,
   PRIMARY KEY(id)
);
-- create table imagem if not exist
CREATE TABLE IF NOT EXISTS imagem(
	id INT NOT NULL AUTO_INCREMENT,
	imagem_aluno LONGBLOB NOT NULL,
	id_aluno INT NOT NULL,
	FOREIGN KEY(id_aluno) REFERENCES aluno(id),
	PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS logs( 
	id INT NOT NULL AUTO_INCREMENT, 
   frequencia INT NOT NULL,
	dt DATE, 
	id_aluno INT NOT NULL, 
	FOREIGN KEY(id_aluno) REFERENCES aluno(id), 
	PRIMARY KEY(id) 
);

-- insert intro table aluno register begin
INSERT INTO aluno(id, nome, phone, email)
VALUES(1, 'test', '5599999999999', 'test@email.com');
-- insert intro table usuario_credencial register begin
INSERT INTO usuarios_credencial(nome, email, usuario, senha, tipo, data)
VALUES('administrador', 'administrador@admin.com', 'admin', MD5('admin'), '1', CURDATE());

```
## Como você usará a classe DatabaseConnect.py para conectar a banco de dados.
Porfavor, verifque o script mysql.py e escreva as suas credenciais para conectar a base de dados sem muita dificuldade.

Exemplo:

```python
# library that you will to use
from dao.mysql import DatabaseConnect
# instance that you will to create.
db = DatabaseConnect(
  "image_db", # Database name
  "ifba", # User to database
  "ifba6514", # Password to database
  "localhost", # host name or IP
  "3306" # port number, by default mysql to use the port 3306
)
```

## QRCODE APP
Você preceisa ler o qrcode quando você abrir o Whatsapp e digitar o texto: join arm-tree.
<p align="center">
	<img src="https://raw.githubusercontent.com/manoelvitorsilvasantos/Eyes-V/main/frontend/assets/img/qrcode.png" width="128">
</p>

ou 
[Link Acess](https://wa.me/14155238886?text=join+arm-tree)
