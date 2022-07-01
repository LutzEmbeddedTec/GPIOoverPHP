# GPIOoverPHP
How to control GPIO´s over PHP on a Raspberry

## install Webserver on Respberry PI


[![Use Raspberry Pi as Webserver](http://img.youtube.com/vi/2Hr6uK9968g/0.jpg)](http://www.youtube.com/watch?v=2Hr6uK9968g "Use Raspberry Pi as Webserver")


```
sudo apt install apache2 -y
sudo apt install php libapache2-mod-php -y
```


## Presetting Raspberry 



git clone https://github.com/LutzEmbeddedTec/GPIOoverPHP.git

sudo cp index.php /var/www/html/
sudo rm /var/www/html/index.html

Add webser to GPIO permission group

```
sudo usermod -aG gpio www-data
```

restart apach server

```
sudo service apache2 restart
```
