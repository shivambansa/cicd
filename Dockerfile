# Use an official WordPress image as the base image
FROM wordpress:latest

# Set environment variables for WordPress
ENV WORDPRESS_DB_HOST your-cloud-sql-instance-connection-string
ENV WORDPRESS_DB_USER your-db-username
ENV WORDPRESS_DB_PASSWORD your-db-password
ENV WORDPRESS_DB_NAME your-db-name

# Expose port 80
EXPOSE 8080

# Copy the custom configuration file
COPY ./wp-config.php /var/www/html/wp-config.php
