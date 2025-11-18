FROM nginx:alpine

RUN rm /etc/nginx/conf.d/default.conf || true
COPY default.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www/html