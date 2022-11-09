#!/bin/sh

cd /var/www/1chna/scripts
pgrep -f 'serverstatus.php' || php5 serverstatus.php&
