sudo systemctl reload nginx
sudo service php5.6-fpm restart
sudo service dklab_realplexor reload
sudo service redis-server restart

redis-cli ping
