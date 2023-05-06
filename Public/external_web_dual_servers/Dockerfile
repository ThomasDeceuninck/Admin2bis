FROM ubuntu/apache2

ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update
RUN apt-get -y install systemd
RUN apt-get -y install apache2
RUN apt-get -y install apache2 apache2-utils
RUN apt-get -y install php
RUN apt-get -y install php-common php-mysql php-xml php-xmlrpc php-curl php-gd php-imagick php-cli php-dev php-imap php-mbstring php-opcache ph>RUN apt-get -y install libapache2-mod-php
RUN apt-get -y install vim nano
RUN apt-get -y install net-tools
RUN apt-get -y install iputils-ping

RUN mkdir /var/www/html/l2-6.ephec-ti.be
RUN mkdir /var/www/html/l2-6.ephec-ti.be/logs
RUN mkdir /var/www/html/l2-6.ephec-ti.be/public_html

RUN mkdir /var/www/html/b2b.l2-6.ephec-ti.be
RUN mkdir /var/www/html/b2b.l2-6.ephec-ti.be/logs
RUN mkdir /var/www/html/b2b.l2-6.ephec-ti.be/public_html

COPY main/index.html /var/www/html/l2-6.ephec-ti.be/public_html/
COPY b2b/index.html /var/www/html/b2b.l2-6.ephec-ti.be/public_html/

COPY l2-6.ephec-ti.be.conf /etc/apache2/sites-available/
COPY b2b.l2-6.ephec-ti.be.conf /etc/apache2/sites-available/

RUN a2ensite l2-6.ephec-ti.be
RUN a2ensite b2b.l2-6.ephec-ti.be

EXPOSE 80/tcp