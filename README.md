<div align="center">
  <h1>🧰 Myterials</h1>
  <p><strong>Aplicação web para organização de produtos e materiais.</strong></p>
  <p>Frontend Vue 2 e backend Laravel com áreas para empresas, organizações e catálogo.</p>
</div>

---

## ✨ Áreas do sistema

- Cadastro e autenticação de usuários
- Empresas e organizações
- Produtos e atributos, como categorias, embalagens, acabamento e unidade de medida
- API Laravel protegida com Passport

## 🧰 Tecnologias

`Vue 2` · `Bootstrap` · `Laravel 5.7` · `PHP 7.1+` · `Laravel Passport`

## 🚀 Como executar

### Backend

```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
```

Configure banco de dados e demais serviços no `.env`. Depois execute:

```bash
php artisan migrate
php artisan db:seed
php artisan passport:install
php artisan storage:link
php artisan serve
```

### Frontend

Em outro terminal:

```bash
cd frontend
npm install
npm run dev
```

> Use versões de PHP e Node compatíveis com as dependências legadas do projeto. Não publique credenciais do `.env`.
