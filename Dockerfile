# Use an official WordPress image as the base image
FROM wordpress:latest

# Set environment variables for WordPress
ENV WORDPRESS_DB_HOST 10.3.0.6:3306
ENV WORDPRESS_DB_USER root
ENV WORDPRESS_DB_PASSWORD root
ENV WORDPRESS_DB_NAME shivam

# Expose port 80
EXPOSE 8080

# Copy the custom configuration file
COPY ./wp-config.php /var/www/html/wp-config.php
