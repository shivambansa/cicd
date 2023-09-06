FROM wordpress:latest

# Set environment variables for WordPress
ENV WORDPRESS_DB_HOST 10.3.0.6:3306
ENV WORDPRESS_DB_USER root
ENV WORDPRESS_DB_PASSWORD root
ENV WORDPRESS_DB_NAME shivam

# Copy the custom configuration file
COPY ./wp-config.php /var/www/html/wp-config.php

# Expose port 80
EXPOSE 8080

# Start the PHP-FPM daemon
CMD ["apache2-foreground"]

# Set the port environment variable
ENV PORT 8080
