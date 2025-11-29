## Dockerfile - A Usar

# 1. IMAGEM BASE
FROM nginx:stable-alpine

# 2. COPIA O ARQUIVO DE CONFIGURAÇÃO CUSTOMIZADO
COPY ./docker/nginx.conf /etc/nginx/conf.d/default.conf

# 3. COPIA OS ARQUIVOS PÚBLICOS
# O context é a raiz, então procuramos por app/public
COPY app/public /usr/share/nginx/html

# 4. COPIA A PASTA SOURCE (SRC)
# O context é a raiz, então procuramos por app/src
COPY app/src /usr/share/nginx/src

# 5. PORTA
EXPOSE 80