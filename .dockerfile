FROM caixia/lnmp
MAINTAINER caixia
RUN php composer.phar install
RUN php-fpm
RUN nginx
WORKDIR /data/laravel_blog/src
EXPOSE  80
VOLUME ["/data"]