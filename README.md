# ☁️ Criando um Servidor Ubuntu na AWS (EC2)

> Guia para subir um servidor **Ubuntu Linux** na nuvem da **AWS**, usando o serviço EC2.

---

## 🚀 Preparando o ambiente

1. Conecte-se com o Sandbox no ambiente da AWS
2. Criar uma instância EC2 com Ubuntu Server
3. Acessar via SSH a instância no prompt do Windows

---

### 🖥️ 1. Atualizar o Ubuntu
sudo apt update && sudo apt -y

---

### 🆕 2. Instalar pacotes essenciais
sudo apt install -y git apache2 php php-mysql php-mbstring php-xml mariadb-server

git → para clonar projetos do GitHub
apache2 → servidor web
php → interpretador PHP
php-mysql → extensão para conexão com MySQL/MariaDB
php-mbstring e php-xml → extensões PHP adicionais
mariadb-server → servidor de banco de dados

---

### 🆕 3. Habilitar serviços automaticamente
sudo systemctl enable --now apache2
sudo systemctl enable --now mariadb

---

### 🆕 3. Habilitar serviços automaticamente

#### Para Linux/macOS:

```bash
chmod 400 sua-chave.pem
ssh -i "sua-chave.pem" ubuntu@<IP_PÚBLICO>
