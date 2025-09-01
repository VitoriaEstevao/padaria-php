# ☁️ Criando um Servidor Ubuntu na AWS (EC2)

> Guia para subir um servidor **Ubuntu Linux** na nuvem da **AWS**, usando o serviço EC2.

---

## 🚀 Preparando o ambiente

1. Conecte-se com o Sandbox no ambiente da AWS
2. Criar uma instância EC2 com Ubuntu Server
3. Acessar via SSH a instância no prompt do Windows

---

### 🖥️ 1. Vá até o serviço **EC2**

1. No topo, use a barra de busca e digite **EC2**
2. Clique no serviço **EC2** (Instâncias virtuais na nuvem)

---

### 🆕 3. Crie uma Nova Instância

1. Clique em **"Launch Instance"**
2. Preencha os campos da seguinte forma:

| Campo                        | Valor Sugerido                                  |
|-----------------------------|--------------------------------------------------|
| **Name**                    | `MeuServidorUbuntu`                              |
| **AMI**                     | `Ubuntu Server 22.04 LTS (x86)`                 |
| **Instance type**           | `t2.micro` (elegível no Free Tier)               |
| **Key pair (login)**        | Criar nova chave (baixe e guarde o `.pem`)       |
| **Firewall (Security Group)** | Abrir portas 22 (SSH), 80 (HTTP), 443 (HTTPS)     |
| **Storage**                 | Padrão 8GB ou mais conforme necessidade          |

3. Clique em **"Launch Instance"**

---

### 🔗 4. Conecte via SSH

#### Para Linux/macOS:

```bash
chmod 400 sua-chave.pem
ssh -i "sua-chave.pem" ubuntu@<IP_PÚBLICO>
