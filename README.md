# 🚀 Projeto [Training Monitor - API]

Bem-vindo! Este repositório contém uma API simples para servir ao frontend: 

```https://github.com/carloshperes/training-monitor-fe```

Antes de começar, você precisará ter as seguintes ferramentas instaladas em seu sistema:

- [Git](https://git-scm.com)
- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)

### 1. Clone o repositório

```bash
git clone https://github.com/carloshperes/training-monitor-api
cd training-monitor-api
```

## Para executar o projeto, siga os seguintes passos:

### 2. Instale as dependências:

```
composer install
```

2. Inicie o servidor de desenvolvimento `http://localhost:3000`:

```
# npm
npm run dev

# pnpm
pnpm run dev

# yarn
yarn dev

# bun
bun run dev
```

### 3. Configure o ambiente

```
cp .env.example .env
```

### 4. Configure o seu .env

```
APP_URL=http://localhost:8000
FRONTEND_URL=http://localhost:3000
```

### 5. Gere a chave da aplicação

```
php artisan key:generate
```

### 6. Execute as migrações do banco de dados

```
php artisan migrate --seed
```

### 7. Inicie o servidor de desenvolvimento

```
php artisan serve
```

A aplicação estará disponível em http://localhost:8000.

## License

Este projeto está licenciado sob a [MIT license](https://opensource.org/licenses/MIT).

---

Feito com ❤️ por [Carlos Peres](https://github.com/carloshperes)
```