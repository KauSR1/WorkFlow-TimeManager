🕐 WorkFlow-TimeManager

Sistema Web de Controle de Ponto e Gestão de Atividades

O WorkFlow-TimeManager é um sistema online para registro de jornada, controle de pausas, acompanhamento de atividades e cálculo automático de horas. Desenvolvido para uso pessoal e profissional, com evolução contínua e base preparada para escalabilidade.

📌 Visão Geral

O sistema permite registrar toda a rotina diária de trabalho, visualizar o histórico em formato de timeline e acompanhar cálculos automáticos de horas trabalhadas e tempo de pausa.

Atualmente conta com uma interface funcional em HTML/CSS/JS e um backend em Laravel, com planos de migração futura para Java/Spring Boot.

⚙️ Tecnologias
Front-end (Atual)

HTML5

CSS3

JavaScript (puro)

Armazenamento local via localStorage

Back-end (Atual)

PHP 7.4

Laravel 8.83.29

MySQL

Back-end (Planejado)

Java 8

Spring Boot

API REST padronizada

🎯 Funcionalidades
Front-end (Concluído)

Relógio em tempo real (data e hora)

Registro de Entrada, Pausa, Retorno e Saída

Timeline dinâmica de registros

Cálculo automático de:

Horas trabalhadas

Tempo total de pausa

Saída prevista

Descrição de atividades por registro

Lista de atividades do dia

Layout responsivo

Tela de login

Persistência de dados via localStorage

Back-end (Em desenvolvimento)

API REST para integração com o front-end

Autenticação com:

Login

Criação de usuário

Recuperação de senha

Banco de dados estruturado para registros diários

Salvamento de histórico

Funcionalidades futuras

Calendário mensal

Relatórios e dashboards com gráficos

Exportação de dados (PDF, Excel)

Histórico completo por período

Suporte a múltiplos usuários e níveis de permissão

🛠️ Instalação
Requisitos

PHP 7.4+

Composer

MySQL

Laravel 8.x

Passos
git clone https://github.com/KauSR1/WorkFlow-TimeManager.git
cd WorkFlow-TimeManager
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

📌 Status do Projeto

Versão atual: 1.0.0
Última atualização: Outubro/2025
Status: Desenvolvimento ativo

O projeto já conta com:

Estrutura completa em Laravel

Autenticação inicial

Banco de dados funcional

Front-end 100% operacional

📄 Licença

Este projeto pode utilizar uma licença livre (ex.: MIT).
Caso deseje, posso gerar a licença e incluí-la no repositório.

📷 Capturas de Tela

(<img width="1906" height="901" alt="image" src="https://github.com/user-attachments/assets/0451d749-9ee4-4eea-bf2e-b4c41eb94c06" />
)
