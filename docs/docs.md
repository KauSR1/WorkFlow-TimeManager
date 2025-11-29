# 📁 Estrutura do Projeto - Sistema de Controle de Ponto

`── app/                  <-- APLICAÇÃO FRONT-END (HTML, CSS, JavaScript)
│   ├── src/              
│   │   ├── core/         <- Core da Aplicação (Configurações, Index)
│   │   │   ├── config.js   (Configurações globais)
│   │   │   └── index.js    (Ponto de inicialização do JS)
│   │   ├── features/     <- Organização por Funcionalidade/Feature
│   │   │   ├── auth/     <- Login, Logout, Registro (Usa service para API)
│   │   │   │   ├── auth.js   (Lógica da página de autenticação)
│   │   │   │   └── components/
│   │   │   ├── tracker/  <- Controle de Ponto (Relógio, Botões, Timeline)
│   │   │   │   ├── tracker.js (Lógica da página e interações)
│   │   │   │   └── components/
│   │   │   └── reports/  <- Calendário, Relatórios, Exportação
│   │   ├── services/     <- Módulo de Comunicação com a API (fetch/axios)
│   │   │   ├── authService.js (Funções de API para /auth)
│   │   │   └── trackerService.js (Funções de API para /registers)
│   │   ├── styles/       <- CSS Global
│   │   │   ├── global.css  (Estilos de reset e básicos)
│   │   │   └── themes/     (Temas ou variáveis CSS)
│   │   └── utils/        <- Funções Helpers (Formatação de Data, Cálculo de Horas)
│   ├── public/           <- Arquivos Estáticos Servidos Diretamente
│   │   ├── assets/       <- Mídias (Imagens, Ícones, Fontes)
│   │   └── index.html    <- O HTML principal
│   ├── package.json      <- Dependências do FE (se usar NPM/Webpack)
│   └── README.md         <- Documentação específica do Front-end
│
├── api/                  <-- APLICAÇÃO BACK-END (Java Spring Boot OU PHP)
│   ├── src/
│   │   ├── main/
│   │   │   ├── java/ (ou php/)
│   │   │   │   └── com/timetracker/
│   │   │   │       ├── controller/   <- Recebe as requisições (API REST)
│   │   │   ├── service/    <- Lógica de Negócio Pura
│   │   │   ├── model/      <- Entidades / Mapeamento de Tabela (ORM)
│   │   │   └── config/     <- Segurança, Conexão com DB, Configurações
│   │   └── resources/      <- Arquivos de configuração, como application.properties (Java)
│   ├── pom.xml (Maven) OU composer.json (PHP)
│   └── README.md
│
├── database/             
│   ├── migrations/       <- Scripts SQL de Migração (Criação/Alteração de Tabela)
│   └── seeds/            <- Scripts SQL para popular o DB com dados iniciais
│
├── .github/              <- Configurações de CI/CD (Github Actions)
│   └── workflows/
│       └── build.yml
│
├── docs/                 <- Documentação e Especificações
│   └── swagger.yaml      <- Especificação da API (OpenAPI)
│
├── .gitignore            <- Arquivos a serem ignorados (node_modules, logs, etc.)
├── Dockerfile            <- Instruções para Contêinerização (Se usar Docker)
└── README.md             <- Documentação Geral do Projeto
