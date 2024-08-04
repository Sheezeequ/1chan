1chna.ru  
DUMP  

sudo apt install software-properties-common  
sudo apt autoremove  
add-apt-repository ppa:ondrej/php  
sudo apt-get update  
sudo apt-get install php5.6-fpm php5.6-cli php5.6-common php5.6-curl php5.6-mbstring php5.6-mysql php5.6-xml php5.6-gd php5.6-zip php5.6-bcmath php5.6-redis  
sudo apt-get install ca-certificates apt-transport-https  
sudo apt-get install wget git zip unzip  
sudo apt-get install nginx  
sudo apt-get install mysql-server  
mysql_secure_installation  
sudo apt-get install build-essential tcl redis-server  
cd /opt/  
git clone https://github.com/DmitryKoterov/dklab_realplexor  
sudo apt-get install gcc libboost1.48 libev4 libev-dev libmemcached-dev  
sudo apt-get install libboost-all-dev  
cd ./dklab_realplexor/cpp/  
nano Make.sh  
bash ./Make.sh  
ln -s /opt/dklab_realplexor/dklab_realplexor.init /etc/init.d/dklab_realplexor  
service dklab_realplexor reload  
cd /var/www/  
git clone https://github.com/Sheezeequ/1chan  
mysql -h localhost -u root -p  
mysql -u root -p 1chan < /var/www/1chna/dump.sql  
cd 1chna  
mv rest.sh ~/rest.sh  
mv snippets.zip ~/snippets.zip  
mv sites-available.zip ~/sites-available.zip  
cd ./www/sxd/  
chmod 777 backup  
chmod 666 cfg.php  
chmod 666 ses.php  
cd ../  
mv phpMyAdmin-4.8.1-all-languages.zip ~/phpMyAdmin-4.8.1-all-languages.zip  
cd ~  
unzip phpMyAdmin-4.8.1-all-languages.zip  
mv phpMyAdmin-4.8.1-all-languages /usr/share/phpmyadmin  
unzip snippets.zip  
cd snippets  
mv phpmyadmin-location.conf /etc/nginx/snippets/phpmyadmin-location.conf  
cd ~  
unzip sites-available.zip  
cd sites-available  
mv 1chan.conf /etc/nginx/sites-available/1chan.conf  
cd ~  
ln -s /etc/nginx/sites-available/1chan.conf /etc/nginx/sites-enabled/1chan.conf  
sudo reboot  
sudo service redis-server stop  
sudo apt-get install rdiff-backup  
sudo rdiff-backup --force -r now /var/www/1chna/www/sxd/redis/dump.rdb /var/lib/redis/dump.rdb  
sudo service redis-server start  
sudo apt-get install p7zip-full  
cd ~  
./rest.sh  
apt-get install php5.6-imagick imagemagick  
