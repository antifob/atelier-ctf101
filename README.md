# Atelier - Introduction aux CTFs

Court atelier sur les CTFs pour les étudiants de l'UQAM. La
présentation se veut articulée autour de l'aspect éducatif des
CTFs. C'est-à-dire autour des apprentissages que les participants ont
l'occasion de faire et leur impact sur leurs compétences à programmer.

L'atelier comprend quatre (4) exercices; 3 Web et 1 _forensic_.


## Préparation

### Présentation

```
apt-get update
apt-get -y install curl make texlive-latex-recommended texlive-pictures texlive-lang-french
curl -LO https://github.com/jgm/pandoc/releases/download/3.0.1/pandoc-3.0.1-1-amd64.deb
apt-get install ./pandoc-3.0.1-1-amd64.deb
make
```

### Exercices

```
apt-get update
apt-get -y install ftpd nginx-light php-fpm
cp ./conf/nginx.conf /etc/nginx/sites-enabled/default
tar -C ./htdocs/ -f- -c | tar -C /var/www/html/ -f- -x
usermod -s/bin/false -m ageei
printf 'ageei:afbc604b82040bcbb659c32bd21bafca\n' | chpasswd ageei
printf 'ageei\n' >>/etc/ftpchroot
systemctl restart nginx
```
