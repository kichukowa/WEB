FROM ubuntu:18.04

# Install Apache and copy the static website files
RUN apt-get update && apt-get install -y apache2
COPY . /var/www/html/

# Expose port 90
EXPOSE 90

# Start the Apache server
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
