FROM nginx:1.15.3

ADD vhost.conf /etc/nginx/conf.d/default.conf
