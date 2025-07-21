# Use the official PHP image with Apache
FROM php:7.4-apache

# Enable mod_rewrite for Apache (optional for routing)
RUN a2enmod rewrite

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the current directory contents into the container
COPY . .

# Expose port 80 to be accessible outside the container
EXPOSE 80