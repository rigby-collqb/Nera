# Usar a imagem oficial do PHP com Apache
FROM php:7.4-apache

# Habilitar o mod_rewrite (necessário para muitas aplicações PHP)
RUN a2enmod rewrite

# Copiar os arquivos do seu projeto para o diretório do Apache
COPY . /var/www/html/

# Expor a porta 80
EXPOSE 80
