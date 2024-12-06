# Usar a imagem oficial do PHP com Apache
FROM php:7.4-apache

# Habilitar mod_rewrite (necessário para muitas aplicações PHP)
RUN a2enmod rewrite

# Definir o ServerName para suprimir a mensagem de erro
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copiar os arquivos do seu projeto para o diretório do Apache
COPY . /var/www/html/

# Expor a porta 80 para o Apache
EXPOSE 80
