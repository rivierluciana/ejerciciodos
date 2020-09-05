FROM nginx:stable-alpine

ADD ./nginx.conf /etc/nginx/nginx.conf
ADD ./vhost_local.conf /etc/nginx/conf.d/default.conf

ADD . /var/www
