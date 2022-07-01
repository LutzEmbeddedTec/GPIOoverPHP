# GPIOoverPHP
How to control GPIO´s over PHP on a Raspberry

##install Webserver on Respberry PI

https://youtu.be/2Hr6uK9968g


## Presetting Raspberry 

Add webser to GPIO permission group

```
sudo usermod -aG gpio www-data
```

restart apach server

```
sudo service apache2 restart
```
