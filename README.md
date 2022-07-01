# GPIOoverPHP
How to control GPIO´s over PHP on a Raspberry

## install Webserver on Respberry PI


[![Use Raspberry Pi as Webserver](http://img.youtube.com/vi/2Hr6uK9968g/0.jpg)](http://www.youtube.com/watch?v=2Hr6uK9968g "Use Raspberry Pi as Webserver")


```
sudo apt install apache2 -y
sudo apt install php libapache2-mod-php -y
```


## Presetting Raspberry 

clone Github rep
```
git clone https://github.com/LutzEmbeddedTec/GPIOoverPHP.git

```

copie files to the destination

```
sudo cp index.php /var/www/html/
sudo rm /var/www/html/index.html

```

change in the PHP file the destination of your Pyhton script


```
sudo nano /var/www/html/index.php
```


Add webser to GPIO permission group

```
sudo usermod -aG gpio www-data
```

restart apach server

```
sudo service apache2 restart
```


