ARG PHP_VERSION=8.5
 
FROM php:${PHP_VERSION}-apache
    
# Install MySQL extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli
 
# Enable Apache mod_rewrite
RUN a2enmod rewrite
 
# Allow .htaccess overrides
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
 
# Copy LavaLust application
COPY . /var/www/html/
 
# Point Apache document root to public/
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
 
# Update Apache VirtualHost document root
RUN sed -i "s|DocumentRoot /var/www/html|DocumentRoot ${APACHE_DOCUMENT_ROOT}|g" \
    /etc/apache2/sites-available/000-default.conf
 
# Update Apache Directory configuration
RUN sed -i "s|<Directory /var/www/html>|<Directory ${APACHE_DOCUMENT_ROOT}>|g" \
    /etc/apache2/apache2.conf
 
# Fix permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
 
EXPOSE 80