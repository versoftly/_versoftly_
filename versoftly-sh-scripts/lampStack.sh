sudo apt install apache2
sudo ufw app list
sudo ufw app info "Apache Full"
sudo ufw allow "Apache Full"
sudo apt install curl
sudo apt install mysql-server
sudo mysql_secure_installation
sudo mysql
sudo apt install php libapache2-mod-php php-mysql
sudo nano /etc/apache2/mods-enabled/dir.conf
sudo systemctl restart apache2
sudo systemctl status apache2
sudo mkdir -p /var/www/versoftly
sudo chown -R $USER:$USER /var/www/versoftly
sudo chmod -R 755 /var/www
sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/versoftly.conf
cd /etc/apache2/sites-available
sudo nano versoftly.conf
sudo a2ensite versoftly.conf
sudo a2dissite 000-default.conf
systemctl reload apache2
sudo apache2ctl configtest
sudo systemctl restart apache2
sudo systemctl status apache2
sudo nano /etc/hosts