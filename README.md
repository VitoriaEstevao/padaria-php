# ☁️ Criando um Servidor Ubuntu na AWS (EC2)

> Este repositório mostra como configurar um *servidor Ubuntu na AWS EC2* para rodar projetos PHP conectados a *MariaDB/MySQL, usando **Apache2*, PHP e Git.

---

## 📌 Preparando o ambiente

1. Conecte-se com o Sandbox no ambiente da AWS
2. Criar uma instância EC2 com Ubuntu Server
3. Acessar via SSH a instância no prompt do Windows

---

### 🖥 1. Atualizar o Ubuntu
```bash
sudo apt update && sudo apt -y
```
---

###  2. Instalar pacotes essenciais
```bash
sudo apt install -y git apache2 php php-mysql php-mbstring php-xml mariadb-server
```
git → para clonar projetos do GitHub
apache2 → servidor web
php → interpretador PHP
php-mysql → extensão para conexão com MySQL/MariaDB
php-mbstring e php-xml → extensões PHP adicionais
mariadb-server → servidor de banco de dados

---

###  3. Habilitar serviços automaticamente
```bash
sudo systemctl enable --now apache2
sudo systemctl enable --now mariadb
```
Isso garante que Apache2 e MariaDB iniciem automaticamente toda vez que a instância for ligada, evitando ter que iniciar manualmente.
---

###  4. Ajustar permissões da pasta web
```bash
sudo chown -R ubuntu:www-data /var/www
sudo find /var/www -type d -exec sudo chmod 2775 {} \;
sudo find /var/www -type f -exec sudo chmod 0664 {} \;
```
Ajustar permissões garante que o Apache e o usuário ubuntu possam acessar, ler e escrever arquivos corretamente, evitando erros de permissão.

###  5. Preparar a pasta web
```bash
cd /var/www/html
sudo rm -f index.html
```

###  6. Clonar projeto do GitHub
```bash
sudo -u ubuntu git clone https://github.com/VitoriaEstevao/padaria-php.git
```

###  7. Configurar MariaDB
1. Execute o script de segurança:
```bash
sudo mysql_secure_installation
```
2. Acesse o MariaDB:
```bash
sudo mysql -u root -p
```
3. Crie banco de dados, usuário e tabela conforme necessidade. No caso desse projeto:
```bash
CREATE DATABASE padaria;
USE padaria;

CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    produto VARCHAR(100) NOT NULL,
    data_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
4. Verifique as configurações do banco de dados com o comenado:
```bash
show processlist;
```

###  8. Atualizar projeto existente
```bash
cd /var/www/html/padaria-php
git pull origin main
```

