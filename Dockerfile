
FROM eboraas/apache-php

RUN apt-get update && apt-get install -y nodejs

# RUN npm install -g grunt-cli

EXPOSE 8089

EXPOSE 8090

ADD . /var/www/html

RUN rm -rf /etc/apache2/sites-enabled/*

ADD config/site.conf /etc/apache2/sites-enabled/

RUN a2enmod proxy_http 

RUN service apache2 restart

WORKDIR /var/www/html