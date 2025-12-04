# WorkFlow TimeManager - Arquitetura do Projeto

## 📁 Estrutura de Diretórios

```
WorkFlow-TimeManager/
├── api/                    # Backend Laravel
├── app/                    # Frontend (HTML/CSS/JS)
├── docker/                 # Configurações Docker
└── docs/                   # Documentação
```

## 🏗️ Detalhamento da Arquitetura

### `/api` - Backend Laravel

```
api/
├── app/
│   ├── Console/
│   │   └── Kernel.php                    # Comandos Artisan customizados
│   │
│   ├── Exceptions/
│   │   └── Handler.php                   # Tratamento global de exceções
│   │
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── Controller.php            # Controller base
│   │   ├── Middleware/                   # Middlewares da aplicação
│   │   │   ├── Authenticate.php
│   │   │   ├── EncryptCookies.php
│   │   │   ├── PreventRequestsDuringMaintenance.php
│   │   │   ├── RedirectIfAuthenticated.php
│   │   │   ├── TrimStrings.php
│   │   │   ├── TrustHosts.php
│   │   │   ├── TrustProxies.php
│   │   │   └── VerifyCsrfToken.php
│   │   └── Kernel.php                    # HTTP Kernel
│   │
│   ├── Models/
│   │   └── User.php                      # Model de usuário (Eloquent)
│   │
│   └── Providers/                        # Service Providers
│       ├── AppServiceProvider.php
│       ├── AuthServiceProvider.php
│       ├── BroadcastServiceProvider.php
│       ├── EventServiceProvider.php
│       └── RouteServiceProvider.php
│
├── bootstrap/
│   ├── app.php                           # Bootstrap da aplicação Laravel
│   └── cache/                            # Cache de configuração e rotas
│       ├── packages.php
│       └── services.php
│
├── config/                               # Arquivos de configuração
│   ├── app.php                           # Configurações gerais
│   ├── auth.php                          # Autenticação
│   ├── broadcasting.php                  # Broadcasting
│   ├── cache.php                         # Cache
│   ├── cors.php                          # CORS
│   ├── database.php                      # Banco de dados
│   ├── filesystems.php                   # Sistemas de arquivos
│   ├── hashing.php                       # Hashing
│   ├── logging.php                       # Logs
│   ├── mail.php                          # E-mail
│   ├── queue.php                         # Filas
│   ├── sanctum.php                       # Laravel Sanctum (API Auth)
│   ├── services.php                      # Serviços externos
│   ├── session.php                       # Sessões
│   └── view.php                          # Views
│
├── database/
│   ├── factories/                        # Factories para testes
│   ├── migrations/                       # Migrações do banco de dados
│   └── seeders/                          # Seeders de dados iniciais
│
├── public/
│   ├── index.php                         # Entry point da aplicação
│   ├── favicon.ico
│   └── robots.txt
│
├── resources/
│   ├── css/                              # Arquivos CSS
│   ├── js/                               # Arquivos JavaScript
│   ├── lang/                             # Arquivos de tradução
│   │   └── en/
│   └── views/                            # Views Blade (se usado)
│
├── routes/
│   ├── api.php                           # Rotas da API REST
│   ├── channels.php                      # Rotas de broadcasting
│   ├── console.php                       # Comandos console customizados
│   └── web.php                           # Rotas web
│
├── storage/
│   ├── app/
│   │   └── public/                       # Arquivos públicos linkados
│   ├── framework/                        # Cache, sessions, views compiladas
│   └── logs/                             # Logs da aplicação
│
├── tests/
│   ├── Feature/                          # Testes de funcionalidade
│   ├── Unit/                             # Testes unitários
│   ├── CreatesApplication.php
│   └── TestCase.php
│
├── artisan                               # CLI do Laravel
├── composer.json                         # Dependências PHP
├── composer.lock
├── package.json                          # Dependências Node (build)
├── phpunit.xml                           # Configuração PHPUnit
├── server.php                            # Servidor built-in PHP
└── webpack.mix.js                        # Configuração Laravel Mix
```

### `/app` - Frontend

```
app/
├── public/
│   ├── assets/
│   │   └── favicons/                     # Ícones da aplicação
│   │
│   ├── auth.html                         # Página de autenticação (login)
│   ├── dashboard.html                    # Dashboard principal
│   ├── forgot-password.html              # Recuperação de senha
│   └── register.html                     # Cadastro de novos usuários
│
├── src/
│   ├── core/                             # Módulos core da aplicação
│   │
│   ├── features/                         # Features modulares
│   │   ├── auth/                         # Módulo de autenticação
│   │   └── tracker/                      # Módulo de time tracking
│   │       └── components/               # Componentes do tracker
│   │
│   ├── services/                         # Serviços e integrações (API calls)
│   │
│   └── styles/                           # Arquivos de estilo organizados
│       ├── auth/                         # Estilos da página de login
│       ├── dashboard/                    # Estilos do dashboard
│       ├── forgot-pass/                  # Estilos da recuperação de senha
│       └── register/                     # Estilos do registro
│
├── package.json                          # Dependências Node.js
└── README.md
```

### `/docker` - Infraestrutura

```
docker/
├── docker-compose.yaml                   # Orquestração de containers
├── Dockerfile                            # Imagem Docker do frontend
├── Dockerfile-api                        # Imagem Docker do backend Laravel
├── nginx.conf                            # Configuração principal do Nginx
├── default.conf                          # Virtual host default
│
├── nginx/
│   └── default.conf                      # Configuração Nginx alternativa
│
└── docker-logs/
    └── timetracker-api/                  # Logs dos containers
```

### `/docs` - Documentação

```
docs/
├── docs.md                               # Documentação geral
└── swagger.yaml                          # Especificação OpenAPI/Swagger
```

## 🔄 Fluxo de Comunicação

```
┌─────────────┐         ┌──────────────┐         ┌──────────────┐
│   Browser   │────────▶│    Nginx     │────────▶│  Laravel API │
│  (Frontend) │         │  (Port 80)   │         │  (PHP-FPM)   │
└─────────────┘◀────────└──────────────┘◀────────└──────────────┘
      │                                                   │
      │                                                   │
      │                                                   ▼
      │                                            ┌──────────────┐
      │                                            │   Database   │
      │                                            │ MySQL/Postgre│
      └────────────────────────────────────────────└──────────────┘
         (Requisições AJAX/Fetch para API REST)
```

## 📦 Padrões Utilizados

- **Backend**: MVC (Model-View-Controller) via Laravel
- **Frontend**: Organização modular por features
- **API**: RESTful com autenticação via Sanctum (tokens)
- **Containerização**: Docker multi-stage builds
- **Proxy Reverso**: Nginx para servir frontend e rotear API