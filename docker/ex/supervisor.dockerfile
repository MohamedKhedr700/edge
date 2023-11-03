FROM php:8.2-fpm

# Install supervisord
RUN apt-get update && apt-get upgrade -y && apt-get install -y supervisor

# Make supervisor log directory
RUN mkdir -p /var/log/supervisor

# Copy local supervisord.conf to the conf.d directory
COPY /docker/worker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Start supervisord
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]