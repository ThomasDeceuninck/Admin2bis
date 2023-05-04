FROM ubuntu/apache2

ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update
RUN apt-get -y install systemd
RUN apt-get -y install apache2
RUN apt-get -y install apache2 apache2-utils
RUN apt-get -y install php
RUN apt-get -y install php-common php-mysql php-xml php-xmlrpc php-curl php-gd php-imagick php-cli php-dev php-imap php-mbstring php-o>
RUN apt-get -y install libapache2-mod-php
RUN apt-get -y install vim nano
RUN apt-get -y install net-tools
RUN apt-get -y install iputils-ping

COPY apache2.conf /etc/apache2/
COPY b2b_index.php /var/www/html/

EXPOSE 80/tcp