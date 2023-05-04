#Image de bind9
FROM ubuntu/bind9


#Récupéré et mettre à jour les fichers de configurations
RUN apt-get update && apt-get install -y bind9

#Copier les fichier dns dans etc/bind/
COPY named.conf /etc/bind/

#Crée le dossier /var/log/named
RUN mkdir /var/log/named

#Intaller nano et vim
RUN apt-get install nano -y

#Ouvrir le port 53 avec tcp et udp
EXPOSE 53/tcp
EXPOSE 53/udp

#Lancer le service bind9
CMD ["/usr/sbin/named","-g"]
