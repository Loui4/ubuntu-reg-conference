FROM php:7.4-cli

COPY . /usr/src/app

RUN php init-database.php

EXPOSE 80

CMD [ "php","-s","localhost:80" ]

